<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if (isset($_GET['logout']) == 'signout') {
			$this->session->sess_destroy();
			redirect('home');
		}else{
			if ($this->session->has_userdata('status')) {
				if ($this->session->userdata('role') == "mahasiswa") {
					redirect('mahasiswa');
				}else if(($this->session->userdata('role') =='admin') ||($this->session->userdata('role') =='superadmin') ){
					redirect('admin');
				}
			}
		}
	}

	public function index()
	{
		$this->load->view('login/header');
		$this->load->view('login/login');
	}

	public function ceklogin()
	{
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

	

		$whereadmin = array(
	    					'username'=>$username,
	    					'password'=>$password
	    		);


		$hasiladmin = $this->login_model->cekloginadmin('admin',$whereadmin);
		
		$hasiluser = $this->login_model->cekloginuser('user',$username,$password);

	    if ($hasiladmin == 1) {
	    	 	$result=$this->db->get_where('admin',$whereadmin)->row_array();
	    	 	$data_session = array(
	    	 					'id_admin'=>$result['id_admin'],
	    	 					'username'=>$result['username'],
	    	 					'status'=>'login',
	    	 					'role'=>$result['role']
	    	 	);
	    	 	$this->session->set_userdata($data_session);
	    	 	redirect('admin');
	    	 	
	   	}elseif ($hasiluser == 1) {
	   			$result=$this->login_model->datauser('user',$username,$password);
	   			$data_session = array(
	   							'nim'=>$result['nim'],
	   							'nama_mahasiswa'=>$result['nama_mahasiswa'],
	   							'status'=>'login',
	   							'jurusan'=>$result['prodi'],
	   							'email'=>$result['email'],
	   							'role'=>'mahasiswa'
	   			);
	   			$this->session->set_userdata($data_session);
	   			redirect('mahasiswa');
	    	 	
	   	}else{
	   		$this->session->set_flashdata('info', 'true');
	   		redirect('login');
	   	}
	}
	public function resetpassword(){
		$this->load->view('login/header');
		$this->load->view('login/resetpassword');
	}

	public function resetpassword1(){
		$this->load->view('login/header');
		$this->load->view('login/resetpassword-1');
	}

	public function kirim_email(){
      date_default_timezone_set("Asia/jakarta");
      $email = $this->input->post('email');
      $rs = $this->user_model->getByEmail($email);
     
      // cek apakah ada email di mahasiswa
      if (!$rs->num_rows() > 0){
        $this->session->set_flashdata('email_tidak_ada','true');
        redirect('login/resetpassword');
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
          $simpan = $this->user_model->simpanToken($data);
           if ($simpan > 0){
               echo "Token ini berlaku untuk 2 jam dari pengiriman token ini:
               Klik disini untuk reset password anda :"; 
               echo "<a href='http://localhost/surat-e-mercu/login/reset/token/$tokenstring'>http://localhost/surat-e-mercu/login/reset/token/".$tokenstring."</a>";
           }else{
            $this->session->set_flashdata('kesalahan','true');
            redirect('login/resetpassword');
           }
       }
    }

     public function reset(){
      date_default_timezone_set("Asia/jakarta");
      $token = $this->uri->segment(4);
     
      // get cek tokennya
      $cekToken = $this->user_model->cekToken($token);
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
          $this->load->view('login/header');
          $this->load->view('login/resetpassword-1',$datatoken);
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
      $simpan = $this->user_model->ResetPasswordMahasiswa($data,$nim);
     
      if ($simpan > 0){
        echo "oke berhasil";
      }else{
       echo "maaf gagal";
      }

    }

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */