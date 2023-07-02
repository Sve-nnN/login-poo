-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-07-2023 a las 07:38:13
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `PNF` varchar(255) NOT NULL,
  `CEDULA` int(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellido`, `usuario`, `PNF`, `CEDULA`, `password`) VALUES
(2, 'Christoph', 'Gownge', 'cgownge1', 'Mantenimiento', 22858499, 'mP9.IJw9,kQYBu'),
(3, 'Murry', 'Gianuzzi', 'mgianuzzi2', 'Informatica', 37109070, 'vD7@g=5r)l'),
(4, 'Timothea', 'Seiter', 'tseiter3', 'Administración', 15033430, 'nT1/Q?~vE%7QZH'),
(5, 'Athena', 'McArtan', 'amcartan4', 'Informatica', 23665874, 'mK8_NV3#K<F2'),
(6, 'Norah', 'Brandsen', 'nbrandsen5', 'Administración', 39765576, 'fM3`3G!O0q'),
(7, 'Husain', 'Pain', 'hpain6', 'Agroalimentación', 12388338, 'aH0&MWLD'),
(8, 'Onida', 'Wakeford', 'owakeford7', 'Administración', 31633150, 'kL9#}Fb$twS@\rQ'),
(9, 'Zebadiah', 'Boullen', 'zboullen8', 'Agroalimentación', 15691677, 'eO3<HJZY'),
(10, 'Clarinda', 'Bonnyson', 'cbonnyson9', 'Mantenimiento', 39778734, 'aF9\'{K=LArP<q9'),
(11, 'Conchita', 'Yarnall', 'cyarnalla', 'Mantenimiento', 33221367, 'wN6/FvlRf28'),
(12, 'Fidelio', 'Gellion', 'fgellionb', 'Electricidad', 32386270, 'bX9%Wa\"1#wmE'),
(13, 'Miller', 'Brodway', 'mbrodwayc', 'Electricidad', 22511102, 'iS6%5/0YbI>EJ_#e'),
(14, 'Margarete', 'Phillips', 'mphillipsd', 'Agroalimentación', 12260898, 'eX3<Xc=Wp@'),
(15, 'Lilli', 'Overshott', 'lovershotte', 'Agroalimentación', 8850129, 'yX2.cDXd>'),
(16, 'Ali', 'Lamartine', 'alamartinef', 'Agroalimentación', 17185705, 'zM2*8(GL_Dg'),
(17, 'Orton', 'Jendricke', 'ojendrickeg', 'Mantenimiento', 14708142, 'eK3@BURDT(+j#bAx'),
(18, 'Gates', 'Geraldo', 'ggeraldoh', 'Mantenimiento', 19024798, 'fO1*!FyWo)t('),
(19, 'Catherine', 'Blore', 'cblorei', 'Mantenimiento', 9368215, 'yN3(UaF6'),
(20, 'Dawna', 'Edworthye', 'dedworthyej', 'Electricidad', 37113282, 'aU9!~(<@(5m3'),
(21, 'Pepe', 'Escamilla', 'elpepeXD', 'Informatica', 8290384, 'elPEPEPE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `username` varchar(20) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
