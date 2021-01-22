<?php
class Siswa_model extends CI_model
{

    public function getSiswa()
    {
        $this->db->select('*');
        $this->db->from('m_siswa');
        $this->db->join('m_kelas', 'm_kelas.kd_kelas = m_siswa.kd_kelas');

        return $this->db->get()->result_array();
    }

    public function getSiswaById($id)
    {
        $this->db->select('*');
        $this->db->from('m_siswa');
        $this->db->join('m_kelas', 'm_kelas.kd_kelas = m_siswa.kd_kelas');
        $this->db->where('id', $id);
        return $this->db->get()->row_array();
    }

    public function tambahDataSiswa()
    {
        $data = [
            "nis" => $this->input->post('nis', true),
            "nm_siswa" => $this->input->post('nm_siswa', true),
            "kd_kelas" => $this->input->post('kelas', true),
            "tp_lhr" => $this->input->post('tp_lhr', true),
            "tg_lhr" => $this->input->post('tg_lhr', true),
            "jenkel" => $this->input->post('jenkel', true),
            "agama" => $this->input->post('agama', true),
            "alamat" => $this->input->post('alamat', true),
            "nohp" => $this->input->post('nohp', true),
            "email" => $this->input->post('email', true),
            "th_ajaran" => $this->input->post('th_ajaran', true),
        ];
        $this->db->insert('m_siswa', $data);
    }

    public function ubahDatasiswa()
    {
        $data = [
            "nis" => $this->input->post('nis', true),
            "nm_siswa" => $this->input->post('nm_siswa', true),
            "kd_kelas" => $this->input->post('kelas', true),
            "tp_lhr" => $this->input->post('tp_lhr', true),
            "tg_lhr" => $this->input->post('tg_lhr', true),
            "jenkel" => $this->input->post('jenkel', true),
            "agama" => $this->input->post('agama', true),
            "alamat" => $this->input->post('alamat', true),
            "nohp" => $this->input->post('nohp', true),
            "email" => $this->input->post('email', true),
            "th_ajaran" => $this->input->post('th_ajaran', true),

        ];

        $this->db->where('nis', $this->input->post('nis'));
        $this->db->update('m_siswa', $data);
    }

    public function hapusDataSiswa($id)
    {
        $this->db->delete('m_siswa', ['id' => $id]);
    }
}
