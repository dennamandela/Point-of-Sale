<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct (){
		parent::__construct();
		$this->load->database();
		if ($this->session->userdata('username')=="") {
			redirect('login');
		}
		$this->load->helper('text');
	}

	public function home(){
		$data['username'] = $this->session->userdata('username');
		$this->load->view('dashboard',$data);
	}

	public function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('login');
	}
}