<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_gps extends CI_Model{

	public function load_gps(){
		$sql = $this->db->query("SELECT * FROM tb_gps WHERE flag = 1");
		return $sql->result_array();
	}
	
	public function load_ok($id){
		$sql = $this->db->query("SELECT * FROM tb_gps where id = ".intval($id));
		return $sql->result_array();
	}
	
	public function load_view($id){
		$sql = $this->db->query("SELECT * FROM tb_gps where id = ".intval($id));
		return $sql->result_array();
	}
	 
	public function simpan($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		$brand_gps = $this->db->escape($post['brand_gps']);
		$model_gps = $this->db->escape($post['model_gps']);
		$gps_name = $this->db->escape($post['gps_name']);
		$wanthy_month = $this->db->escape($post['wanthy_month']);
		$buy_date = $this->db->escape ($post['buy_date']);
		$sold_date = $this->db->escape ($post['sold_date']);
		$sold_to = $this->db->escape ($post['sold_to']);
		$foto = $this->db->escape ($post['foto']);
		$description = $this->db->escape ($post['description']);
		
		$sql = $this->db->query("INSERT INTO tb_gps VALUES (NULL, $brand_gps, $model_gps, $gps_name, $wanthy_month, $buy_date, $sold_date, $sold_to,  $foto, $description,1)");
		if($sql)
			return true;
		return false;
	}

	public function get_default($id){
		$sql = $this->db->query("SELECT * FROM tb_gps WHERE id = ".intval($id));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
	}

	public function update($post, $id){
		
		$brand_gps = $this->db->escape($post['brand_gps']);
		$model_gps = $this->db->escape($post['model_gps']);
		$gps_name = $this->db->escape($post['gps_name']);
		$wanthy_month = $this->db->escape($post['wanthy_month']);
		$buy_date = $this->db->escape($post['buy_date']);
		$sold_date = $this->db->escape($post['sold_date']);
		$sold_to = $this->db->escape ($post['sold_to']);
		$description = $this->db->escape($post['description']);

		$sql = $this->db->query("UPDATE tb_gps SET brand_gps = $brand_gps, model_gps = $model_gps, gps_name = $gps_name, wanthy_month = $wanthy_month , buy_date = $buy_date , sold_date = $sold_date , sold_to = $sold_to , description = $description WHERE id = ".intval($id));

		return true;
	}

	public function hapus($id){
		$sql = $this->db->query("UPDATE tb_gps SET flag = 0 WHERE id = ".intval($id));
	}	
	
}