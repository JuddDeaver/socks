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

	public function get_orders_line_items()
	{
		$query = 
		"SELECT
			customers.first_name AS 'First_Name',
			customers.last_name AS 'Last_Name',
		    customers.username AS 'Username',
		    customers.email AS 'Email',
		    customers.password AS 'Password',
		    shipping.address AS 'Shipping_Address',
		    shipping.address2 AS 'Shipping_Address2',
		    shipping_city.city AS 'Shipping_City',
		    shipping_state.code AS 'Shipping_State',
		    shipping.zipcode AS 'Shipping_Zipcode',
		    billing.address AS 'Billing_Address',
		    billing.address2 AS 'Billing_Address2',
		    billing_city.city AS 'Billing_City',
		    billing_state.code AS 'Billing_State',
		    billing.zipcode AS 'Billing_Zipcode',
		    cc.number AS 'Credit_Card',
		    cc.seccode AS 'Security_Code',
		    cc.expiration AS 'Expiration',
		    cc_types.type AS 'CC_Type',
		    phone_numbers.number AS 'Phone_Number',
		    products.brand AS 'Brand',
		    products.name AS 'Name',
		    products.color AS 'Color',
		    products.pattern AS 'Pattern',
		    products.size AS 'Size',
		    products.style AS 'Style',
		    products.material AS 'Material',
		    order_items.quantity AS 'Quantity',
			order_items.price AS 'Price'
		    
		FROM order_heads
		JOIN order_items ON order_heads.id = order_items.order_head_id
		JOIN customers ON order_heads.customer_id = customers.id
		JOIN addresses AS shipping ON order_heads.shipping_address_id = shipping.id
		JOIN addresses AS billing ON order_heads.billing_address_id = billing.id
		JOIN cc ON order_heads.cc_id = cc.id
		JOIN phone_numbers ON order_heads.phone_id = phone_numbers.id
		JOIN cities AS shipping_city ON shipping.city_id = shipping_city.id
		JOIN cities AS billing_city ON billing.city_id = billing_city.id
		JOIN states AS shipping_state ON shipping.state_id = shipping_state.id
		JOIN states AS billing_state ON billing.state_id = billing_state.id
		JOIN cc_types ON cc.cc_type_id = cc_types.id
		JOIN products ON order_items.product_id = products.id";

		return $this->db->query($query)->result_array();
	}

	public function fetch_mens()
	{
		$query = "SELECT * FROM products WHERE style = 'mens' LIMIT 0,22";
		return $this->db->query($query)->result_array();
	}
	public function fetch_product_by_id($id)
	{
		$query = "SELECT * FROM products WHERE id = $id";
		return $this->db->query($query)->row_array();
	}
	public function get_order_heads()
	{
		$query = 
		"SELECT
			order_heads.id AS 'Order_id',
			customers.first_name AS 'First_Name',
			customers.last_name AS 'Last_Name',
		    customers.username AS 'Username',
		    customers.email AS 'Email',
		    phone_numbers.number AS 'Phone_Number',
		    cc.number AS 'Credit_Card',
		    cc.seccode AS 'Security_Code',
		    cc.expiration AS 'Expiration',
		    cc_types.type AS 'CC_Type',
		    shipping.address AS 'Shipping_Address',
		    shipping.address2 AS 'Shipping_Address2',
		    shipping_city.city AS 'Shipping_City',
		    shipping_state.code AS 'Shipping_State',
		    shipping.zipcode AS 'Shipping_Zipcode',
		    billing.address AS 'Billing_Address',
		    billing.address2 AS 'Billing_Address2',
		    billing_city.city AS 'Billing_City',
		    billing_state.code AS 'Billing_State',
		    billing.zipcode AS 'Billing_Zipcode',
			Sum(order_items.price) AS 'Order_Total'
		    
		FROM order_heads
			JOIN order_items ON order_heads.id = order_items.order_head_id
			JOIN customers ON order_heads.customer_id = customers.id
			JOIN addresses AS shipping ON order_heads.shipping_address_id = shipping.id
			JOIN addresses AS billing ON order_heads.billing_address_id = billing.id
			JOIN cc ON order_heads.cc_id = cc.id
			JOIN phone_numbers ON order_heads.phone_id = phone_numbers.id
			JOIN cities AS shipping_city ON shipping.city_id = shipping_city.id
			JOIN cities AS billing_city ON billing.city_id = billing_city.id
			JOIN states AS shipping_state ON shipping.state_id = shipping_state.id
			JOIN states AS billing_state ON billing.state_id = billing_state.id
			JOIN cc_types ON cc.cc_type_id = cc_types.id
		GROUP BY order_heads.id";

		return $this->db->query($query)->result_array();
	}
	public function get_order_items($id)
	{
		$query = 
			"SELECT
				products.id AS 'Product_id',
			    products.brand AS 'Brand',
			    products.name AS 'Name',
			    products.color AS 'Color',
			    products.pattern AS 'Pattern',
			    products.size AS 'Size',
			    products.style AS 'Style',
			    products.material AS 'Material',
			    order_items.quantity AS 'Quantity',
				order_items.price AS 'Price'
			    
			FROM order_items
			JOIN products ON order_items.product_id = products.id
			WHERE order_items.order_head_id = $id";

		return $this->db->query($query)->result_array();
	}
}
