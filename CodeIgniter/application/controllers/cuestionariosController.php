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
			'nombre' => $this->input->post('nombre'),
			'descripcion' => $this->input->post('descripcion')
			
			);
			$this->cuestionario_model->create($data);

			redirect(base_url()."Cuestionarios");
			
		}

		// Vista para editar un cuestionario
		function actualizarView(){ 
			$data['id'] = $this->uri->segment(3);   
		    $data['cuestionario'] = $this->cuestionario_model->get($data['id']);
			$this->load->view('layouts/header');
			$this->load->view('cuestionarios/update',$data);
		}
		 

		function actualizar(){ 
			$idCuestionario = $this->uri->segment(3);   
			$data=array(
                 'nombreCuestionario'=>$this->input->post('nombreCuestionario'),
                 'descripcionCuestionario'=>$this->input->post('descripcion') );
			$this->cuestionario_model->update($idCuestionario, $data);
			redirect(base_url()."Cuestionarios");

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

		function agregarPregunta(){
			$idPregunta = $this->input->post('idPregunta');
			$idCuestionario = $this->input->post('idCuestionario');
			$this->pregunta_cuestionario_model->add($idCuestionario,$idPregunta);


			# repite el metodo obtener pregunta
			$data['Cuestionario'] = $this->cuestionario_model->get($idCuestionario);
			//primer consulta
			$data['agregar'] = $this->cuestionario_model->agregar($idCuestionario);
			//segunda
			$data['quitar'] = $this->cuestionario_model->quitar($idCuestionario);

			$this->load->view('layouts/header');
			$this->load->view('cuestionarios/getPreguntas',$data);
		}

		function RemoverPregunta(){
			$idPregunta = $this->input->post('idPregunta');
			$idCuestionario = $this->input->post('idCuestionario');
			$this->pregunta_cuestionario_model->Remove($idCuestionario,$idPregunta);

			//echo "Entre a Remove". $idCuestionario."   ".$idPregunta ;
			
			# repite el metodo obtener pregunta
			$data['Cuestionario'] = $this->cuestionario_model->get($idCuestionario);
			//primer consulta
			$data['agregar'] = $this->cuestionario_model->agregar($idCuestionario);
			//segunda
			$data['quitar'] = $this->cuestionario_model->quitar($idCuestionario);

			$this->load->view('layouts/header');
			$this->load->view('cuestionarios/getPreguntas',$data);
			
		}
	}
