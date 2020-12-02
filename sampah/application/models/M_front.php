<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_front extends CI_Model{
		 function __construct(){
			  parent::__construct();
		 }  
   function get_profile($id){
    //$this->db->where('id_mahasiswa',$id);
//    $this->db->join('ref_jurusan','ref_jurusan.kode_jurusan=data_mahasiswa.kode_jurusan');
//    $this->db->join('data_dosen','data_dosen.id_dosen=data_mahasiswa.id_pa');
//    $this->db->join('ref_kecamatan','ref_kecamatan.kode_kecamatan=data_mahasiswa.kode_kecamatan','left');
//    $this->db->join('ref_kabupaten','ref_kabupaten.kode_kabupaten=ref_kecamatan.kode_kabupaten','left');
//    $this->db->join('ref_provinsi','ref_provinsi.kode_provinsi=ref_kabupaten.kode_provinsi','left');
//    return $this->db->get('data_mahasiswa')->row_array();
    
    //$this->db->where('permalink',$id);
    $this->db->from("(select * from data_mahasiswa where nim='$id' or permalink='$id') as data_mahasiswa");
    $this->db->join('ref_jurusan','ref_jurusan.id_jurusan=data_mahasiswa.id_jurusan');
    $this->db->join('ref_agama','ref_agama.id_agama=data_mahasiswa.id_agama');
    $this->db->join('data_dosen','data_dosen.id_dosen=data_mahasiswa.id_pa','left');
    $this->db->join('ref_kecamatan','ref_kecamatan.kode_kecamatan=data_mahasiswa.kode_kecamatan','left');
    $this->db->join('ref_kabupaten','ref_kabupaten.kode_kabupaten=ref_kecamatan.kode_kabupaten','left');
    $this->db->join('ref_provinsi','ref_provinsi.kode_provinsi=ref_kabupaten.kode_provinsi','left');
    
    return $this->db->get()->row_array();
   }
   function get_status($id){
    $this->db->where('data_status_mahasiswa.id_mahasiswa',$id);
    $this->db->select('data_status_mahasiswa.*,data_registrasi.id_status as id_status_registrasi,data_registrasi.sks,ref_status_mahasiswa.*');
    $this->db->join('ref_status_mahasiswa','ref_status_mahasiswa.id_status=data_status_mahasiswa.id_status');
    $this->db->join('data_registrasi','data_registrasi.id_mahasiswa=data_status_mahasiswa.id_mahasiswa and data_registrasi.tahun=data_status_mahasiswa.tahun and data_registrasi.semester=data_status_mahasiswa.semester','left');
   $this->db->order_by('tahun,semester','asc');
   return $this->db->get('data_status_mahasiswa')->result_array();
   }
   function ref_status(){
    $ref= $this->db->get('ref_status_mahasiswa')->result_array();
    if($ref != NULL){
        foreach($ref as $val){
            $status[$val['id_status']]=$val;
        }
        return $status;
    }else{
        return NULL;
    }
   }
   function get_nilai($id){
    $this->db->where('data_pengambilan.id_mahasiswa',$id);
    $this->db->order_by('id_pengambilan','asc');
    return $this->db->get('data_pengambilan')->result_array();
   }
   function get_ips($id_user){
    $this->db->where('id_mahasiswa',$id_user);
    $this->db->order_by('tahun,semester','asc');
    return $this->db->get('data_ips')->result_array();
   }
   function get_ipk($id_user){
    $this->db->where('id_mahasiswa',$id_user);
    return $this->db->get('data_ipk')->row_array();
   }
   function get_sks($id,$th,$sm){
    $this->db->where('id_mahasiswa',$id)->where('semester',$sm)->where('tahun',$th);
    return $this->db->get('data_registrasi')->row_array();
   }
  function get_riwayat_pendidikan($id){
    $sql="select A.id_mahasiswa, A.nim, A.tahun_masuk,jalur, nama_jurusan from(select id_mahasiswa,id_sebelum from data_pindahan where id_mahasiswa='$id') as D
join data_mahasiswa as A on A.id_mahasiswa=D.id_sebelum
JOIN ref_jurusan as B on A.id_jurusan=B.id_jurusan
join ref_jalur as C on C.kode_jalur=A.id_jalur 
UNION
select  A.id_mahasiswa, A.nim, A.tahun_masuk,jalur, nama_jurusan from(select id_mahasiswa,nim, id_jalur, id_jenis_mahasiswa, tahun_masuk, id_jurusan from data_mahasiswa where id_mahasiswa='$id') as A
JOIN ref_jurusan as B on A.id_jurusan=B.id_jurusan
join ref_jalur as C on C.kode_jalur=A.id_jalur ;";
    return $this->db->query($sql)->result_array();
  }
  function get_tugas_akhir($id){
    $this->db->select("judul,pemb_1.nama as pembimbing_1,pemb_2.nama as pembimbing_2,tgl_lulus, no_ijazah,no_ta_akademik,no_akta");
    $this->db->from("(select judul,id_pembimbing_1,id_pembimbing_2,tgl_lulus,no_ijazah,no_ta_akademik,no_akta from data_tugas_akhir where id_mahasiswa=$id) as ta");
    $this->db->join("data_dosen as pemb_1","ta.id_pembimbing_1=pemb_1.id_dosen","left");
    $this->db->join("data_dosen as pemb_2","ta.id_pembimbing_2=pemb_2.id_dosen","left");
    return $this->db->get()->row_array();
  }
  function get_prestasi($id){
    $this->db->select("*,prestasi.nama as prestasi");
    $this->db->from("(select * from data_prestasi where id_mahasiswa=$id ) as prestasi");
    $this->db->join("ref_kualifikasi_prestasi","ref_kualifikasi_prestasi.id_kualifikasi=prestasi.id_kualifikasi");
    return $this->db->get()->result_array();
  }
  function get_keluarga($id){
    $this->db->from("(select * from data_keluarga where id_mahasiswa=$id) as keluarga");
    $this->db->join("ref_hubungankeluarga","ref_hubungankeluarga.id_hubungankeluarga=keluarga.id_hubungankeluarga");
    $this->db->join("ref_pekerjaan","ref_pekerjaan.id_pekerjaan=keluarga.id_pekerjaan",'left');
    $this->db->join("ref_pendidikan","ref_pendidikan.id_pendidikan=keluarga.id_pendidikan","left");
    $this->db->join("ref_status","ref_status.kode_status=keluarga.status","left");
    return $this->db->get()->result_array();
   }
 }?>