<?php 


Class Staff_model extends CI_Model
{

	public function addstaff($data)
	{
		$this->db->insert('staffs',$data);
	}

	public function selectstaff()
	{
		$query=$this->db->query("SELECT staff_id,sname,slname,dateofjoin,emailid,address,qualifications,comments,d.departmentname FROM staffs as s inner join  department as d on s.departmentid=d.departmentid");
			return $query->result_array();
		}

		public function get_staff($slug=FALSE)
	{
		if ($slug===FALSE) 
		{
		$query=$this->db->query("SELECT staff_id,sname,slname,dateofjoin,emailid,address,qualifications,comments,d.departmentname FROM staffs as s inner join  department as d on s.departmentid=d.departmentid");
			return $query->result_array();
		}
		$query=$this->db->get_where('staffs',array('staff_id' => $slug));
		return $query->row_array();
	}

	public function getall()
	{
		$query=$this->db->query("SELECT * FROM staffs");
		return $query->result_array();	
	}
	public function edit($id)
	{
		$query=$this->db->query('SELECT * FROM staffs where staff_id='.$id);
		return $query->result_array();
	}

	public function updatestaff($data,$id)
	{
	
		$this->db->where('staff_id',$id);
 		if( $this->db->update('staffs',$data))
    	  {
    		return true;
    		}
      	else
     	{
       		   return false;
     	}
		
	}
	}
