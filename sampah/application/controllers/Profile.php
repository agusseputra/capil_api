<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
        $this->load->model('M_front','model');
	
	}

    function detail($permalink){
        $data = array('isi' => 'front/v_profile');
    $this->db->select('data_dosen.nama as nama_dosen, ref_kecamatan.kecamatan, ref_kabupaten.kabupaten, ref_provinsi.provinsi, ref_jurusan.nama_jurusan, data_mahasiswa.*, ref_agama.agama');
    $data['profile']=$this->model->get_profile($permalink);
    if($data['profile'] != NULL){
        $data['ref_jurusan']=$this->fn->ref_jurusan();
$data['ref_fakultas']=$this->fn->ref_fakultas();
         $data['title']=$data['profile']['nama'];
         $data['meta']='Mahasiswa '.$data['profile']['nama_jurusan'].' Undiksha '.$data['profile']['nama'].'-'.$data['profile']['nim'];
         $data['url']=site_url($data['profile']['permalink']);
         $data['metaimage']='assets/images/logoundiksha.png';
         $data['sks']=$this->model->get_sks($data['profile']['id_mahasiswa'],substr($data['profile']['last_status'],0,4),substr($data['profile']['last_status'],4,1));
         $data['tugas_akhir']=$this->model->get_tugas_akhir($data['profile']['id_mahasiswa']);
         $data['ref_status']=$this->model->ref_status();
    }
    
        $this->load->view('front/template',$data);
    }
 
    function riwayat_pendidikan($id=null){
        $data['pendidikan']=$this->model->get_riwayat_pendidikan($id);
       // pre($data['status']);
       $this->load->view('front/riwayat_pendidikan',$data);
    }
    function aktivitas_perkuliahan($id=null){
        $data['status']=$this->model->get_status($id);
       // pre($data['status']);
       $this->load->view('front/aktivitas_perkuliahan',$data);
    }
    function riwayat_studi($id=null){
         $data['nilai']=$this->model->get_nilai($id);
       // pre($data['status']);
       $this->load->view('front/riwayat_studi',$data);
    }
    function prestasi($id=null){
         $data['prestasi']=$this->model->get_prestasi($id);
       // pre($data['status']);
       $this->load->view('front/v_prestasi',$data);
    }
 }
 ?>