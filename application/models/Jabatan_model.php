<?php
class Jabatan_model extends CI_model
{
    public function getAllJabatan()
    {
        return $this->db->get_where('m_jabatan', 'deleted_at', NULL)->result_array();
    }

    public function getJabatanBykd_jab($kd_jab)
    {
        return $this->db->get_where('m_jabatan', ['kd_jab' => $kd_jab])->row_array();
    }

    public function softDeleteDataJabatan($kd_jab)
    {
        $this->db->where('kd_jab', $kd_jab);
        $this->db->update('m_jabatan', ['deleted_at' => date('Y-m-d')]);
    }

    public function tambahDataJabatan()

    {
        // $kode = "JAB-" . $this->input->post('kd_jab', true);
        $data = [
            // "kd_jab" => $kode,
            "nm_jab" => $this->input->post('nm_jab', true),
        ];

        $this->db->insert('m_jabatan', $data);
    }

    public function ubahDataJabatan()
    {
        $data = [
            // "kd_jab" => $this->input->post('kd_jab', true),
            "nm_jab" => $this->input->post('nm_jab', true),
        ];

        $this->db->where('kd_jab', $this->input->post('kd_jab'));
        $this->db->update('m_jabatan', $data);
    }
}
