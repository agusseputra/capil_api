<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_akademik extends CI_Model{
		 function __construct(){
			  parent::__construct();
		 }
   function transaksi_mahasiswa($id_fak){
    $this->db->where('ref_jurusan.id_fakultas',$id_fak);
    $this->db->select('data_mahasiswa.id_mahasiswa,data_mahasiswa.nim,data_mahasiswa.nama,data_mahasiswa.last_status,ref_jurusan.nama_jurusan,data_ips.*');
    $this->db->join('data_mahasiswa','data_mahasiswa.id_mahasiswa=data_ips.id_mahasiswa');
    $this->db->join('ref_jurusan','ref_jurusan.id_jurusan=data_mahasiswa.id_jurusan');
    return $this->db->get('data_ips')->result_array();
   }
   function non_krs($id_fak,$tahun,$semester){
        $this->db->where('id_fakultas',$id_fak)->where('krs.id_mahasiswa IS NULL');
        $this->db->from("(select * from data_status_mahasiswa where tahun=$tahun and semester=$semester and id_status=1 ) as status");
        $this->db->join("(select id_mahasiswa from data_registrasi where tahun=$tahun and semester=$semester ) as krs",'krs.id_mahasiswa=status.id_mahasiswa','left');
        $this->db->join('data_mahasiswa','data_mahasiswa.id_mahasiswa=status.id_mahasiswa');
        $this->db->join('ref_jurusan','ref_jurusan.id_jurusan=data_mahasiswa.id_jurusan');
        return $this->db->get()->result_array();
   }
 /**
 *   function non_krs($id_fak,$tahun,$semester){
 *     $this->db->where('id_fakultas',$id_fak)->where('data_registrasi.id_mahasiswa IS NULL')->where('data_status_mahasiswa.id_status',1)->where('data_status_mahasiswa.tahun',$tahun)->where('data_status_mahasiswa.semester',$semester);
 *     $this->db->select('data_mahasiswa.*,data_status_mahasiswa.*,ref_jurusan.nama_jurusan');
 *     $this->db->join('data_registrasi','data_registrasi.id_mahasiswa=data_status_mahasiswa.id_mahasiswa and data_registrasi.tahun=data_status_mahasiswa.tahun and data_registrasi.semester=data_status_mahasiswa.semester','left');
 *      $this->db->join('data_mahasiswa','data_mahasiswa.id_mahasiswa=data_status_mahasiswa.id_mahasiswa');
 *         $this->db->join('ref_jurusan','ref_jurusan.id_jurusan=data_mahasiswa.id_jurusan');
 *         return $this->db->get('data_status_mahasiswa')->result_array();
 *     }
 */
   }
?>