<?php

require_once "conexionBD.php";

class NosotrosM extends conexionBD{


    static public function VerNosotrosM($tablaBD){



        $pdo = conexionBD::cBD()->prepare("SELECT * FROM $tablaBD");

        $pdo -> execute();

        return $pdo ->  fetch();

        $pdo -> close();

    }

    //Editar Nosotros

    static public function EditarNosotrosModelo($tablaBD, $id){


        $pdo = conexionBD::cBD()->prepare("SELECT * FROM $tablaBD WHERE id = :id");

        $pdo -> bindParam(":id",$id,PDO::PARAM_INT);

        $pdo -> execute();

        return $pdo ->  fetch();

        $pdo -> close();





    }

    //Actualizar Nosotros Modelos

    static public function ActualizarNosotrosM($tablaBD, $datosC){

        $pdo = conexionBD::cBD()->prepare("UPDATE $tablaBD SET titulo = :titulo, mision
        = :mision, vision = :vision, imagen = :imagen WHERE id = :id");
 
       $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
       $pdo -> bindParam(":titulo", $datosC["titulo"], PDO::PARAM_STR);
       $pdo -> bindParam(":mision", $datosC["mision"], PDO::PARAM_STR);
       $pdo -> bindParam(":vision", $datosC["vision"], PDO::PARAM_STR);
       $pdo -> bindParam(":imagen", $datosC["imagen"], PDO::PARAM_STR);
 
   
       
       if($pdo->execute()){
 
 
         return true;
 
      }else{
 
 
         return false;
 
      }
 
      $pdo -> close();
 
 
 
     }
 
    



 }



