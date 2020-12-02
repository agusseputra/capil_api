<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Embed extends CI_Controller {
    public function __construct() {
        parent::__construct();
         $this->load->model('m_referensi');
        }
    function get_prestasi(){
        if(isset($_GET['s'])){
            $keyword=urldecode($_GET['s']);
        }
        if(!isset($_GET['tahun'])){
            $_GET['tahun']='2017';
        }
         $this->load->model('m_kemahasiswaan');
        $data['jurusan']=array_transform($this->m_referensi->get_referensi('ref_jurusan'),'id_jurusan');
        $data['fakultas']=array_transform($this->m_referensi->get_referensi('ref_fakultas'),'id_fakultas');
         $data['ref_kualifikasi']=$this->m_referensi->get_referensi('ref_kualifikasi_prestasi');
        
            if(isset($_GET['angkatan']) && $_GET['angkatan']!='all'){
                $this->db->where('tahun_masuk',$_GET['angkatan']);
            }
            if(isset($_GET['jurusan']) && $_GET['jurusan']!='all'){
                $this->db->where('data_mahasiswa.id_jurusan',$_GET['jurusan']);
            }
            if(isset($_GET['fakultas']) && $_GET['fakultas']!='all'){
                $this->db->where('ref_jurusan.id_fakultas',$_GET['fakultas']);
            }
            if(isset($_GET['tahun']) && $_GET['tahun']!='all'){
                $this->db->where('data_prestasi.tahun',$_GET['tahun']);
            }
            if(isset($keyword)){
                $this->db->where("(data_mahasiswa.nim like '%$keyword%' or data_mahasiswa.nama like '%$keyword%')");
            }
            $this->db->where('data_prestasi.validasi','valid');
            $this->db->select('data_mahasiswa.nim,data_mahasiswa.nama as nama_siswa, ref_jurusan.nama_jurusan,ref_jurusan.id_fakultas, data_prestasi.*');
            $this->db->order_by('data_prestasi.id_prestasi,data_prestasi.nama,data_prestasi.id_mahasiswa','asc');
            $data['data_prestasi']=$this->m_kemahasiswaan->get_prestasi();
        if(isset($_GET['ajax'])){
            $this->load->view('services/table_prestasi',$data);
        }else{
            $this->load->view('services/v_embed_prestasi',$data);
        }
    }
    function get_beasiswa(){
        
    }
    function mhs_kuisioner_get($nim){
        $this->db->where('nim',$nim);
        $this->db->select('nim,nama,nama_jurusan,jk, tmp_lahir,tgl_lahir,email');
        $this->db->join('ref_jurusan','ref_jurusan.id_jurusan=data_mahasiswa.id_jurusan');
        $data= $this->db->get('data_mahasiswa')->row_array();
         echo json_encode($data);
    }
    function get_dosen($nip){
        $data=null;
        $postdata = http_build_query(
        array('nip' => $nip ));
        $opts = array('http' =>
                array(
                    'method'  => 'POST',
                    'header'  => 'Content-type: application/x-www-form-urlencoded',
                    'content' => $postdata
                )
            );
        $context  = stream_context_create($opts);
        $data = file_get_contents('https://dosen.undiksha.ac.id/admin/services/api/data/dosen_per_user', false, $context);
        echo  $data;
    }
}
?>