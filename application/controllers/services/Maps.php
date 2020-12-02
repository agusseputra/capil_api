<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maps extends CI_Controller {
    public function __construct()
	{
		parent::__construct();
       // $this->load->model('M_data','model');
	
	} 
    public function index(){
        $this->load->view('services/v_maps');
    }
    }
    ?>