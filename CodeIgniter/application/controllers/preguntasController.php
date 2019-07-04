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
			$idPregunta = $this->uri->segment(4);
			echo "Eliminar pregunta :" . $idPregunta;
		// 	// Se obtiene del url el id de la pregunta
		// 	$idProducto = $this->uri->segment(3);
		// 	$this->pregunta_model->delete($idProducto);
		// 	redirect(base_url() . "Admin/Preguntas");
		}

		function obtener(){
			$idPregunta = $this->uri->segment(4);
			echo "Obtener pregunta :" . $idPregunta;
			// $dato['preguntas'] = $this->pregunta_model->read();
			// return $dato;
		}
	}