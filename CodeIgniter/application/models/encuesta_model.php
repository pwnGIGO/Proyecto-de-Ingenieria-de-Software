<?php

	class Encuesta_model extends CI_Model{
		function __construct(){
			parent::__construct();
			$this->load->database();
			
		}

		function create(){
    
		}

		function read(){
			//obtiene todas las encuestas de la bd
			//el tipo 0 son los cuestionarios, el tipo 1 son las encuestas
			$var_aux = 1;
			$query = $this->db->get_where('objeto', array('tipoObjeto' => $var_aux ));
			if ($query->num_rows() > 0) return $query;
			else return false;
		}

		function update(){

		}

		function delete(){
			
		}
	}	
?>