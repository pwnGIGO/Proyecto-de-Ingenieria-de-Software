<?php

	class EncuestasController extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('encuesta_model');
		}

		function crearEncuenta(){
			$dato = array(
				'nombreObjeto' => $this->input->post('nombreObjeto'),
					 'descripcionObjeto' => $this->input->post('descripcionObjeto'),
				     'tipoObjeto' => $this->input->post('tipoObjeto'),
				     'fecha_inicio' => $this->input->post('fecha_inicio'),
				     'fecha_fin' => $this->input->post('fecha_fin')
			);
			$this->encuesta_model->create($dato);
			
			
			redirect(base_url() . "Admin/Encuestas");

		}

		function obtenerEncuentas(){
			$data['encuestas'] =  $this->encuesta_model->read();
		}

		function actualizarEncuesta($idEncuesta){

		}

		function eliminarEncuesta($idEncuesta){
			
		}
	}