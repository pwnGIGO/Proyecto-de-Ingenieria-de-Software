		<!-- Read -->
		<?php       
			$crearPregunta_url = base_url() . "Admin/Crea_una_pregunta";
			$eliminarPregunta_url = base_url() . "Admin/Eliminar_Pregunta/";
		?>
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
						<th scope="col">Tipo</th>
						<th scope="col">Acción</th>
					</tr>
				</thead>
				<tbody>
					<?php if($preguntas!=null):?>
						<?php foreach ($preguntas->result() as $pregunta) {?>
							<tr>
								<td><?= $pregunta->idPregunta?></td>
								<td><?= $pregunta->pregunta?></td>
								<td><?= $pregunta->tipoPregunta?></td>
								<td>
									<a href="#">
										<input class="btn btn-info" type="button" name="Editar" value="Editar">
									</a>
									<a href="<?php echo $eliminarPregunta_url.$pregunta->idPregunta?>">
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