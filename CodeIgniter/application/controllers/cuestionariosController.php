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
		$this->cuestionario_model->delete($idCuestionario);
		echo "Se elimino el Cuestionario: " . $idCuestionario;
		redirect("Cuestionarios");	
	}
	

		function obtenerPreguntas(){
			#$idCuestionario = $this->uri->segment(3);


			$idCuestionario = $this->input->post('idCuestionario');
			$data['Cuestionario'] = $this->cuestionario_model->get($idCuestionario);

			//primer consulta
			$data['agregar'] = $this->cuestionario_model->agregar($idCuestionario);
			//$data['agregar'] = NULL;
			$data['quitar'] = $this->cuestionario_model->quitar($idCuestionario);

			$this->load->view('layouts/header');
			$this->load->view('cuestionarios/getPreguntas',$data);	
		}
	}
