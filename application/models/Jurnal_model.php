<?php
class Jurnal_model extends CI_model
{
    public function getAlljurnal()
    {
        return $this->db->get('m_jurnal_mengajar')->result_array();
    }
    public function getLastKd_jurnal()
    {
        $this->db->select('kd_jurnal');
        $this->db->from('tb_jurnal_mengajar');
        $this->db->order_by('id', 'DESC');
        return $this->db->get()->row_array();
    }
    public function tambahDataJurnal()
    {
        $jumlah_siswa = $this->input->post('jumlah_siswa');

        $hadir = 0;
        $sakit = 0;
        $izin = 0;
        $terlambat = 0;
        for ($i = 1; $i <= $jumlah_siswa; $i++) {
            $nis = $this->input->post('nis' . $i);
            switch ($this->input->post('absen' . $i)) {
                case 'h':
                    $hadir += 1;
                    break;
                case 's':
                    $sakit += 1;
                    break;
                case 'i':
                    $izin += 1;
                case 't':
                    $terlambat += 1;
                    break;
            }
        }

        $this->db->insert('tb_jurnal_mengajar', [
            'kd_jurnal' => $this->input->post('kd_jurnal'),
            'tg_jurnal' => date('Y-m-d'),
            'kd_jam' => $this->input->post('kd_jam'),
            'kd_kelas' => $this->input->post('kd_kelas'),
            'materi' => $this->input->post('materi'),
            'kd_mapel' => $this->input->post('kd_mapel'),
            'nip_guru' => $this->input->post('nip_guru'),
            'catatan' => $this->input->post('catatan'),
            'hadir' => $hadir,
            'sakit' => $sakit,
            'izin' => $izin,
            'terlambat' => $terlambat
        ]);
    }
}
