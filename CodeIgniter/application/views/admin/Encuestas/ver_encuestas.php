<h2>Encuestas</h2>
<br><br>

<a href="#"><input style="display: block;" type="button" name="submit" value="+ crear Encuesta"></a>
<br><br>

	<?php 
		$ruta_ima_encuestas = base_url()."assets/imagenes/cuestionario.png";
		#para obtener la imagen, se crea la ruta completa para no generar algun error 
		if ($encuestas) {		
			foreach ($encuestas->result() as $encuesta_aux) {  ?>

				<div style="display: inline-block;">
					<a href="#"><img src="<?php echo $ruta_ima_encuestas ?>"></a>
					<p><a href="#"><input type="button" name="eliminar" value="x eliminar"></a></p>
					<p><?= $encuesta_aux->idObjeto ?></p>	
				    <p><?= $encuesta_aux->nombreObjeto ?></p>
				    <!--<p><?= $encuesta_aux->descripcionObjeto ?></p> -->
				    <!--la descrpicon es muy grande y hay que acomodarla -->
				    <p>inicio <?= $encuesta_aux->fecha_inicio ?></p>
				    <p>fin <?= $encuesta_aux->fecha_fin ?></p>
				</div>    

		<?php } 
		} 
	?>