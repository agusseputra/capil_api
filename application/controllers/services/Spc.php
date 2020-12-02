<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Spc extends CI_Controller{
	function __construct(){
        parent::__construct();
        $this->load->model("M_spc", "model");
	   }
    function get_spc($start,$end){
        $this->model->save_spc($start,$end);
       }
    function get_report(){
        $data['status']=false;
        $data['custCode']=$_POST['custCode'];
        $customer_no=$_POST['custCode'];
        $report=$this->model->get_report($customer_no);
        if($report != NULL){
            $data['status']=true;
            $data['data']=$report;
        }
         echo json_encode($data);
    }
 }?>