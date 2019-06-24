<?php 
	
	class vistas_Admin_Controller extends CI_Controller{     

		function __construct(){
			parent::__construct();
			$this->load->helper('form');
			$this->load->model('pregunta_model');
			$this->load->model('respuesta_model');
			$this->load->model('encuesta_model');
			$this->load->model('cuestionario_model');
			$this->load->model('usuario_model');
		}

		function index(){
			$this->load->view('layouts/headerAdmin');
		}

		// Preguntas
		function view_Crear_Pregunta(){
			$this->load->view('layouts/headerAdmin');
			$this->load->view('admin/preguntas/create');
		}

		function view_Mostar_Preguntas(){
			$data['preguntas'] = $this->pregunta_model->read();
			$this->load->view('layouts/headerAdmin',$data);
			$this->load->view('admin/preguntas/read');
		}
		function view_Actualizar_Pregunta(){

		}

		// Respuestas
		
		function view_Mostrar_Respuestas(){
			$data['respuestas'] = $this->respuesta_model->read();
			$this->load->view('layouts/headerAdmin',$data);
			$this->load->view('admin/respuestas/read');


		}

		function view_Crear_Respuesta(){ 

			$this->load->view('layouts/headerAdmin');
			//aqui ponemos la vista de la creacion de la respuesta
			//$this->load->view('admin/respuestas/create');.......giovani
			$this->load->view('admin/respuestas/crea_una_respuesta');
		}


		function view_Eliminar_Respuesta($idRespuesta){

		}

		// Encuestas
		function view_Crear_Encuesta(){

		}

		function view_Mostrar_Encuestas(){


		}

		function view_Actualizar_Encuesta($idEncuesta){

		}

		// Cuestionarios
		function view_Crear_Cuestionario(){

		}

		function view_Mostrar_Cuestionarios(){

		}

		function view_Actualizar_Cuestionario($idCuestionario){

		}

		// Login
		function view_Login(){

		}

		function view_Crear_Usuario(){

		}

		function view_Editar_Usuario($idUsuario){

		}

		// Otras
		function view_Add_Preguntas($idObjeto){

		}

		function view_Eliminar_Preguntas($idObjeto){

		}

		function view_Add_Respuestas($idPregunta){

		}

		function view_Eliminar_Respuestas($idPregunta){

		}
	}