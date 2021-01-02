<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->database();
		$this->load->model('m_product');
		$this->load->model('m_kategori');
	}

	public function produk(){
		$data['barang'] = $this->m_product->data_product()->result();
		$this->load->view('barang/v_produk',$data);
	}

	public function cari(){
		$keyword = $this->input->post('keyword');
		$data['barang'] = $this->m_product->cari($keyword);
		$data['kategori'] = $this->m_kategori->search($keyword);
		$this->load->view('barang/v_produk',$data);
	}

	public function tambah3(){
        $data['kategori']=  $this->m_kategori->data_kategori()->result();
        //$this->load->view('barang/form_input',$data);
		$this->load->view('barang/tambah_produk', $data);
	}

	function proses_tambah(){
		//proses barang
		$data['nama_barang'] = $this->input->post('nama_barang');
		$data['kategori_id'] = $this->input->post('kategori_id');
		$data['image'] = $this->input->post('image');
		$data['harga'] = $this->input->post('harga');
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		$this->m_product->post($data);
		redirect('product/produk');
	}

	function edit()
    {
       if(isset($_POST['submit'])){
            // proses barang
            $id         =   $this->input->post('id');
            $nama       =   $this->input->post('nama_barang');
            $kategori   =   $this->input->post('kategori');
            $harga      =   $this->input->post('harga');
            $data       = array('nama_barang'=>$nama,
                                'kategori_id'=>$kategori,
                                'harga'=>$harga);
            $this->m_product->edit($data,$id);
            redirect('product/produk');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['kategori']   =  $this->m_kategori->data_kategori()->result();
            $data['barang']     =  $this->m_product->get_one($id)->row_array();
            //$this->load->view('barang/form_edit',$data);
            $this->load->view('barang/v_edit',$data);
        }
    }

	public function hapus(){
		$id = $this->uri->segment(3);
		$this->m_product->delete($id);
		redirect('product/produk');
	}
}