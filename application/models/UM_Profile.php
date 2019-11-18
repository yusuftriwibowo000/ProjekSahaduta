<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UM_Profile extends CI_Model
{
	
	public function get_riwayat()
	{
		$this->db->select('tb_pasien.no_rm, tb_pasien.nama_pasien, tb_pemesanan.tgl_pemesanan, tb_pegawai.nama_pegawai');
		$this->db->from('tb_pemesanan');
		$this->db->join('tb_pasien', 'tb_pasien.no_rm = tb_pemesanan.no_rm', 'LEFT');
		$this->db->join('tb_pegawai', 'tb_pegawai.id_pegawai = tb_pemesanan.id_pegawai', 'LEFT');
		//$this->db->join('tb_agama', 'tb_agama.id_agama = tb_pasien.id_agama', 'LEFT');
		//$this->db->join('tb_pendidikan', 'tb_pendidikan.id_pendidikan = tb_pasien.id_pendidikan', 'LEFT');
		//$this->db->join('tb_pekerjaan', 'tb_pekerjaan.id_pekerjaan = tb_pasien.id_pekerjaan', 'LEFT');
		//$this->db->join('tb_jenis_kelamin', 'tb_jenis_kelamin.id_jenis_kelamin = tb_pasien.id_jenis_kelamin', 'LEFT');
		$this->db->order_by('tb_pemesanan.id_pemesanan');
		$this->db->where('tb_pasien.no_rm' == '2');
		// $this->db->group_by('DATE(tgl_pemesanan)');
		$query = $this->db->get();
		return $query->result();
		//$this->load->Controller('UProfile');
		//'user'    => $this->db->get_where('tb_pasien', ['no_rm' => $this->session->userdata('no_rm')])->row_array()
    }
}