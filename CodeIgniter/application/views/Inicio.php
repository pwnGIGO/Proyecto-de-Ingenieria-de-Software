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
		<div class="container" align="center">
			<h3>Aplicar Encuesta</h3>
		</div>

		<?php 
			$aplicar = base_url() . "Aplicar_Encuesta";
 		?>

		<div align="center">
		
		<?php 
			$ruta_ima_encuestas = base_url()."assets/imagenes/encuestas.png";
			#para obtener la imagen, se crea la ruta completa para no generar algun error 
			if ($encuestas) {		
				foreach ($encuestas->result() as $encuesta_aux) {  ?>
				<div style="display: inline-block; margin:20px; text-align: left;">
					<h4><?= $encuesta_aux->nombreEncuesta ?></h4>

					<form action="<?php echo $aplicar?>" method = "POST">
						<input type="hidden" name="idEncuesta" value="<?php echo $encuesta_aux->idEncuesta ?>">
						<button type="submit">
							<img src="<?php echo $ruta_ima_encuestas ?>">
						</button>
					</form>

				    <p>Inicia: <?= $encuesta_aux->fechaInicial ?></p>
				    <p>Finaliza: <?= $encuesta_aux->fechaFinal ?></p>
				</div>    
				<?php } 
			} 
		?>
		</div>
	</body>
</html>