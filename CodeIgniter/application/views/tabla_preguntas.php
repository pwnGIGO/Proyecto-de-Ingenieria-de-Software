<?php 
 

 ?>


<body>

	<style>
		
		.tabla_miembros{
		    width: 85%;
		    background-color:#F0F8FF;
		    margin: auto;
		    border-collapse: collapse;
		}

		.tabla_miembros tr td{
		    text-align: center;
		    padding: 10px;
		    border: 1px solid #000;
		}
	</style>

<h1>Tabla donde modificaremos las respuestas de cada pregunta </h1>
<p> nombre de la pregunta =  <?php foreach ($pregunta->result() as $pe)
					echo $pe->pregunta; 
				
	  ?>		 
</p>






<table class="tabla_miembros">
         <thead>
            <tr>
               <td colspan="5">
                  <div align="center">

                  	<?php $ruta = base_url()."nuevo" ?>
                     <a href="#"><p style="text-align:center;">Agregar respuestas a esta pregunta</p></a>

                  </div>

               </td>

            </tr>
            <tr>
               <td>idRespuesta</td>
               <td>Respuesta</td>
               <td colspan="2">Operaciones</td>
            </tr>
         </thead>

         <tbody>
            
            <?php 
				if ($pregunta_respuesta) {
					
				foreach ($pregunta_respuesta->result() as $p_r) {  ?>

					<tr>
			            <td><?= $p_r->idRespuesta ?></td>
			            <td><?= $p_r->respuesta; ?></td>
			      
			            
			            <td><a href="#">borrar</a></td>
			        </tr>	

				<?php } 
				} 
			?>


         </tbody>

 </table>



 </body>
</html>

