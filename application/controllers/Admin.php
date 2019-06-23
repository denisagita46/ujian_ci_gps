<?php
Class Admin extends CI_Controller{
	public function index(){
		$this->load->model("model_admin");
		$data['admin'] = $this->model_admin->load_admin();
		$this->load->view("data_admin",$data);
	}
	
	public function add(){
		$this->load->model("model_admin");
		$data['tipe'] = "Add";

		if(isset($_POST['tombol_submit'])){
		     //$this->session->set_flashdata('sukses',"Data Berhasil Diedit");
			//proses simpan dilakukan
			$this->model_admin->simpan($_POST);
		
			redirect("Admin");
		}

		$this->load->view("form_admin",$data);
	}

	
	public function edit($id_user){
		$this->load->model("model_admin");
		$data['tipe'] = "Edit";
		$data['default'] = $this->model_admin->load_update($id_user);

		if(isset($_POST['tombol_submit'])){
			$this->model_admin->update($_POST, $id_user);
			redirect("Admin");
		}

		$this->load->view("form_update_admin",$data);
	}


	public function delete($id_user){
		$this->load->model("model_admin");
		$this->model_admin->hapus($id_user);
		redirect("Admin");
	}
	
	public function view($id_user){
	  
	  $this->load->model("model_admin");
		$data['tipe'] = "View";
		$data['default'] = $this->model_admin->load_view($id_user);


		$this->load->view("view_admin",$data);
	}
}