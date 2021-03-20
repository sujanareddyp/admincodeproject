<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	var $db;
	function __construct() {
		parent::__construct();
		$this->db=$this->load->database('default', TRUE);
	}
	public function logincheck($email,$pass)
	{
		$sql="select * from admin where email='$email' and password='$pass'";
		$res=$this->db->query($sql);
		
		if($res->num_rows()>0)
		{
			$res=$res->row();
			$data=array("id"=>$row->id,"email"=>$row->email);
			$this->session->set_userdata($data);
			return true;
		}
		else{
			return false;
		}
	}
	
	public function savecontact($name,$email,$mobile,$message)
	{
		$this->db->query("insert into contact(name,email,mobile,message) values('$name','$email','$mobile','$message')");
		return true;
	}
	public function fetchallcontact()
	{
		$sql= "select * from contact";
		$res=$this->db->query($sql);
		$allcontact=$res->result();
		return $allcontact;
	}
	
	
}
