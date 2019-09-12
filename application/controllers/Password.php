<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Password extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        // ceklogin();
    }
    function index()
    {
        $data = array(
            'title' => 'Ganti Password',
            'user'  => $this->db->get_where('tb_pegawai', ['email' => $this->session->userdata('email')])->row_array(),
            'isi'   => 'password/password'
        );

        $this->form_validation->set_rules('password_lama', 'Password lama', 'required|trim', array('required' => 'Password Lama belum diisi'));
        $this->form_validation->set_rules('password_baru1', 'Password baru', 'required|trim|min_length[6]|matches[password_baru2]', array('required' => 'Password Baru belum diisi', 'min_length' => 'Minimal 6 Karakter', 'matches' => 'Password yang anda konfirmasi salah'));
        $this->form_validation->set_rules('password_baru2', 'Konfirmasi password baru', 'required|trim|min_length[6]|matches[password_baru1]', array('required' => 'Konfirmasi Password kosong', 'min_length' => 'Minimal 6 Karakter', 'matches' => 'Korfirmasi Password salah'));

        if ($this->form_validation->run() == false) {
            $this->load->view("dashboard", $data);
        } else {
            $passwordLama = $this->input->post('password_lama');
            $passwordBaru = $this->input->post('password_baru1');
            if (md5($passwordLama) != $data['user']['pass']) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah</div>');
                redirect('password');
            } else {
                if ($passwordLama == $passwordBaru) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Tidak Boleh Sama Dengan Password Lama</div>');
                    redirect("password");
                } else {
                    $password_md5 = md5($passwordBaru);
                    $this->db->set('pass', $password_md5);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('tb_pegawai');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Berhasil Diubah</div>');
                    redirect('password');
                }
            }
        }
    }
}
