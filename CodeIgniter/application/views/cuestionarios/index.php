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
		<input class="btn btn-success" type="button" name="submit" value="Crear Cuestionario">
	</a>
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
							<input class="btn btn-info" type="button" name="editar" value="Editar">
						</a>
					</p>

					<p>
						<a href="<?= $url_eliminar.$cuestionario->idCuestionario ?>">
							<input class="btn btn-danger" type="button" name="eliminar" value="Eliminar">
						</a>
					</p>
				</div>    
		<?php } 
		} 
	?>
</div>