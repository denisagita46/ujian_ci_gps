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
  
    $this->load->view('dashboard anggota');	
  }
  


  }

