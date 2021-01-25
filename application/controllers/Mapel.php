<?php
defined('BASEPATH') or exit('id direct script access allowed');

class Mapel extends CI_Controller
{
    public function __construct()
    {
        require_once APPPATH . 'third_party/dompdf/dompdf_config.inc.php';
        parent::__construct();
        is_not_login();
        $this->load->model('mapel_model');
        $this->load->model('guru_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Halaman Master Mapel';
        $data['user'] = $this->session->userdata();
        $data['mapel'] = $this->mapel_model->getMapel();
        $this->load->view('templates/header', $data);
        $this->load->view('mapel/index');
        $this->load->view('templates/admin_footer');
    }

    public function hapus($kd_mapel)
    {
        $this->mapel_model->softDeleteDataMapel($kd_mapel);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('mapel');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data mapel';
        $data['user'] = $this->session->userdata();

        $this->form_validation->set_rules('nm_mapel', 'Nama mapel', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mapel/tambah');
            $this->load->view('templates/admin_footer');
        } else {
            if ($this->mapel_model->tambahDatamapel()) {               // cek duplikat entry
                $data['status'] = TRUE;
                $data['pesan'] = 'Mata Pelajaran sudah terdaftar!';

                $this->load->view('templates/header', $data);
                $this->load->view('mapel/tambah');
                $this->load->view('templates/admin_footer');
            } else {
                $this->session->set_flashdata('flash', 'Ditambahkan');      //data berhasil ditambahkan
                redirect('mapel');
            }
        }
    }

    public function ubah($kd_mapel)
    {
        $data['title'] = 'Form Ubah Data Mata Pelajaran';
        $data['user'] = $this->session->userdata();
        $data['mapel'] = $this->mapel_model->getMapelBykd_mapel($kd_mapel);

        $this->form_validation->set_rules('nm_mapel', 'Nama Mapel', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('mapel/ubah', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $this->mapel_model->ubahDatamapel($kd_mapel);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('mapel');
        }
    }

    public function cetak()
    {
        $dompdf = new Dompdf();
        $data['cetak_mapel'] = $this->db->query("SELECT * FROM m_mapel ORDER BY kd_mapel DESC")->result();
        $html =  $this->load->view('cetak/cetak_mapel', $data, true);
        $dompdf->load_html($html);
        $dompdf->set_paper('A4', 'potrait');
        $dompdf->render();
        $pdf = $dompdf->output();
        $dompdf->stream('Data Mapel.pdf', array("Attachment" => false));
    }
}
