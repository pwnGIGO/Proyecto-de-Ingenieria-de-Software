<?php 
	$resultado = $pregunta->result()[0];

	$preguntaNueva = array(
		'name' => 'pregunta',
		'placeholder' => 'Escribe tu pregunta aquí.',
		'required' => 'required',
		'value' => $pregunta->result()[0]->pregunta,
		'size' => '125',
		'maxlength' => '100',
		'autocomplete' => 'off'
	);
	$regresar = base_url() . "Preguntas"; 
	$idPregunta = $this->uri->segment(3);
	$actualizaPregunta_url = base_url()."Preguntas/update".$idPregunta;
?>

<div class="container">
	<div align="center">
		<h2>Actualizar Pregunta:</h2>
		<h3><?= $resultado->pregunta?></h3>
		<?php if($pregunta != null):?>
			<?= form_open($actualizaPregunta_url) ?>
				<input type="hidden" name="idPregunta" value="<?php echo $resultado->idPregunta ?>">
				<?= form_label('Nombre','pregunta') ?>
				<?= form_input($preguntaNueva) ?>
				<br><br>
				<input type="submit" name="Actualizar" value="Actualizar" class="btn btn-info">
			<?= form_close()?>
		<?php endif?>
	</div>
	<a href="<?php echo $regresar?>" >
		<input type="button" name="regresar" value="Regresar" class="btn btn-warning">
	</a>
</div>