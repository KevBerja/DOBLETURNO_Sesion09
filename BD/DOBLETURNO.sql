-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 31-05-2018 a las 08:14:41
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `DOBLETURNO`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `email` varchar(40) COLLATE utf8_bin NOT NULL,
  `username` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  `activo` bit(1) NOT NULL,
  `role` varchar(7) COLLATE utf8_bin NOT NULL,
  `fechaCreacion` datetime DEFAULT NULL,
  `fechaUltimoAcceso` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`email`, `username`, `password`, `activo`, `role`, `fechaCreacion`, `fechaUltimoAcceso`) VALUES
('admin@admin.com', 'admin', 'admin', b'1', 'admin', NULL, NULL),
('jjcanada@ual.es', 'jjcanada', 'jjcanada', b'1', 'usuario', NULL, NULL),
('kevirgitano@gmail.com', 'kevin', 'kevin', b'1', 'usuario', NULL, NULL),
('Mohamedhnina@gmail.com', 'mohamed', 'mohamed', b'1', 'usuario', NULL, NULL),
('sergio.gps95@gmail.com', 'sergio', 'sergio', b'1', 'usuario', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
