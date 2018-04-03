<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="login-box">
	   <div class="login-logo">
	     <a href="../../index2.html"><b>E</b>APPS</a>
	   </div>
	   <div class="login-box-body">
	     <p class="login-box-msg">Masukkan Alamat Email Kamu</p>
	     <!-- Alert -->
	     <?php if ($this->session->flashdata('message')): ?>
	     <div class="alert alert-<?php echo $this->session->flashdata('style'); ?> fade in">
	       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	       <strong><?php echo $this->session->flashdata('alert'); ?></strong>&nbsp; <?php echo $this->session->flashdata('message'); ?>
	     </div>
	     <?php endif; ?>
	     <!-- End Alert -->
	    <?php echo form_open('tester/kirim_email',array('method'=>'post')); ?>
	       <div class="form-group has-feedback">
	         <input type="mail" name="email" id="email" class="form-control" placeholder="Email">
	         <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	       </div>
	       <div class="row">
	         <div class="col-xs-8">
	         </div>
	         <div class="col-xs-4">
	           <button type="submit" class="btn btn-primary btn-block btn-flat">Lanjutkan</button>
	         </div>
	       </div>
	     <?php echo form_close(); ?>
	   </div>
	</div>
</body>
</html>