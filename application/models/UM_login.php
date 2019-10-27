<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UM_login extends CI_Model
{

    public function keamananLogout()
    {
        $no_rm = $this->session->userdata('no_rm');
        if (empty($no_rm)) {
            $this->session->sess_destroy();
            redirect('ULogin');
        }
    }

    public function logout($no_rm)
    {
        $this->db->where('tb_pasien.no_rm', $no_rm);
      
    }

    public function login($no_rm)
    {
        $this->db->where('tb_pasien.no_rm', $no_rm);
        
    }
}
