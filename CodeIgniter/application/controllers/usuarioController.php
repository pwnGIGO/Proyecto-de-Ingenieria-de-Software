<?php
	class UsuarioController extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('usuario_model');
		}
		function index(){
			$data['usuarios'] = $this->usuario_model->read();
			$this->load->view('layouts/header');
			$this->load->view('usuarios/index',$data);
		}
		function crear(){
		
			$data = array(
			'nombre' => $this->input->post('nombre'),
			'correo' => $this->input->post('correo'),
			'password' => $this->input->post('password'));
			if ($this->usuario_model->get($data['correo'])==TRUE){
				$data['error']="E-mail duplicado, por favor vuelva a ingresar otro";
					redirect(base_url()."Usuario");
			}else{
				$query=$this->usuario_model->create($data);
				redirect(base_url()."Usuario");
			}
			
		}

		function editarUsuario($idUsuario){

		}

		function eliminarUsuario($idUsuario){

		}
    }
?>