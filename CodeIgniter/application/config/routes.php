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
$route['Cuestionarios/Preguntas/:num'] = "preguntasController";
$route['Cuestionarios/Preguntas/Crear/:num'] = "preguntasController/crearView";
$route['Cuestionarios/Preguntas/create/:num'] = "preguntasController/crear";
$route['Cuestionarios/Preguntas/Editar/:num'] = "preguntasController/actualizarView";
$route['Cuestionarios/Preguntas/update/:num'] = "preguntasController/actualizar";
$route['Cuestionarios/Preguntas/delete/:num'] = "preguntasController/eliminar";

//Respuestas
$route['Cuestionarios/Preguntas/Respuestas/:num'] = "respuestasController";
$route['Cuestionarios/Preguntas/Respuestas/Crear/:num'] = "respuestasController/crearView";
$route['Cuestionarios/Preguntas/Respuestas/create/:num'] = "respuestasController/crear";
$route['Cuestionarios/Preguntas/Respuestas/Editar/:num'] = "respuestasController/actualizarView";
$route['Cuestionarios/Preguntas/Respuestas/update/:num'] = "respuestasController/actualizar";
$route['Cuestionarios/Preguntas/Respuestas/delete/:num'] = "respuestasController/eliminar";





/*******************LOGIN***********************/