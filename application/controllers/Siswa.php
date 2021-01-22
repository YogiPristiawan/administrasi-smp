<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('siswa_model');
        $this->load->model('kelas_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->session->userdata();
        $data['title'] = 'Halaman Master Siswa';
        $data['siswa'] = $this->siswa_model->getSiswa();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('siswa/index');
        $this->load->view('templates/admin_footer');
    }

    public function detail($id)
    {
        $data['user'] = $this->session->userdata();
        $data['title'] = 'Detail Data siswa';
        $data['siswa'] = $this->siswa_model->getSiswaById($id);
        $this->load->view('templates/admin_header', $data);
        $this->load->view('siswa/detail', $data);
        $this->load->view('templates/admin_footer');
    }

    public function tambah()
    {
        $data['user'] = $this->session->userdata();
        $data['title'] = 'Form Tambah Data siswa';
        $data['kelas'] = $this->kelas_model->getAllKelas();

        $this->form_validation->set_rules('nis', 'NIS', 'required');
        $this->form_validation->set_rules('nm_siswa', 'Nama siswa', 'required');
        $this->form_validation->set_rules('tp_lhr', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tg_lhr', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('nohp', 'No HP', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('th_ajaran', 'Tahun Ajaran', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('siswa/tambah');
            $this->load->view('templates/admin_footer');
        } else {
            $this->siswa_model->tambahDatasiswa();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('siswa');
        }
    }

    public function ubah($id)
    {
        $data['user'] = $this->session->userdata();
        $data['title'] = 'Form Ubah Data siswa';
        $data['kelas'] = $this->kelas_model->getAllKelas();
        $data['siswa'] = $this->siswa_model->getSiswaById($id);
        $data['agama'] = ['Islam', 'Kristen', 'Hindu', 'Buddha'];

        $this->form_validation->set_rules('nis', 'NIS', 'required');
        $this->form_validation->set_rules('nm_siswa', 'Nama Siswa', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tp_lhr', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tg_lhr', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('nohp', 'No HP', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('th_ajaran', 'Tahun Ajaran', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('siswa/ubah', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $this->siswa_model->ubahDatasiswa();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('siswa');
        }
    }

    public function hapus($id)
    {
        $this->siswa_model->hapusDataSiswa($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('siswa');
    }
}
