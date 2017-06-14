<?php defined('BASEPATH') OR exit('No direct script access allowed');

class District extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if(empty($this->session->userdata('admins_session')->id))
			redirect(backend_url('auth/login'));

		$this->table 		= 'district';
		$this->layout_path 	= 'layout/backend/index';
		$this->load_view	= $this->config->item('backend_path').'district/';
		$this->load->model('Globalmodel', 'modeldb'); 
	}

	public function index() 
	{
		$data = array();
		$data['city'] 		 = $this->modeldb->get_list('city', ['status' => 1, 'flag' => 1]);
		$data['field'] 		 = array('NO.', 'District', 'Description', 'Actions');
		$data['page_title']  = 'District';
		$data['parent_menu'] = 'location';
		$data['menu']		 = 'district';
		$this->template->load( $this->layout_path,  $this->load_view.'index',  $data );
	}

	public function create() 
	{
		$data = array();
		$this->template->load( $this->layout_path,  $this->load_view.'form',  $data );
	}

	public function save()
	{
		$response = array();
		$this->form_validation->set_rules('name', 'Name cant be empty', 'required');
	    if ($this->form_validation->run() == TRUE)
	    {
	    	$param 					= $this->input->post();
	    	if($param['id'] == 0)
	    	{
	    		unset($param['id']);
	    		$param['status']		= 1;
		        $param['flag']			= 1;
	            $param['created_at']   	= date('Y-m-d H:i:s');
	            $save = $this->modeldb->insert($this->table, $param);

	            if($save > 0)
	            {
	            	$response['status'] 		= TRUE;
	            	$response['id']				= $save;
	            	$response['name']			= $param['name'];
	            	$response['type']			= 'save';
			    	$response['notif']['title'] = 'Success';
			    	$response['notif']['desc'] 	= 'Success save data';

	            }else
	            {
	            	$response['status'] 		= FALSE;
			    	$response['notif']['title'] = 'Error';
			    	$response['notif']['desc'] 	= 'Cant save data';
	            }

	    	}else
	    	{
	            $param['modified_at'] = date('Y-m-d H:i:s');
	            $save = $this->modeldb->update($this->table, $param, ['id' => $param['id']]);

	            if($save > 0)
	            {
	            	$response['status'] 		= TRUE;
	            	$response['type']			= 'update';
			    	$response['notif']['title'] = 'Success';
			    	$response['notif']['desc'] 	= 'Success update data';

	            }else
	            {
	            	$response['status'] 		= FALSE;
			    	$response['notif']['title'] = 'Error';
			    	$response['notif']['desc'] 	= 'Cant update data';
	            }
	    	}
	    }else
	    {
	    	$response['status'] 		= FALSE;
	    	$response['notif']['title'] = 'Error';
	    	$response['notif']['desc'] 	= validation_errors();
	    }

	    echo json_encode($response);
	}

	public function detail()
	{
		$id 		= $this->input->post('id');
		$district 	= $this->modeldb->get_list($this->table, ['status' => 1, 'flag' => 1, 'id' => $id]);
		echo json_encode($district[0]);
	}

	public function delete($id)
	{
		$param['status']	  = 0;
		$param['flag']		  = 0;
		$param['modified_at'] = date('Y-m-d H:i:s');
	    $save = $this->modeldb->update($this->table, $param, ['id' => $id]);
		
		redirect(backend_url('district'));
	}

	public function get_data()
	{
		$list 		= $this->modeldb->get_list($this->table, ['status' => 1, 'flag' => 1]);
		$data 		= array();
		$number 	= 1;
		foreach ($list as $key => $val) 
		{	
			$raw = array();
			$raw[]  = $number;
			$raw[] 	= $val->name;
			$raw[] 	= $val->description;
			$raw[]	= '<a href="'.backend_url('district/delete').'/'.$val->id.'" onclick="return confirmDelete($(this));" class="btn btn-simple btn-danger btn-icon remove pull-right"><i class="material-icons">close</i></a>
					   <a href="#" onclick="editData('.$val->id.')" class="btn btn-simple btn-warning btn-icon edit pull-right"><i class="fa fa-edit"></i></a>';
			$number++;
			$data[] = $raw;
		}

		$response = array();
		$response['draw'] 			= $this->input->post('draw');
		$response['recordsTotal'] 	= count($list);
		$response['data'] 			= $data;

		echo json_encode($response);
	}
}