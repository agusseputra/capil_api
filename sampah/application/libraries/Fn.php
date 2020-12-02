<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
if (!isset($_SESSION)) @session_start();

class Fn
{

    protected $_ci;

    function __construct() {
        $this->_ci =& get_instance();
      //  $this->_ci->load->model('fn_model', 'doom');
    }
    function ref_fakultas($id=NULL){
    $fakultas=$this->_ci->db->get('ref_fakultas')->result_array();
    if($fakultas != NULL){
        foreach($fakultas as $val){
            $fak[$val['id_fakultas']]=$val;
        }
    if($id != NULL){
        return $fak[$id];
    }else{
        return $fak;
    }
    }else{
        return NULL;
    }
   }
   function ref_jurusan($id=NULL){
    $jurusan=$this->_ci->db->get('ref_jurusan')->result_array();
    if($jurusan != NULL){
        foreach($jurusan as $val){
            $jur[$val['id_jurusan']]=$val;
        }
    if($id != NULL){
        return $jur[$id];
    }else{
        return $jur;
    }
    }else{
        return NULL;
    }
   }
   function ref_status($id=NULL){
    $jurusan=$this->_ci->db->get('ref_status_mahasiswa')->result_array();
    if($jurusan != NULL){
        foreach($jurusan as $val){
            $jur[$val['id_status']]=$val;
        }
    if($id != NULL){
        return $jur[$id];
    }else{
        return $jur;
    }
    }else{
        return NULL;
    }
   }
   function home($type){
    if($type=='mahasiswa'){
        return site_url('mahasiswa/profile/');
    }elseif($type=='akademik' || $type=='kemahasiswaan'){
        return site_url('admin/kemahasiswaan/');
    }
   }
   function get_ss_mahasiswa($ss=''){
   $session = $_SESSION;
		if (isset($session["mahasiswa"])){
			if ($ss==""){
				return $session["mahasiswa"];
			}elseif (isset($session["mahasiswa"][$ss])){
				return $session["mahasiswa"][$ss];
			}else{
				return false;
			}
		}else{
			return false;
		}
   }
   function get_ss_kemahasiswaan($ss=''){
   $session = $_SESSION;
		if (isset($session["kemahasiswaan"])){
			if ($ss==""){
				return $session["kemahasiswaan"];
			}elseif (isset($session["kemahasiswaan"][$ss])){
				return $session["kemahasiswaan"][$ss];
			}else{
				return false;
			}
		}else{
			return false;
		}
   }
   function set_ss_user($array){
    $this->_ci->session->unset_userdata($array['type']);
	$_SESSION[$array['type']] = $array;
   }
   function get_setting(){
    return $this->_ci->db->get('setting_program')->row_array();
   }
}?>