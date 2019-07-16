<?php

	class Pregunta_cuestionario_model extends CI_Model{
		function __construct(){
			parent::__construct();
			$this->load->database();
			
		}

		function create($idCuestionario,$pregunta){

					$this->db->where("pregunta",$pregunta);
					$query = $this->db->get('pregunta');
					foreach ($query->result() as $c) {
						$var = $c->idPregunta;
						$insert = array(
							'cuestionario_idCuestionario'=>$idCuestionario,
                        	'pregunta_idPregunta'=> $var,
                        	'orden'=>'0'); 
						$this->db->insert('pregunta_cuestionario', $insert);
					}
		}

		function read($idCuestionario){
		
			$query ='SELECT *
					FROM pregunta
					WHERE idPregunta IN (SELECT pregunta_idPregunta
										 FROM pregunta_cuestionario
										 WHERE cuestionario_idCuestionario='.$idCuestionario.')';
    		$query = $this->db->query($query);

			
			if ($query->num_rows() > 0) return $query;
			else return false;
			
		}

		function update(){

			
		}


		//eliminamos la relacion que existe al borrar una pregunta, con el cuestionario
		function delete($idPregunta){
			$this->db->where('pregunta_idPregunta', $idPregunta);
			$this->db->delete('pregunta_cuestionario'); 
			if ($this->db->affected_rows() > 0) {
				return true;
			}
			else{
				return false;
			}
			
		}

		//es el boton donde en el listado de preguntas agregas una pregunta
		//a un cuestionario. Solo llenar la tabla pregunta cuestionario para 
		//hacer la relacion 
		function add($idCuestionario,$idPregunta){
			$insert = array(
							'cuestionario_idCuestionario'=>$idCuestionario,
                        	'pregunta_idPregunta'=> $idPregunta,
                        	'orden'=>'0');

			$this->db->insert('pregunta_cuestionario', $insert);
		}

		//boton que remueve una pregunta del cuestionario. solo la relacion
		function Remove($idCuestionario,$idPregunta){
			$this->db->where('cuestionario_idCuestionario', $idCuestionario);
			$this->db->where('pregunta_idPregunta', $idPregunta);
			$this->db->delete('pregunta_cuestionario'); 
			if ($this->db->affected_rows() > 0) {
				return true;
			}
			else{
				return false;
			}

		}

}
	
?>