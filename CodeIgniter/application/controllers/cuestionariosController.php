<?php

	class CuestionariosController extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('cuestionario_model');
		}

		function crearCuestionario(){
			//aaqui creamos la respuesta y la subimos
			$dato = array(
				'nameCuestionario' => $this->input->post('nombre'),
				'desCuestionario' => $this->input->post('descripcion')
			);
			$this->cuestionario_model->create($dato);
			// Regresa a la vista
			redirect(base_url() . "Admin/Crear_Un_Cuestionario");
		}

		function obtenerCuestionarios(){

		}

		function actualizarCuestionario($idCuestionario){

		}

		function eliminarCuestionario($idCuestionario){

		}
	}
?>