<?php
	class Help extends CI_Controller{
		
		public function __construct()
		{
			parent::__construct();
			//$this->load->library('form_validation');
			$this->load->database();
			//$this->load->model('Dept_model');
		}
		public function index()
		{
			$data['title'] = 'Help';
			if(null ==($this->session->userdata('uid')))
			{
				$this->load->view('templates/header1');
			}
			else
			{
				$this->load->view('templates/header');
			}
			$this->load->view('help/index',$data);
		}

		
	}