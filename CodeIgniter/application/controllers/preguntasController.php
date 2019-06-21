<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class PreguntasController extends CI_Controller{
		// Constructor del controlador de preguntas
		function __construct(){
			parent::__construct();
			$this->load->model('pregunta_model');
		}

		// Llama al modelo para guardar una pregunta nueva
		function crearPregunta(){
			$dato = array(
				'pregunta' => $this->input->post('pregunta'),
				'tipoPregunta' => $this->input->post('tipoPregunta')
			);
			$this->pregunta_model->create($dato);
			$this->load->view('preguntas/read');
		}

		function obtenerPreguntas(){
			$dato['preguntas'] = $this->pregunta_model->read();
		}

		function actualizarPregunta(){
			$pregunta = array(
				'pregunta' => $this->input->post('pregunta'),
				'tipoPregunta' => $this->input->post('tipoPregunta'),
			);
			// Se obtiene del url el id de la pregunta
			$idProducto = $this->uri->segment(3);
			$this->pregunta_model->update($idPregunta, $pregunta);
		}

		function eliminarPregunta(){
			// Se obtiene del url el id de la pregunta
			$idProducto = $this->uri->segment(3);
			$this->pregunta_model->delete($idProducto);
		}
	}