<?php

class LoginController
{
    public function index()
    {
        
        require_once('login.php');
    }
    public function verificar()
    {
        $usuario = $_POST["user"];
        $passwd = $_POST['passwd'];

        /*$sw = MLogin::verificar($usuario, $passwd);
        if($sw) {
            header("location:?controller=cargos&action=index");
        } else {
            header("location:?controller=login&action=index");
        }*/
        header("location:?controller=panel&action=index");
    }

}

?>