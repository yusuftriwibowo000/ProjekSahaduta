<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UDashboard1 extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		//$this->load->model('UM_dashboard1');
		//$this->load->model('M_login');
		
		//ceklogin();
	}

	public function index()
	{
		// $this->M_login->keamananLogout();
	
		$data = array(
			'title' => 'UDashboard1',
		);
		$this->load->view('Udashboard1', $data);
	}
}
