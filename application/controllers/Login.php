<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
    $this->load->model('M_login');
  }
  function index(){
    $this->load->view('login');
  }
  function login(){
    $result['error'] = TRUE;
    $result['msg_header'] = 'Lengkapi Data';
    $this->form_validation->set_rules('username', '', 'required', array('required' => 'Username Wajib'));
    $this->form_validation->set_rules('password', '', 'required', array('required' => 'Password Wajib'));
        if ($this->form_validation->run() == FALSE) {
            $result['error'] = TRUE;
            $result['msg_body'] = validation_errors();
        } else {
          $user=$this->M_login->cek_login($_POST['username'],md5($_POST['password']));
            if($user != NULL){
                unset($user['password']);
                $this->session->set_userdata($user);
                $result['error'] = FALSE;
                $result['msg_header'] = 'Login berhasil';
                $result['msg_body'] = 'mohon menunggu. halaman akan disegarkan'; 
                $result['redirect_url'] = site_url('home'); 
            }else{
                $result['msg_body'] = 'Tidak ditemukan username ataupun password yang cocok !';   
            }
          }
        echo json_encode($result);
  }
  function logout(){
    $this->session->sess_destroy();
    redirect('login');
  }
  }