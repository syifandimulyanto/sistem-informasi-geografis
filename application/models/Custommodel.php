<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Custommodel extends CI_Model 
{
	public function get_agent_list($param = FALSE)
	{
		$this->db->select('agent.*');
		$this->db->select('category.name as cat_name, category.icon');
		$this->db->select('agent_images.path, agent_images.image');
		$this->db->from('agent');
		$this->db->join('category', 'agent.category_id = category.id');
		$this->db->join('agent_images', 'agent_images.agent_id = agent.id');
		$this->db->join('agent_facilities', 'agent_facilities.agent_id = agent.id', 'LEFT');

		if( !empty( $param['q'] ) )
		{
			$this->db->like('agent.name', $param['q']);
		}

		if( !empty( $param['address'] ) )
		{
			$this->db->like('agent.address', $param['address']);
		}

		if( ( !empty( $param['category'] ) ) && ( $param['category'][0] != 'all' ) )
		{
			$this->db->where_in('agent.category_id', $param['category']);
		}

		if( !empty( $param['facilities'] ) )
		{
			$this->db->where_in('agent_facilities.facilities_id', $param['facilities']);
		}

		$this->db->order_by('agent.name', 'ASC');
		$this->db->group_by('agent.id');
		return $this->db->get()->result();
	}

	public function get_facilities($agent_id = FALSE)
	{
		$this->db->select('facilities.*');
		$this->db->from('facilities');
		$this->db->join('agent_facilities', 'agent_facilities.facilities_id = facilities.id', 'LEFT');
		if( $agent_id )
		{
			$this->db->where('agent_facilities.agent_id', $agent_id);
		}
		return $this->db->get()->result();
	}

	public function get_category()
	{
		$this->db->select('category.*');
		$this->db->select('COUNT(agent.category_id) as count');
		$this->db->from('category');
		$this->db->join('agent', 'agent.category_id = category.id');
		$this->db->order_by('category.name', 'ASC');
		$this->db->group_by('category.id');
		return $this->db->get()->result();
	}

}