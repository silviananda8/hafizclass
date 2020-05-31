<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/bootstrap.min.css">
     <!--=== FontAwesome CSS ===-->
    <link href="<?= base_url(''); ?>assets/fontawesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- my CSS -->
    <link rel="stylesheet" href="<?= base_url(''); ?>style.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/css/jquery-ui.css">


    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<!-- navbar -->

<nav class="navbar navbar-expand-lg fixed-top navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url('') ?>">
         <i class="fas fa-star-and-crescent"></i>
          Havizclass
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a href="#santri" class="text-white nav-item nav-link dropdown-item mr-3"><i class="fas  fa-user-graduate"></i>
 Tutorial Santri</a>
            <a href="#penguji" class=" text-white nav-item nav-link mr-3 dropdown-item"><i class="fas fa-chalkboard-teacher"></i>
 Turorial Penguji</a>
            <a href="<?php echo site_url('home/login');?>"  class="btn btn-light tombol-masuk mt-2">Masuk</a>
          </div>
        </div>
      </div>
    </nav>


<div class="bawah-navbar"></div>
<!-- end navbar -->