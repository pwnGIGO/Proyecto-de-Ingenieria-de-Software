<?php

	class EncuestasController extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('encuesta_model');
		}

		function index(){
			$this->load->view('layouts/header');
			$this->load->view('encuestas/index');
		}

		function crearView(){  
			echo "Vista Crear encuesta: ";
		}

		function crear(){
			echo "Crear Encuesta: ";
		}

		function actualizarView(){
			$idEncuesta = $this->uri->segment(2);   
			echo "Vista Actualizar Encuesta: " . $idEncuesta;
		}

		function actualizar(){
			$idEncuesta = $this->uri->segment(2);   
			echo "Actualizar Encuesta: " . $idEncuesta;
		}

		function eliminar(){
			$idEncuesta = $this->uri->segment(2);   
			echo "Eliminar Encuesta: " . $idEncuesta;
		}

		function obtener(){
			$idEncuesta = $this->uri->segment(2);   
			echo "Obtener Encuesta: " . $idEncuesta;
		}
	}