		<?php
			// Atributos de la caja de texto
			$respuesta = array(
				'name' => 'respuesta',
				'placeholder' => '',
				'required' => 'required'
			);
			
			// url para preguntasController/crearPregunta Espera
			$idPregunta = $this->uri->segment(5);
			$crearRespuestas_url = base_url() . "Cuestionarios/Preguntas/Respuestas/create/".$idPregunta;
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
		 	<?= form_open($crearRespuestas_url) ?>
                <div class="card indigo form-white">
                    <div class="card-body">
                        <h2 class="text-center white-text py-3"><i class="fa fa-user"></i> Crear Respuesta</h2>
                        <!--Body-->
                        <div class="">
                            <i class="fa fa-envelope prefix white-text"></i>
                            <label><h5>Escribe tu respuesta:</h5></label>
                            <input type="search" id="respuesta" name="respuesta" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required autocomplete="off">
                        </div><br><br>
                        <div class="text-center">
                            <a href="<?php echo $crearRespuestas_url?>">
								<input class="btn btn-success" type="submit" name="" value="Crear Respuesta">
							</a>
                        </div>
                     </div>
                </div>
            <?= form_close()?>
        </div>

		