<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myuser extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('modeladmin');	
		$this->load->helper(array('form', 'url'));
		if($this->session->userdata('status') != "islogin"){
			redirect(base_url("Myuser/"));
		}		
	}

	function index(){		
		$where = array('npm' => $this->session->userdata('nama'));
		$data['user'] = $this->modeladmin->edit($where,'data_mahasiswa')->result();
		$data['title'] = "Dashboard | STTBandung ";
		$this->load->view('user/header/head_dashboard', $data);
		$this->load->view('user/aside/sidebar_user');
		$this->load->view('user/navbar/navbar');
		$this->load->view('user/dashboard');
		$this->load->view('user/footer/foot_dashboard');	
	}

	function f_editdata(){
		$id = $this->input->post('id');
		$npm = $this->input->post('npm');
		$nama = $this->input->post('nama');
		$semester = $this->input->post('semester');
		$gambar = $_FILES['image']['name'];
	 	
	 	if (!empty($image)){

		   
		} else {
		    $config['upload_path'] = './upload/';
		    $config['allowed_types'] = 'jpg|gif|png|jpeg';
		    $config['max_size'] = '2048';		    

		    $this->load->library('upload', $config);

		    if(!$this->upload->do_upload('image')){
		    	$gambar = "default.jpg";
		    	$data = array(
					'npm' => $npm,
					'nama' => $nama,
					'semester' => $semester,
					'image' => $gambar						
				);
			 
				$where = array(
					'id' => $id
				);

			 
				$this->modeladmin->update($where,$data,'data_mahasiswa');				
				redirect('Myuser/');
		    } else {		  
		    	$gambar = $this->upload->data();  	
		    	$data = array(
					'npm' => $npm,
					'nama' => $nama,
					'semester' => $semester,
					'image' => $gambar['file_name']
				);
			 
				$where = array(
					'id' => $id
				);

			 
				$this->modeladmin->update($where,$data,'data_mahasiswa');				
				redirect('Myuser/');
		    	
		    }

		}	

		
	}
}
