		<?php
			// Atributos de la caja de texto
			$respuesta = array(
				'name' => 'respuesta',
				'placeholder' => 'Respuesta',
				'required' => 'required'
			);
			// url para respuestasController/crearRespuesta............ de tipo post
			$crearRespuesta_url = base_url() . "Admin/Crear_Respuesta";
		?>

		<div class="container">
			<?= form_open($crearRespuesta_url) ?>
				<div class="card indigo form-white">
					<div class="card-body">
						<h3 class="text-center white-text py-3"><i class="fa fa-user"></i>Crear respuesta:</h3>
						<h3 class="text-center white-text py-3"><i class="fa fa-user"></i> Aqui va la pregunta a responder</h3>
						<div class="text-center">
							<i class="fa fa-envelope prefix white-text"></i>
							<?= form_label('Escribe tu respuesta') ?>
							<?= form_input($respuesta) ?>
						</div>

						<div align="center">
							<input class="btn btn-success" type="submit" name="" value="Crear Respuesta">
						</div>
					</div>
				</div>
			<?= form_close()?>
		</div>