<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->table 		= 'users';
		$this->layout_path 	= 'layout/auth-backend';
		$this->load_view	= $this->config->item('backend_path').'auth/';
		$this->load->model('Globalmodel', 'modeldb'); 
	}

	public function index()
	{
		if( empty($this->session->userdata('admins_session')->id) )
		{
			redirect(backend_url('auth/login'));
		}
		else
		{
			redirect(backend_url('position'));
		}
		
	}

	public function login() 
	{
	    $this->form_validation->set_rules('email', 'Email cant be empty ', 'required');
	    $this->form_validation->set_rules('password', 'Password cant be empty ', 'required');
	    if ($this->form_validation->run() == TRUE)
      	{
      		$password 	= md5($this->input->post('password'));

      		$where = array();
      		$where['email'] 		= $this->input->post('email');
      		$where['password'] 		= $password;
      		
      		$auth = $this->modeldb->get_list($this->table, $where);

      		if(isset($auth[0]))
      		{
      			$this->session->set_userdata('admins_session',  $auth[0]);

      			redirect(backend_url('agent'));
      		}else{
      			$this->session->set_flashdata('__notif_type__', 'error');
	    		$this->session->set_flashdata('__notif_message__', 'Not found data');


	    		redirect(backend_url('auth/login'));
      		}
      	}
      	else
      	{

			$data = array();
			$this->template->load( $this->layout_path,  $this->load_view.'login',  $data );
		}
	}

	public function logout()
    {
        $this->session->sess_destroy();
        redirect(backend_url('auth/login'));
    }
}