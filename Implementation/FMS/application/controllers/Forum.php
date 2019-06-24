<?php
	class Forum extends CI_Controller{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Forum_model');
			$this->load->database();
		}
		public function index()
		{
			$data['title'] = 'CommunityForum';
			$data['ques']=$this->Forum_model->questions();
			$this->load->view('templates/header');
			$this->load->view('forum/index', $data);
			$this->load->view('templates/footer');
		}
		public function addquery()
		{

		$this->form_validation->set_rules('query','Question','required');

		if($this->form_validation->run()==False)
		{  
		$data=array(
		'errors'=> validation_errors()

		);
		$this->session->set_flashdata($data);
		redirect('Community');
	
	}  


	else
	{
			$query= $this->input->post('query');
			$id=$this->session->userdata('uid');
			$this->Forum_model->addquery([
			'id'=>$id,
			'query'=>$query,
			]);
			
			$data=array(
		'successful'=>'Sucessfully Added');
		$this->session->set_flashdata($data);
		redirect('Community');
		}
		
		}

		public function addreply()
		{
			$this->form_validation->set_rules('txtans','Answer','required');
			if($this->form_validation->run()==False)
		{  
		$data=array(
		'errors'=> validation_errors()

		);
		$this->session->set_flashdata($data);
		redirect('Community');
	
	}  


	else
	{
			$answer= $this->input->post('txtans');
			$id=$this->session->userdata('uid');
			$qid=$this->input->post('qid');
			$this->Forum_model->reply([
			'qid'=>$qid,
			'id'=>$id,
			'answer'=>$answer,
			]);
			
			$data=array(
		'successful'=>'Sucessfully Added');
		$this->session->set_flashdata($data);
		redirect('Community');
		}
		}

	}