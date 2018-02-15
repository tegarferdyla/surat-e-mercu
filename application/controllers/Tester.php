
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tester extends CI_Controller {

	public function index()
	{
		$kodesurat = $this->nomorsurat_model->NomorSuratKP();
		echo $kodesurat;		
	}

	public function testsurat()
    {
        echo $this->daftarsurat_model->GetIdSuratToMahasiswa($this->session->userdata('nim'))->id_surat;
        
    }
    
    public function tiket()
    {
        $data= $this->tampilsurat_model->GetIdentitasMahasiswa('SR0001');
        $this->load->view('tiket/pdf',$data);
    }

    public function teststring()
    {
        $nim = ("41814010066@student.mercubuana.ac.id");
        echo substr($nim,11);
    }

    public function lupapassword()
    {
        $this->load->view('tester/lupapassword');
    }

    public function kirim_email(){
      date_default_timezone_set("Asia/jakarta");
      $email = $this->input->post('email');
      $rs = $this->tester_model->getByEmail($email);
     
      // cek apakah ada email di mahasiswa
      if (!$rs->num_rows() > 0){
        echo "maaf email tidak ditemukan";
      }else{
          $user = $rs->row();
          // get nim mahasiswa
          $user_token = $user->nim;
          //buat umur token expirednya
          $date_create_token = date("Y-m-d H:i");
          $date_expired_token = date('Y-m-d H:i',strtotime('+2 hour',strtotime($date_create_token)));
          // membuat token string
          $tokenstring = md5(($user_token.$date_create_token));
          // simpan data token
          $data = array(
                        'token'=>$tokenstring,
                        'nim'=>$user_token,
                        'created'=>$date_create_token,
                        'expired'=>$date_expired_token
                  );
          $simpan = $this->tester_model->simpanToken($data);
           if ($simpan > 0){
               echo "Token ini berlaku untuk 2 jam dari pengiriman token ini:
               Klik disini untuk reset password anda : http://localhost/surat-e-mercu/tester/reset/token/".$tokenstring;
           }else{
            echo "something wrong";
           }
       }
    }

    public function reset(){
      date_default_timezone_set("Asia/jakarta");
      $token = $this->uri->segment(4);
     
      // get cek tokennya
      $cekToken = $this->tester_model->cekToken($token);
      $rs = $cekToken->num_rows();
     
      // cek token ada atau engga
      if ($rs > 0){
     
        $data = $cekToken->row();
        $tokenExpired = $data->expired;
        $timenow = date("Y-m-d H:i:s");
     
        // cek token expired atau engga
        if ($timenow < $tokenExpired){
     
          // tampilkan form reset
          $datatoken['token'] = $token;
          $this->load->view('tester/resetpassword',$datatoken);
        }else{
          // redirect form forgot
          echo "token expired";
        }
      }else{
          echo "token tidak ditemukan";
      }
    }


    public function kirim_reset(){
 
      $password = $this->input->post('password');
      $token = $this->input->post('token');
      $cekToken = $this->tester_model->cekToken($token);
      $data = $cekToken->row();
      $nim = $data->nim;
      
      // ubah password
      $data = array ('password'=>md5($password));
      $simpan = $this->tester_model->ResetPasswordMahasiswa($data,$nim);
     
      if ($simpan > 0){
        echo "oke berhasil";
      }else{
       echo "maaf gagal";
      }

    }

    public function tokenExpired()
    {
      $this->load->view('errors/tokenexpired');
    }
    public function tokennotfound(){
      $this->load->view('errors/tokennotfound');
    }
}

/* End of file Tester.php */
/* Location: ./application/controllers/Tester.php */