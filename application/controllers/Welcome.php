<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		session_start();
		//session_destroy();
		if(!isset($_SESSION['id']))
			$this->load->view('index');
		else
			redirect('welcome/redirect');
	}
	public function login()
	{
		$this->load->view('login');
	}

	public function css(){
		$this->load->view('sample');
	}

	public function authenticate_user(){
		$this->load->database();

		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('username', $this->input->post('username'));
		$this->db->join('profile', 'profile.profile_id = users.profile_fk');
		$result = $this->db->get();
		if($result->num_rows() > 0){
			
			//echo password_hash('admin', PASSWORD_DEFAULT);
			$resultFirst = $result->result_array()[0];
			if(password_verify($this->input->post('password'), $resultFirst['password'])){
				
				session_start();
				$_SESSION['id'] = $resultFirst['user_id'];
				$_SESSION['type'] = $resultFirst['type'];
				
				$_SESSION['full_name'] = $resultFirst['first_name'] . $resultFirst['last_name'];
				$_SESSION['photo'] = $resultFirst['photo'];
				redirect(base_url(),'refresh');
			}else{
				$_SESSION['error'] = 'wrong password';
				redirect(base_url()+'welcome/');
			}
		}else{
			session_start();
			$_SESSION['error'] = 'wrong password or username';
			redirect(base_url()+'welcome/');
		}

	}

	public function redirect(){
		session_start();
        echo $_SESSION['type'];
		//session_start();
		if(isset($_SESSION['type'])){
			if($_SESSION['type'] == "1"){
				//echo base_url();
				redirect('user/admin/', 'refresh');
			}else if($_SESSION['type'] == "2"){
				//echo base_url();
				redirect('welcome/', 'refresh');
			}else if($_SESSION['type'] == "3"){
				//echo base_url();
				redirect('welcome/', 'refresh');
			}
			
		}
	}
	public function discover(){
		$this->load->view('discover');
	}

	public function tours(){
		$this->load->view('discover');
	}
	public function registration(){

		$this->load->view('register_tguide'); //t_pack
	}

	public function trips(){
		$this->load->view('t_pack');
	}
	
}
