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
	public function add_admin()
	{
		$query = "INSERT INTO `admins` (`email`, `password`, `created_at`, `updated_at`) VALUES (?, ?, 'NOW()', 'NOW()');";
		$values = array($this->input->post()['email'],$this->input->post()['password']);
		return $this->db->query($query, $values);
	}
}
