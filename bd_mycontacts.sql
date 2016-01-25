-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-01-2016 a las 13:37:21
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_mycontacts`
--
CREATE DATABASE IF NOT EXISTS `bd_mycontacts` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `bd_mycontacts`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_contactos`
--

DROP TABLE IF EXISTS `tbl_contactos`;
CREATE TABLE IF NOT EXISTS `tbl_contactos` (
`id_contacto` int(11) NOT NULL,
  `nombre_cont` varchar(20) COLLATE utf8_bin NOT NULL,
  `apellido_cont` varchar(35) COLLATE utf8_bin NOT NULL,
  `mail_cont` varchar(50) COLLATE utf8_bin NOT NULL,
  `dir_cont` text COLLATE utf8_bin NOT NULL,
  `tel_cont` int(9) NOT NULL,
  `mobil_cont` int(9) NOT NULL,
  `id_ubicacion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_tipo_cont` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_contactos`
--

INSERT INTO `tbl_contactos` (`id_contacto`, `nombre_cont`, `apellido_cont`, `mail_cont`, `dir_cont`, `tel_cont`, `mobil_cont`, `id_ubicacion`, `id_usuario`, `id_tipo_cont`) VALUES
(1, 'Eric', 'Sanchez', 'eric.sanchez@fje.edu', '', 933012983, 654987123, 1, 1, 1),
(2, 'Raul', 'Calvo', 'raul.calvo@fje.edu', '', 938667985, 698741123, 2, 1, 2),
(3, 'Oriol', 'Jansà', 'oriol.jansa@fje.edu', '', 938661325, 632159487, 3, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_contacto`
--

DROP TABLE IF EXISTS `tbl_tipo_contacto`;
CREATE TABLE IF NOT EXISTS `tbl_tipo_contacto` (
`id_tipo_cont` int(11) NOT NULL,
  `nombre_tipo_cont` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_tipo_contacto`
--

INSERT INTO `tbl_tipo_contacto` (`id_tipo_cont`, `nombre_tipo_cont`) VALUES
(1, 'Casa'),
(2, 'Trabajo'),
(3, 'Escuela'),
(4, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_usuario`
--

DROP TABLE IF EXISTS `tbl_tipo_usuario`;
CREATE TABLE IF NOT EXISTS `tbl_tipo_usuario` (
`id_tipo_usuario` int(11) NOT NULL,
  `tipo_usuario` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_tipo_usuario`
--

INSERT INTO `tbl_tipo_usuario` (`id_tipo_usuario`, `tipo_usuario`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ubicacion`
--

DROP TABLE IF EXISTS `tbl_ubicacion`;
CREATE TABLE IF NOT EXISTS `tbl_ubicacion` (
`id_ubicacion` int(11) NOT NULL,
  `nombre_ubicacion` text COLLATE utf8_bin NOT NULL,
  `latitud` int(11) NOT NULL,
  `longitud` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_ubicacion`
--

INSERT INTO `tbl_ubicacion` (`id_ubicacion`, `nombre_ubicacion`, `latitud`, `longitud`) VALUES
(1, 'Barcelona', 0, 0),
(2, 'L''Hospitalet', 0, 0),
(3, 'Cornellà', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

DROP TABLE IF EXISTS `tbl_usuario`;
CREATE TABLE IF NOT EXISTS `tbl_usuario` (
`id_usuario` int(11) NOT NULL,
  `email_usu` varchar(30) COLLATE utf8_bin NOT NULL,
  `nombre_usu` varchar(20) COLLATE utf8_bin NOT NULL,
  `apellido_usu` varchar(35) COLLATE utf8_bin NOT NULL,
  `passwd_usu` varchar(10) COLLATE utf8_bin NOT NULL,
  `id_tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id_usuario`, `email_usu`, `nombre_usu`, `apellido_usu`, `passwd_usu`, `id_tipo_usuario`) VALUES
(1, '1010.joan23@fje.edu', 'Xavier', 'Granell', '1234', 1),
(2, '2020.joan23@fje.edu', 'Jorge', 'Jaico', '1234', 1),
(3, '3030.joan23@fje.edu', 'Aitor', 'Blesa', '1234', 2),
(4, '4040.joan23@fje.edu', 'Sergio', 'Ayala', '1234', 2),
(5, '5050.joan23@fje.edu', 'Victor', 'Cruz', '1234', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_contactos`
--
ALTER TABLE `tbl_contactos`
 ADD PRIMARY KEY (`id_contacto`), ADD KEY `id_usuario` (`id_usuario`), ADD KEY `id_tipo_cont` (`id_tipo_cont`), ADD KEY `id_ubicacion` (`id_ubicacion`), ADD KEY `id_ubicacion_2` (`id_ubicacion`);

--
-- Indices de la tabla `tbl_tipo_contacto`
--
ALTER TABLE `tbl_tipo_contacto`
 ADD PRIMARY KEY (`id_tipo_cont`), ADD KEY `id_tipo_cont` (`id_tipo_cont`);

--
-- Indices de la tabla `tbl_tipo_usuario`
--
ALTER TABLE `tbl_tipo_usuario`
 ADD PRIMARY KEY (`id_tipo_usuario`), ADD KEY `id_tipo_usuario` (`id_tipo_usuario`);

--
-- Indices de la tabla `tbl_ubicacion`
--
ALTER TABLE `tbl_ubicacion`
 ADD PRIMARY KEY (`id_ubicacion`), ADD KEY `id_ubicacion` (`id_ubicacion`), ADD KEY `id_ubicacion_2` (`id_ubicacion`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
 ADD PRIMARY KEY (`id_usuario`), ADD KEY `id_tipo_usuario` (`id_tipo_usuario`), ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_contactos`
--
ALTER TABLE `tbl_contactos`
MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbl_tipo_contacto`
--
ALTER TABLE `tbl_tipo_contacto`
MODIFY `id_tipo_cont` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tbl_tipo_usuario`
--
ALTER TABLE `tbl_tipo_usuario`
MODIFY `id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_ubicacion`
--
ALTER TABLE `tbl_ubicacion`
MODIFY `id_ubicacion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_contactos`
--
ALTER TABLE `tbl_contactos`
ADD CONSTRAINT `tbl_contactos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuario` (`id_usuario`),
ADD CONSTRAINT `tbl_contactos_ibfk_2` FOREIGN KEY (`id_tipo_cont`) REFERENCES `tbl_tipo_contacto` (`id_tipo_cont`),
ADD CONSTRAINT `tbl_contactos_ibfk_3` FOREIGN KEY (`id_ubicacion`) REFERENCES `tbl_ubicacion` (`id_ubicacion`);

--
-- Filtros para la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
ADD CONSTRAINT `tbl_usuario_ibfk_1` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tbl_tipo_usuario` (`id_tipo_usuario`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
