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
		$data['detail']= $this->Feedback_model->getAllGroups();
		$data['alld']=$this->Staff_model->getall();
		$this->load->view('user/header');
		$this->load->view('addstaff/index',$data);
	}
	public function insert()
	{


		if ($_POST['btnupdate']=="Update")
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

			$this->load->library('encryption');
			$uname=$this->input->post('txtid');
			$fname= $this->input->post('txtfname');
			$lname= $this->input->post('txtlname');
			$dateofjoin= $this->input->post('dateofjoin');
			$address= $this->input->post('txtaddress');
			$email= $this->input->post('txtemail');
			$qualification=$this->input->post('txtqualification');
			$comments=$this->input->post('txtcomments');
			

			$this->Staff_model->updatestaff([
			'sname'=>$fname,
			'slname'=>$lname,
			'dateofjoin'=>$dateofjoin,
			'emailid'=>$email,
			'address'=>$address,
			'qualifications'=>$qualification,
			'comments'=>$comments
			],$uname);
			
			$data=array(
			'updated'=>'Sucessfully Updated');
			$this->session->set_flashdata($data);
			redirect('addstaff');
			}
		}
		
		else
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
			$this->load->library('encryption');
			$fname= $this->input->post('txtfname');
			$lname= $this->input->post('txtlname');
			$dateofjoin= $this->input->post('dateofjoin');
			$deptid=$this->input->post('dept');
			$address= $this->input->post('txtaddress');
			$email= $this->input->post('txtemail');
			$qualification=$this->input->post('txtqualification');
			$comments=$this->input->post('txtcomments');
			

			$this->Staff_model->addstaff([
			'sname'=>$fname,
			'slname'=>$lname,
			'dateofjoin'=>$dateofjoin,
			'departmentid'=>$deptid,
			'emailid'=>$email,
			'address'=>$address,
			'qualifications'=>$qualification,
			'comments'=>$comments
			]);
			
			$data=array(
			'successful'=>'Sucessfully Added');
			$this->session->set_flashdata($data);
			redirect('addstaff');
			}
		}
		
			
	}

	public function edit($id)
	{
		$val=$this->Staff_model->edit($id);
	}


	public function delete()
	{
		echo "delete";
	}
}


 ?>