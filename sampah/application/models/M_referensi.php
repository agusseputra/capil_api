<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_referensi extends CI_Model
	{
		 function __construct()
		 {
			  // Call the Model constructor
			  parent::__construct();
		 }
   function get_referensi($table,$primary=NULL,$id=NULL){
    if($id != NULL){
        $this->db->where($primary,$id);
        return $this->db->get($table)->row_array();
    }else{
        return $this->db->get($table)->result_array();
    }
    
   }
     function delete($table,$primary,$id){
        $this->db->where($primary,$id)->delete($table);
        }
   }
 ?>