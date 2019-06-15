<?php
Class AddPoll_model extends CI_Model
{
	public function create_poll($data)
	{
		$this->db->insert('create_poll',$data);
		
	}
}