<?php 
/**
 * 
 */
class modeladmin extends CI_model
{

	function cek_data($table, $npm){
		// $this->db->where($table, $data);
		$this->db->select("*");
		$this->db->from($table);
		$this->db->where('npm', $npm);

		$query = $this->db->get();

		return $query;

	}

	function tambah($table, $data){
		$this->db->insert($table, $data);
	}	

	function tampil(){
		return $this->db->get('data_mahasiswa')->result();
	}

	function hapus($where, $table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function edit($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

}
 ?>