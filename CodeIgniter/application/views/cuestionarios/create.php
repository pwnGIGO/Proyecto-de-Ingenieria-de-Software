	<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	</head>
	<body>
	<div align="center"><h1>Crea un cuestionario</h1></div>
	<br><br>
		<?php
			$crearCuestionario_url = base_url()."Cuestionarios/create";
			// Atributos de la caja de texto
			
			$nombreCuestionario= array(
				'name' => 'nombre',
				'placeholder' => ' Nombre del Cuestionario',
				'required' => 'required',
				'size' => '70',
				'maxlength' => '50',
				'autocomplete' => 'off'
			);

			$descripcion= array(
				'name' => 'descripcion',
				'placeholder' => ' Agrega una descripcion del cuestionario',
				'required' => 'required',
				'size' => '',
				'autocomplete' => 'off'
			);

			

		?>

		<div class="container" >
			<?= form_open($crearCuestionario_url) ?>
				<div class="card indigo form-white">
					<div style="margin:25px; text-align: left;">
						<i class="fa fa-envelope prefix white-text"></i>
						<?= form_label('Nombre del Cuestionario: ') ?>
						<?= form_input($nombreCuestionario) ?><br><br>

						<?= form_label('Descripcion: ') ?><br>
						
						<textarea required name="descripcion" placeholder="Agrega una descripcion del Cuestionario"  maxlength="500" rows="8" style="width: 80%; " ></textarea>  
					
					</div>
					<div align="center">
						<button type="submit" class="btn btn-success" > Crear 
 							 <span class="glyphicon glyphicon-plus"></span> 
  							</button>
					</div><br><br>
				</div>
			<?= form_close()?>
		</div>
	</body>
</html>