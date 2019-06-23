<?php
Class gps extends CI_Controller{
function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
  }
	public function index()
	{
		$this->load->model("model_gps");
		$data['gps'] = $this->model_gps->load_gps();

		$this->load->view("data_gps",$data);
	}

	public function add(){
		$this->load->model("model_gps");
		$data['tipe'] = "Add";

		if(isset($_POST['tombol_submit'])){
			//proses simpan dilakukan
			$this->model_gps->simpan($_POST);
			redirect("gps");
		}
		
		$this->load->view("form_gps",$data);
	}
	
	
	public function edit($id){
		$this->load->model("model_gps");
		$data['tipe'] = "Edit";
		$data['default'] = $this->model_gps->load_ok($id);

		if(isset($_POST['tombol_submit'])){
			$this->model_gps->update($_POST, $id);
			redirect("gps");
		}

		$this->load->view("form_update_gps",$data);
	}

	public function delete($id){
		$this->load->model("model_gps");
		$this->model_gps->hapus($id);
		redirect("gps");
	}
	
	public function view($id){
	  
	  $this->load->model("model_gps");
		$data['tipe'] = "View";
		$data['default'] = $this->model_gps->load_view($id);


		$this->load->view("view_gps",$data);
	
	
	}
}