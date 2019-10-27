<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UKomentar extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		//$this->load->model('UM_Komentar');
		
		
		//ceklogin();
	}

	public function index()
	{
		// $this->M_login->keamananLogout();
	
		$data = array(
			'title' => 'UKomentar',
			'user'  => $this->db->get_where('tb_pasien', ['no_rm' => $this->session->userdata('no_rm')])->row_array()
		);
		$this->load->view('UKomentar', $data);
	}
}
