<?php
	
	class Pregunta_respuestaController extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('preguntaModel');
			$this->load->model('respuestaModel');
		}

		function addRespuesta($idPregunta, $idRespuesta[]){

		}

		function eliminarRespuesta($idPregunta, $idRespuesta[]){
			
		}
	}
?>