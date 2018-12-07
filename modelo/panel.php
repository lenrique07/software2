<?php

class Panel
{
    private $id;
    private $descripcion;

    public function __construct($id, $descripcion)
    {
        $this->id = $id;
        $this->descripcion = $descripcion;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }


    public static function getTiempos()
    {
        $list = [];
        $db = Bd::getInstance();
        $req = $db->query('SELECT id, descripcion FROM tiempo');
        
        foreach ($req->fetchAll() as $pro) {
            $list[] = new Panel($pro['id'],$pro['descripcion']);
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