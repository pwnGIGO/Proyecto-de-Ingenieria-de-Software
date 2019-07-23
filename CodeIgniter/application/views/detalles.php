
<?php
	if($encuesta){
		foreach ($encuesta->result() as $fila){
        	$idEncuesta = $fila->idEncuesta; 
        	$nombreEncuesta = $fila->nombreEncuesta;
    	}
	}
	if($cuestionario){
		foreach ($cuestionario->result() as $fila){
        	$idCuestionario = $fila->idCuestionario;
        	$nombreCuestionario = $fila->nombreCuestionario;
        	$descripcion = $fila->descripcionCuestionario;
    	}
	}
    
?>
<div class="container" align="center">

	<h2><?php echo $nombreEncuesta?></h2>
	<h3><?php echo $nombreCuestionario?></h3>
	<h4><?php echo $descripcion?></h4>

	<form action="<?php echo base_url(). "Pregunta"?>" method = "POST">
		<input type="hidden" name="idEncuesta" value="<?php echo $idEncuesta ?>">
		<input type="hidden" name="idCuestionario" value="<?php echo $idCuestionario ?>">
		<input type="submit" name="" class="btn btn-success" value="Comenzar">
	</form>

</div>