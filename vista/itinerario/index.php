<!DOCTYPE html>
<html lang="en">
<head>

    <title> Visualizar Itinerario </title>

    <?php include('vista/extra/head.php'); ?>

    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>

    <style>
        .columna {
            width: 50%;
            float: left;
            padding-right: 30px;
        }

        @media (max-width: 500px) {
            .columna {
                width: auto;
                float: none;
            }
        }
    </style>

</head>

<body>

<div id="page-wrapper">

    <div id="page-header" class="bg-gradient-9">
        
        <div id="header-nav-right">
            <a href="#" class="hdr-btn" id="fullscreen-btn" title="Fullscreen">
                <i class="glyph-icon icon-arrows-alt"></i>
            </a>
        </div><!-- #header-nav-right -->
    </div> <!-- page-header -->

    <?php include('vista/extra/sidebar.php'); ?>

    <?php include ('vista/itinerario/tabla_elementos.php');?>

    <?php include('vista/extra/footer.php'); ?>

</div>

</body>

</html>