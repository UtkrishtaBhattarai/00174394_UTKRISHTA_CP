<?php

Class Postn_model extends CI_Model
{
	public function createpost($title,$slug,$Description,$dateofissue,$dateofexpiry)
	// parameters are passed from the controller
	{
		
		$data=array
		(
			'title'=>$title,
			'slug'=>$slug,
			'body'=>$Description,
			'date_created'=>$dateofissue,
			'date_expire'=>$dateofexpiry
		);

$this->db->insert('posts',$data);

		if ($this->db->affected_rows() > 0) 
		{
			redirect('admin');
		}

 	else 
 	{
		return false;
	}
		



} 
}

