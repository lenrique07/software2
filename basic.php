<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 80%;
        margin: 0;
        padding: 0;
      }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -17.777749, lng: -63.103099},
          zoom: 15
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
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      

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


      var locations = [
        {lat: -17.780949, lng: -63.102273},
        {lat: -17.780279, lng: -63.102954},
        {lat: -17.780949, lng: -63.102273},
        {lat: -17.780279, lng: -63.102954},
        {lat: -17.780949, lng: -63.102273},
        {lat: -17.780279, lng: -63.102954},
        {lat: -17.780949, lng: -63.102273},
        {lat: -17.780279, lng: -63.102954},
        {lat: -17.780949, lng: -63.102273},
        {lat: -17.780279, lng: -63.102954},
        {lat: -17.780949, lng: -63.102273},
        {lat: -17.780279, lng: -63.102954},
        {lat: -17.780949, lng: -63.102273},
        {lat: -17.780279, lng: -63.102934},
        {lat: -17.780949, lng: -63.102222},
        {lat: -17.780279, lng: -63.102954},
        {lat: -17.780949, lng: -63.102273},
        {lat: -17.780279, lng: -63.102954},
        {lat: -17.780949, lng: -63.102273},
        {lat: -17.780279, lng: -63.102954},
        {lat: -17.780279, lng: -63.102954},
        {lat: -17.780279, lng: -63.102954},
        {lat: -17.780279, lng: -63.102954}
      ]
  

    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDltJok8qmWg1xxc71bhuuduaTENuNYeug&callback=initMap"
    async defer></script>

  </body>
</html>
