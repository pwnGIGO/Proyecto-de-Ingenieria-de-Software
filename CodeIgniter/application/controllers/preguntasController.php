<?php   
	defined('BASEPATH') OR exit('No direct script access allowed');

	class PreguntasController extends CI_Controller{
		// Constructor del controlador de preguntas
		function __construct(){
			parent::__construct();
			$this->load->model('cuestionario_model');
			$this->load->model('pregunta_model');
			$this->load->model('pregunta_cuestionario_model');
			$this->load->model('respuesta_model');
		}
		// Vista principal de preguntas
		function index(){
			$dato['preguntas'] = $this->pregunta_model->read();
			$this->load->view('layouts/header');
			$this->load->view('preguntas/index', $dato);

		}
		function crearView(){
			$this->load->helper('form');
            $this->load->view('layouts/header');
		    $this->load->view('preguntas/create');    
		}
		// Llama al modelo para guardar una pregunta nueva
		function crear(){
            $pregunta = $this->input->post('pregunta');
            //para llenar la tabla de preguntas
			$dato = array('pregunta' => $this->input->post('pregunta'));
			$this->pregunta_model->create($dato);

		    // Regresa a la vista
            redirect(base_url() . "Preguntas");
		}

		
		function actualizarView(){
			$idPregunta = $this->input->post('idPregunta');
		    $data['pregunta'] = $this->pregunta_model->get($idPregunta);
			$this->load->helper('form');
            $this->load->view('layouts/header');
		    $this->load->view('preguntas/update', $data);

		}

		function actualizar(){
			$pregunta = $this->input->post('pregunta');
			$idPregunta = $this->input->post('idPregunta');
			$this->pregunta_model->update($idPregunta, $pregunta);

			redirect(base_url() . "Preguntas");
		}

		function eliminar(){
			// Selecciona la pregunta a eleminar
			$idPregunta = $this->uri->segment(3);   
			//eliminar sus respuestas
			$this->respuesta_model->delete_conjunto($idPregunta);
			//elimina la relacion de cuestionario-pregunta
			$this->pregunta_cuestionario_model->delete($idPregunta);
		
			//elimina la pregunta
			$this->pregunta_model->delete($idPregunta);
			//regresa a la pagina anterior
			redirect($_SERVER['HTTP_REFERER']);
		}

		function obtener(){
			$idPregunta = $this->uri->segment(4);
			echo "Obtener pregunta :" . $idPregunta;
		}
	}