<html>
  <head>
    <title>Data User</title>
   
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet">
	


  </head>
  <body>

    <div class="container">
      <?php $this->load->view('menu');?> <!--Include menu-->


	<a href="admin/add" class="btn btn-primary">Tambah Data User</a>

	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Password</th>
				<th>Level</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<!-- ISI DATA AKAN MUNCUL DISINI -->
			<?php
			$no = 1; //untuk menampilkan no
			foreach($admin as $row){
				echo "
				<tr>
					<td>$no</td>
					<td>$row[nama]</td>
					<td>$row[pass]</td>
					<td>$row[rolename]</td>
					
					<td>
						<a href='admin/edit/$row[id_user]' class='btn btn-sm btn-info fa fa-edit'> Edit</a>
						<a href='admin/delete/$row[id_user]'  class='btn btn-sm btn-danger fa fa-remove'> Hapus</a>
						<a href='admin/view/$row[id_user]' class='btn btn-sm btn-primary  '>view</a>
					</td>
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
