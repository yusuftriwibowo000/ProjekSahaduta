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

	public function laporan_semua()
	{
		$listing = $this->M_laporan->get_laporan_semua();
		$data = array(
			'title' 	      => 'Data Laporan Kunjungan Semua',
			'isi'		 	  => 'laporan/list_laporan_semua',
			'laporan_semua' => $listing,
			'user'  => $this->db->get_where('tb_pegawai', ['username' => $this->session->userdata('username')])->row_array()
		);
		$this->load->view('dashboard', $data);
	}

	public function laporan_harian()
	{
		$listing = $this->M_laporan->get_laporan_harian();
		$data = array(
			'title' 	      => 'Data Laporan Kunjungan Hari Ini',
			'isi'		 	  => 'laporan/list_laporan_harian',
			'laporan_harian' => $listing,
			'user'  => $this->db->get_where('tb_pegawai', ['username' => $this->session->userdata('username')])->row_array()
		);
		$this->load->view('dashboard', $data);
	}

	public function laporan_mingguan()
	{
		$listing = $this->M_laporan->get_laporan_mingguan();
		$data = array(
			'title' 	      => 'Data Laporan Pemesanan Minggu Ini',
			'isi'		 	  => 'laporan/list_laporan_mingguan',
			'laporan_mingguan' => $listing,
			'user'  => $this->db->get_where('tb_pegawai', ['username' => $this->session->userdata('username')])->row_array()
		);
		$this->load->view('dashboard', $data);
	}

	public function laporan_bulanan()
	{
		$listing = $this->M_laporan->get_laporan_bulanan();
		$data = array(
			'title' 	      => 'Data Laporan Pemesanan Bulan Ini',
			'isi'		 	  => 'laporan/list_laporan_bulanan',
			'laporan_bulanan' => $listing,
			'user'  => $this->db->get_where('tb_pegawai', ['username' => $this->session->userdata('username')])->row_array()
		);
		$this->load->view('dashboard', $data);
	}

	public function laporan_tahunan()
	{
		$listing = $this->M_laporan->get_laporan_tahunan();
		$data = array(
			'title' 	      => 'Data Laporan Pemesanan Tahun Ini',
			'isi'		 	  => 'laporan/list_laporan_tahunan',
			'laporan_tahunan' => $listing,
			'user'  => $this->db->get_where('tb_pegawai', ['username' => $this->session->userdata('username')])->row_array()
		);
		$this->load->view('dashboard', $data);
	}
}
