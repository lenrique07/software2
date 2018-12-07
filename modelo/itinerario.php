<?php

class Itinerario
{
    private $micro;
    private $hora;

    public function __construct($micro, $hora)
    {
        $this->micro = $micro;
        $this->hora = $hora;
    }

    public function getMicro()
    {
        return $this->micro;
    }
    public function getHora()
    {
        return $this->hora;
    }


    public static function all()
    {
        $list = [];
        $db = Bd::getInstance();
        $req = $db->query('SELECT nro_micro as micro, hora_partida as hora FROM itinerario order by hora_partida asc');
        
        foreach ($req->fetchAll() as $pro) {
            $list[] = new Itinerario($pro['micro'],$pro['hora']);
        }
        return $list;
    }

    public static function insertar($descripcion)
    {
        $db = Bd::getInstance();
        $sql = "INSERT INTO cargo(descripcion) VALUES ('".$descripcion."')";
        $req = $db->query($sql);
    }

    public static function modificar($id, $descripcion)
    {
        $db = Bd::getInstance();
        $sql = "UPDATE cargo SET descripcion='".$descripcion."' WHERE cargoId= ".$id.";";
        $req = $db->query($sql);
    }

    public static function eliminar($id)
    {
        $db = Bd::getInstance();
        $req = $db->query("UPDATE cargo SET estado='0' WHERE cargoId=".$id.";");
    }

}