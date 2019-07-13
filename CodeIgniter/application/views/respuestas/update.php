<?php 
	$resultado = $respuesta->result()[0];
	$respuestaNueva = array(
		'name' => 'respuesta',
		'placeholder' => '',
		'required' => 'required',
		'value' => $respuesta->result()[0]->respuesta,
		'size' => '100'
	);
	$regresar = base_url() . "Preguntas/Respuestas/$idPregunta"; 
	$idRespuesta = $this->uri->segment(4);
	$actualizaRespuesta_url = base_url()."Preguntas/Respuestas/update";
?>

<div class="container">
	<div align="center">
		<h2>Actualizar Respuesta:</h2>
		<h3><?= $resultado->respuesta?></h3>
		<?php if($respuesta!=null):?>
			<?= form_open($actualizaRespuesta_url) ?>
				<input type="hidden" name="idRespuesta" value="<?php echo $resultado->idRespuesta ?>">
				<input type="hidden" name="idPregunta" value="<?php echo $idPregunta ?>">

				<?= form_label('Nombre','respuesta') ?>
				<?= form_input($respuestaNueva) ?>
				<br><br>
				<input type="submit" name="Actualizar" value="Actualizar" class="btn btn-info">
			<?= form_close()?>
		<?php endif?>
	</div>
	<a href="<?php echo $regresar?>" >
		<input type="button" name="regresar" value="Regresar" class="btn btn-warning">
	</a>
</div>