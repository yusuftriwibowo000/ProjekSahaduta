<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UProfile extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('UM_login');
        $this->load->model('UM_Profile');
		cekloginuser();
		//ceklogin();
	}

	public function index()
	{
		// $this->M_login->keamananLogout();
	
		$data = array(
			'title' => 'UProfile',
			'user'  => $this->db->get_where('tb_pasien', ['no_rm' => $this->session->userdata('no_rm')])->row_array()
        );
        
        $listing = $this->UM_Profile->get_riwayat();
		$data = array(
			'title' 	      => 'Data riwayat',
			'isi'		 	  => 'uprofile/riwayat',
			'riwayat'         => $listing,
            'user'            => $this->db->get_where('tb_pasien', ['no_rm' => $this->session->userdata('no_rm')])->row_array(),
            
		);

        $this->load->view('uprofile', $data);
        
    }
    public function changePassword(){
        $this->form_validation->set_rules('password_lama', 'Password lama', 'required|trim', array('required' => 'Password Lama belum diisi'));
        $this->form_validation->set_rules('password_baru1', 'Password baru', 'required|trim|min_length[6]|matches[password_baru2]', array('required' => 'Password Baru belum diisi', 'min_length' => 'Minimal 6 Karakter', 'matches' => 'Password yang anda konfirmasi salah'));
        $this->form_validation->set_rules('password_baru2', 'Konfirmasi password baru', 'required|trim|min_length[6]|matches[password_baru1]', array('required' => 'Konfirmasi Password kosong', 'min_length' => 'Minimal 6 Karakter', 'matches' => 'Korfirmasi Password salah'));

        if ($this->form_validation->run() == false) {
            $this->load->view("upassword");
        } else {
            $passwordLama = $this->input->post('password_lama');
            $passwordBaru = $this->input->post('password_baru1');
            if (md5($passwordLama) != $datapassword['user']['pass']) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah</div>');
                redirect('uprofile');
            } else {
                if ($passwordLama == $passwordBaru) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Tidak Boleh Sama Dengan Password Lama</div>');
                    redirect("uprofile");
                } else {
                    $password_md5 = md5($passwordBaru);
                    $this->db->set('pass', $password_md5);
                    $this->db->where('username', $this->session->userdata('username'));
                    $this->db->update('tb_pasien');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Berhasil Diubah</div>');
                    redirect('uprofile');
                }
            }
        }

    }
    
}
