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
	public function update($data)
	{
		$id=$this->session->userdata('uid');
		$this->db->where('id',$id);

 		if( $this->db->update('registration',$data))
    	  {
    		return true;
    		}
      	else
     	{
       		   return false;
     	}
		
	}

	public function delete()
	{
		$id=$this->session->userdata('uid');

		$this->db->query('DELETE from registration where id='.$id);
	}
	public function get5posts()
	{
		$this->db->select('*');
		$this->db->from('posts');
		$this->db->limit(1);
		$query = $this->db->get();
		$posts= $query->result_array();
		foreach ($posts as $post ) 
		{
			return $post;
		}
	}

}