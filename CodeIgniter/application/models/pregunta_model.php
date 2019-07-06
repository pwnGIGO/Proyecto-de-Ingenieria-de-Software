<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pregunta_model extends CI_Model{
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		// Inserta en Base de Datos una Pregunta
		function create($pregunta){
			$insert = array(
					'pregunta' => $pregunta['pregunta'],
					'tipoPregunta' => $pregunta['tipoPregunta']
			);
			$this->db->insert('pregunta', $insert);
		}

		// Se obtienen todas las preguntas de la Base de Datos
		function read(){
			$query = $this->db->get('pregunta');
			if($query->num_rows() > 0){
				return $query;
			}else{
				return false;
			}
		}

		// Se obtiene una pregunta en especifico de la Base de Datos
		function get($id){
			$this->db->where("idPregunta", $id);
			$query = $this->db->get('pregunta');
			if($query->num_rows() > 0){
				return $query;
			}else{
				return false;
			}
		}

		// Se actualiza una pregunta en Base de Datos
		function update($idPregunta, $pregunta){
			$this->db->where('idPregunta', $idPregunta);
			$query = $this->db->update('pregunta', $pregunta);
		}

		// Se elimina la pregunta en Base de Datos
		function delete($idPregunta){
			$this->db->where('idPregunta', $id);
			$this->db->delete('pregunta'); 
			if ($this->db->affected_rows() > 0) {
				return true;
			}
			else{
				return false;
			}
			
	}
}