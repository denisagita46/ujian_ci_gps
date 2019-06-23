<html>
  <head>
    <title>Data User</title>
   
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
	
  </head>
  <body>

    <div class="container">
      <?php $this->load->view('menu');?> <!--Include menu-->
		<h1><?=$tipe?> Form change password</h1>
	
    <script type="text/javascript">
	function cekdata()
	{      						  
   // Cek nama 
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
					Old Password 
				</label>
				<div class="col-sm-8">
					<input type="password" class="form-control" name="old_pass" id="nama" placeholder="Old Pass">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					New Password 			
				</label>
				<div class="col-sm-8">
				    <input type="password" class="form-control" name="new_pass" id="password" placeholder="New Password">
					
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Confirm Password 			
				</label>
				<div class="col-sm-8">
				<input type="password" class="form-control" name="confirm_pass" id="password" placeholder="Confirm Password">
				</div>
			</div>
			
			<center>
				<button name="tombol_submit" class="btn btn-primary" name="change_pass">
					Simpan
				</button>
			</center>
		</form>
	</div>
</body>
</html>