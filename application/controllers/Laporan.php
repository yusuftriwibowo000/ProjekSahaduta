<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_laporan');
		$this->load->model('M_login');
		ceklogin();
	}

	public function index()
	{
		
	}

	//laporan kunjungan semua
	public function laporan_semua()
	{
		$listing = $this->M_laporan->get_laporan_semua();
		$data = array(
			'title' 	      => 'Data Laporan Kunjungan Semua',
			'isi'		 	  => 'laporan/list_laporan_kunjungan',
			'laporan_kunjungan' => $listing,
			'user'  => $this->db->get_where('tb_pegawai', ['username' => $this->session->userdata('username')])->row_array()
		);
		$this->load->view('dashboard', $data);
	}

	//laporan kunjungan harian
	public function laporan_harian()
	{
		$listing = $this->M_laporan->get_laporan_harian();
		$data = array(
			'title' 	      => 'Data Laporan Kunjungan Hari Ini',
			'isi'		 	  => 'laporan/list_laporan_kunjungan',
			'laporan_kunjungan' => $listing,
			'user'  => $this->db->get_where('tb_pegawai', ['username' => $this->session->userdata('username')])->row_array()
		);
		$this->load->view('dashboard', $data);
	}

	//laporan kunjungan mingguan
	public function laporan_mingguan()
	{
		$listing = $this->M_laporan->get_laporan_mingguan();
		$data = array(
			'title' 	      => 'Data Laporan Kunjungan Minggu Ini',
			'isi'		 	  => 'laporan/list_laporan_kunjungan',
			'laporan_kunjungan' => $listing,
			'user'  => $this->db->get_where('tb_pegawai', ['username' => $this->session->userdata('username')])->row_array()
		);
		$this->load->view('dashboard', $data);
	}

	//laporan kunjungan bulanan
	public function laporan_bulanan()
	{
		$listing = $this->M_laporan->get_laporan_bulanan();
		$data = array(
			'title' 	      => 'Data Laporan Kunjungan Bulan Ini',
			'isi'		 	  => 'laporan/list_laporan_kunjungan',
			'laporan_kunjungan' => $listing,
			'user'  => $this->db->get_where('tb_pegawai', ['username' => $this->session->userdata('username')])->row_array()
		);
		$this->load->view('dashboard', $data);
	}

	//laporan kunjungan tahunan
	public function laporan_tahunan()
	{
		$listing = $this->M_laporan->get_laporan_tahunan();
		$data = array(
			'title' 	      => 'Data Laporan Kunjungan Tahun Ini',
			'isi'		 	  => 'laporan/list_laporan_kunjungan',
			'laporan_kunjungan' => $listing,
			'user'  => $this->db->get_where('tb_pegawai', ['username' => $this->session->userdata('username')])->row_array()
		);
		$this->load->view('dashboard', $data);
	}

	public function laporan_penanganan_harian()
	{
		$data = array(
			'title'						=> 'Laporan Penanganan Pasien Hari Ini',
			'isi'						=> 'laporan/list_laporan_penanganan',
			'laporan_penanganan_pasien' => $this->M_laporan->get_laporan_penanganan_harian(),
			'user'						=> $this->db->get_where('tb_pegawai', ['username' => $this->session->userdata('username')])->row_array()
		);
		$this->load->view('dashboard', $data);
	}

	public function laporan_penanganan_mingguan()
	{
		$data = array(
			'title'						=> 'Laporan Penanganan Pasien Minggu Ini',
			'isi'						=> 'laporan/list_laporan_penanganan',
			'laporan_penanganan_pasien' => $this->M_laporan->get_laporan_penanganan_mingguan(),
			'user'						=> $this->db->get_where('tb_pegawai', ['username' => $this->session->userdata('username')])->row_array()
		);
		$this->load->view('dashboard', $data);
	}

	public function laporan_penanganan_bulanan()
	{
		$data = array(
			'title'						=> 'Laporan Penanganan Pasien Bulan Ini',
			'isi'						=> 'laporan/list_laporan_penanganan',
			'laporan_penanganan_pasien' => $this->M_laporan->get_laporan_penanganan_bulanan(),
			'user'						=> $this->db->get_where('tb_pegawai', ['username' => $this->session->userdata('username')])->row_array()
		);
		$this->load->view('dashboard', $data);
	}

	public function laporan_penanganan_tahunan()
	{
		$data = array(
			'title'						=> 'Laporan Penanganan Pasien Tahun Ini',
			'isi'						=> 'laporan/list_laporan_penanganan',
			'laporan_penanganan_pasien' => $this->M_laporan->get_laporan_penanganan_tahunan(),
			'user'						=> $this->db->get_where('tb_pegawai', ['username' => $this->session->userdata('username')])->row_array()
		);
		$this->load->view('dashboard', $data);
	}

	public function laporan_penanganan_semua()
	{
		$data = array(
			'title'						=> 'Laporan Penanganan Pasien',
			'isi'						=> 'laporan/list_laporan_penanganan',
			'laporan_penanganan_pasien' => $this->M_laporan->get_laporan_penanganan_semua(),
			'user'						=> $this->db->get_where('tb_pegawai', ['username' => $this->session->userdata('username')])->row_array()
		);
		$this->load->view('dashboard', $data);
	}
}
