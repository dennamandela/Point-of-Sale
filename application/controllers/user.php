<?php
class User extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('m_product');
		$this->load->model('m_user');

		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->helper('text');
	}
	public function index(){
		$data['username'] = $this->session->userdata('username');
		$data['barang'] = $this->m_product->data_product()->result();
		$this->load->view('member/member',$data);
	}

	function proses_tambah(){
		//proses barang
		$data['nama_barang'] = $this->input->post('nama_barang');
		$data['kategori_id'] = $this->input->post('kategori_id');
		$data['image'] = $this->input->post('image');
		$data['harga'] = $this->input->post('harga');
		$this->m_user->post($data);
		redirect('user');
	}

	public function cart(){
		$this->load->view('member/show_cart');
	}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}
}