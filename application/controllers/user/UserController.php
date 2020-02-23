<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		
	}

	public function save(){

		$this->load->model('user');
		$this->user->insert($this->input->post());

		redirect(base_url()+'welcome/','refresh');
		/*echo '<pre>';
		print_r($this->input->post());
		echo '</pre>';*/
		/*if(!isset($this->input->post('id'))){

		}	
		else{
			$this->load->model('user');
			$this->user->update($this->input->post());
		}*/
	}

	public function logout(){
		$this->load->model('user');

		$this->user->logout();
	}

}
