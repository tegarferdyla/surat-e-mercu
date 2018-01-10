
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftarsurat_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function validasimahasiswa($nim)
	{
		$query= $this->db->query(
							    "SELECT * FROM mahasiswa m JOIN surat s 
								ON m.id_surat=s.id_surat WHERE 
								m.nim='$nim' AND 
								(status !='Selesai' OR 
								date(tanggal_diambil) >= CURDATE() - INTERVAL 1 DAY)"
								);

		return $query->num_rows();
	}	

	public function daftarsurat()
	{
		
	}

}

/* End of file Daftarsurat_model.php */
/* Location: ./application/models/Daftarsurat_model.php */