<?php 
class Feedbackview_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function getallfeedback()
    {
    	$quw=$this->db->query('SELECT fname,lname,sname,slname,feedback,date from feedback as f inner join registration as r on f.id=r.id INNER join staffs as s on s.staff_id=f.feedbackid');
    	return ( $quw->result_array());
    }

 }