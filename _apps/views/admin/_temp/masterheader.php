<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="id">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Sistem Informasi Gereja Toraja">
  <meta name="author" content="Pdt. Budi P. Rante, S.Th">
  <meta name="keyword" content="">

  <link rel="shortcut icon" href="<?php echo base_url('_library/admin/img/logo/logo-gt-small.png') ?>">

  <title><?php echo $title ?></title>

  <link href="<?php echo base_url('_library/admin/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <?php if ($this->uri->segment(2) === 'home') : ?>
  <!-- Toastr style -->
  <link href="<?php echo base_url('_library/admin/css/plugins/toastr/toastr.min.css') ?>" rel="stylesheet">
  <?php endif; ?>

  <!-- Gritter -->
  <link href="<?php echo base_url('_library/admin/js/plugins/gritter/jquery.gritter.css') ?>" rel="stylesheet">

  <link href="<?php echo base_url('_library/admin/css/plugins/datapicker/datepicker3.css') ?>" rel="stylesheet">

  <!-- Data Tables -->
  <link href="<?php echo base_url('_library/admin/css/plugins/dataTables/datatables.min.css') ?>" rel="stylesheet">

  <!-- Form Advance -->
  <link href="<?php echo base_url('_library/admin/css/plugins/chosen/bootstrap-chosen.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('_library/admin/css/plugins/jasny/jasny-bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('_library/admin/css/plugins/codemirror/codemirror.css') ?>" rel="stylesheet">

  <link href="<?php echo base_url('_library/admin/css/animate.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('_library/admin/css/style.css') ?>" rel="stylesheet">

</head>
<body>

<div id="wrapper">
    
    <?php $this->load->view('admin/_temp/admin-nav-left'); ?>
    
    <?php $this->load->view('admin/_temp/admin-nav-top'); ?>