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
			$this->load->view('layouts/header');
			$this->load->view('cuestionarios/create');	
		}

		function crear(){  
			$data = array(
			'nombre' => $this->input->post('nombre')
			);
			$this->cuestionario_model->create($data);

			redirect(base_url()."Cuestionarios");

			
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
			echo "Eliminar Cuestionario: " . $idCuestionario;
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
