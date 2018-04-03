
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getByEmail($email)
	{
	  $this->db->where('email',$email);
	  $result = $this->db->get('user');
	  return $result;
	}
	 
	public function simpanToken($data)
	{
	  $this->db->insert('lupa_password', $data);
	  return $this->db->affected_rows();
	}
	 
	public function cekToken($token)
	{
	  $this->db->where('token',$token);
	  $result = $this->db->get('lupa_password');
	  return $result;
	}

	public function ResetPasswordMahasiswa($data,$nim)
	{
		$this->db->where('nim',$nim);
		$this->db->limit(1);
		$this->db->update('user',$data);

		return $this->db->affected_rows();
    }	

    public function JumlahMahasiswaTeknikInformatika()
    {
    	$this->db->select('*');
    	$this->db->from('user');
    	$this->db->where('prodi','Teknik Informatika');
    	$query = $this->db->get();

    	return $query->num_rows();
    }

    public function MahasiswaTeknikInformatika()
    {
    	$this->db->select('*');
    	$this->db->from('user');
    	$this->db->where('prodi','Teknik Informatika');
    	$query = $this->db->get();

    	return $query->result();
    }

    public function JumlahMahasiswaSistemInformasi()
    {
    	$this->db->select('*');
    	$this->db->from('user');
    	$this->db->where('prodi','Sistem Informasi');
    	$query = $this->db->get();

    	return $query->num_rows();
    }

    public function MahasiswaSistemInformasi()
    {
    	$this->db->select('*');
    	$this->db->from('user');
    	$this->db->where('prodi','Sistem Informasi');
    	$query = $this->db->get();

    	return $query->result();
    }

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */
