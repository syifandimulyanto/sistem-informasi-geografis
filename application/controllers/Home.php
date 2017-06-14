<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->layout_path 	= 'layout/frontend/index';
		$this->load_view	= $this->config->item('frontend_path').'home/';
		$this->load->model('Globalmodel', 'modeldb'); 
		$this->load->model('Custommodel', 'customdb'); 
	}

	public function index() 
	{
		$data = array();
		$data['agent']		= $this->customdb->get_agent_list();
		$data['footer']		= TRUE;
		$data['category']	= $this->modeldb->get_list('category', array('status' => 1, 'flag' => 1) );
		$data['browse']		= $this->category();
		$data['menu']		= 'home';
		$this->template->load( $this->layout_path,  $this->load_view.'index',  $data );
	}

	private function category()
	{
		$category 	= $this->customdb->get_category();
		$data 		= array();
		foreach ($category as $key => $val) 
		{
			$slug = generate_slug($val->name);
			$data[$slug] = $val;
		}
		return $data;		
	}
}