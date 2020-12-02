<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kemahasiswaan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_front');
        $this->load->model('M_kemahasiswaan','model');
         $this->load->model('m_referensi');
        if($this->fn->get_ss_kemahasiswaan()==NULL){
            redirect('login');
          }
    }
    function index(){
        $this->home();
    }
    function home(){
        $data=NULL;
        $this->template->kemahasiswaan('back/kemahasiswaan/beranda',$data); 
    }
    function data(){
       $data=NULL;
        if(isset($_GET['kemahasiswaan'])){
            
            if(isset($_GET['angkatan']) && $_GET['angkatan']!='all'){
            $this->db->where('tahun_masuk',$_GET['angkatan']);
            }
          
            if(isset($_GET['jurusan']) && $_GET['jurusan']!='all'){
            $this->db->where('id_jurusan',$_GET['jurusan']);
            }
            $this->db->where('left(last_status,4)',$_GET['tahun']);$this->db->where('substr(last_status,5,1)',$_GET['semester']);
            $data['mahasiswa']=$this->model->get_aktivitas_perkuliahan($_GET['jurusan'],$_GET['angkatan']);
            $data['ref_status']=$this->fn->ref_status();                    
        }
        $data['setting']=$this->fn->get_setting();
        $data['jurusan']=$this->model->get_jurusan($this->fn->get_ss_kemahasiswaan('id_fakultas'));
       $this->template->kemahasiswaan('back/kemahasiswaan/master_data',$data); 
    }
    function cari($permalink=NULL){
        $this->db->select('data_dosen.nama as nama_dosen, ref_kecamatan.kecamatan, ref_kabupaten.kabupaten, ref_provinsi.provinsi, ref_jurusan.nama_jurusan, data_mahasiswa.*, ref_agama.agama');
        $this->db->where('id_fakultas',$this->fn->get_ss_kemahasiswaan('id_fakultas'));
        $data['profile']=$this->m_front->get_profile($permalink);
        if($data['profile'] != NULL){
         $data['status']=$this->m_front->get_status($data['profile']['id_mahasiswa']);
         $data['tugas_akhir']=$this->m_front->get_tugas_akhir($data['profile']['id_mahasiswa']);
         $data['keluarga']=$this->m_front->get_keluarga($data['profile']['id_mahasiswa']);
         $data['pendidikan']=$this->m_front->get_riwayat_pendidikan($data['profile']['id_mahasiswa']);
         $this->load->view('back/kemahasiswaan/search_result',$data);
         }else{
            echo "data tidak ditemukan";
         }
    }
    function mahasiswa_non_status(){
        $setting=$this->fn->get_setting();
        $this->db->where('left(last_status,5) <',$setting['tahun_aktif'].$setting['semester_aktif']);
        $this->db->where("(right(last_status,1) <> 6 and right(last_status,1) <> 4 and right(last_status,1) <> 5 and right(last_status,1) <> 7)");
        $data['mahasiswa']=$this->model->get_mahasiswa($this->fn->get_ss_kemahasiswaan('id_fakultas'));
        if($data['mahasiswa'] != NULL){
            $this->load->view('back/kemahasiswaan/non_status',$data);
        }else{
            echo "data tidak ditemukan";
        }
    }
    function aktivasi(){
        $data['setting']=$this->fn->get_setting();
        $data['jurusan']=$this->model->get_jurusan($this->fn->get_ss_kemahasiswaan('id_fakultas'));
        $this->template->kemahasiswaan('back/kemahasiswaan/aktivasi_home',$data);
    }
    function cari_mahasiswa_aktivasi($permalink=null){
        $this->db->where('id_fakultas',$this->fn->get_ss_kemahasiswaan('id_fakultas'));
        $this->db->join('ref_jurusan','ref_jurusan.id_jurusan=data_mahasiswa.id_jurusan');
        $data['profile']=$this->m_referensi->get_referensi('data_mahasiswa','nim',$permalink);
        if($data['profile'] != NULL && $permalink!=null){
         $data['status']=$this->m_front->get_status($data['profile']['id_mahasiswa']);
         $this->load->view('back/kemahasiswaan/search_result_aktivasi',$data);
         }else{
            echo "data tidak ditemukan";
         }
    }
    function save_aktivasi(){
        $this->form_validation->set_rules('id', '', 'required', array('required' => 'Id Mahasiswa harap diisi.'));
        if ($this->form_validation->run() == FALSE) {
            $result['error'] = TRUE;
            $result['msg_header'] = 'Lengkapi Data';
            $result['msg_body'] = validation_errors();
          } else {
            $setting=$this->fn->get_setting();
            $this->db->where('id_fakultas',$this->fn->get_ss_kemahasiswaan('id_fakultas'));
          //  $this->db->where('left(last_status,5) !=',$setting['tahun_aktif'].$setting['semester_aktif']);
          //  $this->db->where("(right(last_status,1) <> 1 and right(last_status,1) <> 6 and right(last_status,1) <> 4 and right(last_status,1) <> 5 and right(last_status,1) <> 7)");
            $this->db->join('ref_jurusan','ref_jurusan.id_jurusan=data_mahasiswa.id_jurusan');
            $mahasiswa=$this->m_referensi->get_referensi('data_mahasiswa','md5(id_mahasiswa)',$_POST['id']);
            if($mahasiswa != NULL){
                $_POST['id']=$mahasiswa['id_mahasiswa'];
                $id_status=substr($mahasiswa['last_status'],-1);
                if((substr($mahasiswa['last_status'],0,5)<$setting['tahun_aktif'].$setting['semester_aktif']) && ($id_status <> 1 && $id_status <> 6 && $id_status <> 4 && $id_status <> 5 && $id_status <> 7) ){
                    $this->model->save_aktivasi($_POST['id'],$setting['tahun_aktif'],$setting['semester_aktif'],$this->fn->get_ss_kemahasiswaan('id_user'),$this->fn->get_ss_kemahasiswaan('id_user'));
                    $result['error'] = FALSE;
                    $result['msg_header'] = 'Sukses';
                    $result['msg_body'] = "Mahasiswa dengan NIM ".$mahasiswa['nim']. " tercatat dengan status ".$setting['tahun_aktif'].$setting['semester_aktif'].'1';
                    $result['redirect_ajax']=site_url('admin/kemahasiswaan/cari_mahasiswa_aktivasi/'.$mahasiswa['nim']);
                    $result['div']="#search_content";
                }else{
                    $result['error'] = TRUE;
                    $result['msg_header'] = 'Perhatian';
                    $result['msg_body'] = "Mahasiswa dengan NIM ".$mahasiswa['nim']. " tercatat dengan status ".$mahasiswa['last_status'];
                }
            }else{
                $result['error'] = TRUE;
                $result['msg_header'] = 'Perhatian';
                $result['msg_body'] = "Data mahasiswa tidak ditemukan ";
            }
        }
        echo json_encode($result);
    }
    function tampilkan_aktivasi(){
        $this->db->where('id_fakultas',$this->fn->get_ss_kemahasiswaan('id_fakultas'));
        $this->db->where('data_mahasiswa.id_jurusan',$_POST['jurusan']);
        $this->db->where('data_mahasiswa.last_status',$_POST['tahun_semester']);
        $this->db->like('nim', $_POST['nim']);
        $this->db->join('ref_jurusan','ref_jurusan.id_jurusan=data_mahasiswa.id_jurusan');
        $data['mahasiswa']=$this->m_referensi->get_referensi('data_mahasiswa');
        if($data['mahasiswa'] != NULL){
            $this->load->view('back/kemahasiswaan/non_status',$data);
         }else{
            echo "data tidak ditemukan";
         }
    }
    function update_biodata(){
        $data=null;
        if(isset($_GET['cari'])){
            $this->db->where('id_fakultas',$this->fn->get_ss_kemahasiswaan('id_fakultas'));
            $this->db->join('ref_jurusan','ref_jurusan.id_jurusan=data_mahasiswa.id_jurusan');
            $data['profile']=$this->m_referensi->get_referensi('data_mahasiswa','nim',$_GET['cari']);
        }
        if(isset($_GET['ajax'])){
            $this->load->view('back/kemahasiswaan/update_biodata_content',$data);
        }else{
            $this->template->kemahasiswaan('back/kemahasiswaan/update_biodata',$data); 
        }        
    }
    function save_update_nama($id){
        $this->form_validation->set_rules('nama', '', 'required', array('required' => 'Nama harap diisi.'));
        $this->form_validation->set_rules('tmp_lahir', '', 'required', array('required' => 'Tempat Lahir harap diisi.'));
        $this->form_validation->set_rules('tgl_lahir', '', 'required', array('required' => 'Tanggal lahir harap diisi.'));
        $this->form_validation->set_rules('jk', '', 'required', array('required' => 'Jenis Kelamin harap diisi.'));
        $this->form_validation->set_rules('nik', '', 'required', array('required' => 'NIK harap diisi.'));
        if ($this->form_validation->run() == FALSE) {
            $result['error'] = TRUE;
            $result['msg_header'] = 'Lengkapi Data';
            $result['msg_body'] = validation_errors();
           } else {
            $exits=$this->db->where('md5(id_mahasiswa)',$id)->get('data_mahasiswa')->row_array();
            if($exits != NULL){
                $this->model->save_update_nama($exits['id_mahasiswa'],$_POST,$this->fn->get_ss_kemahasiswaan('id_fakultas'));
                //$result['redirect_url']=site_url('admin/kemahasiswaan/update_biodata?cari='.$exits['nim']);
                $result['error'] = False;
                $result['msg_header'] = 'Sukses';
                $result['msg_body'] = "Data Telah Tersimpan";
                $result['redirect_ajax']=site_url('admin/kemahasiswaan/update_biodata?ajax&cari='.$exits['nim']);
                $result['div']="#search_content";
            }else{
                $result['error'] = TRUE;
                $result['msg_header'] = 'warning';
                $result['msg_body'] = "Data Tidak Ditemukan";
            }
            
        }
        echo json_encode($result);
    }
    function save_update_psw($id){
        $this->form_validation->set_rules('psw', '', 'required', array('required' => 'Password harap diisi.'));
        $this->form_validation->set_rules('psw2', '', 'required', array('required' => 'Re-Password harap diisi.'));
        if ($this->form_validation->run() == FALSE) {
            $result['error'] = TRUE;
            $result['msg_header'] = 'Lengkapi Data';
            $result['msg_body'] = validation_errors();
            $result['form_error'] = array('psw' => 'Password harap diisi','psw2' => 'Re-Password harap diisi');
          } else {
            if($_POST['psw']==$_POST['psw2']){
                $exits=$this->db->where('md5(id_user)',$id)->get('data_login')->row_array();
                if($exits != NULL){
                    $this->model->save_update_password($exits['id_user'],$_POST['psw']);
                   $result['error'] = False;
                    $result['msg_header'] = 'Sukses';
                    $result['msg_body'] = "Data Telah Tersimpan";
                }else{
                    $result['error'] = TRUE;
                    $result['msg_header'] = 'warning';
                    $result['msg_body'] = "Data Tidak Ditemukan";
                }
            }else{
                    $result['error'] = TRUE;
                    $result['msg_header'] = 'warning';
                    $result['msg_body'] = "Password tidak sama dengan Re-Password";
                    $result['form_error'] = array('psw2' => 'Re-Password harus sama dengan password harap diisi');
            }
            
        }
        echo json_encode($result);
    }
    function data_mahasiswa(){
        if(isset($_GET['jurusan'])){
        $this->db->select('data_mahasiswa.nim,data_mahasiswa.nama,data_mahasiswa.jk,data_mahasiswa.nisn,data_mahasiswa.tmp_lahir,data_mahasiswa.tgl_lahir,
        data_mahasiswa.alamat,data_mahasiswa.telp,data_mahasiswa.hp,data_mahasiswa.wa,data_mahasiswa.last_status,data_mahasiswa.tahun_masuk,data_mahasiswa.email,  ref_jurusan.nama_jurusan');        
        if(isset($_GET['prov']) && $_GET['prov']==1){
            $this->db->select('ref_provinsi.provinsi');
            $this->db->join('ref_provinsi','ref_provinsi.kode_provinsi=data_mahasiswa.kode_provinsi','left');
        }
        if(isset($_GET['kab']) && $_GET['kab']==1){
            $this->db->select('ref_kabupaten.kabupaten');
            $this->db->join('ref_kabupaten','ref_kabupaten.kode_kabupaten=data_mahasiswa.kode_kabupaten','left');
        }
        if(isset($_GET['kec']) && $_GET['kec']==1){
            $this->db->select('ref_kecamatan.kecamatan');
            $this->db->join('ref_kecamatan','ref_kecamatan.kode_kecamatan=data_mahasiswa.kode_kecamatan','left');
        }
        if(isset($_GET['jalur']) && $_GET['jalur']==1){
            $this->db->select('ref_jalur.jalur');
            $this->db->join('ref_jalur','ref_jalur.kode_jalur=data_mahasiswa.id_jalur','left');
        }
        if(isset($_GET['agama']) && $_GET['agama']==1){
            $this->db->select('ref_agama.agama');
            $this->db->join('ref_agama','ref_agama.id_agama=data_mahasiswa.id_agama','left');
        }
        if(isset($_GET['ayah']) && $_GET['ayah']==1){
            $this->db->select('data_ayah.nik as nik_ayah, data_ayah.nama as ayah, ref_pekerjaan.nama_pekerjaan as pekerjaan_ayah, data_ayah.pendapatan as pendapatan_ayah,');
            $this->db->join("(select * from data_keluarga where id_hubungankeluarga=1) as data_ayah", "data_ayah.id_mahasiswa=data_mahasiswa.id_mahasiswa");
            $this->db->join('ref_pekerjaan','ref_pekerjaan.id_pekerjaan=data_ayah.id_pekerjaan','left');
        }
        if(isset($_GET['ibu']) && $_GET['ibu']==1){
            $this->db->select('data_ibu.nik as nik_ibu, data_ibu.nama as ibu, ref_pekerjaan_ibu.nama_pekerjaan as pekerjaan_ibu, data_ibu.pendapatan as pendapatan_ibu');
            $this->db->join("(select * from data_keluarga where id_hubungankeluarga=2) as data_ibu", "data_ibu.id_mahasiswa=data_mahasiswa.id_mahasiswa");
            $this->db->join('ref_pekerjaan ref_pekerjaan_ibu','ref_pekerjaan_ibu.id_pekerjaan=data_ayah.id_pekerjaan','left');
        }
         if(isset($_GET['angkatan']) && $_GET['angkatan']!='all'){
            $this->db->where('data_mahasiswa.tahun_masuk',$_GET['angkatan']);
         }
        $this->db->where('data_mahasiswa.id_jurusan',$_GET['jurusan']);
        $this->db->where('id_fakultas',$this->fn->get_ss_kemahasiswaan('id_fakultas'));
        $this->db->join('ref_jurusan','ref_jurusan.id_jurusan=data_mahasiswa.id_jurusan');
        $data['mahasiswa']=$this->db->get('data_mahasiswa')->result_array();        
        }
        $data['jurusan']=$this->model->get_jurusan($this->fn->get_ss_kemahasiswaan('id_fakultas'));
        $this->template->kemahasiswaan('back/kemahasiswaan/cetak_data_mahasiswa',$data); 
    }
    function statistik_borang(){
        $data['title']='Data Mahasiswa Aktif pada setiap Semester berdasarkan Tahun Masuk';
        if(isset($_GET['jurusan'])){
            if(isset($_GET['cari'])){
                $data['borang']=$this->model->statistik_borang($_GET['jurusan'],'201711');
                $data['title']='Data Rasio Penerimaan mahasiswan Reguler dan Non Reguler';
            }else{
                $data['tahun']=(isset($_GET['tahun']))?$_GET['tahun']:2017;
                $data['borang2']=$this->model->statistik_borang2($_GET['jurusan'],$data['tahun']-7);
                
                
            }
        }
        $data['jurusan']=$this->model->get_jurusan($this->fn->get_ss_kemahasiswaan('id_fakultas'));
        $this->template->kemahasiswaan('back/kemahasiswaan/statistik_borang',$data); 
    }
    function kinerja(){
        $setting=$this->fn->get_setting();
        $tahun=$setting['tahun_aktif'];$semester=$setting['semester_aktif'];
        if(isset($_GET['tahun'])  ){
            if($_GET['tahun']!='all'){
                $tahun=$_GET['tahun'];
                $this->db->where('tahun ',$_GET['tahun']);               
            }
        }else{
            $this->db->where('tahun',$setting['tahun_aktif']);
        }
        if(isset($_GET['semester']) ){
            if($_GET['semester']!='all'){
            $semester=$_GET['semester'];
            $this->db->where('semester ',$_GET['semester']);
            }
        }else{
          $this->db->where('semester',$setting['semester_aktif']);
        }    
        $this->db->where("substr(nim,4,1)",$this->fn->get_ss_kemahasiswaan('id_fakultas'));
        $data['kinerja']=$this->model->get_kinerja();
        $data['jurusan']=$this->model->get_jurusan($this->fn->get_ss_kemahasiswaan('id_fakultas'));
        $this->db->order_by('id_skala','asc');
        $data['ref_skala']=$this->m_referensi->get_referensi('ref_skala_kinerja');
        $data['title']='Data Rekapitulasi Kinerja Dosen '.$tahun.'/'.$semester;
        $this->template->kemahasiswaan('back/kemahasiswaan/kinerja',$data); 
    }
function pindahan(){
     $data['setting']=$this->fn->get_setting();
     $this->db->select('data_mahasiswa.nim,data_mahasiswa.nama, data_mahasiswa.id_mahasiswa,ref_jurusan.nama_jurusan');
     $this->db->where('substr(nim,7,1) !=','1');
     $this->db->where('left(last_status,5)',$data['setting']['tahun_aktif'].$data['setting']['semester_aktif']);
     $this->db->where('id_fakultas',$this->fn->get_ss_kemahasiswaan('id_fakultas'));
     $this->db->join('ref_jurusan','ref_jurusan.id_jurusan=data_mahasiswa.id_jurusan');
     $data['mahasiswa']=$this->m_referensi->get_referensi('data_mahasiswa');
     $this->template->kemahasiswaan('back/kemahasiswaan/pindahan',$data);
}
function cari_mahasiswa_pindahan($permalink=null){
        $this->db->join('ref_jurusan','ref_jurusan.id_jurusan=data_mahasiswa.id_jurusan');
        $data['profile']=$this->m_referensi->get_referensi('data_mahasiswa','nim',$permalink);
        if($data['profile'] != NULL && $permalink!=null){
            $data['jurusan']=$this->model->get_jurusan($this->fn->get_ss_kemahasiswaan('id_fakultas'));
            $this->db->where('Keterangan','Subsidi');
            $data['ref_spp']=$this->m_referensi->get_referensi('ref_mastersppmahasiswa');
            $this->load->view('back/kemahasiswaan/search_result_pindahan',$data);
         }else{
            echo "data tidak ditemukan";
         }
    }
function cek_nim(){
    $this->form_validation->set_rules('nim', '', 'required', array('required' => 'NIM'));
    $this->form_validation->set_rules('jurusan', '', 'required', array('required' => 'Jurusan Harus Diisi'));
    $this->form_validation->set_rules('semester', '', 'required', array('required' => 'Semester Masuk Harus Diisi'));
    $this->form_validation->set_rules('pindahan', '', 'required', array('required' => 'Jenis Pindahan Harus Diisi'));
    if ($this->form_validation->run() == FALSE) {
        $result['error'] = TRUE;
        $result['msg_header'] = 'Lengkapi Data';
        $result['msg_body'] = validation_errors();
    } else { 
        $result['error'] = TRUE;
        $result['msg_header'] = 'warning';
        $mahasiswa=$this->db->where('nim',$_POST['nim'])->get('data_mahasiswa')->row_array();
        if($mahasiswa != NULL){
            if($_POST['pindahan']=='pindah' && (substr($mahasiswa['last_status'],-1)==1 || substr($mahasiswa['last_status'],-1)==2 )){
                $lanjut='pindah';  
            }else if($_POST['pindahan']=='kredit' && substr($mahasiswa['last_status'],-1)==6){
                 $lanjut='kredit';  
                 $mahasiswa['id_jalur']='05';
                 $mahasiswa['id_jenis_mahasiswa']='06';
            }
            if(isset($lanjut)){
            $jurusan=$this->m_referensi->get_referensi('ref_jurusan','id_jurusan',$_POST['jurusan']);
            if($jurusan != NULL){
                $setting=$this->fn->get_setting();
                $this->db->where('Id_Jurusan',$jurusan['kode_jurusan'])->where('ThnMasuk',$setting['tahun_aktif'])->where('SemMasuk',$_POST['semester']);
                $ukt=$this->m_referensi->get_referensi('sppmahasiswa','Kode_SPPMahasiswa',$_POST['ukt']);
                if($ukt==NULL){
                    $this->db->where('Id_Jurusan',$jurusan['kode_jurusan'])->where('ThnMasuk',$setting['tahun_aktif']);
                    $ukt=$this->m_referensi->get_referensi('sppmahasiswa','Kode_SPPMahasiswa',$_POST['ukt']);
                }
                if($ukt != NULL){
                    $id_spp=$ukt['Id_SPPMahasiswa'];
                    if($jurusan['id_strata']==5){
                        $nim=substr($setting['tahun_aktif'],-2).'1'.substr($jurusan['kode_jurusan'],1,1).$jurusan['code_jurusan'].$_POST['semester'];
                    }else if($jurusan['id_strata']==3){
                        $nim=substr($setting['tahun_aktif'],-2).'0'.substr($jurusan['kode_jurusan'],1,1).$jurusan['code_jurusan'].$_POST['semester'];
                    }else{
                        $nim="";
                    }
                    $query="SELECT RIGHT(nim,3) as lastnim FROM data_mahasiswa	WHERE LEFT(nim,7)='".$nim."' ORDER BY RIGHT(nim,3) DESC LIMIT 0 , 1";
                    $lastnim=$this->db->query($query)->row_array();
                    if($lastnim != NULL){
                        $new_nim=$nim.sprintf("%03s",($lastnim['lastnim'] + 1));
                    }else{
                        $new_nim=$nim.'001';
                    }
                    $result['error'] = FALSE;
                    $result['msg_body'] ="NIM = ".$new_nim.", UKT = ".$ukt['SPP'];
                    if(isset($_GET['exc'])){
                        $old_id=$mahasiswa['id_mahasiswa'];
                        $old_jurusan=$mahasiswa['id_jurusan'];
                        $mahasiswa['tahun_masuk']=$setting['tahun_aktif'];
                        $mahasiswa['last_status']='';
                        $mahasiswa['permalink']=$new_nim;
                        $mahasiswa['penerima_bidikmisi']='';
                        $mahasiswa['id_spp']=$id_spp;
                        $mahasiswa['id_mahasiswa']=$new_nim;
                        $mahasiswa['nim']=$new_nim;
                        $mahasiswa['id_jurusan']=$jurusan['id_jurusan'];
                        $mahasiswa['create_by']=$this->fn->get_ss_kemahasiswaan('id_user');
                        $mahasiswa['id_pa']='';
                        $this->model->save_pindahan($mahasiswa,$old_id,$old_jurusan);
                        if(isset($_POST['aktivasi']) && $_POST['aktivasi']==1){
                            $this->model->save_aktivasi($mahasiswa['id_mahasiswa'],$setting['tahun_aktif'],$setting['semester_aktif'],$this->fn->get_ss_kemahasiswaan('id_user'),$this->fn->get_ss_kemahasiswaan('id_user'));
                        }
                        $result['msg_body'] ="NIM = ".$new_nim.", UKT = ".$ukt['SPP'].". Berhasil disimpan";
                        $result['tr'] ="<tr><td><a href='".site_url('admin/kemahasiswaan/data?cari='.$mahasiswa['id_mahasiswa'])."' >".$mahasiswa['nim']."</a></td><td>".$mahasiswa['nama']."</td><td>".$jurusan['nama_jurusan']."</td></tr>";
                        //$result['redirect_url']=site_url('admin/kemahasiswaan/data?cari='.$mahasiswa['nim']);
                    }                   
                }else{
                        $result['msg_body'] = "UKT untuk jurusan ".$jurusan['nama_jurusan']." ditahun ".$setting['tahun_aktif']." ditemukan";
                }
            }else{
                $result['msg_body'] = "Jurusan tidak ditemukan";
            }
            }else{
                $result['msg_body'] = "Mahasiswa dengan nim ".$mahasiswa['nim']." tidak bisa diproses, mohon dicek kembali";
            }
        }else{
            $result['msg_body'] = "Mahasiswa tidak ditemukan";
        }
    }
    echo json_encode($result);
}
    public function autocomplete_mhs(){
		$keyword = $this->uri->segment(4);
		$arr = array();		
		$data = $this->db->select('nama,nim')->where("nim like '%$keyword%' or nama like '%$keyword%'")->group_by('nim')->order_by('nim')->limit(10)->get('data_mahasiswa');
		// format keluaran di dalam array
		foreach($data->result() as $row)
		{
			$arr['query'] = $keyword;
			$arr['suggestions'][] = array(
				'value'	=>$row->nim.' '.$row->nama,
                'id'	=>$row->nim,
			);
		}	
		echo json_encode($arr);
	}
    function cari_status($nim){
        $setting=$this->fn->get_setting();
        $th=$setting['tahun_aktif'];
        $sm=$setting['semester_aktif'];
        $this->db->select('nama,nim,last_status,nama_jurusan,id_mahasiswa');
        $this->db->where('id_fakultas',$this->fn->get_ss_kemahasiswaan('id_fakultas'));
        $this->db->join('ref_jurusan','ref_jurusan.id_jurusan=data_mahasiswa.id_jurusan');
        $data['mahasiswa']=$this->m_referensi->get_referensi('data_mahasiswa','nim',$nim);
        if($data['mahasiswa'] != NULL){
        $data['ref_status']=array_transform($this->m_referensi->get_referensi('ref_status_mahasiswa'),'id_status');
        $data['setting']=$setting;
        $data['status']=$this->m_front->get_status($data['mahasiswa']['id_mahasiswa']);
        $this->load->view('back/kemahasiswaan/cari_status',$data);
        }
    }
    function ubah_status(){
        $result['error'] = TRUE;
        $result['msg_header'] = 'Lengkapi Data';
        $this->form_validation->set_rules('status', '', 'required', array('required' => 'Status Mahasiswa Harus Diisi'));
    if ($this->form_validation->run() == FALSE) {
        $result['msg_body'] = validation_errors();
    } else { 
        $status=$this->m_referensi->get_referensi('ref_status_mahasiswa');
        if($status==NULL){exit();}
        $arr_status=NULL;
        foreach($status as $val){
            $arr_status[]=$val['id_status'];
        }
        if(in_array($_POST['status'],$arr_status)){
        $this->db->select('id_mahasiswa,last_status,nim');
        $mahasiswa=$this->m_referensi->get_referensi('data_mahasiswa','md5(id_mahasiswa)',$_POST['id']);
        if($mahasiswa != NULL){
            $setting=$this->fn->get_setting();
            if($setting['tahun_aktif'].$setting['semester_aktif'] != substr($mahasiswa['last_status'],0,5) && substr($mahasiswa['last_status'],-1)>=4){
                $stop=1;
            }
            if(isset($stop)){
                $result['msg_header'] = 'PERHATIAN ';
                $result['msg_body'] = "Status Mahasiswa Tidak Bisa Dirubah";
            }else{
                $_POST['tahun_aktif']=$setting['tahun_aktif'];
                $_POST['semester_aktif']=$setting['semester_aktif'];
                $_POST['up_by']=$this->fn->get_ss_kemahasiswaan('id_user');
                $this->model->ubah_status($mahasiswa,$_POST);
                $result['error'] = FALSE;
                $result['msg_body'] = "Data Tersimpan";
                $result['msg_header'] = 'Sukses';
                $result['redirect_ajax']=site_url('admin/kemahasiswaan/cari_status/'.$mahasiswa['nim']);
                $result['div']="#ubah_status_content";
            }
        }else{
            $result['msg_body'] = "Mahasiswa tidak ditemukan";
        }
        }else{
            $result['msg_body'] = "Status tidak benar";
        }
        }
      echo json_encode($result);  
    }
}?>