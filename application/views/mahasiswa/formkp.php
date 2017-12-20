<section class="content-header">
	<h1 class="text-center">Form Kerja Praktek</h1>
</section>

<div class="form-horizontal">
	<section class="content container"">
		<div class="row">
			<div class="form-group inline">
				<!-- Jurusan -->
				<label for="jurusan" class="control-label col-md-4">Jurusan</label>
				<div class="col-md-4">
		     	<select name="jurusan" class="form-control">
		      		<option value="TI">Informatika</option>
		      		<option value="SI">Sistem Informasi</option>
		      	</select>
		      	</div>
			</div>

			<div class="form-group inline">
				<!-- NIM -->
				<label class="control-label col-md-4" for="nim">NIM</label>
				<div class="col-md-1" style="margin-right:-30px">
			 	<input type="text" class="form-control" style="width: 50px" disabled>
			 	</div>
			 	<input type="text" class="form-control" style="width: 307px" name="nim">
			</div>

			<div class="form-group inline">
				<!-- Nama -->
			 	<label class="control-label col-md-4" for="nama">Nama Lengkap</label>
			 	<div class="col-md-4">
		 		<input type="text" name="nama" class="form-control">
		 		</div>
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
				<!-- Orang yang dituju -->
			 	<label class="col-md-3" for="alamat" >Alamat Perusahaan</label>
			 	<div class="col-md-6">
		 		<input type="text" name="alamat" class="form-control">
		 		</div>
			</div>
		</div>

			<div class="form-group">
			 	<!-- Button -->
			 	<div class="text-right">
			 		<button class="btn btn-primary">Submit</button>
			 	</div>
			</div>
	</section>
</div>