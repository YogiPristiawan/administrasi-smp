<?php
class User_model extends CI_model
{

    public function getUserData($username)
    {
        $this->db->select(
            'tb_user.id_user, 
            tb_user.username,
            tb_user.password,
            tb_user.nama, 
            tb_user.nip, 
            tb_user.id_akses, 
            tb_akses.keterangan,'
        );
        $this->db->from('tb_user');
        $this->db->join('tb_akses', 'tb_user.id_akses = tb_akses.id_akses');
        $this->db->where('tb_user.username', $username);
        return $this->db->get()->row_array();
    }
}
