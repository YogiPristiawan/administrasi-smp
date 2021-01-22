<?php
class Kelas_model extends CI_model
{
    public function getAllKelas()
    {
        $this->db->select('*');
        $this->db->from('m_kelas');
        $this->db->order_by('nm_kelas', 'ASC');
        $this->db->where('deleted_at', NULL);

        return $this->db->get()->result_array();
    }

    public function getkelasByKd_kelas($kd_kelas)
    {
        return $this->db->get_where('m_kelas', ['kd_kelas' => $kd_kelas, 'deleted_at' => NULL])->row_array();
    }

    public function softDeleteDataKelas($kd_kelas)
    {
        $this->db->where('kd_kelas', $kd_kelas);
        $this->db->update('m_kelas', ['deleted_at' => date('Y-m-d')]);
    }

    public function tambahDataKelas()
    {
        $data = [
            "nm_kelas" => $this->input->post('nm_kelas', true),
        ];

        $this->db->insert('m_kelas', $data);
    }

    public function ubahDataKelas()
    {
        $data = [
            // "kd_kelas" => $this->input->post('kd_kelas', true),
            "nm_kelas" => $this->input->post('nm_kelas', true),
            "jml_siswa" => $this->input->post('jml_siswa', true),
        ];

        $this->db->where('kd_kelas', $this->input->post('kd_kelas'));
        $this->db->update('m_kelas', $data);
    }

    public function jumlahSiswaPerKelas($kd_kelas)
    {
        $this->db->select('*');
        $this->db->from('m_siswa');
        $this->db->join('m_kelas', 'm_kelas.kd_kelas = m_siswa.kd_kelas');
        $this->db->where('m_siswa.kd_kelas', $kd_kelas);
        return $this->db->get()->num_rows();
    }
}
