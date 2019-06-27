<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Si recibes por url "direccion" entonces ejecuta "controlador/metodo"

/*******************LOGIN***********************/
// El usuario inicia sesion
$route['Admin'] = "vistas_Admin_Controller";
// El admin cierra sesion
$route['Usuario'] = 'vistas_Usuario_Controller';


/*******************USUARIO***********************/
$route['default_controller'] = 'vistas_Usuario_Controller';
$route['Usuario/Encuestas'] = "vistas_Usuario_Controller/view_Mostrar_Encuestas";



/*******************ADMIN***********************/


/* Seccion de Preguntas*/
$route['Admin/Crea_una_pregunta'] = "vistas_Admin_Controller/view_Crear_Pregunta";
$route['Admin/Crear_Pregunta'] = "PreguntasController/crearPregunta";
$route['Admin/Preguntas'] = "vistas_Admin_Controller/view_Mostar_Preguntas";
$route['Admin/Eliminar_Pregunta/:num'] = "preguntasController/eliminarPregunta";

/* Seccion de Respuestas*/
$route['Admin/Respuestas'] = "vistas_Admin_Controller/view_Mostrar_Respuestas";
$route['Admin/Crear_Una_Respuesta'] = "vistas_Admin_Controller/view_Crear_Respuesta";
$route['Admin/Crear_Respuesta'] = "respuestasController/crearRespuesta";

/* Seccion de Encuestas*/
$route['Admin/Crea_una_encuesta'] = "vistas_Admin_Controller/view_Crear_Encuesta";
$route['Admin/Crear_Encuesta'] = "EncuestasController/crearEncuesta";
$route['Admin/Encuestas'] = "vistas_Admin_Controller/view_Mostrar_Encuestas";




/* Seccion de Cuestionarios*/