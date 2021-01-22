<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jurnal_mengajar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('jurnal_model');
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Halaman Jurnal';
        $data['jurnal'] = $this->jurnal_model->getAlljurnal();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('jurnal_mengajar/index');
        $this->load->view('templates/admin_footer');
    }

}