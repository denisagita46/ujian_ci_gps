<html>
  <head>
    <title>Masuk</title>
   
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
	
  </head>
  <body>
    <div class="container">
      <?php $this->load->view('menu');?> 
      <div class="container">
        <div class="row">
          <h2>Selamat Datang <?php echo $this->session->userdata('ses_nama');?></h2>
        </div>
		<center>
		<div class="row">
          <h2>Program Pengajuan Pinjaman Koperasi</h2>
        </div>
		</center>
      </div>
    </div>
	
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>

  </body>
</html>
