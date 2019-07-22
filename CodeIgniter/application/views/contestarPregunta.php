<br><br><br><br><br><br>
<div class="container" align="center">

	<?php

		$url_siguiente = base_url() . "Siguiente";
		echo $num + 1 . " .-";
        echo $pregunta->pregunta;
	?>

	<form action="<?php echo $url_siguiente;?>" method="post">

		<input type="hidden" name="idEncuesta" value="<?php echo $idEncuesta ?>">
		<input type="hidden" name="idCuestionario" value="<?php echo $idCuestionario ?>">
		<input type="hidden" name="num" value="<?php echo $num?>">

			<?php

			//no me funciona bien el boostrap
				foreach ($respuestas->result() as $respuesta) {?>

					<div class="radio" style="">
						<label class="radio"><?php echo $respuesta->respuesta ?>
							<input  type="radio" value="<?php echo $respuesta->idRespuesta ?>">
							<span class="checkround"></span>
						</label>
					</div>
					
			<?php } ?>

		<br>
		<input class="btn btn-info btn-lg" type="submit" name="Siguiente" value="Siguiente">
	</form>	

</div>