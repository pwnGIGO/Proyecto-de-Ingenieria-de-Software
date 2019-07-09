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
			//notaa
			$idCuestionario = $this->uri->segment(3);
			$dato['preguntas']=$this->pregunta_cuestionario_model->read($idCuestionario);

			$dato['p'] = $this->cuestionario_model->get($idCuestionario);

			$this->load->view('layouts/header');
			$this->load->view('preguntas/index',$dato);

		}
		function crearView(){
			//extaer segmento (4)
			$this->id_p= $this->uri->segment(4);
            $this->load->helper('form');
            $this->load->view('layouts/header');
		    $this->load->view('preguntas/create');    
		}
		// Llama al modelo para guardar una pregunta nueva
		function crear(){
            $idCuestionario= $this->uri->segment(4);
            $pregunta = $this->input->post('pregunta');
            //para llenar la tabla de preguntas
			$dato = array('pregunta' => $this->input->post('pregunta'));
			$this->pregunta_model->create($dato);
		   //para rellenar la tabla intermedia 
			$this->pregunta_cuestionario_model->create($idCuestionario,$pregunta);
		    // Regresa a la vista
            redirect(base_url() . "Cuestionarios/Preguntas/$idCuestionario");
		}

		
		function actualizarView(){
			$idPregunta = $this->uri->segment(4);
			$data['idCuestionario'] = $this->input->post('idCuestionario');
			$data['pregunta'] = $this->pregunta_model->get($idPregunta);
			$this->load->helper('form');
            $this->load->view('layouts/header');
		    $this->load->view('preguntas/update', $data);

		}
		function actualizar(){

			$pregunta = $this->input->post('pregunta');
			$idPregunta = $this->input->post('idPregunta');
			$idCuestionario = $this->input->post('idCuestionario');
			$this->pregunta_model->update($idPregunta, $pregunta);
			redirect(base_url() . "Cuestionarios/Preguntas/$idCuestionario");
		}

		function eliminar(){
		//aqui..hoy eelimi	
		$idPregunta = $this->uri->segment(4);   
		
		//eliminar sus respuestas
		$this->respuesta_model->delete_conjunto($idPregunta);
		//elimina la relacion de cuestionario-pregunta
		$this->pregunta_cuestionario_model->delete($idPregunta);
		
		//
		//elimina la pregunta
		$this->pregunta_model->delete($idPregunta);
		//regresa a la pagina anterior
		redirect($_SERVER['HTTP_REFERER']);
		}

		function obtener(){
			$idPregunta = $this->uri->segment(4);
			echo "Obtener pregunta :" . $idPregunta;
			// $dato['preguntas'] = $this->pregunta_model->read();
			// return $dato;
		}
	}