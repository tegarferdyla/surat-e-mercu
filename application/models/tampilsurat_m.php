<?php 
	class tampilsurat_m extends CI_Model
	{
		# Query menampilkan Data KP Status = 'Waiting'
		function tampil_datakp_waiting()
		{
			$sql = "SELECT a.tanggal_diajukan, a.nim,b.nama_mahasiswa,a.prodi FROM surat a, user b WHERE a.nim = b.nim AND a.status ='Menunggu' AND a.jenis_surat ='Kerja Praktek' ORDER BY id_surat DESC";
			$query = $this->db->query($sql);

			return $query->result(); 
		}
		# Query menampilkan Data KP Status = 'Proses'
		function tampil_datakp_proses(){
			# Code ....
		}
		# Query menampilkan Data KP Status = 'Selesai'
		function tampil_datakp_finish(){
			$sql = "SELECT a.tanggal_selesai, a.nim,b.nama_mahasiswa,b.email,a.prodi FROM surat a, user b WHERE a.nim = b.nim AND a.status ='Selesai' AND a.jenis_surat ='Kerja Praktek' ORDER BY id_surat DESC";
			$query = $this->db->query($sql);

			return $query->result(); 
		}
		# Query menampilkan Data TA Status = 'Waiting'
		function tampil_datata_waiting(){
			$sql = "SELECT a.tanggal_diajukan, a.nim,b.nama_mahasiswa,a.prodi FROM surat a, user b WHERE a.nim = b.nim AND a.status ='Menunggu' AND a.jenis_surat ='Tugas Akhir' ORDER BY id_surat DESC";
			$query = $this->db->query($sql);

			return $query->result(); 
		}
		# Query menampilkan Data TA Status = 'Proses'
		function tampil_datata_proses(){
			# Code ....
		}
		# Query menampilkan Data TA Status = 'Selesai'
		function tampil_datata_finish(){
			$sql = "SELECT a.tanggal_selesai, a.nim,b.nama_mahasiswa,b.email,a.prodi FROM surat a, user b WHERE a.nim = b.nim AND a.status ='Selesai' AND a.jenis_surat ='Tugas Akhir' ORDER BY id_surat DESC";
			$query = $this->db->query($sql);

			return $query->result(); 
		}
	}
 ?>