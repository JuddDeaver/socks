<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Socks extends CI_Controller {

	public function menu_left()
	{
		// $this->session->sess_destroy();
		$this->load->view('partials/menu_left');
	}
}
