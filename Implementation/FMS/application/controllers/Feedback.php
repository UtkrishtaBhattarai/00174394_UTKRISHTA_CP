<?php
	class Feedback extends CI_Controller{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Feedback_model');
			$this->load->database();
		}
		public function index()
		{	
			$data['detail']= $this->Feedback_model->getAllGroups();
			$this->load->view('templates/header');
			$this->load->view('feedback/index',$data);
			$this->load->view('templates/footer');
		}

		public function savefeedback()
		{
			$this->load->helper(array('form', 'url')); //for loading helper function.
            $this->load->library('form_validation');
			$this->form_validation->set_rules('staffname','Username','required');
			$this->form_validation->set_rules('deptname','Department','required');
			$this->form_validation->set_rules('txtfee','Txtfee','required');

			if ($this->form_validation->run()==False) 
			{
				$data=array(

					'errors'=>validation_errors()
				);
				$this->session->set_flashdata($data);
				redirect('Feedback');
			}
			else
			{
				// $this->load->
			}
			
		}

	}