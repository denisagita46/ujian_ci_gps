<html>
  <head>
    <title>Sign in login</title>
    
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
  </head>
  <body>

    <div class="container">
        <div class="col-md-4 col-md-offset-4">
          <form class="form-signin" action="<?php echo base_url().'index.php/login/auth'?>" method="post">
            <h2 class="form-signin-heading">Please sign in</h2>
            <?php echo $this->session->flashdata('msg');?>
            <label for="username" class="sr-only">Username</label>
            <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            <div class="checkbox">
              <label>
                <a href="<?php echo base_url().'index.php/anggota/add'?>"> Daftar Anggota
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
          </form>
        </div>
        </div> 


    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>

  </body>
</html>
