<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak_Filter extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        require_once APPPATH.'third_party/dompdf/dompdf_config.inc.php';
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = "Cetak Siswa";
        $data['kelas'] = $this->db->get('m_kelas')->result();
        $this->load->view('templates/admin_header', $data);
        $this->load->view('cetak/laporan', $data);  
        $this->load->view('templates/admin_footer');
    }

    public function filter($id)
    {
        if ($id == 0) {
            $data = $this->db->get('m_siswa')->result();
        }
        else
        {
            $data = $this->db->get_where('m_siswa', ['kd_kelas'=>$id])->result();
        }
            $dt['siswa'] = $data;
            $dt['kd_kelas'] = $id;
            $this->load->view('cetak/result', $dt);
    }

    public function cetak($id)
    {
        if ($id == 0) {
            $data = $this->db->get('m_siswa')->result();
        }
        else
        {
            $data = $this->db->get_where('m_siswa', ['kd_kelas'=>$id])->result();
        }
            $dt['siswa'] = $data;
            $dompdf = new Dompdf();
            $html =  $this->load->view('cetak/cetak_siswa', $dt, true);
            $dompdf->load_html($html);
            $dompdf->set_paper('A4', 'landscape');
            $dompdf->render();
            $pdf = $dompdf->output();
            $dompdf->stream('Data Siswa.pdf', array("Attachment" => false));
    }

}