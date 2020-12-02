<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
         $this->load->model('M_profile','model');
         $this->load->model('m_front');
          $this->load->model('m_referensi');
          if($this->fn->get_ss_mahasiswa()==NULL){
            redirect('login');
          }
   	}
    function index(){
        $data['profile']=$this->model->get_profile($this->fn->get_ss_mahasiswa('id_user'));
          if($data['profile'] !=NULL){
            $data['title']='Biodata';
            $data['ref_agama']=$this->m_referensi->get_referensi('ref_agama');
            $data['ref_provinsi']=$this->m_referensi->get_referensi('ref_provinsi');
            $data['ref_kabupaten']=$this->m_referensi->get_referensi('ref_kabupaten');
            $data['ref_kecamatan']=$this->m_referensi->get_referensi('ref_kecamatan');
            $data['ref_sekolah']=$this->m_referensi->get_referensi('ref_sekolah');
            $data['ref_alat_transportasi']=$this->m_referensi->get_referensi('ref_alat_transportasi');
            $data['ref_status_asuh']=$this->m_referensi->get_referensi('ref_status_asuh');
            $data['sks']=$this->model->get_sks($data['profile']['id_mahasiswa'],substr($data['profile']['last_status'],0,4),substr($data['profile']['last_status'],4,1));
            $data['ref_status']=$this->m_referensi->get_referensi('ref_status_mahasiswa','id_status',substr($data['profile']['last_status'],-1));
         //   $data['jurusan']=$this->m_referensi->get_referensi('ref_jurusan','id_jurusan',$data['profile']['id_jurusan']);
            $data['medis']=$this->m_referensi->get_referensi('data_medis_mahasiswa','id_mahasiswa',$data['profile']['id_mahasiswa']);
            $data['ref_kebutuhan_khusus']=$this->m_referensi->get_referensi('ref_kebutuhan_khusus');
        }
       $this->template->mahasiswa('back/v_profile',$data);
    }
    function update_profile(){
        $this->form_validation->set_rules('validasi', '', 'required', array('required' => 'Mohon centang validasi data.'));
       $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required', array('required' => 'Nama Harus diisi.'));
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required', array('required' => 'Jenis Kelamin harap diisi.'));
        $this->form_validation->set_rules('tmp_lahir', 'Tempat Lahir', 'required', array('required' => 'Tempat Lahir harap diisi.'));
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', array('required' => 'Tanggal Lahir Harap diisi.'));
        $this->form_validation->set_rules('nisn', 'NISN', 'required', array('numeric' => 'NISN harap diisi.'));
        $this->form_validation->set_rules('nik', 'NIK', 'required', array('numeric' => 'NIK harap diisi.'));
        $this->form_validation->set_rules('npsn_sekolah', 'NPSN Sekolah', 'required', array('required' => 'NPSN Harap diisi.'));
        $this->form_validation->set_rules('id_agama', 'Agama', 'required', array('required' => 'Agama Harus Diisi.'));
        $this->form_validation->set_rules('nama_gadis_ibu_kandung', 'Nama Ibu Kandung', 'required', array('required' => 'Nama Ibu Kandung Harap diisi.'));
        $this->form_validation->set_rules('hp', 'Nomor HP', 'required', array('required' => 'Nomor Hp Hraap diisi.'));
        $this->form_validation->set_rules('kode_provinsi', 'Provinsi', 'required', array('required' => 'Provinsi harap diisi.'));
        $this->form_validation->set_rules('kode_kabupaten', 'Kabupaten', 'required', array('required' => 'Kabupaten harap diisi.'));
        $this->form_validation->set_rules('kode_kecamatan', 'Kecamatan', 'required', array('required' => 'Kecamatan Harap diisi.'));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required' => 'Alamat harap diisi.'));
        $this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required', array('required' => 'Kewarganegaraan harap diisi.'));
        $this->form_validation->set_rules('id_alat_transportasi', 'Alat Transportasi', 'required', array('required' => 'Alat Transportasi harap diisi.'));
        $this->form_validation->set_rules('id_status_asuh', 'Status Asuh', 'required', array('required' => 'Status Asuh harap diisi.'));
        $this->form_validation->set_rules('permalink', '', 'required', array('required' => 'Permalink harap diisi.'));
        if(isset($_POST['penerima_kps'])){
            $this->form_validation->set_rules('no_kps', 'No KPS', 'required', array('required' => 'No KPS harap diisi.'));
        }
        $result['error'] = TRUE;
        $result['msg_header'] = 'Perhatian';
         if ($this->form_validation->run() == FALSE) {
            $result['msg_body'] = validation_errors();
          } else {
            $permalink=$_POST['permalink'];
            $exits=$this->db->where('id_mahasiswa !=',$this->fn->get_ss_mahasiswa('id_user'))->where("(nim = '$permalink' or permalink='$permalink')")->get('data_mahasiswa')->num_rows();
            if($exits==0){
                $this->db->select('id_mahasiswa,validasi');
                $exits=$this->db->where('id_mahasiswa',$this->fn->get_ss_mahasiswa('id_user'))->get('data_mahasiswa')->row_array();
                if($exits['validasi']!='valid'){
                    $this->model->update_profile($exits['id_user'],$_POST);
                    $result['error'] = False;
                    $result['msg_header'] = 'Sukses';
                    $result['msg_body'] = "Data Telah Tersimpan";
                }else{
                    $result['msg_body'] = "Data tidak dapat dirubah";
                }
            }else{
               $result['msg_body'] = "Permalink sudah digunakan";
            }
        }
             echo json_encode($result);
    }
    function save_medis(){
        $this->form_validation->set_rules('tinggi', 'Tinggi', 'required|numeric', array('numeric' => 'Tinggi berupa angka.'));
        $this->form_validation->set_rules('berat', 'Berat', 'required|numeric', array('numeric' => 'Berat bebrupa angka.'));
        $this->form_validation->set_rules('golongan_darah', 'Golongan Darah', 'required', array('required' => 'Golongan Darah harap diisi.'));
        if ($this->form_validation->run() == FALSE) {
            $result['error'] = TRUE;
            $result['msg_header'] = 'Lengkapi Data';
            $result['msg_body'] = validation_errors();
          } else {
            $this->model->save_medis($this->fn->get_ss_mahasiswa('id_user'),$_POST);
            $result['error'] = False;
            $result['msg_header'] = 'Sukses';
            $result['msg_body'] = "Data Telah Tersimpan";
        }
             echo json_encode($result);
    }
    function keluarga(){
        $data['title']='Data Keluarga';
        $data['keluarga']=$this->model->get_keluarga($this->fn->get_ss_mahasiswa('id_user'));
        $this->template->mahasiswa('back/v_keluarga',$data);
    }
    function tambah_keluarga($id=NULL){
        if($id!=NULL){
            $this->db->where('id_mahasiswa',$this->fn->get_ss_mahasiswa('id_user'));
            $data['keluarga']=$this->m_referensi->get_referensi('data_keluarga','id_keluarga',$id);
        }$data['ref_pendidikan']=$this->m_referensi->get_referensi('ref_pendidikan');
        $data['ref_pekerjaan']=$this->m_referensi->get_referensi('ref_pekerjaan');
        $data['ref_status']=$this->m_referensi->get_referensi('ref_status');
        $data['ref_provinsi']=$this->m_referensi->get_referensi('ref_provinsi');
        $data['ref_kabupaten']=$this->m_referensi->get_referensi('ref_kabupaten');
        $data['ref_kecamatan']=$this->m_referensi->get_referensi('ref_kecamatan');
        $data['ref_hubungankeluarga']=$this->m_referensi->get_referensi('ref_hubungankeluarga');
        $this->load->view('back/tambah_keluarga',$data);
    }
    function save_keluarga(){
        $this->form_validation->set_rules('nama', 'Nama', 'required', array('required' => 'Nama harap diisi.'));
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required', array('required' => 'Jenis Kelamin harap diisi.'));
        $this->form_validation->set_rules('nik', 'NIK', 'required', array('required' => 'NIK harap diisi.'));
        $this->form_validation->set_rules('tmp_lahir', 'Tempat Lahir', 'required', array('required' => 'Tempat Lahir harap diisi.'));
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required', array('required' => 'Tanggal Lahir harap diisi.'));
        $this->form_validation->set_rules('status', 'Status', 'required', array('required' => 'Status harap diisi.'));
        $this->form_validation->set_rules('id_pendidikan', 'Pendidikan', 'required|numeric', array('required|numeric' => 'Tanggal Lahir harap diisi.'));
        $this->form_validation->set_rules('id_pekerjaan', 'Pekerjaan', 'required', array('required' => 'Pekerjaan harap diisi.'));
        $this->form_validation->set_rules('pendapatan', 'Pendapatan', 'required|numeric', array('required' => 'Pendapatan harap diisi.','numeric' => 'Pendapatan berupa angka.'));
        $this->form_validation->set_rules('hp', 'hp', 'required', array('required' => 'Nomor HP Lahir harap diisi.'));
        $this->form_validation->set_rules('id_pekerjaan', 'Pekerjaan', 'required', array('required' => 'Pekerjaan harap diisi.'));
        $this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required', array('required' => 'Kewarganegaraan harap diisi.'));
        $this->form_validation->set_rules('kode_provinsi', 'Provinsi', 'required', array('required' => 'Provinsi harap diisi.'));
        $this->form_validation->set_rules('kode_kabupaten', 'Kabupaten', 'required', array('required' => 'Kabupaten harap diisi.'));
        $this->form_validation->set_rules('kode_kecamatan', 'Kecamatan', 'required', array('required' => 'Kecamatan harap diisi.'));
        $this->form_validation->set_rules('alamat', 'Alamat', 'required', array('required' => 'alamat harap diisi.'));
        if ($this->form_validation->run() == FALSE) {
            $result['error'] = TRUE;
            $result['msg_header'] = 'Lengkapi Data';
            $result['msg_body'] = validation_errors();
          } else {
            $this->db->where('id_mahasiswa',$this->fn->get_ss_mahasiswa('id_user'));
            $exits=$this->db->where('id_keluarga',$this->input->post('id'))->get('data_keluarga')->row_array();
           if($exits!=NULL){
                $this->model->save_keluarga($this->input->post(),$this->fn->get_ss_mahasiswa('id_user'),$exits['id_keluarga']);
                $result['msg_body'] = "Data Berhasil Dirubah";
            }else{
                $this->model->save_keluarga($this->input->post(),$this->fn->get_ss_mahasiswa('id_user'));
                $result['msg_body'] = "Data Telah Tersimpan";
                $result['redirect_url']=site_url('mahasiswa/profile/keluarga/');
            }
            $result['error'] = False;
            $result['msg_header'] = "Sukses";
            
        }
             echo json_encode($result);
    }
    function delete_keluarga(){
        $this->db->where('id_mahasiswa',$this->fn->get_ss_mahasiswa('id_user'));
        $this->m_referensi->delete("data_keluarga","id_keluarga",$_POST['id']);
    }
    function prestasi(){
        $data['title']='Data Prestasi';
        $data['prestasi']=$this->model->get_prestasi($this->fn->get_ss_mahasiswa('id_user'));
        $this->template->mahasiswa('back/v_prestasi',$data);
    }
    function tambah_prestasi($id=null){
        if($id!=NULL){
            $this->db->where('id_mahasiswa',$this->fn->get_ss_mahasiswa('id_user'));
            $data['prestasi']=$this->m_referensi->get_referensi('data_prestasi','id_prestasi',$id);
        }
        $data['ref_kualifikasi']=$this->m_referensi->get_referensi('ref_kualifikasi_prestasi');
        $data['ref_jenjang']=$this->m_referensi->get_referensi('ref_jenjang_prestasi');
        $this->load->view('back/tambah_prestasi',$data);
    }
    function save_prestasi(){
        $this->form_validation->set_rules('nama', '', 'required', array('required' => 'Nama harap diisi.'));
        $this->form_validation->set_rules('nama_eng', '', 'required',array('required' => 'Nama dalam inggris harap diisi.'));
        $this->form_validation->set_rules('tanggal', '', 'required',array('required' => 'Tanggal harap diisi.'));
        $this->form_validation->set_rules('capaian', '', 'required',array('required' => 'Capaian harap diisi.'));
        $this->form_validation->set_rules('jenjang', '', 'required',array('required' => 'Jenjang harap diisi.'));
        $this->form_validation->set_rules('id_kualifikasi', '', 'required|numeric',array('required' => 'Kualifikasi harap diisi.'));
        $this->form_validation->set_rules('semester', '', 'required|numeric',array('required' => 'Semester harap diisi.'));
        $this->form_validation->set_rules('tahun', '', 'required|numeric',array('required' => 'Tahun harap diisi.'));
        $this->form_validation->set_rules('tempat', '', '',array('required' => 'Tempat harap diisi.'));
        if ($this->form_validation->run() == FALSE) {
            $result['error'] = TRUE;
            $result['msg_header'] = 'Lengkapi Data';
            $result['msg_body'] = validation_errors();
          } else {
            $this->db->where('id_mahasiswa',$this->fn->get_ss_mahasiswa('id_user'));
            $exits=$this->db->where('id_prestasi',$this->input->post('id'))->get('data_prestasi')->row_array();
           if($exits!=NULL){
                $this->model->save_prestasi($this->input->post(),$this->fn->get_ss_mahasiswa('id_user'),$exits['id_prestasi']);
                $result['msg_body'] = "Data Berhasil Dirubah";
            }else{
                $this->model->save_prestasi($this->input->post(),$this->fn->get_ss_mahasiswa('id_user'));
                $result['msg_body'] = "Data Telah Tersimpan";
                $result['redirect_url']=site_url('mahasiswa/profile/prestasi/');
            }
            $result['error'] = False;
            $result['msg_header'] = "Sukses";
         }
             echo json_encode($result);
    }
    function delete_prestasi(){
        $this->db->where('id_mahasiswa',$this->fn->get_ss_mahasiswa('id_user'));
        $this->m_referensi->delete("data_prestasi","id_prestasi",$_POST['id']);
    }
    function akademik(){
        $data['status']=$this->m_front->get_status($this->fn->get_ss_mahasiswa('id_user'));
         $this->template->mahasiswa('back/v_akademik',$data);
    }
    function riwayat_pendidikan(){
        $data['pendidikan']=$this->m_front->get_riwayat_pendidikan($this->fn->get_ss_mahasiswa('id_user'));
        $this->load->view('front/riwayat_pendidikan',$data);
    }
    function nilai($id=null){
        $data['nilai']=$this->m_front->get_nilai($this->fn->get_ss_mahasiswa('id_user'));
        $this->load->view('front/riwayat_studi',$data);
    }
    function ips(){
        $data['ips']=$this->m_front->get_ips($this->fn->get_ss_mahasiswa('id_user'));
       // $data['ipk']=$this->m_front->get_ipk($this->fn->get_ss_mahasiswa('id_user'));
        $this->load->view('front/v_ips',$data);
    }
    function upload_photo(){    
        $exits=$this->db->where('id_mahasiswa',$this->fn->get_ss_mahasiswa('id_user'))->select('id_mahasiswa,nim,foto')->get('data_mahasiswa')->row_array();
        if($exits != NULL){
        $config['allowed_types'] = 'png|PNG|jpg|JPG|jpeg|JPEG';
        $config['file_name'] = 'p_'.$exits['nim'];
        $config['upload_path'] = realpath(APPPATH . '../media/photo');
        $config['max_size'] = 500;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload("userfile")) {
            $upload_data = $this->upload->data();
            $this->model->update_photo($exits['id_mahasiswa'],$upload_data['file_name'],$exits['foto']);
            $result['error'] = FALSE;
            $result['msg_header'] = 'Sukses';
            $result['msg_body'] = 'Data Berhasil Dirubah, Halaman akan disegarkan';
            $result['redirect_url']=site_url('mahasiswa/profile/');
        } else {
            $result['error'] = TRUE;
            $result['msg_header'] = 'Upload Gagal';
            $result['msg_body'] = 'Upload Gagal, mohon dicek kembali file';
        }       
        }else{
            $result['error'] = TRUE;
            $result['msg_header'] = 'PEHATIAN';
            $result['msg_body'] = 'User tidak ditemukan';
        }
        echo json_encode($result);
    }
 }
 ?>