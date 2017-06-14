<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Agent extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if(empty($this->session->userdata('admins_session')->id))
			redirect(backend_url('auth/login'));

		$this->table 		= 'agent';
		$this->layout_path 	= 'layout/backend/index';
		$this->load_view	= $this->config->item('backend_path').'agent/';
		$this->load->model('Globalmodel', 'modeldb'); 
	}

	public function index() 
	{
		$data = array();
		$data['field'] 				= array('NO.', 'Name', 'Information', 'Description', 'Actions');
		$data['page_title']  		= 'Agent';
		$data['parent_menu'] 		= 'agent';
		$data['menu']		 		= 'agent';
		$data['agent']				= $this->modeldb->get_list($this->table, array('flag' => 1));
		$data['agent_cnt']			= $this->modeldb->count($this->table, array('flag' => 1));
		$data['agent_remove']		= $this->modeldb->get_list($this->table, array('flag' => 0));
		$data['agent_remove_cnt']	= $this->modeldb->count($this->table, array('flag' => 0));
		$this->template->load( $this->layout_path,  $this->load_view.'index',  $data );
	}

	public function create() 
	{

		$this->form_validation->set_rules('name', 'Name cant be empty', 'required');
	    if ($this->form_validation->run() == TRUE)
	    {

	    	$param 		= $this->input->post();
	    	$facilities = $param['facilities'];
	    	$active 	= $param['active'];
	    	unset($param['facilities']);
	    	unset($param['image']);
	    	unset($param['active']);

	    	$param['slug']			= generate_slug($param['name']);
	    	$param['status']		= isset($active) ? 1 : 0;
	        $param['flag']			= 1;
            $param['created_at']   	= date('Y-m-d H:i:s');
            $save = $this->modeldb->insert($this->table, $param);

            if( $save > 0 )
            {
            	if(count($facilities) > 0)
            	{
	            	foreach ($facilities as $key => $val) 
	            	{
	            		$this->modeldb->insert('agent_facilities', 
	            							array(	'agent_id' => $save, 'facilities_id' => $val, 
	            									'status' => 1, 'flag' => 1, 'created_at' => date('Y-m-d H:i:s')
	            								) 
	            							);
	            	}
	            }

	            $path     = './uploads/agent/';
	            
                $pic = do_upload_multiple($attachName='image', $path);
                if ($pic) 
                {
                    foreach ($pic['status'] as $key => $value) 
                    {
                        if($value == 'success')  
                        {
                            $image[] = $pic['data'][$key]['file_name'];

                            $this->modeldb->insert('agent_images', 
	            							array(	'agent_id' => $save, 'path' => $path, 'image' => $pic['data'][$key]['file_name'], 
	            									'status' => 1, 'flag' => 1, 'created_at' => date('Y-m-d H:i:s')
	            								) 
	            							);

                        }
                    }
                }


                redirect(backend_url('agent'));
            }

	    }	
	    else
	    {
			$data = array();
			$data['category'] 	= $this->modeldb->get_list('category', array('status' => 1, 'flag' => 1));
			$data['facilities'] = $this->modeldb->get_list('facilities', array('status' => 1, 'flag' => 1));
			$data['district'] 	= $this->modeldb->get_list('district', array('status' => 1, 'flag' => 1));

			$this->template->load( $this->layout_path,  $this->load_view.'form',  $data );
		}
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
		$category 	= $this->modeldb->get_list($this->table, ['status' => 1, 'flag' => 1, 'id' => $id]);

		echo json_encode($category[0]);

	}

	public function delete($id)
	{
		$param['status']	  = 0;
		$param['flag']		  = 0;
		$param['modified_at'] = date('Y-m-d H:i:s');
	    $save = $this->modeldb->update($this->table, $param, ['id' => $id]);
		
		redirect(backend_url('category'));
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
			$raw[]	= '<a href="'.backend_url('category/delete').'/'.$val->id.'" onclick="return confirmDelete($(this));" class="btn btn-simple btn-danger btn-icon remove pull-right"><i class="material-icons">close</i></a>
					   <a href="#" onclick="editData('.$val->id.')" class="btn btn-simple btn-warning btn-icon edit pull-right"><i class="fa fa-edit"></i></a>';
			$number++;
			$data[] = $raw;
		}

		$response = array();
		$response['draw'] 			= $this->input->post('draw');
		$response['recordsTotal'] 	= sizeof($list);
		$response['data'] 			= $data;

		echo json_encode($response);
	}

}