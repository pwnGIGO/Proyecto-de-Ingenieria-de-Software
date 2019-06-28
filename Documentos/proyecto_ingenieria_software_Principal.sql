-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2019 a las 00:21:40
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
-- Estructura de tabla para la tabla `objeto`
--

CREATE TABLE `objeto` (
  `idObjeto` int(11) NOT NULL,
  `nombreObjeto` varchar(50) NOT NULL,
  `descripcionObjeto` varchar(200) NOT NULL,
  `tipoObjeto` int(2) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `objeto`
--

INSERT INTO `objeto` (`idObjeto`, `nombreObjeto`, `descripcionObjeto`, `tipoObjeto`, `fecha_inicio`, `fecha_fin`) VALUES
(2, 'Violencia en México', 'Encuesta de violencia', 1, '2019-06-18', '2019-06-28'),
(3, 'Videojuegos', 'Encuesta videojueguil', 1, '2019-06-11', '2019-06-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objeto_pregunta`
--

CREATE TABLE `objeto_pregunta` (
  `idObjeto_fk` int(11) NOT NULL,
  `idPregunta_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta`
--

CREATE TABLE `pregunta` (
  `idPregunta` int(20) NOT NULL,
  `pregunta` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `tipoPregunta` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pregunta`
--

INSERT INTO `pregunta` (`idPregunta`, `pregunta`, `tipoPregunta`) VALUES
(2, 'Genero', 'multiple'),
(4, '¿Cual es tu nombre?', 'abierta'),
(5, '¿Cual es tu edad?', 'abierta'),
(6, '¿Que consola de videojuegos prefieres?', 'multiple');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta_respuesta`
--

CREATE TABLE `pregunta_respuesta` (
  `idPregunta_fk` int(11) NOT NULL,
  `idRespuesta_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `idRespuesta` int(20) NOT NULL,
  `respuesta` varchar(200) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`idRespuesta`, `respuesta`, `tipo`) VALUES
(6, 'Xbox', ''),
(7, 'Playstation', ''),
(8, 'Wii', ''),
(9, 'Hombre', ''),
(10, 'Mujer', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(50) NOT NULL,
  `apellidoUsuario` varchar(50) NOT NULL,
  `correoUsuario` varchar(50) NOT NULL,
  `passwordUsuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `objeto`
--
ALTER TABLE `objeto`
  ADD PRIMARY KEY (`idObjeto`);

--
-- Indices de la tabla `objeto_pregunta`
--
ALTER TABLE `objeto_pregunta`
  ADD PRIMARY KEY (`idObjeto_fk`,`idPregunta_fk`);

--
-- Indices de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`idPregunta`);

--
-- Indices de la tabla `pregunta_respuesta`
--
ALTER TABLE `pregunta_respuesta`
  ADD PRIMARY KEY (`idPregunta_fk`,`idRespuesta_fk`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`idRespuesta`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `objeto`
--
ALTER TABLE `objeto`
  MODIFY `idObjeto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pregunta`
--
ALTER TABLE `pregunta`
  MODIFY `idPregunta` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `idRespuesta` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
