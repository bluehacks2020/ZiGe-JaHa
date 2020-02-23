<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function loadUsers(){

		$this->load->database();

		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('profile', 'profile.profile_id = users.user_id');

		$results = $this->db->get();
		return $results->result_array();

	}
	
	public function insert($data){
		$this->load->database();
		$filename = $_FILES['photo']['name'];

		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], 'img/'.$filename);
		}

		$dataProfile = array(
	        'first_name' => $data['first_name'],
	        'middle_name' => $data['middle_name'],
	        'last_name' => $data['last_name'],
	        'address' => $data['address'],
	        'gender' => $data['gender'],
	        'email' => $data['email'],
	        'birth_date' => $data['birthDate'],
			'contact' => $data['phoneNumber'],
	        'photo' => $filename/*,
	        'document' => $data['document'],*/
		);

		$this->db->insert('profile', $dataProfile);
		$date = date("Y-m-d H:i:s");

		$dataUser = array(
			'profile_fk' => $this->db->insert_id(),
	        'username' => $data['email'],
	        'password' => password_hash($data['password'], PASSWORD_DEFAULT),
	        'type' => $data['type'],
	        'created_date' => $date
		);
		
		$this->db->insert('users', $dataUser);
	}

	public function update($data){
		$this->load->database();

		$filename = $_FILES['photo']['name'];

		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], base_url().'img/'.$filename);
		}

		$dataProfile = array(
	        'first_name' => $data['first_name'],
	        'middle_name' => $data['middle_name'],
	        'last_name' =>  $data['last_name'],
	        'address' => $data['address'],
	        'email' => $data['email'],
	        'birth_date' => $data['birthDate'],
	        'photo' => $filename,
			'contact' => $data['phoneNumber']/*,
	        'document' => $data['document']*/
		);
		$this->db->where('profile_id', $data['profile_id']);

		$this->db->update('profile', $data);

		$dataUser = array(
	        'username' => $data['username'],
	        'password' => $data['password'],
	        'type' => $data['type'],
	        'created_date' => $data['created_date']
		);
		$this->db->where('profile_id', $data['user_id']);
		
		$this->db->update('users',  $dataUser);
	}

	public function logout(){
		session_start();
		session_destroy();
		redirect('welcome/','refresh');
	}
	

}
