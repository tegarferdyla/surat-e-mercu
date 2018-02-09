
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>CSS Ticket</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
<style>
  *{
    font-family: 'Montserrat', sans-serif;
  }
  .body{
    padding: 0 10%;
  }
  .sub-body{
    border: 2px dashed black;
    padding: 2px;
  }
  .bg-blue{
    background: linear-gradient(to right, #1976D2 , #76D7C4);
  }
  .text-gray{
    color: #1976D2;
  }
  .text-white{
    color: white;
  }
  .text-center{
    text-align: center;
  }
  .notice{
    background: black;
    color: white;
    padding: 10px ;
    margin-bottom: 10px;
  }
  table{
    width: 100%;
    border-collapse: collapse;
  }
  table td{
    border: 2px solid #AEB6BF;
    padding: 5px;
  }
</style>
  
</head>
  
<body>
<div class="notice text-center">
  Print dan bawa tiket ini untuk ditukarkan dengan surat Kerja Praktek/Riset Tugas Akhir di Tata Usaha
</div>
<div class="body">
<div class="text-center">
  <span class="fa fa-scissors fa-lg"></span>
</div>
<div class="sub-body">
  <table>

    <tr>
      <td colspan="2" class="bg-blue">
      
        <h2 class="text-center text-white">
          E SURAT | <?=$jenis_surat?>
        </h2>
      </td>
      
      <td class="text-center">
      <img src="<?php echo base_url('assets/image/umb.png') ?>" width="120" alt="">
      </td>
    </tr>

    <tr>
      <td>
      <p class="text-gray">Nomor Surat:</p>
        <hr />
        <h3 class="text-center">
          <?=$no_surat?>
        </h3>
      </td>
      <td>
        <p class="text-gray">Nama Mahasiswa:</p>
        <hr />
        <h3 class="text-center">
          <?="$nama_mahasiswa - $nim"?>
        </h3>
      </td>
      <td>
        <p class="text-gray">Tanggal Diajukan:</p>
        <hr />
        <h3 class="text-center">
          <?=date("d M Y h:i",strtotime($tanggal_diajukan))?>
        </h3>
      </td>

    </tr>
    <tr>
      <td>
      <p class="text-gray">Nama Perusahaan:</p>
        <hr />
        <h3 class="text-center">
          <?=$nama_perusahaan?>
        </h3>
      </td>
      <td colspan="2">
        <p class="text-gray">Alamat Perusahaan:</p>
        <hr />
        <h3 class="text-center">
          <?="$alamat_perusahaan"?>
        </h3>
      </td>
      
    </tr>
  </table>
</div><!-- /.sub-body -->
<div class="text-center">
  <span class="fa fa-scissors fa-lg fa-rotate-180"></span>
</div>

</div>

</body>

</html>
