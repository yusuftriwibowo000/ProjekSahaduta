<?php

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_login');
    }
    function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('Login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->get_where('tb_pegawai', ['username' => $username])->row_array();
        //user ada
        if ($user) {
            //user aktif
            // if ($user['isactive'] == 1) {
            if (password_verify($password, $user['pass'])) {
                $data = [
                    'username' => $user['username'],
                    'id_status' => $user['id_status']
                ];
                $this->session->set_userdata($data);
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">berhasil</div>');
                if ($user['id_status'] ==  1) {
                    $date = array('last_login' => date('Y-m-d H:i:s'));
                    $username = $this->session->userdata('username');
                    $this->M_login->login($date, $username);
                    redirect('Dashboard');
                } else {
                    $date = array('last_login' => date('Y-m-d H:i:s'));
                    $username = $this->session->userdata('username');
                    $this->M_login->login($date, $username);
                    redirect('pasien');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password</div>');
                redirect('login');
            }
            // } else {
            //     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">username is not active!</div>');
            //     redirect('login');
            // }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">username is not registered!</div>');
            redirect('login');
        }
    }
    function block()
    {
        $data = array(
            'title'      => 'Page Not Found',
            'isi'         => 'errors/404',
            'user'  => $this->db->get_where('tb_pegawai', ['username' => $this->session->userdata('username')])->row_array()
        );
        $this->load->view('dashboard', $data);
    }
    function logout()
    {
        $date = array('last_update' => date('Y-m-d H:i:s'));
        $username = $this->session->userdata('username');
        $this->M_login->logout($date, $username);
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('id_status');
        redirect('login');
    }
}
