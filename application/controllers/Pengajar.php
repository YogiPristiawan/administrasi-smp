<?php
defined('BASEPATH') or exit('id direct script access allowed');

class Pengajar extends CI_Controller
{
    public function __construct()
    {
        require_once APPPATH . 'third_party/dompdf/dompdf_config.inc.php';
        parent::__construct();
        $this->load->model('pengajar_model');
        $this->load->model('mapel_model');
        $this->load->model('guru_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "Halaman Master Guru Pengajar";
        $data['user'] = $this->session->userdata();
        $data['pengajar'] = $this->pengajar_model->getPengajar();

        $this->load->view('templates/header', $data);
        $this->load->view('pengajar/index');
        $this->load->view('templates/admin_footer');
    }

    public function ubah($id)
    {
        $data['title'] = 'Form Ubah Data Pengajar';
        $data['user'] = $this->session->userdata();
        $data['mapel'] = $this->mapel_model->getMapel();
        $data['guru'] = $this->guru_model->getGuru();
        $data['pengajar'] = $this->pengajar_model->getPengajarByid($id);

        $this->form_validation->set_rules('kd_mapel', 'Mata Pelajaran', 'required');
        $this->form_validation->set_rules('nip', 'Guru Pengajar', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('pengajar/ubah');
            $this->load->view('templates/admin_footer');
        } else {
            $this->pengajar_model->ubahDataPengajar($id);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('pengajar');
        }
    }

    public function hapus($id)
    {
        $this->pengajar_model->deleteDataPengajar($id);
        $this->session->set_flashdata('flash', 'Dihapus');

        redirect('pengajar');
    }
    public function tambah()
    {
        $data['user'] = $this->session->userdata();
        $data['title'] = 'Form Tambah Data Pengajar';
        $data['mapel'] = $this->mapel_model->getMapel();
        $data['guru'] = $this->guru_model->getAllNamaGuru();

        $this->form_validation->set_rules('kd_mapel', 'Mapel', 'required');
        $this->form_validation->set_rules('nip', 'Nama Guru', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('pengajar/tambah');
            $this->load->view('templates/admin_footer');
        } else {
            if ($this->pengajar_model->tambahDataPengajar()) {   //cek duplikat
                $data['status'] = TRUE;
                $data['pesan'] = 'Pengajar tersebut sudah terdaftar!';
                $this->load->view('templates/header', $data);
                $this->load->view('pengajar/tambah');
                $this->load->view('templates/admin_footer');
            } else {

                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('Pengajar');
            }
        }
    }
}
