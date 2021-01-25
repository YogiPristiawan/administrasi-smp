<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_not_login();
        require_once APPPATH . 'third_party/dompdf/dompdf_config.inc.php';
        $this->load->model('guru_model');
        $this->load->model('jabatan_model');
        $this->load->model('mapel_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->session->userdata();
        $data['title'] = 'Halaman Master Guru';
        $data['guru'] = $this->guru_model->getGuru();
        $this->load->view('templates/header', $data);
        $this->load->view('guru/index');
        $this->load->view('templates/admin_footer');
    }

    public function detail($id)
    {
        $data['user'] = $this->session->userdata();
        $data['title'] = 'Detail Data guru';
        $data['guru'] = $this->guru_model->getGuruById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('guru/detail', $data);
        $this->load->view('templates/admin_footer');
    }

    public function tambah()
    {
        $data['user'] = $this->session->userdata();
        $data['title'] = 'Form Tambah Data guru';
        $data['jabatan'] = $this->jabatan_model->getAlljabatan();

        $this->form_validation->set_rules('nip', 'NIP', 'required|max_length[18]');
        $this->form_validation->set_rules('nm_guru', 'Nama guru', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tp_lhr', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tg_lhr', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('nohp', 'No HP', 'required|is_numeric');
        $this->form_validation->set_rules('email', 'Email', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('guru/tambah');
            $this->load->view('templates/admin_footer');
        } else {
            $this->guru_model->tambahDataguru();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('guru');
        }
    }

    public function ubah($id)
    {
        $data['user'] = $this->session->userdata();
        $data['title'] = 'Form Ubah Data guru';
        $data['guru'] = $this->guru_model->getGuruById($id);
        $data['jabatan'] = $this->jabatan_model->getAlljabatan();
        $data['agama'] = ['Islam', 'Kristen', 'Hindu', 'Buddha'];

        $this->form_validation->set_rules('nip', 'NIP', 'required|min_length[18]|is_numeric');
        $this->form_validation->set_rules('nm_guru', 'Nama guru', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('tp_lhr', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tg_lhr', 'Tanggal Lahir', 'required');
        $this->form_validation->set_rules('nohp', 'No HP', 'required|is_numeric');
        $this->form_validation->set_rules('email', 'Email', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('guru/ubah', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $this->guru_model->ubahDataguru($id);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('guru');
        }
    }

    public function hapus($id)
    {
        $this->guru_model->softDeleteGuru($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('guru');
    }

    public function cetak()
    {
        $dompdf = new Dompdf();
        $data['cetak_guru'] = $this->db->query("SELECT * FROM m_guru ORDER BY kd_guru DESC")->result();
        $html =  $this->load->view('cetak/cetak_guru', $data, true);
        $dompdf->load_html($html);
        $dompdf->set_paper('A4', 'landscape');
        $dompdf->render();
        $pdf = $dompdf->output();
        $dompdf->stream('Data Guru.pdf', array("Attachment" => false));
    }
}
