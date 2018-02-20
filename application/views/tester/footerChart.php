</body>
<?php 
  // JUMLAH KESELURUHAN MAHASISWA TEKNIK INFORMATIKA YANG DAFTAR 
  $mahasiswajumlahTI = $tiwaiting + $tiproses + $tifinish + $titake + $titolak; 

  // JUMLAH KESELURUHAN MAHASISWA SISTEM INFORMASI  YANG DAFTAR 
  $mahasiswajumlahSI = $siwaiting + $siproses + $sifinish + $sitake + $sitolak;

?>            

<script src="<?php echo base_url('assets/plugins/jquery/dist/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/jQueryUI/jquery-ui.min.js') ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/raphael/raphael.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/morris.js/morris.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/Flot/jquery.flot.js')?>"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="<?php echo base_url('assets/plugins/Flot/jquery.flot.resize.js')?>"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="<?php echo base_url('assets/plugins/Flot/jquery.flot.pie.js')?>"></script>
<!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
<script src="<?php echo base_url('assets/plugins/Flot/jquery.flot.categories.js')?>"></script>

<script src="<?php echo base_url('assets/plugins/chart.js/Chart.js')?>"></script>
<script>
 
            

 //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    // JSON STATUS
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
      {
        value    : <?=$kptolak?>,
        color    : '#f56954',
        highlight: '#f56954',
        label    : 'Ditolak'
      },
      {
        value    : <?=$kpwaiting ?>,
        color    : '#00a65a',
        highlight: '#00a65a',
        label    : 'Menunggu'
      },
      {
        value    : <?=$kpproses?>,
        color    : '#f39c12',
        highlight: '#f39c12',
        label    : 'Proses'
      },
      {
        value    : <?=$kpfinish?>,
        color    : '#00c0ef',
        highlight: '#00c0ef',
        label    : 'Selesai'
      },
      {
        value    : <?=$kptake?>,
        color    : '#3c8dbc',
        highlight: '#3c8dbc',
        label    : 'Diambil'
      },
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)
   
    // JSON STATUS
    var pieChartCanvas = $('#pieChart2').get(0).getContext('2d')
    var pieChart       = new Chart(pieChartCanvas)
    var PieData        = [
      {
        value    : <?php echo $mahasiswajumlahTI; ?>,
        color    : '#E219B7',
        highlight: '#E219B7',
        label    : 'Teknik Informatika'
      },
      {
        value    : <?php echo $mahasiswajumlahSI ?> ,
        color    : '#ffff99',
        highlight: '#ffff99',
        label    : 'Sistem Informasi'
      },
    ]
    var pieOptions     = {
      //Boolean - Whether we should show a stroke on each segment
      segmentShowStroke    : true,
      //String - The colour of each segment stroke
      segmentStrokeColor   : '#fff',
      //Number - The width of each segment stroke
      segmentStrokeWidth   : 2,
      //Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      //Number - Amount of animation steps
      animationSteps       : 100,
      //String - Animation easing effect
      animationEasing      : 'easeOutBounce',
      //Boolean - Whether we animate the rotation of the Doughnut
      animateRotate        : true,
      //Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale         : false,
      //Boolean - whether to make the chart responsive to window resizing
      responsive           : true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio  : true,
      //String - A legend template
      legendTemplate       : '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    pieChart.Doughnut(PieData, pieOptions)

</script>
</html>