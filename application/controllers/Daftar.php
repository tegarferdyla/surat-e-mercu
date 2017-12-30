<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function index()
	{
		$this->load->view('home/header');
		$this->load->view('daftar/daftar');
		$this->load->view('home/footer');
	}

	public function registrasi(){
 		$this->model_insert->registerMahasiswa();
 		redirect('daftar');
 
 	}
}

