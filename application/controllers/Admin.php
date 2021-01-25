<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_not_login();
    }
    public function index()
    {
        $this->load->model('Admin_model');
        $data['user'] = $this->session->userdata();
        $data['title'] = 'Halaman Administrator';
        $data['total_guru'] = $this->Admin_model->hitungJumlahGuru();
        $data['total_siswa'] = $this->Admin_model->hitungJumlahSiswa();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/index');
        $this->load->view('templates/auth_footer');
    }
}
