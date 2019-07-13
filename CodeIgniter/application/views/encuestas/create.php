	<div align="center"><h1>Crea una encuesta</h1></div>
	<br>	
		<?php
			$fecha_actual=date("Y-m-d");
			$crearEncuesta_url = base_url()."Encuestas/create";
			// Atributos de la caja de texto
			$encuestas= array(
				'name' => 'nombre',
				'placeholder' => ' Nombre de la Encuesta',
				'required' => 'required',
				'size' => '60',
				'maxlength' => '50',
				'autocomplete' => 'off'
			);

			$fecha_i = array(
				'name' => 'fecha_inicio',
				'type' => 'date',
				'step' => '1',
				'min' => $fecha_actual,
				'max' => '',
				'value' => $fecha_actual,
				'required' => 'required',

			);

			$fecha_f = array(
				'name' => 'fecha_fin',
				'type' => 'date',
				'step' => '1',
				'min' => date("Y-m-d",strtotime($fecha_actual."+ 1 days")),
				'max' => '',
				'value' => date("Y-m-d",strtotime($fecha_actual."+ 1 days")),
				'required' => 'required'

			);

			$numero_encuestas= array(
				'name' => 'numero_encuestas',
				'placeholder' => '#',
				'type' => 'number',
				'required' => 'required',
				'min' => '1',
				'max' => '50'
			);
			
		?>

		<div class="container" >
			<?= form_open($crearEncuesta_url) ?>
				<div class="card indigo form-white">
					
						<div style="margin:25px; text-align: left;">
							<i class="fa fa-envelope prefix white-text"></i>
							<?= form_label('Nombre de la Encuesta:') ?><br>
							<?= form_input($encuestas) ?><br><br>

							<?= form_label('Fecha Inicio: ') ?><br>
							<?= form_input($fecha_i) ?><br><br>
							
							<?= form_label('Fecha Fin: ') ?><br>
							<?= form_input($fecha_f) ?><br><br>
							
							<?= form_label('Numero de Encuestas: ') ?>
							<?= form_input($numero_encuestas) ?><br><br>

							<?= form_label('Elige un Cuestionario:') ?>
							<select name="cuestionario_elegido">				
								<?php 
									if($cuestionarios){		
										foreach ($cuestionarios->result() as $cuestionario) {?>
											<option value="<?=$cuestionario->idCuestionario ?>"><?= $cuestionario->nombreCuestionario ?></option>   
									<?php } 
									} 
								?>
								
							</select>
						</div>

						<div align="center">
							<input class="btn btn-success" type="submit" name="" value="Crear Encuesta">
						</div><br><br>
				</div>
			<?= form_close()?>
		</div>
	</body>
</html>