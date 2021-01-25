<?php
defined('BASEPATH') or exit('id direct script access allowed');

class Jabatan extends CI_Controller
{
    public function __construct()
    {
        require_once APPPATH . 'third_party/dompdf/dompdf_config.inc.php';
        parent::__construct();
        is_not_login();
        $this->load->model('jabatan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->session->userdata();
        $data['title'] = 'Halaman Master Jabatan';
        $data['jabatan'] = $this->jabatan_model->getAllJabatan();
        $this->load->view('templates/header', $data);
        $this->load->view('jabatan/index');
        $this->load->view('templates/admin_footer');
    }

    public function hapus($kd_jab)
    {
        $this->jabatan_model->softDeleteDataJabatan($kd_jab);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('jabatan');
    }

    public function tambah()
    {
        $data['title'] = 'Form Tambah Data Jabatan';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

        // $this->form_validation->set_rules('kd_jab', 'Kode Jabatan', 'required');
        $this->form_validation->set_rules('nm_jab', 'Nama Jabatan', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('jabatan/tambah');
            $this->load->view('templates/admin_footer');
        } else {
            $this->jabatan_model->tambahDatajabatan();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('jabatan');
        }
    }

    public function ubah($kd_jab)
    {
        $data['user'] = $this->session->userdata();
        $data['title'] = 'Form Ubah Data Jabatan';
        $data['jabatan'] = $this->jabatan_model->getJabatanBykd_jab($kd_jab);
        $this->form_validation->set_rules('nm_jab', 'Nama', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('jabatan/ubah', $data);
            $this->load->view('templates/admin_footer');
        } else {
            $this->jabatan_model->ubahDatajabatan();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('jabatan');
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
