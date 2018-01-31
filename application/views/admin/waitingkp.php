         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tabel Kerja Praktek
              <span class="label label-primary">Waiting</span>
            </h1>
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-home"></i> Dashboard</a></li>
              <li><i class="fa fa-building-o"></i> Surat Kerja Praktek</li>
              <li class="active"><i class="fa fa-table"></i> Tabel Surat Kerja Praktek</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="row">
              <div class="col-xs-12">
                <!-- /.box -->
                <?php if ($this->session->flashdata('info')): ?>
                 <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-check"></i>Info</h4>
                  Berhasil Merubah Status Kerja Praktek menjadi Proses
                </div>  
                <?php endif ?>
                <div class="box">
                  <div class="box-header">
                    <h3 class="box-title">Table Waiting</h3>
                  </div>
                  <!-- /<div class="bo">/div>x-header -->
                    <div class="box-body table-responsive">
                      <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Program Studi</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; ?>
                          <?php 
                          foreach ($surat as $u) {
                          ?>
                          <tr>
                           <td><?php echo $no++; ?></td>
                            <td><?php echo date('d-M-Y',strtotime($u->tanggal_diajukan))  ?></td>
                            <td><?php echo $u->nim; ?></td>
                            <td><?php echo $u->nama_mahasiswa; ?></td>
                            <td><?php echo $u->prodi; ?></td>
                            <td>
                              <div class="btn-group">
                               <button class="btn btn-primary" data-href="<?=site_url("surat/ubahProsesKP/$u->id_surat")?>" data-toggle="modal" data-target="#confirm" >
                                Proses
                              </button>
                                <a href="<?php echo site_url("admin/tolakemailkp") ?>" class="btn btn-default">Detail</a>
                                <a href="<?php echo site_url("admin/tolakemailkp") ?>" class="btn btn-danger">TOLAK</a>
                              </div>
                            </td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>DD-MM-YYYY</td>
                  <td>415XXXXXXXX</td>
                  <td>Ilham</td>
                  <td>Teknik Informatika</td>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-primary" role="button">Proses</a>
                      <a href="<?php echo base_url('admin/detailkp') ?>" class="btn btn-default" role="button">Detail</a>
                      <a href="#" class="btn btn-danger" role="button">Tolak</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>DD-MM-YYYY</td>
                  <td>418XXXXXXXX</td>
                  <td>Ibnu</td>
                  <td>Sistem Informasi</td>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-primary" role="button">Proses</a>
                      <a href="<?php echo base_url('admin/detailkp') ?>" class="btn btn-default" role="button">Detail</a>
                      <a href="#" class="btn btn-danger" role="button">Tolak</a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div class="col-md-9"><!-- Send Email -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Compose New Message</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <input class="form-control" placeholder="To:">
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Subject:">
                </div>
                <div class="form-group">
                  <textarea id="compose-textarea" class="form-control" style="height: 300px">
                    <h1><u>Heading Of Message</u></h1>
                    <h4>Subheading</h4>
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                      was born and I will give you a complete account of the system, and expound the actual teachings
                      of the great explorer of the truth, the master-builder of human happiness. No one rejects,
                      dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know
                      how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again
                      is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,
                      but because occasionally circumstances occur in which toil and pain can procure him some great
                      pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,
                      except to obtain some advantage from it? But who has any right to find fault with a man who
                      chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that
                      produces no resultant pleasure? On the other hand, we denounce with righteous indignation and
                      dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so
                    blinded by desire, that they cannot foresee</p>
                    <ul>
                      <li>List item one</li>
                      <li>List item two</li>
                      <li>List item three</li>
                      <li>List item four</li>
                    </ul>
                    <p>Thank you,</p>
                    <p>John Doe</p>
                  </textarea>
                </div>
                <div class="form-group">
                  <div class="btn btn-default btn-file">
                    <i class="fa fa-paperclip"></i> Attachment
                    <input type="file" name="attachment">
                  </div>
                  <p class="help-block">Max. 32MB</p>
                </div>
              </div>
              <!-- /.row -->
            </section>
            <!-- /.content -->
          </div>
        </body>

         <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
                </div>
            
                <div class="modal-body">
                    <p>Apakah anda yakin ingin mengubah dari waiting ke proses </p>
                    <p class="debug-url"></p>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary btn-ok">Konfirmasi</a>
                </div>
            </div>
        </div>
    </div>