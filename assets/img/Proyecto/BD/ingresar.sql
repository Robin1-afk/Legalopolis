-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-09-2016 a las 19:56:24
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ingresar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `identificacion` int(20) NOT NULL,
  `user` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pasadmin` varchar(200) NOT NULL,
  `creador` varchar(30) NOT NULL,
  `revisor` varchar(20) NOT NULL,
  `aprobador` varchar(20) NOT NULL,
  `lector` varchar(20) NOT NULL,
  PRIMARY KEY (`identificacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`identificacion`, `user`, `email`, `pasadmin`, `creador`, `revisor`, `aprobador`, `lector`) VALUES
(3265, 'Jose Perez', 'jose', ' ', '', '123', ' ', ' '),
(5588, 'Juan Altamar', 'juan', ' ', '456', ' ', ' ', ' '),
(5689, 'Administrador ', 'admin', '123', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_documentos`
--

CREATE TABLE IF NOT EXISTS `tbl_documentos` (
  `id_documento` int(11) NOT NULL AUTO_INCREMENT,
  `para` varchar(100) NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `version` varchar(50) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `tipo` varchar(150) DEFAULT NULL,
  `responsable` varchar(150) NOT NULL,
  `archivo` varchar(255) NOT NULL,
  `id_usuario` int(15) NOT NULL,
  `leido` varchar(180) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id_documento`),
  KEY `fk_tbl_documentos_login_idx` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tbl_documentos`
--

INSERT INTO `tbl_documentos` (`id_documento`, `para`, `titulo`, `version`, `fecha`, `descripcion`, `tipo`, `responsable`, `archivo`, `id_usuario`, `leido`) VALUES
(3, 'Jose Perez', 'Prueba 2', '0.0', '26/09/2016', 'Segundo documento de prueba', 'GuÃ­a', 'Juan Altamar', 'Apuntes-informatica.pdf', 5588, NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
  ADD CONSTRAINT `tbl_documentos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `login` (`identificacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
