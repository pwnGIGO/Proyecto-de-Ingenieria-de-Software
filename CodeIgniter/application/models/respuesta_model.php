<?php   
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Respuesta_model extends CI_Model{   
		function __construct(){
			parent::__construct();
			$this->load->database();

		}

		// Inserta en Base de Datos una Pregunta
		// 
		function create($respuesta){
			/*
			$insert = array(
					'respuesta' => $respuesta['respuesta'],
					'tipo' => $respuesta['tipo']
			);
			$this->db->insert('respuesta', $insert);
			*/
			#$insert = array(
			#		'respuesta' => $respuesta['respuesta_s']
					#'tipo' => $respuesta['..']
			#);
			$this->db->insert('respuesta',array('respuesta' => $respuesta['Respuesta_s'] ));

		}

		// Se obtienen todas las preguntas de la Base de Datos
		function read(){
			$query = $this->db->get('respuesta');
			if($query->num_rows() > 0){
				return $query;
			}else{
				return false;
			}
		}

		// Se obtiene una pregunta en especifico de la Base de Datos
		function get($id){
			$this->db->where("idRespuesta", $id);
			$query = $this->db->get('respuesta');
			if($query->num_rows() > 0){
				return $query;
			}else{
				return false;
			}
		}

		// Se actualiza una pregunta en Base de Datos
		function update($idRespuesta, $respuesta){
			$this->db->where('idRespuesta', $idRespuesta);
			$query = $this->db->update('respuesta', $respuesta);
		}

		// Se elimina la pregunta en Base de Datos
		function delete($idRespuesta){
			$this->db->delete('respuesta', array('idPregunta' => $idRespuesta));
		}
	}