-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2023 a las 12:26:07
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_academica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `materia` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombres_apellidos` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` int(11) NOT NULL,
  `calificacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `materia`, `nombres_apellidos`, `celular`, `calificacion`) VALUES
(1, 'SIS256', 'Asier Roca Vargas', 76246480, 20),
(2, 'SIS258', 'Manuel Prado Tercero Andrés', 66008688, 0),
(3, 'SIS406', 'Raquel Mata Arellano', 69411393, 0),
(4, 'SIS406', 'Alexia Cuesta Guardado', 67287428, 0),
(5, 'SIS256', 'Martín Armas Escribano', 86103409, 0),
(6, 'SIS258', 'Jan Rodarte Tercero Benito', 68287348, 0),
(7, 'SIS256', 'Abril Apodaca Ochoa', 62905792, 0),
(8, 'SIS406', 'Victoria Ruvalcaba Reynoso', 74845551, 0),
(9, 'SIS256', 'Ing. Cristian Badillo Segundo Maestas', 76744658, 0),
(10, 'SIS406', 'Carlota Sauceda Hijo Arias', 61108781, 0),
(11, 'SIS258', 'Salma Deleón Segundo Escobedo', 72086325, 0),
(12, 'SIS258', 'Pau Lebrón Delatorre', 61364512, 0),
(13, 'SIS406', 'Rosario Jasso Rivera', 74441823, 0),
(14, 'SIS256', 'Lic. Naia Nieto Hijo Almaráz', 78746851, 20),
(15, 'SIS258', 'Srta. Olga Paz Soto', 63931406, 0),
(16, 'SIS256', 'Juana Serna Botello', 66571609, 0),
(17, 'SIS406', 'José Ojeda Redondo', 68686275, 0),
(18, 'SIS256', 'Lic. Marina Hernándes Reina', 70439867, 0),
(19, 'SIS406', 'Bruno Velázquez Candelaria', 71742401, 0),
(20, 'SIS256', 'Sra. Valeria Saiz Segundo Peláez', 79520108, 3),
(21, 'SIS256', 'Pedro Olmos Orosco', 70706603, 0),
(22, 'SIS256', 'Sra. Mara Pedraza Véliz', 76050624, 0),
(23, 'SIS406', 'Srta. Alicia Abrego Tercero Piña', 72566494, 0),
(24, 'SIS406', 'Jorge Noriega Hijo Rolón', 73607045, 0),
(25, 'SIS256', 'Helena Delafuente Meléndez', 69182364, 20),
(26, 'SIS258', 'Lic. Eduardo Jaramillo Tercero Corral', 63869031, 0),
(27, 'SIS406', 'Antonia Iglesias Domínquez', 66469410, 0),
(28, 'SIS258', 'Enrique Granados Segundo Conde', 79339234, 0),
(29, 'SIS258', 'Ing. Álvaro Delrío Hijo Candelaria', 81883140, 0),
(30, 'SIS258', 'Cristian Palacios Pagan', 80116444, 0),
(31, 'SIS258', 'Pol Salgado Cantú', 77307065, 0),
(32, 'SIS256', 'José Antonio Páez Casillas', 61228213, 0),
(33, 'SIS406', 'Yeray Godoy López', 79376348, 0),
(34, 'SIS258', 'Lic. Lidia Velázquez Sosa', 75255792, 0),
(35, 'SIS406', 'Ángeles Soliz Aguayo', 70374266, 0),
(36, 'SIS406', 'Omar Marroquín Melgar', 69385128, 0),
(37, 'SIS406', 'Luna Rojo Yáñez', 75125455, 0),
(38, 'SIS406', 'Srta. Silvia Roldán Roldán', 85644677, 0),
(39, 'SIS256', 'Oriol Peralta Mateos', 82268831, 0),
(40, 'SIS256', 'Adam Macías Aguilera', 73099197, 50),
(41, 'SIS256', 'Sr. Miguel Trejo Tercero Casillas', 85995774, 0),
(42, 'SIS406', 'Margarita Escalante Partida', 81342022, 0),
(43, 'SIS256', 'Sr. Oriol Jaramillo Tercero De Jesús', 69166496, 0),
(44, 'SIS256', 'D. Juan Escamilla Santamaría', 86029926, 0),
(45, 'SIS256', 'Beatriz Olvera Becerra', 65013779, 55),
(46, 'SIS406', 'Srta. Eva Lugo Tercero Luevano', 83446629, 0),
(47, 'SIS256', 'Francisco Javier Rueda Hijo Barreto', 74882940, 0),
(48, 'SIS258', 'Héctor Salgado Tercero Maestas', 86736521, 0),
(49, 'SIS406', 'Olivia Garibay Deleón', 82524954, 0),
(50, 'SIS406', 'Candela Palomino Colunga', 84331372, 0),
(51, 'SIS406', 'Dr. Nil Izquierdo Cortez', 77591077, 0),
(52, 'SIS406', 'David Leyva Nájera', 64026950, 0),
(53, 'SIS256', 'Juan José Arredondo Marcos', 87033965, 0),
(54, 'SIS258', 'Nerea Casares Vigil', 83242473, 0),
(55, 'SIS256', 'Aina Regalado Montemayor', 66533031, 0),
(56, 'SIS256', 'Mateo Fuentes Cuevas', 67788039, 0),
(57, 'SIS406', 'Ana Mercado Montañez', 84983173, 0),
(58, 'SIS406', 'Yolanda Estévez Ruiz', 65716996, 0),
(59, 'SIS258', 'Luna Cabán Segundo Palacios', 75759079, 0),
(60, 'SIS258', 'Joel Izquierdo Calvo', 61765122, 0),
(61, 'SIS256', 'Jorge Pardo Santos', 71211861, 0),
(62, 'SIS406', 'Unai Casanova Gaitán', 82563431, 0),
(63, 'SIS258', 'Rocío Ávalos Elizondo', 82815650, 0),
(64, 'SIS258', 'Jesús Andrés Negrón', 70733416, 0),
(65, 'SIS406', 'Naia Lara Mesa', 64740855, 0),
(66, 'SIS258', 'César Padrón Segundo Oliva', 72143493, 0),
(67, 'SIS406', 'Ing. Yago Véliz Segundo Salas', 86402612, 0),
(68, 'SIS256', 'Carolina Font López', 76928870, 0),
(69, 'SIS258', 'Carla Mota Andrés', 66230899, 0),
(70, 'SIS406', 'Gonzalo Vila Armendáriz', 85379130, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `materia` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id`, `materia`, `dia`, `hora`) VALUES
(1, 'SIS256', 'Lunes', 16),
(2, 'SIS256', 'Lunes', 17),
(3, 'SIS256', 'Miércoles', 16),
(4, 'SIS256', 'Miércoles', 17),
(5, 'SIS258', 'Lunes', 14),
(6, 'SIS258', 'Lunes', 15),
(7, 'SIS258', 'Jueves', 16),
(8, 'SIS258', 'Jueves', 17),
(9, 'SIS406', 'Martes', 16),
(10, 'SIS406', 'Martes', 17),
(11, 'SIS406', 'Viernes', 9),
(12, 'SIS406', 'Viernes', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informes`
--

CREATE TABLE `informes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `materia` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mes` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `porcentaje` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `informes`
--

INSERT INTO `informes` (`id`, `materia`, `mes`, `porcentaje`) VALUES
(1, 'SIS256', 'Febrero', 44),
(2, 'SIS258', 'Febrero', 55),
(3, 'SIS406', 'Febrero', 66),
(4, 'SIS256', 'Enero', 66),
(5, 'SIS258', 'Enero', 77),
(6, 'SIS256', 'Octubre', 50),
(7, 'SIS258', 'Octubre', 60),
(8, 'SIS406', 'Octubre', 60),
(9, 'SIS256', 'Enero', 4),
(10, 'SIS258', 'Enero', 4),
(11, 'SIS406', 'Enero', 5),
(12, 'SIS256', 'junio', 33),
(13, 'SIS258', 'junio', 33),
(14, 'SIS406', 'junio', 33),
(15, 'SIS256', 'Noviembre', 66),
(16, 'SIS258', 'Noviembre', 98),
(17, 'SIS406', 'Noviembre', 41),
(18, 'SIS406', 'Noviembre', 41);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` smallint(6) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `nombrecompleto` varchar(100) COLLATE utf8_bin NOT NULL,
  `nivel` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombrecompleto`, `nivel`) VALUES
(1, 'admin@usfx.bo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Administrador sistema', 1),
(2, 'carlosmontellano@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Carlos Montellano', 0),
(3, 'juanperez@gmail.com', 'ce6bcac8b59ff1a91a938d76beca57ac09c926d6', 'Juan Perez ', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_materias`
--

CREATE TABLE `usuarios_materias` (
  `id` int(11) NOT NULL,
  `materia` varchar(6) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_materias`
--

INSERT INTO `usuarios_materias` (`id`, `materia`, `idusuario`) VALUES
(1, 'SIS256', 2),
(2, 'SIS258', 2),
(3, 'SIS406', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `informes`
--
ALTER TABLE `informes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios_materias`
--
ALTER TABLE `usuarios_materias`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `informes`
--
ALTER TABLE `informes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios_materias`
--
ALTER TABLE `usuarios_materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
