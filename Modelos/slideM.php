<?php

require_once "admin/Modelos/conexionBD.php";

class SlideM extends conexionBD{

    static public function MostrarSlideM($tablaBD){


        $pdo = conexionBD::cBD()->prepare("SELECT titular, descripcion, orden, imagen from $tablaBD ORDER BY orden ASC");

        $pdo -> execute();

        return $pdo -> fetchAll();
        $pdo->close();


    }


}