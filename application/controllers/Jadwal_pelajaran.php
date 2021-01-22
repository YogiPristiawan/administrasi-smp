<?php
defined('BASEPATH') or exit('id direct script access allowed');

class Jadwal_pelajaran extends CI_Controller
{
    public function __construct()
    {
        require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
        parent::__construct();
        $this->load->model('Jadwal_model');
        $this->load->model('Kelas_model');
        $this->load->model('Mapel_model');
        $this->load->model('Guru_model');
        $this->load->model('Jam_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Form Tambah Data jadwal';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['jadwal'] = $this->Jadwal_model->getAllJadwal();
        $data['kelas'] = $this->Kelas_model->getAllKelas();
        $data['mapel'] = $this->Mapel_model->getMapel();
        $data['guru'] = $this->Guru_model->getGuru();
        $data['jam'] = $this->Jam_model->getAllJam();

        $this->form_validation->set_rules('hari', 'Hari', 'required');
        $this->form_validation->set_rules('jam_ke', 'Jam Ke', 'required');
        $this->form_validation->set_rules('jam_mulai', 'Jam Mulai', 'required');
        $this->form_validation->set_rules('jam_akhir', 'Jam Akhir', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('mapel', 'mapel', 'required');
        $this->form_validation->set_rules('guru', 'guru', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/admin_header', $data);
            $this->load->view('jadwal_pelajaran/index');
            $this->load->view('templates/admin_footer');
        } else {
            $this->jadwal_model->tambahDatajadwal();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('Jadwal_pelajaran');
        }
        
    }

    public function mapel_filter()
    {
        $kd_guru = $this->input->post('kd_guru');
        if($this->input->post('kd_guru')) {
            echo $this->Jadwal_model->mapel_filter($kd_guru); 
        }
    }
}