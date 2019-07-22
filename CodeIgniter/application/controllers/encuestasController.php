<?php  
	class EncuestasController extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->model('encuesta_model');
			$this->load->model('pregunta_model');
			$this->load->model('cuestionario_model');
			$this->load->model('pregunta_cuestionario_model');


			//variable global, pata metodo mostrar pregunta, guarda como va el recorrido
			//de las preguntas de un cuestionario
			$this->contador_pregunta_actual = 0;
			
		}

		function index(){
			//modelo
			$data['encuestas'] = $this->encuesta_model->read();
			$this->load->view('layouts/header');
			$this->load->view('encuestas/index',$data);
		}
		function indexAdmin(){
			$data['encuestas'] = $this->encuesta_model->read();
			$this->load->view('layouts/header');
			$this->load->view('inicio', $data);
		}

		function detalles(){   
			//recibir el id encuesta, mostrar su descripcion, y mandar el id
			$idEncuesta=$this->input->post('idEncuesta');
			
			$encuesta = $this->encuesta_model->get($idEncuesta);
			
			$idCuestionario = $encuesta->result()[0]->cuestionario_idCuestionario;
			
			$cuestionario = $this->cuestionario_model->get($idCuestionario);
			
			$data['encuesta'] = $encuesta;

			$data['cuestionario'] = $cuestionario;
			$this->load->view('layouts/header');
			$this->load->view('detalles',$data);
		}

		function primer_Pregunta(){
			
			$idEncuesta=$this->input->post('idEncuesta');

			$idCuestionario=$this->input->post('idCuestionario');  
			$num = 0;
			//todos las preguntas del cuestionario
			// AGREGAR METODO GET, RECIBE EL ID DE LA PREGUNTA Y REGRESA TODA LA FILA DE LA BD
			$pregunta1 = $this->pregunta_cuestionario_model->read($idCuestionario);
			if(!$pregunta1){
				$this->load->view('layouts/header');
				$this->load->view('encuesta_terminada',$idEncuesta,$idCuestionario);
			}else{
				$pregunta1 = $pregunta1->result()[$num];
				$respuestas = $this->respuesta_model->read($pregunta1->idPregunta);

				$data['idEncuesta'] = $idEncuesta;
				$data['idCuestionario'] = $idCuestionario;
				$data['pregunta'] = $pregunta1;
				$data['num'] = $num;
				$data['respuestas'] = $respuestas;
				
				$this->load->view('layouts/header');
				$this->load->view('contestarPregunta', $data);
			}
		}

		function Pregunta(){

			$idEncuesta=$this->input->post('idEncuesta');
			$idCuestionario=$this->input->post('idCuestionario');

			$num = $this->input->post('num') + 1;
			
			// AGREGAR METODO GET, RECIBE EL ID DE LA PREGUNTA Y REGRESA TODA LA FILA DE LA BD
			//$preguntaN = $this->pregunta_cuestionario_model->read($idCuestionario)->result()[$num];

			$preguntas = $this->pregunta_cuestionario_model->read($idCuestionario);

			if  ($preguntas->num_rows()==$num){

				$this->load->view('layouts/header');
				$this->load->view('encuesta_terminada',$idEncuesta,$idCuestionario);
				

			}else{

				$preguntaN = $preguntas->row($num);
				$respuestas = $this->respuesta_model->read($preguntaN->idPregunta);

				$data['idEncuesta'] = $idEncuesta;
				$data['idCuestionario'] = $idCuestionario;
				$data['pregunta'] = $preguntaN;
				$data['num'] = $num;
				$data['respuestas'] = $respuestas;
				
				$this->load->view('layouts/header');
				$this->load->view('contestarPregunta', $data);

			}



			
			
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
			$idEncuesta = $this->uri->segment(2);   
			echo "Vista Actualizar Encuesta: " . $idEncuesta;
		}

		function actualizar(){
			$idEncuesta = $this->uri->segment(2);   
			echo "Actualizar Encuesta: " . $idEncuesta;
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