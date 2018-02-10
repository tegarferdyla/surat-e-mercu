<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tabel Tugas Akhir
        <medium class="label label-info">Terima</medium>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-home"></i> Beranda</a></li>
        <li><i class="fa fa-building-o"></i> Surat Tugas Akhir</li>
        <li class="active"><i class="fa fa-table"></i> Tabel Surat Tugas Akhir</li>
      </ol>
    </section>
      <!-- Main content -->
<section class="content">
<div class="row">
  <div class="col-xs-12">
    <!-- /.box -->
    <div class="box"><br>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
             <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Cetak Laporan </button><br>
          </div>
        </div>
          <!-- Trigger the modal with a button -->
       
        <!-- Modal -->
            <!-- <?php if($this->session->flashdata('gagal_tanggal')): ?> -->
                  <div class="container">
                    <div class="row">
                      <div class="col-md-10">
                        <div class="alert alert-danger alert-dismissible">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Danger!</strong> This alert box could indicate a dangerous or potentially negative action.
  </div>
                      </div>
                                          </div>
              
                  </div>
            <!-- <?php endif; ?> -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                              <div class="modal-content">
                              <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title" id="myModalLabel">Laporan Surat Selesai</h4>
                              </div>
                              <form action="<?php echo base_url('admin/cetakLAP')?>" method="POST" role="form">
                              <div class="form-group col-md-6">
                              <label for="startdate">Start Date</label>
                              <input type="text" name="startdate" class="form-control datepicker" placeholder="Tanggal awal">
                              </div>
                    <div class="form-group col-md-6">
                          <label for="enddate">End Date</label>
                          <input type="text" name="enddate" class="form-control datepicker" placeholder="Tanggal Akhir">
                    </div>    
                            <div class="modal-footer">       
                            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                    </div>
                    </div>
                              <!-- /<div class="bo">/div>x-header -->
                              <div class="box-body table-responsive">
                                <table id="datatable" class="table table-bordered table-striped">
                                  <thead>
                                    <tr>
                                      <th width="20px">No.</th>
                                      <th>Tanggal</th>
                                      <th>NIM</th>
                                      <th>Nama</th>
                                      <th>E-Mail</th>
                                      <th>Program Studi</th>
                                      <th>Status</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td><?php echo date('d/m/Y');?></td>
                                      <td>4151.......</td>
                                      <td>Mala</td>
                                      <td>Ngok@Crud.com</td>
                                      <td>Persilatan</td>
                                      <td>
                                        <h5 align="center"><strong>SELESAI</strong></h5>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td><?php echo date('d/m/Y');?></td>
                                      <td>4151......</td>
                                      <td>Joss</td>
                                      <td>Ngok@crud.com</td>
                                      <td>Pertanian</td>
                                      <td>
                                        <h5 align="center"><strong>SELESAI</strong></h5>
                                      </td>
                                    </tr>
                                  </tbody>
                                  </table>
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
