<?php
class Guru_model extends CI_model
{
    public function getGuru()
    {
        $this->db->select('*');
        $this->db->from('m_guru');
        $this->db->join('m_jabatan', 'm_jabatan.kd_jab = m_guru.kd_jab');
        $this->db->where('m_guru.deleted_at', NULL);

        return $this->db->get()->result_array();
    }
    public function getAllNamaGuru()
    {
        $this->db->select('nip, nm_guru');
        $this->db->from('m_guru');
        $this->db->where('deleted_at', NULL);

        return $this->db->get()->result_array();
    }

    public function getGuruById($id)
    {
        $this->db->select('*');
        $this->db->from('m_guru');
        $this->db->join('m_jabatan', 'm_jabatan.kd_jab = m_guru.kd_jab');
        $this->db->where('id', $id);
        return $this->db->get()->row_array();
    }

    public function tambahDataGuru()
    {
        $data_guru = [
            "nip" => $this->input->post('nip', true),
            "nm_guru" => $this->input->post('nm_guru', true),
            "kd_jab" => $this->input->post('kd_jab', true),
            "jenkel" => $this->input->post('jenkel', true),
            "agama" => $this->input->post('agama', true),
            "alamat" => $this->input->post('alamat', true),
            "tp_lhr" => $this->input->post('tp_lhr', true),
            "tg_lhr" => $this->input->post('tg_lhr', true),
            "nohp" => $this->input->post('nohp', true),
            "email" => $this->input->post('email', true),
        ];
        $this->db->insert('m_guru', $data_guru);
    }

    public function softDeleteGuru($id)
    {
        $this->db->where('id', $id);
        $this->db->update('m_guru', ['deleted_at' => date('Y-m-d')]);
    }

    public function ubahDataGuru($id)
    {
        $data = [
            "nip" => $this->input->post('nip', true),
            "nm_guru" => $this->input->post('nm_guru', true),
            "kd_jab" => $this->input->post('kd_jab', true),
            "jenkel" => $this->input->post('jenkel', true),
            "agama" => $this->input->post('agama', true),
            "alamat" => $this->input->post('alamat', true),
            "tp_lhr" => $this->input->post('tp_lhr', true),
            "tg_lhr" => $this->input->post('tg_lhr', true),
            "nohp" => $this->input->post('nohp', true),
            "email" => $this->input->post('email', true),
        ];

        $this->db->where('id', $id);
        $this->db->update('m_guru', $data);
    }
}
