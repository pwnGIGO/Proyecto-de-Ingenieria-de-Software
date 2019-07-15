<?php
		// Atributos de la caja de texto
		$pregunta = array(
			'name' => 'pregunta',
			'placeholder' => '',
			'required' => 'required'
		);
		$regresar = base_url() . "Preguntas";
		$crearPreguntas_url = base_url() . "Preguntas/create";
?>
	<div class="container">
		<div class="form-group">
			<!-- label, input --><br>
		</div>
		<div class="form-group">
		</div>
	</div>
	<div class="container">
	 	<?= form_open($crearPreguntas_url) ?>
            <div class="card indigo form-white">
                <div class="card-body">
                    <h2 class="text-center white-text py-3"><i class="fa fa-user"></i>Crear pregunta</h2>
                    <!--Body-->
                    <div class="">
                        <i class="fa fa-envelope prefix white-text"></i>
                        <label><h5>Escribe tu pregunta: </h5></label>
                        <input maxlength="100" type="search" id="pregunta" name="pregunta" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required autocomplete="off" placeholder="Escribe tu pregunta">  
                    </div>
                    <br><br>
                    <div class="text-center">
                        <a href="<?php echo $crearPreguntas_url?>">
							<input class="btn btn-success" type="submit" name="" value="Crear Pregunta">
						</a>
						<a href="<?php echo $regresar?>" >
		              <input type="button" name="regresar" value="Cancelar" class="btn btn-warning">
	              </a>
                    </div>
                    
                 </div>
            </div>
        <?= form_close()?>
    </div>
