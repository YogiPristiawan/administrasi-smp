<?php
class pengajar_model extends CI_model
{
    public function getPengajar()
    {
        $this->db->select('
        m_pengajar.id,
        m_pengajar.kd_mapel, 
        m_pengajar.nip, 
        m_mapel.nm_mapel, 
        m_guru.nm_guru');

        $this->db->from('m_pengajar');
        $this->db->join('m_mapel', 'm_mapel.kd_mapel = m_pengajar.kd_mapel');
        $this->db->join('m_guru', 'm_guru.nip = m_pengajar.nip');

        return $this->db->get()->result_array();
    }

    public function getPengajarById($id)
    {
        $this->db->select('
        m_pengajar.id,
        m_pengajar.kd_mapel, 
        m_pengajar.nip, 
        m_mapel.nm_mapel, 
        m_guru.nm_guru');

        $this->db->from('m_pengajar');
        $this->db->join('m_mapel', 'm_mapel.kd_mapel = m_pengajar.kd_mapel');
        $this->db->join('m_guru', 'm_guru.nip = m_pengajar.nip');
        $this->db->where('m_pengajar.id', $id);

        return $this->db->get()->row_array();
    }

    public function getPengajarByNip($nip)
    {
        return $this->db->get_where('m_pengajar', ['nip' => $nip])->result_array();
    }

    public function getMapelByNip($nip)
    {
        $this->db->select('
            m_mapel.kd_mapel,
            m_mapel.nm_mapel
        ');
        $this->db->from('m_pengajar');
        $this->db->join('m_mapel', 'm_mapel.kd_mapel = m_pengajar.kd_mapel');
        $this->db->where('m_mapel.deleted_at', NULL);
        $this->db->where('m_pengajar.nip', $nip);

        return $this->db->get()->result_array();
    }

    public function ubahDataPengajar($id)
    {

        $data = [
            'kd_mapel' => $this->input->post('kd_mapel', true),
            'nip' => $this->input->post('nip', true)
        ];

        $this->db->where('id', $id);
        $this->db->update('m_pengajar', $data);
    }

    public function deleteDataPengajar($id)
    {

        $this->db->delete('m_pengajar', ['id' => $id]);
    }

    public function tambahDataPengajar()
    {
        $kd_mapel = $this->input->post('kd_mapel', true);
        $nip = $this->input->post('nip', true);
        $data = [
            'kd_mapel' => $kd_mapel,
            'nip' => $nip
        ];

        $query = $this->db->get_where('m_pengajar', ['nip' => $nip, 'kd_mapel' => $kd_mapel])->row_array();  //cek apakah sudah terdaftar

        if ($query) {
            return TRUE;
        } else {
            $this->db->insert('m_pengajar', $data);
        }
    }
}
