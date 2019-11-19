<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_laporan extends CI_Model
{

	public function get_laporan_semua()
	{
		$this->db->select('tb_pasien.no_rm, tb_pasien.nama_pasien, tb_pasien.tgl_lahir,tb_pasien.umur, tb_pasien.alamat, tb_pasien.nama_kk, tb_agama.agama, tb_pendidikan.pendidikan, tb_pekerjaan.pekerjaan, tb_jenis_kelamin.jenis_kelamin, tb_pasien.no_hp, tb_pasien.NIK, tb_pemesanan.tgl_pemesanan, tb_pegawai.nama_pegawai');
		$this->db->from('tb_pemesanan');
		$this->db->join('tb_pasien', 'tb_pasien.no_rm = tb_pemesanan.no_rm', 'LEFT');
		$this->db->join('tb_pegawai', 'tb_pegawai.id_pegawai = tb_pemesanan.id_pegawai', 'LEFT');
		$this->db->join('tb_agama', 'tb_agama.id_agama = tb_pasien.id_agama', 'LEFT');
		$this->db->join('tb_pendidikan', 'tb_pendidikan.id_pendidikan = tb_pasien.id_pendidikan', 'LEFT');
		$this->db->join('tb_pekerjaan', 'tb_pekerjaan.id_pekerjaan = tb_pasien.id_pekerjaan', 'LEFT');
		$this->db->join('tb_jenis_kelamin', 'tb_jenis_kelamin.id_jenis_kelamin = tb_pasien.id_jenis_kelamin', 'LEFT');
		$this->db->order_by('tb_pemesanan.id_pemesanan');
		// $this->db->group_by('DATE(tgl_pemesanan)');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_laporan_harian()
	{
		$this->db->select('tb_pemesanan.*, tb_pasien.no_rm, tb_pasien.nama_pasien, tb_pasien.tgl_lahir, tb_pasien.umur, tb_pasien.alamat, tb_pasien.nama_kk, tb_agama.agama, tb_pendidikan.pendidikan, tb_pekerjaan.pekerjaan, tb_jenis_kelamin.jenis_kelamin, tb_pasien.no_hp, tb_pasien.NIK, tb_pegawai.nama_pegawai');
		$this->db->from('tb_pemesanan');
		$this->db->join('tb_pasien', 'tb_pasien.no_rm = tb_pemesanan.no_rm', 'LEFT');
		$this->db->join('tb_pegawai', 'tb_pegawai.id_pegawai = tb_pemesanan.id_pegawai', 'LEFT');
		$this->db->join('tb_agama', 'tb_agama.id_agama = tb_pasien.id_agama', 'LEFT');
		$this->db->join('tb_pendidikan', 'tb_pendidikan.id_pendidikan = tb_pasien.id_pendidikan', 'LEFT');
		$this->db->join('tb_pekerjaan', 'tb_pekerjaan.id_pekerjaan = tb_pasien.id_pekerjaan', 'LEFT');
		$this->db->join('tb_jenis_kelamin', 'tb_jenis_kelamin.id_jenis_kelamin = tb_pasien.id_jenis_kelamin', 'LEFT');
		$this->db->order_by('tb_pemesanan.id_pemesanan', 'ASC');
		$this->db->where('SUBSTR(tgl_pemesanan, 1,10) = DATE(NOW())');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_laporan_mingguan()
	{
		$this->db->select('tb_pemesanan.*, tb_pasien.no_rm, tb_pasien.nama_pasien, tb_pasien.tgl_lahir, tb_pasien.umur, tb_pasien.alamat, tb_pasien.nama_kk, tb_agama.agama, tb_pendidikan.pendidikan, tb_pekerjaan.pekerjaan, tb_jenis_kelamin.jenis_kelamin, tb_pasien.no_hp, tb_pasien.NIK, tb_pegawai.nama_pegawai');
		$this->db->from('tb_pemesanan');
		$this->db->join('tb_pasien', 'tb_pasien.no_rm = tb_pemesanan.no_rm', 'LEFT');
		$this->db->join('tb_pegawai', 'tb_pegawai.id_pegawai = tb_pemesanan.id_pegawai', 'LEFT');
		$this->db->join('tb_agama', 'tb_agama.id_agama = tb_pasien.id_agama', 'LEFT');
		$this->db->join('tb_pendidikan', 'tb_pendidikan.id_pendidikan = tb_pasien.id_pendidikan', 'LEFT');
		$this->db->join('tb_pekerjaan', 'tb_pekerjaan.id_pekerjaan = tb_pasien.id_pekerjaan', 'LEFT');
		$this->db->join('tb_jenis_kelamin', 'tb_jenis_kelamin.id_jenis_kelamin = tb_pasien.id_jenis_kelamin', 'LEFT');
		$this->db->order_by('id_pemesanan', 'ASC');
		$this->db->where('YEARWEEK(tgl_pemesanan) = YEARWEEK(NOW())');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_laporan_bulanan()
	{
		$this->db->select('tb_pemesanan.*, tb_pasien.no_rm, tb_pasien.nama_pasien, tb_pasien.tgl_lahir, tb_pasien.umur, tb_pasien.alamat, tb_pasien.nama_kk, tb_agama.agama, tb_pendidikan.pendidikan, tb_pekerjaan.pekerjaan, tb_jenis_kelamin.jenis_kelamin, tb_pasien.no_hp, tb_pasien.NIK, tb_pegawai.nama_pegawai');
		$this->db->from('tb_pemesanan');
		$this->db->join('tb_pasien', 'tb_pasien.no_rm = tb_pemesanan.no_rm', 'LEFT');
		$this->db->join('tb_pegawai', 'tb_pegawai.id_pegawai = tb_pemesanan.id_pegawai', 'LEFT');
		$this->db->join('tb_agama', 'tb_agama.id_agama = tb_pasien.id_agama', 'LEFT');
		$this->db->join('tb_pendidikan', 'tb_pendidikan.id_pendidikan = tb_pasien.id_pendidikan', 'LEFT');
		$this->db->join('tb_pekerjaan', 'tb_pekerjaan.id_pekerjaan = tb_pasien.id_pekerjaan', 'LEFT');
		$this->db->join('tb_jenis_kelamin', 'tb_jenis_kelamin.id_jenis_kelamin = tb_pasien.id_jenis_kelamin', 'LEFT');
		$this->db->order_by('id_pemesanan', 'ASC');
		$this->db->where('MONTH(tgl_pemesanan) = MONTH(NOW())');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_laporan_tahunan()
	{
		$this->db->select('tb_pemesanan.*, tb_pasien.no_rm, tb_pasien.nama_pasien, tb_pasien.tgl_lahir, tb_pasien.umur, tb_pasien.alamat, tb_pasien.nama_kk, tb_agama.agama, tb_pendidikan.pendidikan, tb_pekerjaan.pekerjaan, tb_jenis_kelamin.jenis_kelamin, tb_pasien.no_hp, tb_pasien.NIK, tb_pegawai.nama_pegawai');
		$this->db->from('tb_pemesanan');
		$this->db->join('tb_pasien', 'tb_pasien.no_rm = tb_pemesanan.no_rm', 'LEFT');
		$this->db->join('tb_pegawai', 'tb_pegawai.id_pegawai = tb_pemesanan.id_pegawai', 'LEFT');
		$this->db->join('tb_agama', 'tb_agama.id_agama = tb_pasien.id_agama', 'LEFT');
		$this->db->join('tb_pendidikan', 'tb_pendidikan.id_pendidikan = tb_pasien.id_pendidikan', 'LEFT');
		$this->db->join('tb_pekerjaan', 'tb_pekerjaan.id_pekerjaan = tb_pasien.id_pekerjaan', 'LEFT');
		$this->db->join('tb_jenis_kelamin', 'tb_jenis_kelamin.id_jenis_kelamin = tb_pasien.id_jenis_kelamin', 'LEFT');
		$this->db->order_by('id_pemesanan', 'ASC');
		$this->db->where('YEAR(tgl_pemesanan) = YEAR(NOW())');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_laporan_penanganan_harian()
	{
		$this->db->select('tb_pemesanan.*, tb_pasien.no_rm, tb_pasien.nama_pasien, tb_jenis_kelamin.jenis_kelamin, tb_pasien.umur, tb_icdx.nama_icdx, tb_pegawai.nama_pegawai');
		$this->db->from('tb_pemesanan');
		$this->db->join('tb_pasien', 'tb_pasien.no_rm = tb_pemesanan.no_rm', 'LEFT');
		$this->db->join('tb_icdx', 'tb_icdx.kd_icdx = tb_pemesanan.kd_icdx', 'LEFT');
		$this->db->join('tb_pegawai', 'tb_pegawai.id_pegawai = tb_pemesanan.id_pegawai', 'LEFT');
		$this->db->join('tb_jenis_kelamin', 'tb_jenis_kelamin.id_jenis_kelamin = tb_pasien.id_jenis_kelamin', 'LEFT');
		$this->db->order_by('id_pemesanan', 'ASC');
		$this->db->where('SUBSTR(tgl_pemesanan, 1,10) = DATE(NOW()) && status_pemesanan = "Sudah Dilayani"');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_laporan_penanganan_mingguan()
	{
		$this->db->select('tb_pemesanan.*, tb_pasien.no_rm, tb_pasien.nama_pasien, tb_jenis_kelamin.jenis_kelamin, tb_pasien.umur, tb_icdx.nama_icdx, tb_pegawai.nama_pegawai');
		$this->db->from('tb_pemesanan');
		$this->db->join('tb_pasien', 'tb_pasien.no_rm = tb_pemesanan.no_rm', 'LEFT');
		$this->db->join('tb_icdx', 'tb_icdx.kd_icdx = tb_pemesanan.kd_icdx', 'LEFT');
		$this->db->join('tb_pegawai', 'tb_pegawai.id_pegawai = tb_pemesanan.id_pegawai', 'LEFT');
		$this->db->join('tb_jenis_kelamin', 'tb_jenis_kelamin.id_jenis_kelamin = tb_pasien.id_jenis_kelamin', 'LEFT');
		$this->db->order_by('id_pemesanan', 'ASC');
		$this->db->where('YEARWEEK(tgl_pemesanan) = YEARWEEK(NOW()) && status_pemesanan = "Sudah Dilayani"');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_laporan_penanganan_bulanan()
	{
		$this->db->select('tb_pemesanan.*, tb_pasien.no_rm, tb_pasien.nama_pasien, tb_jenis_kelamin.jenis_kelamin, tb_pasien.umur, tb_icdx.nama_icdx, tb_pegawai.nama_pegawai');
		$this->db->from('tb_pemesanan');
		$this->db->join('tb_pasien', 'tb_pasien.no_rm = tb_pemesanan.no_rm', 'LEFT');
		$this->db->join('tb_icdx', 'tb_icdx.kd_icdx = tb_pemesanan.kd_icdx', 'LEFT');
		$this->db->join('tb_pegawai', 'tb_pegawai.id_pegawai = tb_pemesanan.id_pegawai', 'LEFT');
		$this->db->join('tb_jenis_kelamin', 'tb_jenis_kelamin.id_jenis_kelamin = tb_pasien.id_jenis_kelamin', 'LEFT');
		$this->db->order_by('id_pemesanan', 'ASC');
		$this->db->where('MONTH(tgl_pemesanan) = MONTH(NOW()) && status_pemesanan = "Sudah Dilayani"');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_laporan_penanganan_tahunan()
	{
		$this->db->select('tb_pemesanan.*, tb_pasien.no_rm, tb_pasien.nama_pasien, tb_jenis_kelamin.jenis_kelamin, tb_pasien.umur, tb_icdx.nama_icdx, tb_pegawai.nama_pegawai');
		$this->db->from('tb_pemesanan');
		$this->db->join('tb_pasien', 'tb_pasien.no_rm = tb_pemesanan.no_rm', 'LEFT');
		$this->db->join('tb_icdx', 'tb_icdx.kd_icdx = tb_pemesanan.kd_icdx', 'LEFT');
		$this->db->join('tb_pegawai', 'tb_pegawai.id_pegawai = tb_pemesanan.id_pegawai', 'LEFT');
		$this->db->join('tb_jenis_kelamin', 'tb_jenis_kelamin.id_jenis_kelamin = tb_pasien.id_jenis_kelamin', 'LEFT');
		$this->db->order_by('id_pemesanan', 'ASC');
		$this->db->where('YEAR(tgl_pemesanan) = YEAR(NOW()) && status_pemesanan = "Sudah Dilayani"');
		$query = $this->db->get();
		return $query->result();
	}

	public function get_laporan_penanganan_semua()
	{
		$this->db->select('tb_pemesanan.*, tb_pasien.no_rm, tb_pasien.nama_pasien, tb_jenis_kelamin.jenis_kelamin, tb_pasien.umur, tb_icdx.nama_icdx, tb_pegawai.nama_pegawai');
		$this->db->from('tb_pemesanan');
		$this->db->join('tb_pasien', 'tb_pasien.no_rm = tb_pemesanan.no_rm', 'LEFT');
		$this->db->join('tb_icdx', 'tb_icdx.kd_icdx = tb_pemesanan.kd_icdx', 'LEFT');
		$this->db->join('tb_pegawai', 'tb_pegawai.id_pegawai = tb_pemesanan.id_pegawai', 'LEFT');
		$this->db->join('tb_jenis_kelamin', 'tb_jenis_kelamin.id_jenis_kelamin = tb_pasien.id_jenis_kelamin', 'LEFT');
		$this->db->order_by('id_pemesanan', 'ASC');
		$this->db->where('status_pemesanan = "Sudah Dilayani"');
		$query = $this->db->get();
		return $query->result();
	}

	public function jumlahlaporanharian()
	{
		$queryLaporanHarian = "SELECT COUNT(id_pemesanan) as jumlah FROM tb_pemesanan WHERE";
		$row = $this->db->query($queryLaporanHarian)->row();
		return $row->kampret;
	}
	public function jumlahlaporanmingguan()
	{
		$queryLaporanMingguan = "SELECT COUNT(id_pemesanan) as jumlah FROM tb_pemesanan WHERE";
		$row = $this->db->query($queryLaporanMingguan)->row();
		return $row->kampret;
	}
}
