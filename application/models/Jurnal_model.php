<?php
class jurnal_model extends CI_model
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
}
