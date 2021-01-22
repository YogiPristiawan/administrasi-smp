<?php
function is_login()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('auth');
    }
}

function is_admin()
{
    $ci = get_instance();
    $akses = $ci->db->get_where('tb_akses', ['keterangan' => 'admin'])->row_array();
    if ($ci->session->userdata('id_akses') != $akses['id_akses']) {
        redirect('blocked');
    }
}
