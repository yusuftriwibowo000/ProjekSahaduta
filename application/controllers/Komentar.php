<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komentar extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_komentar');
		$this->load->model('M_login');
		ceklogin();
	}

	public function index()
	{
		// $this->M_login->keamananLogout();
		$listing = $this->M_komentar->getAll();
		$data = array(
			'title' 	 => 'Komentar',
			'isi'		 => 'komentar/komentar',
			'tb_komentar'  => $listing,
			'user'  => $this->db->get_where('tb_pegawai', ['username' => $this->session->userdata('username')])->row_array()
		);
		$this->load->view('dashboard', $data);
	}
	public function add()
	{
		$komentar = $this->M_komentar;
		$komentar->save();
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect(base_url('komentar'));
	}
	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->M_komentar->delete($id)) {
			$this->session->set_flashdata('success', 'Data berhasil dihapus');
			redirect(base_url('komentar'));
		}
	}
}
