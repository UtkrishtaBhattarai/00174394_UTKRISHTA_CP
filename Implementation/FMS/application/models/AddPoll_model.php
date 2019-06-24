<?php
Class AddPoll_model extends CI_Model
{
	public function create_poll($data)
	{
		$this->db->insert('create_poll',$data);
		
	}

	public function getallpoll()
	{
		$query=$this->db->get('create_poll');
		$row = $query->result_array();
		return $row;
	}

	public function deletepoll($id)
	{
		$query=$this->db->query('DELETE FROM create_poll where poll_id='.$id);
	}

	public function countpoll()
	{
		return $this->db->count_all_results('create_poll'); 
	}
	public function getpollid()
	{
		$query=$this->db->query('SELECT poll_id from create_poll' );
		$value=$query->result();
	}

	public function getid()
	{
	$sql='SELECT COUNT(poll_id) from create_poll';
		$result =$this->db->query($sql);
          print_r($result);

     }
	public function getpollresulta()
	{
	$sql='SELECT poll_id from create_poll';
		$result =$this->db->query($sql);
         $count=$result->result();
         $num= $this->db->count_all_results('create_poll');
         foreach ($count as $cou ) 
         {
         	echo '<p hidden="">$cou->poll_id</p>';
         }
         if ($num==0) 
         {
         	
         	
         }
         else
         {
         	$query = $this->db->query("select voted_on, COUNT(poll_id) as 'Total_vote' ,(COUNT(poll_id)*100)/(SELECT COUNT(poll_id) FROM voted_on where poll_id=$cou->poll_id) as 'Percentage' 
 							from voted_on where poll_id=$cou->poll_id GROUP BY voted_on" );
		return ($query->result());
         }
		

		

		
	}
}