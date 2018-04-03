         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>

              Tabel Tugas Akhir
              <medium class="label label-success">Selesai</medium>
            </h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-home"></i> Beranda</a></li>
              <li><i class="fa fa-book"></i> Surat Tugas Akhir</li>
              <li class="active"><i class="fa fa-table"></i> Tabel Tugas Akhir</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="row">
              <div class="col-xs-12">
                <!-- /.box -->

                <div class="box">
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
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1;
                        foreach ($surat as $u) {
                        ?>
                        <tr>
                          <td><?php cetak($no++); ?></td>
                          <td><?php cetak($u->tanggal_selesai);?></td>
                          <td><?php cetak($u->nim); ?></td>
                          <td><?php cetak($u->nama_mahasiswa); ?></td>
                          <td><?php cetak($u->email); ?></td>
                          <td><?php cetak($u->prodi); ?></td>
                          <td>
                            <a class="btn btn-primary col-sm-10 col-sm-offset-1 btn-finish" href="#"><span class="fa fa-check"></span>Take</a>
                          </td>
                        </tr>
                        <?php } ?>
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