<?php
defined('BASEPATH') or exit('No direct script access allowed');

class F_home extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Home',
            'isi' => 'frontend/home/home'
        );
        $this->load->view('dashboard2', $data);
    }
}
