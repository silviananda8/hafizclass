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

<nav class="navbar bg-info navbar-expand-lg navbar-dark">
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
        <a class="nav-item nav-link text-white mr-3" href="<?= site_url('penguji/index/'.$kd=1);?>"><i class="fas fa-clipboard-list"></i>
  Beranda</a>
        <a class="nav-item nav-link text-white mr-3" href="<?= base_url('penguji/semuaPenguji');?>"><i class="fas fa-chalkboard-teacher"></i>
  Daftar Penguji</a>
        <a class="nav-item nav-link text-white mr-3" href="<?= base_url('penguji/semuaSantri');?>"><i class="fas fa-user-graduate"></i>
  Daftar Santri</a>
        <!-- Example single danger button -->
        <div class="btn-group">
          <button type="button" class="btn text-white dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-house-user"></i>
  
            Ust. <?= $this->session->userdata('nama_penguji');?>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="<?= base_url('penguji/profilPenguji');?>"><i class="fas fa-user-alt">  </i>  Profil Saya</a>
            <a class="dropdown-item" href="<?= base_url('penguji/tambahSantri');?>"><i class="fas fa-user-graduate"></i>
  Tambah Santri</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?= base_url('c_login/logout');?>"><i class="fas fa-sign-out-alt"></i>  Keluar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

<!-- <div class="bawah-navbar"></div>
 --><!-- end navbar -->
 <section class="bg-light pb-5">
