-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-10-2024 a las 20:14:25
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbase`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datoss`
--

CREATE TABLE `datoss` (
  `Orden` int(20) NOT NULL,
  `Clave` varchar(20) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Sexo` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datoss`
--

INSERT INTO `datoss` (`Orden`, `Clave`, `Nombre`, `Sexo`) VALUES
(3, '123', 'nahuel', 'Ma');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datoss`
--
ALTER TABLE `datoss`
  ADD PRIMARY KEY (`Orden`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datoss`
--
ALTER TABLE `datoss`
  MODIFY `Orden` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
