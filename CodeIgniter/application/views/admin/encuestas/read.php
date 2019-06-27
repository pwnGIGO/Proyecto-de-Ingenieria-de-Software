<?php   $crearEncuesta_url = base_url() . "Admin/Crea_una_encuesta";	?>

<div align="center"><h2>Encuestas Administrador</h2></div>
<br><br>

<div align="center">
<a href="<?php echo $crearEncuesta_url?>">
				<input class="btn btn-success" type="button" name="" value="+ Crear Encuesta">
<br><br>
</div>


	<?php 
		$ruta_ima_encuestas = base_url()."assets/imagenes/cuestionario.png";
		#para obtener la imagen, se crea la ruta completa para no generar algun error 
		if ($encuestas) {		
			foreach ($encuestas->result() as $encuesta_aux) {  ?>

				<div style="display: inline-block; margin:20px; text-align: center;">
					<a href="#"><img src="<?php echo $ruta_ima_encuestas ?>"></a>
					<p><a href="#"><input class="btn btn-success" type="button" name="eliminar" value="x eliminar"></a></p>
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