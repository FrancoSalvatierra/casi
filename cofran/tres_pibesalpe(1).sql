-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-08-2023 a las 23:28:49
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tres_pibesalpe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tres_pibesalpe`
--

CREATE TABLE `tres_pibesalpe` (
  `id_pibes` int(11) NOT NULL,
  `texto` varchar(1000) NOT NULL,
  `imagen` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tres_pibesalpe`
--

INSERT INTO `tres_pibesalpe` (`id_pibes`, `texto`, `imagen`) VALUES
(1, 'tres pibes al pedo.\r\nCuenta la historia de que 3 valerosos muchachos llamados \r\nPata,WAIO y coFran decidieron aventarse a un mundo desconocido.\r\nEstos jovenes', 'http://localhost/coFran2/img/trespibes.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tres_pibesalpe`
--
ALTER TABLE `tres_pibesalpe`
  ADD PRIMARY KEY (`id_pibes`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tres_pibesalpe`
--
ALTER TABLE `tres_pibesalpe`
  MODIFY `id_pibes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
