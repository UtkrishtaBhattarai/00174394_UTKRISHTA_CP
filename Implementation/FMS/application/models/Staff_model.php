<?php 


Class Staff_model extends CI_Model
{
	public function getid($deptname)
	{
		$query='select depaertmentid from department where depaertmentname='.$deptname;
		
	}

	public function addstaff($data)
	{
		print_r($data);
		exit;
	}


	
}