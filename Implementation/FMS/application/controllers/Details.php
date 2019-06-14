<?php 



Class Details extends CI_Controller
{
	public function __construct()
		{
			parent::__construct();
			$this->load->model('Dashboard_model');
			$this->load->database();
		}
		public function index()
		{
			$data['detail']=$this->Dashboard_model->getdetails();

			$this->load->view('templates/header');
			$this->load->view('details/index', $data);
			$this->load->view('templates/footer');
			
		}

		public function edit()
		{
			$fname=$this->input->post('fname');
			$lname=$this->input->post('lname');
			$address=$this->input->post('address');
			$deptname=$this->input->post('deptname');
			$email=$this->input->post('email');
			$username=$this->input->post('username');
			$comment=$this->input->post('comment');

			$data=array
			([
				
			]);

			$this->Dashboard_model->update($fname,
			$lname,
			$deptname,
			$address,
			$email,
			$username,
			$comment);

		}

}