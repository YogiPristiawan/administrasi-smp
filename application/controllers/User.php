<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_not_login();
    }
    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'My Profile';
        $this->load->view('templates/header', $data);
        $this->load->view('user/index');
        $this->load->view('templates/auth_footer');
    }
}
