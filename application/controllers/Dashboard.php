<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard');
		$this->load->model('M_login');
		$this->load->model('M_Komentar');
		$this->load->model('M_Laporan');
		$this->load->model('M_pasien');
		
		ceklogin();
	}

	public function index()
	{
		// $this->M_login->keamananLogout();
	
		$data = array(
			'title' => 'Dashboard',
			'data' => $this->M_pasien->get_jk(),
			'data2' => $this->M_pasien->get_agama(),
			'isi' => 'dashboard/dashboard_1',
			
			'jumlah'		=> $this->M_Komentar->jumlahKomentar(),
			'jmlPasien'		=> $this->M_dashboard->jumlahPasien(),
			'user'  => $this->db->get_where('tb_pegawai', ['email' => $this->session->userdata('email')])->row_array()
		);
		$this->load->view('dashboard', $data);
	}
}
