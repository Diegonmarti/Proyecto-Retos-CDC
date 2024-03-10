-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2024 a las 14:16:58
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `landing_cdc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `Id` int(11) NOT NULL,
  `Icono` blob DEFAULT NULL,
  `Lenguaje` varchar(50) DEFAULT NULL,
  `Nivel` varchar(50) DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`Id`, `Icono`, `Lenguaje`, `Nivel`, `Descripcion`, `precio`) VALUES
(1, 0x4d554c54494d454449412f496dc3a167656e65732f417061727461646f437572736f732f437572736f732f48544d4c2e706e67, 'HTML', 'Principiante', 'Descripción de ejemplo', 25),
(2, 0x4d554c54494d454449412f496dc3a167656e65732f417061727461646f437572736f732f437572736f732f48544d4c2e706e67, 'HTML', 'Intermedio', 'Descripción de ejemplo', 50),
(3, 0x4d554c54494d454449412f496dc3a167656e65732f417061727461646f437572736f732f437572736f732f48544d4c2e706e67, 'HTML', 'Avanzado', 'Descripción de ejemplo', 75),
(4, 0x4d554c54494d454449412f496dc3a167656e65732f417061727461646f437572736f732f437572736f732f4a6176615363726970742e706e67, 'JavaScript', 'Principiante', 'Descripción de ejemplo', 25),
(5, 0x4d554c54494d454449412f496dc3a167656e65732f417061727461646f437572736f732f437572736f732f4a6176615363726970742e706e67, 'JavaScript', 'Intermedio', 'Descripción de ejemplo', 50),
(6, 0x4d554c54494d454449412f496dc3a167656e65732f417061727461646f437572736f732f437572736f732f4a6176615363726970742e706e67, 'JavaScript', 'Avanzado', 'Descripción de ejemplo', 75),
(7, 0x4d554c54494d454449412f496dc3a167656e65732f417061727461646f437572736f732f437572736f732f507974686f6e2e706e67, 'Python', 'Principiante', 'Descripción de ejemplo', 25),
(8, 0x4d554c54494d454449412f496dc3a167656e65732f417061727461646f437572736f732f437572736f732f507974686f6e2e706e67, 'Python', 'Intermedio', 'Descripción de ejemplo', 50),
(9, 0x4d554c54494d454449412f496dc3a167656e65732f417061727461646f437572736f732f437572736f732f507974686f6e2e706e67, 'Python', 'Avanzado', 'Descripción de ejemplo', 75);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriculas`
--

CREATE TABLE `matriculas` (
  `id_usuario` varchar(50) NOT NULL,
  `codigo_curso` int(11) NOT NULL,
  `fecha_inicio` varchar(50) NOT NULL,
  `fecha_final` varchar(50) DEFAULT NULL,
  `completado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE `niveles` (
  `codigo` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `niveles`
--

INSERT INTO `niveles` (`codigo`, `nombre`) VALUES
(1, 'Principiante'),
(2, 'Junior'),
(3, 'Senior');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `codigo` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`codigo`, `nombre`) VALUES
('0', 'Sin especificar'),
('es', 'España'),
('fr', 'Francia'),
('no', 'Noruega');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Nombre_Apellido` varchar(50) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Contraseña` varchar(50) NOT NULL,
  `DNI` varchar(50) NOT NULL,
  `FechaNaci` varchar(30) DEFAULT NULL,
  `Nivel` varchar(50) DEFAULT NULL,
  `Notificaciones` tinyint(1) DEFAULT NULL,
  `Revista` tinyint(1) DEFAULT NULL,
  `codigo_pais` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Nombre_Apellido`, `Correo`, `Contraseña`, `DNI`, `FechaNaci`, `Nivel`, `Notificaciones`, `Revista`, `codigo_pais`) VALUES
('a a', 'a@a.com', 'Hola1234@', '12345678Z', '', '1', 0, 0, '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `matriculas`
--
ALTER TABLE `matriculas`
  ADD PRIMARY KEY (`id_usuario`,`codigo_curso`),
  ADD KEY `codigo_curso` (`codigo_curso`);

--
-- Indices de la tabla `niveles`
--
ALTER TABLE `niveles`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`DNI`),
  ADD UNIQUE KEY `Correo` (`Correo`),
  ADD KEY `codigopaises` (`codigo_pais`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `niveles`
--
ALTER TABLE `niveles`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `matriculas`
--
ALTER TABLE `matriculas`
  ADD CONSTRAINT `matriculas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`DNI`),
  ADD CONSTRAINT `matriculas_ibfk_2` FOREIGN KEY (`codigo_curso`) REFERENCES `cursos` (`Id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`codigo_pais`) REFERENCES `paises` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
