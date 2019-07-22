<?php   

	class EncuestasController extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('encuesta_model');
			$this->load->model('cuestionario_model');
		}

		function index(){
			//modelo
			$data['encuestas'] = $this->encuesta_model->read();
			$this->load->view('layouts/header');
			$this->load->view('encuestas/index',$data);
		}

		function crearView(){ 
			//para elegir un cuestinario
			$data['cuestionarios'] = $this->cuestionario_model->read();
			$this->load->view('layouts/header');
			$this->load->view('encuestas/create',$data);

		}

		function crear(){
			//crea la encuesta en BD
			$data = array(
			'nombre' => $this->input->post('nombre'),
			'inicio' => $this->input->post('fecha_inicio'),
			'fin' => $this->input->post('fecha_fin'),
			'numero_encuestas' => $this->input->post('numero_encuestas'),
			'cuestionario_elegido' => $this->input->post('cuestionario_elegido')
			);
			$this->encuesta_model->create($data);
			redirect(base_url()."Encuestas");


		}

		function actualizarView(){
			//$idEncuesta = $this->uri->segment(3);   
			//echo "Vista Actualizar Encuesta: " . $idEncuesta;
			$idEncuesta = $this->input->post('idEncuesta');
		    $data['encuesta'] = $this->encuesta_model->get($idEncuesta);
			$this->load->helper('form');
            $this->load->view('layouts/header');
		    $this->load->view('encuestas/update', $data);
		}

		function actualizar(){
			//$idEncuesta = $this->uri->segment(2);   
			//echo "Actualizar Encuesta: " . $idEncuesta;
			$encuesta = $this->input->post('encuesta');
			$idEncuesta = $this->input->post('idEncuesta');
			$inicio = $this->input->post('fecha_inicio');
			$fin = $this->input->post('fecha_fin');
			$numEncuestas = $this->input->post('numero_encuestas');
			$this->encuesta_model->update($idEncuesta, $encuesta, $inicio, $fin, $numEncuestas);

			redirect(base_url() . "Encuestas");
		}

		function eliminar(){
			$idEncuesta = $this->uri->segment(3);
			$this->encuesta_model->delete($idEncuesta);
			# redirecciona a la pagina anterior del navegador
			redirect($_SERVER['HTTP_REFERER']);
		}

		function obtener(){
			$idEncuesta = $this->uri->segment(2);   
			echo "Obtener Encuesta: " . $idEncuesta;
		}
	}