<?php 
   class Dosen_Model extends CI_Model {
	
      public function GetDataDosen(){
        $data =$this->db->query("select *from dosen");
        return $data->result_array();
      }
      public function GetWhere($where=""){
        $res=$this->db->query("select *from dosen ".$where);
        return $res->result_array();
      }
      public function UpdateDataDosen($tableName,$data_update,$where){
        $res=$this->db->update($tableName,$data_update,$where);
        return $res;

      }
      }
?> 