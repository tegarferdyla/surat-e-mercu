<html>

<head>

<title>Latihan Select dnanmis</title>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/jquery.min.js') ?>"></script>

</head>

<body>

<div class='container'>

<div class='row'>

<div class='col-md-5'>

<h3>Menu Select Dinamis</h3>

<div class='form-group'>
<label>Provinsi</label>
<select class='form-control' id='provinsi' required>
<option value=''>--pilih--</option>
<?php 
foreach ($provinsi as $prov) {
echo "<option value='$prov[id]'>$prov[name]</option>";
}
?>
</select>
</div>

<div class='form-group'>
<label>Kabupaten/kota</label>
<select class='form-control' id='kabupaten-kota' required>
<option value=''>--pilih--</option>
</select>
</div>


<div class='form-group'>
<label>Kecamatan</label>
<select class='form-control' id='kecamatan' required>
<option value=''>--pilih--</option>
</select>
</div>




</div>

</div>

</div>

</body>

</html>