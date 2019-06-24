<?php 

class Registration_model extends CI_Model
{
	public function create_users($data)
	{
		$condition = "username =" . "'" . $data['username'] . "'";
		$this->db->select('*');
		$this->db->from('registration');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 0) 
		{
		$this->db->insert('registration',$data);
		if ($this->db->affected_rows() > 0) //from here affected data can be known
		{
			return true;
		}
}
	}

	public function getusername($data)
	{
		$condition = "username =" . "'" . $data['username'] . "'";
		$this->db->select('*');
		$this->db->from('registration');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 1) 
		{
			return True;
		}
	}
}
		
	



