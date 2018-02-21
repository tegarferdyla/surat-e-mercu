         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah Akun Admin
            </h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-home"></i> Dashboard</a></li>
              <li><i class="fa fa-user"></i> Tambah Akun Admin</li>
            </ol>
            <br>
          </section>
          <!-- Main content -->
          <section class="content">
            <div class="row">
              <div class="col-xs-12">
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title"></h3>
                    <?php echo form_open('', array('class'=>'form-horizontal','method'=>'post') ); ?>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Username</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" name="username" id="username" placeholder="Username ">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Password:</label>
                        <div class="col-sm-10"> 
                          <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="confirmpassword">Confirm Password:</label>
                        <div class="col-sm-10"> 
                          <input type="password" class="form-control" id="confirmpassword" placeholder="Confirm Password">
                        </div>
                      </div>
                      <div class="form-group"> 
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary">Daftar</button>
                          <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                      </div>
                     </div>
                    <?php echo form_close() ?>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </section>
          <!-- /.content -->
        </div>
      </body>
