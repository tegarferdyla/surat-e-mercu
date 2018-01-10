<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('home/header');
		$this->load->view('login/login');
	}

	function ceklogin()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

	

		$whereadmin = array(
	    					'username'=>$username,
	    					'password'=>$password
	    		);


		$hasiladmin = $this->login_model->cekloginadmin('admin',$whereadmin);
		
		$hasiluser = $this->login_model->cekloginuser('user',$username,$password);

	    if ($hasiladmin == 1) {
	    	 	$result=$this->db->get_where('admin',$whereadmin)->row_array();
	    	 	$data_session = array(
	    	 					'id_admin'=>$result['id_admin'],
	    	 					'username'=>$result['username']
	    	 	);
	    	 	$this->session->set_userdata($data_session);

	    	 	echo "berhasil login sebagai admin ";
	    	 	echo $this->session->userdata('username');
	   	}elseif ($hasiluser == 1) {
	   			$result=$this->login_model->datauser('user',$username,$password);
	   			$data_session = array(
	   							'nim'=>$result['nim'],
	   							'nama_mahasiswa'=>$result['nama_mahasiswa']
	   			);
	   			$this->session->set_userdata($data_session);

	    	 	echo "berhasil login sebagai user ";
	    	 	echo $this->session->userdata('nama_mahasiswa');
	   	}else{
	   		echo "Login gagal";
	   	}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */