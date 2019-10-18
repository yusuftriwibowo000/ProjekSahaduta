<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_pemesanan extends CI_Model
{

	private $_table = "tb_pemesanan";

	public $id_pemesanan;
	public $no_antrian;
	public $no_rm;
	public $tgl_pemesanan;
	// public $kode_icdx;
	// public $pengobatan;
	// public $tindakan;
	// public $keadaan_keluar;
	// public $prognosa;
	// public $status_pemesanan;


	public function rules()
	{
		return [
			[
				'field' => 'no_rm',
				'label' => 'Nomor RM',
				'rules' => 'required'
			],


			[
				'field' => 'no_antrian',
				'label' => 'Nomor Antrian',
				'rules' => 'required'
			],

			[
				'field' => 'kode_icdx',
				'label' => 'Kode Penyakit',
				'rules' => 'required'
			],

			[
				'field' => 'pengobatan',
				'label' => 'Pengobatan',
				'rules' => 'required'
			],

			[
				'field' => 'tindakan',
				'label' => 'Tindakan',
				'rules' => 'required'
			],

			[
				'field' => 'keadaan_keluar',
				'label' => 'Keadaan Keluar',
				'rules' => 'required|in_list[Pulang,Rawat Inap,Rujuk]'
			],

			[
				'field' => 'prognosa',
				'label' => 'Prognosa',
				'rules' => 'required|in_list[Sembuh,Baik,Buruk,Tidak Tentu/Cenderung Sembuh,Tidak Tentu/Cenderung Baik]'
			],

		];
	}

	//menampilkan no_rm dan nama_pasien dari tb_pasien
	function get_pasien_byId($no_rm)
	{
		$hsl = $this->db->query("SELECT * FROM tb_pasien WHERE no_rm = '$no_rm'");
		if ($hsl->num_rows() > 0) {
			foreach ($hsl->result() as $data) {
				$hasil = array(
					'no_rm' => $data->no_rm,
					'nama_pasien' => $data->nama_pasien,
				);
			}
		}
		return $hasil;
	}

	//menampilkan kode_icdx dan nama_penyakit dari tb_penyakit
	function get_penyakit_byId($kode_icdx)
	{
		$hsl = $this->db->query("SELECT * FROM tb_penyakit WHERE kode_icdx = '$kode_icdx'");
		if ($hsl->num_rows() > 0) {
			foreach ($hsl->result() as $data) {
				$hasil = array(
					'kode_icdx' => $data->kode_icdx,
					'nama_penyakit' => $data->nama_penyakit,
				);
			}
		}
		return $hasil;
	}

	public function get_noAntrian() //nomor antrian auto increment dimodal
	{
		$query = "SELECT max(no_antrian) as auto FROM tb_pemesanan WHERE tgl_pemesanan=CURDATE() ";
		$data = $this->db->query($query)->row_array();
		$max = $data['auto'];
		$kodecount = $max + 1;
		return $kodecount;
	}

	public function antrianNow() //nomor antrian sekarang
	{
		$query = "SELECT sum(nomor_antrian) as auto FROM tb_antrian WHERE tgl_antrian=CURDATE()";
		$data = $this->db->query($query)->num_rows();
		$max = $data['auto'];
		$kodecount = $max + 1;
		return $kodecount;
	}

	public function getAll_antri() //menampilkan data pasien yang antri hari ini
	{
		$this->db->select('tb_pemesanan.*, tb_pasien.nama_pasien, tb_jenis_kelamin.jenis_kelamin');
		$this->db->from('tb_pemesanan');
		$this->db->join('tb_pasien', 'tb_pasien.no_rm = tb_pemesanan.no_rm', 'LEFT');
		$this->db->join('tb_jenis_kelamin', 'tb_jenis_kelamin.id_jenis_kelamin = tb_pasien.id_jenis_kelamin', 'LEFT');
		$this->db->order_by('id_pemesanan', 'ASC');
		$this->db->where('tgl_pemesanan = CURDATE()');
		$query = $this->db->get();
		return $query->result();
		//select * from tb_pemesanan;
	}

	public function nomorAntrian() //menampilkan nomor antrian berdasarkan hari ini
	{
		$this->db->select('COUNT(no_antrian) as count');
		$this->db->from('tb_pemesanan');
		$this->db->where('tgl_pemesanan = CURDATE()');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$row = $query->row();
			return $row->count;
		}
		return 0;
	}

	public function id_antrian() //id
	{
		$this->db->select('tb_antrian.id_antrian');
		$this->db->from('tb_antrian');
		$this->db->where('id_antrian = 1');
		$query = $this->db->get();
		return $query->result();
	}

	public function save() //menyimpan data isian pemesanan
	{
		$post = $this->input->post();
		$this->no_antrian = $post["no_antrian"];
		$this->no_rm = $post["no_rm"];
		$this->tgl_pemesanan = date("Y-m-d");
		$this->waktu_pemesanan = date("H:i:s");
		$this->id_pegawai = $post["id_pegawai"];
		$this->db->insert($this->_table, $this);
	}

	//tampil data pemesanan berdasarkan id_pemesanan
	public function detail_diagnosa($id)
	{
		$this->db->select('tb_pemesanan.*, tb_pasien.nama_pasien');
		$this->db->from('tb_pemesanan');
		$this->db->join('tb_pasien','tb_pasien.no_rm = tb_pemesanan.no_rm');
		$this->db->where(array('id_pemesanan'=>$id));
		$query = $this->db->get();
		return $query->row();
		// return $this->db->get_where($this->_table, ["id_pemesanan" =>$id])->row();
	}

	//update data pemesanan
	public function update($data, $id)
	{
		$data = array(
			'id_pemesanan' => $this->input->post('id'),
			'no_antrian' => $this->input->post('no_antrian'),
			'no_rm' => $this->input->post('no_rm'),
			'kode_icdx' => $this->input->post('kode_icdx'),
			'pengobatan' => $this->input->post('pengobatan'),
			'tindakan' => $this->input->post('tindakan'),
			'keadaan_keluar' => $this->input->post('keadaan_keluar'),
			'prognosa' => $this->input->post('prognosa'),
			'status_pemesanan' => $this->input->post('status_pemesanan'),
		);
		// $post = $this->input->post();
		// $this->id_pemesanan = $post["id"];
		// $this->no_antrian = $post["no_antrian"];
		// $this->no_rm = $post["no_rm"];
		// $this->kode_icdx = $post["kode_icdx"];
		// $this->pengobatan = $post["pengobatan"];
		// $this->tindakan = $post["tindakan"];
		// $this->keadaan_keluar = $post["keadaan_keluar"];
		// $this->prognosa = $post["prognosa"];
		// $this->status_pemesanan = $post["status_pemesanan"];
		$this->db->update($this->_table, $data, array('id_pemesanan'=>$id));
	}

	public function editNomor($noAn)
    {
        $this->db->where('id_antrian', $noAn['id_antrian']);
        $this->db->update('tb_antrian', $noAn);
    }

    //hapus data berdasarkan id_pemesanan
	public function delete($id)
	{
		return $this->db->delete($this->_table, array("id_pemesanan" => $id));
	}
}
