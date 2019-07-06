<?php   
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Respuesta_model extends CI_Model{   
		function __construct(){
			parent::__construct();
			$this->load->database();

		}

		// Inserta una respuesta a una pregunta
		function create($idPregunta, $respuesta){
			$insert = array(
				'idRespuesta' => 'Default',
                'respuesta' => $respuesta,
                'pregunta_idPregunta' => $idPregunta); 
			$this->db->insert('respuesta', $insert);
			
		}

		// Se obtienen todas las preguntas de la Base de Datos
		function read($idPregunta){
			$this->db->where("pregunta_idPregunta", $idPregunta);
			$query = $this->db->get('respuesta');
			if($query->num_rows() > 0){
				return $query;
			}else{
				return false;
			}
		}

		// Se obtiene una respuestas en especifico de la Base de Datos
		function get($id){
			$this->db->where("idRespuesta", $id);
			$query = $this->db->get('respuesta');
			if($query->num_rows() > 0){
				return $query;
			}else{
				return false;
			}
		}

		// Se actualiza una respuesta en Base de Datos
		function update($idRespuesta, $respuesta){
			$this->db->where('idRespuesta', $idRespuesta);
			$query = $this->db->update('respuesta', $respuesta);
		}

		// Se elimina la pregunta en Base de Datos
		function delete($id){
			$this->db->where('idRespuesta', $id);
			$this->db->delete('respuesta'); 
			if ($this->db->affected_rows() > 0) {
				return true;
			}
			else{
				return false;
			}
		}
}

		
