<!DOCTYPE html>
<html>
    <head>
        <title>Pivot Demo</title>
        <!-- external libs from cdnjs -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.11/c3.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.11/c3.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

        <!-- PivotTable.js libs from ../dist -->
        <link rel="stylesheet" type="text/css" href="vista/cubo/dist/pivot.css">
        <script type="text/javascript" src="vista/cubo/dist/pivot.js"></script>
        <script type="text/javascript" src="vista/cubo/dist/pivot.es.js"></script>
        <script type="text/javascript" src="vista/cubo/dist/c3_renderers.js"></script>

        <style>
            body {font-family: Verdana;}

            .c3-line, .c3-focused {stroke-width: 3px !important;}
            .c3-bar {stroke: white !important; stroke-width: 1;}
            .c3 text { font-size: 12px; color: grey;}
            .tick line {stroke: white;}
            .c3-axis path {stroke: grey;}
            .c3-circle { opacity: 1 !important; }
            .c3-xgrid-focus {visibility: hidden !important;}
        </style>

    </head>
    <body>
        <script type="text/javascript">

    $(function(){
        var derivers = $.pivotUtilities.derivers;
        var renderers = $.extend($.pivotUtilities.renderers,
            $.pivotUtilities.c3_renderers);

        $.getJSON("http://localhost:8080/sga/webservice/getCubo.php", function(mps) {
            $("#output").pivotUI(mps, {
                renderers: renderers,
                derivedAttributes: {
                    "Año": derivers.dateFormat("fecha", "%y"),
                    "Mes": derivers.dateFormat("fecha", "%n"),
                    "Día": derivers.dateFormat("fecha", "%w")
                }
            }, false, "es");
        });
     });
        </script>

        <div id="output" style="margin: 30px;"></div>

    </body>
</html>