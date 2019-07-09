<?php
   $idCuestionario = $this->uri->segment(3);
   $crearPregunta_url = base_url() . "Cuestionarios/Preguntas/Crear/".$idCuestionario;
   $editarPregunta_url = base_url() . "Cuestionarios/Preguntas/Editar/";
   $eliminarPregunta_url = base_url() . "Cuestionarios/Preguntas/delete/";
   // Respuestas
   $url_respuestas = base_url() . "Cuestionarios/Preguntas/Respuestas/";
?>

<div align="center">
   <h2>Cuestionario:</h2>
   <h3>
      <?php
         foreach ($p->result() as $pe){
            echo $pe->nombreCuestionario; 
         }
      ?>
   </h3>
</div>

<br>

<div align="center">
   <a href="<?php echo $crearPregunta_url?>">
      <input class="btn btn-success" type="button" name="" value="Crear Pregunta">
   </a>
</div>

<br><br>

<div class="container">
   <table class="table table-hover">
      <thead class="thead-light">
         <tr>
            <th scope="col">id</th>
            <th scope="col">Pregunta</th>
            <th scope="col">Acción</th>
         </tr>
      </thead>
      <tbody>
         <?php if($preguntas!=null):?>
            <?php foreach ($preguntas->result() as $pregunta) {?>
               <tr>
                  <td><?= $pregunta->idPregunta?></td>
                  <td><?= $pregunta->pregunta?></td>
                  <td>
                     <div class="form-inline">
                        <!-- Respuestas -->
                        <a href="<?php echo $url_respuestas . $pregunta->idPregunta?>">
                           <input class="btn btn-warning" type="button" name="respuestas" value="Respuestas">
                        </a>
                        <!-- Editar Pregunta -->
                        <?= form_open($editarPregunta_url . $pregunta->idPregunta)?>
                           <input type="hidden" name="idCuestionario" value="<?php echo $idCuestionario?>">
                           <input class="btn btn-info" type="submit" name="Editar" value="Editar">
                        <?= form_close()?>
                        <!-- Eliminar Pregunta -->
                        <a href="<?php echo $eliminarPregunta_url . $pregunta->idPregunta?>">
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