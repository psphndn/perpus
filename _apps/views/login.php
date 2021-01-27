<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="id">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="description" content="Sistem Informasi Gereja Toraja">
  <meta name="author" content="Pdt. Budi P. Rante, S.Th">
  <meta name="keyword" content="">

  <link rel="shortcut icon" href="<?php echo base_url('_library/admin/img/logo/logo-gt-small.png') ?>">

  <title><?php echo $title ?></title>

  <link href="<?php echo base_url('_library/admin/css/bootstrap.min.css') ?>" rel="stylesheet">

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <link href="<?php echo base_url('_library/admin/css/animate.css') ?>" rel="stylesheet">
  
  <link href="<?php echo base_url('_library/admin/css/style.css') ?>" rel="stylesheet">

</head>

<body class="gray-bg">

	<div class="loginColumns animated fadeInDown">
    <div class="row"><br>
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <div class="ibox-content">
          <div class="text-center">
            <span><img alt="logo" class="img-circle" src="<?php echo base_url('_library/admin/img/logo/logo-gt-small.png') ?>" /></span>
            <h2 class="font-bold">Welcome to SIGET</h2>
            <h4>Sistem Informasi Gereja Toraja</h4>
          </div>

          <?php if($this->session->userdata('info')): ?>
            <div class="alert alert-warning text-center" role="alert">
              <span>User Name atau Password Anda Salah</span>
            </div>
          <?php endif; ?>

          <?php echo form_open('', 'class="m-t-0" autocomplete="off"'); ?>

          <!-- <form class="m-t" role="form" action="index.html"> -->
            <?php echo form_error('user_name', '<span class="help-block" style="color: red">', '</span>'); ?>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user"></i></span>
              <input name="user_name" class="form-control" placeholder="Username">
            </div><br>

            <?php echo form_error('userpass', '<span class="help-block" style="color: red">', '</span>'); ?>
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input name="userpass" type="password" class="form-control" placeholder="Password">
            </div><br>

            <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
          <?php echo form_close(); ?>
          
          <div class="row">
            <div class="col-md-12">
              <p class="m-t"><small>© BPS Gereja Toraja | <a href="https://apps-gerejatoraja.org/" target="blank">By : Biro Inforkom Gereja Toraja</a></small></p>
            </div>
          </div>

        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>

</body>

</html>