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
			$data['post']=$this->Dashboard_model->get5posts();
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

			$this->Dashboard_model->update([
			'fname'=>$fname,
			'lname'=>$lname,
			'deptname'=>$deptname,
			'address'=>$address,
			'email'=>$email,
			'username'=>$username,
			'comment'=>$comment
			]);
			$data=array(
			'update'=>'Updated successfully');
			$this->session->set_flashdata($data);
			
			redirect('details');

		}
		public function delete()
		{
			$id=$this->session->userdata('uid');
			$this->Dashboard_model->delete($id);
			$this->session->unset_userdata('uid');
			redirect('login');
		}

}