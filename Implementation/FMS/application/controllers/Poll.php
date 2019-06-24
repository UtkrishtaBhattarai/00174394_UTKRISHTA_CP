<?php
	class Poll extends CI_Controller{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Poll_model');
			$this->load->model('AddPoll_model');
		}
		public function index()
		{
			$data['count']=$this->Poll_model->checkvoted();
			$pollcount['check']= $this->AddPoll_model->countpoll();
			if ($pollcount['check']==0) 
			{
				echo '<h1><p align="center">No Poll Found!! Visit Later..</p></h1>';
				echo '<p align="center"><a href="details">GoBack</a></p>';
				exit();
			}
			$data['poll']=$this->Poll_model->polldetails();
			$data['getdata']=$this->Poll_model->getpollresult();
			$this->load->view('templates/header');
			$this->load->view('poll/index', $data);
			$this->load->view('templates/footer');
			//$this->Poll_model->polldetails();
		}
		public function votedon()
		{

			$this->form_validation->set_rules('opt1','Option 1','required');

		if($this->form_validation->run()==False)
		{  
		$data=array(
		'errors'=> validation_errors()

		);
		$this->session->set_flashdata($data);
		redirect('poll');
	
	}  


	else
	{
			$poll_id= $this->input->post('txthidden');
			$userid=$this->session->userdata('uid');
			$votedon=$this->input->post('opt1');
			$this->Poll_model->votedon([
			'id'=>$userid,
			'poll_id'=>$poll_id,
			'voted_on'=>$votedon
			]);
			
			$data=array(
		'successful'=>'Voted Successfully');
		$this->session->set_flashdata($data);

		redirect('Poll');
		}
		
			
			
		}

		public function pollget()
		{

			//$data['getdata']=$this->Poll_model->getpollresult();
			
			
		}

	}