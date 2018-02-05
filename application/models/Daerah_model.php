<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Daerah_model extends CI_Model
{

	public function __construct(){
	  parent::__construct();
	}


	public function provinsi(){
		$this->db->order_by('nama','ASC');
		$provinces= $this->db->get('tbl_propinsi');
	    
	    return $provinces->result_array();
    }


	public function kabupaten($provId){
		$kabupaten="<option value=''>Pilih Kabupaten/Kota</pilih>";
		$this->db->order_by('kota_kab','ASC');
		$this->db->select("DISTINCT(kota_kab)");
		$this->db->from('tbl_kodepos');
		$this->db->join('tbl_propinsi','tbl_propinsi.id=tbl_kodepos.id_propinsi');
		$this->db->where('tbl_kodepos.id_propinsi',$provId);
		$query = $this->db->get();
		
		foreach ($query->result_array() as $data ){
			$kabupaten.= "<option value='$data[kota_kab]'>$data[kota_kab]</option>";
	    }

		return $kabupaten;
    }

	public function kecamatan($kabId){
		$kecamatan="<option value=''>Pilih Kecamatan</pilih>";
		$this->db->order_by('kecamatan','ASC');
		$this->db->select("DISTINCT(kecamatan)");
		$this->db->from('tbl_kodepos');
		$this->db->where('kota_kab',$kabId);
		$query = $this->db->get();
		foreach ($query->result_array() as $data ){
			$kecamatan.= "<option value='$data[kecamatan]'>$data[kecamatan]</option>";
	    }
		
		return $kecamatan;
	}

	public function kelurahan($kecId){
		$kelurahan="<option value=''>Pilih Kelurahan</pilih>";
		$this->db->order_by('kelurahan','ASC');
		$this->db->select("DISTINCT(kelurahan)");
		$this->db->from('tbl_kodepos');
		$this->db->where('kecamatan',$kecId);
		$query = $this->db->get();
		foreach ($query->result_array() as $data ){
			$kelurahan.= "<option value='$data[kelurahan]'>$data[kelurahan]</option>";
		}

		return $kelurahan;
	}

	public function kodepos($kelId){
		$kodepos="<option value=''>Pilih Kode</pilih>";

		$this->db->select("*");
		$this->db->from('tbl_kodepos');
		$this->db->where('kelurahan',$kelId);
		$query = $this->db->get();
		foreach ($query->result_array() as $data ){
			$kodepos.= "<option value='$data[kodepos]'>$data[kodepos]</option>";
		}

		return $kodepos;
	}

	
	


}