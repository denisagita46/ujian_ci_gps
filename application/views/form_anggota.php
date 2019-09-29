<html>
  <head>
    <title>Data Registrasi</title>
   
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
	<script src="<?php echo base_url().'assets/js/jquery1.js'?>"  type="text/javascript"></script>
	<script src="<?php echo base_url().'assets/js/jquery-ui.js'?>"  type="text/javascript"></script>
	<link href="<?php echo base_url().'assets/js/jquery-ui.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet">
  </head>
  <body>

    <div class="container">
      <?php $this->load->view('header');?> <!--Include menu-->
		<h1><?=$tipe?> Form Registrasi</h1>
	 <script>
	  function hanyaAngka(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		return false;
		return true;
		}
	
	
	$(function() {
    $( "#tanggal_lahir" ).datepicker();
	});
	
	$(function() {
    $( "#tgl_registrasi" ).datepicker();
	});
  
	
  </script>
    <script type="text/javascript">
	function cekdata()
	{
	// Cek nik
	if (formtambah.nik.value=="")
   {
      alert("NIK tidak boleh kosong ...!");
	  formtambah.nik.focus();
	  return false;
   }	
   // Cek Nomor KTP
	if (formtambah.no_ktp.value=="")
   {
      alert("nomor ktp tidak boleh kosong ...!");
	  formtambah.no_ktp.focus();
	  return false;
   }	
   // Cek nama 
   if (formtambah.nama.value=="")
   {
      alert("nama tidak boleh kosong ...!");
	  formtambah.nama.focus();
	  return false;
   }
   // Cek alamat 
   if (formtambah.alamat.value=="")
   {
      alert("Alamat tidak boleh kosong ...!");
	  formtambah.alamat.focus();
	  return false;
   }
   
    // Cek Email 
   if (formtambah.email.value=="")
   {
      alert("Alamat tidak boleh kosong ...!");
	  formtambah.email.focus();
	  return false;
   }
   
    // Cek Telepon 
   if (formtambah.tlp.value=="")
   {
      alert("Telepon tidak boleh kosong ...!");
	  formtambah.tlp.focus();
	  return false;
   }
   // Cek nama Ibu kandung 
   if (formtambah.nama_ibu_kandung.value=="")
   {
      alert("Nama Ibu Kandung tidak boleh kosong ...!");
	  formtambah.nama_ibu_kandung.focus();
	  return false;
   }
   
   // Cek Nama Pasangan 
   if (formtambah.nama_pasangan.value=="")
   {
      alert("Nama Pasangan tidak boleh kosong ...!");
	  formtambah.nama_pasangan.focus();
	  return false;
   }
   
   // Cek Npwp 
   if (formtambah.npwp.value=="")
   {
      alert("NPWP tidak boleh kosong ...!");
	  formtambah.npwp.focus();
	  return false;
   }
   
   // Cek nama bank 
   if (formtambah.nama_bank.value=="")
   {
      alert("Nama Bank tidak boleh kosong ...!");
	  formtambah.nama_bank.focus();
	  return false;
   }
   
   // Cek Nomor Rekening bank 
   if (formtambah.no_rek_bank.value=="")
   {
      alert("Nomor rekening Bank tidak boleh kosong ...!");
	  formtambah.no_rek_bank.focus();
	  return false;
   }
   
    // atas nama Rekening bank 
   if (formtambah.atas_nama_rekening.value=="")
   {
      alert("Atas nama Rekening tidak boleh kosong ...!");
	  formtambah.atas_nama_rekening.focus();
	  return false;
   }
   
      // Cek password
   if (formtambah.password.value=="")
      {
      alert("password tidak boleh kosong ...!");
	  formtambah.password.focus();
	  return false;
      }

    }
	</script>
		
		
		<form name="formtambah" method="post" class="form-horizontal"  onSubmit = "return cekdata()">
			<div class="form-group">
			<div class="form-group">
				<label class="control-label col-sm-2">
					Nik
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="nik" name="nik" placeholder="NIK" onkeypress="return hanyaAngka(event)"/>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Nomor KTP
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="no_ktp" name="no_ktp" placeholder="Nomor KTP" onkeypress="return hanyaAngka(event)"/ >
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Alamat
				</label>
				<div class="col-sm-8">
					<textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat" ></textarea>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Tempat Lahir
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat lahir" >
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
				   Tanggal Lahir 				
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" placeholder="Tanggal Lahir">
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
				<input type="text" class="form-control" name="nama_ibu_kandung" id="nama_ibu_kandung" placeholder="Nama Ibu Kandung">
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
				<input type="text" class="form-control" name="no_rek_bank" id="no_rek_bank" placeholder="Nomor Rekening Bank">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
				   Atas Nama Rekening				
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="atas_nama_rekening" id="atas_nama_rekening" placeholder="Atas Nama Rekening">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
				   Tanggal Registrasi 				
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="tgl_registrasi" id="tgl_registrasi" placeholder="Tanggal Registrasi">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Username
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="nama" name="nama" placeholder="username" >
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Password					
				</label>
				<div class="col-sm-8">
					<input type="password" class="form-control" id="password" name="password" placeholder="password">
				</div>
				
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					level					
				</label>
				<div class="col-sm-8">
					<select id="level" class="form-control" id="level" name="level">
					<option value="2">User</option>
	
					</select>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Status Anggota					
				</label>
				<div class="col-sm-8">
					<select class="form-control" name="id_status_anggota">
					<option value=""  diselected>-- Pilih Status Anggota --</option>
					<?php                                
					foreach ($dd_bidang as $row) {  
					echo "<option value='".$row->id_status_anggota."'>".$row->status_anggota."</option>";
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
				
				<a href="<?php echo base_url().'index.php/login'?>" class='btn btn-primary fa fa-check-square-o'>Kembali</a>
			</center>
		</form>
	</div>
</body>
</html>