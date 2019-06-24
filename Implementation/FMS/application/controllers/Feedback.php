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
			$data['staffs']=$this->Feedback_model->getallnames();
			$this->load->view('templates/header');
			$this->load->view('feedback/index',$data);
			$this->load->view('templates/footer');
		}

		public function savefeedback()
		{
			$this->load->helper(array('form', 'url')); //for loading helper function.
            $this->load->library('form_validation');
			$this->form_validation->set_rules('staff','Staff Name','required');
			$this->form_validation->set_rules('cmbacc','Accounts','required');
			$this->form_validation->set_rules('txtfee','Feedback','required');

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
				$cmbstaff=$_POST['staff'];
				$feedback=$_POST['txtfee'];
				$id=$this->session->userdata('uid');
				 $this->Feedback_model->insert([
				 	'staff_id'=>$cmbstaff,
				 	'id'=>$id,
				 	'feedback'=>$feedback				 	
				 ]);

			$data=array(
			'inserted'=>'Feedbacks Saved Successfully');
			$this->session->set_flashdata($data);
			
			redirect('Feedback');
			}
			
		}

	}