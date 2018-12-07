<div id="page-content-wrapper">
    <div id="page-content">
        <div class="container">
            <div class="panel">
                <div class="panel-body">
                    <h3 class="title-hero">Ruta de la linea 65</h3>
    
    <h1>Filtrar por el tiempo</h1>
    <select class="seleccion" style="height:30px; width:350px;" name="tiempo" onchange="val()" id="tiempo">
        <?php
        foreach($tiempos as $item) {
            ?>
            <option value = "<?php echo $item->getId(); ?>"><?php echo $item->getDescripcion(); ?></option>
            <?php
        }
        ?>
    </select>
    <br><br>

<div id="map"></div>
    <script>
      var map;
      var markerCluster;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -17.777749, lng: -63.103099},
          zoom: 12
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

        try
      { 
        $.ajax({
          url: "http://localhost:8080/sga/webservice/getPuntos.php",
          data:
          {
          },
          type: "get",
          contentType: false,
          processData: false,
          success: function(msg) { graficarDemanda(msg) },
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

    function graficarDemanda(data)
    {

      var rutas = JSON.parse(data);
      console.log(rutas[0]);
      var i = 0;
      var locations = [];
      while(i < rutas.length){
        locations[i] = {lat: parseFloat(rutas[i].lat), lng: parseFloat(rutas[i].lng)};
        i++;
      }

        console.log(locations);
// Create an array of alphabetical characters used to label the markers.
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

      // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

        // Add a marker clusterer to manage the markers.
        markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      

      
    } 

       function val() {
            d = document.getElementById("tiempo").value;
            
            try
            { 
                $.ajax({
                  url: "http://localhost:8080/sga/webservice/getPuntosTiempo.php?tiempo="+d,
                  data:
                  {
                  },
                  type: "get",
                  contentType: false,
                  processData: false,
                  success: function(msg) { actualizarGrafico(msg) },
                  error: function(jqXmlHttpRequest, textStatus, errorThrown) { alert("Error leyendo datos."); }
                });
            } 
            catch (err) 
            {
                alert(err);
            }

        }

    function actualizarGrafico(data)
    {

        var rutas = JSON.parse(data);
        console.log(rutas[0]);
        var i = 0;
        var locations = [];
        while(i < rutas.length){
        locations[i] = {lat: parseFloat(rutas[i].lat), lng: parseFloat(rutas[i].lng)};
        i++;
        }

        console.log(locations);
        // Create an array of alphabetical characters used to label the markers.
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        markerCluster.clearMarkers();
        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

        // Add a marker clusterer to manage the markers.
        markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});

    }
    </script>
    


                </div>
            </div> <!-- panel -->
        </div> <!-- container -->
    </div> <!-- page-content -->
</div> <!-- page-content-wrapper -->