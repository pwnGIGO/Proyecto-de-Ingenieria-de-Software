<?php

	class Pregunta_cuestionario_model extends CI_Model{
		function __construct(){
			parent::__construct();
			$this->load->database();
			
		}

		function create(){

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

		function delete(){
	
			
		}
	}
?>