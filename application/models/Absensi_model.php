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
        $jumlah_siswa = $this->input->post('jumlah_siswa');

        $hadir = [];
        $sakit = [];
        $izin = [];
        $terlambat = [];
        for ($i = 1; $i <= $jumlah_siswa; $i++) {
            $nis = $this->input->post('nis' . $i);
            switch ($this->input->post('absen' . $i)) {
                case 'h':
                    $hadir[] = $nis;
                    break;
                case 's':
                    $sakit[] = $nis;
                    break;
                case 'i':
                    $izin[] = $nis;
                case 't':
                    $terlambat[] = $nis;
                    break;
            }
        }

        $this->db->insert('m_presensi', [
            'tg_presensi' => date('Y-m-d'),
            'kd_kelas' => $this->input->post('kd_kelas'),
            'th_ajaran' => $this->input->post('th_ajaran'),
            'semester' => $this->input->post('semester'),
            'hadir' => json_encode($hadir),
            'sakit' => json_encode($sakit),
            'izin' => json_encode($izin),
            'terlambat' => json_encode($terlambat)

        ]);
    }
}
