<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Kinerja extends CI_Controller {
    public function __construct(){
		parent::__construct();
         $this->load->model('M_kinerja','model');
         $this->load->model('m_referensi');
   	}
    function angket($id_pengambilan,$penawaran){
        $data['pengampu']=$this->model->get_pengampu($penawaran);
        if($data['pengampu'] != NULL){
        $data['angket']=$this->model->get_ref_kinerja();
        $data['ref_skala']=$this->m_referensi->get_referensi('ref_skala_kinerja');
        $this->load->view('back/v_angket',$data);     
        }else{
            echo'Data not Found';
        }  
    }
    function pengambilan(){
            $setting=$this->fn->get_setting();
            $data['pengambilan']=$this->model->get_pengambilan($this->fn->get_ss_mahasiswa('id_user'),$setting['tahun_aktif'],$setting['semester_aktif']);
        $this->template->mahasiswa('back/v_kinerja',$data);
    }
    function save_angket($id_pengambilan){
        $this->form_validation->set_rules('radio[]', '', 'required', array('required' => 'Semua Butir Angket harap diisi.'));
        $this->form_validation->set_rules('id_dosen', '', 'required', array('required' => 'Dosen Pengampu harap diisi.'));
         if ($this->form_validation->run() == FALSE) {
            $result['error'] = TRUE;
            $result['msg_header'] = 'Lengkapi Data';
            $result['msg_body'] = validation_errors();
          } else {
            $exist=$this->db->where('md5(id_pengambilan)',$id_pengambilan)
            ->where('id_mahasiswa',$this->fn->get_ss_mahasiswa('id_user'))
            ->where('id_dosen',$_POST['id_dosen'])
            ->join('data_pengampu','data_pengambilan.id_penawaran=data_pengampu.id_penawaran')->get('data_pengambilan')->row_array();
            if($exist != NULL){
                $kinerja=$this->db->where('id_pengambilan',$exist['id_pengambilan'])->where('id_dosen',$_POST['id_dosen'])->get('data_kinerja_dosen')->num_rows();
                if($kinerja == 0){
                    $this->model->save_angket($exist['id_pengambilan'],$exist['id_mahasiswa'],$_POST);
                    $result['error'] = False;
                    $result['msg_header'] = 'Sukses';
                    $result['msg_body'] = "Data Telah Tersimpan";
                }else{
                    $result['error'] = TRUE;
                    $result['msg_header'] = 'Perhatian';
                    $result['msg_body'] = "Angket sudah dilakukan sebelumya thd matkul dan dosen tsb.";
                }
            }else{
                $result['error'] = TRUE;
                $result['msg_header'] = 'Perhatian';
                $result['msg_body'] = "Data Tidak Ditemukan";
            }
          }
        echo json_encode($result);
    }
  }
  ?>