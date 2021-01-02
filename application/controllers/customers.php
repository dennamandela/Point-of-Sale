<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Customers extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->model('m_customers');
		}

		public function pelanggan(){
			$data['record'] = $this->m_customers->data_pelanggan()->result();
			$this->load->view('pelanggan/v_pelanggan',$data);
		}

		public function proses(){
		
		$data = array(
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'level' => $this->input->post('level')
		);
		$data2 = array(
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'username' => $this->input->post('username')
		);
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert">Data anda telah berhasil terisi <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		$data['data'] = $this->m_customers->tambah_pelanggan($data);
		redirect('customers/pelanggan');
	}

	public function search(){
		$keyword = $this->input->post('keyword');
		$data['record'] = $this->m_customers->search($keyword);
		$this->load->view('pelanggan/v_pelanggan',$data);
	}

	function edit()
    {
        if(isset($_POST['submit'])){
            // proses kategori
            $id         =  $this->input->post('id',true);
            $username   =  $this->input->post('username',true);
            $email   	=  $this->input->post('email',true);
            $password   =  $this->input->post('password',true);
            if(empty($password)){
                 $data  =  array(   'username'=>$username,
                                    'email'=>$email);
            }
            else{
                  $data =  array(   'username'=>$username,
                                    'email'=>$email,
                                    'password'=>md5($password));
            }
             $this->db->where('id_pengguna',$id);
             $this->db->update('login',$data);
             redirect('customers/pelanggan');
        }
        else{
            $id=  $this->uri->segment(3);
            $data['record']=  $this->m_customers->get_one($id)->row_array();
            //$this->load->view('operator/form_edit',$data);
            $this->load->view('pelanggan/v_edit',$data);
        }
    }

    public function hapus(){
		$id = $this->uri->segment(3);
		$this->m_customers->delete($id);
		redirect('customers/pelanggan');
	}
}