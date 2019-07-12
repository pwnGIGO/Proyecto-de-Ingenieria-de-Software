<?php
   $idCuestionario = "";
   $crearPregunta_url = base_url() . "Cuestionarios/Preguntas/Crear/".$idCuestionario;
   $editarPregunta_url = base_url() . "Cuestionarios/Preguntas/Editar/";
   $eliminarPregunta_url = base_url() . "Cuestionarios/Preguntas/delete/";
   // Respuestas
   $url_respuestas = base_url() . "Cuestionarios/Preguntas/Respuestas/";

   $url_regresar = base_url() . "Cuestionarios";
?>

<div align="center">
   <h2>Cuestionario:</h2>
   <h3>
      <?php
         foreach ($Cuestionario->result() as $fila){
            $idCuestionario = $fila->idCuestionario;
            $nombreCuestionario = $fila->nombreCuestionario; 
            echo $nombreCuestionario;
         }
      ?>
   </h3>
   <a href="<?php echo $url_regresar?>">   
      <input type="button" class="btn btn-info" name="Regresar" value="Regresar">
   </a>
</div>



   <div style="display: inline-block; width: 40%; margin: 30px;">
      <table class="table table-hover">
         <thead class="thead-light">
            <tr>
               <th scope="col">id</th>
               <th scope="col">Pregunta</th>
               <th scope="col">Acción</th>
            </tr>
         </thead>
         <tbody>
            <?php if($agregar!=null):?>
               <?php foreach ($agregar->result() as $pregunta) {?>
                  <tr>
                     <td><?= $pregunta->idPregunta?></td>
                     <td><?= $pregunta->pregunta?></td>
                     <td>
                        <div class="form-inline">
                           <a href="#">
                              <input class="btn btn-info" type="button" name="Agregar" value="->">
                           </a>
                        </div> 
                     </td>
                  </tr>
               <?php } ?>
            <?php endif?>
         </tbody>
      </table>
   </div>

   <div style="display: inline-block; width: 40%; margin: 30px;">
      <table class="table table-hover">
         <thead class="thead-light">
            <tr>
               <th scope="col">id</th>
               <th scope="col">Pregunta</th>
               <th scope="col">Acción</th>
            </tr>
         </thead>
         <tbody>
            <?php if($quitar!=null):?>
               <?php foreach ($quitar->result() as $pregunta) {?>
                  <tr>
                     <td><?= $pregunta->idPregunta?></td>
                     <td><?= $pregunta->pregunta?></td>
                     <td>
                        <div class="form-inline">
                           <form>
                              <input class="btn btn-danger" type="button" name="Eliminar" value="<-">
                           </form>
                           <form>
                              <input class="btn btn-danger" type="button" name="Eliminar" value="Subir">
                           </form>
                           <form>
                              <input class="btn btn-danger" type="button" name="Eliminar" value="Bajar">
                           </form>
                           </a>
                        </div> 
                     </td>
                  </tr>
               <?php } ?>
            <?php endif?>
         </tbody>
      </table>
   </div>
