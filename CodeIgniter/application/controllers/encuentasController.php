<?php

	class EncuentasController extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('encuesta_model');
		}

		function crearEncuenta(){

		}

		function obtenerEncuentas(){
			$this->load->view('layouts/headerAdmin');
			//cargar los datos
			//enviarlos
			$this->load->view('Encuestas/ver_encuestas');

			
		}

		function actualizarEncuesta($idEncuesta){

		}

		function eliminarEncuesta($idEncuesta){
			
		}
	}	
?>