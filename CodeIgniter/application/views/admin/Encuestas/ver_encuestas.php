<h2>Encuestas</h2>

	<?php 
		if ($cursos) {		
			foreach ($cursos->result() as $curso) {  ?>

				<div>
					<img src="#">	
				    <p><?= $curso->id_curso ?></p>
				</div>    

		<?php } 
		} 
	?>