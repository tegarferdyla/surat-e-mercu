<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Daerah extends CI_Controller
{
    public function __construct(){
		parent::__construct();
		if (!$this->session->has_userdata('status')) {
			redirect('login');
		}
	}



	public function ambil_data()
	{

		$modul=$this->input->post('modul');
		$id=$this->input->post('id');

		if($modul=="kabupaten"){
		echo $this->daerah_model->kabupaten($id);
		}
		else if($modul=="kecamatan"){
		echo $this->daerah_model->kecamatan($id);

		}
		else if($modul=="kelurahan"){
		echo $this->daerah_model->kelurahan($id);
		}
	}


}

/* End of file Daerah.php */
/* Location: ./application/controllers/Daerah.php */