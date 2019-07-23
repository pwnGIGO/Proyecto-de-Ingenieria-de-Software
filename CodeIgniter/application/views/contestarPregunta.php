<br><br><br><br><br><br>
<div class="container" align="center">

	<?php

		$url_siguiente = base_url() . "Siguiente";
		echo "<h2>".($num + 1) . " .-".$pregunta->pregunta."</h2>";
	?>
	<hr>
	<form action="<?php echo $url_siguiente;?>" method="post">

		<input type="hidden" name="idEncuesta" value="<?php echo $idEncuesta ?>">
		<input type="hidden" name="idCuestionario" value="<?php echo $idCuestionario ?>">
		<input type="hidden" name="num" value="<?php echo $num?>">

			<?php
				$dato =0;
			//no me funciona bien el boostrap
				foreach ($respuestas->result() as $respuesta) {?>
					<div class="row">
					<div class="col-md-9 col-md-push-3">
						
					<div class="radio" style="">
						<?php if($dato == 0) { $dato = 1 ?>
							<h4>
								
							<label class="radio"><?php echo $respuesta->respuesta ?>
								<input  type="radio" name="respuesta" value="<?php echo $respuesta->idRespuesta ?>" checked>
								<span class="checkround"></span>
							</label>
							</h4>
						<?php }else{ ?>
							<h4>
								
							<label class="radio"><?php echo $respuesta->respuesta ?>
								<input  type="radio" name="respuesta" value="<?php echo $respuesta->idRespuesta ?>">
								<span class="checkround"></span>
							</label>
							</h4>
						<?php } ?>
							
					</div>
					</div>
					</div>
			<?php } ?>

		<br>
		<input class="btn btn-info btn-lg" type="submit" name="Siguiente" value="Siguiente">
	</form>	

</div>