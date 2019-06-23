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
		<h1><?=$tipe?> Form Update GPS</h1>
   <script>
	$(function() {
    $( "#buy_date" ).datepicker();
	});
  
	$(function() {
    $( "#sold_date" ).datepicker();
	});
  </script>
  
  <script type="text/javascript">
	function cekdata()
	{      						  
   // Cek brands gps
   if (formtambah.brand_gps.value=="")
   {
      alert("Brands GPS tidak boleh kosong ...!");
	  formtambah.brand_gps.focus();
	  return false;
   }
   
      // Cek Model Gps
   if (formtambah.model_gps.value=="")
      {
      alert("Model GPS tidak boleh kosong ...!");
	  formtambah.model_gps.focus();
	  return false;
      }

    // cek gps name
    if (formtambah.gps_name.value=="")
      {
      alert("Model Name tidak boleh kosong ...!");
	  formtambah.gps_name.focus();
	  return false;
      }
	  
	  //cek sold to
	  if (formtambah.sold_to.value=="")
      {
      alert("Model Name tidak boleh kosong ...!");
	  formtambah.sold_to.focus();
	  return false;
      }
	  
	  // cek description
	  if (formtambah.description.value=="")
      {
      alert("Description Name tidak boleh kosong ...!");
	  formtambah.description.focus();
	  return false;
      }
	}
	</script>
  
		<form name="formtambah" method="post" class="form-horizontal" onSubmit = "return cekdata()">
		
		 <?php foreach ($default as $row): ?>
			<div class="form-group">
				<label class="control-label col-sm-2">
					ID Gps 
				</label>
				<div class="col-sm-8">
					<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>" id="id"  placeholder="Brand GPS">
					<input type="text" class="form-control" name="id" disabled value="<?php echo $row['id']; ?>" id="id"  placeholder="Brand GPS">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Brand GPS 
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="brand_gps" value="<?php echo $row['brand_gps']; ?>" id="brand_gps"  placeholder="Brand GPS">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Model GPS					
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="model_gps" value="<?php echo $row['model_gps']; ?>" id="model_gps" placeholder="Model GPS">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					GPS Name					
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="gps_name" value="<?php echo $row['gps_name']; ?>" id="gps_name" placeholder="GPS Name">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Warranthy Month					
				</label>
				<div class="col-sm-8">
				<input type="number" step="1" class="form-control" name="wanthy_month" value="<?php echo $row['wanthy_month']; ?>" id="wanthy_month" placeholder="Warranth Month">
				
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">
				    	Buy Date 				
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="buy_date" value="<?php echo $row['buy_date']; ?>" id="buy_date" placeholder="Buy Date">
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">
				    	Sold Date 				
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="sold_date" value="<?php echo $row['sold_date']; ?>" id="sold_date" placeholder="Sold Date">
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">
					 Sold To					
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="sold_to" value="<?php echo $row['sold_to']; ?>" id="sold_to" placeholder="Sold To">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					 Foto					
				</label>
				<div class="col-sm-8">
				<input type="file" class="form-control" name="foto" value="<?php echo $row['foto']; ?>" placeholder="foto">
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">
					 Description					
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="description" value="<?php echo $row['description']; ?>" placeholder="foto">	
				</div>
			</div>
			
			<center>
			    <a href="<?php echo base_url().'index.php/gps'?>" class='btn btn-primary'>Kembali</a>
				<button name="tombol_submit" class="btn btn-primary">
					Update
				</button>
				
			</center>
			<?php endforeach; ?>

		</form>
	</div>
</body>
