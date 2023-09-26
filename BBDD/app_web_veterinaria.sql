-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2023 a las 21:03:34
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
-- Base de datos: `app_web_veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `DNI` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Telefono` bigint(10) NOT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Ciudad` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`DNI`, `Nombre`, `Apellido`, `Telefono`, `Email`, `Direccion`, `Ciudad`) VALUES
(27442656, 'Carlos Mariano', 'Grosso', 2291543603, NULL, NULL, 'Miramar'),
(29350912, 'Leonardo Nahuel', 'Grosso', 2494003208, 'nahuelgrosso1982@gmail.com', 'Los Sauces 245', 'Tandil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id` int(10) NOT NULL,
  `dni cliente` int(10) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `compra` tinyint(1) NOT NULL,
  `detalle` varchar(100) NOT NULL,
  `importe_compra` int(10) NOT NULL,
  `consulta_medica` tinyint(1) NOT NULL,
  `id_HC/CM` int(10) NOT NULL,
  `importe_total` int(11) NOT NULL,
  `pago` tinyint(1) NOT NULL,
  `adeuda` tinyint(1) NOT NULL,
  `cuanto_adeuda` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id`, `dni cliente`, `fecha`, `compra`, `detalle`, `importe_compra`, `consulta_medica`, `id_HC/CM`, `importe_total`, `pago`, `adeuda`, `cuanto_adeuda`) VALUES
(1, 29350912, '2023-09-26', 1, 'xxxx', 100, 1, 1, 200, 0, 1, 200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia clinica_consulta medica`
--

CREATE TABLE `historia clinica_consulta medica` (
  `id` int(10) NOT NULL,
  `id_mascota` int(10) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `descripcion_de_la_consulta` varchar(300) NOT NULL,
  `diagnostico_tratamiento` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `historia clinica_consulta medica`
--

INSERT INTO `historia clinica_consulta medica` (`id`, `id_mascota`, `fecha`, `descripcion_de_la_consulta`, `diagnostico_tratamiento`) VALUES
(1, 1, '2023-09-26', 'Hermosidad descontrolada', 'Mimos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `id` int(10) NOT NULL,
  `dni cliente` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo (Gato/Perro)` varchar(50) NOT NULL,
  `raza` varchar(50) DEFAULT NULL,
  `edad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`id`, `dni cliente`, `nombre`, `tipo (Gato/Perro)`, `raza`, `edad`) VALUES
(1, 29350912, 'Z', 'perro', 'Doberman', 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historia clinica_consulta medica`
--
ALTER TABLE `historia clinica_consulta medica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `historia clinica_consulta medica`
--
ALTER TABLE `historia clinica_consulta medica`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
