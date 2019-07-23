<?php
   $crearUsuario_url = base_url()."Usuario/Crear";
   $editarUsuario_url = base_url() . "Usuario/Editar";
   $eliminarUsuario_url = base_url() . "Usuario/delete/";
  
    
     
?>

<div align="center">
   <h2>Usuarios</h2>
</div><br>

<div align="center">
   <a href="<?php echo $crearUsuario_url?>">
      <input class="btn btn-success" type="button" name="" value="Crear Usuario">
   </a>
</div><br><br>

<div class="container">
   <table class="table table-hover">
      <thead class="thead-light">
         <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre de usuario</th>
             <th scope="col">Correo</th>
            <th scope="col">Acción</th>
         </tr>
      </thead>
      <tbody>
         <?php if($usuarios != null):?>
            <?php foreach ($usuarios->result() as $usuario) {?>
               <tr>
                  <td><?= $usuario->idUsuario?></td>
                  <td><?= $usuario->nombreUsuario?></td>
                   <td><?= $usuario->correoUsuario?></td>
                  <td>
                     <div class="form-inline">
                        <!-- Editar Pregunta -->
                        <?= form_open($editarUsuario_url)?>
                           <input type="hidden" name="idUsuario" value="<?php echo $usuario->idUsuario?>">
                           <input class="btn btn-info" type="submit" name="Editar" value="Editar">
                        <?= form_close()?>
                        <!-- Eliminar Pregunta -->
                        <a href="<?php echo $eliminarUsuario_url . $usuario->idUsuario?>">
                           <input class="btn btn-danger" type="button" name="Eliminar" value="Eliminar">
                        </a>
                     </div> 
                  </td>
               </tr>
            <?php } ?>
         <?php endif?>
      </tbody>
   </table>
</div>