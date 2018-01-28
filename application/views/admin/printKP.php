<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Surat Kerja Praktek </title>
	<link rel="stylesheet" href="<?php echo base_url('assets/plugins/bootstrap/dist/css/bootstrap.min.css') ?>">
	 <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/style.css') ?>">
</head>
<body class="printkpta">
	<div class="container-fluid printKPTA">
		<div class="container kopsurat">
			<div class="row">
				<div class="col-xs-12">
					<span class="hidden-print">
					<img src="<?php echo base_url('assets/image/UMB.png') ?>" width="200" alt="">
				</span>
					<span class="pull-right tanggal">Jakarta, <?=date('d-F-Y',strtotime($surat['tanggal_diajukan']))?></span>
			</div>
			</div>
			<span class="hidden-print warning"><h1 class="text-center">Harus Memakai Browser CHROME!</h1></span>
		</div>


		<div class="container idsurat">
			<div class="row">
				<div class="col-xs-12"><p class="nomor"><?=$surat['no_surat']; ?></p></div>
			</div>
			<div class="row">
				<div class="col-xs-12"><p class="lampiran">Lampiran	:------------</p></div>
			</div>
			<div class="row">
				<div class="col-xs-12"><p class="perihal">Perihal	:Kerja Praktek</p></div>
			</div>
		</div>

		<div class="container kepadayth">
			<p id="kepadayth">Kepada Yth,</p>
			<p id="kepadayth"><?=$surat['nama_perusahaan']?></p>
			<p id="kepadayth-1"><?=$surat['alamat_perusahaan']?></p>
			<p id="kepadayth-1">--kota--</p>
			<p id="kepadayth"><?=$surat['orang_dituju']?></p>
			<p id="kepadayth">--Jabatan--</p>
		</div>

		<div class="container isipesan">
			<p>Dengan Hormat,</p>
			<p class="text-justify">
				Dalam rangka menambah wawasan dan pengetahuan mahasiswa. Sehubungan dengan hal tersebut, bersama ini kami memohon bantuan Bapak/Ibu
			agar dapat kiranya memberikan kesempatan kepada mahasiswa/i untuk mengikuti Kerja Praktek di perusahaan Bapak/Ibu Pimpin. Adapun nama mahasiswa tersebut sebagai berikut:</p>
			<div class="row">			
			<table class="table table-borderless col-xs-12">
				
				<tr class="judul" style="border-bottom: 2px dashed!important;">
					<th>No.</th>
					<th>Nama</th>
					<th>NIM</th>
				</tr>
				<?php $no=1; ?>
				<?php foreach ($mahasiswa as $vmahasiswa): ?>
					<tr>
						<td><?=$no++?></td>
						<td><?=$vmahasiswa['nama_mahasiswa']?></td>
						<td><?=$vmahasiswa['nim']?></td>
					</tr>
				<?php endforeach ?>

			</table>
			<p class="text-justify">Demikian Surat permohonan kami, atas perhatian dan bantuan Bapak/Ibu kami ucapkan terima kasih.</p>
			</div>
		</div>

		<div class="container ttd">
			<p>Hormat Kami,</p>
			<p>Fakultas Ilmu Komputer</p>
			<p><b>Sek. Program Studi <?=$surat['prodi']?></b></p>
			<br><br><br>
			<p><b><u><?=$surat['nama_dosen']?></u></b></p>
			<p class="koordinator">Koordinator Kerja Praktek</p>

		</div>
	</div>
</body>
</html>