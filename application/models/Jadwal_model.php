<?php
class Jadwal_model extends CI_model
{
    // public function getAllJadwal()
    // {
    //     return $this->db->get('tb_jadwal')->result_array();
    // }

    public function getAllJadwal() 
    {
        $this->db->select('*');
        $this->db->from('tb_jadwal');
        $this->db->join('m_jam', 'm_jam.kd_jam = tb_jadwal.kd_jam');
        return $this->db->get()->result_array();
    }

    public function getJadwalByKd_jadwal($kd_jadwal)
    {
        $this->db->select('*');
        $this->db->from('m_jadwal');
        $this->db->join('m_jam', 'm_jam.kd_jam = m_jadwal.kd_jam');
        $this->db->where('kd_jadwal', $kd_jadwal);
        return $this->db->get()->row_array();
    }

    // function mapel() {
    //     $user = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
    //     $kd = $this->db->get_where('m_guru' ,['nm_guru' => $user['nama']])->row_array();
    //     $this->db->select('*');
    //     $this->db->from('m_mapel');
    //     $this->db->where('kd_guru', $kd['kd_guru']);
    //     // return $this->db->get()->result_array();
    //     echo $kd['kd_guru'];
    // }

    function mapel_filter($kd_guru) 
    {
        $this->db->where('kd_guru', $kd_guru);
        $this->db->order_by('kd_mapel', 'ASC');
        $query = $this->db->get('m_mapel');
        $output = '<option value="">Pilih Mapel</option>';
        foreach($query->result() as $row)
        {
            $output .= '<option value="'.$row->kd_mapel.'">'.$row->kd_mapel.' -- '.$row->nm_mapel.'</option>';
        }
        return $output;
    }

    public function tambahDataJadwal()
    {
        $data = [
            "hari" => $this->input->post('hari', true),
            "jam_ke" => $this->input->post('jam_ke', true),
            "jam_mulai" => $this->input->post('jam_mulai', true),
            "jam_akhir" => $this->input->post('jam_akhir', true),
            "kelas" => $this->input->post('kelas', true),
            "mapel" => $this->input->post('mapel', true),
            "guru" => $this->input->post('guru', true),
        ];

        $this->db->insert('tb_jadwal', $data);
    }

}