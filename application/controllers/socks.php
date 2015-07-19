<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Socks extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function login()
	{
		if ($this->input->post()['usertype'] === "admin")
		{
			$this->load->view("login_a");
		} else {
			die("need handler for regular user");
		}
	}

	public function add()
	{
		if ($this->input->post()['usertype'] === "admin")
		{
			$this->load->view("add_a");
		} else {
			die("need handler for regular user");
		}
	}
	public function add_admin()
	{
	
		$this->sock->add_admin();
		die("added");
	}
}
