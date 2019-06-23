<html>
  <head>
    <title>Data Manage GPS</title>
   
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
	
	
  </head>
  <body>
  
    <div class="container">
      <?php $this->load->view('menu');?> <!--Include menu-->
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
  
		<form name="formtambah" method="post" class="form-horizontal" onSubmit = "return cekdata()">
		
		 <?php foreach ($default as $row): ?>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Username
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>" id="nama"  placeholder="Username">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Password 
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="pass" value="<?php echo $row['pass']; ?>" id="pass"  placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Level				
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="level" value="<?php echo $row['level']; ?>" id="level" placeholder="Level">
				</div>
			</div>
		
			<center>
			     <a href="<?php echo base_url().'index.php/admin'?>" class='btn btn-primary'>Kembali</a>
				<button name="tombol_submit" class="btn btn-primary">
					Update
				</button>
				
			</center>
			<?php endforeach; ?>

		</form>
	</div>
</body>
