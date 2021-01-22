<?php
class Absensi_model extends CI_model
{
    public function getNamaSiswaByKd_kelas($kd_kelas)
    {
        $this->db->select(
            'nis,
            nm_siswa,
            kd_kelas'
        );
        $this->db->from('m_siswa');
        $this->db->where('kd_kelas', $kd_kelas);
        return $this->db->get()->result_array();
    }

    public function tambahDataAbsensi()
    {
        $data_jurnal = [
            "kelas" => $this->input->post('kelas', true),
            "kd_jurnal" => $this->input->post('kd_jurnal', true),
            "tg_jurnal" => date('Y-m-d', strtotime($this->input->post('tg_jurnal', true))),
            "jam_ke" => $this->input->post('jam_ke', true),
            "materi" => $this->input->post('materi', true),
            "mapel" => $this->input->post('mapel', true),
            "guru" => $this->input->post('guru', true),
            "catatan" => $this->input->post('catatan', true),
        ];
        $this->db->insert('m_jurnal_mengajar', $data_jurnal);

        $jumlah_siswa = $this->input->post('jumlah_siswa');
        for ($i = 1; $i <= $jumlah_siswa; $i++) {
            $data_presensi = [
                "id_presensi" => "",
                "kelas" => $this->input->post('kelas', true),
                "nis" => $this->input->post('nis' . $i),
                "tg_presensi" => date('Y-m-d', strtotime($this->input->post('tg_jurnal', true))),
                "nm_siswa" => $this->input->post('nm_siswa' . $i),
                "kehadiran" => $this->input->post('kehadiran' . $i),
            ];

            $this->db->insert('m_presensi', $data_presensi);
        }
    }
}
