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
			$dato['respuestas'] = $this->respuesta_model->read($idPregunta);
			$dato['p'] = $this->pregunta_model->get($idPregunta);

			$this->load->view('layouts/header');
			$this->load->view('respuestas/index', $dato);

		}

		function crearView(){
			$this->load->helper('form');
			$this->load->view('layouts/header');
			$this->load->view('respuestas/create');
		}
		// Llama al modelo para guardar una Respuesta nueva
		function crear(){
			$idPregunta = $this->uri->segment(5);
			$respuesta = $this->input->post('respuesta');

			$datos['respuesta_pregunta'] = $this->respuesta_model->create($idPregunta, $respuesta);
			//$this->respuesta_model->create();

			// Regresa a la vista
			redirect("Cuestionarios/Preguntas/Respuestas/" . $idPregunta);
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
		$idRespuesta = $this->uri->segment(5);   
		$this->respuesta_model->delete($idRespuesta);
		//echo "Se elimino la Respuesta: " . $idRespuesta;
		#redirect("Cuestionarios/Preguntas");
		#
		# redirecciona a la pagina anterior del navegador
		redirect($_SERVER['HTTP_REFERER']);
		}

		function obtener(){
			$idRespuesta = $this->uri->segment(4);
			echo "Obtener Respuesta :" . $idRespuesta;
			// $dato['preguntas'] = $this->pregunta_model->read();
			// return $dato;
		}

	}