<div class="footer">
	<div class="container-fluid">
		<div class="row">
      <div class="col-md-4"> 
        <p class="text-center">
          Copyright &copy; <?php echo date("Y"); ?> <a href="http://fasilkom.mercubuana.ac.id/wp-content/uploads/2017/11/struktur-organisasi-aslab.jpg" target="_blank">Aslab Fasilkom</a> <br>
          Fakultas Ilmu Komputer <br>
        Universitas Mercu Buana</p>
      </div>
    </div>
  </div>
</div>
</div>


<script src="<?php echo base_url('assets/plugins/jquery/dist/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js')?>" ></script>
<script src="<?php echo base_url('assets/plugins/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
<script>
  $(function(){
    $('#datatable').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
<script>
  $(function(){
    $('#datatable2').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
<script>
  $('.btn-add').click(function(){

   var x=
   $( ".form-test" ).append( "" );
 });

</script>
<script>
  // Event handler for text input
  $('#kodenim').on('input', function() {
    //TODO Getiing option based on input value and setting it as selected
    $('#prodi option:contains(' + this.value + ')').eq(0).prop('selected', true);
  });

  // Event handler for select
  $('#prodi').change(function() {
      // Updating text input based on selected value
      $('#kodenim').val($('option:selected', this).val());
    });

  function no(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
      return false;
  }

</script>

<!-- sckrip coba -->
<script>
  $('.form-tambahan').hide();
  $('#anggota').change(function(){


    $('.form-tambahan').hide();
    var total=$(this).val();

    for (var x = total; x <= 5; x++) {
      // $('.ft'+i).show();
      $('#nim'+x).removeAttr('maxLength');
      $('#nim'+x).removeAttr('minlength');
      $('#nim'+x).removeAttr('required');
      $('#nama'+x).removeAttr('required');
    }
    

    for (var i = 1; i <= total; i++) {
      $('.ft'+i).show();
      $('#nim'+i).prop({
        'required': true,
        'maxLength':8,
        'minLength':8,
      });
      $('#nama'+i).prop('required', true);
    }


  });
</script>

<script type="text/javascript">
  $(function(){
    $.ajaxSetup({
      type:"POST",
      url: "<?php echo base_url('mahasiswa/select_daerah') ?>",
      cache: false,
    });

    $("#provinsi").change(function(){
      var value=$(this).val();
      if(value>0){
        $.ajax({
          data:{modul:'kabupaten',id:value},
          success: function(respond){
            $("#kabupaten-kota").html(respond);
          }
        })
        $.ajax({
          data:{modul:'kecamatan',id:value},
          success: function(respond){
            $("#kecamatan").html(respond);
          }
        })
        $.ajax({
          data:{modul:'kelurahan',id:value},
          success: function(respond){
            $("#kelurahan-desa").html(respond);
          }
        })
        $.ajax({
          data:{modul:'kodepos',id:value},
          success: function(respond){
            $("#kodepos").html(respond);
          }
        })

      }else{
        $.ajax({
          data:{modul:'kabupaten',id:value},
          success: function(respond){
            $("#kabupaten-kota").html(respond);
          }
        })

        $.ajax({
          data:{modul:'kecamatan',id:value},
          success: function(respond){
            $("#kecamatan").html(respond);
          }
        })
        $.ajax({
          data:{modul:'kelurahan',id:value},
          success: function(respond){
            $("#kelurahan-desa").html(respond);
          }
        })
        $.ajax({
          data:{modul:'kodepos',id:value},
          success: function(respond){
            $("#kodepos").html(respond);
          }
        })
      } 
    });




    $("#kabupaten-kota").change(function(){
      var value=$(this).val();
      if(value != ""){
        $.ajax({
          data:{modul:'kecamatan',id:value},
          success: function(respond){
            $("#kecamatan").html(respond);
          }
        })
        $.ajax({
          data:{modul:'kelurahan',id:value},
          success: function(respond){
            $("#kelurahan-desa").html(respond);
          }
        })  
        $.ajax({
          data:{modul:'kodepos',id:value},
          success: function(respond){
            $("#kodepos").html(respond);
          }
        })
      }else{
        $.ajax({
          data:{modul:'kecamatan',id:value},
          success: function(respond){
            $("#kecamatan").html(respond);
          }
        })
        $.ajax({
          data:{modul:'kelurahan',id:value},
          success: function(respond){
            $("#kelurahan-desa").html(respond);
          }
        })

        $.ajax({
          data:{modul:'kodepos',id:value},
          success: function(respond){
            $("#kodepos").html(respond);
          }
        })
      }
    })

    $("#kecamatan").change(function(){
      var value=$(this).val();
      if(value !=""){
        $.ajax({
          data:{modul:'kelurahan',id:value},
          success: function(respond){
            $("#kelurahan-desa").html(respond);
          }
        })
        $.ajax({
          data:{modul:'kodepos',id:value},
          success: function(respond){
            $("#kodepos").html(respond);
          }
        })
      }else{
        $.ajax({
          data:{modul:'kelurahan',id:value},
          success: function(respond){
            $("#kelurahan-desa").html(respond);
          }
        })
        $.ajax({
          data:{modul:'kodepos',id:value},
          success: function(respond){
            $("#kodepos").html(respond);
          }
        })
      } 
    })
  })

  $("#kelurahan-desa").change(function(){
    var value=$(this).val();
    if(value != ""){
      $.ajax({
        data:{modul:'kodepos',id:value},
        success: function(respond){
          $("#kodepos").html(respond);
        }
      })
    }else{
     $.ajax({
      data:{modul:'kodepos',id:value},
      success: function(respond){
        $("#kodepos").html(respond);
      }
    })
   } 
 })

</script>

</body>
</html>