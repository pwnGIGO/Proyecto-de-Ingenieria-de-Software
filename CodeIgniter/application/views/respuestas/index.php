	<!-- Read -->
		<?php
			// Respuestas
			$idPregunta = $this->uri->segment(3);
			$crearRespuesta_url = base_url() . "Preguntas/Respuestas/Crear/" . $idPregunta;
			$editarRespuesta_url = base_url() . "Preguntas/Respuestas/Editar/";
			$eliminarRespuesta_url = base_url() . "Preguntas/Respuestas/delete/";

		?>
		

		<div align="center">
			<h2>Pregunta:</h2>
			<h3>
				<?php
		        	foreach ($p->result() as $pe){
		           		echo $pe->pregunta; 
		           		$idPregunta = $pe->idPregunta;
	        ?>
			</h3>
		</div>
		<br>
		<div align="center">
			<a href="<?php echo $crearRespuesta_url?>">
            <input class="btn btn-success" type="button" name="" value="Crear Respuesta">
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
					<?php if($respuestas!=null):?>
						<?php foreach ($respuestas->result() as $respuesta) {?>
							<tr>
								<td><?= $respuesta->idRespuesta?></td>
								<td><?= $respuesta->respuesta?></td>
								<td>

									<div class="form-inline">
										
										<form action="<?php echo $editarRespuesta_url?>" method="POST">
											<input type="hidden" name="idPregunta" value="<?php echo $pe->idPregunta?>">
											<input type="hidden" name="idRespuesta" value="<?php echo $respuesta->idRespuesta?>">
											<input class="btn btn-info" type="submit" name="Editar" value="Editar">
										</form>
										<a href="<?php echo $eliminarRespuesta_url . $respuesta->idRespuesta?>">
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
		<br>
<?php } ?>
</body>

</html>