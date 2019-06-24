<?php

	class RespuestasController extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('respuesta_model');
		}

		function crearRespuesta(){
			//aaqui creamos la respuesta y la subimos
			$dato = array(
				'Respuesta_s' => $this->input->post('respuesta'),
			);
			$this->respuesta_model->create($dato);
			$this->load->view('...'); #regresar a la vista general respuesta
			
		}

		function obtenerRespuestas(){

		}

		function actualizarRespuesta($idRespuesta){

		}

		function eliminarRespuesta($idRespuesta){
			
		}
	}
?>