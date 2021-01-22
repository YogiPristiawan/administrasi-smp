<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hal_guru extends CI_Controller
{
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
        $data['hari'] = $hari;
        $data['user'] = $this->session->userdata();
        $data['title'] = 'Halaman Guru';
        $this->load->view('templates/guru_header', $data);
        $this->load->view('halaman_guru/index');
        $this->load->view('templates/auth_footer');
    }
}
