<footer class="main-footer">
	<div class="pull-right hidden-xs">
		<b>Version</b> Alpha-3
	</div>
	<strong>Copyright &copy; 2017-<?php echo date("Y"); ?>
		<a href="http://fasilkom.mercubuana.ac.id/wp-content/uploads/2017/11/struktur-organisasi-aslab.jpg" target="_blank">Aslab Fasilkom</a>.</strong> All rights reserved.
</footer>
</body>

<script src="<?php echo base_url('assets/plugins/jquery/dist/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/jQueryUI/jquery-ui.min.js') ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/moment/moment.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/fullcalendar/dist/fullcalendar.min.js')?>"></script>
<script src="<?php echo base_url('assets/dist/js/sweetalert.js')?>"></script>
<script src="<?php echo base_url('assets/dist/js/toast.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/raphael/raphael.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/morris.js/morris.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/chart.js/Chart.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<script>
	$(function () {
		$('#datatable').DataTable({
			'paging': true,
			'lengthChange': true,
			'searching': true,
			'ordering': true,
			'info': true,
			'autoWidth': true
		})
	})

	function no(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
	}

</script>

<script>
	$(document).ready(function () {
		$('.sidebar-menu').tree()
	})

</script>

<!-- Untuk meng-email yang ditolak -->
<script>
	$(function () {
		//Add text editor

		$('#compose-textarea').wysihtml5({
			toolbar: {
				"font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
				"emphasis": true, //Italics, bold, etc. Default true
				"lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
				"html": true, //Button which allows you to edit the generated HTML. Default false
				"link": false, //Button to insert a link. Default true
				"image": false, //Button to insert an image. Default true,
				"color": false, //Button to change color of font  
				"blockquote": true, //Blockquote  
			}
		});
	});

</script>

<script>
	$('#confirm').on('show.bs.modal', function (e) {
		$(this).find('.btn-ok').prop('href', $(e.relatedTarget).data('href'));
	});

	$('.modal').on('hidden.bs.modal', function () {
		$(this).find('form')[0].reset();
	});

</script>

<script>
	$(document).ready(function () {
		$('.datepicker').datepicker({
			format: 'dd-mm-yyyy'
		});
	});

</script>

<script>
	$('#confirmtolak').on('show.bs.modal', function (e) {
		$(this).find('.btn-ok').prop('href', $(e.relatedTarget).data('href'));
	});

</script>


<!-- validasi yang mengambil -->
<script>
	$('#namaPengambil').ready(function () {
		$('#btnKonfirmasiNama').click(function (e) {
			var isValid = /* true */$('input[name=namaPengambil]').val();
			$('input[type="text"]').each(function () {
				if ($.trim($(this).val()) == '') {
					isValid = false;
					$(this).css({
						"border": "1px solid red",
						"background": "#FFCECE"
					});
				} else {
					$(this).css({
						"border": "",
						"background": ""
					});
				}
			});
			if (isValid == false)
				e.preventDefault();
			else
				alert('Telah Diambil Oleh '+isValid);
		});
	});
</script>

</html>

