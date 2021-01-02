<?php 
	class M_daftar extends CI_Model{
		
		function __construct (){
			parent::__construct();
			$this->load->database();
		}

		function hasil_daftar($data2){
			$tambah = $this->db->insert('login',$data2);
			return $tambah;
		}

		function tambah_daftar($data){
			$this->db->insert('login',$data);
		}
	}
?>

