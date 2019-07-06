<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class RespuestasController extends CI_Controller{    

		function __construct(){
			parent::__construct();
			$this->load->model('pregunta_model');
			$this->load->model('respuesta_model');
		}

		function index(){
			$idPregunta = $this->uri->segment(4);
			$dato['respuestas']=$this->respuesta_model->read($idPregunta);

			$dato['p'] = $this->pregunta_model->get($idPregunta);

			$this->load->view('layouts/header');
			$this->load->view('respuestas/index',$dato);

		}

		function crearView(){
			echo "Vista crear Respuesta";
		}
		// Llama al modelo para guardar una Respuesta nueva
		function crear(){
			echo "Crear Preguna";
			// $dato = array(
			// 	'Respuesta' => $this->input->post('Respuesta'),
			// 	'tipoRespuesta' => $this->input->post('tipoRespuesta')
			// );
			// $this->Respuesta_model->create($dato);
			
			// // Regresa a la vista
			// redirect(base_url() . "Admin/Respuestas");
		}

		
		function actualizarView(){
			$idRespuesta = $this->uri->segment(4);
			echo "Vista actualizar Respuesta :" . $idRespuesta;
		}
		function actualizar(){
			$idRespuesta = $this->uri->segment(4);
			echo "Actualizar Respuesta :" . $idRespuesta;
			// $Respuesta = array(
			// 	'Respuesta' => $this->input->post('Respuesta'),
			// 	'tipoRespuesta' => $this->input->post('tipoRespuesta'),
			// );
			// // Se obtiene del url el id de la Respuesta
			// $idProducto = $this->uri->segment(3);
			// $this->Respuesta_model->update($idRespuesta, $Respuesta);
		}

		function eliminar(){
		$idRespuesta = $this->uri->segment(3);   
		$this->respuesta_model->delete($idRespuesta);
		echo "Se elimino la Respuesta: " . $idRespuesta;
		//redirect("Cuestionarios/Preguntas");
		}

		function obtener(){
			$idRespuesta = $this->uri->segment(4);
			echo "Obtener Respuesta :" . $idRespuesta;
			// $dato['preguntas'] = $this->pregunta_model->read();
			// return $dato;
		}

	}