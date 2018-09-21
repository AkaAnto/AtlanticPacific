-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 21, 2018 at 07:50 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atlantic`
--

-- --------------------------------------------------------

--
-- Table structure for table `barco`
--

CREATE TABLE `barco` (
  `id` int(10) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `largo` decimal(10,2) NOT NULL,
  `ancho` decimal(10,2) NOT NULL,
  `capacidad` decimal(10,2) NOT NULL,
  `alto` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `barco`
--

INSERT INTO `barco` (`id`, `nombre`, `largo`, `ancho`, `capacidad`, `alto`) VALUES
(33, 'ParaguanÃ¡', '120.00', '10.00', '25.00', '4.00'),
(34, 'Princes', '114.00', '20.00', '30.00', '4.00'),
(43, 'King of the seas II', '114.00', '20.00', '26.00', '4.00'),
(44, 'El Exito', '114.00', '20.00', '27.00', '4.00'),
(45, 'King of the seas', '114.00', '20.00', '28.00', '4.00'),
(46, 'Barbara Palacios', '114.00', '20.00', '29.00', '4.00'),
(47, 'ParaguanÃ¡ 2', '114.00', '20.00', '29.00', '4.00'),
(48, 'Barco Carolina', '1.00', '1.00', '13.00', '1.00');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) NOT NULL,
  `fecha` varchar(10) COLLATE utf32_bin NOT NULL,
  `codigo` varchar(20) COLLATE utf32_bin NOT NULL,
  `id_viaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

-- --------------------------------------------------------

--
-- Table structure for table `booking_carga`
--

CREATE TABLE `booking_carga` (
  `id` int(10) NOT NULL,
  `tipo_vehiculo` decimal(10,0) NOT NULL,
  `alto` decimal(10,0) NOT NULL,
  `largo` decimal(10,0) NOT NULL,
  `ancho` decimal(10,0) NOT NULL,
  `peso` decimal(10,0) NOT NULL,
  `placa` varchar(20) COLLATE utf32_bin NOT NULL,
  `nombre_responsable_carga` varchar(50) COLLATE utf32_bin NOT NULL,
  `pasaporte_responsable_carga` varchar(50) COLLATE utf32_bin NOT NULL,
  `tipo_carga` varchar(100) COLLATE utf32_bin NOT NULL,
  `peso_carga` decimal(10,0) NOT NULL,
  `descripcion_carga` varchar(200) COLLATE utf32_bin NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `Id_booking` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

-- --------------------------------------------------------

--
-- Table structure for table `booking_contacto`
--

CREATE TABLE `booking_contacto` (
  `id` int(10) NOT NULL,
  `nombre` varchar(100) COLLATE utf32_bin NOT NULL,
  `pasaporte` varchar(20) COLLATE utf32_bin NOT NULL,
  `telefono` varchar(30) COLLATE utf32_bin NOT NULL,
  `numero_dut` varchar(20) COLLATE utf32_bin NOT NULL,
  `email` varchar(50) COLLATE utf32_bin NOT NULL,
  `id_booking` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

-- --------------------------------------------------------

--
-- Table structure for table `booking_pasajero`
--

CREATE TABLE `booking_pasajero` (
  `id` int(10) NOT NULL,
  `tipo` varchar(80) COLLATE utf32_bin NOT NULL,
  `nombre` varchar(50) COLLATE utf32_bin NOT NULL,
  `pasaporte` varchar(50) COLLATE utf32_bin NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `id_booking` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(255) NOT NULL,
  `telefono_cliente` char(30) NOT NULL,
  `email_cliente` varchar(64) NOT NULL,
  `direccion_cliente` varchar(255) NOT NULL,
  `status_cliente` tinyint(4) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contactenos`
--

CREATE TABLE `contactenos` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(60) NOT NULL DEFAULT '',
  `apellido` varchar(60) NOT NULL DEFAULT '',
  `correo` varchar(60) NOT NULL DEFAULT '',
  `ciudad` varchar(60) NOT NULL DEFAULT '',
  `mensaje` varchar(128) NOT NULL DEFAULT '',
  `estatus` varchar(1) NOT NULL DEFAULT '0',
  `usuario` varchar(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactenos`
--

INSERT INTO `contactenos` (`id`, `nombre`, `apellido`, `correo`, `ciudad`, `mensaje`, `estatus`, `usuario`) VALUES
(14, '', '', '', '', '', '0', NULL),
(15, 'Judix', 'HRdjmBwRTPqIGjNaX', '', 'New York', 'Tmw0iK http://www.LnAJ7K8QSpfMO2wQ8gO.com', '0', NULL),
(16, '', '', '', '', '', '0', NULL),
(17, 'katherine', 'Zhu', 'overseas.23@kam-le.com', 'Shenzhen', 'This is Katherine from Shenzhen Kam-Le Logistics Co.LTD.China.\r\nWe insist on providing transnational logistics for \r\nalmost 10 y', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `nombre_empresa` varchar(150) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `codigo_postal` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(64) NOT NULL,
  `impuesto` int(2) NOT NULL,
  `moneda` varchar(6) NOT NULL,
  `logo_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `nombre_empresa`, `direccion`, `ciudad`, `codigo_postal`, `estado`, `telefono`, `email`, `impuesto`, `moneda`, `logo_url`) VALUES
(1, 'SMART LOGISTICS & CARGO', 'Zona Libre de Colon', ' Ãrea de France Field PanamÃ¡', '00507', 'ColÃ³n', '+507 263-0068', 'sales@smartlogisticscargo.com', 7, '$', 'img/1478792451_google30.png');

-- --------------------------------------------------------

--
-- Table structure for table `permisos`
--

CREATE TABLE `permisos` (
  `user_id` varchar(12) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `process_id` varchar(12) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `activo` varchar(1) COLLATE latin1_spanish_ci DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `permisos`
--

INSERT INTO `permisos` (`user_id`, `process_id`, `activo`) VALUES
('fcardenas', 'seg001', '1');

-- --------------------------------------------------------

--
-- Table structure for table `procesos`
--

CREATE TABLE `procesos` (
  `process_id` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `nombre` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `descripcion` varchar(128) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `procesos`
--

INSERT INTO `procesos` (`process_id`, `nombre`, `descripcion`) VALUES
('cot01', 'Leer Cotizaciones Smart', 'Leer los formularios de Cotizaciones de Smart Logistics Cargo'),
('cot02', 'Leer Cotizaciones ATPA', 'Leer los formularios de Cotizaciones de Atlantic Pacific Shipping'),
('con01', 'Leer Contáctenos de Smart', 'Leer los formularios de Cotizaciones de Smart Logistics Cargo'),
('con02', 'Leer Contáctenos de ATPA', 'Leer los formularios de Cotizaciones de Atlantic Pacific Shipping');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_producto` int(11) NOT NULL,
  `codigo_producto` char(20) NOT NULL,
  `nombre_producto` char(255) NOT NULL,
  `status_producto` tinyint(4) NOT NULL,
  `date_added` datetime NOT NULL,
  `precio_producto` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tarifa_carga`
--

CREATE TABLE `tarifa_carga` (
  `id` int(10) NOT NULL,
  `id_barco` int(4) NOT NULL,
  `tres_metros` decimal(10,2) NOT NULL,
  `seis_metros` decimal(10,0) DEFAULT NULL,
  `nueve_metros` decimal(10,0) DEFAULT NULL,
  `quince_metros` decimal(10,0) DEFAULT NULL,
  `dieciocho_metros` decimal(10,0) DEFAULT NULL,
  `moto_grande` decimal(10,0) DEFAULT NULL,
  `moto_chica` decimal(10,0) DEFAULT NULL,
  `bicicleta` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tarifa_carga`
--

INSERT INTO `tarifa_carga` (`id`, `id_barco`, `tres_metros`, `seis_metros`, `nueve_metros`, `quince_metros`, `dieciocho_metros`, `moto_grande`, `moto_chica`, `bicicleta`) VALUES
(18, 33, '550.00', '750', '950', '1375', '1575', '150', '100', '75'),
(19, 34, '10.00', '20', '30', '40', '50', '60', '70', '80'),
(20, 45, '100.00', '200', '300', '400', '500', '600', '700', '800'),
(21, 43, '100.00', '100', '100', '100', '100', '100', '100', '100'),
(22, 44, '100.00', '100', '100', '100', '100', '100', '100', '100'),
(23, 46, '500.00', '500', '500', '500', '500', '500', '500', '500'),
(24, 47, '9.00', '9', '9', '9', '9', '9', '9', '9');

-- --------------------------------------------------------

--
-- Table structure for table `tarifa_pasajero`
--

CREATE TABLE `tarifa_pasajero` (
  `id_barco` int(4) NOT NULL,
  `particular` decimal(10,0) DEFAULT NULL,
  `en_auto` decimal(10,0) DEFAULT NULL,
  `en_autobus` decimal(10,0) DEFAULT NULL,
  `ayudante_gandola` decimal(10,0) DEFAULT NULL,
  `conductor_gandola` decimal(10,0) DEFAULT NULL,
  `conductor_autobus` decimal(10,0) DEFAULT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tarifa_pasajero`
--

INSERT INTO `tarifa_pasajero` (`id_barco`, `particular`, `en_auto`, `en_autobus`, `ayudante_gandola`, `conductor_gandola`, `conductor_autobus`, `id`) VALUES
(48, '8', '8', '88', '8', '8', '8', 40),
(47, '7', '7', '7', '7', '7', '7', 41),
(33, '1', '1', '1', '11', '11', '1', 42),
(44, '1', '77', '78', '888', '8', '8', 43),
(45, '1', '2', '3', '4', '5', '6', 44),
(46, '1', '2', '4', '5', '7', '6', 45),
(43, '9', '9', '9', '9', '9', '9', 46);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL COMMENT 'auto incrementing user_id of each user, unique index',
  `firstname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `user_name`, `user_password_hash`, `user_email`, `date_added`) VALUES
(1, 'SA', '', 'sa', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', '', '2016-05-21 15:06:00'),
(2, 'Elena', 'Friedman', 'efriedman', '$2y$10$yNL8PxslNgvSC3CVYPVypuTzKLlGfgsHl3V6IjiH8IlNS3gCRv7RC', 'efriedman@hotmail.com', '2018-08-15 03:09:34'),
(3, 'Fabrizio', 'Cardenas', 'arturocg68', '$2y$10$afOrJt2md6wmNNafW/ztPOsv8tSHHOVJWS9yMvKbkb1IYpqzxwxA2', 'arturocg68@outlook.com', '2018-08-15 03:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `user_id` varchar(12) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `password` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `nombre` varchar(60) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`user_id`, `password`, `nombre`) VALUES
('fcardenas', 'cY8yP8#æÍCo', 'Fabrizio Cardenas'),
('ggomez', 'íítwújÐÐ/Ø\\', 'Gustavo Gómez'),
('efriedman', 'ßtWuWaCN7', 'Elena Friedman'),
('jfriedman', '\\dÁ!&Yc£c', 'José Luis Friedman'),
('gpena', '+!P£%ÁB37Y', 'Guillermo Peña');

-- --------------------------------------------------------

--
-- Table structure for table `viaje`
--

CREATE TABLE `viaje` (
  `fecha` date NOT NULL,
  `puerto_origen` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `puerto_destino` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_barco` int(4) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `viaje`
--

INSERT INTO `viaje` (`fecha`, `puerto_origen`, `puerto_destino`, `id_barco`, `id`) VALUES
('2018-09-28', 'Costa Rica', 'El Salvador', 33, 26),
('2018-09-12', 'El Salvador', 'Costa Rica', 34, 27),
('2018-09-20', 'El Salvador', 'El Salvador', 45, 28),
('2018-09-20', 'El Salvador', 'Costa Rica', 47, 29),
('2018-09-23', 'Costa Rica', 'El Salvador', 46, 30),
('2018-09-27', 'Costa Rica', 'El Salvador', 34, 31),
('2018-09-13', 'El Salvador', 'Costa Rica', 33, 32);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barco`
--
ALTER TABLE `barco`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_carga`
--
ALTER TABLE `booking_carga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_contacto`
--
ALTER TABLE `booking_contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `codigo_producto` (`nombre_cliente`);

--
-- Indexes for table `contactenos`
--
ALTER TABLE `contactenos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indexes for table `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`user_id`,`process_id`);

--
-- Indexes for table `procesos`
--
ALTER TABLE `procesos`
  ADD PRIMARY KEY (`process_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_producto`),
  ADD UNIQUE KEY `codigo_producto` (`codigo_producto`);

--
-- Indexes for table `tarifa_carga`
--
ALTER TABLE `tarifa_carga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tarifa_pasajero`
--
ALTER TABLE `tarifa_pasajero`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `viaje`
--
ALTER TABLE `viaje`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barco`
--
ALTER TABLE `barco`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_carga`
--
ALTER TABLE `booking_carga`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_contacto`
--
ALTER TABLE `booking_contacto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactenos`
--
ALTER TABLE `contactenos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tarifa_carga`
--
ALTER TABLE `tarifa_carga`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tarifa_pasajero`
--
ALTER TABLE `tarifa_pasajero`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `viaje`
--
ALTER TABLE `viaje`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
