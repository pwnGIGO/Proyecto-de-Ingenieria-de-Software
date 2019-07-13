<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class RespuestasController extends CI_Controller{    

		function __construct(){
			parent::__construct();
			$this->load->model('pregunta_model');
			$this->load->model('respuesta_model');
		}

		function index(){
			$idPregunta = $this->uri->segment(3);   
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
			$idPregunta = $this->uri->segment(4);
			$respuesta = $this->input->post('respuesta');

			$datos['respuesta_pregunta'] = $this->respuesta_model->create($idPregunta, $respuesta);
			//$this->respuesta_model->create();

			// Regresa a la vista
			redirect("Preguntas/Respuestas/" . $idPregunta);
		}

		
		function actualizarView(){

			
			$data['idPregunta'] = $this->input->post('idPregunta');
			$data['idRespuesta'] = $this->input->post('idRespuesta');
			$data['respuesta'] = $this->respuesta_model->get($data['idRespuesta']);
			
			$this->load->helper('form');
            $this->load->view('layouts/header');
		    $this->load->view('respuestas/update',$data);
		}
    
		function actualizar(){
			$data['idRespuesta']  = $this->input->post('idRespuesta');
			$idPregunta = $this->input->post('idPregunta');
			$Respuesta = $this->input->post('respuesta');
			$this->respuesta_model->update($data['idRespuesta'], $Respuesta );
			redirect(base_url() . "Preguntas/Respuestas/".$idPregunta);

		}

		function eliminar(){
			$idRespuesta = $this->uri->segment(4);   
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