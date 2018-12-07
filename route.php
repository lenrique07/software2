<?php

function call($controller, $action)
{
    $con = 'controlador/' . $controller . '_controller.php';
    require_once($con);

   // echo '<script language="javascript">alert("'.$action.' - '.$controller.'");</script>';

    switch ($controller) {
        case 'pages':
            $controller = new PagesController();
            break;
        case 'login':
            require_once('modelo/login.php');
            $controller = new LoginController();
            break;
        case 'panel':
            require_once('modelo/panel.php');
            $controller = new PanelController();
            break;
        case 'itinerario':
            require_once('modelo/itinerario.php');
            $controller = new ItinerarioController();
            break;

    }

    $controller->{$action}();
}

//if (isset( $_SESSION['CargoEmpleado'])) {
    $controllers = array(

        'pages' => ['home', 'error'],
        'login' => ['index', 'verificar', 'salir', 'login'],

        'panel' => ['index', 'cubo', 'ruta', 'demanda'],
        'itinerario' => ['index', 'cubo', 'ruta', 'demanda']

    );
if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}
?>