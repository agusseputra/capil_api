<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_kinerja extends CI_Model{
		 function __construct(){
			  parent::__construct();
		 }
   function get_ref_kinerja(){
    $data=$this->db->get('ref_kinerja')->result_array();
    if($data!=NULL){
        foreach($data as $val){
            $new_data[$val['parent']][$val['id_kinerja']]=$val;
        }
    }
    if(isset($new_data)){
        return $new_data;
    }else{
        return $data;
    }
   }
   function get_pengambilan($id_mahasiswa,$tahun,$semester){
   // $this->db->where("kinerja.id_pengambilan IS NULL");
    $this->db->select("data_pengambilan.*");
  //  $this->db->join("(select id_pengambilan,id_mahasiswa from data_kinerja_dosen where id_mahasiswa=$id_mahasiswa group by id_pengambilan) as kinerja","kinerja.id_pengambilan=data_pengambilan.id_pengambilan","left");
    $this->db->where('data_pengambilan.id_mahasiswa',$id_mahasiswa)->where('tahun',$tahun)->where('semester',$semester);
    return $this->db->get("data_pengambilan")->result_array();
   }
   function get_pengampu($id_penawaran){
    $this->db->where('md5(id_penawaran)',$id_penawaran);
   $this->db->join('data_dosen','data_dosen.id_dosen=data_pengampu.id_dosen');
    return $this->db->get('data_pengampu')->result_array();
   }
   function save_angket($id_pengambilan,$id_mahasiswa,$post){
    foreach($post['radio'] as $val){
        $total[$val]=(isset($total[$val]))?$total[$val]+1:1;
    }
    $data=array(
        "id_mahasiswa"=>$id_mahasiswa,
        "id_pengambilan"=>$id_pengambilan,
        //"id_mk"=>$id_mk,
        "id_dosen"=>$post['id_dosen'],
        "kinerja"=>json_encode($post["radio"]),
        "jumlah_1"=>(isset($total[1]))?$total[1]:0,
        "jumlah_2"=>(isset($total[2]))?$total[2]:0,
        "jumlah_3"=>(isset($total[3]))?$total[3]:0,
        "jumlah_4"=>(isset($total[4]))?$total[4]:0,
        "jumlah_5"=>(isset($total[5]))?$total[5]:0,
    );
    $this->db->insert('data_kinerja_dosen',$data);
   }
}?>