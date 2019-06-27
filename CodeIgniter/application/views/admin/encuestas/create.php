<?php

$nombreObjeto = array(
				'name' => 'nombreObjeto',
				'placeholder' => 'nombre',
				'required' => 'required'
			);
        $descripcionObjeto= array(
        	'name' => 'descripcionObjeto',
				'placeholder' => '',
				'required' => 'required'
        );
		$encuesta = array(
				'name' => 'tipoObjeto',
				'value' => '1',
				
			);
			$cuestionario = array(
				'name' => 'tipoObjeto',
				'value' => '0',
			);	     
			$fecha_inicio= array(
        	'name' => 'fecha_inicio',
				'placeholder' => 'año-mes-dia',
				'required' => 'required'
             );	 
             $fecha_fin= array(
        	'name' => 'fecha_fin',
				'placeholder' => 'año-mes-dia',
				'required' => 'required'
             );    		
		
			$crearEncuesta_url = base_url() . "Admin/Crear_Encuesta";
?>
<div class="container">
			
				<div class="form-group">
					<!-- label, input -->
					
					<br>
					
				</div>
				<div class="form-group">
					
				</div>

				
			
		</div>

<div class="container">
		 	<?= form_open($crearEncuesta_url) ?>
                    <div class="card indigo form-white">
                        <div class="card-body">
                            <h3 class="text-center white-text py-3"><i class="fa fa-user"></i> Crear Encuesta:</h3>
                            <!--Body-->
                            <div class="text-center">
                                <i class="fa fa-envelope prefix white-text"></i>
                                <?= form_label('Nombre') ?>
                                <?= form_input($nombreObjeto) ?>
                            </div>
                            <div class="text-center">
                                <i class="fa fa-envelope prefix white-text"></i>
                                <?= form_label('Descripcion') ?>
                                <?= form_input($descripcionObjeto) ?>
                            </div>
                            <div class="text-center">
                                <?= form_label('Encuesta','tipoObjeto') ?>
					<?= form_radio($encuesta) ?>
					<?= form_label('Cuestionario','tipoObjeto') ?>
					<?= form_radio($cuestionario) ?>
                            </div>
                            <div class="text-center">
                                <i class="fa fa-envelope prefix white-text"></i>
                                <?= form_label('Fecha de inicio') ?>
                                <?= form_input($fecha_inicio) ?>
                            </div>
                            <div class="text-center">
                                <i class="fa fa-envelope prefix white-text"></i>
                                <?= form_label('Fecha final') ?>
                                <?= form_input($fecha_fin) ?>
                            </div>
                            <div class="text-center">
                                <a href="<?php echo $crearEncuesta_url?>">
					<input class="btn btn-success" type="submit" name="" value="Crear Encuesta">
				</a>
                            </div>

                        </div>
                    </div>
                    <?= form_close()?>
                </div>
