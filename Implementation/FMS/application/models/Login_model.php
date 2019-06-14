<?php 

Class Login_model extends CI_Model
{

public function login($username,$password) 

{
        $sql="select * from registration where
         username = '$username' && password = '$password' ";
         $result =$this->db->query($sql);
         $count=$result->num_rows();
         

         if ($count>0) 
         {
         	return True;
         }

         else
         {
         	return False;
         }

	}
	public function getid($username,$password)
	{

  	 	 $this->db->select('id');
    	$this->db->where('username',$username);
    		$this->db->where('password',$password);
   		 return $this->db->get('registration');
	}

	public function getname($username,$password)
	{

  	 	 $this->db->select('fname');
    	$this->db->where('username',$username);
    		$this->db->where('password',$password);
   		 return $this->db->get('registration');

   		 
	}
	
}



