<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_insert extends CI_Model {

		public function registerMahasiswa(){

			//FORM VALIDASI
			


			// INSERT DATA / REGISTER
			$nim 			= $this->input->post('kodenim').$this->input->post('nimmhs');
			$nama_mahasiswa = $this->input->post('nama');
			$email			= $this->input->post('email');
			$password		= md5($this->input->post('password'));
			$prodi			= $this->input->post('prodi');

			if($prodi == 418){
				$prodi = "Sistem Informasi";
			}else{
				$prodi = "Teknik Informatika";
			}

			$data = array(
				"nim" 			 => $nim,
				"nama_mahasiswa" => $nama_mahasiswa,
				"email" 		 => $email,
				"password" 		 => $password,
				"prodi" 	     => $prodi
				
			);
				return $this->db->insert('user',$data);
		}

	}
?>

