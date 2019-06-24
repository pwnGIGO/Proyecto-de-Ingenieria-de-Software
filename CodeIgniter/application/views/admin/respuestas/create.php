		<?php
			// Atributos de la caja de texto
			$respuesta = array(
				'name' => 'respuesta',
				'placeholder' => 'Respuesta',
				'required' => 'required'
			);
			// atributos del radio button
			$abierta = array(
				'name' => 'tipo',
				'value' => 'abierta',
				'checked' => 'checked',
			);

			$multiple = array(
				'name' => 'tipo',
				'value' => 'multiple',
			);
			// url para preguntasController/crearPregunta
			$crearRespuesta_url = base_url() . "Admin/Crear_Respuesta";
		?>

		<div class="container">
			
				<div class="form-group">
					<!-- label, input -->
					
					<br>
					
				</div>
				<div class="form-group">
					
				</div>

				
			
		</div>


		 <div class="container">
		 	<?= form_open($crearRespuesta_url) ?>
                    <div class="card indigo form-white">
                        <div class="card-body">
                            <h3 class="text-center white-text py-3"><i class="fa fa-user"></i> Crear Respuesta:</h3>
                            <!--Body-->
                            <div class="text-center">
                                <i class="fa fa-envelope prefix white-text"></i>
                                <?= form_label('Escribe tu respuesta') ?>
                                <?= form_input($respuesta) ?>
                            </div>
                            <div class="text-center">
                                <?= form_label('Abierta','tipo') ?>
					<?= form_radio($abierta) ?>
					<?= form_label('Multiple','tipo') ?>
					<?= form_radio($multiple) ?>
                            </div>
                            <div class="text-center">
                                <a href="<?php echo $crearRespuesta_url?>">
					<input class="btn btn-success" type="submit" name="" value="Crear Respuesta">
				</a>
                            </div>

                        </div>
                    </div>
                    <?= form_close()?>
                </div>