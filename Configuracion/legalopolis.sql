-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2020 a las 06:34:57
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `legalopolis`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentacion`
--

CREATE TABLE `documentacion` (
  `id` int(11) NOT NULL,
  `cliente` varchar(60) NOT NULL,
  `radicado` varchar(20) NOT NULL,
  `fecha_ultima_actualizacion` varchar(20) NOT NULL,
  `detalle_ultima_actualizacion` varchar(100) NOT NULL,
  `despacho` varchar(20) NOT NULL,
  `juez` varchar(50) NOT NULL,
  `instancia_proceso` varchar(20) NOT NULL,
  `archivo` longblob NOT NULL,
  `cedula` int(12) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `nombre_usuario` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documentacion`
--

INSERT INTO `documentacion` (`id`, `cliente`, `radicado`, `fecha_ultima_actualizacion`, `detalle_ultima_actualizacion`, `despacho`, `juez`, `instancia_proceso`, `archivo`, `cedula`, `correo`, `nombre_usuario`) VALUES
(13, 'Jose', 'xxcxxx', '2020-10-18-00:04:54', 'Actualizacion en instancia de proceso', 'valledupar', 'albelto', 'Espera', 0x696d673030352e6a7067, 1003233575, 'rovinelcapo@gmail.com', 'Robin'),
(14, 'ddd', 'ddd', '2020-10-08-15:18:55', '', 'ddd', 'dd', 'Espera', '', 2147483647, 'Wennieves27@gmail.com', 'Wendy nieves');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `cedula` int(12) NOT NULL,
  `nombre_usuario` varchar(60) NOT NULL,
  `tipo_usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `password`, `cedula`, `nombre_usuario`, `tipo_usuario`) VALUES
(1, 'rovinelcapo@gmail.com', '123', 33333333, 'Robin ', 'Premium'),
(3, 'Wennieves27@gmail.com', '123', 100525642, 'Wendy nieves ', 'Premium'),
(4, 'robincastellanosperez@gmail.com', '123', 1003233175, 'Robin ', 'Premium'),
(5, 'andresravila14@gmail.com', '123', 1516541651, 'Andres ruiz', 'Premium'),
(2, 'elena@gmail.com', '123', 2147483647, 'elena', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `documentacion`
--
ALTER TABLE `documentacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `documentacion`
--
ALTER TABLE `documentacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
