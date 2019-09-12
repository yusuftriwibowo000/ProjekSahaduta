<?php

/**
 * 
 */
class m_auth extends CI_Model
{

	private $table_name = "tb_pasien";

	function get_user($no_rm, $password)
	{
		$this->db->where('no_rm', $no_rm);
		$this->db->where('password', $password);
		//$password = md5($passwordx);
		return $this->db->get($this->table_name)->row();
	}
}
