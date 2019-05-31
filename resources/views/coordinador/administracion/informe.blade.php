<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style type="text/css">
      .jm-loadingpage {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 999999999;
      background: url(loadingpage.gif) center no-repeat #fff;
      }
    </style>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Tipos', 'Incidencias'],
            ['HDW',{{$incidenciasCountHdw}}],
            ['SFW',{{$incidenciasCountSfw}}],
            ['USR',{{$incidenciasCountUsr}}],
        ]);

        var options = {
          title: 'Incidencias por tipo'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
<div class="jm-loadingpage"></div>
    <center>
      <!--Gráfico incidencias por tipo-->
      <div id="piechart" style="width: 900px; height: 500px;"></div>
      <!--Número de incidencias por tipo y causante-->
      <div class="container col-md-4 col-md-offset-2">
        <h5>Incidencias por tipo y causante</h5>
        <div class="panel panel-default">

          <table class="table table-striped">
            <thead class="thead-dark">
            <tr>
              <th>Causante</th>
              <th>Hardware</th>
              <th>Software</th>
              <th>Usuario</th>
            </tr>
          </thead>
            <tr>
              <td>ATB</td>
              <td>{!!$atbh!!}</td>
              <td>0</td>
              <td>{!!$atbu!!}</td>
            </tr>
            <tr>
              <td>BGR</td>
              <td>{!!$bgrh!!}</td>
              <td>0</td>
              <td>{!!$bgru!!}</td>
            </tr>
            <tr>
              <td>BTP</td>
              <td>{!!$btph!!}</td>
              <td>0</td>
              <td>{!!$btpu!!}</td>
            </tr>
            <tr>
              <td>CPU</td>
              <td>{!!$cpuh!!}</td>
              <td>0</td>
              <td>{!!$cpuu!!}</td>
            </tr>
            <tr>
              <td>EMU</td>
              <td>0</td>
              <td>{!!$emus!!}</td>
              <td>{!!$emuu!!}</td>
            </tr>
            <tr>
              <td>MON</td>
              <td>{!!$monh!!}</td>
              <td>0</td>
              <td>{!!$monu!!}</td>
            </tr>
            <tr>
              <td>TEC</td>
              <td>{!!$tech!!}</td>
              <td>0</td>
              <td>{!!$tecu!!}</td>
            </tr>
            <tr>
              <td>UCA</td>
              <td>0</td>
              <td>{!!$ucas!!}</td>
              <td>0</td>
            </tr>
            <tr>
              <td>LSR</td>
              <td>{!!$lsrh!!}</td>
              <td>0</td>
              <td>{!!$lsru!!}</td>
            </tr>
            <tr>
              <td>SO</td>
              <td>0</td>
              <td>{!!$sos!!}</td>
              <td>0</td>
            </tr>
            <tr>
              <td>VPS</td>
              <td>0</td>
              <td>{!!$vpss!!}</td>
              <td>0</td>
            </tr>
            <tr>
              <td>TOTAL</td>
              <td>{!!$sumahdw!!}</td>
              <td>{!!$sumasfw!!}</td>
              <td>{!!$sumausr!!}</td>
              <td>{!!$sumatodo!!}</td>
            </tr>
          </table>
        </div>
      </div>
    </br>
    <a href="{{ url('/coordinador/administracion/informe/generar/')}}" class="btn btn-secondary" role="button">Volver</a>

    </center>

</br>
    <script>
      $(document).ready(function() {
       $(".jm-loadingpage").fadeOut("slow");;
      });
    </script>
  </body>
</html>
