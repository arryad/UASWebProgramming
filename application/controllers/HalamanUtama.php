<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HalamanUtama extends CI_Controller {
	public function index()
	{
		$this->load->view('halaman-utama');
	}
}
