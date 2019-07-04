<?php

	class Cuestionario_model extends CI_Model{
		function __construct(){
			parent::__construct();
			$this->load->database();
			
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

		function delete(){
			
		}
	}
?>