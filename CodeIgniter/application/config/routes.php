<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Si recibes por url "direccion" entonces ejecuta "controlador/metodo"

/*******************USUARIO***********************/
$route['default_controller'] = 'vistas_Usuario_Controller';
// El usuario inicia sesion
$route['Admin'] = "vistas_Admin_Controller";





/*******************ADMIN***********************/
// El admin cierra sesion
$route['Usuario'] = 'vistas_Usuario_Controller';

/* Seccion de Preguntas*/
// Crear
$route['Admin/Crea_una_pregunta'] = "vistas_Admin_Controller/view_Crear_Pregunta";
$route['Admin/Crear_Pregunta'] = "PreguntasController/crearPregunta";
// Obtener
$route['Admin/Preguntas'] = "vistas_Admin_Controller/view_Mostar_Preguntas";
// Editar
//$route['Admin/Editar_Pregunta'] = "vistasController/view_Actualizar_Pregunta";
//$route['Admin/Editar_Pregunta'] = "PreguntasController/actualizarPregunta";
// Eliminar
$route['Admin/Eliminar_Pregunta/:num'] = "preguntasController/eliminarPregunta";


// Respuestas

// Encuestas

// Cuestionarios...