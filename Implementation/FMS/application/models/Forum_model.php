<?php 

Class Forum_model extends CI_Model
{
	public function addquery($data)
	{
		 $this->db->insert('questions',$data);
	}

	public function questions()
	{
		$query = $this->db->query('SELECT questions.qid,questions.id,questions.date,questions.query,questions.date,registration.username from questions,registration WHERE registration.id=questions.id ORDER BY questions.qid DESC');
		//print_r($query->qid);
            return ($query->result());
	}

	public function show($id)
	{
		$query = $this->db->query("SELECT answer.ans_id,answer.id,answer.answer,registration.username,questions.qid from answers
            INNER JOIN questions ON answer.qid = questions.qid
            INNER JOIN registration ON answer.id = registration.id
           WHERE answer.qid='". $id ."' order by answer.ans_id desc");
	}
	public function reply($data)
	{
		$this->db->insert('answer',$data);
	}


}