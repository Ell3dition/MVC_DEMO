<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Gestor de Usuarios
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          
        <button class="btn btn-primary" data-toggle="modal" data-target="#CrearUsuarios">Crear Usuario</button>

          
        </div>
        <div class="box-body">
         
        <table class="table table-bordered table-hover -table-stridep TB">


        <thead>
          
      <tr>
<th>N°</th>
<th>Nombre de Usuario</th>
<th>Contraseña</th>
<th>Foto</th>
<th>Rol</th>
<th>Editar/Eliminar</th>
      </tr>

        </thead>

        <tbody>

        <?php 
        
        $verU = new UsuariosC();
        $verU ->VerUsuarioC();

        $item= null;
        $valor = null;
        $editarU = UsuariosC::EUsuariosC($item,$valor);

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




  <!--CREAR MODAL USUARIOS-->

  <div class="modal fade" role="dialog" id="CrearUsuarios">

      <div class="modal-dialog">
      

      <div class="modal-content">
      
      
            <form method="post" role="form" enctype="multipart/form-data">
            
           <div class="modal-body">
            
              <div class="box-body">
              
                <div class="form-group">
                  <h2>Nombre de usuario</h2>
                  <input type="text" class="form-control input-lg" name="usuarioN" required>
                
                </div>

                <div class="form-group">
                  <h2>Contraseña</h2>
                  <input type="password" class="form-control input-lg" name="claveN" required>
                
                </div>

                <div class="form-group">
                  <h2>Seleccione Rol</h2>
                  <select class="form-control" name="rolN" >

                    <option >Seleccionar rol</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Editor de contenido">Editor de contenido</option>
                    <option value="Marketing">Marketing</option>

                  </select>
                
                </div>

                <div class="form-group">

                <h2>Foto</h2>
                <input type="file" name="fotoN">
                <p class="help-block"> Peso máximo permitido 200Mb </p>

                </div>
              
              </div>

            </div>

            <div class="modal-footer">

            <button type="submit" class="btn btn-primary">Crear</button>
            <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            </div>
            

            
<?php

$crearU = new UsuariosC();
$crearU -> CrearUsuariosC();

?>

            </form>

      </div><!--Fin modal content-->
      
      
      </div><!--Fin modal dialog-->

  </div><!--Fin modal fade-->
 
    <!--Final  MODAL USUARIOS-->







  
  


<?php

$borrarU = new UsuariosC();
$borrarU -> BorrarUsuariosC();


?>



  <!--CREAR  MODAL EDITAR-->



<div class="modal fade" role="dialog" id="EditarU">

<div class="modal-dialog">


<div class="modal-content">


      <form method="post" role="form" enctype="multipart/form-data">
      
     <div class="modal-body">
      
        <div class="box-body">
        
          <div class="form-group">
            <h2>Nombre de usuario</h2>
            <input type="text" class="form-control input-lg" id="usuarioE"   name="usuarioE" required>
            <input type="hidden" id="Uid" name="Uid">
          
          </div>

          <div class="form-group">
            <h2>Contraseña</h2>
            <input type="text" class="form-control input-lg" id="claveE" name="claveE" required>
          
          </div>

          <div class="form-group">
            <h2>Seleccione Rol</h2>
            <select class="form-control"  name="rolE" >

              <option id="rolE"></option>
              <option value="Administrador">Administrador</option>
              <option value="Editor de contenido">Editor de contenido</option>
              <option value="Marketing">Marketing</option>

            </select>
          
          </div>

          <div class="form-group">

          <h2>Foto</h2>
          <input type="file" id="fotoE" name="fotoE">
          <p class="help-block"> Peso máximo permitido 200Mb </p>
          <img src="Vistas/img/usuarios/defecto.png" class="img-thumbnail visor" width="100px;">
          <input type="hidden" name="FotoActual" id="FotoActual">

          </div>
        
        </div>

      </div>

      <div class="modal-footer">

      <button type="submit" class="btn btn-success">Guardar Cambios</button>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
      </div>
      

      
<?php



?>

      </form>

</div><!--Fin modal content-->


</div><!--Fin modal dialog-->

</div><!--Fin modal fade-->

<!--Final  MODAL EDITAr-->

  