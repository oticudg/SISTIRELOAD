<script src="{{ url ('/plugins/jquery-3.3.1.min.js') }}" type="text/javascript"></script>
<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>
<script src="{{ url ('/plugins/pace.min.js') }}" type="text/javascript"></script>
<script src="{{ url ('/plugins/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ url ('/plugins/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ url ('/plugins/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
<script src="{{ url ('/plugins/bootstrap-datepicker.es.min.js') }}" type="text/javascript"></script>
<script src="{{ url ('/plugins/moment.min.js') }}" type="text/javascript"></script>
<script src="{{ url ('/plugins/validator.min.js') }}"></script>
<script src="{{ url ('/plugins/sweetalert2.min.js') }}"></script>
<script src="{{ url ('/plugins/buttons.server-side.js') }}"></script>
<script src="{{ url ('/plugins/dataTables.buttons.min.js') }}"></script>
<script src="{{ url ('/plugins/buttons.bootstrap.min.js') }}"></script>
<script src="{{ url ('/plugins/buttons.flash.min.js') }}"></script>
<script src="{{ url ('/plugins/jszip.min.js') }}"></script>
<script src="{{ url ('/plugins/pdfmake.min.js') }}"></script>
<script src="{{ url ('/plugins/vfs_fonts.min.js') }}"></script>
<script src="{{ url ('/plugins/buttons.html5.min.js') }}"></script>
<script src="{{ url ('/plugins/buttons.print.min.js') }}"></script>
<script src="{{ url ('/plugins/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('/plugins/sweetalert2.min.js') }}"></script>
<script src="{{ asset('js/custom.min.js') }}"></script>
<script src="{{ url ('/plugins/loader.js') }}"></script>
@if(isset($sex)) 
<script type="text/javascript">
  var analytics = <?php echo $sex; ?>

  google.charts.load('current', {'packages':['corechart']});

  google.charts.setOnLoadCallback(drawChart);

  function drawChart()
  {
    var data = google.visualization.arrayToDataTable(analytics);
    var options = {
      title : 'PORCENTAJE DE HISTORIAS POR SEXO DEL PACIENTE.'
    };
    var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
    chart.draw(data, options);
  }
</script>
@endif
@if(isset($triage)) 
<script type="text/javascript">
  var analytics = <?php echo $triage; ?>

  google.charts.load('current', {'packages':['corechart']});

  google.charts.setOnLoadCallback(drawChart);

  function drawChart()
  {
    var data = google.visualization.arrayToDataTable(analytics);
    var options = {
      title : 'PORCENTAJE DE HISTORIAS POR TRIAJE DE ENTRADA.',
      is3D: true,
    };
    var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
    chart.draw(data, options);
  }
</script>
@endif

@if(isset($doc)) 
<script type="text/javascript">
  var analytics = <?php echo $doc; ?>

  google.charts.load('current', {'packages':['corechart']});

  google.charts.setOnLoadCallback(drawChart);

  function drawChart()
  {
    var data = google.visualization.arrayToDataTable(analytics);
    var options = {
      title : 'PORCENTAJE POR TIPO DE DOCUMENTACIÓN.',
      pieHole: 0.4,
    };
    var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
    chart.draw(data, options);
  }
</script>
@endif
