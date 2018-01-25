<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url('boot/docs')?>/favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('boot/docs')?>/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?= base_url('boot/docs')?>/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('boot/docs/examples/signin')?>/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?= base_url('boot/docs')?>/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container" >
            <?php
            if(validation_errors()){
                echo "<div class='alert alert-danger'>". validation_errors()."</div>";
            }
            if($this->session->flashdata('pesan_error')){
                echo "<div class='alert alert-danger'>". $this->session->flashdata('pesan_error')."</div>";
            }
            ?>
        <form class="form-signin" action="<?= site_url('login/cek_login')?>" method="POST" >
            <center> <h2 class="form-signin-heading"><b>Halam Login</b></h2><br></center>
        
        
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label><br>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-info btn-block" type="submit">Sign in</button>
        <a href='<?= site_url('daftar')?>' <button class="btn btn-lg btn-warning btn-block" type="submit">Registrasi</a></button>
      </form>
        
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?= base_url('boot/docs')?>/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
