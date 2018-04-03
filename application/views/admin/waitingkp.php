<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Tabel Kerja Praktek
			<span class="label label-primary">Menunggu</span>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo base_url('admin') ?>">
					<i class="fa fa-home"></i> Beranda
				</a>
			</li>
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
				<?php elseif($this->session->flashdata('infotolak')): ?>
					<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-check"></i>Info</h4>
						Berhasil Merubah Status Kerja Praktek menjadi Tolak
					</div>
				<?php endif ?>
				<div class="box">
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
								foreach ($surat as $u) {?>
								<tr>
									<td>
										<?php cetak($no++); ?>
									</td>
									<td>
										<?php cetak(date('d-M-Y',strtotime($u->tanggal_diajukan)))  ?>
									</td>
									<td>
										<?php cetak($u->nim); ?>
									</td>
									<td>
										<?php cetak($u->nama_mahasiswa); ?>
									</td>
									<td>
										<?php cetak($u->prodi); ?>
									</td>
									<td class="text-center">
										<button class="btn btn-primary" data-href="<?=site_url(" surat/ubahProsesKP/$u->id_surat")?>" data-toggle="modal" data-target="#confirm" > Proses</button>
										<a href="<?php echo site_url(" admin/detailkp/$u->id_surat") ?>" class="btn btn-default">Detail</a>
										<a href="<?php echo site_url(" admin/tolakemailkp/$u->id_surat") ?>" class="btn btn-danger">TOLAK</a>
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
		</div>
	</section>
	<!-- /.row -->
</div>

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

<div class="modal fade" id="confirmtolak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
			</div>
			<div class="modal-body">
				<p>Apakah anda yakin ingin menolak surat tersebut</p>
				<p class="debug-url"></p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<a class="btn btn-danger btn-ok">Tolak</a>
			</div>
		</div>
	</div>
</div>