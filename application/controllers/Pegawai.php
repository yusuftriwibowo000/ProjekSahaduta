<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_pegawai');
        $this->load->model('M_login');
        $this->load->library('upload');
        ceklogin();
    }

    public function index()
    {
        $this->M_login->keamananLogout();
        $listing = $this->M_pegawai->getAll();
        $listing1 = $this->M_pegawai->getStatus();
        $data = array(
            'title'      => 'Pegawai',
            'isi'         => 'pegawai/pegawai',
            'tb_pegawai' => $listing,
            'tb_status' => $listing1,
            'user'  => $this->db->get_where('tb_pegawai', ['email' => $this->session->userdata('email')])->row_array()

        );
        $this->load->view('dashboard', $data);
    }
    // public function add()
    // {
    //     $pasien = $this->M_pegawai;
    //     $pasien->save();
    //     $this->session->set_flashdata('success', 'Berhasil disimpan');
    //     redirect(base_url('pegawai'));
    // }

    public function add(){
        //validasi
        $listing = $this->M_pegawai->getAll();
        $listing1 = $this->M_pegawai->getStatus();
        $v = $this->form_validation;
        $v->set_rules('nama_pegawai','Nama Pegawai','required', array('required' => 'Nama Pegawai harus diisi'));

        if($v->run()){
            $config['upload_path']  = './build/foto/'; //letak gambar upload
            $config['allowed_types']= 'jpg|jpeg|png'; //format upload
            $config['max_size']= '10000'; //KB
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('filefoto')){
 
        $data = array('title' => 'Tambah Pegawai',
                      'isi' => 'pegawai/tambah_pegawai',
                      'error' => $this->upload->display_errors(),
                      'tb_status' => $listing1,
                      'tb_pegawai' => $listing,
                      'user'  => $this->db->get_where('tb_pegawai', ['email' => $this->session->userdata('email')])->row_array()
                      );
        $this->load->view('dashboard',$data);
            
                // $this->index();
        // Masuk database
        }else{
                $upload_data                = array('uploads' =>$this->upload->data());
                // Image Editor
                $config['image_library']    = 'gd2';
                $config['source_image']     = './build/foto/'.$upload_data['uploads']['file_name']; 
                $config['new_image']        = './build/foto/thumb/';
                $config['create_thumb']     = TRUE;
                $config['quality']          = "100%";
                $config['maintain_ratio']   = TRUE;
                $config['width']            = 360; // Pixel
                $config['height']           = 360; // Pixel
                $config['x_axis']           = 0;
                $config['y_axis']           = 0;
                $config['thumb_marker']     = '';
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                
            $i = $this->input;
            $data = array(  'NIK'           => $i->post('NIK'),
                            'nama_pegawai'  => $i->post('nama_pegawai'),
                            'alamat'        => $i->post('alamat'),
                            'no_hp'         => $i->post('no_hp'),
                            'email'         => $i->post('email'),
                            'pass'          => md5($i->post('password')),
                            'id_status'     => $i->post('id_status'),
                            'isactive'      => $i->post('isactive'),
                            'foto'          => $upload_data['uploads']['file_name']
                            );
            $this->M_pegawai->save($data);
            $this->session->set_flashdata('success','Data berhasil ditambahkan');
            redirect(base_url('Pegawai'));
        }
    }
        $data = array(
            'title'      => 'Tambah Pegawai',
            'isi'         => 'pegawai/tambah_pegawai',
            'tb_pegawai' => $listing,
            'tb_status' => $listing1,
            'user'  => $this->db->get_where('tb_pegawai', ['email' => $this->session->userdata('email')])->row_array()
        );
        $this->load->view('dashboard',$data);
        // $this->index();
    }

    public function edit_pegawai($id_pegawai){
        $detail = $this->M_pegawai->detail($id_pegawai);
        $listing = $this->M_pegawai->getAll();
        $listing1 = $this->M_pegawai->getStatus();
        //validasi
        $v = $this->form_validation;
        $v->set_rules('nama_pegawai','Nama Pegawai','required', array('required' => 'Nama Pegawai harus diisi'));

        if($v->run()){
            //kalau ada gambar
            if(!empty($_FILES['filefoto']['name'])){
            $config['upload_path']  = './build/foto/'; //letak gambar upload
            $config['allowed_types']= 'jpg|jpeg|png'; //format upload
            $config['max_size']= '10000'; //KB
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('filefoto')){
 
        $data = array('title' => 'Edit Pegawai',
                      'isi' => 'pegawai/edit_pegawai',
                      'error' => $this->upload->display_errors(),
                      'detail'=>$detail,
                      'tb_status' => $listing1,
                      'tb_pegawai' => $listing,
                      'user'  => $this->db->get_where('tb_pegawai', ['email' => $this->session->userdata('email')])->row_array()
                      );
        $this->load->view('dashboard',$data);
        // Masuk database
        }else{
                $upload_data                = array('uploads' =>$this->upload->data());
                // Image Editor
                $config['image_library']    = 'gd2';
                $config['source_image']     = './build/foto/'.$upload_data['uploads']['file_name']; 
                $config['new_image']        = './build/foto/thumb/';
                $config['create_thumb']     = TRUE;
                $config['quality']          = "100%";
                $config['maintain_ratio']   = TRUE;
                $config['width']            = 360; // Pixel
                $config['height']           = 360; // Pixel
                $config['x_axis']           = 0;
                $config['y_axis']           = 0;
                $config['thumb_marker']     = '';
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                //hapus gambar lama
                if($detail->foto != ""){
                    unlink('./build/foto/'.$detail->foto);
                    unlink('./build/foto/thumb/'.$detail->foto);
                }
                
            $i = $this->input;
            $data = array(  'id_pegawai'    => $id_pegawai,
                            'NIK'           => $i->post('NIK'),
                            'nama_pegawai'  => $i->post('nama_pegawai'),
                            'alamat'        => $i->post('alamat'),
                            'no_hp'         => $i->post('no_hp'),
                            'email'         => $i->post('email'),
                            // 'pass'          => $i->post('password'),
                            'id_status'     => $i->post('id_status'),
                            'isactive'      => $i->post('isactive'),
                            'foto'          => $upload_data['uploads']['file_name']
                            );
            $this->M_pegawai->edit_pegawai($data);
            $this->session->set_flashdata('success','Data berhasil ditambahkan');
            redirect(base_url('Pegawai'));
        }
        }else{
            //update tanpa ganti gambar
            $i = $this->input;
            $data = array(  'id_pegawai'    => $id_pegawai,
                            'NIK'           => $i->post('NIK'),
                            'nama_pegawai'  => $i->post('nama_pegawai'),
                            'alamat'        => $i->post('alamat'),
                            'no_hp'         => $i->post('no_hp'),
                            'email'         => $i->post('email'),
                            // 'pass'          => $i->post('password'),
                            'id_status'     => $i->post('id_status'),
                            'isactive'      => $i->post('isactive')
                            );
            $this->M_pegawai->edit_pegawai($data);
            $this->session->set_flashdata('success','Data berhasil ditambahkan');
            redirect(base_url('Pegawai'));
        }}
        // End masuk database
        $data = array(
            'title'      => 'Edit Pegawai',
            'isi'        => 'pegawai/edit_pegawai',
            'detail'     => $detail,
            'tb_pegawai' => $listing,
            'tb_status'  => $listing1,
            'user'  => $this->db->get_where('tb_pegawai', ['email' => $this->session->userdata('email')])->row_array()
        );
        $this->load->view('dashboard',$data);
        }

    // public function edit_pegawai()
    // {
    //     $id_pegawai =  $this->input->post('id_pegawai');
    //     $NIK = $this->input->post('NIK');
    //     $nama_pegawai = $this->input->post('nama_pegawai');
    //     $alamat = $this->input->post('alamat');
    //     $no_hp = $this->input->post('no_hp');
    //     $email = $this->input->post('email');
    //     $id_status = $this->input->post('id_status');
    //     $this->M_pegawai->edit_pegawai($id_pegawai, $NIK, $nama_pegawai, $alamat, $no_hp, $email, $id_status);
    //     redirect('pegawai');
    // }

    public function delete($id_pegawai){
        $tb_pegawai = $this->M_pegawai->detail($id_pegawai);
        if($tb_pegawai->foto != ""){
            unlink('./build/foto/'.$tb_pegawai->foto);
            unlink('./build/foto/thumb/'.$tb_pegawai->foto);
        }
        $id_pegawai = $this->uri->segment(3);
        $this->M_pegawai->delete($id_pegawai);
        $this->session->set_flashdata('success','Data berhasil dihapus');
        redirect('pegawai');
    }

    // public function delete($id = null)
    // {
    //     if (!isset($id)) show_404();

    //     if ($this->M_pegawai->delete($id)) {
    //         $this->session->set_flashdata('success', 'Data berhasil dihapus');
    //         redirect(base_url('pegawai'));
    //     }
    // }
}
