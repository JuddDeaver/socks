<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Socks extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	public function cart()
	{
		var_dump($this->input->post());
		die();
		$cart[] = $this->input->post();
		$this->session->set_userdata('cart', $cart);
		$this->load->view('cart');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function product_info($id)
	{
		$product_info = $this->sock->fetch_product_by_id($id);
		$this->load->view('product_info', array('product_info' => $product_info));
	}
	public function mens()
	{
		$products = $this->sock->fetch_mens();
		$this->load->view('mens', array('products' => $products));
	}
	public function payment()
	{
		$this->load->view('payment');
	}




	//////////ADMIN////////
	public function index_a()
	{
		$this->load->view('index_a');
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
