   <!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

   </head>
   <body>
<?php
   $idCuestionario = "";
   $crearPregunta_url = base_url() . "Cuestionarios/Preguntas/Crear/".$idCuestionario;
   $editarPregunta_url = base_url() . "Cuestionarios/Preguntas/Editar/";
   $eliminarPregunta_url = base_url() . "Cuestionarios/Preguntas/delete/";
   // Respuestas
   $url_respuestas = base_url() . "Cuestionarios/Preguntas/Respuestas/";

   $url_regresar = base_url() . "Cuestionarios";
   $url_agregar = base_url()."Cuestionarios/Preguntas/Agregar";
   $url_Remover = base_url()."Cuestionarios/Preguntas/Remover";
    
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
      <button type="button" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-circle-arrow-left"></span> Regresar</button></a>
</div>



   <div style=" width: 45%; padding: 15px; float: left;">
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
                           <form action="<?php echo $url_agregar ?>" method="POST">
                              <input type="hidden" name="idCuestionario" value="<?php echo $idCuestionario?>">
                              <input type="hidden" name="idPregunta" value="<?php echo $pregunta->idPregunta?>">
                              <input class="btn btn-info" type="submit" name="Agregar" value="->">
                           </form>
                        </div> 
                     </td>
                  </tr>
               <?php } ?>
            <?php endif?>
         </tbody>
      </table>
   </div>

   <div style=" width: 45%; padding: 10px; float: right;">
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
                           <form action="<?php echo $url_Remover ?>" method="POST">
                              <input type="hidden" name="idCuestionario" value="<?php echo $idCuestionario?>">
                              <input type="hidden" name="idPregunta" value="<?php echo $pregunta->idPregunta?>">
                              <input class="btn btn-danger" type="submit" name="Eliminar" value="<-">
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

</body>
</html>