<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

public function keamananLogout(){
    	$username = $this->session->userdata('email');
    	if(empty($username)){
    		$this->session->sess_destroy();
    		redirect('Login');
    	}
    }

public function logout($date, $email)
    {
        $this->db->where('tb_pegawai.email', $email);
        $this->db->update('tb_pegawai', $date);
    }

public function login($date, $email)
    {
        $this->db->where('tb_pegawai.email', $email);
        $this->db->update('tb_pegawai', $date);
    }
}