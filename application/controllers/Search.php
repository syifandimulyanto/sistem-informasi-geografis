<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->layout_path 	= 'layout/frontend/index';
		$this->load_view	= $this->config->item('frontend_path').'search/';
		$this->load->model('Globalmodel', 'modeldb'); 
		$this->load->model('Custommodel', 'customdb'); 
	}

	public function index() 
	{

		$param 	= $this->input->post();
		$list 	= $this->customdb->get_agent_list($param);
		$data = array();
		$data['list'] 		= json_encode($list);
		$data['facilities']	= $this->modeldb->get_list('facilities', array('status' => 1, 'flag' => 1) );
		$data['category']	= $this->modeldb->get_list('category', array('status' => 1, 'flag' => 1) );
		$data['district']	= $this->modeldb->get_list('district', array('status' => 1, 'flag' => 1) );
		$data['filter']		= $param;
		$data['footer']		= FALSE;
		$data['menu']		= 'search';
		$this->template->load( $this->layout_path,  $this->load_view.'index',  $data );
	}

	public function detail($slug) 
	{
		$detail 	= $this->modeldb->get_list('agent', array('slug' => $slug));
		$category 	= $this->modeldb->get_list('category', array('id' => $detail[0]->category_id) );

		$data 	= array();
		$data['detail'] 	= $detail[0];
		$data['category'] 	= $category[0];
		$data['images'] 	= $this->modeldb->get_list('agent_images', array('agent_id' => $detail[0]->id) );
		$data['facilities'] = $this->customdb->get_facilities( $detail[0]->id );
		$data['footer']		= TRUE;
		$data['menu']		= 'search';
		$this->template->load( $this->layout_path,  $this->load_view.'detail',  $data );
	}
}