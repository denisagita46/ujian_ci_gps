<html>
  <head>
    <title>Form Pembiayaan</title>
   
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
	<script src="<?php echo base_url().'assets/js/jquery1.js'?>"  type="text/javascript"></script>
	<script src="<?php echo base_url().'assets/js/jquery-ui.js'?>"  type="text/javascript"></script>
	<link href="<?php echo base_url().'assets/js/jquery-ui.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet">
	
  </head>
  <body>
  
    <div class="container">
	<?php echo $this->session->flashdata('message');?>
      <?php $this->load->view('menu');?> <!--Include menu-->
		<h1><?=$tipe?> Form Pembiayaan</h1>
		
   <script>
   
    function hanyaAngka(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
 
    return false;
    return true;
	}
	
	$(function() {
    $( "#tgl_lahir" ).datepicker();
	});
	
	$(function() {
    $( "#tgl_pengajuan" ).datepicker();
	});
	
	function convertToRupiah(objek) {
	  separator = ".";
	  a = objek.value;
	  b = a.replace(/[^\d]/g,"");
	  c = "";
	  panjang = b.length; 
	  j = 0; 
	  for (i = panjang; i > 0; i--) {
	    j = j + 1;
	    if (((j % 3) == 1) && (j != 1)) {
	      c = b.substr(i-1,1) + separator + c;
	    } else {
	      c = b.substr(i-1,1) + c;
	    }
	  }
	  objek.value = c;

	}

  </script>
  <script type="text/javascript">
	function cekdata()
	{      						  
  // Cek NIK
   if (formtambah.nik.value=="")
   {
      alert("NIK tidak boleh kosong ...!");
	  formtambah.nik.focus();
	  return false;
   }
   
      // Cek Nomor KTP
   if (formtambah.no_ktp.value=="")
      {
      alert("Nomor KTP tidak boleh kosong ...!");
	  formtambah.no_ktp.focus();
	  return false;
      }

    // cek Nama Lengkap
    if (formtambah.name.value=="")
      {
      alert("Nama Lengkap tidak boleh kosong ...!");
	  formtambah.name.focus();
	  return false;
      }
	  
	  //cek Alamat
	  if (formtambah.alamat.value=="")
      {
      alert("Model Name tidak boleh kosong ...!");
	  formtambah.alamat.focus();
	  return false;
      }
	  
	  // cek Tempat Lahir
	  if (formtambah.tempat_lahir.value=="")
      {
      alert("Tempat Lahir tidak boleh kosong ...!");
	  formtambah.tempat_lahir.focus();
	  return false;
      }
	    // cek Email
	  if (formtambah.email.value=="")
      {
      alert("Tempat Lahir tidak boleh kosong ...!");
	  formtambah.email.focus();
	  return false;
      }
	  
	    // cek Telepon/hp
	  if (formtambah.tlp.value=="")
      {
      alert("Telepon tidak boleh kosong ...!");
	  formtambah.tlp.focus();
	  return false;
      }
	  
	   // cek nama Ibu Kandung
	  if (formtambah.nama_ibu_kandung.value=="")
      {
      alert("Nama Ibu Kandung tidak boleh kosong ...!");
	  formtambah.nama_ibu_kandung.focus();
	  return false;
      }
	}
	</script>
  
		<form name="formtambah" method="post" class="form-horizontal" onSubmit = "return cekdata()">
		
			<div class="form-group">
				<label class="control-label col-sm-2">
					NIK
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="nik" id="nik" placeholder="NIK" onkeypress="return hanyaAngka(event)"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Nomor KTP					
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="no_ktp" id="no_ktp" placeholder="Nomor KTP" onkeypress="return hanyaAngka(event)"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Nama Lengkap (Sesuai KTP)					
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="name" id="name" placeholder="Nama">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Alamat Rumah (Lengkap)				
				</label>
				<div class="col-sm-8">
				<textarea  class="form-control" name="alamat" id="alamat" placeholder="Alamat"></textarea>
				
				</div>
			</div>
			
			
			<div class="form-group">
				<label class="control-label col-sm-2">
				    	Tempat Lahir 				
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
				    	Tanggal lahir 				
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal lahir">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Email					
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="email" id="email" placeholder="Email">
				</div>
			</div>
		    <div class="form-group">
				<label class="control-label col-sm-2">
					Telepon					
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="tlp" id="tlp" placeholder="Telepon" onkeypress="return hanyaAngka(event)"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Nama Ibu Kandung					
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="nama_ibu_kandung" id="nama_ibu_kandung" placeholder="Nama Ibu Kadung">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Status Marital					
				</label>
				<div class="col-sm-8">
					<select id="status_marital" class="form-control" id="status_marital" name="status_marital">
					<option value="Menikah">Menikah</option>
					<option value="Belum Menikah">Belum Menikah</option>
					<option value="Janda/duda">Janda/duda</option>
	
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
				   Nama Pasangan				
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="nama_pasangan" id="nama_pasangan" placeholder="Nama Pasangan">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
				   Jumlah Tanggungan				
				</label>
				<div class="col-sm-8">
				<input type="number" step="1" class="form-control" name="jumlah_tanggungan" id="jumlah_tanggungan" placeholder="Jumlah Tanggungan">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Status Rumah					
				</label>
				<div class="col-sm-8">
					<select id="status_rumah" class="form-control" id="status_rumah" name="status_rumah">
					<option value="Milik">Milik</option>
					<option value="Sewa">Sewa Kontrak</option>
					<option value="Kontrak">Kontrak</option>
	
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
				   NPWP				
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="npwp" id="npwp" placeholder="npwp" onkeypress="return hanyaAngka(event)"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
				   Nama Bank				
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="nama_bank" id="nama_bank" placeholder="Nama Bank">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
				   Nomor Rekening Bank				
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="no_rek_bank" id="no_rek_bank" placeholder="Nomor Rekening Bank" onkeypress="return hanyaAngka(event)"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
				   Atas Nama Rekening			
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="atas_nama_rek" id="atas_nama_rek" placeholder="Atas Nama Rekening">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Produk Pembiayaan					
				</label>
				<div class="col-sm-8">
					<select class="form-control" name="id_produk_Pembiayaan">
					<option value=""  diselected>-- Pilih Produk Pembiayaan --</option>
					<?php                                
					foreach ($dd_bidang as $row) {  
					echo "<option value='".$row->id_produk_Pembiayaan."'>".$row->nama_produk_pembiayaan."</option>";
					}
					echo"
					</select>"
					?>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
				   Jumlah Pembiayaan			
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="jml_pembiayaan" id="jml_pembiayaan" placeholder="jumlah Pembiayaan">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
				   Jangka Waktu	Pembiayaan		
				</label>
				<div class="col-sm-8">
				<select id="jangka_waktu" class="form-control" id="jangka_waktu" name="jangka_waktu">
					<option value="12 Bulan">12 Bulan</option>
					<option value="24 Bulan">24 Bulan</option>
					<option value="36 Bulan">36 Bulan</option>
					<option value="48 Bulan">48 Bulan</option>
	
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Tujuan Pembiayaan					
				</label>
				<div class="col-sm-8">
					<select class="form-control" name="id_tujuan_pembiayaaan">
					<option value=""  diselected>-- Pilih Tujuan Pembiayaan --</option>
					<?php                                
					foreach ($tes as $row) {  
					echo "<option value='".$row->id_tujuan_pembiayaaan."'>".$row->tujuan_pembiayaan."</option>";
					}
					echo"
					</select>"
					?>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
				   Gaji Pokok			
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="gaji_pokok" id="gaji_pokok" placeholder="Gaji Pokok" onkeyup="convertToRupiah(this);">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
				   Tunjangan Jabatan			
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="tunjangan_jabatan" id="tunjangan_jabatan" placeholder="Tunjangan Jabatan">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
				   Tunjangan Lokasi			
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="tunjangan_lokasi" id="tunjangan_lokasi" placeholder="Tunjangan Lokasi">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
				   Tunjangan Transport			
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="tunjangan_transport" id="tunjangan_transport" placeholder="Tunjangan Transport">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
				   Uang Makan			
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="uang_makan" id="uang_makan" placeholder="Uang Makan" onkeyup="convertToRupiah(this);">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
				   Tunjangan Lain			
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="tunjangan_lain" id="tunjangan_lain" placeholder="Tunjangan Lain">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
				    	Tanggal Pengajuan 				
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="tgl_pengajuan" id="tgl_pengajuan" placeholder="Tanggal Pengajuan">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Status Pembiayaan					
				</label>
				<div class="col-sm-8">
					<select class="form-control" name="id_status_pembiayaan">
					<option value=""  diselected>-- Pilih Status Pembiayaan --</option>
					<?php                                
					foreach ($status_biaya as $row) {  
					echo "<option value='".$row->id_status_pembiayaan."'>".$row->status_pembiayaan."</option>";
					}
					echo"
					</select>"
					?>
				</div>
			</div>
			
			
			<center>
				<button name="tombol_submit" class="btn btn-primary fa fa-check-square-o">
					Simpan
				</button>
				
			</center>
			

		</form>
	</div>
</body>
</html>
<script src="<?php echo base_url().'assets/js/validasi.js'?>"  type="text/javascript">