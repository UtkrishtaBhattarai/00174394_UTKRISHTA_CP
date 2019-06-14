<?php
	class Poll extends CI_Controller{
		
		public function __construct()
		{
			parent::__construct();
			#$this->load->model('Dashboard_model');
			$this->load->database();
		}
		public function index()
		{
			$data['title'] = 'Vote on Poll';
			###$data['posts']=$this->Post_model->get_posts();
			$this->load->view('templates/header');
			$this->load->view('poll/index', $data);
			$this->load->view('templates/footer');
		}

	}