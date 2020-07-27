<?php

class SlideC{


    public function CrearSlideC(){

        if (isset($_POST["titularN"])){

            $rutaImg = "";

            if(isset($_FILES["imagenN"]["tmp_name"])&& !empty (($_FILES["imagenN"]["tmp_name"]))){


                if(($_FILES["imagenN"]["type"] == "image/jpeg")){

                    $nombre = mt_rand(10,999);

                    $rutaImg = "Vistas/img/slide/S".$nombre.".jpg";

                    $imagen = imagecreatefromjpeg($_FILES["imagenN"]["tmp_name"]);

                    imagejpeg($imagen, $rutaImg);

                }


                if(($_FILES["imagenN"]["type"] == "image/png")){

                    $nombre = mt_rand(10,999);

                    $rutaImg = "Vistas/img/slide/S".$nombre.".png";

                    $imagen = imagecreatefrompng($_FILES["imagenN"]["tmp_name"]);

                    imagepng($imagen, $rutaImg);

                }


            }



            $tablaBD = "slide";

            $datosC = array("titular"=>$_POST["titularN"], "descripcion"=>$_POST["descripcionN"],"orden"=>$_POST["ordenN"], "imagen"=>$rutaImg);

            $respuesta = SlideM::CrearSlideM($tablaBD,$datosC);

            if($respuesta == true){


                echo '<script>
                
                    window.location = "slide";
                
                </script>';


            }else{


                echo '<script>
                    
                window.alert("ERROR AL CREAR USUARIO VUELVA A INTENTAR PORfAVOR");
                    

            </script>';

            }



        }





    }



    // VER SLIDES


    static public function VerSlideC($item,$valor){



        $tablaBD = "slide";

        $respuesta = SlideM::VerSlideM($tablaBD,$item,$valor);

        return $respuesta;

    



    }




    //Actualizar Slide

    public function ActualizarSlideC(){

        if(isset($_POST["Sid"])){

            $rutaImg= $_POST["imagenActual"];
            
            if(isset($_FILES["imagenE"]["tmp_name"]) && !empty ($_FILES["imagenE"]["tmp_name"])){


                if(!empty($_POST["imagenActual"])){

                    unlink($_POST["imagenActual"]);

                }else{

                    mkdir($direc, 0755);

                }

                if(($_FILES["imagenE"]["type"] == "image/jpeg")){

                    $nombre = mt_rand(10,999);

                    $rutaImg = "Vistas/img/slide/S".$nombre.".jpg";

                    $imagen = imagecreatefromjpeg($_FILES["imagenE"]["tmp_name"]);

                    imagejpeg($imagen, $rutaImg);

                }

                if(($_FILES["imagenE"]["type"] == "image/png")){

                    $nombre = mt_rand(10,999);

                    $rutaImg = "Vistas/img/slide/S".$nombre.".png";

                    $imagen = imagecreatefrompng($_FILES["imagenE"]["tmp_name"]);

                    imagepng($imagen, $rutaImg);

                }



            }


            $tablaBD ="slide";

            $datosC = array("id"=>$_POST["Sid"], "titular" =>$_POST["titularE"], "descripcion"=> $_POST["descripcionE"], "orden"=>$_POST["ordenE"], "imagen"=>$rutaImg);


            $respuesta = SlideM::ActualizarSlideM($tablaBD, $datosC);

            if($respuesta == true){


                echo '<script>
                
                    window.location = "slide";
                
                </script>';


            }else{


                echo '<script>
                    
                window.alert("ERROR AL ACTUALIZAR");
                    

            </script>';

            }

        }




    }



    //Borrar Slide


    public function BorrarSlideC(){

        if(isset($_GET["Sid"])){

            $tablaBD = "slide";
            $id = $_GET["Sid"];


            if($_GET["imagenSlide"] != ""){


                unlink($_GET["imagenSlide"]);

            }


            $respuesta = SlideM::BorrarSlideM($tablaBD, $id);



            if($respuesta == true){


                echo '<script>
                
                    window.location = "slide";
                
                </script>';


            }else{


                echo '<script>
                    
                window.alert("ERROR AL ELIMINAR");
                    

            </script>';

            }

        }



    }



}