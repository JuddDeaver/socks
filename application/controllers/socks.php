<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Socks extends CI_Controller {

	public function index()
	{
		// $this->session->sess_destroy();
		$this->load->view('index');
	}
	public function index_2()
	{
		// $this->session->sess_destroy();
		$this->load->view('index_2');
	}
	public function view_cart()
	{
		$this->load->view('cart');
	}
	public function shopping_cart()
	{
		$contents = $this->cart->contents();
		$this->load->view('partials/shopping_cart', array('contents' =>$contents));
	}
	public function cart()
	{
		// var_dump($this->input->post());
		// die();
		$id = $this->input->post('id');
		$this->load->library("form_validation");
		$this->form_validation->set_rules("quantity", "Quantity", "required");

		if($this->form_validation->run() === FALSE)
		{
			$this->view_data["errors"] = validation_errors();
			$error = $this->view_data['errors'];
			$errors = "<p class='red'>$error</p>"; //? NOT ADDING CLASS
			// echo $errors;
			// die();
			$this->session->set_flashdata('messages', $errors);
			// die('here');
			$this->product_info($id);
		}
		else {
		 	$insert_data = array( 'id' => $this->input->post('id'),
			 'name' => $this->input->post('name'),
			 'price' => $this->input->post('price'),
			'qty' => $this->input->post('quantity'),
			'picture' =>$this->input->post('picture') );

			 // This function add items into cart.
			$this->cart->insert($insert_data);

			$success = "<p class='green'>Added!</p>";
			$this->product_info($id);
			$this->session->set_flashdata('messages', $success);
		}
	}
	public function edit_cart()
	{
		
		$edit_data = array(
			'rowid' => $this->input->post('rowid'),
			'qty' => $this->input->post('qty'));
		
		$this->cart->update($edit_data);
		$contents = $this->cart->contents();
		$this->load->view('partials/shopping_cart', array('contents' =>$contents));

	}
	public function remove_cart()
	{
		$id = $this->input->post('rowid');
		$remove_data = array(
			'rowid' => $id,
			'qty' => 0);
		$this->cart->update($remove_data);

		$contents = $this->cart->contents();
		$this->load->view('partials/shopping_cart', array('contents' =>$contents));
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function product_info($id)
	{
		$this->load->library('cart');
		$carts = ($this->cart->contents());

		$product_info = $this->sock->fetch_product_by_id($id);
		$colors = $this->sock->get_colors_by_id($id);

		$this->load->view('product_info', array('product_info' => $product_info, 'colors' =>$colors, 'carts' => $carts));
	}
	public function mens()
	{
		$this->load->view('mens');
	}
	public function mens_pictures()
	{
		$data['pictures'] = $this->sock->fetch_mens();
		$this->load->view('partials/pictures', $data);
	}
	public function payment()
	{
		$this->load->view('payment');
	}
	public function checkout()
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
	public function products_a()
	{
		$this->load->view("products_a");
	}
	public function search_a()
	{
		$this->load->view("search_a");
	}
	public function search()
	{
		$this->load->view("search");
	}
	public function search_api()
	{
		$data = $this->sock->search_db(
					array('mens'),
					array('style'),
					array('products'));
		// $products = $this->sock->search_db(
		// 			array($this->input->post()['search_term']),
		// 			array($this->input->post()['search_type']),
		// 			array('products'));

		// $data['pictures'] = $data['products'];
		// $this->load->view("search", $data);
		echo json_encode($data);
	}
	
	public function delete_product($id)
	{
		die();
		$this->sock->delete_product($id);
		redirect("products_a");
	}
	public function edit_product($id)
	{
		$product_info = $this->sock->fetch_product_by_id($id);
		$colors = $this->sock->get_colors_by_id($id);

		$this->load->view('edit_product', array('product_info' => $product_info, 'colors' =>$colors));
	}
	public function items_a($id)
	{
		$this->load->view("items_a", array('id' => $id));
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
	public function proceed()
	{
		var_dump($this->input->post());
		die();
		$this->load->view("receipt");
	}

	public function test()
	{
		$this->load->view('test');
	}
}
