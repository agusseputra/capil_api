<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Template{
    private $_ci;
    function __construct(){
        $this->_ci = & get_instance();
    }   
    function mahasiswa($view,$data=NULL){
       $data["content"] =$view;
       $data["menu"] ="back/menu_mahasiswa";
       $this->_ci->load->view("back/template", $data);
    }
    function kemahasiswaan($view,$data=NULL){
       $data["content"] =$view;
       $data["menu"] ="back/kemahasiswaan/menu_kemahasiswaan";
       $this->_ci->load->view("back/template", $data);
    }
}
?>
