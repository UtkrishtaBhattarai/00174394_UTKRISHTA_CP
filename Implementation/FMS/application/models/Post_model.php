<?php

Class Post_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	public function get_posts($slug=FALSE)
	{
		if ($slug===FALSE) 
		{
			$query=$this->db->get('posts');
			return $query->result_array();
		}
		$query=$this->db->get_where('posts',array('id' => $slug));
		return $query->row_array();
	}
} 