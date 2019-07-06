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

		function update(){

		}

		function delete(){
			
		}
	}	
?>