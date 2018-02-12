 <div class="container-fluid">
     <div class="container">

       
       <div class="row">
         <div class="col-md-4 col-md-offset-4 box-login">
           <?php echo form_open('login/ceklogin'); ?> 
           <h3 class="text-center" style="color: white;  ">1</h3>
             <h3 class="text-center title-login">Masukkan Alamat E-Mail Anda</h3>
              <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Masukkan Email" name="username">
              </div>
                <div class="form-group has-feedback">
                  <a href="<?php echo site_url('login/resetpassword1') ?>" class="btn btn-danger btn-block"><b>LANJUT</b><i class="fas fa-arrow-circle-right pull-right fa-lg"></i></a>
                </div>
         </div>
       </div>
       <div class="row">
                <!-- /.col -->
                
                <!-- /.col -->
              </div>
          </div>
          <?php echo form_close(); ?>
     </div>
          
              
          <!-- /.login-box-body -->
        



<script src="<?php echo base_url('assets/plugins/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js')?>" ></script>
</body>
</html>