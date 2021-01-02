<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class M_customers extends CI_Model{

		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		function data_pelanggan(){
			return $this->db->get('login');
		}

		function tambah_pelanggan($data){
			$this->db->insert('login',$data);
		}

		function search($keyword)
		{
			$this->db->select('*');
			$this->db->from('login');
			$this->db->like('username',$keyword);
			$this->db->or_like('email',$keyword);

			return $this->db->get()->result();
		}

		function get_one($id){
			$param = array('id_pengguna'=>$id);
			return $this->db->get_where('login',$param);
		}

		function delete($id){
			$this->db->where('id_pengguna',$id);
			$this->db->delete('login');
		}
	}