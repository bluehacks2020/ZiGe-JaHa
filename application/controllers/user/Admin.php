<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
        $this->load->helper('url');
	}

	public function index()
	{
		$this::checkSession();
		$this->load->view('viewAdmin');
	}

	public function pendingRegistrations(){
		$this::checkSession();

		$this->load->database();
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('isApproved', false);
		$this->db->where('type', 2);
		$this->db->join('profile', 'profile.profile_id = users.profile_fk');

		$data['tourguides'] = $this->db->get()->result_array();
		$this->load->view('viewPendingRegistrations',$data);
	}

	public function viewUsers(){
		$this::checkSession();

		$this->load->database();
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('profile', 'profile.profile_id = users.profile_fk');

		$data['users'] = $this->db->get()->result_array();
		$this->load->view('viewUsers',$data);
	}

	public function delete(){
		$this->load->database();
		$id = $this->input->get('id');

		 $this->db->delete('users', array('user_id' => $id));

		 $this->db->delete('profile', array('profile_id' => $id));	
		 redirect('user/admin/viewUsers','refresh');

	}

	private function checkSession(){
		session_start();
		if(!isset($_SESSION['id'])){
			redirect('welcome/','refresh');
		}
		
	}




}
