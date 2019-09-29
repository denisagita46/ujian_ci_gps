<?php
Class anggota extends CI_Controller{
	public function index(){
		$this->load->model("Model_anggota");
		$data['admin'] = $this->Model_anggota->load_admin();
		$this->load->view("data_admin",$data);
	}
	
	public function add(){
		$this->load->model("Model_anggota");
		$data['tipe'] = "Add";
		$data['dd_bidang'] = $this->Model_anggota->get();

		if(isset($_POST['tombol_submit'])){
		     //$this->session->set_flashdata('sukses',"Data Berhasil Diedit");
			//proses simpan dilakukan
			$this->Model_anggota->simpan($_POST);
		
			$data=base_url();
							echo $this->session->set_flashdata('msg','<script>alert("berhasil")</script>');
			redirect("login");
		}

		$this->load->view("form_anggota",$data);
	}

	



	
}