<?php

	class Rol_Model extends CI_Model{
		function __construct(){
			parent::__construct();
			$this->load->database();
			
		}


		function read(){
			//obtiene todas las encuestas de la bd
			$query = $this->db->get('rol');
			if ($query->num_rows() > 0) return $query;
			else return false;
		}
		function get($id){
			$this->db->where("idRol", $id);
			$query = $this->db->get('rol');
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
