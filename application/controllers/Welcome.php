<?php

class Welcome extends CI_Controller
{

    // public function __construct() {
    // 	 parent::__construct();
    //
    //
    // 	 header("Access-Control-Allow-Origin: *");
    // 	 header("Content-Type: application/json; charset=UTF-8");
    // 	 header("Access-Control-Allow-Methods: POST");
    // 	 header("Access-Control-Allow-Methods: GET");
    // 	 header("Access-Control-Max-Age: 3600");
    // 	 header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
    //
    //
    // }


    public function profile()
    {
        echo "saya adalah profile";
    }
    public function simpan()
    {
        $data = array(
            "id_user"=>"",
            "nama_user"=>"Suryaningsih Patandung",
            "email_user"=>"suryaningsihpatandung@gmail.com",
            "password_user"=>"Uya080696!",
            "telepon_user"=>"085399250048",
            "alamat_user"=>"Depok",
            "gender_user"=>"Perempuan",
            "ttl_user"=>""
        );
        $this->Manufriend_model->mm_insert_user($data);
        echo "sudah masuk";
    }
    public function hapus($idgue)
    {
        $data = array(
            "id_user"=>$idgue
        );
        $this->Manufriend_model->mm_delete_user($data);
        echo "sudah dihapus";
    }
    public function memperbaharui($idgue)
    {
        $data = array(
            "id_user"=>$idgue
        );
        $this->Manufriend_model->mm_update_user($data);
        echo "sudah diupdate";
    }


    public function proses_login()
    {
        $var_usermail = $this->input->post("email");
        $var_userpassword = $this->input->post("password");

        $is_exist =    $this->Manufriend_model->mm_cek_user($var_usermail, $var_userpassword);
        $user_profile = $this->Manufriend_model->mm_data_user($var_usermail, $var_userpassword);

        if ($is_exist>0) {
            $arrayName =
                array(
                             'email'=>$user_profile->email_user,
                             'status'=> "logged",
                             'role_user'=>$user_profile->role_user
                );
            $this->session->set_userdata($arrayName);
            echo "data ada";
        } else {
            echo "data belum ada";
        }
        // var_dump($arrayName);
        $data['sess_email'] = $this->session->userdata("email");

        $this->dashboard($data);
    }

    public function login()
    {
        $this->load->view("view_login");
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }

    public function dashboard($data)
    {
        $pass["valemail"]=$data["sess_email"];
        if ($pass!="" || $pass!=null) {
            $this->load->view("admin/01_view_head");
            $this->load->view("admin/02_view_header");
            $this->load->view("admin/03_view_sidebar", $pass);
            $this->load->view("admin/04_view_main");
            $this->load->view("admin/05_view_footer");
        } else {
            redirect('/');
        }
    }


    // TRANSACTION
    public function transaction()
    {
        $pass["valemail"]= $this->session->userdata["email"];

        $pass["values"]= $this->Manufriend_model->mm_show_transaction();
        //echo json_encode($pass)

        $this->load->view("admin/01_view_head");
        $this->load->view("admin/02_view_header");
        $this->load->view("admin/03_view_sidebar", $pass);
        $this->load->view("admin/06_view_transaction", $pass);
        $this->load->view("admin/05_view_footer");
    }

    public function api_transaction()
    {
        $pass["data"]=$this->Manufriend_model->mm_show_transaction();
        echo json_encode($pass);
    }

    // REQUEST
    public function request()
    {
        $pass["valemail"]= $this->session->userdata["email"];

        $pass["values"]= $this->Manufriend_model->mm_show_request();
        //echo json_encode($pass)

        $this->load->view("admin/01_view_head");
        $this->load->view("admin/02_view_header");
        $this->load->view("admin/03_view_sidebar", $pass);
        $this->load->view("admin/08_view_request", $pass);
        $this->load->view("admin/05_view_footer");
    }

    public function api_request()
    {
        $pass["data"]=$this->Manufriend_model->mm_show_request();
        echo json_encode($pass);
    }

    // ON GOING
    public function ongoing()
    {
        $pass["valemail"]= $this->session->userdata["email"];

        $pass["values"]= $this->Manufriend_model->mm_show_ongoing();
        //echo json_encode($pass)

        $this->load->view("admin/01_view_head");
        $this->load->view("admin/02_view_header");
        $this->load->view("admin/03_view_sidebar", $pass);
        $this->load->view("admin/09_view_ongoing", $pass);
        $this->load->view("admin/05_view_footer");
    }

    public function api_ongoing()
    {
        $pass["data"]=$this->Manufriend_model->mm_show_ongoing();
        echo json_encode($pass);
    }

    // DONE
    public function done()
    {
        $pass["valemail"]= $this->session->userdata["email"];

        $pass["values"]= $this->Manufriend_model->mm_show_done();
        //echo json_encode($pass)

        $this->load->view("admin/01_view_head");
        $this->load->view("admin/02_view_header");
        $this->load->view("admin/03_view_sidebar", $pass);
        $this->load->view("admin/10_view_done", $pass);
        $this->load->view("admin/05_view_footer");
    }

    public function api_done()
    {
        $pass["data"]=$this->Manufriend_model->mm_show_done();
        echo json_encode($pass);
    }

    public function api_approve($id_trx)
    {
        $data="";
        if ($id_trx!=""||$id_trx!=null) {
            $this->Manufriend_model->mm_update_transaction_to_ongoing($id_trx);

            redirect("welcome/transaction");
        } else {
            $data["response"]=404;
            $data["message"]="Gagal proses";
        }
    }


    //CUSTOMER
    public function user()
    {
        // if(role_user=1){

        // }

        $pass["valemail"]= $this->session->userdata["email"];

        $pass["values"]= $this->Manufriend_model->mm_show_user();
        //echo json_encode($pass)

        $this->load->view("admin/01_view_head");
        $this->load->view("admin/02_view_header");
        $this->load->view("admin/03_view_sidebar", $pass);
        $this->load->view("admin/07_view_user", $pass);
        $this->load->view("admin/05_view_footer");
    }

    public function api_user()
    {
        $pass["data"]=$this->Manufriend_model->mm_show_user();
        $pass["code"]=200;
        $pass["message"]="ok";
        echo json_encode($pass);
    }

    // HANG OUT
    public function hang_out()
    {
        $pass["valemail"]= $this->session->userdata["email"];

        $pass["values"]= $this->Manufriend_model->mm_show_hang_out();
        //echo json_encode($pass)

        $this->load->view("admin/01_view_head", $pass);
        $this->load->view("admin/02_view_header", $pass);
        $this->load->view("admin/03_view_sidebar", $pass);
        $this->load->view("admin/11_view_hang_out", $pass);
        $this->load->view("admin/05_view_footer");
    }

    public function api_hang_out()
    {
        $pass["data"]=$this->Manufriend_model->mm_show_hang_out();
        $pass["code"]=200;
        $pass["message"]="ok";
        echo json_encode($pass);
    }

    // SHOPPING
    public function shopping()
    {
        $pass["valemail"]= $this->session->userdata["email"];

        $pass["values"]= $this->Manufriend_model->mm_show_shopping();
        //echo json_encode($pass)

        $this->load->view("admin/01_view_head", $pass);
        $this->load->view("admin/02_view_header", $pass);
        $this->load->view("admin/03_view_sidebar", $pass);
        $this->load->view("admin/12_view_shopping", $pass);
        $this->load->view("admin/05_view_footer");
    }

    public function api_shopping()
    {
        $pass["data"]=$this->Manufriend_model->mm_show_shopping();
        $pass["code"]=200;
        $pass["message"]="ok";
        echo json_encode($pass);
    }


    public function api_login($var_usermail, $var_userpassword)
    {
        $data="";
        $is_exist =    $this->Manufriend_model->mm_cek_user($var_usermail, $var_userpassword);
        $user_profile = $this->Manufriend_model->mm_data_user($var_usermail, $var_userpassword);

        if ($is_exist>0) {
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
        } else {
            $data["message"]="Akun belum terdaftar !";
            $data["code"]=403;
            $data["response"]="fail";
        }
        // var_dump($arrayName);

        echo json_encode($data);
    }

    // CHIT-CHAT
    public function chit_chat()
    {
        $pass["valemail"]= $this->session->userdata["email"];

        $pass["values"]= $this->Manufriend_model->mm_show_chit_chat();
        //echo json_encode($pass)

        $this->load->view("admin/01_view_head");
        $this->load->view("admin/02_view_header");
        $this->load->view("admin/03_view_sidebar", $pass);
        $this->load->view("admin/13_view_chit_chat", $pass);
        $this->load->view("admin/05_view_footer");
    }

    public function api_chit_chat()
    {
        $pass["data"]=$this->Manufriend_model->mm_show_chit_chat();
        $pass["code"]=200;
        $pass["message"]="ok";
        echo json_encode($pass);
    }

    // SPORT
    public function sport()
    {
        $pass["valemail"]= $this->session->userdata["email"];

        $pass["values"]= $this->Manufriend_model->mm_show_sport();
        //echo json_encode($pass)

        $this->load->view("admin/01_view_head");
        $this->load->view("admin/02_view_header");
        $this->load->view("admin/03_view_sidebar", $pass);
        $this->load->view("admin/14_view_sport", $pass);
        $this->load->view("admin/05_view_footer");
    }

    public function api_sport()
    {
        $pass["data"]=$this->Manufriend_model->mm_show_sport();
        $pass["code"]=200;
        $pass["message"]="ok";
        echo json_encode($pass);
    }

    // ATTENDING A PARTY
    public function attending_party()
    {
        $pass["valemail"]= $this->session->userdata["email"];

        $pass["values"]= $this->Manufriend_model->mm_show_attending_party();
        //echo json_encode($pass)

        $this->load->view("admin/01_view_head");
        $this->load->view("admin/02_view_header");
        $this->load->view("admin/03_view_sidebar", $pass);
        $this->load->view("admin/15_view_attending_party", $pass);
        $this->load->view("admin/05_view_footer");
    }

    public function api_attending_party()
    {
        $pass["data"]=$this->Manufriend_model->mm_show_attending_party();
        $pass["code"]=200;
        $pass["message"]="ok";
        echo json_encode($pass);
    }




    public function register()
    {
        $dataParsing = array(
            "id_user"=>"",
            //andri diganti dengan $this->input->post('namauser');
            "nama_user"=>"uya",
            "email_user"=>"uya@gmail.com",
            "password_user"=>"uyauyauya",
            "telepon_user"=>"085399250048",
            "alamat_user"=>"Depok",
            "gender_user"=>"Perempuan",
            "ttl_user"=> date('y-m-d'),
            "role_user"=> 2
        );

        $this->Manufriend_model->mm_insert_new_user($dataParsing);
        echo json_encode($dataParsing);
    }



    // DI BAWAH INI ADALAH FUNCTION UNTUK API ANDROID
    public function api_register_user()
    {
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

        if ($dataParsing!=null && $cekemail<1) {
            $data["response"] = 200;
            $data["message"] = "Data Anda berhasil didaftarkan";
            $this->Manufriend_model->mm_insert_new_user($dataParsing);
        } elseif ($cekemail>0) {
            $data["response"] = 403;
            $data["message"] = "Data Anda sudah pernah didaftarkan";
        } else {
            $data["response"] = 404;
            $data["message"] = "Koneksi gagal";
        }

        echo json_encode($data);
    }
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
