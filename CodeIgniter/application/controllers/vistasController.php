<?php

	class VistasController extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('preguntaModel');
			$this->load->model('respuestaModel');
			$this->load->model('encuestaModel');
			$this->load->model('cuestionarioModel');
			$this->load->model('usuarioModel');
		}

		function view_Crear_Pregunta(){

		}

		function view_Obtener_Preguntas(){

		}

		function view_Actualizar_Pregunta($idPregunta){

		}

		function view_Crear_Respuesta(){

		}

		function view_Obtener_Respuestas(){

		}

		function view_Eliminar_Respuesta($idRespuesta){

		}

		function view_Crear_Encuesta(){

		}

		function view_Mostrar_Encuestas(){

		}

		function view_Actualizar_Encuesta($idEncuesta){

		}

		function view_Crear_Cuestionario(){

		}

		function view_Mostrar_Cuestionarios(){

		}

		function view_Actualizar_Cuestionario($idCuestionario){

		}

		function view_Login(){

		}

		function view_Crear_Usuario(){

		}

		function view_Editar_Usuario($idUsuario){

		}

		function view_Add_Preguntas($idObjeto){

		}

		function view_Eliminar_Preguntas($idObjeto){

		}

		function view_Add_Respuestas($idPregunta){

		}

		function view_Eliminar_Respuestas($idPregunta){

		}
	}
?>