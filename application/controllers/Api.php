<?php

class Api extends CI_Controller {

	public function __construct() {
		 parent::__construct();


		 header("Access-Control-Allow-Origin: *");
		 header("Content-Type: application/json; charset=UTF-8");
		 header("Access-Control-Allow-Methods: POST");
		 header("Access-Control-Allow-Methods: GET");
		 header("Access-Control-Max-Age: 3600");
		 header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
     $this->db->cache_on();


	}

  public function api_done(){
		$pass["data"]=$this->Manufriend_model->mm_show_done();
		echo json_encode($pass);
	}

	public function api_approve($id_trx){

		$data="";
		if($id_trx!=""||$id_trx!=null){
			$this->Manufriend_model->mm_update_transaction_to_ongoing($id_trx);

			redirect("welcome/transaction");
		}
		else{
			$data["response"]=404;
			$data["message"]="Gagal proses";
		}
	}

  public function api_user(){
		$pass["data"]=$this->Manufriend_model->mm_show_user();
		$pass["code"]=200;
		$pass["message"]="ok";
		echo json_encode($pass);
	}

  public function api_shopping(){
		$pass["data"]=$this->Manufriend_model->mm_show_shopping();
		$pass["code"]=200;
		$pass["message"]="ok";
		echo json_encode($pass);
	}


	public function api_login($var_usermail,$var_userpassword){
			$data="";
			$is_exist =	$this->Manufriend_model->mm_cek_user($var_usermail, $var_userpassword);
			$user_profile = $this->Manufriend_model->mm_data_user($var_usermail, $var_userpassword);

			if($is_exist>0){
					$arrayName =
					array(
								 'email'=>$user_profile->email_user,
								 'status'=> "logged",
								 'role_user'=>$user_profile->role_user
				    );
					$this->session->set_userdata($arrayName);
			   	$data["message"]="Berhasil Login";
			   	$data["code"]=200;
			   	$data["response"]="ok";
					$data['sess_email'] = $this->session->userdata("email");


			}
			else{
				$data["message"]="Akun belum terdaftar !";
				$data["code"]=403;
				$data["response"]="fail";
			}
			// var_dump($arrayName);

			 echo json_encode($data);



	}


      public function api_register_user(){
    		$data="";
    		$dataParsing = array(
    			"id_user"=>"",

    			//andri diganti dengan $this->input->post('namauser');
    			"nama_user"=>"Tesningsih",
    			"email_user"=>"tesningsih@gmail.com",
    			"password_user"=>"uyauyauya",
    			"telepon_user"=>"085399250048",
    			"alamat_user"=>"Jakarta",
    			"gender_user"=>"Perempuan",
    			"ttl_user"=> date('y-m-d'),
    			"role_user"=> 2
    		);

    		$cekemail = $this->Manufriend_model->mm_cek_email($dataParsing['email_user']);

    		if($dataParsing!=null && $cekemail<1){
    			$data["response"] = 200;
    			$data["message"] = "Data Anda berhasil didaftarkan";
    			$this->Manufriend_model->mm_insert_new_user($dataParsing);
    		}
    		else if($cekemail>0){
    			$data["response"] = 403;
    			$data["message"] = "Data Anda sudah pernah didaftarkan";
    		}
    		else{
    			$data["response"] = 404;
    			$data["message"] = "Koneksi gagal";
    		}

    		echo json_encode($data);
    	}

  public function api_chit_chat(){
		$pass["data"]=$this->Manufriend_model->mm_show_chit_chat();
		$pass["code"]=200;
		$pass["message"]="ok";
		echo json_encode($pass);
	}

  public function api_sport(){
		$pass["data"]=$this->Manufriend_model->mm_show_sport();
		$pass["code"]=200;
		$pass["message"]="ok";
		echo json_encode($pass);
	}

  	public function api_attending_party(){
  		$pass["data"]=$this->Manufriend_model->mm_show_attending_party();
  		$pass["code"]=200;
  		$pass["message"]="ok";
  		echo json_encode($pass);
  	}

		




}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
