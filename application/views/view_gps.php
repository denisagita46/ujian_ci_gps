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
		<h1><?=$tipe?> View GPS</h1>
 
		<form name="formtambah" method="post" class="form-horizontal" onSubmit = "return cekdata()">
		
		 <?php foreach ($default as $row): ?>
			<div class="form-group">
				<label class="control-label col-sm-2">
					ID Gps 
				</label>
				<div class="col-sm-8">
					<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>" id="id" placeholder="Brand GPS">
					<input type="text" class="form-control" name="id" disabled value="<?php echo $row['id']; ?>" id="id"  placeholder="Brand GPS">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Brand GPS 
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="brand_gps" value="<?php echo $row['brand_gps']; ?>" id="brand_gps" readonly="readonly"  placeholder="Brand GPS">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Model GPS 
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="model_gps" value="<?php echo $row['model_gps']; ?>" id="model_gps" readonly="readonly"  placeholder="Brand GPS">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					GPS Name 
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="gps_name" value="<?php echo $row['gps_name']; ?>" id="gps_name" readonly="readonly"  placeholder="Brand GPS">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Warranthy Month
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="wanthy_month" value="<?php echo $row['wanthy_month']; ?>" id="wanthy_month" readonly="readonly"  placeholder="Brand GPS">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Buy Date
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="buy_date" value="<?php echo $row['buy_date']; ?>" id="buy_date" readonly="readonly"  placeholder="Brand GPS">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					Sold Date
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="sold_date" value="<?php echo $row['sold_date']; ?>" id="sold_date" readonly="readonly"  placeholder="Brand GPS">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					 Sold To
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="sold_to" value="<?php echo $row['sold_to']; ?>" id="sold_to" readonly="readonly"  placeholder="Brand GPS">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					 Foto
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="foto" value="<?php echo $row['foto']; ?>" id="foto" readonly="readonly"  placeholder="Foto">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">
					  Description
				</label>
				<div class="col-sm-8">
					<input type="text" class="form-control" name="description" value="<?php echo $row['description']; ?>" id="description" readonly="readonly"  placeholder="Brand GPS">
				</div>
			</div>
			<td><a href="<?php echo base_url().'index.php/gps'?>" class='btn btn-sm btn-info'>Kembali</a></td>
			
			<?php endforeach; ?>
		</form>
	</div>
</body>
