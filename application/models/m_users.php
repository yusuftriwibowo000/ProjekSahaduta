<?php  


/**
* 
*/
class m_users extends CI_Model
{
	
	private $table_name = "tb_pasien";

	private $primary = "no_rm";

	function get_all($no_rm){

		#Get all data users
		$this->db->where("no_rm",$no_rm);
		$data=$this->db->get($this->table_name);
		return $data->result();

	}

	function get_by_no_rm($no_rm){

		#Get data user by id
		$this->db->where($this->primary,$no_rm);
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

	function delete($no_rm){
		#Delete data user by id
		$this->db->where($this->primary,$no_rm);
		$delete=$this->db->delete($this->table_name);

		return $delete;
	}

	function update($no_rm,$data){
		#Update data user by id
		$this->db->where($this->primary,$no_rm);
		$update=$this->db->update($this->table_name,$data);
		if ($update) {
			$update=$this->get_by_no_rm($no_rm);
		}

		return $update;
	}

}

?>