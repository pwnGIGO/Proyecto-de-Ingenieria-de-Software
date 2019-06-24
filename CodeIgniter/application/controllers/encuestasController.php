<?php

	class EncuestasController extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('encuesta_model');
		}

		function crearEncuenta(){

		}

		function obtenerEncuentas(){
			$data['encuestas'] =  $this->encuesta_model->read();
		}

		function actualizarEncuesta($idEncuesta){

		}

		function eliminarEncuesta($idEncuesta){
			
		}
	}