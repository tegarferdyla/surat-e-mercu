
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getByEmail($email){
	  $this->db->where('email',$email);
	  $result = $this->db->get('user');
	  return $result;
	}
	 
	public function simpanToken($data){
	  $this->db->insert('lupa_password', $data);
	  return $this->db->affected_rows();
	}
	 
	public function cekToken($token){
	  $this->db->where('token',$token);
	  $result = $this->db->get('lupa_password');
	  return $result;
	}

	public function ResetPasswordMahasiswa($data,$nim){
		$this->db->where('nim',$nim);
		$this->db->limit(1);
		$this->db->update('user',$data);

		return $this->db->affected_rows();
    }	

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */
