<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('session');
	}
	//======================//
	public function index()
	{
		$this->load->view('login');
	}
	public function logincheck()
	{
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$status=$this->user_model->logincheck($email,$pass);
		if($status==true)
		{
			header("location:home.php");
		}
		else{
			header("location:login.php");
		}
	}
	//=================//
}
