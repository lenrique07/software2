<?php

class ItinerarioController
{
    public function index()
    {
        $itinerarios = Itinerario::all();
        require_once('vista/itinerario/index.php');
    }
    
    public function ruta()
    {
        require_once('vista/panel/index.php');
    }

    public function cubo()
    {
        require_once('vista/cubo/examples/myE.php');
    }

    public function demanda(){
        $tiempos = Panel::getTiempos();
        require_once('vista/demanda/index.php');
    }

    public function eliminar()
    {

        MCargo::eliminar($_GET['id']);

        header("location:?controller=cargos&action=index");
    }

}

?>