<div id="page-content-wrapper">
    <div id="page-content">
        <div class="container">
            <div class="panel">
                <div class="panel-body">
                    <h3 class="title-hero">Ruta de la linea 65</h3>
                    

                    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -17.782903, lng: -63.180882},
          zoom: 13
        });

      try
      { 
        $.ajax({
          url: "http://localhost:8080/sga/webservice/getRuta.php",
          data:
          {
          },
          type: "get",
          contentType: false,
          processData: false,
          success: function(msg) { webServiceResult(msg) },
          error: function(jqXmlHttpRequest, textStatus, errorThrown) { alert("Error leyendo datos."); }
        });
      } 
      catch (err) 
      {
        alert(err);
      }

    }

    function webServiceResult(data)
    {
      var rutas = JSON.parse(data);
      console.log(rutas[0]);
      var i = 0;
      var lineas = [];
      while(i < rutas.length){
        lineas[i] = {lat: parseFloat(rutas[i].lat), lng: parseFloat(rutas[i].lng)};
        i++;
      }
      var flightPlanCoordinates = lineas;
  //data.ruta;
      var flightPath = new google.maps.Polyline({
        path: flightPlanCoordinates,
        geodesic: true,
        strokeColor: '#FF0000',
        strokeOpacity: 1.0,
        strokeWeight: 2
      });

      flightPath.setMap(map);

    } 

    </script>


                </div>
            </div> <!-- panel -->
        </div> <!-- container -->
    </div> <!-- page-content -->
</div> <!-- page-content-wrapper -->