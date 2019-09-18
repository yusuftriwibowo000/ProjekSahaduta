<?php
defined('BASEPATH') or exit('No direct script access allowed');

class F_kontak extends CI_Controller
{
	// function __construct()
	// {
	// 	parent::__construct();
		// $this->load->model('M_dashboard');
		// $this->load->model('M_login');
		// $this->load->model('M_Komentar');
		// $this->load->model('M_Laporan');
		// $this->load->model('M_pasien');
		// ceklogin();
	// }

	public function index()
	{	
		$data = array(
			'title' => 'Kontak',
			'isi' => 'frontend/kontak/kontak'
		);
		$this->load->view('dashboard2', $data);
	}
}
