<?php        
defined('BASEPATH') OR exit('No direct script access allowed');

/*
	Las palabras en español: crear, actualizar,etc
	se refiere a las vistas
	Las palabras en ingles: create, update, etc
	se refiere al metodo que llama al modelo
*/

/*
	El llamado al controlador sin ningun metodo, 
	se refiere al metodo por default, el index
*/

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

/******************* USUARIO COMÚN ***********************/
$route['default_controller'] = 'indexController';

/*******************USUARIO LOGEADO***********************/

// Responder Encuestas
$route['Inicio'] = 'indexController/indexAdmin';  


/* Seccion de Encuestas*/
$route['Encuestas'] = "encuestasController";
$route['Encuestas/Crear'] = "encuestasController/crearView";
$route['Encuestas/create'] = "encuestasController/crear";
$route['Encuestas/Editar/:num'] = "encuestasController/actualizarView";
$route['Encuestas/update/:num'] = "encuestasController/actualizar";
$route['Encuestas/delete/:num'] = "encuestasController/eliminar";

/* Seccion de Cuestionarios/Preguntas/Respuestas */

// Cuestionarios
$route['Cuestionarios'] = "cuestionariosController";
$route['Cuestionarios/Crear'] = "cuestionariosController/crearView";
$route['Cuestionarios/create'] = "cuestionariosController/crear";
$route['Cuestionarios/Editar/:num'] = "cuestionariosController/actualizarView";
$route['Cuestionarios/update/:num'] = "cuestionariosController/actualizar";
$route['Cuestionarios/delete/:num'] = "cuestionariosController/eliminar";

// Preguntas
$route['Preguntas'] = "preguntasController";
$route['Preguntas/:num'] = "preguntasController";
$route['Preguntas/Crear'] = "preguntasController/crearView";
$route['Preguntas/create'] = "preguntasController/crear";
$route['Preguntas/Editar'] = "preguntasController/actualizarView";
$route['Preguntas/update'] = "preguntasController/actualizar";
$route['Preguntas/delete/:num'] = "preguntasController/eliminar";

//Respuestas
$route['Preguntas/Respuestas/:num'] = "respuestasController";
$route['Preguntas/Respuestas/Crear/:num'] = "respuestasController/crearView";
$route['Preguntas/Respuestas/create/:num'] = "respuestasController/crear";
$route['Preguntas/Respuestas/Editar/:num'] = "respuestasController/actualizarView";
$route['Preguntas/Respuestas/update/:num'] = "respuestasController/actualizar";
$route['Preguntas/Respuestas/delete/:num'] = "respuestasController/eliminar";





/*******************LOGIN***********************/