<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User_model');
    }

    public function index()
    {
        is_login();                     //jika user sudah login redirect ke hoem page
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            //validasinya sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->User_model->getUserData($username); //ambil data user

        if ($username) {
            if ($password == $user['password']) {
                $data = [
                    'id_user' => $user['id_user'],
                    'username' => $user['username'],
                    'nama' => $user['nama'],
                    'nip' => $user['nip'],
                    'id_akses' => $user['id_akses'],
                    'keterangan' => $user['keterangan']
                ];

                $this->session->set_userdata($data);

                // if ($user['id_akses'] == "1") {
                //     redirect('admin');
                // } else if ($user['id_akses'] == "2") {
                //     redirect('hal_guru');
                // }
                redirect('home');
            } else {
                $this->session->set_flashdata('message', '<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                Password yang anda masukan salah!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
            User tidak terdaftar!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>');
            // redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('auth');
    }
}
