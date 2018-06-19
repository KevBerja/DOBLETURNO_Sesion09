-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 19-06-2018 a las 19:43:22
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+01:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dobleturno`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `Usuarios` (
  `userID` int(9) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) COLLATE utf8_bin NOT NULL,
  `username` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  `activo` bit(1) NOT NULL,
  `role` varchar(7) COLLATE utf8_bin NOT NULL,
  `fechaCreacion` date DEFAULT NULL,
  `fechaUltimoAcceso` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `Usuarios` (`userID`, `email`, `username`, `password`, `activo`, `role`, `fechaCreacion`, `fechaUltimoAcceso`) VALUES
(1, 'admin@admin.com', 'admin', 'admin', b'1', 'admin', NULL, NULL),
(2, 'jjcanada@ual.es', 'jjcanada', 'jjcanada', b'1', 'usuario', NULL, NULL),
(3, 'kevirgitano@gmail.com', 'kevin', 'kevin', b'1', 'usuario', NULL, NULL),
(4, 'Mohamedhnina@gmail.com', 'mohamed', 'mohamed', b'1', 'usuario', NULL, NULL),
(5, 'sergio.gps95@gmail.com', 'sergio', 'sergio', b'1', 'usuario', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `userID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;