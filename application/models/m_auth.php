<?php

/**
 * 
 */
class m_auth extends CI_Model
{

    private $table_name = "tb_pasien";

    function get_user_by_emai($username, $password)
    {
        $this->db->where('no_rm', $username);
        $this->db->where('password', $password);

        return $this->db->get($this->table_name)->row();
    }
}
