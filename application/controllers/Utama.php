<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Utama extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_not_login();
    }
    public function index()
    {
        $this->load->view('utama/index');
    }
}
