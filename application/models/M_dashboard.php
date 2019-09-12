<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_dashboard extends CI_Model
{
    public function jumlahPasien()
    {
        $queryPasien = "SELECT COUNT(id_pemesanan) as jumlah FROM tb_pemesanan where SUBSTR(tgl_pemesanan, 1,10) = DATE(NOW())";
        $row = $this->db->query($queryPasien)->row();
        return $row->jumlah;
    }
}
