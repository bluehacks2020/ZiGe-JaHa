<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function index()
	{
		$this->load->view('login', $data, FALSE);
	}

}

/* End of file LoginController.php */
/* Location: ./application/controllers/login/LoginController.php */