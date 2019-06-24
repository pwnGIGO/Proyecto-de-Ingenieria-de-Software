<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class RespuestasController extends CI_Controller{    
		// Constructor del controlador de preguntas
		function __construct(){
			parent::__construct();
			$this->load->model('respuesta_model');
		}

		// Llama al modelo para guardar una pregunta nueva
		function crearRespuesta(){
			/*    giovani
			$dato = array(
				'respuesta' => $this->input->post('respuesta'),
				'tipo' => $this->input->post('tipo')
			);
			$this->respuesta_model->create($dato);
			
			
			*/


			//aaqui creamos la respuesta y la subimos
			$dato = array(
				'Respuesta_s' => $this->input->post('respuesta'),
			);
			$this->respuesta_model->create($dato);
			// Regresa a la vista
			redirect(base_url() . "Admin/Respuestas");
			

		}

		function obtenerRespuestas(){
			$dato['respuesta'] = $this->respuesta_model->read();
			return $dato;
		}
		/* gio
		function actualizarRespuesta(){
			$respuesta = array(
				'respuesta' => $this->input->post('respuesta'),
				'tipo' => $this->input->post('tipo'),
			);
			// Se obtiene del url el id de la pregunta
			$idProducto = $this->uri->segment(3);
			$this->respuesta_model->update($idRespuesta, $respuesta);
		}

		function eliminarRespuesta(){
			// Se obtiene del url el id de la pregunta
			$idProducto = $this->uri->segment(3);
			$this->respuesta_model->delete($idProducto);
			redirect(base_url() . "Admin/Respuestas");
		}
		*/
	}