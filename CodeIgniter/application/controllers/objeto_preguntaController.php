<?php
	class Objeto_preguntaController extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('encuestaModel');
			$this->load->model('cuestionarioModel');
			$this->load->model('preguntaModel');
		}

		function addPreguntas($idObjeto, $idPreguntas[]){

		}

		function eliminarPreguntas($idObjeto, $idPreguntas[]){

		}
	}
?>