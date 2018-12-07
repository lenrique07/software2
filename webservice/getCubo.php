<?php

require('connection.php');
		
$db = Bd::getInstance();
//$req = $db->query('select r.lat, r.lon as lng from sindicato s, ruta r where r.id_sindicato = s.id and s.id = 1 ORDER by r.id asc');

$req = $db->query('SELECT t.descripcion clima, r.fecha, p.cant_subida as "cantidad suben", p.cant_bajada as "cantidad bajan", p.cant_actual as "cantidad actual", HOUR(p.hora) as hora, CASE
    WHEN HOUR(p.hora) <= 7 THEN "Madrugada"
    WHEN HOUR(p.hora) < 12 THEN "Mañana"
    WHEN HOUR(p.hora) <= 13 THEN "Medio Dia"
    WHEN HOUR(p.hora) < 19 THEN "Tarde"
    ELSE "Noche"
END as "Periodo" FROM punto p INNER JOIN tiempo t ON t.id = p.id_tiempo INNER JOIN recorrido r ON r.id = p.id_recorrido');

$rawdata = array(); //creamos un array

	$i=0;
	foreach ($req->fetchAll(PDO::FETCH_ASSOC) as $row) {
		$rawdata[$i] = $row;			
		$i++;
	}

	//$raw = array('ruta' => $rawdata);

	echo json_encode($rawdata); //devolvemos el array

?>