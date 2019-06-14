<?php

Class Staffadd extends CI_Controller
{
	public function __construct()
		{
			
			parent::__construct();
			$this->load->database();
			$this->load->model('Feedback_model');
			$this->load->model('Staff_model');
		}
	public function index()
	{
		$name=$this->input->post('departmentname');
		$data['detail']= $this->Feedback_model->getAllGroups();
		$this->load->view('user/header');
		$this->load->view('addstaff/index',$data);
	}
	public function insert()
	{
	
			$this->form_validation->set_rules('txtfname','First Name','required');
			$this->form_validation->set_rules('txtlname','last Name','required');
			$this->form_validation->set_rules('dateofjoin','Date of Join','required');
			$this->form_validation->set_rules('txtqualification','Qualification','required');
			$this->form_validation->set_rules('txtcomments','Comments','required');

			if ($this->form_validation->run()==False) 
			{
				$data=array(

					'errors'=>validation_errors()
				);
				$this->session->set_flashdata($data);
				redirect('addstaff');
			}
			else
			{
				echo $_POST['dept'];
			$this->load->library('encryption');
			$fname= $this->input->post('txtfname');
			$lname= $this->input->post('txtlname');
			$dateofjoin= $this->input->post('dateofjoin');
			$qualification=$this->input->post('txtqualification');
			$comments=$this->input->post('txtcomments');

			$this->Staff_model->addstaff([
			'fname'=>$fname,
			'lname'=>$lname,
			'dateofjoin'=>$dateofjoin,
			'qualification'=>$qualification,
			'comments'=>$comments
			]);
			
			$data=array(
			'successful'=>'Sucessfully Registered');
			$this->session->set_flashdata($data);
			redirect('addstaff');
			}
			
	}
}


 ?>