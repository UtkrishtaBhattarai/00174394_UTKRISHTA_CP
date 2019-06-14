<?php
	class Staffs extends CI_Controller{
		
		public function __construct()
		{
			parent::__construct();
			#$this->load->model('Dashboard_model');
			$this->load->database();
		}
		public function index()
		{
			$data['title'] = 'Staffs';
			$this->load->view('templates/header');
			$this->load->view('staffs/index', $data);
			$this->load->view('templates/footer');
		}

	}