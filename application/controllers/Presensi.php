<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Presensi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('presensi_model');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Laporan Presensi';
        $data['presensi'] = $this->presensi_model->getAllPresensi();
        $this->load->view('templates/header', $data);
        $this->load->view('Presensi/index');
        $this->load->view('templates/admin_footer');
    }
}
