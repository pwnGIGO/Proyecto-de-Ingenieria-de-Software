<?php

	class EncuestasController extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('encuesta_model');
		}

		function crearEncuenta(){

		}

		function obtenerEncuentas(){
			$this->load->view('layouts/headerAdmin');
			$data['encuestas'] =  $this->encuesta_model->read();
			//enviamos toda la tabla objeto 
			$this->load->view('admin/Encuestas/ver_encuestas',$data);
			
		}

		function actualizarEncuesta($idEncuesta){

		}

		function eliminarEncuesta($idEncuesta){
			
		}
	}	
?>