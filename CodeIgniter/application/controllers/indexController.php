<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class indexController extends CI_Controller {

	public function index(){
		
		$this->load->view('layouts/headerUsuario');
		$this->load->view('index');
	}

	

}