<?php 


Class Feedback_model extends CI_Model
{
	public function getAllGroups()
        {
            $query = $this->db->query('SELECT departmentname,departmentid FROM department');
            return $query->result();
        }

        public function getallnames()
        {
        	$query = $this->db->query('SELECT staff_id,sname,slname FROM staffs');
            return $query->result();
        }

        public function insert($data)
        {
            $this->db->insert('feedback',$data);
        }
        
}