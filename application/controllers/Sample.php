<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample extends CI_Controller {

	public function index()
	{
		
	}

	public function loadUsers(){

		$this->load->model('user');

		echo '<pre>';
		print_r($this->user->loadUsers());
		echo '</pre>';


	}

}
