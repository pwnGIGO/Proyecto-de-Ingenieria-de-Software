<?php
	class UsuarioController extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('usuario_model');
			$this->load->model('rol_model');
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
			'password' => $this->input->post('password'),
			'rol_elegido' => $this->input->post('rol_elegido')
			);
			if ($this->usuario_model->get($data['correo'])==TRUE){
				$data['error']="E-mail duplicado, por favor vuelva a ingresar otro";
					redirect(base_url()."Usuario");
			}else{
				$query=$this->usuario_model->create($data);
				redirect(base_url()."Usuario");
			}
			
		}
		function crearView(){
			$this->load->helper('form');
            $this->load->view('layouts/header');
		    $this->load->view('usuarios/create');    
		}
		// Llama al modelo para guardar un nuevo usuario

		function actualizarView(){
			$idUsuario = $this->input->post('idUsuario');
		    $data['usuario'] = $this->usuario_model->get($idUsuario);
			$this->load->helper('form');
            $this->load->view('layouts/header');
		    $this->load->view('usuarios/update', $data);

		}

		function actualizar(){
			$usuario = $this->input->post('usuario');
			$idUsuario = $this->input->post('idUsuario');
			$this->usuario_model->update($idUsuario, $usuario);

			redirect(base_url() . "Usuario");
		}

		function eliminar(){
			// Selecciona la pregunta a eleminar
			$idUsuario = $this->uri->segment(3);   	
			//elimina la pregunta
			$this->usuario_model->delete($idUsuario);
			//regresa a la pagina anterior
			redirect($_SERVER['HTTP_REFERER']);
		}

		function obtener(){
			$idUsuario = $this->uri->segment(4);
			echo "Obtener usuario :" . $idUsuario;
		}
	}