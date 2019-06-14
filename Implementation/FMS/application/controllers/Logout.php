<?php
	class Logout extends CI_Controller{
	
	public function index()
	{
	$this->session->unset_userdata('uid');
	$this->session->sess_destroy();
	redirect('login');
}

	}