<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_data extends CI_Model
	{
		 function __construct()
		 {
			  // Call the Model constructor
			  parent::__construct();
		 }
   function rekap_mahasiswa(){
    return $this->db->get('data_rekap_status_mahasiswa')->result_array();
   }
   
   function rekap_ipk(){
    $this->db->select(" * , count(IF(ipk < 2, ipk, NULL)) ipk_2,count(IF(ipk >= 2 and ipk < 2.5, ipk, NULL)) ipk_25,count(IF(ipk >= 2.5 and ipk <= 3, ipk, NULL)) ipk_3,
count(IF(ipk > 3 and ipk <= 3.5, ipk, NULL)) ipk_35,count(IF(ipk > 3.5 and ipk <= 4, ipk, NULL)) ipk_4");
 $this->db->join("data_mahasiswa","data_mahasiswa.id_mahasiswa=data_ipk.id_mahasiswa",'left');
 $this->db->join("ref_jurusan","ref_jurusan.id_jurusan=data_mahasiswa.id_jurusan");
$this->db->group_by("data_mahasiswa.id_jurusan");
return $this->db->get('data_ipk')->result_array();
        
    }
    
    function rekap_ipk2(){
        $this->db->from("(SELECT * , count(IF(ipk < 2, ipk, NULL)) ipk_2,count(IF(ipk >= 2 and ipk < 2.5, ipk, NULL)) ipk_25,count(IF(ipk >= 2.5 and ipk <= 3, ipk, NULL)) ipk_3,
count(IF(ipk > 3 and ipk <= 3.5, ipk, NULL)) ipk_35,count(IF(ipk > 3.5 and ipk <= 4, ipk, NULL)) ipk_4 FROM `data_ipk` GROUP BY id_jurusan,tahun, semester) as A");
        return $this->db->get()->result_array();
    }
    function rekap_ipk_fakultas2(){
        $this->db->from("(SELECT * , count(IF(ipk < 2, ipk, NULL)) ipk_2,count(IF(ipk >= 2 and ipk < 2.5, ipk, NULL)) ipk_25,count(IF(ipk >= 2.5 and ipk <= 3, ipk, NULL)) ipk_3,
count(IF(ipk > 3 and ipk <= 3.5, ipk, NULL)) ipk_35,count(IF(ipk > 3.5 and ipk <= 4, ipk, NULL)) ipk_4 FROM `data_ipk` GROUP BY id_fakultas,tahun, semester) as A");
        return $this->db->get()->result_array();
    }
     function rekap_ipk_fakultas(){
    $this->db->select(" * , count(IF(ipk <= 2, ipk, NULL)) ipk_2,count(IF(ipk > 2 and ipk <= 2.5, ipk, NULL)) ipk_25,count(IF(ipk > 2.5 and ipk <= 3, ipk, NULL)) ipk_3,
count(IF(ipk > 3 and ipk <= 3.5, ipk, NULL)) ipk_35,count(IF(ipk > 3.5 and ipk <= 4, ipk, NULL)) ipk_4");
    $this->db->join("data_mahasiswa","data_mahasiswa.id_mahasiswa=data_ipk.id_mahasiswa");
    $this->db->join("ref_jurusan","ref_jurusan.id_jurusan=data_mahasiswa.id_jurusan");
    $this->db->group_by("id_fakultas");
    return $this->db->get('data_ipk')->result_array();      
    }
        
    function get_mahasiswa(){
        return $this->db->get('data_mahasiswa')->result_array(); 
    }
    function rekap_lulusan(){
        $this->db->select(" * ,sum(IF(bulan_lulus = '01', jumlah, NULL)) b_1,sum(IF(bulan_lulus = '02', jumlah, NULL)) b_2,sum(IF(bulan_lulus = '03', jumlah, NULL)) b_3,
        sum(IF(bulan_lulus = '04', jumlah, NULL)) b_4,sum(IF(bulan_lulus = '05', jumlah, NULL)) b_5,sum(IF(bulan_lulus = '06', jumlah, NULL)) b_6,sum(IF(bulan_lulus = '07', jumlah, NULL)) b_7,
        sum(IF(bulan_lulus = '08', jumlah, NULL)) b_8,sum(IF(bulan_lulus = '09', jumlah, NULL)) b_9,sum(IF(bulan_lulus = '10', jumlah, NULL)) b_10,sum(IF(bulan_lulus = '11', jumlah, NULL)) b_11,
        sum(IF(bulan_lulus = '12' or bulan_lulus = '00', jumlah, NULL)) b_12");
    return $this->db->get('data_rekap_periode_lulus')->result_array();
   }
   }

   ?>