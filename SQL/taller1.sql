-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2014 a las 10:31:50
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `taller1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea`
--

CREATE TABLE IF NOT EXISTS `tarea` (
`IdTarea` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `FechaI` date NOT NULL,
  `FechaF` date NOT NULL,
  `Prioridada` int(11) NOT NULL,
  `Descrip` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `tarea`
--

INSERT INTO `tarea` (`IdTarea`, `Nombre`, `FechaI`, `FechaF`, `Prioridada`, `Descrip`) VALUES
(1, 'Tarea1', '2014-02-02', '2014-02-04', 2, 'prueba1'),
(2, 'Prueba2', '2015-02-04', '2015-02-05', 2, 'prueba1'),
(3, 'Prueba3', '2014-01-01', '2014-01-02', 3, 'prueba'),
(4, 'Prueba 4', '2014-01-03', '2014-01-06', 2, 'prueba'),
(5, 'Prueba 5', '2014-01-01', '2014-01-02', 2, 'prueba'),
(6, 'Prueba 6', '2014-01-01', '2014-01-02', 1, 'Prueba prioridad'),
(7, 'Prueba Crear Tarea', '2014-04-03', '2014-06-06', 1, 'prueba crear'),
(8, 'Prueba Asignar Tarea', '2014-01-01', '2014-01-02', 1, 'prueba asignar tarea');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareausuario`
--

CREATE TABLE IF NOT EXISTS `tareausuario` (
  `IdUsuario` int(11) NOT NULL,
`IdTarea` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `tareausuario`
--

INSERT INTO `tareausuario` (`IdUsuario`, `IdTarea`) VALUES
(2, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(1, 7),
(1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`IdUsuario` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Apellido` text NOT NULL,
  `Correo` text NOT NULL,
  `Contrasena` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `Nombre`, `Apellido`, `Correo`, `Contrasena`) VALUES
(1, 'Maria', 'Moreno', 'malierjia@hotmail.com', '123'),
(2, 'Juan', 'Ramon', 'j@hotmail.com', '456'),
(3, 'Juan Carlos', 'Micolta', 'jmicolta@hotmail.com', '789');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tarea`
--
ALTER TABLE `tarea`
 ADD PRIMARY KEY (`IdTarea`);

--
-- Indices de la tabla `tareausuario`
--
ALTER TABLE `tareausuario`
 ADD PRIMARY KEY (`IdTarea`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`IdUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tarea`
--
ALTER TABLE `tarea`
MODIFY `IdTarea` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tareausuario`
--
ALTER TABLE `tareausuario`
MODIFY `IdTarea` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
