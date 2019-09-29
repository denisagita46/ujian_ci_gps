<?php
Class pembiayaan extends CI_Controller{
function __construct(){
    parent::__construct();
    
			if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
  }
	public function index()
	{
		$this->load->model("model_pembiayaan");
		$data['gps'] = $this->model_pembiayaan->load_gps();

		$this->load->view("data_gps",$data);
	}

	public function add(){
		$this->load->model("model_pembiayaan");
		$data['tipe'] = "Add";
		$data['dd_bidang'] = $this->model_pembiayaan->get();
	    $data['tes'] = $this->model_pembiayaan->get1();
		$data['status_biaya'] = $this->model_pembiayaan->status();

		if(isset($_POST['tombol_submit'])){
			//proses simpan dilakukan
			$this->model_pembiayaan->simpan($_POST);

			
		}
		
		$this->load->view("form_pembiayaan",$data);
	}
	
}