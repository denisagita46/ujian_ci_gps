<html>
  <head>
    <title>Form User</title>
    
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
  </head>
  <body>

    <div class="container">
      <?php $this->load->view('menu');?> <!--Include menu-->
		<fieldset>
		<h1><?=$tipe?> Form User</h1>
		<script type="text/javascript">
	function cekdata()
	{      						  
	// Cek nama nama
	if (formtambah.nama.value=="")
	{
      alert("nama tidak boleh kosong ...!");
	  formtambah.nama.focus();
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
		
		<form name="formtambah" method="post" class="form-horizontal" onSubmit = "return cekdata()">
		 
			<div class="form-group">
				<label class="control-label col-sm-2">
					Nama
				</label>
				<div class="col-sm-7">
					<input type="text" class="form-control" id="nama" name="nama">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Password					
				</label>
				<div class="col-sm-7">
					<input type="password" class="form-control" id="password" name="password">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					level					
				</label>
				<div class="col-sm-7">
					<select id="level" class="form-control" id="level" name="level">
						<option value="1">Admin</option>
						<option value="2">User</option>
					</select>
				</div>
			</div>
			
			<center>
				<button name="tombol_submit" class="btn btn-primary">
					Simpan
				</button>
			</center>

		</form>
		</fieldset>
	</div>
</body>
</html>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
