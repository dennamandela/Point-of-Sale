<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {

	function __construct (){
		parent::__construct();
		$this->load->database();
	}

	function post($data)
    {
        $this->db->insert('barang',$data);
    }
}