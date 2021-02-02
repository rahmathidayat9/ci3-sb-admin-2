<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot_Password extends CI_Controller {

	public function index()
	{
		$this->load->view('auth/forgot-password');
	}

}

/* End of file Forgot_Password.php */
/* Location: ./application/controllers/Forgot_Password.php */