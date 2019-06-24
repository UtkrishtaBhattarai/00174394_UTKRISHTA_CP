<?php
	class Staffs extends CI_Controller{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Staff_model');
			$this->load->database();
		}
		public function index()
		{
			$data['staff']=$this->Staff_model->selectstaff();
			$this->load->view('templates/header1');
			$this->load->view('staffs/index', $data);
			$this->load->view('templates/footer');
		}

		public function view($slug=NULL)
		{
			$data['staffs']=$this->Staff_model->get_staff($slug);
			if (empty($data['staffs'])) 
			{
				show_404();
				echo "Unsuccessful";
			}
			$this->load->view('templates/header1');
			$this->load->view('staffs/view', $data);
		}
	}

