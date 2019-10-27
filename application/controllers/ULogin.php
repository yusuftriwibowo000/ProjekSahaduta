<?php

class ULogin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('UM_login');
    }
    function index()
    {
        $this->form_validation->set_rules('no_rm', 'no_rm', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('ULogin');
        } else {
            $this->_Ulogin();
        }
    }

    private function _Ulogin()
    {
        $no_rm = $this->input->post('no_rm');
        $password = $this->input->post('password');
        $user = $this->db->get_where('tb_pasien', ['no_rm' => $no_rm])->row_array();
        //user ada
        if (password_verify($password, $user['password'])) {
                $data = [
                    'no_rm' => $user['no_rm'],
                    
                ];
                $this->session->set_userdata($data);
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">berhasil</div>');
                 
                    $username = $this->session->userdata('no_rm');
                    $this->UM_login->login($no_rm);
                    redirect('UDashboard2');
                
            }else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password</div>');
                redirect('Ulogin');
            // } else {
            //     $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">username is not active!</div>');
            //     redirect('login');
            // }
        }
    }
    function block()
    {
        $data = array(
            'title'      => 'Page Not Found',
            'isi'         => 'errors/404',
            'user'  => $this->db->get_where('tb_pasien', ['no_rm' => $this->session->userdata('no_rm')])->row_array()
        );
        $this->load->view('dashboard', $data);
    }
    function logout()
    {
        
        $no_rm = $this->session->userdata('no_rm');
        $this->M_login->logout($no_rm);
        $this->session->unset_userdata('no_rm');
        
        redirect('Ulogin');
    }
}
