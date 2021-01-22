<?php
class Mapel_model extends CI_model
{
    public function getMapel()
    {
        return $this->db->get_where('m_mapel', ['deleted_at' => NULL])->result_array();
    }

    public function getMapelBykd_mapel($kd_mapel)
    {
        return $this->db->get_where('m_mapel', ['kd_mapel' => $kd_mapel])->row_array();
    }

    public function softDeleteDataMapel($kd_mapel)
    {
        $this->db->where('kd_mapel', $kd_mapel);
        $this->db->update('m_mapel', ['deleted_at' => date('Y-m-d')]);
    }

    public function tambahDataMapel()
    {
        $nm_mapel = $this->input->post('nm_mapel', true);
        $data = [
            "nm_mapel" => $nm_mapel
        ];
        // cek apakah sudah terdaftar
        $query = $this->db->get_where('m_mapel', ['nm_mapel' => $nm_mapel, 'deleted_at' => NULL])->row_array();
        if ($query) {
            return TRUE;
        } else {
            $this->db->insert('m_mapel', $data);
        }
    }

    public function ubahDataMapel($kd_mapel)
    {
        $data = [
            "nm_mapel" => $this->input->post('nm_mapel', true),
        ];

        $this->db->where('kd_mapel', $kd_mapel);
        $this->db->update('m_mapel', $data);
    }
}
