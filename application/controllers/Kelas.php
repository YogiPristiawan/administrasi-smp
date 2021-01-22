<?php
defined('BASEPATH') or exit('id direct script access allowed');

class Kelas extends CI_Controller
{
    public function __construct()
    {
        require_once APPPATH . 'third_party/dompdf/dompdf_config.inc.php';
        parent::__construct();
        $this->load->model('kelas_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->session->userdata();
        $data['title'] = 'Halaman Master Kelas';
        $data['kelas'] = $this->kelas_model->getAllKelas();
        for ($i = 0; $i < count($data['kelas']); $i++) {
            $kd_kelas = $data['kelas'][$i]['kd_kelas'];
            $data['kelas'][$i]['jml_siswa'] = $this->kelas_model->jumlahSiswaPerKelas($kd_kelas); //menghitung jumlah siswa
        }

        $this->load->view('templates/admin_header', $data);
        $this->load->view('kelas/index');
        $this->load->view('templates/admin_footer');
    }

    public function hapus($kd_kelas)
    {
        $this->kelas_model->softDeleteDataKelas($kd_kelas);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('kelas');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data kelas';
        $data['user'] = $this->session->userdata();

        $this->form_validation->set_rules('nm_kelas', 'Nama kelas', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('kelas/tambah');
            $this->load->view('templates/admin_footer');
        } else {
            $this->kelas_model->tambahDatakelas();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('kelas');
        }
    }

    public function ubah($kd_kelas)
    {
        $data['title'] = 'Form Ubah Data Kelas';
        $data['user'] = $this->session->userdata();
        $data['kelas'] = $this->kelas_model->getkelasByKd_kelas($kd_kelas);

        // $this->form_validation->set_rules('kd_kelas', 'Kode kelas', 'required');
        $this->form_validation->set_rules('nm_kelas', 'Nama Kelas', 'required');
        $this->form_validation->set_rules('jml_siswa', 'Jumlah Siswa', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('kelas/ubah', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $this->kelas_model->ubahDatakelas();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('kelas');
        }
    }

    public function cetak()
    {
        $dompdf = new Dompdf();
        $data['cetak_kelas'] = $this->db->query("SELECT * FROM m_kelas ORDER BY kd_kelas DESC")->result();
        $html =  $this->load->view('cetak/cetak_kelas', $data, true);
        $dompdf->load_html($html);
        $dompdf->set_paper('A4', 'potrait');
        $dompdf->render();
        $pdf = $dompdf->output();
        $dompdf->stream('Data kelas.pdf', array("Attachment" => false));
    }
}
