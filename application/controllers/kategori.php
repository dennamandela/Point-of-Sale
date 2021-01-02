<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('m_kategori');
	}

	public function kategori_produk(){
		$this->load->library('pagination');
        $config['site_url'] = site_url().'kategori/kategori_produk/';
        $config['total_rows'] = $this->m_kategori->data_kategori()->num_rows();
        $config['per_page'] = 3; 
        $this->pagination->initialize($config); 
		$config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $data['paging'] = $this->pagination->create_links();
        $halaman = $this->uri->segment(3);
        $halaman = $halaman==''?0:$halaman;
        $data['kategori'] = $this->m_kategori->data_paging($halaman,$config['per_page']);
        $this->load->view('kategori/v_kategori',$data);
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['kategori'] = $this->m_kategori->search($keyword);
		$this->load->view('kategori/v_kategori',$data);
	}

	public function proses_tambah(){

		$data['nama_kategori'] = $this->input->post('nama_kategori',TRUE);
		
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		$this->m_kategori->tambah($data);

		redirect('kategori/kategori_produk');
	}

	public function edit($id){
		$where = array('kategori_id' => $id);
		$data['kategori'] = $this->m_kategori->edit_data($where,'kategori_barang')->result();
		$this->load->view('kategori/v_edit',$data);
	}

	public function update(){
		$kategori_id = $this->input->post('kategori_id');
		$nama_kategori = $this->input->post('nama_kategori');

		$data = array(
			'nama_kategori' => $nama_kategori
		);

		$where = array(
			'kategori_id' => $kategori_id
		);

		$this->m_kategori->update_data($where,$data,'kategori_barang');
		redirect('kategori/kategori_produk');
 	}

	public function hapus()
	{
		if(!is_numeric($this->uri->segment(3)))
		{
			redirect('kategori/kategori_produk');
		}

		$this->m_kategori->delete(['kategori_barang','barang'], ['kategori_id' => $this->uri->segment(3)]);
		redirect('kategori/kategori_produk');
	}
}