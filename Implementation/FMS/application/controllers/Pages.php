<?php
	class Pages extends CI_Controller{
		public function view($page = 'home'){
			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}
			$data['title'] = ucfirst($page);
			if(null ==($this->session->userdata('uid')))
			{
				$this->load->view('templates/header1');
			}
			else
			{
				$this->load->view('templates/header');
			}
			$this->load->view('pages/'.$page, $data);
			$this->load->view('templates/footer');
		}
	}