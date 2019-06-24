<?php

	class Respuesta_model extends CI_Model{   
		function __construct(){
			parent::__construct();
			$this->load->database();
			
		}

		function create($respuesta){
			#$insert = array(
			#		'respuesta' => $respuesta['respuesta_s']
					#'tipo' => $respuesta['..']
			#);
			$this->db->insert('respuesta',array('respuesta' => $respuesta['Respuesta_s'] ));
		}

		function read(){

		}

		function update(){

		}

		function delete(){
			
		}
	}
?>