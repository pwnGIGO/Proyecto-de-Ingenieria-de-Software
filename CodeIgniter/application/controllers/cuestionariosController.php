<?php
 
	class CuestionariosController extends CI_Controller{
		
		function __construct(){  
			parent::__construct();
			$this->load->model('cuestionario_model');
			$this->load->model('pregunta_cuestionario_model');
		}

		// Vista principal para mostrar los cuestionarios
		function index(){
			$data['cuestionarios'] = $this->cuestionario_model->read();
			$this->load->view('layouts/header');
			$this->load->view('cuestionarios/index',$data);
		}
		
		// Vista para crear un cuestionario
		function crearView(){  
			echo "Vista Crear Cuestionario: ";
		}

		function crear(){  
			echo "Crear Cuestionario: ";
		}

		// Vista para editar un cuestionario
		function actualizarView(){ 
			$idCuestionario = $this->uri->segment(3);   
			echo "Vista Actualizar Cuestionario: " . $idCuestionario;
		}

		function actualizar(){ 
			$idCuestionario = $this->uri->segment(3);   
			echo "Actualizar Cuestionario: " . $idCuestionario;
		}

		function eliminar(){
		$idCuestionario = $this->uri->segment(3);   
		$this->cuestionario_model->delete($idCuestionario);
		echo "Se elimino el Cuestionario: " . $idCuestionario;
		redirect("Cuestionarios");	
	}
	

		function obtener(){
			$idCuestionario = $this->uri->segment(3);
			echo "Obtener Cuestionario: " . $idCuestionario;
			// $data['pregunta_cuestionario'] = $this->pregunta_cuestionario_model->read($idCuestionario);
			// //obtiene todas las preguntas relacionnadas a este cuestionario
			// //
			// $data['cuestionario']= $this->cuestionario_model->get($idCuestionario);
			// $this->load->view('layouts/header');
			// $this->load->view('cuestionarios/read',$data);	
		}
	}
