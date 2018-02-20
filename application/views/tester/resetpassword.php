<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>E</b>APPS</a>
    </div>
    <div class="login-box-body">
      <p class="login-box-msg">Masukkan Password Baru Kamu</p>
      <!-- Alert -->
      <?php if ($this->session->flashdata('message')): ?>
      <div class="alert alert-<?php echo $this->session->flashdata('style'); ?> fade in">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong><?php echo $this->session->flashdata('alert'); ?></strong>&nbsp; <?php echo $this->session->flashdata('message'); ?>
      </div>
      <?php endif; ?>
      <!-- End Alert -->
      <?php echo form_open('tester/kirim_reset' ,array('method'=>'post')); ?>
        <div class="form-group has-feedback">
          <input type="text" name="token" id="token" value="<?php echo $token; ?>" hidden>
          <input type="password" name="password" id="password" class="form-control" placeholder="Password Baru">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
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
