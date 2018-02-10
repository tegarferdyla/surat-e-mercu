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
<?php  

function tanggal_to_unix($tanggal)
{
  return strtotime($tanggal);
}

@$get_action = $_POST['action'];
@$get_tanggal_1 = $_POST['startdate'];
@$get_tanggal_2 = $_POST['enddate'];

if($get_action == 'submit')
{
  // convert data tanggal to unix
  $unix_tanggal_1 = tanggal_to_unix($get_tanggal_1);
  $unix_tanggal_2 = tanggal_to_unix($get_tanggal_2);

  if($unix_tanggal_1 > $unix_tanggal_2)
  {
    $result_cek_tanggal = '<div class="alert alert-danger" width="250">Tanggal 1 tidak boleh lebih besar dari tanggal 2</div>';
  }
  else
  {
    $result_cek_tanggal = '<div class="alert alert-info" width="250">Validasi oke</div>';   
  }
}
?>
                <div class="box"><br>
                  <div class="container">
  <!-- Trigger the modal with a button -->
  <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Cetak Laporan</button><br><?php echo @$result_cek_tanggal; ?>
<!-- Modal -->
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
            <input type="text" name="enddate" class="form-control datepicker" placeholder="Tanggal awal">
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
      </body><script>
      $(function() {
  $('#datetimepicker1').datetimepicker({
    language: 'pt-BR'
  });
    $('#datetimepicker2').datetimepicker({
    language: 'pt-BR'
  });
});
</script>