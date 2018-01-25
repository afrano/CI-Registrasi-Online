<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="<?= base_url('boot/docs') ?>/favicon.ico">

        <title>Ujian LSP</title>

        <!-- Bootstrap core CSS -->
        <link href="<?= base_url('boot/docs') ?>/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="<?= base_url('boot/docs') ?>/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <link href="<?= base_url('boot/docs/examples/dashboard') ?>/dashboard.css" rel="stylesheet">

        <script src="<?= base_url('boot/docs') ?>/assets/js/ie-emulation-modes-warning.js"></script>

    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Registrasi Online</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="<?= site_url('login/logout') ?>">Logout</a></li>
                    </ul>

                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <?php
                    // Tampilan Menu Admin
                    if ($this->session->userdata('hak_akses') == 1) {
                        ?>
                        <ul class="nav nav-sidebar">
                            <li class="active"><a href="#">Beranda<span class="sr-only">(current)</span></a></li>
                            <li><a href="<?= site_url('user') ?>">List Registrasi</a></li>
                            <li> <a href='<?= site_url('user/tambah_user') ?>'>Input Registrasi</a></li>
                        </ul>
                    <?php } ?>
                    <?php
                    // Tampilan Menu Tamu
                    if ($this->session->userdata('hak_akses') == 2) {
                        ?>
                        <ul class="nav nav-sidebar">
                            <li class="active"><a href="#">Menu User <span class="sr-only">(current)</span></a></li>
                            <li><a href="<?= site_url("profile") ?>"> Edit Profile </a></li>
                        </ul>
                    <?php } ?>

                    <ul class="nav nav-sidebar">
                        <li><a href="<?= site_url('login/logout') ?>">Logout</a></li>
                    </ul>
                </div>
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <h1 class="page-header">Welcome <?= $this->session->userdata('username') ?></h1>
                    <?php
                    if (isset($isi)) {
                        $this->load->view($isi);
                    }
                    ?>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="<?= base_url('boot/docs') ?>/dist/js/bootstrap.min.js"></script>
        <script src="<?= base_url('boot/docs') ?>/assets/js/vendor/holder.min.js"></script>
        <script src="<?= base_url('boot/docs') ?>/assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
