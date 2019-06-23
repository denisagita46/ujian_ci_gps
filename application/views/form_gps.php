<html>
  <head>
    <title>Data Manage GPS</title>
   
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
	<script src="<?php echo base_url().'assets/js/jquery1.js'?>"  type="text/javascript"></script>
	<script src="<?php echo base_url().'assets/js/jquery-ui.js'?>"  type="text/javascript"></script>
	<link href="<?php echo base_url().'assets/js/jquery-ui.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet">
	
  </head>
  <body>
  
    <div class="container">
      <?php $this->load->view('menu');?> <!--Include menu-->
		<h1><?=$tipe?> Form Data GPS</h1>
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
		
			<div class="form-group">
				<label class="control-label col-sm-2">
					Brand GPS 
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="brand_gps" id="brand_gps" placeholder="Brand GPS">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Model GPS					
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="model_gps" id="model_gps" placeholder="Model GPS">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					GPS Name					
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="gps_name" id="gps_name" placeholder="GPS Name">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Warranthy Month					
				</label>
				<div class="col-sm-8">
				<input type="number" step="1"  class="form-control" name="wanthy_month" id="wanthy_month" placeholder="Warranthy Month">
				
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">
				    	Buy Date 				
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="buy_date" id="buy_date" placeholder="Buy Date">
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">
				    	Sold Date 				
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="sold_date" id="sold_date" placeholder="Sold Date">
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">
					 Sold To					
				</label>
				<div class="col-sm-8">
				<input type="text" class="form-control" name="sold_to" id="sold_to" placeholder="Sold To">
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">
					 Foto					
				</label>
				<div class="col-sm-8">
				<input type="file" class="form-control" name="foto" placeholder="foto">
				</div>
			</div>
			
			<div class="form-group">
				<label class="control-label col-sm-2">
					 Description					
				</label>
				<div class="col-sm-8">
				<textarea class="form-control" name="description" id="description" placeholder="Description"></textarea>
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