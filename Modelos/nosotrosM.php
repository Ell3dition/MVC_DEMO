<?php

require_once "admin/Modelos/conexionBD.php";

class NosotrosM extends conexionBD{

    static public function MostrarNosotrosM($tablaBD){

        $pdo = conexionBD::cBD()->prepare("SELECT * from $tablaBD");

        $pdo -> execute();

        return $pdo -> fetch();
        $pdo->close();



    }



}