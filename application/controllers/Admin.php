<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data = [
			'view' => 'admin/index',
		];

		$this->load->view('layout/backend/content',$data);
	}

	public function blank()
	{
		$data = [
			'view' => 'admin/blank',
			'title' => 'Blank Page',
			'contentTitle' => 'Blank Page',
		];

		$this->load->view('layout/backend/content',$data);	
	}

	public function table()
	{
		$data = [
			'view' => 'admin/table',
			'title' => 'Tables',
			'contentTitle' => 'Tables',
		];

		$this->load->view('layout/backend/content',$data);	
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */