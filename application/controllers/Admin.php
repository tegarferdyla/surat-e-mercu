<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		date_default_timezone_set("Asia/Jakarta");
		parent::__construct();
		if (!$this->session->has_userdata('status')) {
			redirect('home');

		}else if($this->session->userdata('role') =='mahasiswa'){
			redirect('mahasiswa');
		}
	}
	public function suratkp_c(){
		$this->load->model('tampilsurat_m');
	}


	/*public function index()
	{
		echo "berhasil login sebagai admin ";
	    echo $this->session->userdata('username');
	    echo  anchor('login?logout=signout', 'keluar');
	}*/
  
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
		$data['surat'] = $this->tampilsurat_m->tampil_datakp_waiting();
		$this->load->view('admin/waitingkp',$data);
		$this->load->view('admin/footer');
	}

	public function tolakemailta(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/tolakemailta_v');
		$this->load->view('admin/footer');
	}
    public function tolakemailkp(){
    	$this->load->view('admin/header');
    	$this->load->view('admin/sidebar');
    	$this->load->view('admin/tolakemailkp_v');
    	$this->load->view('admin/footer');
    }
	public function waitingTA()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$data['surat'] = $this->tampilsurat_m->tampil_datata_waiting();	
		$this->load->view('admin/waitingta',$data);
		$this->load->view('admin/footer');
	}
	public function finishkp()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$data['surat'] = $this->tampilsurat_m->tampil_datakp_finish();
		$this->load->view('admin/finishkp',$data);
		$this->load->view('admin/footer');
	}
	public function finishTA()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$data['surat'] = $this->tampilsurat_m->tampil_datata_finish();	
		$this->load->view('admin/finishTA',$data);
		$this->load->view('admin/footer');
	}
	public function koordinatorupdate(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/koordinatorupdate_v');
		$this->load->view('admin/footer');
	}
	public function koordinatorsetting(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/koordinatorsetting');
		$this->load->view('admin/footer');
	}
	public function printKPTA(){
		$this->load->view('admin/printKPTA');
	}
}



