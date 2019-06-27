		<?php
			// Atributos de la caja de texto
			$name_Cuestionario = array(
				'name' => 'nombre',
				'placeholder' => 'Nombre del Cuestionario',
				'required' => 'required',
			);

			$des_Cuestionario = array(
				'name' => 'descripcion',
				'placeholder' => 'Descripción del Cuestionario',
				'required' => 'required' 
			);

			// url para respuestasController/crearRespuesta............ de tipo post
			$crearCuestionario_url = base_url() . "Admin/Crear_Cuestionario";
		?>

		<div class="container">
			<?= form_open($crearCuestionario_url) ?>
				<div class="card indigo form-white">
					<div class="card-body">
						<h3 class="text-center white-text py-3"><i class="fa fa-user"></i>Crear Cuestionario</h3>
						<div class="text-center">
							<i class="fa fa-envelope prefix white-text"></i>
							<?= form_label('Nombre del Cuestionario') ?><br>
							<?= form_input($name_Cuestionario) ?><br><br>
							<?= form_label('Descripción del Cuestionario')?><br>
							<?= form_input($des_Cuestionario) ?>
						</div><br>

						<div align="center">
							<input class="btn btn-success" type="submit" name="" value="Crear Cuestionario">
						</div>
					</div>
				</div>
			<?= form_close()?>
		</div>