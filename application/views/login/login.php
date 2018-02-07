   <div class="container-fluid">
     <div class="container">

       
       <div class="row">
         <div class="col-md-4 col-md-offset-4 box-login">
           <?php echo form_open('login/ceklogin'); ?>
            <?php if($this->session->flashdata('info')): ?>
              <div class="row">
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    Maaf username/nim dan password salah
                </div>
              </div>
              <?php elseif ($this->session->flashdata('info_berhasil')):?>
                 <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i>Info</h4>
                Berhasi Mendaftar Akun
            </div>
            <?php endif; ?>            
             <h3 class="text-center title-login">Silahkan Login Dengan menggunakan</h3>
           <h3 class="text-center title-login">NIM/E-MAIL</h3>
              <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="NIM/email" name="username">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                  <input type="submit" class="btn btn-primary btn-block btn-flat" value="Login" />
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
     
   




