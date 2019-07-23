<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	</head>
	<body>
		<div class="container" >
	
<h1>Crear Usuario</h1><br><br>
		
		<?php
			$crearUsuario_url = base_url()."Usuario/create";
			$regresar = base_url() . "Usuario";
			// Atributos de la caja de texto
			$nombre= array(
				'name' => 'nombre',
				'placeholder' => 'Nombre',
				'required' => 'required',
				'size' => '60'
			);
			$correo= array(
				'name' => 'correo',
				'placeholder' => 'Correo',
				'required' => 'required',
				'type' => 'email',
				'size' => '60'
			);
			$password= array(
				'name' => 'password',
				'placeholder' => 'Password',
				'required' => 'required',
				'type' => 'password',
				'size' => '60'
			);


			
			
		?>

		<div class="container" >
			<?= form_open($crearUsuario_url) ?>
				<div class="card indigo form-white">
					
						<div style="margin:25px; text-align: left;">
							<i class="fa fa-envelope prefix white-text"></i>
							<?= form_label('Nombre del usuario') ?>
							<?= form_input($nombre) ?><br><br>

							<?= form_label('Corrreo') ?>
							<?= form_input($correo) ?><br><br>
							
							<?= form_label('Password') ?>
							<?= form_input($password) ?><br><br>
							
						<?= form_label('Elige un Rol:') ?>
							<select name="rol_elegido">				
								<?php 
									if($roles){		
										foreach ($roles->result() as $rol) {?>
											<option value="<?=$rol->idRol ?>"><?= $rol->nombreRol ?></option>   
									<?php } 
									} 
								?>
								
							</select>
						
						<div align="center">
							 <button type="submit" class="btn btn-success" > Crear
 							 <span class="glyphicon glyphicon-plus"></span> 
  							</button>
  							<a href="<?php echo $regresar?>" >
		              <input type="button" name="regresar" value="Cancelar" class="btn btn-warning">
	              </a>
							       
						</div><br><br>

				</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		
		<br>


			<?= form_close()?>
		</div>

</body>

</html>