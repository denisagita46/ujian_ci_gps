<html>
  <head>
    <title>Data Manage GPS</title>
   
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
	<script src="<?php echo base_url().'assets/js/jquery1.js'?>"  type="text/javascript"></script>
	<script src="<?php echo base_url().'assets/js/jquery-ui.js'?>"  type="text/javascript"></script>
	<link href="<?php echo base_url().'assets/js/jquery-ui.css'?>" rel="stylesheet">
	
  </head>
  <body>
  
    <div class="container">
      <?php $this->load->view('menu');?> <!--Include menu-->
		<h1><?=$tipe?> View Admin</h1>
  
  
		<form name="formtambah" method="post" class="form-horizontal" onSubmit = "return cekdata()">
		
		 <?php foreach ($default as $row): ?>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Username
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="nama" value="<?php echo $row['nama']; ?>" id="nama" readonly="readonly"  placeholder="Brand GPS">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Password
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="pass" value="<?php echo $row['pass']; ?>" id="pass" readonly="readonly"  placeholder="Brand GPS">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Level
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="level" value="<?php echo $row['level']; ?>" id="level" readonly="readonly"  placeholder="Brand GPS">
				</div>
			</div>
			
			<td><a href="<?php echo base_url().'index.php/admin'?>" class='btn btn-sm btn-info'>Kembali</a></td>
			
			<?php endforeach; ?>

		</form>
	</div>
</body>
