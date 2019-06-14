<?php 
class Dept_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function adddept($deptname)
    {
        $condition = "departmentname =" . "'" . $deptname . "'";
		$this->db->select('*');
		$this->db->from('department');
		$this->db->where($condition);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 0) 
		{

// Query to insert data in database
		$this->db->insert('department',$deptname);
		if ($this->db->affected_rows() > 0) //from here affected data can be known
		{
            return "Inserted";
            exit;
		}
}

 else 
 {
return false;
}
    }
}
