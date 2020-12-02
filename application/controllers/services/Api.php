<?php
require APPPATH . 'controllers/services/Rest.php';
//modul API yang terdapat di webservices DINKES
class Api extends Rest {
 
     function __construct($config = 'rest') {
        parent::__construct($config);
        //fungsi untuk cek token yang aktif
		$this->cektoken();
        $this->load->model('M_api');
    }
    //fungsi untuk mengirimkan data penduduk sesuai permintaan
    function penduduk_post(){
        $data['status']=0;
        $data['msg']='nik Not Found';
        //mengambil data dari model untuk dikirim sesuai permintaan nik
        $data['data']=$this->M_api->get_penduduk($_POST['nik']);
        if($data['data'] != NULL){
            $data['status']=1;
            $data['msg']='success';
        }
        //pengiriman respon data berupa json
        $this->response($data, 200);
    }
    
 }  
?>