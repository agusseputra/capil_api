<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Akademik extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_front');
        $this->load->model('M_akademik','model');
        $this->load->model('m_referensi');
        if($this->fn->get_ss_kemahasiswaan()==NULL){
            redirect('login');
          }
    }
    function transaksi_mahasiswa(){  
        $setting=$this->fn->get_setting();
        if(isset($_GET['angkatan']) && $_GET['angkatan']!='all'){
            $this->db->where('tahun_masuk',$_GET['angkatan']);
            }          
            if(isset($_GET['jurusan']) && $_GET['jurusan']!='all'){
            $this->db->where('data_mahasiswa.id_jurusan',$_GET['jurusan']);
            }
        if(isset($_GET['tahun'])  ){
            if($_GET['tahun']!='all'){
                $this->db->where('tahun ',$_GET['tahun']);
            }
        }else{
            $this->db->where('tahun',$setting['tahun_aktif']);
        }
        if(isset($_GET['semester']) ){
            if($_GET['semester']!='all'){
            $this->db->where('semester ',$_GET['semester']);
            }
        }else{
          $this->db->where('semester',$setting['semester_aktif']);
        }        
        $this->db->order_by('nim,tahun,semester','asc');
        $data['mahasiswa']=$this->model->transaksi_mahasiswa($this->fn->get_ss_kemahasiswaan('id_fakultas'));
        $this->db->where('id_fakultas',$this->fn->get_ss_kemahasiswaan('id_fakultas'));
        $data['jurusan']=$this->m_referensi->m_referensi->get_referensi('ref_jurusan');
       $this->template->kemahasiswaan('back/akademik/transaksi_mahasiswa',$data); 
    }
    function non_krs(){
        if(isset($_GET['tahun'])){
            $tahun=substr($_GET['tahun'],0,4);$semester=substr($_GET['tahun'],-1);
        }else{
            $setting=$this->fn->get_setting();
            $tahun=$setting['tahun_aktif'];$semester=$setting['semester_aktif'];
        }
        if(isset($_GET['jurusan']) && $_GET['jurusan']!='all'){
         $this->db->where('data_mahasiswa.id_jurusan',$_GET['jurusan']);
       }
        $data['mahasiswa']=$this->model->non_krs($this->fn->get_ss_kemahasiswaan('id_fakultas'),$tahun,$semester);
        $this->db->where('id_fakultas',$this->fn->get_ss_kemahasiswaan('id_fakultas'));
        $data['jurusan']=$this->m_referensi->m_referensi->get_referensi('ref_jurusan');
        $this->template->kemahasiswaan('back/akademik/non_krs',$data); 
    }
}
?>