<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>E-Surat Mercu Buana</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/dist/css/bootstrap.min.css') ?>">
  	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css') ?>">
  	  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css') ?>">
 	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/Ionicons/css/ionicons.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/datatables.net-bs/css/dataTables.bootstrap.min.css')?>">
 	<link rel="stylesheet" href="<?php echo base_url('assets/dist/css/style.css') ?>">

</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url('') ?>"><img src="<?php echo base_url('assets/image/UMB.png')?>" alt="Home" width="75"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="status"><?php echo $this->session->userdata('nama_mahasiswa');?></li>
       <li><a class="status" href="<?php echo site_url('mahasiswa/lihat') ?>">Lihat Status</a></li>
       <li class="status"><?php echo anchor('login?logout=signout', 'keluar');?></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
