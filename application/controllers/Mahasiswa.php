<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function index()
	{
		
	}

	public function formkp()
	{
		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/formkp');
		$this->load->view('home/footer');
	}

}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */