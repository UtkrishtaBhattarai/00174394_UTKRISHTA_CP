<?php 
Class User extends CI_Controller
{

	public function __construct()
	{
		    parent::__construct();
		    $this->load->model('Postn_model');
			$this->load->database();
	}
	public function index()
	{
		$data['title'] = 'Post Notices';
		$this->load->view('user/header');
		$this->load->view('user/index', $data);

	}

	public function addnotice()
	{
		 $this->load->library('form_validation');
		 $this->form_validation->set_rules('title','Address','required');
			$this->form_validation->set_rules('desc','Desc','required');
			$this->form_validation->set_rules('doi','Date of Issue','required');
			$this->form_validation->set_rules('doe','Date of Expiry','required');
			$this->form_validation->set_rules('title','Title','required|min_length[6]|max_length[10]');

			if($this->form_validation->run()==False)
		{   //if ko bracket
		
		$data=array(
		'errors'=> validation_errors()

		);
		$this->session->set_flashdata($data);
		redirect('admin');
		} 

else
{
	$dateofissue=$this->input->post('doi');
		$dateofexpiry=$this->input->post('doe');
		$slug=$this->input->post('title').'-'.'random';
		$title=$this->input->post('title');
		$Description=$this->input->post('desc');
		
		$this->Postn_model->createpost($title,
			$slug,
			$Description,
			$dateofissue,
			$dateofexpiry);
		$this->session->set_flashdata($data);
		redirect('admin');
}
		
				
}


}


