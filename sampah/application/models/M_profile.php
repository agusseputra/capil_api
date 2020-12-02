<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_profile extends CI_Model
	{
		 function __construct()
		 {
			  // Call the Model constructor
			  parent::__construct();
		 }
   function get_profile($id){
    $this->db->select("data_dosen.id_dosen, data_dosen.nama as nama_dosen,ref_jurusan.nama_jurusan,data_mahasiswa.*");
    $this->db->from("(select * from data_mahasiswa where id_mahasiswa='$id') as data_mahasiswa");
    $this->db->join('ref_jurusan','ref_jurusan.id_jurusan=data_mahasiswa.id_jurusan');
    //$this->db->join('ref_agama','ref_agama.id_agama=data_mahasiswa.id_agama','left');
    $this->db->join('data_dosen','data_dosen.id_dosen=data_mahasiswa.id_pa','left');
   // $this->db->join('ref_kecamatan','ref_kecamatan.kode_kecamatan=data_mahasiswa.kode_kecamatan','left');
   // $this->db->join('ref_kabupaten','ref_kabupaten.kode_kabupaten=ref_kecamatan.kode_kabupaten','left');
  //  $this->db->join('ref_provinsi','ref_provinsi.kode_provinsi=ref_kabupaten.kode_provinsi','left');
   // $this->db->join('ref_sekolah','ref_sekolah.npsn=data_mahasiswa.npsn_sekolah','left');
    return $this->db->get()->row_array();
   }
   function get_sks($id,$th,$sm){
    $this->db->where('id_mahasiswa',$id)->where('semester',$sm)->where('tahun',$th);
    return $this->db->get('data_registrasi')->row_array();
   }
   function update_photo($id_user,$photo,$old){
    $this->db->where('id_mahasiswa',$id_user)->update('data_mahasiswa',array('foto'=>$photo));
    $file = ('././media/photo/' . $old);
    unlink($file);
   }
   function update_profile($id,$post){
        $data=array(
        'nama'=>$_POST['nama'],
        'jk'=>$_POST['jk'],
        'tmp_lahir'=>$_POST['tmp_lahir'],
        'tgl_lahir'=>$_POST['tgl_lahir'],
        'nisn'=>$_POST['nisn'],
        'nik'=>$_POST['nik'],
        'npsn_sekolah'=>$_POST['npsn_sekolah'],
        'id_agama'=>$_POST['id_agama'],
        'nama_gadis_ibu_kandung'=>$_POST['nama_gadis_ibu_kandung'],
        'hp'=>$_POST['hp'],
        'kode_provinsi'=>$_POST['kode_provinsi'],
        'kode_kabupaten'=>$_POST['kode_kabupaten'],
        'kode_kecamatan'=>$_POST['kode_kecamatan'],
        'alamat'=>$_POST['alamat'],
        'kewarganegaraan'=>$_POST['kewarganegaraan'],
        'id_alat_transportasi'=>$_POST['id_alat_transportasi'],
        'id_status_asuh'=>$_POST['id_status_asuh'],
        'wa'=>$_POST['wa'],
        'telp'=>$_POST['telp'],
        'kelurahan'=>$_POST['kelurahan'],
        'rt'=>$_POST['rt'],
        'rw'=>$_POST['rw'],
        'kode_pos'=>$_POST['kode_pos'],
        'alamat'=>$_POST['alamat'],
        'rt'=>$_POST['rt'],
        'rt'=>$_POST['rt'],
        'permalink'=>$_POST['permalink'],
        );
        if(isset($_POST['validasi'])){
            $data['validasi']=$_POST['validasi'];
        }
        if(isset($_POST['penerima_kps'])){
            $data['no_kps']=$_POST['no_kps'];
            $data['penerima_kps']=$_POST['penerima_kps'];
        }
        if($data!=NULL){
            $this->db->where('id_mahasiswa',$id);
            $this->db->update('data_mahasiswa',$data);
        }
   }
   function save_medis($id,$post){
   $exist=$this->db->where('id_mahasiswa',$id)->get('data_medis_mahasiswa')->row_array();
   $post['id_mahasiswa']=$id;
     if(isset($post['kebutuhan_khusus'])){
            foreach($post['kebutuhan_khusus'] as $val){ $kebutuhan_khusus[]=$val; }
            $post['kebutuhan_khusus']=json_encode($kebutuhan_khusus);
       }else{
        $post['kebutuhan_khusus']="";
       }
       if($exist != NULL){
            $this->db->where('id_mahasiswa',$exist['id_mahasiswa']);
            $this->db->update('data_medis_mahasiswa',$post);
       }else{
            $this->db->insert('data_medis_mahasiswa',$post);
       } 
   }
   function get_keluarga($id){
    $this->db->from("(select * from data_keluarga where id_mahasiswa=$id) as keluarga");
    $this->db->join("ref_hubungankeluarga","ref_hubungankeluarga.id_hubungankeluarga=keluarga.id_hubungankeluarga");
    $this->db->join("ref_pekerjaan","ref_pekerjaan.id_pekerjaan=keluarga.id_pekerjaan",'left');
    $this->db->join("ref_pendidikan","ref_pendidikan.id_pendidikan=keluarga.id_pendidikan","left");
    $this->db->join("ref_status","ref_status.kode_status=keluarga.status","left");
    return $this->db->get()->result_array();
   }
   function save_keluarga($post,$id_user,$id=NULL){
    $data=array(
        'nama'=>(isset($post['nama']))?$post['nama']:'',
        'nik'=>(isset($post['nik']))?$post['nik']:'',
        'tmp_lahir'=>(isset($post['tmp_lahir']))?$post['tmp_lahir']:'',
        'tgl_lahir'=>(isset($post['tgl_lahir']))?$post['tgl_lahir']:'',
        'id_pendidikan'=>(isset($post['id_pendidikan']))?$post['id_pendidikan']:'',
        'id_pekerjaan'=>(isset($post['id_pekerjaan']))?$post['id_pekerjaan']:'',
        'pendapatan'=>(isset($post['pendapatan']))?$post['pendapatan']:'',
        'hp'=>(isset($post['hp']))?$post['hp']:'',
        'kewarganegaraan'=>(isset($post['kewarganegaraan']))?$post['kewarganegaraan']:'',
        'kode_provinsi'=>(isset($post['kode_provinsi']))?$post['kode_provinsi']:'',
        'kode_kabupaten'=>(isset($post['kode_kabupaten']))?$post['kode_kabupaten']:'',
        'kode_kecamatan'=>(isset($post['kode_kecamatan']))?$post['kode_kecamatan']:'',
        'alamat'=>(isset($post['alamat']))?$post['alamat']:'',
        'status'=>(isset($post['status']))?$post['status']:'',
        'id_hubungankeluarga'=>(isset($post['id_hubungankeluarga']))?$post['id_hubungankeluarga']:'',
        'id_mahasiswa'=>$id_user        
    );
    if($id!=NULL){
        $this->db->where('id_keluarga',$id)->where('id_mahasiswa',$id_user);
        $this->db->update('data_keluarga',$data);
    }else{
        $this->db->insert('data_keluarga',$data);
    }
   }
   
   function get_prestasi($id_user){
    $this->db->select("prestasi.*,ref_kualifikasi_prestasi.nama as kualifikasi, ref_jenjang_prestasi.nama as jenjang_prestasi");
    $this->db->from("(select * from data_prestasi where id_mahasiswa=$id_user) as prestasi");
    $this->db->join("ref_kualifikasi_prestasi","ref_kualifikasi_prestasi.id_kualifikasi=prestasi.id_kualifikasi");
    $this->db->join("ref_jenjang_prestasi","ref_jenjang_prestasi.id_jenjang=prestasi.jenjang",'left');
   return $this->db->get()->result_array();
   }
   function save_prestasi($post,$id_user,$id=NULL){
    $data=array(
        'nama'=>(isset($post['nama']))?$post['nama']:'',
        'nama_eng'=>(isset($post['nama_eng']))?$post['nama_eng']:'',
        'tanggal'=>(isset($post['tanggal']))?$post['tanggal']:'',
        'capaian'=>(isset($post['capaian']))?$post['capaian']:'',
        'jenjang'=>(isset($post['jenjang']))?$post['jenjang']:'',
        'id_kualifikasi'=>(isset($post['id_kualifikasi']))?$post['id_kualifikasi']:'',
        'semester'=>(isset($post['semester']))?$post['semester']:'',
        'tahun'=>(isset($post['tahun']))?$post['tahun']:'',
        'tempat'=>(isset($post['tempat']))?$post['tempat']:'',
        'keterangan'=>(isset($post['keterangan']))?$post['keterangan']:'',
        'id_mahasiswa'=>$id_user        
    );
    if($id!=NULL){
        $this->db->where('id_prestasi',$id)->where('id_mahasiswa',$id_user);
        $this->db->update('data_prestasi',$data);
    }else{
        $this->db->insert('data_prestasi',$data);
    }
   }
}
?>