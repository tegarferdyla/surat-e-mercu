<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tentang extends CI_Controller {

	public function index()
	{
		$this->load->view('home/header');
		$this->load->view('home/tentang');
		$this->load->view('home/footer');
	}

}

/* End of file Tentang.php */
/* Location: ./application/controllers/Tentang.php */