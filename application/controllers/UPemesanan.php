<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UPemesanan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		//$this->load->model('UM_dashboard2');
		//$this->load->model('UM_login');
		
		//ceklogin();
	}

	public function index()
	{
		// $this->M_login->keamananLogout();
	
		$data = array(
			'title' => 'UPemesanan',
			//'user'  => $this->db->get_where('tb_pasien', ['no_rm' => $this->session->userdata('no_rm')])->row_array()
		);
		$this->load->view('UPemesanan', $data);
	}
}
