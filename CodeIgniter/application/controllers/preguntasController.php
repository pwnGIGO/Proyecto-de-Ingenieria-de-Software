<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class PreguntasController extends CI_Controller{
		// Constructor del controlador de preguntas
		function __construct(){
			parent::__construct();
			$this->load->model('cuestionario_model');
			$this->load->model('pregunta_model');
			$this->load->model('pregunta_cuestionario_model');
		}
		// Vista principal de preguntas
		function index(){
			//notaa
			$idCuestionario = $this->uri->segment(3);
			$dato['preguntas']=$this->pregunta_cuestionario_model->read($idCuestionario);

			$dato['p'] = $this->cuestionario_model->get($idCuestionario);

			$this->load->view('layouts/header');
			$this->load->view('preguntas/index',$dato);

		}
		function crearView(){
			echo "Vista crear pregunta";
		}
		// Llama al modelo para guardar una pregunta nueva
		function crear(){
			echo "Crear Preguna";
			// $dato = array(
			// 	'pregunta' => $this->input->post('pregunta'),
			// 	'tipoPregunta' => $this->input->post('tipoPregunta')
			// );
			// $this->pregunta_model->create($dato);
			
			// // Regresa a la vista
			// redirect(base_url() . "Admin/Preguntas");
		}

		
		function actualizarView(){
			$idPregunta = $this->uri->segment(4);
			echo "Vista actualizar pregunta :" . $idPregunta;
		}
		function actualizar(){
			$idPregunta = $this->uri->segment(4);
			echo "Actualizar pregunta :" . $idPregunta;
			// $pregunta = array(
			// 	'pregunta' => $this->input->post('pregunta'),
			// 	'tipoPregunta' => $this->input->post('tipoPregunta'),
			// );
			// // Se obtiene del url el id de la pregunta
			// $idProducto = $this->uri->segment(3);
			// $this->pregunta_model->update($idPregunta, $pregunta);
		}

		function eliminar(){
		$idPregunta = $this->uri->segment(3);   
		$this->pregunta_model->delete($idPregunta);
		echo "Se elimino la Pregunta gp: " . $idPregunta;
		//redirect("Cuestionarios/Preguntas");
		
		}

		function obtener(){
			$idPregunta = $this->uri->segment(4);
			echo "Obtener pregunta :" . $idPregunta;
			// $dato['preguntas'] = $this->pregunta_model->read();
			// return $dato;
		}
	}