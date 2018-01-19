<section class="content-header">
	<h1 class="text-center ">Kerja Praktek</h1>
</section>

<div class="form-horizontal">
	<section class="content container">

		<form class='form-test'>
			<div class="box">
				<div class="form-group inline">
					<!-- Nomor Surat -->
				 	<label class="col-md-3" for="nomorsurat">Nomor Surat</label>
				 	<div class="col-md-6">
			 			<input type="text" name="nomorsurat" value="" class="form-control" readonly>
			 		</div>
				</div>

				<div class="form-group inline">
					<!-- Nama Perusahaan -->
				 	<label class="col-md-3" for="namaperusahaan">Nama Perusahaan yang dituju</label>
				 	<div class="col-md-6">
			 			<input type="text" name="namaperusahaan" class="form-control">
			 		</div>
				</div>

				<div class="form-group inline">
					<!-- Orang yang dituju -->
				 	<label class="col-md-3" for="namaygdituju" >Orang yang Dituju</label>
				 	<div class="col-md-6">
			 			<input type="text" name="namefor" class="form-control">
			 		</div>
				</div>

				<div class="form-group inline">
					<!-- Alamat Perusahaan -->
				 	<label class="col-md-3" for="alamat" >Alamat Perusahaan</label>
				 	<div class="col-md-6">
			 			<input type="text" name="alamat" class="form-control">
			 		</div>
				</div>

				<div class="form-group inline">
					<!-- Jumlah Anggota -->
				 	<label class="col-md-3" for="tambah" >Jumlah Anggota </label>
				 	<div class="col-md-1">
					 	<select id="anggota" class="form-control text-center">
					 		<option value="1">1</option>
					 		<option value="2">2</option>
					 		<option value="3">3</option>
					 		<option value="4">4</option>
					 		<option value="5">5</option>
					 	</select>
				 	</div>
				 </div>

				<div class="form-group">
					<!-- Jurusan -->
					<label for="jurusan" class="control-label col-md-4 col-xs-3">Jurusan</label>
					<div class="col-md-4 col-xs-8">
				     	<select name="jurusan" class="form-control" id="jurusan" onload="prodi()">
				     		<option value="" selected>Pilih Jurusan</option>
				      		<option value="415" <?php if($this->session->userdata('jurusan')=='Teknik Informatika'){echo "selected";} ?> >Informatika</option>
				      		<option value="418" <?php if($this->session->userdata('jurusan')=='Sistem Informasi'){echo "selected";}?> >Sistem Informasi</option>
				      	</select>
			      	</div>
				</div>
				
				 	<div class="form-group">
						<!-- NIM Mahasiswa 1-->
						<label class="control-label col-md-4 col-xs-3" for="nim">NIM</label>

						<div class="col-md-1 col-xs-3 col-sm-2">
						 	<input type="text" class="form-control" id="fnim1" value="<?=substr($this->session->userdata('nim'),0,3)?>" readonly>
					 	</div>
					 	

					 	<div class="col-md-3 col-xs-5 col-sm-6">
						 	<input type="text" class="form-control" name="nim1" value="<?=substr($this->session->userdata('nim'),3)?>" onkeypress="return no(event)">
					 	</div>

					</div>

					<div class="form-group">
						<!-- Nama Mahasiswa 1 -->
					 	<label class="control-label col-md-offset-1 col-xs-3" for="nama">Nama Lengkap</label>

					 	<div class="col-md-4 col-xs-8">
				 			<input type="text" name="nama1" class="form-control" value="<?=$this->session->userdata('nama_mahasiswa')?>">
				 		</div>

					</div>

					<div class="form-tambahan ft2">
					<hr>
					<div class="form-group test">
						<!-- NIM Mahasiswa 2 -->
						<label class="control-label col-md-4 col-xs-3" for="nim">NIM</label>

						<div class="col-md-1 col-xs-3 col-sm-2">
						 	<input type="text" class="form-control" id="fnim3" readonly>
					 	</div>

					 	<div class="col-md-3 col-xs-5 col-sm-6">
						 	<input type="text" class="form-control" name="nim2" onkeypress="return no(event)">
					 	</div>

					</div>


					<div class="form-group">
						<!-- Nama Mahasiswa 2 -->
					 	<label class="control-label col-md-offset-1 col-xs-3" for="nama">Nama Lengkap</label>

					 	<div class="col-md-4 col-xs-8">
				 			<input type="text" name="nama2" class="form-control">
				 		</div>

					</div>
					</div>

					<div class="form-tambahan ft3">
					<hr>
					<div class="form-group">
					<!-- NIM Mahasiswa 3 -->
						<label class="control-label col-md-4 col-xs-3" for="nim">NIM</label>

						<div class="col-md-1 col-xs-3 col-sm-2">
						 	<input type="text" class="form-control" id="fnim2" readonly>
					 	</div>

					 	<div class="col-md-3 col-xs-5 col-sm-6">
						 	<input type="text" class="form-control" name="nim3" onkeypress="return no(event)">
					 	</div>

					</div>

					<div class="form-group">
						<!-- Nama Mahasiswa 3 -->
					 	<label class="control-label col-md-offset-1 col-xs-3" for="nama">Nama Lengkap</label>

					 	<div class="col-md-4 col-xs-8">
							<input type="text" name="nama3" class="form-control">
						</div>
					</div>
					</div>

					<div class="form-tambahan ft4">
					<hr>
					<div class="form-group">
						<!-- NIM Mahasiswa 4 -->
						<label class="control-label col-md-4 col-xs-3" for="nim">NIM</label>

						<div class="col-md-1 col-xs-3 col-sm-2">
						 	<input type="text" class="form-control" id="fnim4" readonly>
					 	</div>

			<div class="form-group">
				<!-- NIM -->
				<label class="control-label col-md-4 col-xs-3" for="nim">NIM</label>
				<div class="col-md-1 col-xs-3 col-sm-2">
			 		<input type="text" class="form-control" id="fnim" readonly>
			 	</div>
			 	<div class="col-md-3 col-xs-5 col-sm-6">
			 		<input type="text" class="form-control" name="nim" onkeypress="return no(event)">
			 	</div>
			</div>

			<div class="form-group">
				<!-- Nama -->
			 	<label class="control-label col-md-4 col-xs-3" for="nama">Nama Lengkap</label>
			 	<div class="col-md-4 col-xs-8">
		 			<input type="text" name="nama" class="form-control">
		 		</div>
			</div>

		<div class="box">
			<div class="form-group inline">
				<!-- Nama Perusahaan -->
			 	<label class="col-md-3" for="namaperusahaan">Nama Perusahaan yang dituju</label>
			 	<div class="col-md-6">
		 			<input type="text" name="namaperusahaan" class="form-control">
		 		</div>
			</div>

			<div class="form-group inline">
				<!-- Orang yang dituju -->
			 	<label class="col-md-3" for="namaygdituju" >Orang yang Dituju</label>
			 	<div class="col-md-6">
		 			<input type="text" name="namefor" class="form-control">
		 		</div>
			</div>

			<div class="form-group inline">
				<!-- Alamat Perusahaan -->
			 	<label class="col-md-3" for="alamat" >Alamat Perusahaan</label>
			 	<div class="col-md-6">
		 			<input type="text" name="alamat" class="form-control">
		 		</div>
			</div>

			<div class="form-group">
				<!-- Tambahan Orang -->
			 	<label class="col-md-3" for="tambah" >Tambahan Orang (Jika Perlu)</label>
			 	<button class="btn btn-default btn-add" type='button'>tambah</button>
			 </div>
			
			 	<div class="form-group">
					<!-- NIM Tambahan -->
					<label class="control-label col-md-4 col-xs-3" for="nim">NIM</label>

					<div class="col-md-1 col-xs-3 col-sm-2">
					 	<input type="text" class="form-control" id="fnimadd" readonly>
				 	</div>

				 	<div class="col-md-3 col-xs-5 col-sm-6">
					 	<input type="text" class="form-control" name="nim" onkeypress="return no(event)">
				 	</div>

				</div>

				<div class="form-group">
					<!-- Nama Tambahan -->
				 	<label class="control-label col-md-offset-1 col-xs-3" for="nama">Nama Lengkap</label>

				 	<div class="col-md-4 col-xs-8">
			 			<input type="text" name="nama" class="form-control" style="margin-bottom: 15px">
			 		</div>

				</div>

			
			</div>
		</div>
		<div class="form-group test">
			<div class="text-center col-md-10">
 				<button class="btn btn-default">Tambah <span class="glyphicon glyphicon-plus"></span></button>
 			</div>
 		</div>

			<div class="form-group">
			 	<!-- Button -->
			 	<div class="text-right">
			 		<button class="btn btn-primary">Submit</button>
			 	</div>
			</div>
		</form>
	</section>
</div>

<script>

  function prodi(){
    var jurusan=document.getElementById("jurusan").value;
    document.getElementById("fnim").value=jurusan;
    document.getElementById("fnimadd").value=jurusan;
  }

  function no(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
  }
</script>