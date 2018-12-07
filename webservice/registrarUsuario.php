<?php

require('connection.php');
		
$db = Bd::getInstance();
$req = $db->query('INSERT INTO usuario(ci, nombre, apellido, correo, alias, passwd) VALUES ("'.$_GET['ci'].'", "'.$_GET['nombre'].'", "'.$_GET['apellido'].'", "'.$_GET['correo'].'", "'.$_GET['alias'].'", "'.$_GET['passwd'].'")');

$raw = array('respuesta' => "true");

echo json_encode($raw); 

?>