<?php 


Class Feedback_model extends CI_Model
{
	public function getAllGroups()
        {
            $query = $this->db->query('SELECT departmentname,departmentid FROM department');
            return $query->result();
        }
        
}