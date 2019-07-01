<?php
	class Like extends CI_Controller{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->database();
			$this->load->model('Staff_model');
		}
		public function insert()
		{
			print_r($_POST);
			$userid=$_POST['txtuid'];
			$staffid=$_POST['txtstaffid'];

			$hello=$this->Staff_model->like([
				'id'=>$userid,
				'staff_id'=>$staffid,
				'me'=>"Yes"
			]);

			redirect('Staffs');
		}

	}