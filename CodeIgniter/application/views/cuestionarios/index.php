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
<?php   
	$ruta_ima_cuestionario = base_url()."assets/imagenes/cuestionario.png";
	#para obtener la imagen, se crea la ruta completa para no generar algun error 
	// Cuestionario
	$url_crear = base_url() . "Cuestionarios/Crear";
	$url_editar = base_url() . "Cuestionarios/Editar/";
	$url_eliminar = base_url() . "Cuestionarios/delete/";

	// Preguntas
	$url_preguntas = base_url() . "Cuestionarios/Preguntas";
 ?>


<div align="center">
	<h2>Cuestionarios</h2>
</div>

<br>
<br>

<div align="center">
	<a href="<?php echo $url_crear ?>">
			 <button type="submit" class="btn btn-success" > Crear cuestionario  
		 <span class="glyphicon glyphicon-plus"></span> 
  		 </button>
	<br><br>
</div>

<div align="center">
	<?php 
		if($cuestionarios){		
			foreach ($cuestionarios->result() as $cuestionario) {?>
				<div style="display: inline-block; margin:20px; text-align: left;">

					<h4><?= $cuestionario->nombreCuestionario ?></h4>

						<!-- <img src="<?php echo $ruta_ima_cuestionario ?>"> -->
						<form action="<?= $url_preguntas ?>" method = "POST">
							<input type="hidden" name="idCuestionario" value="<?php echo $cuestionario->idCuestionario?>">
							<button type="submit">
								<img src="<?php echo $ruta_ima_cuestionario ?>">
							</button>
						</form>
					

					<br><br>
					<p>
						<a href="<?= $url_editar.$cuestionario->idCuestionario ?>">
								 <button type="button" class="btn btn-info" >
 							 <span class="glyphicon glyphicon-pencil"></span> 
  							</button>
						</a>
					</p>

					<p>
						<a href="<?= $url_eliminar.$cuestionario->idCuestionario ?>">
								<button type="button" class="btn btn-danger "> <span class="glyphicon glyphicon-trash"></span></button>
						</a>
					</p>
				</div>    
		<?php } 
		} 
	?>
</div>