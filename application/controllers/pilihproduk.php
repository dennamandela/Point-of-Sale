<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pilihproduk extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->database();
		$this->load->model('m_product');
		$this->load->model('m_kategori');
		$this->load->helper('html');
	}

	public function produk(){
		$data['barang'] = $this->m_product->data_product()->result();
		$this->load->view('member/produk',$data);
	}
}