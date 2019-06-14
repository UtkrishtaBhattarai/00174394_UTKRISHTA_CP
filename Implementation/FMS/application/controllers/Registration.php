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
			$this->load->view('templates/header');
			$this->load->view('registration/index', $data);
			$this->load->view('templates/footer');
		}
		public function insert()
		{
			$this->load->helper(array('form', 'url')); //for loading helper function.
            $this->load->library('form_validation');
			$this->form_validation->set_rules('username','Username','trim,|required|min_length[4]');
			$this->form_validation->set_rules('fname','Fname','required');
			$this->form_validation->set_rules('password','Password','trim|required|min_length[8]|max_length[20]');	
			$this->form_validation->set_rules('deptname','Deptname','required');
			$this->form_validation->set_rules('address','Address','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('username','Username','required');
			$this->form_validation->set_rules('password','Password','required');
			$this->form_validation->set_rules('password', 'Password Confirmation', 'required|matches[password]');
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

			#$chkusr=$this->Registration_model->create_users($data);
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
			//}

			
			
			
		

		

	}
}


}

