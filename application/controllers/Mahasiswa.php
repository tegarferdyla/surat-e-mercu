	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		date_default_timezone_set("Asia/Jakarta");
		parent::__construct();
		if (!$this->session->has_userdata('status')) {
			redirect('login');
		}else if(($this->session->userdata('role') =='admin') || ($this->session->userdata('role') =='superadmin') ){
			redirect('admin');
		}
	}
	
	public function index()
	{
		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/pilihan');

    $this->load->view('home/footer');
		echo "berhasil login sebagai user ";
	    echo $this->session->userdata('nama_mahasiswa');
	    echo anchor('login?logout=signout', 'keluar');


	}

	public function formkp()
	{
		$data['provinsi']=$this->daerah_model->provinsi();
		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/formkp',$data);
		$this->load->view('home/footer');
	}


	public function select_daerah()
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
		}else if($modul=="kodepos"){
			echo $this->daerah_model->kodepos($id);
		}
	}

	
	public function daftarsuratkp()
	{
	 $row 	   = $this->input->post('anggota');
	
	 
	 $jumlahmahasiswa = 0;

	 for ($y=1; $y <=$row ; $y++) { 
		$fnim 		  = $this->input->post("fnim$y");
  		$nim  		  = $this->input->post("nim$y");
  		$nimmahasiswa = $fnim.$nim;

  		$hasil = $this->daftarsurat_model->validasimahasiswa($nimmahasiswa);	
  		$jumlahmahasiswa = $hasil+$jumlahmahasiswa;
	 }


	  if ($jumlahmahasiswa > 0 ) {
		  	$this->session->set_flashdata('gagal', 'true');
		  	redirect('mahasiswa/formkp');
	  }else{
		  		$prodi 			= $this->session->userdata('jurusan');
	  			$jenis 			= $this->uri->segment(2);
	  			$jenis_surat	="";
	  			$namekota		= $this->input->post('kota_kabupaten');
	  			$alamat_lengkap = $this->input->post('alamat').", ".$this->input->post('kelurahan').", ".$this->input->post('kecamatan');
				if ($jenis =='daftarsuratkp') {
	  				$jenissurat = "Kerja Praktek";
	  			}else{
	  				$jenissurat ="Tugas Akhir";
	  			}
	  			
	  			$data = array (
					'id_surat'			 => $this->nomorsurat_model->IDSurat(),
					'no_surat'  		 => '',
					'nama_perusahaan' 	 => $this->input->post('namaperusahaan'),
					'alamat_perusahaan'  => ucwords(strtolower($alamat_lengkap)),
					'orang_dituju'   	 => ucwords(strtolower($this->input->post('namefor'))),
					'jabatan_dituju'			 => ucwords($this->input->post('jabatan')),
					'kota'				 => ucwords(strtolower($namekota)),
					'kodepos'			 => $this->input->post('kodepos'),
					'jenis_surat'    	 => 'Kerja Praktek',
					'tanggal_diajukan'   => date('Y-m-d'),
					'tanggal_selesai'    => '0000-00-00',
					'tanggal_diambil'    => '0000-00-00',
					'status'         	 => 'Menunggu',
					'tahun'				 => date('Y'),	
					'prodi'				 => $prodi,
					'nim' 				 => $this->session->userdata('nim'),
					'nik'				 => $this->dosen_model->GetTandaTangan($this->session->userdata('jurusan'),$jenissurat)->nik
			   );

		  	  $this->daftarsurat_model->daftarsuratkp($data,'surat');
			  $idsurat = $this->daftarsurat_model->GetIdSuratToMahasiswa($this->session->userdata('nim'))->id_surat;
		  	  
		  	  for ($i=1; $i <=$row ; $i++) { 
			  		$fnim 		  = $this->input->post("fnim$i");
			  		$nim  		  = $this->input->post("nim$i");
			  		$nimmahasiswa = $fnim.$nim;
			  		$nama 		  = $this->input->post("nama$i");

			  		$data = array(
			  			'id_surat'			=> $idsurat,
			  			'nim'	  			=> $nimmahasiswa,
			  			'nama_mahasiswa'	=> ucwords(strtolower($nama))
			  		);
					
					$this->daftarsurat_model->InsertMahasiswa($data);
				}

				$this->session->set_flashdata('berhasil', 'true');
				redirect('mahasiswa/lihat');
		}


	}
	


	public function lihat()
	{
		$nim = $this->session->userdata('nim');

		$data['statuskp'] = $this->statussurat_model->StatusKpSuratMahasiswa($nim);
		$data['statusta'] = $this->statussurat_model->StatusTASuratMahasiswa($nim);

		$this->load->view('mahasiswa/header');
		$this->load->view('mahasiswa/status',$data);
	    $this->load->view('home/footer');
	}

	public function cek()
	{
		$kode = $this->input->post('kodepos');
		redirect('http://kodepos.posindonesia.co.id/kodeposalamatindonesialist.php?cmd=search&t=kodeposalamatindonesia&z_Propinsi=%3D&x_Propinsi=&psearch=222&psearchtype=');
	}

}

/* End of file Mahasiswa.php */
/* Location: ./application/controllers/Mahasiswa.php */