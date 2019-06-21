<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Si recibes por url "direccion" entonces ejecuta "controlador/metodo"

/*******************USUARIO***********************/
$route['default_controller'] = 'vistas_Usuario_Controller';

$route['Admin']["get"] = "vistas_Admin_Controller";





/*******************ADMIN***********************/
$route['Usuario']["get"] = 'vistas_Usuario_Controller';
/* Preguntas*/
// Crear
$route['Admin/Crear_Pregunta']["get"] = "vistas_Admin_Controller/view_Crear_Pregunta";
$route['Admin/Crear_Pregunta']["post"] = "PreguntasController/crearPregunta";
// Obtener
$route['Admin/Preguntas']["get"] = "vistas_Admin_Controller/view_Mostar_Preguntas";
// Editar
$route['Admin/Editar_Pregunta']["get"] = "vistasController/view_Actualizar_Pregunta";
$route['Admin/Editar_Pregunta']["put"] = "PreguntasController/actualizarPregunta";
// Eliminar
$route['Admin/Eliminar_Pregunta']["delete"] = "PreguntasController/eliminarPregunta";


// Respuestas

// Encuestas

// Cuestionarios...