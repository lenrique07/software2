<!DOCTYPE html> 
<html lang="en">
<head>

    <title> Gestionar Ruta </title>

    <?php include('vista/extra/head.php'); ?>

    
    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      
    </style>


</head>

<body>


<div id="page-wrapper">

<div id="page-header" class="bg-gradient-9">
        
        <div id="header-nav-right">
            <a href="?controller=login&action=salir" class="hdr-btn" title="Salir" >
                <i class="glyph-icon icon-search"></i>
            </a>
            <a href="#" class="hdr-btn" id="fullscreen-btn" title="Fullscreen">
                <i class="glyph-icon icon-arrows-alt"></i>
            </a>
        </div><!-- #header-nav-right -->
    </div> <!-- page-header -->

<?php include('vista/extra/sidebar.php'); ?>

<?php include ('vista/demanda/tabla_elementos.php');?>

<?php include('vista/extra/footer.php'); ?>

</div>

<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDltJok8qmWg1xxc71bhuuduaTENuNYeug&callback=initMap"
    async defer></script>

</body>

</html>