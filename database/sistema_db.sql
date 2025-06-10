-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-06-2025 a las 21:25:05
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
-- Base de datos: `siadeg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificados`
--

CREATE TABLE `certificados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usuario_id` int(11) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `url_certificado` text NOT NULL,
  `QR` varchar(255) DEFAULT NULL,
  `fecha_emision` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manuales`
--

CREATE TABLE `manuales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `titulo` varchar(150) NOT NULL,
  `url_manual` text NOT NULL,
  `tipo` varchar(50) DEFAULT 'VIDEO',
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `manuales`
--

INSERT INTO `manuales` (`id`, `producto_id`, `titulo`, `url_manual`, `tipo`, `fecha`) VALUES
(1, 2, 'Requerimiento BB, SS y CAS\r\n', 'https://www.youtube.com/embed/5ALwWIT1mtw?si=-pStaA8DhebOzHnM', 'VIDEO', '2025-06-04'),
(2, 2, 'Mantenimiento de Personales\r\n', 'https://www.youtube.com/embed/9OoxdjjhFbw?si=vAMO8KIK6iTarT2i', 'VIDEO', '2025-06-04'),
(3, 2, 'Configuración Regional', 'https://www.youtube.com/embed/3nkyQwro5To?si=xv0N3QZ863hXVeUv', 'VIDEO', '2025-06-04'),
(5, 2, 'Manual para Administradores', 'https://siadeg.com/download/manuales/SIADEG_Manual_Guber_Administrador.pdf', 'PDF', '2025-06-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `caracteristicas` text DEFAULT NULL,
  `precio` decimal(10,2) DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `tipo` enum('comercial','gubernamental') DEFAULT NULL,
  `creado_en` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `caracteristicas`, `precio`, `imagen`, `tipo`, `creado_en`) VALUES
(1, 'SIADEG Empresarial 2', 'Facturacion\r\n-Registro de Clientes\r\n-Registro de trabajadores de la empresa\r\n-Registro de Productos', '0', 120.00, NULL, 'comercial', '2025-06-05 02:15:23'),
(2, 'SIADEG Gubernamental', 'Soporte dedicado y infraestructura para entidades gubernamentales.', 'Transacciones ilimitadas-Usuarios ilimitados-Reportes avanzados-Representante de soporte dedicado-Representante de soporte dedicado-Servidor de archivo dedicado', 500.00, NULL, 'gubernamental', '2025-06-05 02:29:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `dni` varchar(8) DEFAULT NULL,
  `correo` varchar(100) NOT NULL,
  `rol` enum('ADMIN','EDITOR','USUARIO') DEFAULT 'USUARIO',
  `contrasena` text NOT NULL,
  `institucion` varchar(150) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_completo`, `dni`, `correo`, `rol`, `contrasena`, `institucion`, `fecha_registro`) VALUES
(1, 'Admin', '77021318', 'admin@gmail.com', 'ADMIN', '$2y$10$JISvcCD/xjf49KuFHmv2I.qmSiZ2gtCN0XSgjH9wdwYlUWl4S5tGi', 'Continental', '2025-06-06 00:30:04'),
(2, 'Usuario', '12345678', 'usuario@gmail.com', 'USUARIO', '$2y$10$9nYznaZYctHfpcNRdWN5cuFAuHp4xKrzdCn5cB2MN31gy3Uzh.7QW', 'Cusco', '2025-06-10 19:23:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `versiones`
--

CREATE TABLE `versiones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `version` varchar(20) NOT NULL,
  `fecha_lanzamiento` date NOT NULL,
  `url_descarga` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `versiones`
--

INSERT INTO `versiones` (`id`, `producto_id`, `version`, `fecha_lanzamiento`, `url_descarga`) VALUES
(1, 1, '10', '2025-06-05', 'https://icon-sets.iconify.design/?query=logout&search-page=1'),
(2, 1, '10.3', '2025-06-06', 'https://siadeg.com/download/Instalador_SIADEG_Guber.exe'),
(3, 2, '10.4', '2025-06-13', 'https://siadeg.com/download/Instalador_SIADEG_Guber.exe');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `certificados`
--
ALTER TABLE `certificados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_id` (`producto_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indices de la tabla `manuales`
--
ALTER TABLE `manuales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- Indices de la tabla `versiones`
--
ALTER TABLE `versiones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_id` (`producto_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `certificados`
--
ALTER TABLE `certificados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `manuales`
--
ALTER TABLE `manuales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `versiones`
--
ALTER TABLE `versiones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `certificados`
--
ALTER TABLE `certificados`
  ADD CONSTRAINT `certificados_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`),
  ADD CONSTRAINT `certificados_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `manuales`
--
ALTER TABLE `manuales`
  ADD CONSTRAINT `manuales_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `versiones`
--
ALTER TABLE `versiones`
  ADD CONSTRAINT `versiones_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
