-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2018 a las 20:29:22
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `apspty`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barco`
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
-- Volcado de datos para la tabla `barco`
--

INSERT INTO `barco` (`id`, `nombre`, `largo`, `ancho`, `capacidad`, `alto`) VALUES
(50, 'Princes', '114.00', '20.00', '45.00', '4.00'),
(51, 'Tijuana', '200.00', '20.00', '2000.00', '4.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `booking`
--

CREATE TABLE `booking` (
  `id` int(10) NOT NULL,
  `fecha` varchar(10) COLLATE utf32_bin NOT NULL,
  `codigo` varchar(20) COLLATE utf32_bin NOT NULL,
  `precio` float NOT NULL,
  `id_viaje` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Volcado de datos para la tabla `booking`
--

INSERT INTO `booking` (`id`, `fecha`, `codigo`, `precio`, `id_viaje`) VALUES
(18, '18-10-2018', 'APS5bbcf8aa3f778', 1425, 59);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `booking_carga`
--

CREATE TABLE `booking_carga` (
  `id` int(10) NOT NULL,
  `tipo_vehiculo` varchar(200) COLLATE utf32_bin NOT NULL,
  `alto` varchar(100) COLLATE utf32_bin NOT NULL,
  `largo` decimal(10,0) NOT NULL,
  `ancho` varchar(100) COLLATE utf32_bin NOT NULL,
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

--
-- Volcado de datos para la tabla `booking_carga`
--

INSERT INTO `booking_carga` (`id`, `tipo_vehiculo`, `alto`, `largo`, `ancho`, `peso`, `placa`, `nombre_responsable_carga`, `pasaporte_responsable_carga`, `tipo_carga`, `peso_carga`, `descripcion_carga`, `precio`, `Id_booking`) VALUES
(6, 'Furgon con cabezal', '0 - 4 mts de Altura', '12', '0 - 2,6 mts de Ancho', '15', 'qwqwqdsdsd333', 'N/A', 'N/A', 'SIN CARGA', '0', 'NO TRANSPORTA CARGA', '1375', 14),
(7, 'Furgon con cabezal', '0 - 4 mts de Altura', '12', '0 - 2,6 mts de Ancho', '15', 'qwqwqdsdsd333', 'N/A', 'N/A', 'SIN CARGA', '0', 'NO TRANSPORTA CARGA', '1375', 15),
(8, 'Furgon con cabezal', '0 - 4 mts de Altura', '12', '0 - 2,6 mts de Ancho', '15', 'qwqwqdsdsd333', 'N/A', 'N/A', 'SIN CARGA', '0', 'NO TRANSPORTA CARGA', '1375', 16),
(9, 'Furgon con cabezal', '0 - 4 mts de Altura', '12', '0 - 2,6 mts de Ancho', '15', 'qwqwqdsdsd333', 'N/A', 'N/A', 'SIN CARGA', '0', 'NO TRANSPORTA CARGA', '1375', 17),
(10, 'Furgon con cabezal', '0 - 4 mts de Altura', '12', '0 - 2,6 mts de Ancho', '15', 'qwqwqdsdsd333', 'N/A', 'N/A', 'SIN CARGA', '0', 'NO TRANSPORTA CARGA', '1375', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `booking_contacto`
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

--
-- Volcado de datos para la tabla `booking_contacto`
--

INSERT INTO `booking_contacto` (`id`, `nombre`, `pasaporte`, `telefono`, `numero_dut`, `email`, `id_booking`) VALUES
(4, 'Anto', '838302', '3912032', '7392329', 'antojrd@gmail.com', 14),
(5, 'Anto', '838302', '3912032', '7392329', 'antojrd@gmail.com', 15),
(6, 'Anto', '838302', '3912032', '7392329', 'antojrd@gmail.com', 16),
(7, 'Anto', '838302', '3912032', '7392329', 'antojrd@gmail.com', 17),
(8, 'Anto', '838302', '3912032', '7392329', 'antojrd@gmail.com', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `booking_estatus`
--

CREATE TABLE `booking_estatus` (
  `id` int(10) NOT NULL,
  `estatus` varchar(200) NOT NULL,
  `fecha` varchar(200) NOT NULL,
  `id_booking` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `booking_estatus`
--

INSERT INTO `booking_estatus` (`id`, `estatus`, `fecha`, `id_booking`) VALUES
(1, 'Creado', '09-10-18 20:46:32', 16),
(2, 'Creado', '09-10-18 20:48:48', 17),
(3, 'Creado', '09-10-18 20:51:22', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `booking_pasajero`
--

CREATE TABLE `booking_pasajero` (
  `id` int(10) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `pasaporte` varchar(200) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `id_booking` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `booking_pasajero`
--

INSERT INTO `booking_pasajero` (`id`, `tipo`, `nombre`, `pasaporte`, `precio`, `id_booking`) VALUES
(1, 'Pasajero Conductor de gandola (1 por gandola)', 'Conductor', '3232ww', '0', 14),
(2, 'Pasajero Conductor de gandola (1 por gandola)', 'Conductor', '3232ww', '0', 15),
(3, 'Pasajero Ayudante de gandola (1 por gandola)', 'Ayudante', '3232ww22', '25', 15),
(4, 'Pasajero Conductor de gandola (1 por gandola)', 'Conductor', '3232ww', '0', 16),
(5, 'Pasajero Ayudante de gandola (1 por gandola)', 'Ayudante', '3232ww22', '25', 16),
(6, 'Pasajero Conductor de gandola (1 por gandola)', 'Conductor', '3232ww', '0', 17),
(7, 'Pasajero Ayudante de gandola (1 por gandola)', 'Ayudante', '3232ww22', '25', 17),
(8, 'Pasajero Conductor de gandola (1 por gandola)', 'Conductor', '3232ww', '0', 18),
(9, 'Pasajero Ayudante de gandola (1 por gandola)', 'Ayudante', '3232ww22', '25', 18);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `booking_tarifa_carga`
--

CREATE TABLE `booking_tarifa_carga` (
  `id` int(10) NOT NULL,
  `id_booking` int(4) NOT NULL,
  `tres_metros` decimal(10,2) NOT NULL,
  `seis_metros` decimal(10,0) DEFAULT NULL,
  `nueve_metros` decimal(10,0) DEFAULT NULL,
  `quince_metros` decimal(10,0) DEFAULT NULL,
  `dieciocho_metros` decimal(10,0) DEFAULT NULL,
  `moto_grande` decimal(10,0) DEFAULT NULL,
  `moto_chica` decimal(10,0) DEFAULT NULL,
  `bicicleta` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `booking_tarifa_pasajero`
--

CREATE TABLE `booking_tarifa_pasajero` (
  `id_booking` int(4) NOT NULL,
  `particular` decimal(10,0) DEFAULT NULL,
  `en_auto` decimal(10,0) DEFAULT NULL,
  `en_autobus` decimal(10,0) DEFAULT NULL,
  `ayudante_gandola` decimal(10,0) DEFAULT NULL,
  `conductor_gandola` decimal(10,0) DEFAULT NULL,
  `conductor_autobus` decimal(10,0) DEFAULT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
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
-- Estructura de tabla para la tabla `contactenos`
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
-- Volcado de datos para la tabla `contactenos`
--

INSERT INTO `contactenos` (`id`, `nombre`, `apellido`, `correo`, `ciudad`, `mensaje`, `estatus`, `usuario`) VALUES
(14, '', '', '', '', '', '0', NULL),
(15, 'Judix', 'HRdjmBwRTPqIGjNaX', '', 'New York', 'Tmw0iK http://www.LnAJ7K8QSpfMO2wQ8gO.com', '0', NULL),
(16, '', '', '', '', '', '0', NULL),
(17, 'katherine', 'Zhu', 'overseas.23@kam-le.com', 'Shenzhen', 'This is Katherine from Shenzhen Kam-Le Logistics Co.LTD.China.\r\nWe insist on providing transnational logistics for \r\nalmost 10 y', '0', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones`
--

CREATE TABLE `cotizaciones` (
  `doc_ID` int(11) UNSIGNED NOT NULL,
  `ct_Tipo` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT 'C',
  `ct_Nombre` varchar(60) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `ct_Telefono` varchar(20) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `ct_Correo` varchar(60) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `ct_Pais` varchar(2) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `ct_Ciudad` varchar(60) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `en_PaisOrigen` varchar(2) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `en_Origen` varchar(60) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `en_PaisDestino` varchar(2) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `en_Destino` varchar(60) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `en_FechaEmbarque` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `en_Frecuencia` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT 'S',
  `en_Peligrosa` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT 'N',
  `en_Refrigerada` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT 'N',
  `en_Mercancia` varchar(128) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `tr_Maritimo` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `tr_LCL_Full` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `tr_Aereo` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `tr_Terrestre` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `tq_Contenedor` varchar(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `tq_TipoPesp` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `tq_Peso` decimal(8,2) NOT NULL,
  `tq_TipoMedida` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `tq_Medida` decimal(8,2) NOT NULL,
  `tq_Embalaje` varchar(128) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `tq_Descripcion` varchar(128) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `doc_Numero` varchar(15) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT 'Numero de Cotizacion',
  `doc_Estatus` varchar(1) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT 'Aprobado, Rechazado, etc.',
  `doc_002` int(11) NOT NULL,
  `doc_003` int(11) NOT NULL,
  `doc_004` int(11) NOT NULL,
  `doc_005` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `currencies`
--

CREATE TABLE `currencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `symbol` varchar(255) NOT NULL,
  `precision` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thousand_separator` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `decimal_separator` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `symbol`, `precision`, `thousand_separator`, `decimal_separator`, `code`) VALUES
(1, 'US Dollar', '$', '2', ',', '.', 'USD'),
(2, 'Libra Esterlina', '&pound;', '2', ',', '.', 'GBP'),
(3, 'Euro', 'â‚¬', '2', '.', ',', 'EUR'),
(4, 'South African Rand', 'R', '2', '.', ',', 'ZAR'),
(5, 'Danish Krone', 'kr ', '2', '.', ',', 'DKK'),
(6, 'Israeli Shekel', 'NIS ', '2', ',', '.', 'ILS'),
(7, 'Swedish Krona', 'kr ', '2', '.', ',', 'SEK'),
(8, 'Kenyan Shilling', 'KSh ', '2', ',', '.', 'KES'),
(9, 'Canadian Dollar', 'C$', '2', ',', '.', 'CAD'),
(10, 'Philippine Peso', 'P ', '2', ',', '.', 'PHP'),
(11, 'Indian Rupee', 'Rs. ', '2', ',', '.', 'INR'),
(12, 'Australian Dollar', '$', '2', ',', '.', 'AUD'),
(13, 'Singapore Dollar', 'SGD ', '2', ',', '.', 'SGD'),
(14, 'Norske Kroner', 'kr ', '2', '.', ',', 'NOK'),
(15, 'New Zealand Dollar', '$', '2', ',', '.', 'NZD'),
(16, 'Vietnamese Dong', 'VND ', '0', '.', ',', 'VND'),
(17, 'Swiss Franc', 'CHF ', '2', '\'', '.', 'CHF'),
(18, 'Quetzal Guatemalteco', 'Q', '2', ',', '.', 'GTQ'),
(19, 'Malaysian Ringgit', 'RM', '2', ',', '.', 'MYR'),
(20, 'Real Brasile&ntilde;o', 'R$', '2', '.', ',', 'BRL'),
(21, 'Thai Baht', 'THB ', '2', ',', '.', 'THB'),
(22, 'Nigerian Naira', 'NGN ', '2', ',', '.', 'NGN'),
(23, 'Peso Argentino', '$', '2', '.', ',', 'ARS'),
(24, 'Bangladeshi Taka', 'Tk', '2', ',', '.', 'BDT'),
(25, 'United Arab Emirates Dirham', 'DH ', '2', ',', '.', 'AED'),
(26, 'Hong Kong Dollar', '$', '2', ',', '.', 'HKD'),
(27, 'Indonesian Rupiah', 'Rp', '2', ',', '.', 'IDR'),
(28, 'Peso Mexicano', '$', '2', ',', '.', 'MXN'),
(29, 'Egyptian Pound', '&pound;', '2', ',', '.', 'EGP'),
(30, 'Peso Colombiano', '$', '2', '.', ',', 'COP'),
(31, 'West African Franc', 'CFA ', '2', ',', '.', 'XOF'),
(32, 'Chinese Renminbi', 'RMB ', '2', ',', '.', 'CNY');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `id_detalle` int(11) NOT NULL,
  `numero_factura` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_venta` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id_factura` int(11) NOT NULL,
  `numero_factura` int(11) NOT NULL,
  `fecha_factura` datetime NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `condiciones` varchar(30) NOT NULL,
  `total_venta` varchar(20) NOT NULL,
  `estado_factura` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
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
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `nombre_empresa`, `direccion`, `ciudad`, `codigo_postal`, `estado`, `telefono`, `email`, `impuesto`, `moneda`, `logo_url`) VALUES
(1, 'SMART LOGISTICS & CARGO', 'Zona Libre de Colon', ' Ãrea de France Field PanamÃ¡', '00507', 'ColÃ³n', '+507 263-0068', 'sales@smartlogisticscargo.com', 7, '$', 'img/1478792451_google30.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `user_id` varchar(12) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `process_id` varchar(12) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `activo` varchar(1) COLLATE latin1_spanish_ci DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`user_id`, `process_id`, `activo`) VALUES
('fcardenas', 'seg001', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos`
--

CREATE TABLE `procesos` (
  `process_id` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `nombre` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `descripcion` varchar(128) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `procesos`
--

INSERT INTO `procesos` (`process_id`, `nombre`, `descripcion`) VALUES
('cot01', 'Leer Cotizaciones Smart', 'Leer los formularios de Cotizaciones de Smart Logistics Cargo'),
('cot02', 'Leer Cotizaciones ATPA', 'Leer los formularios de Cotizaciones de Atlantic Pacific Shipping'),
('con01', 'Leer Contáctenos de Smart', 'Leer los formularios de Cotizaciones de Smart Logistics Cargo'),
('con02', 'Leer Contáctenos de ATPA', 'Leer los formularios de Cotizaciones de Atlantic Pacific Shipping');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
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
-- Estructura de tabla para la tabla `tarifa_carga`
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
-- Volcado de datos para la tabla `tarifa_carga`
--

INSERT INTO `tarifa_carga` (`id`, `id_barco`, `tres_metros`, `seis_metros`, `nueve_metros`, `quince_metros`, `dieciocho_metros`, `moto_grande`, `moto_chica`, `bicicleta`) VALUES
(25, 50, '550.00', '750', '950', '1375', '1575', '150', '100', '75');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifa_pasajero`
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
-- Volcado de datos para la tabla `tarifa_pasajero`
--

INSERT INTO `tarifa_pasajero` (`id_barco`, `particular`, `en_auto`, `en_autobus`, `ayudante_gandola`, `conductor_gandola`, `conductor_autobus`, `id`) VALUES
(48, '8', '8', '88', '8', '8', '8', 40),
(47, '7', '7', '7', '7', '7', '7', 41),
(33, '1', '1', '1', '11', '11', '1', 42),
(44, '1', '77', '78', '888', '8', '8', 43),
(45, '1', '2', '3', '4', '5', '6', 44),
(46, '1', '2', '4', '5', '7', '6', 45),
(43, '9', '9', '9', '9', '9', '9', 46),
(50, '60', '25', '25', '25', '0', '0', 47);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmp`
--

CREATE TABLE `tmp` (
  `id_tmp` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad_tmp` int(11) NOT NULL,
  `precio_tmp` double(8,2) DEFAULT NULL,
  `session_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
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
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `user_name`, `user_password_hash`, `user_email`, `date_added`) VALUES
(1, 'SA', '', 'sa', '$2y$10$MPVHzZ2ZPOWmtUUGCq3RXu31OTB.jo7M9LZ7PmPQYmgETSNn19ejO', '', '2016-05-21 15:06:00'),
(2, 'Elena', 'Friedman', 'efriedman', '$2y$10$yNL8PxslNgvSC3CVYPVypuTzKLlGfgsHl3V6IjiH8IlNS3gCRv7RC', 'efriedman@hotmail.com', '2018-08-15 03:09:34'),
(3, 'Fabrizio', 'Cardenas', 'arturocg68', '$2y$10$afOrJt2md6wmNNafW/ztPOsv8tSHHOVJWS9yMvKbkb1IYpqzxwxA2', 'arturocg68@outlook.com', '2018-08-15 03:17:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `user_id` varchar(12) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `password` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `nombre` varchar(60) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`user_id`, `password`, `nombre`) VALUES
('fcardenas', 'cY8yP8#æÍCo', 'Fabrizio Cardenas'),
('ggomez', 'íítwújÐÐ/Ø\\', 'Gustavo Gómez'),
('efriedman', 'ßtWuWaCN7', 'Elena Friedman'),
('jfriedman', '\\dÁ!&Yc£c', 'José Luis Friedman'),
('gpena', '+!P£%ÁB37Y', 'Guillermo Peña');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viaje`
--

CREATE TABLE `viaje` (
  `fecha` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `puerto_origen` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `puerto_destino` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_barco` int(4) NOT NULL,
  `id` int(10) NOT NULL,
  `estado` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `viaje`
--

INSERT INTO `viaje` (`fecha`, `puerto_origen`, `puerto_destino`, `id_barco`, `id`, `estado`) VALUES
('05-01-2019', 'Costa Rica', 'El Salvador', 51, 77, 'activo'),
('05-12-2018', 'El Salvador', 'Costa Rica', 50, 78, 'activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `barco`
--
ALTER TABLE `barco`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `booking_carga`
--
ALTER TABLE `booking_carga`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `booking_contacto`
--
ALTER TABLE `booking_contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `booking_estatus`
--
ALTER TABLE `booking_estatus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `booking_pasajero`
--
ALTER TABLE `booking_pasajero`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `codigo_producto` (`nombre_cliente`);

--
-- Indices de la tabla `contactenos`
--
ALTER TABLE `contactenos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  ADD PRIMARY KEY (`doc_ID`);

--
-- Indices de la tabla `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `numero_cotizacion` (`numero_factura`,`id_producto`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id_factura`),
  ADD UNIQUE KEY `numero_cotizacion` (`numero_factura`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`user_id`,`process_id`);

--
-- Indices de la tabla `procesos`
--
ALTER TABLE `procesos`
  ADD PRIMARY KEY (`process_id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_producto`),
  ADD UNIQUE KEY `codigo_producto` (`codigo_producto`);

--
-- Indices de la tabla `tarifa_carga`
--
ALTER TABLE `tarifa_carga`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tarifa_pasajero`
--
ALTER TABLE `tarifa_pasajero`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tmp`
--
ALTER TABLE `tmp`
  ADD PRIMARY KEY (`id_tmp`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`user_id`);

--
-- Indices de la tabla `viaje`
--
ALTER TABLE `viaje`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `barco`
--
ALTER TABLE `barco`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT de la tabla `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `booking_carga`
--
ALTER TABLE `booking_carga`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `booking_contacto`
--
ALTER TABLE `booking_contacto`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `booking_estatus`
--
ALTER TABLE `booking_estatus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `booking_pasajero`
--
ALTER TABLE `booking_pasajero`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `contactenos`
--
ALTER TABLE `contactenos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  MODIFY `doc_ID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tarifa_carga`
--
ALTER TABLE `tarifa_carga`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `tarifa_pasajero`
--
ALTER TABLE `tarifa_pasajero`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT de la tabla `tmp`
--
ALTER TABLE `tmp`
  MODIFY `id_tmp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index', AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `viaje`
--
ALTER TABLE `viaje`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
