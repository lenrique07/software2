<?php

require('connection.php');
		
$db = Bd::getInstance();
$req = $db->query('select r.lat, r.lon as lng from sindicato s, ruta r where r.id_sindicato = s.id and s.id = 1 ORDER by r.id asc');

//$req = $db->query('SELECT t.descripcion clima, r.fecha, p.hora, p.cant_subida, p.cant_bajada, p.cant_actual FROM punto p INNER JOIN tiempo t ON t.id = p.id_tiempo INNER JOIN recorrido r ON r.id = p.id_recorrido');

$rawdata = array(); //creamos un array

	$i=0;
	foreach ($req->fetchAll(PDO::FETCH_ASSOC) as $row) {
		$rawdata[$i] = $row;			
		$i++;
	}

	//$raw = array('ruta' => $rawdata);

	echo json_encode($rawdata); //devolvemos el array

?>