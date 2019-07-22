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
		<div class="container">
			<h3>Encuestas</h3>
		</div>

		<?php 
			$ruta_crearEncuesta = base_url()."Encuestas/Crear";
			$ruta_eliminarEncuesta = base_url()."Encuestas/delete/";
			$ruta_editarEncuesta = base_url()."Encuestas/Editar";
 		?>

		<div align="center">
			<a href="<?php echo $ruta_crearEncuesta ?>">
				<button type="submit" class="btn btn-success" > Crear encuesta
				<span class="glyphicon glyphicon-plus"></span> 
                </button></a>			
            </a><br><br>
		<?php 
			$ruta_ima_encuestas = base_url()."assets/imagenes/encuestas.png";
			#para obtener la imagen, se crea la ruta completa para no generar algun error 
			if ($encuestas) {		
				foreach ($encuestas->result() as $encuesta_aux) {  ?>
				<div style="display: inline-block; margin:20px; text-align: left;">
					<h4><?= $encuesta_aux->nombreEncuesta ?></h4>
					<a href="#"><img src="<?php echo $ruta_ima_encuestas ?>"></a>
					<p>
						<a href="<?php echo $ruta_eliminarEncuesta . $encuesta_aux->idEncuesta ?>">
							<button type="button" class="btn btn-danger "> <span class="glyphicon glyphicon-trash"></span></button>
						</a>
						<?= form_open($ruta_editarEncuesta)?>
                           <input type="hidden" name="idEncuesta" value="<?php echo $encuesta_aux->idEncuesta?>">
                           <input class="btn btn-info" type="submit" name="Editar" value="Editar">
                        <?= form_close()?>
					</p>	
				    <p>Inicia: <?= $encuesta_aux->fechaInicial ?></p>
				    <p>Finaliza: <?= $encuesta_aux->fechaFinal ?></p>
				</div>    
				<?php } 
			} 
		?>
		</div>
	</body>
</html>
