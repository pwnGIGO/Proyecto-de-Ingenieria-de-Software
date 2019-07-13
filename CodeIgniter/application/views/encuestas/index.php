		<div class="container">
			<h3>Encuestas</h3>
		</div>

		<?php 
			$ruta_crearEncuesta = base_url()."Encuestas/Crear";
			$ruta_eliminarEncuesta = base_url()."Encuestas/delete/";
 		?>

		<div align="center">
			<a href="<?php echo $ruta_crearEncuesta ?>">
				<input class="btn btn-success" type="button" name="submit" value="Crear Encuesta">
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
							<input class="btn btn-success" type="button" name="eliminar" value="Eliminar">
						</a>
						<a href="#">
							<input class="btn btn-success" type="button" name="editar" value="Editar">
						</a>
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
