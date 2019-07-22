<?php

	class Encuesta_model extends CI_Model{
		function __construct(){
			parent::__construct();
			$this->load->database();
			
		}

		function create($data){
    		$insert = array(
					'nombreEncuesta' => $data['nombre'],
					'fechaInicial' => $data['inicio'],
					'fechaFinal' => $data['fin'],
					'numeroCuestionarios' => $data['numero_encuestas'],
					'cuestionario_idCuestionario' => $data['cuestionario_elegido']
			);
			$this->db->insert('encuesta', $insert);
		}

		function read(){
			//obtiene todas las encuestas de la bd
			$query = $this->db->get('encuesta');
			if ($query->num_rows() > 0) return $query;
			else return false;
		}

		function get($id){
			$this->db->where("idEncuesta", $id);
			$query = $this->db->get('encuesta');
			if($query->num_rows() > 0){
				return $query;
			}else{
				return false;
			}
		}

		function update($idEncuesta, $encuesta, $inicio, $fin, $numEncuestas){
			$dato = array(
				'nombreEncuesta' => $encuesta,
				'fechaInicial' => $inicio,
				'fechaFinal' => $fin,
				'numeroCuestionarios' => $numEncuestas
			);
			$this->db->where('idEncuesta', $idEncuesta);
			$query = $this->db->update('encuesta', $dato);
		}

		function delete($idEncuesta){
			$this->db->where('idEncuesta', $idEncuesta);
			$this->db->delete('encuesta'); 
			if ($this->db->affected_rows() > 0) {
				return true;
			}
			else{
				return false;
			}
			
		}


		function pregunta_actual(){
			//busca la pregunta actual para contestar
		}

		function respuestas_actuales($idPregunta){
			
			
		}
	}	
?>
