<?php
	class Dept extends CI_Controller{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->database();
			$this->load->model('Dept_model');
		}
		public function index()
		{
			$data['title'] = 'Add department';
			$this->load->view('user/header');
			$this->load->view('department/index',$data);
		}

		Public function add()
		{
		$this->load->helper(array('form', 'url'));
		$this->form_validation->set_rules('departmentname','departmentname','required');

		if($this->form_validation->run()==False)
		{  
		$data=array(
		'errors'=> validation_errors()

		);
		$this->session->set_flashdata($data);
		redirect('departmentadd');
	
	}  


	else
	{
	
			$this->load->library('encryption');
			$deptname= $this->input->post('departmentname');
			
			$this->Dept_model->adddept([
			'departmentname'=>$deptname
			]);
			
			$data=array(
		'successful'=>'Sucessfully Registered');
		$this->session->set_flashdata($data);
		redirect('departmentadd');
		}
		
		}
	}