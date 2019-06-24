<?php 


Class Poll_model extends CI_Model
{
	public function polldetails()
	{
		$query=$this->db->get('create_poll',0);
		$row = $query->row();
		$id=$row->poll_id;
		$this->session->set_userdata('poll_id',$id);
		return $row;

	}
	public function votedon($data)
	{
		$this->db->insert('voted_on',$data);
	}

	public function checkvoted()
	{
	$poll_id=$this->session->userdata('poll_id');
	$id=$this->session->userdata('uid');
	$this->db->where('poll_id',$poll_id);
    $this->db->where('id',$id);
    return $this->db->count_all_results('voted_on'); 

	}
	public function getpollresult()
	{
		$id=$this->session->userdata('poll_id');
		$query = $this->db->query("select voted_on, COUNT(poll_id) as 'Total_vote' ,(COUNT(poll_id)*100)/(SELECT COUNT(poll_id) FROM voted_on where poll_id=$id) as 'Percentage' 
 							from voted_on where poll_id=$id GROUP BY voted_on" );
		return ($query->result());

		

		
	}

	}
	