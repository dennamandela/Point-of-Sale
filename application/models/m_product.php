<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_product extends CI_Model {

	function __construct (){
		parent::__construct();
		$this->load->database();
	}

	function data_product(){
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->join('kategori_barang','barang.kategori_id=kategori_barang.kategori_id');
		return $this->db->get();
	}

	function post($data)
    {
        $this->db->insert('barang',$data);
    }

    function get_one($id){
        $param  =   array('barang_id'=>$id);
        return $this->db->get_where('barang',$param);
    }		

    function edit($data,$id)
    {
        $this->db->where('barang_id',$id);
        $this->db->update('barang',$data);
    }

	function cari($keyword){
		$this->db->select('*');
		$this->db->from('barang');
		$this->db->like('nama_barang',$keyword);
		$this->db->or_like('harga',$keyword);

		return $this->db->get()->result();
	}

	function delete($id){
		$this->db->where('barang_id',$id);
		$this->db->delete('barang');
	}
}