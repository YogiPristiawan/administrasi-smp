<?php
class Presensi_model extends CI_model
{
    public function getAllPresensi()
    {
        return $this->db->get('m_presensi')->result_array();
    }
}