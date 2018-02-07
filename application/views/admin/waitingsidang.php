<div class="content-wrapper">
  <section class="content-header">
    <h1>Tabel Sidang
      <span class="label label-primary">Menunggu</span>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('admin') ?>"><i class="fa fa-home"></i> Beranda</a></li>
      <li><i class="fa fa-balance-scale"></i> Surat Sidang</li>
      <li class="active"><i class="fa fa-table"></i> Tabel Surat Sidang</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Surat Sidang yang Sedang Menunggu</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="datatable" class="table table-responsive table-bordered table-striped">
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
                <tr>
                  <td>1</td>
                  <td>DD-MM-YYYY</td>
                  <td>418xxxxxxxx</td>
                  <td>Ival</td>
                  <td>Sistem Informasi</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn  btn-primary">Proses</button>
                      <button type="button" class="btn  btn-default">Detail</button>
                      <button type="button" class="btn  btn-danger">Tolak</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>DD-MM-YYYY</td>
                  <td>415XXXXXXXX</td>
                  <td>Ines</td>
                  <td>Teknik Informatika</td>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-primary" role="button">Proses</a>
                      <a href="#" class="btn btn-default" role="button">Detail</a>
                      <a href="#" class="btn btn-danger" role="button">Tolak</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>DD-MM-YYYY</td>
                  <td>415XXXXXXXX</td>
                  <td>Ilham</td>
                  <td>Teknik Informatika</td>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-primary" role="button">Proses</a>
                      <a href="#" class="btn btn-default" role="button">Detail</a>
                      <a href="#" class="btn btn-danger" role="button">Tolak</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>DD-MM-YYYY</td>
                  <td>418XXXXXXXX</td>
                  <td>Ibnu</td>
                  <td>Sistem Informasi</td>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-primary" role="button">Proses</a>
                      <a href="#" class="btn btn-default" role="button">Detail</a>
                      <a href="#" class="btn btn-danger" role="button">Tolak</a>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>DD-MM-YYYY</td>
                  <td>418xxxxxxxx</td>
                  <td>Ival</td>
                  <td>Sistem Informasi</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn  btn-primary">Proses</button>
                      <button type="button" class="btn  btn-default">Detail</button>
                      <button type="button" class="btn  btn-danger">Tolak</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>DD-MM-YYYY</td>
                  <td>415XXXXXXXX</td>
                  <td>Ines</td>
                  <td>Teknik Informatika</td>
                  <td>
                    <div class="btn-group">
                      <a href="#" class="btn btn-primary" role="button">Proses</a>
                      <a href="#" class="btn btn-default" role="button">Detail</a>
                      <a href="#" class="btn btn-danger" role="button">Tolak</a>
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
                      <a href="#" class="btn btn-default" role="button">Detail</a>
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
                      <a href="#" class="btn btn-default" role="button">Detail</a>
                      <a href="#" class="btn btn-danger" role="button">Tolak</a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>

            <!-- Send Email -->
            <div class="col-md-9">
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
                      <p>
                        But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
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
                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee
                      </p>
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
                <div class="box-footer">
                  <div class="pull-right">
                    <button type="button" class="btn btn-default"><i class="fa fa-pencil"></i> Draft</button>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                  </div>
                  <button type="reset" class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
                </div>
              </div>
            </div>
            <!-- Akhir Send Email -->

          </div>
        </div>
      </div>
    </div>
  </section>
</div>
</body>
