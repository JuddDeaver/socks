<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sock extends CI_Model {

	public function fetch_all($table)
	{
		return $this->db->query('SELECT * FROM '. $table)->result_array();
	}


	public function get_admins()
	{
		return $this->sock->fetch_all('admins');
	}

	public function get_admin($info)
	{
		$query = "SELECT * FROM admins WHERE email='" . $info['email'] . "' AND password='" . $info['password'] . "'";
		return $this->db->query($query)->row_array();
	}
	
	public function add_admin()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("email", "Email", "trim|valid_email|required");
		$this->form_validation->set_rules("password", "Password", "trim|min_length[8]|required|matches[passconf]|md5");
		$this->form_validation->set_rules("passconf", "Confirm Password", "trim|required|md5");

		$insert_admin = FALSE;

		if($this->form_validation->run() === FALSE)
		{
			$this->session->set_flashdata("errors", validation_errors());
		} else {
			$query = "INSERT INTO `admins` (`email`, `password`, `created_at`, `updated_at`) VALUES (?, ?, NOW(), NOW());";
			$values = array($this->input->post()['email'],$this->input->post()['password']);
			$insert_admin = $this->db->query($query, $values);
			if($insert_admin)
			{				
				$this->session->set_userdata("user_session", $this->sock->get_admin($this->input->post()));
			} else {
				$this->session->set_flashdata("errors", "Registration failed.");
			}
		}
		return $insert_admin;
	}


	public function login_admin()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("email", "Email", "trim|valid_email|required");
		$this->form_validation->set_rules("password", "Password", "trim|min_length[8]|required|md5");
		if($this->form_validation->run() === FALSE)
		{
			$this->session->set_flashdata("errors", validation_errors());
		} else {
			$user = $this->sock->get_admin($this->input->post());
			if ($user)
			{
				$this->session->set_userdata("user_session", $user);
			} else {
				$this->session->set_flashdata("errors", "Invalid email and/or password");
			}
		}
		return $user;
	}

	public function get_orders()
	{
		return $this->sock->fetch_all('order_heads');
	}

	/////////////
	public function fetch_mens()
	{
		$query = "SELECT * FROM products WHERE style = 'mens' LIMIT 0,4";
		return $this->db->query($query)->result_array();
	}
	public function fetch_product_by_id($id)
	{
		$query = "SELECT * FROM products WHERE id = $id";
		return $this->db->query($query)->row_array();
	}

}
