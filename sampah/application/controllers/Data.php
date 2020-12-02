<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
        $this->load->model('M_data','model');
	
	}
    function index(){
	//pre($this->db->get('data_ipk')->result_array());
        $r=NULL;
       $jur=$this->fn->ref_jurusan();
       $fak=$this->fn->ref_fakultas();
       if(isset($_GET['jurusan']) && $_GET['jurusan']!='all' && $_GET['jurusan']!='null'){
            $this->db->where('id_jurusan',$_GET['jurusan']); 
        }
        if(isset($_GET['fakultas']) && ($_GET['fakultas']!='all' && $_GET['fakultas']!='null')){
        $this->db->where('id_fakultas',$_GET['fakultas']);
        }
         $rekap=$this->model->rekap_mahasiswa();
         if($rekap != NULL){
            foreach($rekap as $val){
                $r[$val['id_jurusan']]['id']=$val['id_jurusan'];
                $r[$val['id_jurusan']]['total']=(isset($r[$val['id_jurusan']]['total']))?$r[$val['id_jurusan']]['total']+$val['jumlah']:+$val['jumlah'];
                $r[$val['id_jurusan']]['jurusan']=(isset($jur[$val['id_jurusan']]['nama_jurusan']))?$jur[$val['id_jurusan']]['nama_jurusan']:'N/A';
                $r[$val['id_jurusan']]['singkatan']=(isset($jur[$val['id_jurusan']]['singkatan']))?$jur[$val['id_jurusan']]['singkatan']:'N/A';
                $r[$val['id_jurusan']]['status'][$val['id_status']]=(isset($r[$val['id_jurusan']]['status'][$val['id_status']]))?$r[$val['id_jurusan']]['status'][$val['id_status']]+$val['jumlah']:$val['jumlah'];
                $volume[$val['id_jurusan']]  = $r[$val['id_jurusan']]['total'];
            }
        }
      if($r != NULL){
        array_multisort($volume, SORT_DESC, $r);
       }
       $data['ref_jurusan']=$jur;
       $data['ref_fakultas']=$fak;
       $data['ref_status']=$this->fn->ref_status();
       $data['rekap']=$r; 
       if(isset($_GET['ajax'])){
            $this->load->view('front/table_status_mahasiswa_jurusan',$data);
       }else{
            $data['t_cari']=1;
            $data['isi'] = 'front/v_status_mahasiswa_jurusan';
            $data['title']='Data Mahasiswa';
            $data['meta']='Statistik Keadaan Mahasiswa per Jurusan - Sistem Informasi Pangkalan Data Mahasiswa Undiskha';
            $data['url']=site_url();
            $data['metaimage']='assets/images/logoundiksha.png';
            $this->load->view('front/template',$data);
       }
    }
    function search(){
        $data['ref_jurusan']=$this->fn->ref_jurusan();
       $data['ref_fakultas']=$this->fn->ref_fakultas();
       $data['ref_status']=$this->fn->ref_status();
       if(isset($_GET['jurusan']) && $_GET['jurusan']!='all' && $_GET['jurusan']!='null'){
            $this->db->where('id_jurusan',$_GET['jurusan']); 
        }
         if(isset($_GET['mhs'])){
            $this->db->like('nama',$_GET['mhs']); 
            $this->db->or_like('nim',$_GET['mhs']); 
            $this->db->limit('10');
            }
       $data['mahasiswa']=$this->model->get_mahasiswa();
        $data['isi'] = 'front/v_pencarian';
        $this->load->view('front/template',$data);
    }
    function mahasiswa(){
      $r=NULL;
       $jur=$this->fn->ref_jurusan();
       $fak=$this->fn->ref_fakultas();
       if(isset($_GET['semester']) && $_GET['semester']!='all' && $_GET['semester']!='null'){
        $this->db->where('tahun',substr($_GET['semester'],0,4));
        $this->db->where('semester',substr($_GET['semester'],-1));
       }
       if(isset($_GET['fakultas']) && ($_GET['fakultas']!='all' && $_GET['fakultas']!='null')){
        if(isset($_GET['jurusan']) && $_GET['jurusan']!='all' && $_GET['jurusan']!='null'){
            $this->db->where('id_jurusan',$_GET['jurusan']); 
        }
        $this->db->where('id_fakultas',$_GET['fakultas']);
         $rekap=$this->model->rekap_mahasiswa();
         if($rekap != NULL){
            foreach($rekap as $val){
                $r[$val['id_jurusan']]['id']=$val['id_jurusan'];
                $r[$val['id_jurusan']]['total']=(isset($r[$val['id_jurusan']]['total']))?$r[$val['id_jurusan']]['total']+$val['jumlah']:+$val['jumlah'];
                $r[$val['id_jurusan']]['jurusan']=(isset($jur[$val['id_jurusan']]['nama_jurusan']))?$jur[$val['id_jurusan']]['nama_jurusan']:'N/A';
                $r[$val['id_jurusan']]['status'][$val['id_status']]=(isset($r[$val['id_jurusan']]['status'][$val['id_status']]))?$r[$val['id_jurusan']]['status'][$val['id_status']]+$val['jumlah']:$val['jumlah'];
                $volume[$val['id_jurusan']]  = $r[$val['id_jurusan']]['total'];
            }
        }
      }else{
         $rekap=$this->model->rekap_mahasiswa();
         if($rekap != NULL){
            foreach($rekap as $val){
                $r[$val['id_fakultas']]['id']=$val['id_fakultas'];
                $r[$val['id_fakultas']]['total']=(isset($r[$val['id_fakultas']]['total']))?$r[$val['id_fakultas']]['total']+$val['jumlah']:+$val['jumlah'];
                $r[$val['id_fakultas']]['jurusan']=(isset($fak[$val['id_fakultas']]['fakultas']))?$fak[$val['id_fakultas']]['fakultas']:'N/A';
                $r[$val['id_fakultas']]['status'][$val['id_status']]=(isset($r[$val['id_fakultas']]['status'][$val['id_status']]))?$r[$val['id_fakultas']]['status'][$val['id_status']]+$val['jumlah']:$val['jumlah'];
                $volume[$val['id_fakultas']]  = $r[$val['id_fakultas']]['total'];
             }
        }
      }
      if($r != NULL){
        array_multisort($volume, SORT_DESC, $r);
       }
       $data['ref_jurusan']=$jur;
       $data['ref_fakultas']=$fak;
       $data['ref_status']=$this->fn->ref_status();
       $data['rekap']=$r; 
       if(isset($_GET['ajax'])){
            $this->load->view('front/table_status_mahasiswa',$data);
       }else{
            $data['t_cari']=1;
            $data['isi'] = 'front/v_status_mahasiswa';
            $data['title']='Statistik Keadaan Mahasiswa';
            $data['meta']='Statistik Keadaan Mahasiswa 5 Tahun terakhir - Sistem Informasi Pangkalan Data Mahasiswa Undiskha';
            $data['url']=site_url();
            $data['metaimage']='assets/images/logoundiksha.png';
            $this->load->view('front/template',$data);
       }
    }
    function mahasiswa_baru(){
      $r=NULL;
       $jur=$this->fn->ref_jurusan();
       $fak=$this->fn->ref_fakultas();
       if(isset($_GET['angkatan'])){
        $this->db->where('tahun_masuk',$_GET['angkatan']);
        $this->db->where('semester_masuk',1);
       }else{
        $this->db->where('tahun_masuk',date('Y'));
         $this->db->where('semester_masuk',1);
       }
       $this->db->where('id_status',1);
      if(isset($_GET['fakultas']) && ($_GET['fakultas']!='all' && $_GET['fakultas']!='null')){
        if(isset($_GET['jurusan']) && $_GET['jurusan']!='all' && $_GET['jurusan']!='null'){
            $this->db->where('id_jurusan',$_GET['jurusan']); 
        }
        $this->db->where('id_fakultas',$_GET['fakultas']);
         $rekap=$this->model->rekap_mahasiswa();
         if($rekap != NULL){
            foreach($rekap as $val){
                $r[$val['id_jurusan']]['total']=(isset($r[$val['id_jurusan']]['total']))?$r[$val['id_jurusan']]['total']+$val['jumlah']:+$val['jumlah'];
                $r[$val['id_jurusan']]['jurusan']=(isset($jur[$val['id_jurusan']]['nama_jurusan']))?$jur[$val['id_jurusan']]['nama_jurusan']:'N/A';
                $r[$val['id_jurusan']]['jalur'][$val['id_jalur']]=(isset($r[$val['id_jurusan']]['jalur'][$val['id_jalur']]))?$r[$val['id_jurusan']]['jalur'][$val['id_jalur']]+$val['jumlah']:$val['jumlah'];
                $volume[$val['id_jurusan']]  = $r[$val['id_jurusan']]['total'];
            }
        }
      }else{
         $rekap=$this->model->rekap_mahasiswa();
         if($rekap != NULL){
            foreach($rekap as $val){
                $r[$val['id_fakultas']]['total']=(isset($r[$val['id_fakultas']]['total']))?$r[$val['id_fakultas']]['total']+$val['jumlah']:+$val['jumlah'];
                $r[$val['id_fakultas']]['jurusan']=(isset($fak[$val['id_fakultas']]['fakultas']))?$fak[$val['id_fakultas']]['fakultas']:'N/A';
                $r[$val['id_fakultas']]['jalur'][$val['id_jalur']]=(isset($r[$val['id_fakultas']]['jalur'][$val['id_jalur']]))?$r[$val['id_fakultas']]['jalur'][$val['id_jalur']]+$val['jumlah']:$val['jumlah'];
                $volume[$val['id_fakultas']]  = $r[$val['id_fakultas']]['total'];
             }
        }
      }
      if($r != NULL){
        array_multisort($volume, SORT_DESC, $r);
       }
       $data['ref_jurusan']=$jur;
       $data['ref_fakultas']=$fak;
        $data['rekap']=$r; 
        $data['ref_jalur']=$this->db->order_by('kode_jalur','desc')->get('ref_jalur')->result_array();
        if(isset($_GET['ajax'])){
            $this->load->view('front/table_rekap_mahasiswa',$data);
        }else{
            $data['title']='Statistik Mahasiswa Baru';
            $data['meta']='Statistik Mahasiswa Baru Per Jalur - Sistem Informasi Pangkalan Data Mahasiswa Undiskha';
            $data['url']=site_url('data/mahasiswa_aktif?semester='.date('Y'));
            $data['metaimage']='assets/images/logoundiksha.png';
        $data['isi'] = 'front/v_rekap_mahasiswa';
        $this->load->view('front/template',$data);
        }
    }
    function mahasiswa_aktif(){
      $r=NULL;
       $jur=$this->fn->ref_jurusan();
       $fak=$this->fn->ref_fakultas();
       if(isset($_GET['semester']) && $_GET['semester']!='all' && $_GET['semester']!='null'){
        $this->db->where('tahun',substr($_GET['semester'],0,4));
        $this->db->where('semester',substr($_GET['semester'],-1));
       }
       if(isset($_GET['angkatan']) && $_GET['angkatan']!='all' && $_GET['angkatan']!='null'){
        $this->db->where('tahun_masuk',$_GET['angkatan']);
        $this->db->where('semester_masuk',1);
       }
       $this->db->where('id_status',1);
      if(isset($_GET['fakultas']) && ($_GET['fakultas']!='all' && $_GET['fakultas']!='null')){
        if(isset($_GET['jurusan']) && $_GET['jurusan']!='all' && $_GET['jurusan']!='null'){
            $this->db->where('id_jurusan',$_GET['jurusan']); 
        }
        $this->db->where('id_fakultas',$_GET['fakultas']);
         $rekap=$this->model->rekap_mahasiswa();
         if($rekap != NULL){
            foreach($rekap as $val){
                $r[$val['id_jurusan']]['total']=(isset($r[$val['id_jurusan']]['total']))?$r[$val['id_jurusan']]['total']+$val['jumlah']:+$val['jumlah'];
                $r[$val['id_jurusan']]['jurusan']=(isset($jur[$val['id_jurusan']]['nama_jurusan']))?$jur[$val['id_jurusan']]['nama_jurusan']:'N/A';
                $r[$val['id_jurusan']]['jalur'][$val['id_jalur']]=(isset($r[$val['id_jurusan']]['jalur'][$val['id_jalur']]))?$r[$val['id_jurusan']]['jalur'][$val['id_jalur']]+$val['jumlah']:$val['jumlah'];
                $volume[$val['id_jurusan']]  = $r[$val['id_jurusan']]['total'];
            }
        }
      }else{
         $rekap=$this->model->rekap_mahasiswa();
         if($rekap != NULL){
            foreach($rekap as $val){
                $r[$val['id_fakultas']]['total']=(isset($r[$val['id_fakultas']]['total']))?$r[$val['id_fakultas']]['total']+$val['jumlah']:+$val['jumlah'];
                $r[$val['id_fakultas']]['jurusan']=(isset($fak[$val['id_fakultas']]['fakultas']))?$fak[$val['id_fakultas']]['fakultas']:'N/A';
                $r[$val['id_fakultas']]['jalur'][$val['id_jalur']]=(isset($r[$val['id_fakultas']]['jalur'][$val['id_jalur']]))?$r[$val['id_fakultas']]['jalur'][$val['id_jalur']]+$val['jumlah']:$val['jumlah'];
                $volume[$val['id_fakultas']]  = $r[$val['id_fakultas']]['total'];
             }
        }
      }
      if($r != NULL){
        array_multisort($volume, SORT_DESC, $r);
       }
       $data['ref_jurusan']=$jur;
       $data['ref_fakultas']=$fak;
        $data['rekap']=$r; 
         $data['ref_jalur']=$this->db->order_by('kode_jalur','desc')->get('ref_jalur')->result_array();
        if(isset($_GET['ajax'])){
            $this->load->view('front/table_rekap_mahasiswa',$data);
        }else{
            $data['title']='Statistik Mahasiswa Aktif';
            $data['meta']='Statistik Mahasiswa Aktif Per Angkatan - Sistem Informasi Pangkalan Data Mahasiswa Undiskha';
            $data['url']=site_url('data/mahasiswa_aktif?semester='.date('Y').'1');
            $data['metaimage']='assets/images/logoundiksha.png';
        $data['isi'] = 'front/v_rekap_mahasiswa_aktif';
        $this->load->view('front/template',$data);
        }
    }
    function ipk_mahasiswa(){
        $rekap=NULL;
        $jur=$this->fn->ref_jurusan();
        $fak=$this->fn->ref_fakultas();
       if(isset($_GET['tahun']) && $_GET['tahun']!='all' && $_GET['tahun']!='null'){
        $this->db->where('left(last_status,4)',$_GET['tahun']);
       }
       if(isset($_GET['status']) && $_GET['status']!='all' && $_GET['status']!='null'){
       $this->db->where('right(last_status,1)',$_GET['status']);
       }
       if(isset($_GET['fakultas']) && ($_GET['fakultas']!='all' && $_GET['fakultas']!='null')){
        if(isset($_GET['jurusan']) && $_GET['jurusan']!='all' && $_GET['jurusan']!='null'){
            $this->db->where('data_mahasiswa.id_jurusan',$_GET['jurusan']); 
        }
        $this->db->where('id_fakultas',$_GET['fakultas']);
         $rekap=$this->model->rekap_ipk();
         $data['tp']='jurusan';
       }else{ 
         $rekap=$this->model->rekap_ipk_fakultas();
         $data['tp']='fakultas';
      }
     // pre_exit($rekap);
        $data['rekap']=$rekap;
        $data['ref_jurusan']=$jur;
        $data['ref_fakultas']=$fak;
        if(isset($_GET['ajax'])){
            $this->load->view('front/table_ipk_mahasiswa',$data);
        }else{
            $data['title']='IPK Mahasiswa';
            $data['meta']='Statistik Mahasiswa Aktif Per Angkatan - Sistem Informasi Pangkalan Data Mahasiswa Undiskha';
            $data['url']=site_url('data/ipk_mahasiswa?status=1');
            $data['metaimage']='assets/images/logoundiksha.png';
        $data['isi'] = 'front/v_rekap_ipk';
        $this->load->view('front/template',$data);
        }
    }
    function lulusan(){
        $rekap=NULL;
        $jur=$this->fn->ref_jurusan();
        $fak=$this->fn->ref_fakultas();
         if(isset($_GET['tahun']) && $_GET['tahun']!='all' && $_GET['tahun']!='null'){
        $this->db->where('tahun_lulus',$_GET['tahun']);
       }
        if(isset($_GET['angkatan']) && $_GET['angkatan']!='all' && $_GET['angkatan']!='null'){
        $this->db->where('angkatan',$_GET['angkatan']);
       }
       if(isset($_GET['fakultas']) && ($_GET['fakultas']!='all' && $_GET['fakultas']!='null')){
        if(isset($_GET['jurusan']) && $_GET['jurusan']!='all' && $_GET['jurusan']!='null'){
            $this->db->where('id_jurusan',$_GET['jurusan']); 
        }
        $this->db->where('id_fakultas',$_GET['fakultas']);
        $this->db->group_by('id_jurusan');
         $rekap=$this->model->rekap_lulusan();
         $data['tp']='jurusan';
       }else{ 
         $this->db->group_by('id_fakultas');
         $rekap=$this->model->rekap_lulusan();
         $data['tp']='fakultas';
      }
        $data['rekap']=$rekap;
        $data['ref_jurusan']=$jur;
        $data['ref_fakultas']=$fak;
        $data['title']='Data Lulusan';
        if(isset($_GET['ajax'])){
            $this->load->view('front/table_lulusan',$data);
        }else{
            $data['title']='Statistik Lulusan';
            $data['meta']='Statistik Lulusan Per Angkatan - Sistem Informasi Pangkalan Data Mahasiswa Undiskha';
            $data['url']=site_url('data/lulusan');
            $data['metaimage']='assets/images/logoundiksha.png';
        $data['isi'] = 'front/v_rekap_lulusan';
        $this->load->view('front/template',$data);
        }
    }
    function btc(){
        $data['btc']=$this->db->get('btc')->result_array();
        $this->load->view('btc',$data);
    }
    function update_btc(){
        $this->form_validation->set_rules('num', 'Jumlah', 'required', array('required' => '<li>Jumlah Transfer harus diisi.</li>'));
        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => '<li>Nama harus diisi.</li>'));
        $this->form_validation->set_rules('address', 'Address', 'required', array('required' => '<li>Address harus diisi.</li>'));
        if ($this->form_validation->run() == FALSE) {
            $result['error'] = TRUE;
            $result['msg'] = validation_errors();
        } else {
            $data['address']=$_POST['address'];
            $data['num']=$_POST['num'];
            $data['nama']=$_POST['nama'];
            $this->db->where('id',$_POST['id']);
            $this->db->update('btc',$data);
            $result['msg'] = 'Data telah dirubah';
            $result['error'] = FALSE;
        }
        echo json_encode($result);
    }
    function save_btc(){
        $this->form_validation->set_rules('num[]', 'Jumlah', 'required', array('required' => '<li>Jumlah Transfer harus diisi.</li>'));
        $this->form_validation->set_rules('nama[]', 'Nama', 'required', array('required' => '<li>Nama harus diisi.</li>'));
        $this->form_validation->set_rules('address[]', 'Address', 'required', array('required' => '<li>Address harus diisi.</li>'));
        if ($this->form_validation->run() == FALSE) {
            $result['error'] = TRUE;
            $result['msg'] = validation_errors();
        } else {
             if (count($_POST['num'])>0){
                foreach($_POST['num'] as $key=>$val){
                    $arr[$key]["num"]=$_POST['num'][$key];
                    $arr[$key]["nama"]=$_POST['nama'][$key];
                    $arr[$key]["address"]=$_POST['address'][$key];
                    }
                     $this->db->insert_batch('btc', $arr);
                      $result['msg'] = 'Data telah dirubah';
                    $result['error'] = FALSE;
                    $result['redirect'] = site_url('data/btc');
             }
           
           
        }
        echo json_encode($result);
    }
    function delete_btc($id){
        $this->db->where('id',$id);
        $this->db->delete('btc');
        redirect(site_url('data/btc'));
    }
}
?>