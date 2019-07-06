<?php
			// Atributos de la caja de texto
			$pregunta = array(
				'name' => 'pregunta',
				'placeholder' => '',
				'required' => 'required'
			);
			
			// url para preguntasController/crearPregunta Espera
			$idCuestionario = $this->uri->segment(4);
			$crearPreguntas_url = base_url() . "Cuestionarios/Preguntas/create/".$idCuestionario;
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
		 	<?= form_open($crearPreguntas_url) ?>
                    <div class="card indigo form-white">
                        <div class="card-body">
                            <h2 class="text-center white-text py-3"><i class="fa fa-user"></i> Crear pregunta</h2>
                            <!--Body-->
                            <div class="">
                                <i class="fa fa-envelope prefix white-text"></i>
                                <label><h5>Escribe tu pregunta :</h5></label>
                                <input type="search" id="pregunta" name="pregunta" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"required autocomplete="off">
                                
                            </div>
                            <br>
                            <br>
                            <div class="text-center">
                                <a href="<?php echo $crearPreguntas_url?>">
					<input class="btn btn-success" type="submit" name="" value="Crear Pregunta">
				</a>
                            </div>

                        </div>
                    </div>
                    <?= form_close()?>
                </div>
