<div align="center"><h2>Encuestas que puedes responder sin logearte...</h2></div>
<br><br>

<br><br>

	<?php 
		$ruta_ima_encuestas = base_url()."assets/imagenes/cuestionario.png";
		#para obtener la imagen, se crea la ruta completa para no generar algun error 
		if ($encuestas) {		
			foreach ($encuestas->result() as $encuesta_aux) {  ?>

				<div style="display: inline-block; margin:20px; text-align: center;">
					<a href="#"><img src="<?php echo $ruta_ima_encuestas ?>"></a>
				    <p><?= $encuesta_aux->nombreObjeto ?></p>
				    <!--<p><?= $encuesta_aux->descripcionObjeto ?></p> -->
				    <!--la descrpicon es muy grande y hay que acomodarla -->
				    <p>inicio <?= $encuesta_aux->fecha_inicio ?></p>
				    <p>fin <?= $encuesta_aux->fecha_fin ?></p>
				</div>    

		<?php } 
		} 
	?>