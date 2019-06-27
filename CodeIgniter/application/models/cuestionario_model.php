<?php

	class Cuestionario_model extends CI_Model{
		function __construct(){
			parent::__construct();
			$this->load->database();
		}

		function create($dato){
			$this->db->insert('objeto', array('nombreObjeto' => $dato['nameCuestionario'], 'descripcionObjeto' => $dato['desCuestionario'] ));
		}

		function read(){
	
		}

		function update(){

		}

		function delete(){
			
		}
	}
?>