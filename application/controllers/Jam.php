<?php
defined('BASEPATH') or exit('id direct script access allowed');

class Jam extends CI_Controller
{
    public function __construct()
    {
        require_once APPPATH . 'third_party/dompdf/dompdf_config.inc.php';
        parent::__construct();
        is_not_login();
        $this->load->model('jam_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->session->userdata();
        $data['title'] = 'Halaman Master Jam Pelajaran';
        $data['jam'] = $this->jam_model->getAllJam();
        $this->load->view('templates/header', $data);
        $this->load->view('jam/index');
        $this->load->view('templates/admin_footer');
    }

    public function hapus($kd_jam)
    {
        $this->jam_model->softDeleteJam($kd_jam);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('jam');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Jam';
        $data['user'] = $this->session->userdata();

        $this->form_validation->set_rules('jam_ke', 'Jam Ke', 'required');
        $this->form_validation->set_rules('jam_awal', 'Jam Awal', 'required');
        $this->form_validation->set_rules('jam_akhir', 'Jam Akhir', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('jam/tambah');
            $this->load->view('templates/admin_footer');
        } else {
            $query = $this->jam_model->tambahDataJam();
            if ($query) {
                $data['status'] = $query;
                $data['pesan'] = 'Jam pelajaran tersebut sudah terdaftar!';
                $this->load->view('templates/header', $data);
                $this->load->view('jam/tambah');
                $this->load->view('templates/admin_footer');
            } else {
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('jam');
            }
        }
    }

    public function ubah($kd_jam)
    {
        $data['title'] = 'Form Ubah Data Jam';
        $data['user'] = $this->session->userdata();
        $data['jam'] = $this->jam_model->getJamByKd_jam($kd_jam);

        $this->form_validation->set_rules('jam_ke', 'Jam Ke', 'required');
        $this->form_validation->set_rules('jam_awal', 'Jam Awal', 'required');
        // $this->form_validation->set_rules('jam_akhir', 'Jam Akhir', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('jam/ubah');
            $this->load->view('templates/admin_footer');
        } else {
            if ($this->jam_model->ubahDatajam($kd_jam)) {
                $data['status'] = TRUE;
                $data['pesan'] = 'Jam pelajaran tersebut sudah terdaftar!';
                $this->load->view('templates/header', $data);
                $this->load->view('jam/ubah');
                $this->load->view('templates/admin_footer');
            } else {
                $this->session->set_flashdata('flash', 'Diubah');
                redirect('jam');
            }
        }
    }

    public function cetak()
    {
        $dompdf = new Dompdf();
        $data['cetak_jab'] = $this->db->query("SELECT * FROM m_jabatan ORDER BY kd_jab DESC")->result();
        $html =  $this->load->view('cetak/cetak_jab', $data, true);
        $dompdf->load_html($html);
        $dompdf->set_paper('A4', 'potrait');
        $dompdf->render();
        $pdf = $dompdf->output();
        $dompdf->stream('Data Jabatan.pdf', array("Attachment" => false));
    }
}
