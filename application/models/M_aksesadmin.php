<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_aksesadmin extends CI_Model
{
    private $_table = "tb_sub_menu";
    public $judul;
    public $idmenu;
    public $isactive;

    function getAll()
    {
        $this->db->where('id_menu !=', 3);
        return $this->db->get($this->_table)->result();
    }
}
