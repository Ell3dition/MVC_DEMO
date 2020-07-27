<?php

class NosotrosC{


    public function MostrarNosotrosC(){

        $tablaBD="nosotros";
        $respuesta = NosotrosM::MostrarNosotrosM($tablaBD);


        echo'

        <img src="admin/'.$respuesta["imagen"].'" alt="" class="img-responsive img-fluid" />
        </div>
    </div> 
    <div class="col-lg-6 welcome_left">
        <h3 class="agileits-title">'.$respuesta["titulo"].'</h3>
        <h4>'.$respuesta["mision"].'</h4>
        <p>'.$respuesta["vision"].'</p>  

        
        ';





    }




}