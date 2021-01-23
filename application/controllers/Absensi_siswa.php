<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi_siswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('kelas_model');
        $this->load->model('pengajar_model');
        $this->load->model('absensi_model');
        $this->load->model('jurnal_model');
        $this->load->model('jam_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        switch (date('l')) {
            case 'Sunday':
                $hari = 'Minggu';
                break;
            case 'Monday':
                $hari = 'Senin';
                break;
            case 'Tuesday':
                $hari = 'Selasa';
                break;
            case 'Wednesday':
                $hari = 'Rabu';
                break;
            case 'Thursday':
                break;
            case 'Friday':
                $hari = 'Jumat';
                break;
            case 'Saturday':
                $hari = 'Sabtu';
                break;
        }
        $data['title'] = 'Halaman Absensi Siswa';
        $data['user'] = $this->session->userdata();
        $data['kelas'] = $this->kelas_model->getAllKelas();
        $data['mapel'] = $this->pengajar_model->getMapelByNip($this->session->userdata('nip'));
        $data['hari'] = $hari;

        $this->load->view('templates/header', $data);
        $this->load->view('absensi_siswa/index');
        $this->load->view('templates/auth_footer');
    }

    public function absen()
    {
        switch (date('l')) {
            case 'Sunday':
                $hari = 'Minggu';
                break;
            case 'Monday':
                $hari = 'Senin';
                break;
            case 'Tuesday':
                $hari = 'Selasa';
                break;
            case 'Wednesday':
                $hari = 'Rabu';
                break;
            case 'Thursday':
                break;
            case 'Friday':
                $hari = 'Jumat';
                break;
            case 'Saturday':
                $hari = 'Sabtu';
                break;
        }

        $this->form_validation->set_rules('kd_jurnal', 'Kode jurnal', 'required');
        $this->form_validation->set_rules('jam_ke', 'Jam Ke', 'required');
        $this->form_validation->set_rules('materi', 'Materi', 'required');
        $this->form_validation->set_rules('tg_jurnal', 'Tanggal jurnal', 'required');
        $this->form_validation->set_rules('guru', 'Guru', 'required');
        $this->form_validation->set_rules('catatan', 'Catatan', 'required');

        $kd_kelas = $this->input->post('kelas', true);
        $nm_mapel = $this->input->post('mapel', true);
        $th_ajaran = $this->input->post('th_ajaran', true);
        $semester = $this->input->post('semester', true);



        //generate kd_jurnal
        $lastKd_jurnal = $this->jurnal_model->getLastKd_jurnal();
        $kd_jurnal = $lastKd_jurnal['kd_jurnal'];

        $tg_kd_jurnal = substr($kd_jurnal, 3, -3);
        $trim = substr($kd_jurnal, 0, 11);                              //11 kode pertama (JRL20210122)
        $no = substr($kd_jurnal, -3);                                   //3 angka terakhir kd_jurnal

        if ($kd_kelas == "" || $nm_mapel == "" || $th_ajaran == "" || $semester == "") {
            redirect('absensi_siswa');
        } else {

            $data['title'] = 'Halaman Absensi Siswa';
            $data['user'] = $this->session->userdata();
            $data['kelas'] = $kd_kelas;
            $data['th_ajaran'] = $th_ajaran;
            $data['semester'] = $semester;
            $data['mapel'] = $nm_mapel;
            $data['hari'] = $hari;
            $data['jam_ke'] = $this->jam_model->getAllJam();
            $data['absensi'] = $this->absensi_model->getNamaSiswaByKd_kelas($kd_kelas);

            if ($lastKd_jurnal === NULL || date('Ymd') != $tg_kd_jurnal) {  //jika kosong atau beda tanggal dimulai dari 001
                $data['kd_jurnal'] = 'JRL' . date('Ymd') . '001';
            } else {                                                    //jika tanggal sama lanjutkan no jurnal

                $no =  (int)$no;                                            //jadikan int biar bisa dijumlah

                if ($no / 10 < 1) {                                      //satuan 001
                    $kd = $no + 1;
                    $kd = '00' . $kd;

                    $data['kd_jurnal'] = $trim . $kd;
                } else if ($no / 100 < 1) {                            //puluhan  010
                    $kd = $no + 1;
                    $kd = '0' . $kd;

                    $data['kd_jurnal'] = $trim . $kd;
                } else {                                             //ratusan    100
                    $kd = $no + 1;

                    $data['kd_jurnal'] = $trim . $kd;
                }
            }

            if ($this->form_validation->run() == FALSE) {
                $this->load->view('templates/header', $data);
                $this->load->view('absensi_siswa/proses_absensi');
                $this->load->view('templates/auth_footer');
            } else {
                $this->Absensi_model->tambahDataAbsensi();
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('absensi_siswa');
            }
        }
    }
}
