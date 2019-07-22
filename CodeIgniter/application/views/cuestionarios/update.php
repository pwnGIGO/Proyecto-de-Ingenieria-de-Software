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
	<div align="center"><h1>Editar cuestionario</h1></div>
	<br><br>
		<?php
			
			// Atributos de la caja de texto
			$resultado = $cuestionario->result()[0];
			$nombreCuestionario= array(
				'name' => 'nombreCuestionario',
				'placeholder' => ' ',
				'required' => 'required',
				'value' => $cuestionario->result()[0]->nombreCuestionario,
				'size' => '70',
				'maxlength' => '50',
				'autocomplete' => 'off'
			);

			$descripcionCuestionario= array(
				'name' => 'descripcion',
				'placeholder' => '',
				'required' => 'required',
				'value' => $cuestionario->result()[0]->descripcionCuestionario,
				'size' => '',
				'autocomplete' => 'off'
			);
	$regresar = base_url() . "Cuestionarios"; 
	$idCuestionario = $this->uri->segment(3);
	$actualizaCuestionario_url = base_url()."Cuestionarios/update/".$idCuestionario;
?>

		<div class="container" >
			
			<?php if($cuestionario != null):?>
			  <?= form_open($actualizaCuestionario_url) ?>
				<div class="card indigo form-white">
					<div style="margin:25px; text-align: left;">
						<i class="fa fa-envelope prefix white-text"></i>
						<?= form_label('Nombre del Cuestionario: ') ?>
						<?= form_input($nombreCuestionario) ?><br><br>

						<?= form_label('Descripcion: ') ?><br>
						<?= form_textarea($descripcionCuestionario) ?> 
					
					</div>
					<div align="center">
						<input type="submit" name="Actualizar" value="Actualizar" class="btn btn-info">
						<a href="<?php echo $regresar?>" >
		                <input type="button" name="regresar" value="Regresar" class="btn btn-warning">
					</div>
					<br><br>
				</div>
			   <?= form_close()?>
			<?php endif?>
		</div>
	</body>
</html>
