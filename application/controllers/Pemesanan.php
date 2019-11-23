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
        $validation = $this->form_validation;   //FORM VALIDATION
        $validation->set_rules('no_rm','No_RM','required', array('required' => '<h2>Nomor RM harus diisi</h2>'));    //kondisi rules sesuai di model

        if ($validation->run() === FALSE) {
            $data = array(
                'title'        => 'Pemesanan',   //judul halaman
                'isi'          => 'pemesanan/list_pemesanan',   //load view yang ditampilkan
                'tb_pemesanan' => $listing,   //variabel "tb_pemesanan" yg dipakai meload data dari tabel
                'no_antrian'   => $no_antrian, //variabel "no_antrian" yg dipakai untuk auto increment no_antrian
                'antri'        => $antri, //variabel yg dipakai untuk menampilkan total antrean
                'dilayani'     => $this->M_pemesanan->antrianDilayani(), //variabel yg dipakai untuk menampilkan jumlah pasien yang sudah dilayani
                'user'         => $this->db->get_where('tb_pegawai', ['username' => $this->session->userdata('username')])->row_array()
            );
            $this->load->view('dashboard', $data); //memuat view modul template
         } 
         else {
            $cek = $this->db->query("SELECT * FROM tb_pemesanan where tgl_pemesanan=curdate() && status_pemesanan='Belum Dilayani' && no_rm ='" . $this->input->post('no_rm') . "'");
            $adaPasien = $this->db->query("SELECT * FROM tb_pasien where no_rm ='" . $this->input->post('no_rm') . "'");
            // $antriNow = $this->db->query("SELECT nomor_antrian FROM tb_antrian where tgl_antrian=curdate()");

            if ($cek->num_rows() >= 1) {
                $this->session->set_flashdata('error', '<h2>Nomor RM <strong>' . $this->input->post('no_rm') . '</strong> sudah antri, Silakan isi Nomor RM lain !</h2>');
                redirect('Pemesanan');
            } else if ($adaPasien->num_rows() == 0) {
                $this->session->set_flashdata('error', '<h2>Nomor RM <strong>' . $this->input->post('no_rm') . '</strong> belum terdaftar, Silakan isi Nomor RM yang sudah terdaftar !</h2>');
                redirect('Pemesanan');
            } else {
                //masuk database
                $this->M_pemesanan->save(); //simpan data
                $this->session->set_flashdata('success', '<strong><h2>Berhasil menambah antrian</h2></strong>');  //tampilkan pesan sukses
                redirect(base_url('pemesanan'));  //mengarahkan halaman ke controller pemesanan
            }
        }
    }

    function create(){
        $validation = $this->form_validation;
        $validation->set_rules('no_rm','No_RM','required', array('required' => '<h2>Nomor RM harus diisi</h2>'));
        if($validation->run()){
            $this->M_pemesanan->save(); //simpan data
            $this->session->set_flashdata('success', '<strong><h2>Berhasil menambah antrian</h2></strong>');  //tampilkan pesan sukses
        }else {
            $cek = $this->db->query("SELECT * FROM tb_pemesanan where tgl_pemesanan=curdate() && no_rm ='" . $this->input->post('no_rm') . "'");
            $adaPasien = $this->db->query("SELECT * FROM tb_pasien where no_rm ='" . $this->input->post('no_rm') . "'");
            // $antriNow = $this->db->query("SELECT nomor_antrian FROM tb_antrian where tgl_antrian=curdate()");

            if ($cek->num_rows() >= 1) {
                $this->session->set_flashdata('error', '<h2>Nomor RM <strong>' . $this->input->post('no_rm') . '</strong> sudah ada, Silakan isi Nomor RM lain !</h2>');
                redirect('pemesanan');
            } else if ($adaPasien->num_rows() == 0) {
                $this->session->set_flashdata('error', '<h2>Nomor RM <strong>' . $this->input->post('no_rm') . '</strong> belum terdaftar, Silakan isi Nomor RM yang sudah terdaftar !</h2>');
                redirect('pemesanan');
            }
        }

        require_once(APPPATH.'views/vendor/autoload.php');
        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
        );
        $pusher = new Pusher\Pusher(
            'a1e095bed9535a20e287', //ganti dengan App_key pusher Anda
            '338c42efee9dfe3b940a', //ganti dengan App_secret pusher Anda
            '874582', //ganti dengan App_key pusher Anda
            $options
        );
 
        $data['message'] = 'success';
        $pusher->trigger('my-channel', 'my-event', $data);
    }

    //hapus data berdasarkan id_pemesanan
    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->M_pemesanan->delete($id)) {
            $this->session->set_flashdata('success', '<strong><h2>Data berhasil dihapus</h2></strong>');
            redirect(base_url('pemesanan'));
        }
    }

    //detail diagnosa pasien setelah antrian dipanggil
    public function detail_pemesanan($id = null)
    {
        if (!isset($id)) redirect('Pemesanan');
        $validation = $this->form_validation;
        $validation->set_rules($this->M_pemesanan->rules());

        if($validation->run() == FALSE){
            $data = array(
                'title' => 'Detail Diagnosa Pasien',
                'isi'   => 'pemesanan/detail_pemesanan',
                'tb_pemesanan' => $this->M_pemesanan->detail_diagnosa($id),
                'user'  => $this->db->get_where('tb_pegawai', ['username' => $this->session->userdata('username')])->row_array()
            );
        $this->load->view('dashboard', $data);
        }
    }

    //Update data diagnosa pemeriksaan
    public function update()
    {
        $id = $this->input->post('id');
        $data = array(
            'id_pemesanan' => $this->input->post('id'),
            'no_antrian' => $this->input->post('no_antrian'),
            'no_rm' => $this->input->post('no_rm'),
            'kd_icdx' => $this->input->post('kd_icdx'),
            'pengobatan' => $this->input->post('pengobatan'),
            'tindakan' => $this->input->post('tindakan'),
            'keadaan_keluar' => $this->input->post('keadaan_keluar'),
            'prognosa' => $this->input->post('prognosa'),
            'status_pemesanan' => $this->input->post('status_pemesanan'),
        );

        $where = array(
            'id_pemesanan' => $id
        );

        $this->M_pemesanan->update_data($where, $data, 'tb_pemesanan');
        $this->session->set_flashdata('success', 'Selesai menambahkan penanganan pada pasien');
        redirect('Pemesanan');
    }

    //ajax untuk menampilkan nama pasien berdasarkan no_rm otomatis di pemesanan
    public function get_pasien()
    {
        $no_rm = $this->input->post('no_rm');
        $data = $this->M_pemesanan->get_pasien_byId($no_rm);
        echo json_encode($data);
    }

    //ajax untuk menampilkan nama penyakit otomatis berdasarkan kode_icdx nya
    public function get_penyakit()
    {
        $kd_icdx = $this->input->post('kd_icdx');
        $data = $this->M_pemesanan->get_penyakit_byId($kd_icdx);
        echo json_encode($data);
    }

    function ambilData()
    {
        $dataPasien = $this->M_pemesanan->getAll_antri();
        echo json_encode($dataPasien);
    }


}
