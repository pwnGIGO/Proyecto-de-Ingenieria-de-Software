-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2019 a las 07:23:34
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_ingenieria_software`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuestionario`
--

CREATE TABLE `cuestionario` (
  `idCuestionario` int(11) NOT NULL,
  `nombreCuestionario` varchar(45) NOT NULL,
  `descripcionCuestionario` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cuestionario`
--

INSERT INTO `cuestionario` (`idCuestionario`, `nombreCuestionario`, `descripcionCuestionario`) VALUES
(4, 'Ciencia', 'preguntas acerca de ciencia'),
(5, 'Animales', '¿Que tanto crees saber sobre animales?'),
(6, 'Videojuegos', 'Demuestra que tan Gamer puedes llegar a ser'),
(7, 'Deportes', '¿Apasionado al deporte? Demuestralo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `idEncuesta` int(11) NOT NULL,
  `nombreEncuesta` varchar(45) NOT NULL,
  `fechaInicial` date NOT NULL,
  `fechaFinal` date NOT NULL,
  `numeroCuestionarios` int(11) NOT NULL,
  `cuestionario_idCuestionario` int(11) NOT NULL,
  `cuestionario_idCuestionario1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`idEncuesta`, `nombreEncuesta`, `fechaInicial`, `fechaFinal`, `numeroCuestionarios`, `cuestionario_idCuestionario`, `cuestionario_idCuestionario1`) VALUES
(3, '¿Que tanto sabes de ciencia?', '2019-07-15', '2019-07-16', 50, 4, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta_encuestador`
--

CREATE TABLE `encuesta_encuestador` (
  `usuario_idUsuario` int(11) NOT NULL,
  `encuesta_idEncuesta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `idPregunta` int(11) NOT NULL,
  `pregunta` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`idPregunta`, `pregunta`) VALUES
(1, '¿Cual es tu equipo favorito de futbol?'),
(2, 'Para ti ¿Cual es el mejor Videojuego del 2019?'),
(3, '¿Que animal te gusta más?'),
(4, '¿Que deporte prefieres practicar?'),
(5, '¿Que tan bueno eres jugando Basquet?'),
(6, '¿Cual de estos animales es oviparo?'),
(7, '¿Cual de estos animales crees que es mas fuerte?'),
(8, '¿Quien es Stephen Hawking?'),
(9, '¿Cuantos planetas tiene nuestro sistema solar?'),
(10, 'Nombre del fisico mas famoso del mundo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta_cuestionario`
--

CREATE TABLE `pregunta_cuestionario` (
  `cuestionario_idCuestionario` int(11) NOT NULL,
  `pregunta_idPregunta` int(11) NOT NULL,
  `orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pregunta_cuestionario`
--

INSERT INTO `pregunta_cuestionario` (`cuestionario_idCuestionario`, `pregunta_idPregunta`, `orden`) VALUES
(4, 8, 1),
(4, 9, 2),
(4, 10, 3),
(5, 3, 0),
(5, 7, 0),
(6, 2, 0),
(7, 1, 0),
(7, 4, 0),
(7, 5, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `idRespuesta` int(11) NOT NULL,
  `respuesta` varchar(45) NOT NULL,
  `pregunta_idPregunta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`idRespuesta`, `respuesta`, `pregunta_idPregunta`) VALUES
(1, 'Pumas', 1),
(2, 'America', 1),
(3, 'Cruz Azul', 1),
(4, 'Xolos', 1),
(7, 'Gears 5', 2),
(8, 'Crash Team Racing Nitro Court', 2),
(9, 'Perro', 3),
(10, 'Gato', 3),
(11, 'Foca', 3),
(12, 'Pinguino', 3),
(13, 'Futbol', 4),
(14, 'Basquet', 4),
(15, 'Malo', 5),
(16, 'Regular', 5),
(17, 'Bueno', 5),
(18, 'Muy bueno', 5),
(19, 'Leon', 6),
(20, 'Ornitorinco', 6),
(21, 'Pulpo', 6),
(22, 'Anemona', 6),
(23, 'Gorila', 7),
(24, 'Tigre', 7),
(25, 'Cocodrilo', 7),
(26, 'Caiman', 7),
(27, 'Biologo', 8),
(28, 'Matematico', 8),
(29, 'Fisico', 8),
(30, '6', 9),
(31, '7', 9),
(32, '8', 9),
(33, 'Charles Darwin', 10),
(34, 'Albert Einstein', 10),
(35, 'Sheldon Cooper', 10),
(36, 'Barca', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta_encuesta`
--

CREATE TABLE `respuesta_encuesta` (
  `encuesta_idEncuesta` int(11) NOT NULL,
  `respuesta_idRespuesta` int(11) NOT NULL,
  `pregunta_idPregunta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `nombreRol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(45) NOT NULL,
  `correoUsuario` varchar(45) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `rol_idRol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombreUsuario`, `correoUsuario`, `password`, `rol_idRol`) VALUES
(5, 'dscvdscv', 'dgdsgdsg@gmail.com', 'sacsacs', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  ADD PRIMARY KEY (`idCuestionario`);

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`idEncuesta`,`cuestionario_idCuestionario`,`cuestionario_idCuestionario1`),
  ADD KEY `fk_encuesta_cuestionario_idx` (`cuestionario_idCuestionario`),
  ADD KEY `fk_encuesta_cuestionario1_idx` (`cuestionario_idCuestionario1`);

--
-- Indices de la tabla `encuesta_encuestador`
--
ALTER TABLE `encuesta_encuestador`
  ADD PRIMARY KEY (`usuario_idUsuario`,`encuesta_idEncuesta`),
  ADD KEY `fk_encuesta_encuestador_encuesta1_idx` (`encuesta_idEncuesta`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`idPregunta`);

--
-- Indices de la tabla `pregunta_cuestionario`
--
ALTER TABLE `pregunta_cuestionario`
  ADD PRIMARY KEY (`cuestionario_idCuestionario`,`pregunta_idPregunta`),
  ADD KEY `fk_pregunta_cuestionario_pregunta1_idx` (`pregunta_idPregunta`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`idRespuesta`,`pregunta_idPregunta`),
  ADD KEY `fk_respuesta_pregunta1_idx` (`pregunta_idPregunta`);

--
-- Indices de la tabla `respuesta_encuesta`
--
ALTER TABLE `respuesta_encuesta`
  ADD PRIMARY KEY (`encuesta_idEncuesta`,`respuesta_idRespuesta`,`pregunta_idPregunta`),
  ADD KEY `fk_respuesta_encuesta_respuesta1_idx` (`respuesta_idRespuesta`),
  ADD KEY `fk_respuesta_encuesta_pregunta1_idx` (`pregunta_idPregunta`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `correoUsuario` (`correoUsuario`),
  ADD KEY `fk_usuario_rol1_idx` (`rol_idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuestionario`
--
ALTER TABLE `cuestionario`
  MODIFY `idCuestionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `idEncuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `idPregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `idRespuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
