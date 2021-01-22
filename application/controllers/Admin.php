<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
        is_admin();
    }
    public function index()
    {
        $this->load->model('Admin_model');
        $data['user'] = $this->session->userdata();
        $data['title'] = 'Halaman Administrator';
        $data['total_guru'] = $this->Admin_model->hitungJumlahGuru();
        $data['total_siswa'] = $this->Admin_model->hitungJumlahSiswa();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/index');
        $this->load->view('templates/auth_footer');
    }
}
