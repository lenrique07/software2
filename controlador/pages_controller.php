<?php
class PagesController
{
    public function home()
    {
        require_once('login.php');
    }

    public function error()
    {
        //require_once('vista/pages/error.php');
        echo "Error!";
    }
}

?>