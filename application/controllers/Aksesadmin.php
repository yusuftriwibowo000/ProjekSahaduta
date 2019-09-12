<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aksesadmin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_aksesadmin');
        ceklogin();
    }

    function index()
    {
        $listing = $this->M_aksesadmin->getAll();
        $data = array(
            'title' => 'Akses Admin',
            'isi'   => 'aksesadmin/aksesadmin',
            'tb_sub_menu' => $listing,
            'user'  => $this->db->get_where('tb_pegawai', ['email' => $this->session->userdata('email')])->row_array()
        );
        $this->load->view('dashboard', $data);
    }
    function changeaccess()
    {
        $idSubmenu = $this->input->post("id_submenu");
        $idMenu = $this->input->post("id_menu");
        var_dump($idMenu);
        die;
        if ($idMenu == 2) {
            $this->db->set('id_menu', '1');
            $this->db->where('id_submenu', $idSubmenu);
            $this->db->update('tb_sub_menu');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah</div>');
            redirect('Aksesadmin');
        } else {
            $this->db->set('id_menu', '2');
            $this->db->where('id_submenu', $idSubmenu);
            $this->db->update('tb_sub_menu');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Diubah</div>');
            redirect('Aksesadmin');
        }
    }
}
