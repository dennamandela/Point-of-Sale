<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model {

	function __construct (){
		parent::__construct();
		$this->load->database();
	}

	function data_kategori(){
    	return $this->db->get('kategori_barang');
    }
    
  	function data_paging($halaman,$batas){
    	return $this->db->query("select * from kategori_barang");
  	}

	function search($keyword){
		$this->db->select('*');
		$this->db->from('kategori_barang');
		$this->db->like('nama_kategori',$keyword);
		return $this->db->get();
	}

	function tambah($data){
		$this->db->insert('kategori_barang',$data);
	}

	function edit_data($where, $table){
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete($table = null, $where = null)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
?>