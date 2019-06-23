<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
		$this->load->model('Login_model');
  }

  function index(){
  
    $this->load->view('dashboard gps');	
  }
  
  function change_password(){
     
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('form_change_password');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  }

