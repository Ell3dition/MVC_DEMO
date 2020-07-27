<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Gestor de Slide
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          
        <button class="btn btn-primary" data-toggle="modal" data-target="#CrearSlide">Crear Imagen</button>

          
        </div>
        <div class="box-body">
         
        <table class="table table-bordered table-hover -table-stridep TB">


        <thead>
          
      <tr>
<th>N°</th>
<th>Imagen</th>
<th>Titular</th>
<th>Descripcion</th>
<th>Orden</th>
<th>Editar/Eliminar</th>
      </tr>

        </thead>

        <tbody>



<!-- <tr>

<td>1</td>
<td><img src="vistas/img/defecto.jpg" class="img-thumbnail" width="300px;"></td>
<td>Titular de prueba</td>
<td>Descripcion de prueba</td>
<td>1</td>
<td>

<div class="btn-group">

<button class="btn btn-success" data-toggle="modal" data-target="#EditarS"><i class="fa fa-pencil"></i></button>
<button class="btn btn-danger"><i class="fa fa-pencil"></i></button>

</div>

</td>

</tr> -->

<?php

    $item = null;
    $valor = null;

    $verS = SlideC::VerSlideC($item, $valor);

    foreach ($verS as $key => $value){

      echo'<tr>
      
      <td>'.($key+1).'</td>

      <td><img src="'.$value["imagen"].'" class="img-thumbnail" width="300px;"></td>

      <td>'.$value["titular"].'</td>

      <td>'.$value["descripcion"].'</td>

      <td><h1>'.$value["orden"].'</h1></td>

      <td>
      
      <div class="btn-group">
      
      <button class="btn btn-success EditarSlide" Sid="'.$value["id"].'" data-toggle="modal" data-target="#EditarS"><i class="fa fa-pencil"></i></button>
      <button class="btn btn-danger BorrarSlide" Sid="'.$value["id"].'"  imagenSlide="'.$value["imagen"].'"><i class="fa fa-times"></i></button>
      
      </div>
      
      </td>
      </tr>';

    }


?>



          </tbody>




        </table>


        </div>
        <!-- /.box-body -->
       
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>




  <!--CREAR MODAL slide-->

  <div class="modal fade" role="dialog" id="CrearSlide">

      <div class="modal-dialog">
      

      <div class="modal-content">
      
      
            <form method="post" role="form" enctype="multipart/form-data">
            
           <div class="modal-body">
            
              <div class="box-body">
              
                <div class="form-group">
                  <h2>Titular</h2>
                  <input type="text" class="form-control input-lg" name="titularN" required>
                
                </div>


                <div class="form-group">
                  <h2>Descripcion</h2>

                        <textarea name="descripcionN">
                        
                        </textarea>


            
                
                </div>

                <div class="form-group">
                  <h2>Orden</h2>
                  <input type="text" class="form-control input-lg" name="ordenN" >
                
                </div>

                <div class="form-group">

                <h2>Imagen</h2>
                <input type="file" name="imagenN">
                <p class="help-block"> Peso máximo permitido 200Mb </p>

                </div>
              
              </div>

            </div>

            <div class="modal-footer">

            <button type="submit" class="btn btn-primary">Crear</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
            

            
<?php

$crearS = new SlideC();
$crearS -> CrearSlideC();

?>

            </form>

      </div><!--Fin modal content-->
      
      
      </div><!--Fin modal dialog-->

  </div><!--Fin modal fade-->
 
    <!--Final  MODAL Slide-->







  
  


<?php

$borrarU = new UsuariosC();
$borrarU -> BorrarUsuariosC();


?>



  <!--CREAR  MODAL EDITAR-->



<div class="modal fade" role="dialog" id="EditarS">

<div class="modal-dialog">


<div class="modal-content">


      <form method="post" role="form" enctype="multipart/form-data">
      
     <div class="modal-body">
      
        <div class="box-body">
        
          <div class="form-group">
            <h2>Titular</h2>
            <input type="text" class="form-control input-lg" id="titularE"   name="titularE" required>
            <input type="hidden" id="Sid" name="Sid">
          
          </div>

          <div class="form-group">
            <h2>Descripcion</h2>

                <textarea id="descripcionE" name="descripcionE" ></textarea>
          
          </div>


          <div class="form-group">
            <h2>Orden</h2>
            <input type="text" class="form-control input-lg" id="ordenE"   name="ordenE" required>
          
          </div>


          <div class="form-group">

          <h2>Imagen</h2>
          <input type="file" id="imagenE" name="fotoE">
          <p class="help-block"> Peso máximo permitido 200Mb </p>
          <img src="Vistas/img/defecto.jpg" class="img-thumbnail visor" width="300px;">
          <input type="hidden" name="imagenActual" id="imagenActual">

          </div>
        
        </div>

      </div>

      <div class="modal-footer">

      <button type="submit" class="btn btn-success">Guardar Cambios</button>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
      </div>
      

      
<?php

$actualizarS = new SlideC();
$actualizarS -> ActualizarSlideC();


?>

      </form>

</div><!--Fin modal content-->


</div><!--Fin modal dialog-->

</div><!--Fin modal fade-->

<!--Final  MODAL EDITAr-->

  


  <?php

    $borrarS = new SlideC();

    $borrarS -> BorrarSlideC();


?>