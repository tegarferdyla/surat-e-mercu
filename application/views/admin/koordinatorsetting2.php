<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>Students Example</title> 
   </head> 
   <body> 
        <table border=1 style=border-collapse:collapse width="50%">
          <tr style=background:grey>
             <th>NIK</th>
             <th>Nama</th>
             <th>Jabatan</th>
             <th>Status</th>
          </tr>
          <?php
          foreach($data as $d) { 
          ?>
          <tr>
          <td><?php echo $d['nik']?></td>
          <td><?php echo $d['nama_dosen']?></td>
          <td><?php echo $d['jabatan']?></td>
          <td><?php echo $d['prodi']?></td>
       </tr>
          <?php }
          ?>
        </table>
   </body>
</html>