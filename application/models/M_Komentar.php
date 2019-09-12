<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Komentar extends CI_Model
{

    private $_table = "tb_komentar";

    public $nama_pasien;
    public $no_rm;
    public $kritik;
    public $saran;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function save()
    {
        $post = $this->input->post();
        $this->no_rm = $post["no_rm"];
        $this->nama_pasien = $post["nama_pasien"];
        $this->saran = $post["saran"];
        $this->kritik = $post["kritik"];

        $this->db->insert($this->_table, $this);
    }
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_komentar" => $id));
    }

    public function jumlahKomentar()
    {
        $queryKomentar = "SELECT COUNT(id_komentar) as jumlah FROM tb_komentar";
        $row = $this->db->query($queryKomentar)->row();
        return $row->jumlah;
    }
}
