<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_login', 'model');
    }

    public function index() {
        $this->load->view('back/login');
    }

    public function info(){
        phpinfo();
    }

    public function auth($sso = NULL) {
            $this->form_validation->set_error_delimiters('', '<br/>');
            $this->form_validation->set_rules('post[username]', 'Username', 'required', array('required' => 'Username harus diisi.'));
            $this->form_validation->set_rules('post[password]', 'Password', 'required', array('required' => 'Password harus diisi.'));
            if ($this->form_validation->run() == FALSE) {
                $result['error'] = TRUE;
                $result['msg_header'] = 'Login gagal';
                $result['msg_body'] = validation_errors();
                $result['redirect'] = FALSE;
            } else {
                $post = $this->input->post('post');
                 $exist = $this->model->check_username($post['username']);
                 if ($exist != NULL) {
                    $post['username']=$exist['username'];
                    $user = $this->model->check_password($post);
                    if ($user != NULL) {
                        $newdata['loginuser'] = 'pdm';
                        $newdata['type'] = $user['type'];
                        $newdata['id_user'] = $user['id_user'];
                        $get_user=$this->model->get_user($user['id_user'],$user['type']);
                        if($get_user != NULL){
                            $newdata['name'] = $get_user['nama'];
                            if($user['type']=='kemahasiswaan' || $user['type']=='akademik'){
                                $newdata['id_fakultas'] = $get_user['id_fakultas'];
                                $newdata['id_jurusan'] = $get_user['id_jurusan'];
                            }
                            $this->fn->set_ss_user($newdata);
                            $result['redirect_url']=$this->fn->home($user['type']);
                            $result['error'] = FALSE;
                            $result['msg_header'] = 'Login sukses';
                            $result['msg_body'] = 'Sistem akan mengarahkan Anda dalam sekejap.';
                            $result['redirect'] = TRUE;
                            
                        }else{
                            $result['error'] = TRUE;
                            $result['msg_header'] = 'Login gagal';
                            $result['msg_body'] = 'Data tidak ditemukan, mohon masukkan dengan benar.';
                            $result['redirect'] = FALSE;
                        }
                    }else {
                        $result['error'] = TRUE;
                        $result['msg_header'] = 'Login gagal';
                        $result['msg_body'] = 'Password yang Anda masukkan salah.';
                        $result['form_error'] = array('post[password]' => 'Password salah');
                        $result['redirect'] = FALSE;
                    }
                 }else {
                    $result['error'] = TRUE;
                    $result['msg_header'] = 'Login gagal';
                    $result['msg_body'] = 'Username yang Anda masukkan tidak terdaftar dalam sistem.';
                    $result['form_error'] = array('post[username]' => 'Username tidak terdaftar');
                    $result['redirect'] = FALSE;
                }
            }

            echo json_encode($result);
        

    }
    function logout($ss=""){
        if($ss!=''){
           $this->session->unset_userdata($ss);
           $_SESSION = $this->session->userdata();
        }else{
            $this->session->sess_destroy();
        }
        redirect('login');
    }

}
