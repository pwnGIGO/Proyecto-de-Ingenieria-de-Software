		<!-- Read -->
		<?php
			// Respuestas
			$crearRespuesta_url = base_url() . "Cuestionarios/Preguntas/Respuestas/Crear";
			$editarRespuesta_url = base_url() . "Cuestionarios/Preguntas/Respuestas/Editar/";
			$eliminarRespuesta_url = base_url() . "Cuestionarios/Preguntas/Respuestas/delete/";
		?>
		<div align="center">
			<h2>Pregunta:</h2>
			<h3>
				<?php
		        foreach ($p->result() as $pe){
		           echo $pe->pregunta; 
	            }
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
									<a href="<?php echo $editarRespuesta_url . $respuesta->idRespuesta?>">
										<input class="btn btn-info" type="button" name="Editar" value="Editar">
									</a>
									<a href="<?php echo $eliminarRespuesta_url . $respuesta->idRespuesta?>">
										<input class="btn btn-danger" type="button" name="Eliminar" value="Eliminar">
									</a>
								</td>
							</tr>
						<?php } ?>
					<?php endif?>
				</tbody>
			</table>
		</div>
		<br>
