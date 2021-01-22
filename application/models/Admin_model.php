<?php
class Admin_model extends CI_model
{
    public function hitungJumlahGuru()
    {
        $query = $this->db->get('m_guru')->num_rows();
        return $query;
    }

    public function hitungJumlahSiswa()
    {
        $query = $this->db->get('m_siswa')->num_rows();
        return $query;
    }
}
