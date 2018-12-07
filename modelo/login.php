<?php

class MLogin
{
    private $usuario;
    private $passwd;

    public function __construct($usuario, $passwd)
    {
        $this->usuario = $usuario;
        $this->passwd = $passwd;
    }

    public static function verificar($usuario, $passwd)
    {
        $db = Bd::getInstance();
        $req = $db->query('select * from persona p, trabajador t, login l where p.personaID = t.trabajadorID and p.estado = "1" and t.trabajadorID = l.trabajadorID and l.usuario = "'.$usuario.'" and l.passwd = "'.$passwd.'" and l.estado = "1"');
        foreach ($req->fetchAll() as $dom) {
            return true;
        }
        return false;
    }


}