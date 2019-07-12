<div align="center"><h1>Crea un cuestionario</h1></div>
<br><br>
		
		<?php
			$crearCuestionario_url = base_url()."Cuestionarios/create";
			// Atributos de la caja de texto
			
			$nombreCuestionario= array(
				'name' => 'nombre',
				'placeholder' => '',
				'required' => 'required',
				'size' => '70',
				'maxlength' => '50',
				'autocomplete' => 'off'
			);

			
			
		?>

		<div class="container" >
			<?= form_open($crearCuestionario_url) ?>
				<div class="card indigo form-white">
					
						<div style="margin:25px; text-align: left;">
							<i class="fa fa-envelope prefix white-text"></i>
							<?= form_label('Nombre del Cuestionario') ?>
							<?= form_input($nombreCuestionario) ?><br><br>

							
						</div>

						<div align="center">
							<input class="btn btn-success" type="submit" name="" value="Crear Cuestionario">
						</div><br><br>
					
				</div>
			<?= form_close()?>
		</div>

</body>

</html>