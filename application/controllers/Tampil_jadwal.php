<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tampil_jadwal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_not_login();
        $this->load->model('jadwal_model');
        $this->load->model('kelas_model');
        $this->load->model('mapel_model');
        $this->load->model('guru_model');
    }
    public function index()
    {
        $data['title'] = 'Laporan Jadwal Pelajaran';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['jadwal'] = $this->jadwal_model->getAllJadwal();
        $data['kelas'] = $this->kelas_model->getAllkelas();
        $data['mapel'] = $this->mapel_model->getAllmapel();
        $data['guru'] = $this->guru_model->getGuru();
        $this->load->view('templates/header', $data);
        $this->load->view('jadwal_pelajaran/tampil');
        $this->load->view('templates/admin_footer');
    }
}
