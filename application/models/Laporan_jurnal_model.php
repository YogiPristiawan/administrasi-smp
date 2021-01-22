<?php if ( ! 
defined('BASEPATH')) exit('No direct script access allowed');

class Laporan_jurnal_model extends CI_Model 
{
    
    public function view_by_date($date)
    {
        $this->db->where('DATE(tg_jurnal)', $date); // Tambahkan where tanggal nya
        
        return $this->db->get('m_jurnal_mengajar')->result();// Tampilkan data m_jurnal_mengajar sesuai tanggal yang diinput oleh user pada filter
    }
    
    public function view_by_month($month, $year)
    {
        $this->db->where('MONTH(tg_jurnal)', $month); // Tambahkan where bulan
        $this->db->where('YEAR(tg_jurnal)', $year); // Tambahkan where tahun
        
        return $this->db->get('m_jurnal_mengajar')->result(); // Tampilkan data m_jurnal_mengajar sesuai bulan dan tahun yang diinput oleh user pada filter
    }
    
    public function view_by_year($year)
    {
        $this->db->where('YEAR(tg_jurnal)', $year); // Tambahkan where tahun
        
        return $this->db->get('m_jurnal_mengajar')->result(); // Tampilkan data m_jurnal_mengajar sesuai tahun yang diinput oleh user pada filter
    }
    
    public function view_all()
    {
    return $this->db->get('m_jurnal_mengajar')->result(); // Tampilkan semua data m_jurnal_mengajar
    }
    
    public function option_tahun()
    {
        $this->db->select('YEAR(tg_jurnal) AS tahun'); // Ambil Tahun dari field tg_jurnal
        $this->db->from('m_jurnal_mengajar'); // select ke tabel m_jurnal_mengajar
        $this->db->order_by('YEAR(tg_jurnal)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
        $this->db->group_by('YEAR(tg_jurnal)'); // Group berdasarkan tahun pada field tg_jurnal
        
        return $this->db->get()->result(); // Ambil data pada tabel m_jurnal_mengajar sesuai kondisi diatas
    }
}