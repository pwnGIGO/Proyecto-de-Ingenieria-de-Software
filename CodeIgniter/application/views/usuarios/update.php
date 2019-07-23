<?php 
	$resultado = $usuario->result()[0];
	$usuarioNueva = array(
		'name' => 'usuario',
		'placeholder' => '',
		'required' => 'required',
		'value' => $usuario->result()[0]->nombreUsuario,
		'size' => '100'
	);
	$regresar = base_url() . "Usuario"; 
	//$idRespuesta = $this->uri->segment(4);
	$actualizaUsuario_url = base_url()."Usuario/update";
?>

<div class="container">
	<div align="center">
		<h2>Actualizar Usuario:</h2>
		<h3><?= $resultado->nombreUsuario?></h3>
		<?php if($usuario!=null):?>
			<?= form_open($actualizaUsuario_url) ?>
				<input type="hidden" name="idUsuario" value="<?php echo $resultado->idUsuario ?>">
				<?= form_label('Nombre de Usuario','idUsuario') ?>
				<?= form_input($usuarioNueva) ?>
				<br><br>
				<input type="submit" name="Actualizar" value="Actualizar" class="btn btn-info">
			<?= form_close()?>
		<?php endif?>
	</div>
	<a href="<?php echo $regresar?>" >
		<input type="button" name="regresar" value="Cancelar" class="btn btn-warning">
	</a>
</div>

