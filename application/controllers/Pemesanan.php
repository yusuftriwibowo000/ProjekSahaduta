<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pemesanan');
        $this->load->model('M_login');
        ceklogin();
    }

    public function index()
    {
        // $this->M_login->keamananLogout();
        $listing = $this->M_pemesanan->getAll_antri();  //Meload data pemesanan dari tabel pemesanan
        $no_antrian = $this->M_pemesanan->get_noAntrian();  //auto increment no_antrian sesuai database
        $antri = $this->M_pemesanan->nomorAntrian();    //Total antrean
        $antrianNow = $this->M_pemesanan->antrianNow();
        $validation = $this->form_validation;   //FORM VALIDATION
        $validation->set_rules('no_rm','No_RM','required', array('required' => '<h2>Nomor RM harus diisi</h2>'));    //kondisi rules sesuai di model

        if ($validation->run() === FALSE) {
            $data = array(
                'title'        => 'Pemesanan',   //judul halaman
                'isi'          => 'pemesanan/list_pemesanan',   //load view yang ditampilkan
                'tb_pemesanan' => $listing,   //variabel "tb_pemesanan" yg dipakai meload data dari tabel
                'no_antrian'   => $no_antrian, //variabel "no_antrian" yg dipakai untuk auto increment no_antrian
                'antri'        => $antri, //variabel yg dipakai untuk menampilkan total antrean
                'antrianNow'   =>$antrianNow,
                'user'         => $this->db->get_where('tb_pegawai', ['email' => $this->session->userdata('email')])->row_array()
            );
            $this->load->view('dashboard', $data); //memuat view modul template
        } else {
            $cek = $this->db->query("SELECT * FROM tb_pemesanan where tgl_pemesanan=curdate() && no_rm ='" . $this->input->post('no_rm') . "'");
            $adaPasien = $this->db->query("SELECT * FROM tb_pasien where no_rm ='" . $this->input->post('no_rm') . "'");
            // $antriNow = $this->db->query("SELECT nomor_antrian FROM tb_antrian where tgl_antrian=curdate()");

            if ($cek->num_rows() >= 1) {
                $this->session->set_flashdata('error', '<h2>Nomor RM <strong>' . $this->input->post('no_rm') . '</strong> sudah ada, Silakan isi Nomor RM lain !</h2>');
                redirect('pemesanan');
            } else if ($adaPasien->num_rows() == 0) {
                $this->session->set_flashdata('error', '<h2>Nomor RM <strong>' . $this->input->post('no_rm') . '</strong> belum terdaftar, Silakan isi Nomor RM yang sudah terdaftar !</h2>');
                redirect('pemesanan');
            } else {
                //masuk database
                $this->M_pemesanan->save(); //simpan data
                $this->session->set_flashdata('success', '<strong><h2>Berhasil menambah antrian</h2></strong>');  //tampilkan pesan sukses
                redirect(base_url('pemesanan'));  //mengarahkan halaman ke controller pemesanan
            }
        }
    }

    public function nomorAntrian()
    {
        $antriNow = $this->db->query("SELECT nomor_antrian FROM tb_antrian");
        if($antriNow->row_array() == true){
                $noAn = array('nomor_antrian' => $this->input->post('antrianNow'), 'tgl_antrian' => date('Y-m-d'));
                $this->M_pemesanan->editNomor($noAn);
                redirect('Pemesanan');
        }else{
            $this->session->set_flashdata('error', '<h2>Gak tau</h2>');
        }
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->M_pemesanan->delete($id)) {
            $this->session->set_flashdata('success', '<strong><h2>Data berhasil dihapus</h2></strong>');
            redirect(base_url('pemesanan'));
        }
    }

    //ajax untuk menampilkan data pasien yang telah terdaftar
    public function get_pasien()
    {
        $no_rm = $this->input->post('no_rm');
        $data = $this->M_pemesanan->get_pasien_byId($no_rm);
        echo json_encode($data);
    }
}
