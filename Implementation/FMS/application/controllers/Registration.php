<?php
	class Registration extends CI_Controller{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Registration_model');
			$this->load->database();
			##$this->load->library('form_validation');
		}

		public function index()
		{
			$data="Registration";
			if(null ==($this->session->userdata('uid')))
			{
				$this->load->view('templates/header1');
			}
			else
			{
				$this->load->view('templates/header');
			}
			$this->load->view('registration/index', $data);
			$this->load->view('templates/footer');
		}
		public function insert()
		{
			
			$this->form_validation->set_rules('fname', 'First Name', 'required|alpha');
			$this->form_validation->set_rules('lname', 'Last Name', 'required|alpha');
			$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[10]');
			$this->form_validation->set_rules('address','Address','required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[registration.email]|min_length[5]|max_length[100]');
			$this->form_validation->set_rules('cpassword', 'Password Confirmation', 'required|matches[password]');
			$this->form_validation->set_rules('comment','Comment','required');
			
		
		if($this->form_validation->run()==False)
		{   //if ko bracket
		
		$data=array(
		'errors'=> validation_errors()

		);
		$this->session->set_flashdata($data);
		redirect('registration');
		}  //if bracket ends 


		else
		{
			$this->load->library('encryption');
			$fname= $this->input->post('fname');
			$lname= $this->input->post('lname');
			$deptname= $this->input->post('deptname');
			$address=$this->input->post('address');
			$email=$this->input->post('email');
			$username= $this->input->post('username');
			$password=md5($this->input->post('password'));
			$comment= $this->input->post('comment');


			//for checking if username exists and showing it in UI with the help of the session
			if ($this->Registration_model->getusername([
			'fname'=>$fname,
			'lname'=>$lname,
			'deptname'=>$deptname,
			'address'=>$address,
			'email'=>$email,
			'username'=>$username,
			'password'=>$password,
			'comment'=>$comment
			])==TRUE) 
			{
			$data=array(
			'unameexists'=>'Username already exists, Try other Username');
			$this->session->set_flashdata($data);
			
			redirect('registration');
			}



			$this->Registration_model->create_users([
			'fname'=>$fname,
			'lname'=>$lname,
			'deptname'=>$deptname,
			'address'=>$address,
			'email'=>$email,
			'username'=>$username,
			'password'=>$password,
			'comment'=>$comment
			]);
			$data=array(
			'successful'=>'Sucessfully Registered');
			$this->session->set_flashdata($data);
			
			redirect('registration');
			}
}


}

