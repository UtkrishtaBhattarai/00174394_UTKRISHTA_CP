<?php
	class Posts extends CI_Controller{
		public function index()
		{
			$data['title'] = 'Latest Posts';
			$data['posts']=$this->Post_model->get_posts();
			if(null ==($this->session->userdata('uid')))
			{
				$this->load->view('templates/header1');
			}
			else
			{
				$this->load->view('templates/header');
			}
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}
		public function view($slug=NULL)
		{
			$data['post']=$this->Post_model->get_posts($slug);
			if (empty($data['post'])) 
			{
				show_404();
			}
			$data['title']=$data['post']['title'];
			if(null ==($this->session->userdata('uid')))
			{
				$this->load->view('templates/header1');
			}
			else
			{
				$this->load->view('templates/header');
			}
			$this->load->view('posts/view', $data);
			$this->load->view('templates/footer');
		}
	}