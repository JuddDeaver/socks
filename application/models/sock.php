<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sock extends CI_Model {

	public function fetch_all($table)
	{
		return $this->db->query('SELECT * FROM '. $table)->result_array();
	}


	public function add_admin()
	{
		var_dump($this->sock->fetch_all('admins'));
	}
}
