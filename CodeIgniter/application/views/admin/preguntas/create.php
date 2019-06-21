		<?php
			$pregunta = array(
				'name' => 'Pregunta',
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
			<?= form_open('') ?>
				<div class="form-group">
					<?= form_label('Pregunta','pregunta') ?>
					<?= form_input($pregunta) ?>
				</div>
				<div class="form-group">
					<?= form_label('Tipo','tipoPregunta') ?>
					<?= form_input($tipoPregunta) ?>
				</div>
				<?= form_submit('', 'Crear pregunta') ?>
			<?= form_close()?>
		</div>