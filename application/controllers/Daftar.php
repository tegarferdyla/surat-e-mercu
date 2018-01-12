W<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
	public function index()
	{
		//form validasi
		$this->form_validation->set_rules('nama','nama','trim|required');
		$this->form_validation->set_rules('nimmhs','nimmhs','trim|required|exact_length[8]|numeric');
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[8]|alpha_numeric');
		$this->form_validation->set_rules('repassword', 'repassword', 'trim|required|matches[password]');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('kodenim', 'kodenim', 'required');
		$this->form_validation->set_rules('prodi', 'prodi', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('home/header');
			$this->load->view('daftar/daftar');
			$this->load->view('home/footer');
		} else {
			$nimmhs  =$this->input->post('nimmhs');
			$kodemhs =$this->input->post('kodenim');
			$nimlengkap =$kodemhs.$nimmhs;
			$resultchecknim = $this->daftar_model->ceknimmahasiswa($nimlengkap);

			if ($resultchecknim > 0) {
				$this->session->set_flashdata('nimsudahada', 'true');
				redirect('daftar');
			}else{
				$this->daftar_model->registerMahasiswa();
				$this->session->set_flashdata('info_berhasil', 'true');
				redirect('daftar');
			}

		}
	}
}

