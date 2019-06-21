		<?php
			$pregunta = array(
				'name' => 'pregunta',
				'placeholder' => 'Pregunta',
				'required' => 'required'
			);

			$tipoPregunta = array(
				'name' => 'tipoPregunta',
				'placeholder' => 'Tipo de la Pregunta',
				'required' => 'required'
			);

			$crearPregunta_url = base_url() . "Admin/Crear_Pregunta";
		?>

		<div align="center">
			<?= form_open($crearPregunta_url) ?>
				<div class="form-group">
					<?= form_label('Pregunta','Pregunta') ?>
					<?= form_input($pregunta) ?>
				</div>
				<form>
					<div class="form-group">
						<label class="radio-inline">
							<input type="radio" name="pregunta">Abierta
						</label>
						<label class="radio-inline">
							<input type="radio" name="pregunta">Multiple
						</label>
					</div>
				</form>
				<div align="center">
			<a href="<?php echo $crearPregunta_url?>">
				<input class="btn btn-success" type="submit" name="" value="Crear Pregunta">
			</a>
		</div>
			<?= form_close()?>
		</div>