<?php
	class Cuestionario_model extends CI_Model{
	
		function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->model('respuesta_model');
		}

		function create($data){
			$insert = array(
					'nombreCuestionario' => $data['nombre']
			);
			$this->db->insert('cuestionario', $insert);

		}

		function read(){
				//aqui
				$query = $this->db->get('cuestionario');
				if ($query->num_rows() > 0) return $query;
				else return false;
		}

		function get($id){
			$this->db->where("idCuestionario", $id);
			$query = $this->db->get('cuestionario');
			if($query->num_rows() > 0){
			return $query;
			}else{
			return false;
			}
		}

		function update(){

		}

		function delete($idCuestionario){
				$dato['preguntas']=$this->pregunta_cuestionario_model->read($idCuestionario);
				$query ='DELETE
						FROM cuestionario
						WHERE idCuestionario ='.$idCuestionario.'';
			    		$query = $this->db->query($query);
							foreach ($dato['preguntas'] ->result() as $pregunta) {
							echo $pregunta->idPregunta . "<br>";
							$idQuestion=$pregunta->idPregunta;
								$query ='DELETE
									FROM pregunta
									WHERE idPregunta ='.$pregunta->idPregunta.'';
						    	$query = $this->db->query($query);
						    	$dato1['respuestas']=$this->respuesta_model->read($idQuestion);
						    	if($dato1['respuestas']){
										foreach ($dato1['respuestas']->result() as $respuesta) {
										echo $respuesta->idRespuesta . "<br>";
											$query ='DELETE
											FROM respuesta
											WHERE idRespuesta ='.$respuesta->idRespuesta.'';
								    		$query = $this->db->query($query);
										}
									}
				}
				if(!empty($result)) return true; else { return false; } 	
		}

	}