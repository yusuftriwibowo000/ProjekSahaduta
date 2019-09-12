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
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_Email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_pegawai', ['email' => $email])->row_array();
        //user ada
        if ($user) {
            //user aktif
            // if ($user['isactive'] == 1) {
                if ($user['pass'] == md5($password)) {
                    $data = [
                        'email' => $user['email'],
                        'id_status' => $user['id_status']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['id_status'] ==  1) {
                        $date = array('last_login' => date('Y-m-d H:i:s'));
                        $email = $this->session->userdata('email');
                        $this->M_login->login($date, $email);
                        redirect('dashboard');
                    } else {
                        $date = array('last_login' => date('Y-m-d H:i:s'));
                        $email = $this->session->userdata('email');
                        $this->M_login->login($date, $email);
                        redirect('pasien');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password</div>');
                    redirect('login');
                }
            // } else {
            //     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not active!</div>');
            //     redirect('login');
            // }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not registered!</div>');
            redirect('login');
        }
    }
    function block()
    {
        $data = array(
            'title'      => 'Page Not Found',
            'isi'         => 'errors/404',
            'user'  => $this->db->get_where('tb_pegawai', ['email' => $this->session->userdata('email')])->row_array()
        );
        $this->load->view('dashboard', $data);
    }
    function logout()
    {
        $date = array('last_update' => date('Y-m-d H:i:s'));
        $email = $this->session->userdata('email');
        $this->M_login->logout($date, $email);
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id_status');
        redirect('login');
    }
}
