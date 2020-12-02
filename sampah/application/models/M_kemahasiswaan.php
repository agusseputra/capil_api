<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_kemahasiswaan extends CI_Model{
		 function __construct(){
			  parent::__construct();
		 }
   function get_mahasiswa($id_fak){
    $this->db->where('id_fakultas',$id_fak);
    $this->db->join('ref_jurusan','data_mahasiswa.id_jurusan=ref_jurusan.id_jurusan');
    return $this->db->get('data_mahasiswa')->result_array();
   }
   function get_jurusan($id_fak){
    $this->db->where('id_fakultas',$id_fak);
    return $this->db->get('ref_jurusan')->result_array();
   }
   function save_aktivasi($id,$tahun,$semester,$up_by=null,$cr_by=null){
    $exits=$this->db->where('id_mahasiswa',$id)->where('tahun',$tahun)->where('semester',$semester)->get('data_status_mahasiswa')->row_array();
    $status['tahun']=$tahun;
    $status['semester']=$semester;
    $status['id_status']=1;
    $status['update_by']=$up_by;
    if($exits!=NULL){
        $this->db->where('id_statusmahasiswa',$exits['id_statusmahasiswa'])->update('data_status_mahasiswa',$status);
    }else{
        $status['id_mahasiswa']=$id;
        $status['create_by']=$cr_by;
        $this->db->insert('data_status_mahasiswa',$status); 
    }
    $this->db->where('id_mahasiswa',$id)->update('data_mahasiswa',array('last_status'=>$tahun.$semester.'1'));
   }
   function get_aktivitas_perkuliahan(){
    $this->db->join('data_status_mahasiswa','data_status_mahasiswa.id_mahasiswa=data_mahasiswa.id_mahasiswa');
    $this->db->order_by('tahun,semester', 'asc');
    $status = $this->db->get('data_mahasiswa')->result_array();
    if($status != NULL){
        foreach($status as $val){
            $arr['mahasiswa'][$val['id_mahasiswa']]=$val;
            $arr['status'][$val['id_mahasiswa']][]=array('ta'=>$val['tahun'].$val['semester'],'id_status'=>$val['id_status']); ;
        }
        return $arr; 
    }else{
        return NULL;
    }
   }
   function get_aktivitas_perkuliahan2($id_jurusan,$tahun_masuk,$ta,$sm){
    $this->db->from("(select * from data_mahasiswa where id_jurusan=$id_jurusan and tahun_masuk=$tahun_masuk and left(last_status,4)=$ta and right(left(last_status,5),1)=$sm) as data_mahasiswa");
    $this->db->join('data_status_mahasiswa','data_status_mahasiswa.id_mahasiswa=data_mahasiswa.id_mahasiswa');
    $this->db->order_by('tahun,semester', 'asc');
    $status = $this->db->get()->result_array();
    if($status != NULL){
        foreach($status as $val){
            $arr['mahasiswa'][$val['id_mahasiswa']]=$val;
            $arr['status'][$val['id_mahasiswa']][]=array('ta'=>$val['tahun'].$val['semester'],'id_status'=>$val['id_status']); ;
        }
        return $arr; 
    }else{
        return NULL;
    }
   }
   function save_update_nama($id,$post,$up_by){
    $data['nama']=$post['nama'];
    $data['tmp_lahir']=$post['tmp_lahir'];
    $data['tgl_lahir']=$post['tgl_lahir'];
    $data['jk']=$post['jk'];
    $data['nik']=$post['nik'];
    $data['update_by']=$up_by;
    $this->db->where('id_mahasiswa',$id);
    $this->db->update('data_mahasiswa',$data);
   }
   function save_update_password($id,$psw){
    $this->db->where('id_user',$id)->where('type','mahasiswa');
    $this->db->update('data_login',array("password"=>md5($psw)));
   }
   function statistik_borang($id_jurusan,$last_status){
    $sql="select mahasiswa_baru.*, mahasiswa_aktif.reguler as jumlah_aktif_reguler,mahasiswa_aktif.non_reguler as jumlah_aktif_non_reguler,penerimaan.ikut_seleksi,penerimaan.lulus from
(SELECT tahun_masuk as tahun,concat(tahun_masuk,data_mahasiswa.id_jurusan)  as id,  data_mahasiswa.id_jurusan, 
    count(IF(LEFT(RIGHT(nim, 4), 1) = '1', nim, NULL)) reguler,count(IF(LEFT(RIGHT(nim, 4), 1) <> '1', nim, NULL)) non_reguler
FROM
    data_mahasiswa 
WHERE
    LEFT(nim, 2) > '09'
AND data_mahasiswa.id_jurusan = $id_jurusan group by tahun_masuk,data_mahasiswa.id_jurusan) as mahasiswa_baru 
left join
(SELECT concat(tahun_masuk,data_mahasiswa.id_jurusan)  as id,tahun_masuk,  data_mahasiswa.id_jurusan,
     count(IF(LEFT(RIGHT(nim, 4), 1) = '1', nim, NULL)) reguler,count(IF(LEFT(RIGHT(nim, 4), 1) <> '1', nim, NULL)) non_reguler FROM
    data_mahasiswa 
WHERE
    LEFT(nim, 2) > '09'
AND data_mahasiswa.id_jurusan = $id_jurusan   and  last_status=$last_status group by tahun_masuk, data_mahasiswa.id_jurusan) as mahasiswa_aktif on mahasiswa_baru.id=mahasiswa_aktif.id
left join (select concat(tahun,id_jurusan)  as id, sum(ikut_seleksi) as ikut_seleksi,sum(lulus_seleksi) as lulus, tahun from data_rekap_penerimaan 
where right(tahun,2)>'09' and id_jurusan= $id_jurusan group by tahun,id_jurusan) as penerimaan on mahasiswa_baru.id=penerimaan.id";
return $this->db->query($sql)->result_array();
    }
    function statistik_borang2($id_jurusan,$tahun){
        $sql="select *,(aktif-lulus) as jumlah from(
SELECT concat(tahun_masuk,data_mahasiswa.id_jurusan)  as id,tahun_masuk,  id_jurusan, tahun,semester,	
     count(IF(krs.id_status = '1', nim, NULL)) aktif, count(IF(krs.id_status = '6', nim, NULL)) lulus
FROM
    data_mahasiswa 
    join(select * from data_status_mahasiswa where tahun > $tahun  ) as  krs on krs.id_mahasiswa=data_mahasiswa.id_mahasiswa
  WHERE
    tahun_masuk > $tahun
AND data_mahasiswa.id_jurusan = $id_jurusan and LEFT(RIGHT(data_mahasiswa.nim, 4), 1) = '1'   group by tahun_masuk,data_mahasiswa.id_jurusan,tahun,semester) as mahasiswa_baru";
return $this->db->query($sql)->result_array();
        }
function get_kinerja(){
    $this->db->select('data_mahasiswa.nim,data_mahasiswa.id_jurusan,data_mahasiswa.nama,tahun,semester,id_mk,kode_mk,nama_mk, data_dosen.nip,data_dosen.nama as nama_dosen,data_kinerja_dosen.*,
    sum(jumlah_1) as jum_1,sum(jumlah_2) as jum_2,sum(jumlah_3) as jum_3,sum(jumlah_4) as jum_4,sum(jumlah_5) as jum_5,');
    $this->db->join('data_pengambilan','data_kinerja_dosen.id_pengambilan=data_pengambilan.id_pengambilan');
    $this->db->join('data_dosen','data_kinerja_dosen.id_dosen=data_dosen.id_dosen');
    $this->db->join('data_mahasiswa','data_mahasiswa.id_mahasiswa=data_pengambilan.id_mahasiswa');
    $this->db->group_by('tahun,semester,id_dosen,id_mk');
    return  $this->db->get('data_kinerja_dosen')->result_array();
}
function save_pindahan($mahasiswa,$old_id,$old_jurusan){
    $this->db->insert('data_mahasiswa',$mahasiswa);
    $pindahan['id_sebelum']=$old_id;
    $pindahan['id_mahasiswa']=$mahasiswa['id_mahasiswa'];
    $pindahan['u_tujuan']=1;
    $pindahan['j_tujuan']=$mahasiswa['id_jurusan'];
    $pindahan['j_asal']=$old_jurusan;
    $pindahan['create_by']=$mahasiswa['create_by'];
    $this->db->insert('data_pindahan',$pindahan);
    $keluarga=$this->db->where('id_mahasiswa',$old_id)->get('data_keluarga')->result_array();
    if($keluarga != NULL){
        foreach($keluarga as $val){
            unset($val['id_keluarga']);
            $val['id_mahasiswa']=$mahasiswa['id_mahasiswa'];
            $val['create_by']=$mahasiswa['create_by'];
            $new_keluarga[]=$val;
        }
        if($new_keluarga != NULL){
            $this->db->insert_batch('data_keluarga',$new_keluarga);
        }
    }
}
function ubah_status($mahasiswa,$post){
    $id_mahasiswa=$mahasiswa['id_mahasiswa'];
    $status=$this->db->where('id_mahasiswa',$id_mahasiswa)->where('tahun',$post['tahun_aktif'])->where('semester',$post['semester_aktif'])->get('data_status_mahasiswa')->row_array();
    if($status != NULL){
        $this->db->where('id_statusmahasiswa',$status['id_statusmahasiswa'])->update('data_status_mahasiswa',array('id_status'=>$post['status'],'update_by'=>$post['up_by']));
    }else{
        $data['tahun']=$post['tahun_aktif'];
        $data['semester']=$post['semester_aktif'];
        $data['id_mahasiswa']=$id_mahasiswa;
        $data['id_status']=$post['status'];
        $data['update_by']=$post['up_by'];
        $this->db->insert('data_status_mahasiswa',$data);
     }
     $this->db->where('id_mahasiswa',$id_mahasiswa)->update('data_mahasiswa',array('last_status'=>$post['tahun_aktif'].$post['semester_aktif'].$post['status']));
    }
}
?>