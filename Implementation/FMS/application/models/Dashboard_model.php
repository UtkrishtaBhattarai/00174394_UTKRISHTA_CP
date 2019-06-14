<?php 


Class Dashboard_model extends CI_Model
{
	public function getdetails()
	{
		$id=$this->session->userdata('uid');
		$query = $this->db->query("SELECT * FROM registration WHERE id='$id'");
		$row = $query->row();
		return $row;
	}
	public function update($fname,$lname,$deptname,$address,$email,$username,$comment)
	{
		$data=array($fname,$lname,$deptname,$address,$email,$username,$comment);

		$id=$this->session->userdata('uid');
		$this->db->where('id',$id);

 		if( $this->db->update('registration',$data[]))
    	  {
    		return true;
    		$session=$this->session->set_flashdata('Successful','You are successfully registered in the system');
    		$this->load->view('dashboard',$session);
    		
     	  }
      	else
     	{
       		   return false;
     	}
		
	}
}