<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('m_login');
	}

	function index(){
		$data['title'] = "Register | Oxford ";
		$this->load->view('admin/header/headlog', $data);
		$this->load->view('register');
		$this->load->view('admin/footer/footadm');
	}

	function f_register(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array('npm' => $username);
		$cek = $this->m_login->cek_npm('data_mahasiswa', $where)->num_rows();
		if($cek > 0){
			$where1 = array('username' => $username);
			$npm = $this->m_login->cek_login('login', $where1)->num_rows();
			if($npm > 0){
				$this->session->set_flashdata('message','npm sudah terdaftar!');
				redirect(base_url('Register/'));
				// print_r($username);
				// print_r($npm);
			} else {
				$data = array(
				'username' => $username,
				'password' => sha1($password),
				'level' => 'user');

				$this->m_login->tambah('login', $data);
				$this->session->set_flashdata('message','registrasi berhasil silahkan login!');
				redirect('Login_c/');	
			}				
		} else {
			$this->session->set_flashdata('message','maaf npm tidak ada di daftar!');
			redirect(base_url('Register/'));
		}

		
	}

	
}
