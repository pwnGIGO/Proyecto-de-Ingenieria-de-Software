		<!-- Read -->
		<?php
			$crearPregunta_url = base_url() . "Admin/Crear_Pregunta";
		?>
		<div align="center">
			<button  type="button" class="btn btn-success">Crear Pregunta</button>
			<a href="<?php echo $crearPregunta_url?>">Crear Pregunta</a>
		</div>
		<br><br>
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
								<button type="button" class="btn btn-info">
									<a href="#"></a>Editar
								</button>
								<button type="button" class="btn btn-danger">Eliminar</button>
							</td>
						</tr>
					<?php } ?>
				<?php endif?>
			</tbody>
		</table>
		<br>