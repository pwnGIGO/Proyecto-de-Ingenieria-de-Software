      <?php
         // Preguntas
         //extraer el id.
         //mandarlo
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
                  <th scope="col">Respuesta</th>
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
                           <a href="<?php echo $url_respuestas . $pregunta->idPregunta?>">
                              <input class="btn btn-warning" type="button" name="respuestas" value="Respuestas">
                           </a>
                           <a href="<?php echo $editarPregunta_url . $pregunta->idPregunta?>">
                              <input class="btn btn-info" type="button" name="Editar" value="Editar">
                           </a>
                           <form href="<?php echo $eliminarPregunta_url ?>" method="post">
                              <input type="hidden" name="idPregunta" value=" <?php echo $pregunta->idPregunta?>">
                              <input class="btn btn-danger" type="submit" name="Eliminar" value="Eliminar">
                           </form>
                        </td>
                     </tr>
                  <?php } ?>
               <?php endif?>
            </tbody>
         </table>
      </div>
      <br>