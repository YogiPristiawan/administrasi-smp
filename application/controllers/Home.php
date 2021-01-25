<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_not_login();
    }
    public function index()
    {
        switch (date('l')) {
            case 'Sunday':
                $hari = 'Minggu';
                break;
            case 'Monday':
                $hari = 'Senin';
                break;
            case 'Tuesday':
                $hari = 'Selasa';
                break;
            case 'Wednesday':
                $hari = 'Rabu';
                break;
            case 'Thursday':
                break;
            case 'Friday':
                $hari = 'Jumat';
                break;
            case 'Saturday':
                $hari = 'Sabtu';
                break;
        }
        $this->load->model('Admin_model');
        $data['user'] = $this->session->userdata();
        $data['title'] = 'Halaman ' . $this->session->userdata('keterangan');
        $data['total_guru'] = $this->Admin_model->hitungJumlahGuru();
        $data['hari'] = $hari;
        $data['total_siswa'] = $this->Admin_model->hitungJumlahSiswa();
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/auth_footer');
    }
}
