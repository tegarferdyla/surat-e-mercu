<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/dashboardadmin_v');
		$this->load->view('admin/footer');
	}
	public function waitingkp()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/waitingkp');
		$this->load->view('admin/footer');
	}
	public function waitingsidang()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/waitingsidang');
		$this->load->view('admin/footer');
	}
	public function finishkp()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/finishkp');
		$this->load->view('admin/footer');
	}
	public function finishsidang()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/finishsidang');
		$this->load->view('admin/footer');
	}
}