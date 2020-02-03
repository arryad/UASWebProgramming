<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myadmin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('modeladmin');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login_admin/"));
		}
	}

	public function index(){	
		$data['title'] = "Admin Website | STTBandung ";
		$this->load->view('admin/header/head_dashboard', $data);
		$this->load->view('admin/aside/sidebar_admin');
		$this->load->view('admin/navbar/navbar');
		$this->load->view('admin/tambahdata');
		$this->load->view('admin/footer/foot_dashboard');		
	}
	
	public function tambahdata(){
		$data['title'] = "Tambah Data | STTBandung ";		
		$this->load->view('admin/header/head_dashboard', $data);
		$this->load->view('admin/aside/sidebar_admin');
		$this->load->view('admin/navbar/navbar');
		$this->load->view('admin/tambahdata', $data);
		$this->load->view('admin/footer/footadm');	
		$this->load->view('admin/footer/foot_dashboard');	
	}

	public function listdata(){
		$data['user'] = $this->modeladmin->tampil();
		$data['title'] = "List Data | STTBandung ";		
		$this->load->view('admin/header/head_dashboard', $data);
		$this->load->view('admin/aside/sidebar_admin1');
		$this->load->view('admin/navbar/navbar');
		$this->load->view('admin/listdata', $data);
		$this->load->view('admin/footer/footadm');	
		$this->load->view('admin/footer/foot_dashboard');	
	}
	function editdata($id=null){
		if(is_null($id)){		
			$this->session->set_flashdata('message', 'You Lost!');
			redirect('Myadmin/tambahdata');
		}else{
			$data['title'] = "Edit Data | Oxford";
			$where = array('id' => $id);			
			$data['user'] = $this->modeladmin->edit($where,'data_mahasiswa')->result();
			$this->load->view('admin/header/head_dashboard', $data);
			$this->load->view('admin/aside/sidebar_admin');
			$this->load->view('admin/navbar/navbar');
			$this->load->view('admin/editdata', $data);
			$this->load->view('admin/footer/footadm');	
			$this->load->view('admin/footer/foot_dashboard');	
		}
		
		
		//percobaan error handling page 404.


		// foreach ($a as $id) {			
		// 	$where = array('id' => $id);	

		// 	$b = $this->modeladmin->edit($where,'data_mahasiswa')->get()->row();
		// 	$exist = $this->modeladmin->edit($where,'data_mahasiswa')->result();

		// 	if($a > 0){
		// 		$data['user']= $this->db->get()->result();
		// 		$this->load->view('header/headadm', $data);
		// 		$this->load->view('editdata', $data);
		// 		$this->load->view('footer/footadm');
		// 	}
		// 	if($a < 0){
		// 		$this->load->view('header/headadm', $data);
		// 		$this->load->view('error');
		// 		$this->load->view('footer/footadm');
		// 	}
		// }
			
	}

	function f_editdata(){
		$id = $this->input->post('id');
		$npm = $this->input->post('npm');
		$nama = $this->input->post('nama');
		$semester = $this->input->post('semester');
	 
		$data = array(
			'npm' => $npm,
			'nama' => $nama,
			'semester' => $semester
		);
	 
		$where = array(
			'id' => $id
		);
	 	

		$this->modeladmin->update($where,$data,'data_mahasiswa');		
		$this->session->set_flashdata('message','Data berhasil di ubah!');
		redirect('Myadmin/listdata');
	}

	function hapusdata($id){
		$where = array('id' => $id);
		$this->modeladmin->hapus($where, 'data_mahasiswa');
		$this->session->set_flashdata('message','Data berhasil di hapus!');
		redirect('Myadmin/listdata');
	}

	function f_tambahdata(){
		$npm = $this->input->post('npm');
		$nama = $this->input->post('nama');
		$semester = $this->input->post('semester');

		$data = array(
			'npm' => $npm,
			'nama' => $nama,
			'semester' => $semester
		);		
		$cek_npm = $this->modeladmin->cek_data("data_mahasiswa", $npm)->num_rows();
		if($cek_npm > 0){
			echo $cek_npm;
			$this->session->set_flashdata('message','Nomor Induk Mahasiswa tersebut sudah ada!');
			redirect(base_url("Myadmin/tambahdata"));
		} else {
			echo $cek_npm;
			$this->session->set_flashdata('message','Data berhasil di simpan!');
			$this->modeladmin->tambah('data_mahasiswa', $data);
			redirect('Myadmin/listdata');
		}

		
	}
}
