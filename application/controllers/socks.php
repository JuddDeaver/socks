<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Socks extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function login()
	{
		$this->load->view("login_a");
	}
}
