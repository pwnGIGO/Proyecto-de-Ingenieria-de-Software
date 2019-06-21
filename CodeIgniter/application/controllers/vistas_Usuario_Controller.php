<?php 

	class vistas_Usuario_Controller extends CI_Controller{

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
			$this->load->view('layouts/headerUser');
		}


		// Encuestas
		function view_Mostrar_Encuestas(){

		}

		// Cuestionarios

		function view_Mostrar_Cuestionarios(){

		}

		// Login
		function view_Login(){

		}

		function view_Crear_Usuario(){

		}

		function view_Editar_Usuario($idUsuario){

		}
	}