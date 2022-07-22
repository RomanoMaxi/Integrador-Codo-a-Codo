-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2022 a las 22:49:09
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdconferencias2022`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_usuarios`
--

CREATE TABLE `tabla_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nivel` varchar(20) NOT NULL,
  `telefono` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tabla_usuarios`
--

INSERT INTO `tabla_usuarios` (`id_usuario`, `nombre`, `apellido`, `email`, `nivel`, `telefono`) VALUES
(38, 'maxi', 'romano', 'maxi@gmail.com', 'trainee', '1123648597'),
(55, 'pepe', 'pipa', 'ricasara@gmail.com', 'junior', '12312345'),
(56, 'sara', 'ano', 'jorgeromano68@gmail.com', 'trainee', '2332112');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `username_password`
--

CREATE TABLE `username_password` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `username_password`
--

INSERT INTO `username_password` (`id`, `username`, `pass`) VALUES
(1, 'pedro', 'pica'),
(3, 'facu', 'perez'),
(4, 'mera', 'mericata'),
(6, 'mica', 'bezona'),
(9, 'hugo', 'pugo'),
(10, 'yay', 'yuyu'),
(19, 'aseewq', 'asdad'),
(20, 'admin', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla_usuarios`
--
ALTER TABLE `tabla_usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `username_password`
--
ALTER TABLE `username_password`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla_usuarios`
--
ALTER TABLE `tabla_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `username_password`
--
ALTER TABLE `username_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
