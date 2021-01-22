<?php
class Jam_model extends CI_model
{
    public function getAllJam()
    {
        return $this->db->get_where('m_jam', ['deleted_at' => NULL])->result_array();
    }

    public function getJamBykd_jam($kd_jam)
    {
        return $this->db->get_where('m_jam', ['kd_jam' => $kd_jam, 'deleted_at' => NULL])->row_array();
    }

    public function softDeleteJam($kd_jam)
    {
        $this->db->where('kd_jam', $kd_jam);
        $this->db->update('m_jam', ['deleted_at' => date('Y-m-d')]);
    }

    public function tambahDataJam()

    {
        $jam_ke = $this->input->post('jam_ke', true);
        $jam_awal = $this->input->post('jam_awal', true);
        $jam_akhir = $this->input->post('jam_akhir', true);
        $data = [
            "jam_ke" => $jam_ke,
            "jam_awal" => $jam_awal,
            "jam_akhir" => $jam_akhir
        ];
        //cek apakah sudah terdaftar
        $query = $this->db->get_where('m_jam', ['jam_ke' => $jam_ke, 'deleted_at' => NULL])->row_array();
        if ($query) {
            return TRUE;
        } else {
            $this->db->insert('m_jam', $data);
        }
    }

    public function ubahDataJam($kd_jam)
    {
        $jam_ke = $this->input->post('jam_ke', true);
        $jam_awal = $this->input->post('jam_awal', true);
        $jam_akhir = $this->input->post('jam_akhir', true);
        $data = [
            "jam_ke" => $jam_ke,
            "jam_awal" => $jam_awal,
            "jam_akhir" => $jam_akhir
        ];

        $query = "SELECT * FROM m_jam WHERE jam_ke = '$jam_ke' AND jam_awal != '$jam_awal' AND jam_akhir != '$jam_akhir'";
        $query = $this->db->query($query)->row_array();  //cek duplikat

        if ($query) {
            return TRUE;
        } else {
            $this->db->where('kd_jam', $kd_jam);
            $this->db->update('m_jam', $data);
        }
    }
}
