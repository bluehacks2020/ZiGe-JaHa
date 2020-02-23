<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ApiController extends CI_Controller {

	public function index()
	{
		$this->load->view('load-api', $data, FALSE);
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */

?>