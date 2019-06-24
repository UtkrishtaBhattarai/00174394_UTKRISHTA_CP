<?php
	class Feedbackview extends CI_Controller{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Feedbackview_model');
			$this->load->database();
		}
		public function index()
		{	$data['feedback']=$this->Feedbackview_model->getallfeedback();
			$this->load->view('user/header');
			$this->load->view('viewfeedback/index',$data);
		}

		

	}