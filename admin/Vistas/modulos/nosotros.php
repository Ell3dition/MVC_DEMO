<div class="content-wrapper">
   
    <section class="content-header">
      <h1> Gestor Sobre Nosotros
      </h1>
    </section>

    <section class="content">
  

        <div class="box box-success">
        
            <div class="box-body">

            <?php
                    
                    $verN = new NosotrosC();
                    $verN -> VerNosotrosC();

            ?>
            
            
            </div>

            <div class="box-footer">
            

            <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#EditarNosotros"><i class="fa fa-pencil"></i>Editar</button>
            
            
            
            </div>
        
        
        </div>
        

    </section>
   
  </div>



  //MODAL EDITAR

 <div id="EditarNosotros" class="modal fade" role="dialog">
 
 
    <div class="modal-dialog">

        <div class="modal-content">
        
                <form role="form" method="post" enctype="multipart/form-data">
                

<?php

        $editar = new NosotrosC();
        $editar -> EditarNosotrosC();

?>
                  



                </form>
        
        
        </div>
    
    </div>
 
 
 </div>


 <?php

        $actualizarN = new NosotrosC();
        $actualizarN -> ActualizarNosotrosC();

 ?>