		<?php
			// Atributos de la caja de texto
			$pregunta = array(
				'name' => 'pregunta',
				'placeholder' => 'Pregunta',
				'required' => 'required'
			);
			// atributos del radio button
			$abierta = array(
				'name' => 'tipoPregunta',
				'value' => 'abierta',
				'checked' => 'checked',
			);

			$multiple = array(
				'name' => 'tipoPregunta',
				'value' => 'multiple',
			);
			// url para preguntasController/crearPregunta
			$crearPregunta_url = base_url() . "Admin/Crear_Pregunta";
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
		 	<?= form_open($crearPregunta_url) ?>
                    <div class="card indigo form-white">
                        <div class="card-body">
                            <h3 class="text-center white-text py-3"><i class="fa fa-user"></i> Crear pregunta:</h3>
                            <!--Body-->
                            <div class="text-center">
                                <i class="fa fa-envelope prefix white-text"></i>
                                <?= form_label('Escribe tu pregunta') ?>
                                <?= form_input($pregunta) ?>
                            </div>
                            <div class="text-center">
                                <?= form_label('Abierta','tipoPregunta') ?>
					<?= form_radio($abierta) ?>
					<?= form_label('Multiple','tipoPregunta') ?>
					<?= form_radio($multiple) ?>
                            </div>
                            <div class="text-center">
                                <a href="<?php echo $crearPregunta_url?>">
					<input class="btn btn-success" type="submit" name="" value="Crear Pregunta">
				</a>
                            </div>

                        </div>
                    </div>
                    <?= form_close()?>
                </div>