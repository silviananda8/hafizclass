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
            <a href="" class="text-white nav-item nav-link">Tutorial Santri</a>
            <a href="" class=" text-white nav-item nav-link mr-3">Turorial Penguji</a>
            <a href="<?php echo base_url('home/login');?>"  class="btn btn-light tombol-masuk mt-2" type="button" data-toggle="modal" data-target="#exampleModal">Masuk</a>
          </div>
        </div>
      </div>
    </nav>


<div class="bawah-navbar"></div>
<!-- end navbar -->