<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_anggota extends CI_Model{

	public function load_admin(){
		$sql = $this->db->query("select *, IF(level>1, 'User', 'Admin') as rolename from user  WHERE flag = 1");
		return $sql->result_array();
	}
	
	public function load_update($id_user){
		$sql = $this->db->query("select *, IF(level>1, 'User', 'Admin') as rolename FROM user where id_user = ".intval($id_user));
		return $sql->result_array();
	}

	public function simpan($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		$nik = $this->db->escape($post['nik']);
		$no_ktp = $this->db->escape($post['no_ktp']);
		$alamat = $this->db->escape($post['alamat']);
		$tempat_lahir = $this->db->escape($post['tempat_lahir']);
		$tanggal_lahir = $this->db->escape($post['tanggal_lahir']);
		$email = $this->db->escape($post['email']);
		$tlp = $this->db->escape($post['tlp']);
		$nama_ibu_kandung = $this->db->escape($post['nama_ibu_kandung']);
		$status_marital = $this->db->escape($post['status_marital']);
		$nama_pasangan = $this->db->escape($post['nama_pasangan']);
		$jumlah_tanggungan = $this->db->escape($post['jumlah_tanggungan']);
		$npwp = $this->db->escape($post['npwp']);
		$nama_bank = $this->db->escape($post['nama_bank']);
		$no_rek_bank = $this->db->escape($post['no_rek_bank']);
		$atas_nama_rekening = $this->db->escape($post['atas_nama_rekening']);
		$tgl_registrasi = $this->db->escape($post['tgl_registrasi']);
		$nama = $this->db->escape($post['nama']);
		$password = $this->db->escape($post['password']);
		$level = $this->db->escape($post['level']);
		$id_status_anggota = $this->db->escape($post['id_status_anggota']);

		$sql = $this->db->query("INSERT INTO anggota VALUES (NULL, $nik, $no_ktp, $nama, $alamat, $tempat_lahir, $tanggal_lahir, $email, $tlp, $nama_ibu_kandung, $status_marital, $nama_pasangan, $jumlah_tanggungan, $npwp, $nama_bank, $no_rek_bank, $atas_nama_rekening, $tgl_registrasi,  $password, $level, $id_status_anggota, 1)");
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
		$sql = $this->db->query("SELECT *,  IF(level>1, 'User', 'Admin') as rolename FROM user where id_user = ".intval($id_user));
		return $sql->result_array();
	}	
	
	function get(){
		$query = $this->db->query('SELECT * FROM status_anggota');
        return $query->result();
		
		
	}

}