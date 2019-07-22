<?php 
	$resultado = $encuesta->result()[0];
	$fecha_actual=date("Y-m-d");

	$encuestaNueva = array(
		'name' => 'encuesta',
		'placeholder' => 'Escribe tu pregunta aquí.',
		'required' => 'required',
		'value' => $encuesta->result()[0]->nombreEncuesta,
		'size' => '125',
		'maxlength' => '100', 
		'autocomplete' => 'off'
	);

	$fecha_i = array(
		'name' => 'fecha_inicio',
		'type' => 'date',
		'step' => '1',
		'min' => $fecha_actual,
		'max' => '',
		'value' => $fecha_actual,
		'required' => 'required',
	);

	$fecha_f = array(
		'name' => 'fecha_fin',
		'type' => 'date',
		'step' => '1',
		'min' => date("Y-m-d",strtotime($fecha_actual."+ 1 days")),
		'max' => '',
		'value' => date("Y-m-d",strtotime($fecha_actual."+ 1 days")),
		'required' => 'required'
	);

	$numero_encuestas = array(
		'name' => 'numero_encuestas',
		'placeholder' => '#',
		'type' => 'number',
		'required' => 'required',
		'min' => '1',
		'max' => '50'
	);
	$regresar = base_url() . "Encuestas"; 
	$idEncuesta = $this->uri->segment(3);
	$actualizaEncuesta_url = base_url()."Encuestas/update" . $idEncuesta;
?>

<div class="container">
	<div align="center">
		<h2>Actualizar Encuesta:</h2>
		<h3><?= $resultado->nombreEncuesta?></h3>
		<?php if($encuesta != null):?>
		<div style="margin:25px; text-align: left;">
			<?= form_open($actualizaEncuesta_url) ?>
				<input type="hidden" name="idEncuesta" value="<?php echo $resultado->idEncuesta ?>">
					<?= form_label('Nombre de la Encuesta:', 'pregunta') ?>
					<?= form_input($encuestaNueva) ?><br><br>
					
					<?= form_label('Fecha Inicio: ') ?><br>
					<?= form_input($fecha_i) ?><br><br>
							
					<?= form_label('Fecha Fin: ') ?><br>
					<?= form_input($fecha_f) ?><br><br>

					<?= form_label('Numero de Encuestas: ') ?><br>
					<?= form_input($numero_encuestas) ?><br><br>
				<br><br>
				<div align="center">
					<input type="submit" name="Actualizar" value="Actualizar" class="btn btn-info">
					<a href="<?php echo $regresar?>" >
						<input type="button" name="regresar" value="Regresar" class="btn btn-warning">
					</a>
				</div>
			<?= form_close()?>
		</div>
		<?php endif?>
	</div>
</div>