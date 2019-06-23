<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">
  <!--Akses Menu Untuk Admin-->
  <?php if($this->session->userdata('akses')=='1'):?>
      <li class="active"><a href="<?php echo base_url().'index.php/page'?>">Admin Panel</a></li>
      <li><a href="<?php echo base_url().'index.php/admin'?>">Manage User </a></li>
      <li><a href="<?php echo base_url().'index.php/gps'?>">Manage GPS Data</a></li>
     
  <!--Akses Menu Untuk User-->
  <?php elseif($this->session->userdata('akses')=='2'):?>
      <li class="active"><a href="<?php echo base_url().'index.php/page'?>">User panel</a></li>
      <li><a href="<?php echo base_url().'index.php/page/change_password'?>">Edit profile</a></li>
      <li><a href="<?php echo base_url().'index.php/gps'?>">Manage GPS Data</a></li>
  
  <?php endif;?>
  </ul>

  <ul class="nav navbar-nav navbar-right">
    <li><a href="<?php echo base_url().'index.php/login/logout'?>" onclick="return confirm('Apakah anda yakin logout')">Sign Out</a></li>
  </ul>
</nav>
