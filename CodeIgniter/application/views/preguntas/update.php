<?php 
	$resultado = $pregunta->result()[0];

	$preguntaNueva = array(
		'name' => 'pregunta',
		'placeholder' => 'Escribe tu pregunta aqui',
		'required' => 'required',
		'value' => $pregunta->result()[0]->pregunta,
		'size' => '100'
	);

	$actualizaPregunta_url = base_url()."Cuestionarios/Preguntas/update";
?>

<div class="container">
	<div align="center">
		<h2>Actualizar Pregunta:</h2>
		<h3><?= $resultado->pregunta?></h3>
		<?php if($pregunta!=null):?>
			<?= form_open($actualizaPregunta_url) ?>
				<input type="hidden" name="idPregunta" value="<?php echo $resultado->idPregunta ?>">
				<?= form_label('Nombre','pregunta') ?>
				<?= form_input($preguntaNueva) ?>
				<br><br>
				<?= form_submit('', 'Actualizar') ?>
			<?= form_close()?>
		<?php endif?>
	</div>
</div>