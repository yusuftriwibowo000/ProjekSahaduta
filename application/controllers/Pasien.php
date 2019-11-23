<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pasien extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_pasien');
		$this->load->model('M_login');
		ceklogin();
	}

	public function index()
	{
		$listing = $this->M_pasien->getAll();
		$data = array(
			'title' 	 => 'Pasien',
			'isi'		 => 'pasien/list_pasien',
			'tb_pasien'  => $listing,
			'user'  => $this->db->get_where('tb_pegawai', ['username' => $this->session->userdata('username')])->row_array()
		);
		$this->load->view('dashboard', $data);
	}

	public function add()
	{
		// $cek = $this->db->query("SELECT * FROM tb_pasien where NIK ='" . $this->input->post('NIK') . "'");
		$pasien = $this->M_pasien;
		$validation = $this->form_validation;
		$validation->set_rules($pasien->rules());

		if ($validation->run() == FALSE) {
			$data = array(
				'title'   	    => 'Tambah Data Pasien',
				'isi'     		=> 'pasien/tambah_pasien',
				'tb_agama'		=> $pasien->getAgama(),
				'tb_pendidikan' => $pasien->getPendidikan(),
				'tb_pekerjaan'  => $pasien->getPekerjaan(),
				'tb_jenis_kelamin' => $pasien->getJenisKelamin(),
				'user'  => $this->db->get_where('tb_pegawai', ['username' => $this->session->userdata('username')])->row_array()
			);
			$this->load->view("dashboard",$data);
		}
		// elseif($cek->num_rows() >= 1){
		// 	$this->session->set_flashdata('error', '<h2> NIK <strong>' . $this->input->post('NIK') . '</strong> sudah ada, Silakan isi NIK lain !</h2>');
  //           redirect('Pasien/add');
		// }
		else {
			$pasien->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			redirect(base_url('Pasien'));
		}
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();

		if ($this->M_pasien->delete($id)) {
			$this->session->set_flashdata('success', 'Data berhasil dihapus');
			redirect(base_url('Pasien'));
		}
	}

	function edit($id)
	{
		$where = array('no_rm' => $id);
		$pasien = $this->M_pasien->edit_data($where, 'tb_pasien')->result();
		$data = array(
			'isi'		=> 'pasien/edit_pasien',
			'title'   	=> 'Edit Data Pasien',
			'tb_agama'		=> $this->M_pasien->getAgama(),
			'tb_pendidikan' => $this->M_pasien->getPendidikan(),
			'tb_pekerjaan'  => $this->M_pasien->getPekerjaan(),
			'tb_jenis_kelamin' => $this->M_pasien->getJenisKelamin(),
			'tb_pasien' => $pasien,
			'user'  => $this->db->get_where('tb_pegawai', ['username' => $this->session->userdata('username')])->row_array()
		);
		$this->load->view("dashboard", $data);
	}

	function update()
	{
		// $pasien = $this->M_pasien;
		// $validation = $this->form_validation;
		// $validation->set_rules($pasien->rules());
		// if ($validation->run() === FALSE) {
		// 	redirect("/pasien/edit/2");
		// }else{
		$no_rm = $this->input->post('no_rm');
		// $password = $this->input->post('password');
		$nama_pasien = $this->input->post('nama_pasien');
		$tgl_lahir = date('Y-m-d', strtotime( $this->input->post('tgl_lahir')));
		$umur = $this->input->post('umur');
		$alamat = $this->input->post('alamat');
		$nama_kk = $this->input->post('nama_kk');
		$agama = $this->input->post('id_agama');
		$pendidikan = $this->input->post('id_pendidikan');
		$pekerjaan = $this->input->post('id_pekerjaan');
		$jenis_kelamin = $this->input->post('id_jenis_kelamin');
		$no_hp = $this->input->post('no_hp');
		$NIK = $this->input->post('NIK');

		$data = array(
			'no_rm' => $no_rm,
			'nama_pasien' => $nama_pasien,
			'tgl_lahir' => $tgl_lahir,
			'umur'	=> $umur,
			'alamat' => $alamat,
			'nama_kk' => $nama_kk,
			'id_agama' => $agama,
			'id_pendidikan' => $pendidikan,
			'id_pekerjaan' => $pekerjaan,
			'id_jenis_kelamin' => $jenis_kelamin,
			'no_hp' => $no_hp,
			'NIK' => $NIK
		);

		$where = array(
			'no_rm' => $no_rm
		);

		$this->M_pasien->update_data($where, $data, 'tb_pasien');
		$this->session->set_flashdata('success', 'Data berhasil diedit');
		redirect(base_url('Pasien'));
		// }
	}

}
