<?php
	class Addpoll extends CI_Controller{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Addpoll_model');
			$this->load->database();
		}
		public function index()
		{
			$data['title'] = 'Add poll';
			###$data['posts']=$this->Post_model->get_posts();
			$this->load->view('user/header');
			$this->load->view('addpoll/index', $data);
		}

		public function addpoll()
		{
			
			$this->form_validation->set_rules('txtques','Question','required');
			$this->form_validation->set_rules('txtopt1','Option1','required');
			$this->form_validation->set_rules('txtopt2','Option2','required');
			
		
		if($this->form_validation->run()==False)
		{   //if ko bracket
		
		$data=array(
		'errors'=> validation_errors()

		);
		$this->session->set_flashdata($data);
		redirect('addpoll');
		}  //if bracket ends 


	else
	{
			$this->load->library('encryption');
			$ques= $this->input->post('txtques');
			$Option1= $this->input->post('txtopt1');
			$Option2= $this->input->post('txtopt2');
			
			$this->Addpoll_model->create_poll([
			'ques'=>$ques,
			'opt1'=>$Option1,
			'opt2'=>$Option2
			]);
			
			$data=array(
			'successful'=>'Sucessfully Added');
			$this->session->set_flashdata($data);
			
			redirect('addpoll');
			//}
		}

	}
}
