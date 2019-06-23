<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_admin extends CI_Model{

	public function load_admin(){
		$sql = $this->db->query("select *, IF(level>1, 'User', 'Admin') as rolename from user  WHERE flag = 1");
		return $sql->result_array();
	}
	
	public function load_update($id_user){
		$sql = $this->db->query("SELECT *,  IF(level>1, 'User', 'Admin') as rolename FROM user where id_user = ".intval($id_user));
		return $sql->result_array();
	}

	public function simpan($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		$nama = $this->db->escape($post['nama']);
		$password = $this->db->escape($post['password']);
		$level = $this->db->escape($post['level']);

		$sql = $this->db->query("INSERT INTO user VALUES (NULL, $nama, $password, $level, 1)");
		if($sql)
			return true;
		return false;
	}

	public function get_default($id_user){
		$sql = $this->db->query("SELECT * FROM user WHERE id_user = ".intval($id_user));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
	}

	public function update($post, $id_user){
		
		$nama = $this->db->escape($post['nama']);
		$pass = $this->db->escape($post['pass']);
		$level = $this->db->escape($post['level']);

		$sql = $this->db->query("UPDATE user SET nama = $nama, pass = $pass, level = $level WHERE id_user = ".intval($id_user));

		return true;
	}

	public function hapus($id_user){
		$sql = $this->db->query("UPDATE user SET flag = 0 WHERE id_user = ".intval($id_user));
	}

    public function load_view($id_user){
		$sql = $this->db->query("SELECT * FROM user where id_user = ".intval($id_user));
		return $sql->result_array();
	}	

}