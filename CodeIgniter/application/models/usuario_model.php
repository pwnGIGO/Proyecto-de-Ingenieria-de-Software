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
			$query = $this->db->get('usuario');
			if($query->num_rows() > 0){
				return $query;
			}else{
				return false;
			}
		}

		// Se obtiene una pregunta en especifico de la Base de Datos
		function get($id){
			$this->db->where("idUsuario", $id);
			$query = $this->db->get('usuario');
			if($query->num_rows() > 0){
				return $query;
			}else{
				return false;
			}
		}

		// Se actualiza una pregunta en Base de Datos
		function update($idUsuario, $usuario){
			echo "<br>id: " . $idUsuario;
			echo "<br>Usuario: " . $usuario;
				$dato = array(
				'nombreUsuario' => $usuario
				);
			$this->db->where('idUsuario', $idUsuario);
			$query = $this->db->update('usuario', $dato);
		}

		// Se elimina la pregunta en Base de Datos
		function delete($idUsuario){
			$this->db->where('idUsuario', $idUsuario);
			$this->db->delete('usuario'); 
			if ($this->db->affected_rows() > 0) {
				return true;
			}
			else{
				return false;
			}
			
	}
}


