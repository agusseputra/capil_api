<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function check_username($u){
        $this->db->where('username', $u);
        $query = $this->db->get('data_login');
        return $query->row_array();
    }

    function check_password($post){
        $this->db->where('username', $post['username']);
        $this->db->where('password', md5($post['password']));
       // $this->db->join('data_mahasiswa','data_mahasiswa.id_mahasiswa=data_login.id_user');
        $query = $this->db->get('data_login');
        return $query->row_array();
    }
    function get_user($id_user, $type){
        if($type=='mahasiswa'){
            return $this->db->where('id_mahasiswa',$id_user)->get('data_mahasiswa')->row_array();
        }elseif($type=='kemahasiswaan' || $type=='akademik'){
            return $this->db->where('id_user',$id_user)->get('data_user')->row_array();
        }
    }
    }
    ?>