-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2021 a las 04:46:36
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `password2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`name`, `email`, `password`, `password2`) VALUES
('FERNANDO', '1234@chavoruco.com', '1234', '1234'),
('jesus', '181080027@laverga.com', '123', '123'),
('Fermin Cruz Erik', 'erik@laverga.com', '1234', '1234'),
('Fausto Perez Armas', 'faustoperez2703@hotmail.com', '123456', '123456'),
('fermin', 'l181080007@iztapalapa.tecnm.mx', '181080007', '181080007');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `cake` varchar(50) NOT NULL,
  `cake_sel` varchar(50) NOT NULL,
  `day` varchar(4) NOT NULL,
  `month` varchar(12) NOT NULL,
  `year` varchar(6) NOT NULL,
  `time` varchar(7) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `payment` varchar(30) NOT NULL,
  `person` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `street` varchar(100) NOT NULL,
  `nomber` varchar(20) NOT NULL,
  `niehborhood` varchar(50) NOT NULL,
  `PC` varchar(7) NOT NULL,
  `downtown` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
