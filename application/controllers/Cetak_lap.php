<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak_lap extends CI_Controller
{
    public function index()
    {
        is_not_login();
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Halaman Cetak Data';
        $this->load->view('templates/header', $data);
        $this->load->view('cetak_lap/index');
        $this->load->view('templates/auth_footer');
    }
}
