-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2018 a las 16:27:13
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dobleturno`
--
DROP SCHEMA IF EXISTS dobleturno;
-- --------------------------------------------------------
CREATE SCHEMA dobleturno;
USE dobleturno;
--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `userID` int(9) NOT NULL,
  `email` varchar(40) COLLATE utf8_bin NOT NULL,
  `username` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `role` varchar(7) COLLATE utf8_bin NOT NULL,
  `fechaCreacion` date DEFAULT NULL,
  `fechaUltimoAcceso` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`userID`, `email`, `username`, `password`, `activo`, `role`, `fechaCreacion`, `fechaUltimoAcceso`) VALUES
(1, 'admin@admin.com', 'admin', 'admin', 1, 'admin', '2018-06-08', NULL),
(2, 'jjcanada@ual.es', 'jjcanada', 'jjcanada', 1, 'usuario', '2018-06-08', NULL),
(3, 'kevirgitano@gmail.com', 'kevin', 'kevin', 1, 'usuario', '2018-06-08', NULL),
(4, 'Mohamedhnina@gmail.com', 'mohamed', 'mohamed', 1, 'usuario', '2018-06-08', NULL),
(5, 'sergio.gps95@gmail.com', 'sergio', 'sergio', 1, 'usuario', '2018-06-08', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `userID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
