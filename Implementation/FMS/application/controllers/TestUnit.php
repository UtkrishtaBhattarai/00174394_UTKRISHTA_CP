<?php
Class TestUnit extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library("unit_test");
		$this->load->model("Login_model");
		$this->load->model("Dashboard_model");
		$this->load->model("Dept_model");
		$this->load->model("AddPoll_model");
		$this->load->model("Registration_model");
		$this->load->model("Feedback_model");
	}

	private function login($username,$password)
	{
		return $this->Login_model->login($username,md5($password));
	}
	private function getid($username,$password)
	{
		$result=$this->Login_model->getid($username,md5($password))->row();
		return (int)$result->id;
		
	} 

	private function getname($username,$password)
	{
		return $this->Login_model->getname($username,md5($password));
	}


	private function delete($id)
	{
		return $this->Dept_model->delete($id);
	}

	private function countpoll()
	{
		return $this->AddPoll_model->countpoll();
	}

	public function index()
	{
		//for getting if login condition matches
		echo "Using unit testing";
		$test1=$this->login("henomazil","henomazil");
		$expected1=TRUE;
		$test_name1="Login Test";
		echo $this->unit->run($test1,$expected1,$test_name1);

		//for getting userID
		echo "GET ID";
		$test2=$this->getid("qukemesoxa","qukemesoxa");
		$expected2=35;
		$test_name2="Name Test";
		echo $this->unit->run($test2,$expected2,$test_name2);


		//for getting username
		echo "GET Name";
		$test3=$this->getname("henomazil","henomazil");
		$expected3="Sylvia";
		$test_name3="NameTest";
		echo $this->unit->run($test3,$expected3,$test_name3);

		//for deleting department
		echo "Delete Department";
		$test4=$this->delete(3);
		$expected4=TRUE;
		$test_name4="deletedept";
		echo $this->unit->run($test4,$expected4,$test_name4);

		//for counting poll
		echo "Count Poll";
		$test5=$this->countpoll();
		$expected5=1;
		$test_name5="countpoll";
		echo $this->unit->run($test5,$expected5,$test_name5);



	}
}


 