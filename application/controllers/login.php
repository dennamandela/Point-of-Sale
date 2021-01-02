<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->model('m_daftar');
		$this->load->helper('url');
		$this->load->database('login');
	}

	public function index(){
		$this->load->view('v_login');
	}

	public function cek_user() {
		$data = array('email' => $this->input->post('email', TRUE),
						'password' => md5($this->input->post('password', TRUE))
			);
		$this->load->model('m_login'); // load model_user
		$hasil = $this->m_login->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['id_pengguna'] = $sess->id_pengguna;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='admin') {
				redirect('admin/home');
			}
			elseif ($this->session->userdata('level')=='member') {
				redirect('member/c_member');
			}		
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

	public function akun_daftar(){
		
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
	
		$data['data'] = $this->m_daftar->tambah_daftar($data);
		redirect('login');
	}
}

