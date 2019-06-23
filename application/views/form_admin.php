<html>
  <head>
    <title>Data User</title>
   
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet">
  </head>
  <body>

    <div class="container">
      <?php $this->load->view('menu');?> <!--Include menu-->
		<h1><?=$tipe?> Form User</h1>
	
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

    }
	</script>
		
		
		<form name="formtambah" method="post" class="form-horizontal"  onSubmit = "return cekdata()">
			<div class="form-group">
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
					<option value="1">Admin</option>
					<option value="2">User</option>
	
					</select>
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