<html>
  <head>
    <title>Data Gps</title>
   
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet">
	
  </head>
  <body>

    <div class="container">
      <?php $this->load->view('menu');?> <!--Include menu-->

	<a href="gps/add" class="btn btn-primary">Tambah Data GPS</a>
	
	<table class="table table-striped table-bordered">
	
		<thead>
			<tr>
			    <th>No</th>
				<th>Brand GPS</th>
				<th>Model GPS</th>
				<th>GPS Name</th>
				<th>Month</th>
				<th>Buy Date</th>
				<th>Sold Date</th>
				<th>Sold to</th>
			    <th>Foto</th>
				<th>Description<th>
			
				<th colspan="10"><center>Action</center></th>
				
			</tr>
		</thead>
		<tbody>
		
			<?php
			$no = 1; //untuk menampilkan no
			foreach($gps as $row){
				echo "
				<tr>
			        <td>$no</td>
					<td>$row[brand_gps]</td>
					<td>$row[model_gps]</td>
					<td>$row[gps_name]</td>
					<td>$row[wanthy_month]</td>
					<td>$row[buy_date]</td>
					<td>$row[sold_date]</td>
					<td>$row[sold_to]</td>
					<td>$row[foto]</td>
					<td>$row[description]</td>
				
						<td><a href='gps/edit/$row[id]' class='btn btn-sm btn-info fa fa-edit'> Edit</a></td>
						<td><a class='btn btn-sm btn-danger ' href='gps/delete/$row[id]'> Hapus</a></td>
						<td><a href='gps/view/$row[id]' class='btn btn-sm btn-primary '> view</a></td>
						
				</tr>
				";
				$no++;
			}
			
			?>
				
	
		
		</tbody>
	</table>
</div>
</body>
</html>
