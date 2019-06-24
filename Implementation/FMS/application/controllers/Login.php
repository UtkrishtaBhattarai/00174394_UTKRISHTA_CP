<?php 


Class Login extends CI_Controller
{	
	public function __construct()
		{
			parent::__construct();
			$this->load->model('Login_model');
			$this->load->database();
		}
		public function index()
		{
			// $data['title'] = 'Login';
			###$data['posts']=$this->Post_model->get_posts();
			
			$this->load->view('login/index');

		}

		public function check()
		{
			
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[10]');

			if ($this->form_validation->run()==False) 
			{
				$data=array(
				'errors'=> validation_errors()

			);
				$this->session->set_flashdata($data);
				redirect('login');
			} //for if 

			else
			{
				$username= $this->input->post('username');
				$password= md5($this->input->post('password'));
				$count=$this->Login_model->login($username,$password); //for counting if user exists
			$result=$this->Login_model->getid($username,$password)->row();
			$id=$result->id;
			$getname=$this->Login_model->getname($username,$password)->row();
			$name=$getname->fname;
			

			if ($count==True) 
			{
				$this->session->set_userdata('uid',$id); //set user id
				$this->session->set_userdata('uname',$name);//for fname   
				$this->session->set_flashdata('login_success','You are now logged in');
       			 redirect(base_url('details'));




			
			}//else if bhitra if ko bracket

			else
			{
				$this->session->set_flashdata('login_fail','There was some problem logging you in');
				redirect('login');
			}//else bhitra ko else ko bracket
			}//for else
			

		} //for function closure

	}//for class