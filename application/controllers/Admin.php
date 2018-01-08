<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		date_default_timezone_set("Asia/Jakarta");
		parent::__construct();
		if (!$this->session->has_userdata('status')) {
			redirect('login');
		}else if($this->session->userdata('role') =='mahasiswa'){
			redirect('admin');
		}
	}

	public function index()
	{
		echo "berhasil login sebagai admin ";
	    echo $this->session->userdata('username');
	    echo  anchor('login?logout=signout', 'keluar');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */