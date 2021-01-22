<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_jurnal_mengajar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Laporan_jurnal_model');
    }

    // public function index()
    // {
    //     $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    //     $data['title'] = 'Halaman Cetak Jurnal Mengajar';
    //     $this->load->view('templates/admin_header', $data);
    //     $this->load->view('laporan_jurnal_mengajar/index');
    //     $this->load->view('templates/auth_footer');
    // }

    public function index()
    {
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Halaman Cetak Jurnal Mengajar';
        if(isset($_GET['filter']) && ! empty($_GET['filter'])){ // Cek apakah user telah memilih filter dan klik tombol tampilkan
            $filter = $_GET['filter']; // Ambil data filder yang dipilih user
            if($filter == '1'){ // Jika filter nya 1 (per tanggal)
                $tg_jurnal = $_GET['tanggal'];
                
                $ket = 'Data Jurnal Mengajar Tanggal '.date('d-m-y', strtotime($tg_jurnal));
                $url_cetak = 'transaksi/cetak?filter=1&tanggal='.$tg_jurnal;
                $transaksi = $this->Laporan_jurnal_model->view_by_date($tg_jurnal); // Panggil fungsi view_by_date yang ada di TransaksiModel
            } else if($filter == '2'){ // Jika filter nya 2 (per bulan)
                $bulan = $_GET['bulan'];
                $tahun = $_GET['tahun'];
                $nama_bulan = array('', 'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
                
                $ket = 'Data Jurnal Mengajar Bulan '.$nama_bulan[$bulan].' '.$tahun;
                $url_cetak = 'transaksi/cetak?filter=2&bulan='.$bulan.'&tahun='.$tahun;
                $transaksi = $this->Laporan_jurnal_model->view_by_month($bulan, $tahun); // Panggil fungsi view_by_month yang ada di TransaksiModel
            } else{ // Jika filter nya 3 (per tahun)
                $tahun = $_GET['tahun'];
                
                $ket = 'Data Jurnal Mengajar Tahun '.$tahun;
                $url_cetak = 'transaksi/cetak?filter=3&tahun='.$tahun;
                $transaksi = $this->Laporan_jurnal_model->view_by_year($tahun); // Panggil fungsi view_by_year yang ada di TransaksiModel
            }
            } else{ // Jika user tidak mengklik tombol tampilkan
                $ket = 'Semua Data Jurnal Mengajar';
                $url_cetak = 'transaksi/cetak';
                $transaksi = $this->Laporan_jurnal_model->view_all(); // Panggil fungsi view_all yang ada di TransaksiModel
            }
            
            $data['ket'] = $ket;
            $data['url_cetak'] = base_url('index.php/'.$url_cetak);
            $data['transaksi'] = $transaksi;
            $data['option_tahun'] = $this->Laporan_jurnal_model->option_tahun();
            $this->load->view('templates/admin_header', $data);
            $this->load->view('laporan_jurnal_mengajar/index');
            $this->load->view('templates/auth_footer');
        }
}