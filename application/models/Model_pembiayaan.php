<?php

Class Model_pembiayaan extends CI_Model{


	public function load_view($id_registrasi_pembiayaan){
		$sql = $this->db->query("SELECT * FROM registrasi_pembiayaan where id = ".intval($id));
		return $sql->result_array();
	}
	 
	public function simpan($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		
		$nik = $this->db->escape($post['nik']);
		$no_ktp = $this->db->escape($post['no_ktp']);
		$name = $this->db->escape($post['name']);
		$alamat = $this->db->escape($post['alamat']);
		$tempat_lahir = $this->db->escape ($post['tempat_lahir']);
		$tgl_lahir = $this->db->escape ($post['tgl_lahir']);
		$email = $this->db->escape ($post['email']);
		$tlp = $this->db->escape ($post['tlp']);
		$nama_ibu_kandung = $this->db->escape ($post['nama_ibu_kandung']);
		$status_marital = $this->db->escape ($post['status_marital']);
		$nama_pasangan = $this->db->escape ($post['nama_pasangan']);
		$jumlah_tanggungan = $this->db->escape ($post['jumlah_tanggungan']);
		$status_rumah = $this->db->escape ($post['status_rumah']);
		$npwp = $this->db->escape ($post['npwp']);
		$nama_bank = $this->db->escape ($post['nama_bank']);
		$no_rek_bank = $this->db->escape ($post['no_rek_bank']);
		$atas_nama_rek = $this->db->escape ($post['atas_nama_rek']);
		$id_produk_Pembiayaan = $this->db->escape ($post['id_produk_Pembiayaan']);
		$jml_pembiayaan = $this->db->escape ($post['jml_pembiayaan']);
		$jangka_waktu = $this->db->escape ($post['jangka_waktu']);
		$id_tujuan_pembiayaaan = $this->db->escape ($post['id_tujuan_pembiayaaan']);
		$gaji_pokok = $this->db->escape ($post['gaji_pokok']);
		$tunjangan_jabatan = $this->db->escape ($post['tunjangan_jabatan']);
		$tunjangan_lokasi = $this->db->escape ($post['tunjangan_lokasi']);
		$tunjangan_transport = $this->db->escape ($post['tunjangan_transport']);
		$uang_makan = $this->db->escape ($post['uang_makan']);
		$tunjangan_lain = $this->db->escape ($post['tunjangan_lain']);
		$tgl_pengajuan = $this->db->escape ($post['tgl_pengajuan']);
		$id_status_pembiayaan = $this->db->escape ($post['id_status_pembiayaan']);
		
		$sql = $this->db->query("INSERT INTO registrasi_pembiayaan VALUES (NULL, $nik, $no_ktp, $name, $alamat, $tempat_lahir, $tgl_lahir, $email,  $tlp, $nama_ibu_kandung, $status_marital, $nama_pasangan, $jumlah_tanggungan, $status_rumah, $npwp, $nama_bank, $no_rek_bank, $atas_nama_rek, $id_produk_Pembiayaan, $jml_pembiayaan, $jangka_waktu, $id_tujuan_pembiayaaan, $gaji_pokok, $tunjangan_jabatan, 
		$tunjangan_lokasi, $tunjangan_transport, $uang_makan, $tunjangan_lain, $tgl_pengajuan, $id_status_pembiayaan, 1)");
		
		if($sql){
	    echo "<script>
			alert('berhasil Terinput');
		</script>";
		}else{
		echo "<script>
			alert('gagal Terinput');
		</script>";
		}
			return true;
		return false;
	}

	public function get_default($id){
		$sql = $this->db->query("SELECT * FROM registrasi_pembiayaan WHERE id = ".intval($id));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
	}
	
	function get(){
		$query = $this->db->query('SELECT * FROM produk_pembiayaan');
        return $query->result();
		
	}
	
	function get1(){
		$query = $this->db->query('SELECT * FROM tujuan_pembiayaan');
        return $query->result();
		
	}
	function status(){
		$query = $this->db->query('SELECT * FROM status_pembiayaan');
        return $query->result();
		
	}
	
	

	
	
}