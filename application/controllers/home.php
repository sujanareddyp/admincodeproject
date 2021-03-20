<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
	public function about()
	{
		$this->load->view('header');
		$this->load->view('about');
		$this->load->view('footer');
	}
	public function contact()
	{
		$this->load->view('header');
		$this->load->view('contactpage');
		$this->load->view('footer');
	}
	public function savecontact()
	{
		$name=$_POST['fname'];
		$email=$_POST['email'];
		$mobile=$_POST['mobile'];
		$message=$_POST['msg'];
		$status=$this->user_model->savecontact($name,$email,$mobile,$message);
		if($status==true)
		{
			$this->session->set_flashdata("msg","data Saved successfully");
			header("location:contactlist.php");
		}
		else{
			echo"Some Error";
		}
	}
	
	public function logout()
	{
		$data=array("id"=>"","email"=>"");
		$this->session->set_userdata($data);
		$this->session->set_flashdata("msg","You have logged out successfully");
		header("location:login.php");
	}
	public function fetchallcontact()
	{
		
		$this->load->view('header');
		$this->load->view('contactlist',$allcontact);
		$this->load->view('footer');
	}
	public function contactlist()
	{
		$allcontact['contact']=$this->user_model->fetchallcontact();
		$this->load->view('header');
		$this->load->view('contactlist',$allcontact);
		$this->load->view('footer');
	}
	
	
}
