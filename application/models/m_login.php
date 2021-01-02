<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	function __construct (){
			parent::__construct();
			$this->load->database();
		}
			
		public function cek_user($data){
			$query = $this->db->get_where('login',$data);
			return $query;
		}
	}
?>	