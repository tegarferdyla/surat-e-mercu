          <br />
          <!-- CHART -->
          <div class="row">
            <!-- CHART STATUS LAPORAN -->
            <div class="col-xs-4">
                <div class="box-body">
                  <canvas id="pieChart" style="height:250px"></canvas>
                </div>
            </div>
          <?php
              // JUMLAH KESELURUHAN MAHASISWA TEKNIK INFORMATIKA YANG DAFTAR 
              $jumlahTI = $tiwaiting + $tiproses + $tifinish + $titake + $titolak; 

              // JUMLAH KESELURUHAN MAHASISWA SISTEM INFORMASI  YANG DAFTAR 
              $jumlahSI = $siwaiting + $siproses + $sifinish + $sitake + $sitolak;
          ?>
          <div class="col-xs-4">
            <div class="box box-primary">
            <div class="row">
              <div class="col-xs-1">
                <h4 style="color: #00a65a">&#9632</h4>
              </div>
              <div class="col-xs-5">
                <h4>Menunggu <?=$kpwaiting?></h4>
              </div>
              <div class="col-xs-1">
                <h4 style="color: #f56954">&#9632</h4>
              </div>
              <div class="col-xs-5">
                <h4>Ditolak <?=$kptolak?></h4>
              </div>
            </div>
            
            <div class="row">
              <div class="col-xs-1">
                <h4 style="color: #f39c12">&#9632</h4>
              </div>
              <div class="col-xs-5">
                <h4>Proses <?=$kpproses?></h4>
              </div>
              <div class="col-xs-1">
                <h4 style="color: #E219B7">&#9632</h4>
              </div>
              <div class="col-xs-5">
                <h4>Teknik Informatika <?=$jumlahTI?></h4>
              </div>
            </div>
            
            <div class="row">
              <div class="col-xs-1">
                <h4 style="color: #00c0ef">&#9632</h4>
              </div>
              <div class="col-xs-5">
                <h4>Selesai <?=$kpfinish?></h4>
              </div>
              <div class="col-xs-1">
                <h4 style="color: #ffff99">&#9632</h4>
              </div>
              <div class="col-xs-5">
                <h4>Sistem Informasi <?=$jumlahSI?></h4>
              </div>
            </div>
            
            <div class="row">
              <div class="col-xs-1">
                <h4 style="color: #3c8dbc">&#9632</h4>
              </div>
              <div class="col-xs-9">
                <h4>Ambil <?=$kptake?></h4>
              </div>
            </div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

            <!-- CHART JURUSAN -->
            <div class="col-xs-4">
                <div class="box-body">
                  <canvas id="pieChart2" style="height:250px"></canvas>
                </div>
            </div>
          </div>

          <!-- TABEL -->
          <div class="container-fluid">
            <div class="row">
              <div class="table-responsive">  
                <div class="col-md-4">
                  <h3 class="box-title" style="color: #00a65a">Menunggu</h3>       
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Prodi</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $no=1; ?>
                      <?php foreach ($suratwaiting as $surat): ?>
                        <tr>
                          <td><?=$no++?></td>
                          <td><?=$surat['nim']?></td>
                          <td><?=$surat['nama_mahasiswa']?></td>
                          <td><?=$surat['email']?></td>
                          <td><?=$surat['prodi']?></td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-4">
                  <h3 class="box-title" style="color: #f39c12">Proses</h3>       
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Prodi</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $no=1; ?>
                      <?php foreach ($suratproses as $surat): ?>
                        <tr>
                          <td><?=$no++?></td>
                          <td><?=$surat['nim']?></td>
                          <td><?=$surat['nama_mahasiswa']?></td>
                          <td><?=$surat['email']?></td>
                          <td><?=$surat['prodi']?></td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-4">
                  <h3 class="box-title" style="color: #ffff99">Sistem Informasi</h3>       
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Prodi</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php $no=1; ?>
                      <?php foreach ($mahasiswaSI as $surat): ?>
                        <tr>
                          <td><?=$no++?></td>
                          <td><?=$surat['nim']?></td>
                          <td><?=$surat['nama_mahasiswa']?></td>
                          <td><?=$surat['email']?></td>
                          <td><?=$surat['prodi']?></td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="table-responsive">  
                <div class="col-md-4">
                  <h3 class="box-title" style="color: #00c0ef">Selesai</h3>       
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Prodi</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php $no=1; ?>
                      <?php foreach ($suratfinish as $surat): ?>
                        <tr>
                          <td><?=$no++?></td>
                          <td><?=$surat['nim']?></td>
                          <td><?=$surat['nama_mahasiswa']?></td>
                          <td><?=$surat['email']?></td>
                          <td><?=$surat['prodi']?></td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-4">
                  <h3 class="box-title" style="color: #3c8dbc">Ambil</h3>       
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Prodi</th>
                        </tr>
                    </thead>
                    <tbody>
                     <?php $no=1; ?>
                      <?php foreach ($surattake as $surat): ?>
                        <tr>
                          <td><?=$no++?></td>
                          <td><?=$surat['nim']?></td>
                          <td><?=$surat['nama_mahasiswa']?></td>
                          <td><?=$surat['email']?></td>
                          <td><?=$surat['prodi']?></td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-4">
                  <h3 class="box-title" style="color: #E219B7">Teknik Informatika</h3>       
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Prodi</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $no=1; ?>
                      <?php foreach ($mahasiswaTI as $surat): ?>
                        <tr>
                          <td><?=$no++?></td>
                          <td><?=$surat['nim']?></td>
                          <td><?=$surat['nama_mahasiswa']?></td>
                          <td><?=$surat['email']?></td>
                          <td><?=$surat['prodi']?></td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="table-responsive">  
                <div class="col-md-4">
                  <h3 class="box-title" style="color: #f56954">Ditolak</h3>       
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Prodi</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $no=1; ?>
                      <?php foreach ($surattolak as $surat): ?>
                        <tr>
                          <td><?=$no++?></td>
                          <td><?=$surat['nim']?></td>
                          <td><?=$surat['nama_mahasiswa']?></td>
                          <td><?=$surat['email']?></td>
                          <td><?=$surat['prodi']?></td>
                        </tr>
                      <?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

            

 