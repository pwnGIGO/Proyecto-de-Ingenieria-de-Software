<?php

	class Usuario_Model extends CI_Model{
		function __construct(){
			parent::__construct();
			$this->load->database();
			
		}

		function create($data){
    		$insert = array(
					'nombreUsuario' => $data['nombre'],
					'correoUsuario' => $data['correo'],
					'password' => $data['password']
			);
			$this->db->insert('usuario', $insert);
		}

		function read(){
			//obtiene todas las encuestas de la bd
			$query = $this->db->get('usuario');
			if ($query->num_rows() > 0) return $query;
			else return false;
		}

		function get($corrreo){
			$this->db->where("correoUsuario", $corrreo);
			$query = $this->db->get('usuario');
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


