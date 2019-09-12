<?php  


/**
* 
*/
class m_pesan extends CI_Model
{
	
	private $table_name = "tb_pemesanan";

	private $primary = "id_pemesanan";

	function get_all($id_pemesanan){

		#Get all data users
		$this->db->where("id_pemesanan",$id_pemesanan);
		$data=$this->db->get($this->table_name);
		return $data->result();

	}

	function get_by_id_pemesanan($id_pemesanan){

		#Get data user by id
		$this->db->where($this->primary,$id_pemesanan);
		$data=$this->db->get($this->table_name);

		return $data->row();
	}


	/*function get_by_username_email($username,$email){		
		#Get data by username or email
		$this->db->where('USERNAME',$username);
		$this->db->or_where('EMAIL',$email);
		$data=$this->db->get($this->table_name)->row();

		return $data;
	}*/


	function insert($data){

		#Insert data to table tb_users
		$insert=$this->db->insert($this->table_name,$data);

		return $insert;
	}

	function delete($id_pemesanan){
		#Delete data user by id
		$this->db->where($this->primary,$id_pemesanan);
		$delete=$this->db->delete($this->table_name);

		return $delete;
	}

	function update($id_pemesanan,$data){
		#Update data user by id
		$this->db->where($this->primary,$id_pemesanan);
		$update=$this->db->update($this->table_name,$data);
		if ($update) {
			$update=$this->get_by_id_pemesanan($id_pemesanan);
		}

		return $update;
	}

}

?>