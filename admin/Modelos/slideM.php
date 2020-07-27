<?php 


require_once "conexionBD.php";

class SlideM extends conexionBD{


    // crear slide

    static public function CrearSlideM($tablaBD,$datosC){

      

        $pdo = conexionBD::cBD()->prepare("INSERT INTO $tablaBD (titular, descripcion, orden, imagen) values 
        (:titular, :descripcion, :orden, :imagen)");
        
        $pdo -> bindParam(":titular", $datosC["titular"], PDO::PARAM_STR);
        $pdo -> bindParam(":descripcion", $datosC["descripcion"], PDO::PARAM_STR);
        $pdo -> bindParam(":orden", $datosC["orden"], PDO::PARAM_STR);
        $pdo -> bindParam(":imagen", $datosC["imagen"], PDO::PARAM_STR);

        

       if($pdo->execute()){


            return true;

        }else{


            return false;

        }

        $pdo -> close();
    }


    //Ver slide

    static public function VerSlideM($tablaBD,$item,$valor){

        if($item != null){


            $pdo = conexionBD::cBD()->prepare("SELECT * FROM $tablaBD WHERE $item = :$item");

            $pdo -> bindParam(":".$item,$valor, PDO::PARAM_STR);

            $pdo -> execute();

            return $pdo -> fetch();



        }else{


            
            $pdo = conexionBD::cBD()->prepare("SELECT * FROM $tablaBD ORDER BY orden ASC");

    

            $pdo -> execute();

            return $pdo -> fetchAll();



        }

        $pdo -> Close();


        
    }

    //ACTUALIZAR SLIDE

    static public function ActualizarSlideM($tablaBD, $datosC){

      $pdo = conexionBD::cBD()->prepare("UPDATE $tablaBD SET titular = :titular, descripcion
       = :descripcion, orden = :orden, imagen = :imagen WHERE id = :id");

      $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
      $pdo -> bindParam(":titular", $datosC["titular"], PDO::PARAM_STR);
      $pdo -> bindParam(":descripcion", $datosC["descripcion"], PDO::PARAM_STR);
      $pdo -> bindParam(":orden", $datosC["orden"], PDO::PARAM_STR);
      $pdo -> bindParam(":imagen", $datosC["imagen"], PDO::PARAM_STR);

  
      
      if($pdo->execute()){


        return true;

     }else{


        return false;

     }

     $pdo -> close();



    }

   



 //BORRAR SLIDE
 
 static public function BorrarSlideM($tablaBD, $id){


       $pdo = conexionBD::cBD()->prepare("DELETE FROM $tablaBD WHERE id = :id");

        $pdo -> bindParam(":id", $id, PDO::PARAM_INT);

        if($pdo->execute()){


                  return true;

        }else{

                 return false;

          }      

        $pdo -> close();



    }



}