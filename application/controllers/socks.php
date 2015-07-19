<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Socks extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function login_a()
	{
		$this->load->view("login_a");
	}

	public function add_a()
	{
		$this->load->view("add_a");
	}
	public function add_admin()
	{
		if($this->sock->add_admin())
		{
			redirect("dash_a");
			die();
		} else{
			redirect("add_a");
			die();
		}
	}
	public function dash_a()
	{
		$this->load->view("dash_a");
	}
	public function login_admin()
	{
		if($this->sock->login_admin())
		{
			redirect("dash_a");
			die();
		} else{
			redirect("add_a");
			die();
		}
	}
	public function logout_a()
	{
		$this->session->sess_destroy();
		redirect(base_url());
		die();
	}
}
