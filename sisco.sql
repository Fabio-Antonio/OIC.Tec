-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-10-2020 a las 21:58:03
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sisco`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`%` PROCEDURE `fecha_presupuesto`(A DATE, B VARCHAR(45), C DECIMAL(10,2))
BEGIN

DEClARE i INT;
DECLARE ultima YEAR;

SET i = (SELECT MAX(id) FROM presupuesto);
SET ultima = (SELECT YEAR(inicio_administracion) FROM presupuesto WHERE id = i);

START TRANSACTION;
INSERT INTO presupuesto(inicio_administracion, titular, total) VALUES ( A, B, C);

IF ultima = YEAR(A) THEN
ROLLBACK;
ELSE
COMMIT;
END IF;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
`id_administrador` int(11) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `apellido_paterno` varchar(15) DEFAULT NULL,
  `apellido_materno` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `nombre`, `apellido_paterno`, `apellido_materno`, `email`) VALUES
(1, 'Fabio', 'Antonio', 'Lorenzana', 'ing.fabio.a@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agregados`
--

CREATE TABLE IF NOT EXISTS `agregados` (
`id` int(11) NOT NULL,
  `id_consolidado` int(11) NOT NULL,
  `id_requierente` int(11) NOT NULL,
  `minimo` decimal(10,0) NOT NULL,
  `maximo` decimal(10,0) NOT NULL,
  `monto` decimal(10,0) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `agregados`
--

INSERT INTO `agregados` (`id`, `id_consolidado`, `id_requierente`, `minimo`, `maximo`, `monto`) VALUES
(1, 3, 2, '25', '50', '40000'),
(2, 3, 3, '50', '100', '67900'),
(3, 4, 5, '29', '59', '56000'),
(4, 4, 6, '30', '60', '78000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprobacion`
--

CREATE TABLE IF NOT EXISTS `comprobacion` (
`id_comprobacion` int(11) NOT NULL,
  `id_contrato` int(11) DEFAULT NULL,
  `fecha_documento` date DEFAULT NULL,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consolidado`
--

CREATE TABLE IF NOT EXISTS `consolidado` (
`id_consolidado` int(11) NOT NULL,
  `id_requirente` int(11) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `licitacion` varchar(50) NOT NULL,
  `monto_total` decimal(10,0) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `consolidado`
--

INSERT INTO `consolidado` (`id_consolidado`, `id_requirente`, `id_proveedor`, `licitacion`, `monto_total`) VALUES
(3, 1, 1, 'LH-5645', '1000000'),
(4, 2, 1, 'LU-4567', '2000000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE IF NOT EXISTS `contrato` (
`id_contrato` int(11) NOT NULL,
  `id_unidad_compradora` int(11) DEFAULT NULL,
  `id_procedimiento_contratacion` int(11) DEFAULT NULL,
  `id_unidad_requirente` int(11) DEFAULT NULL,
  `id_administrador` int(11) DEFAULT NULL,
  `id_proveedor_adjudicado` int(11) DEFAULT NULL,
  `id_consolidado` int(11) DEFAULT NULL,
  `id_partida` int(11) NOT NULL,
  `numero_contrato` varchar(30) DEFAULT NULL,
  `procedimiento_compranet` varchar(26) DEFAULT NULL,
  `contrato_compranet` int(11) DEFAULT NULL,
  `convenio_interno` varchar(30) NOT NULL,
  `objeto_contratacion` text,
  `contrato_abierto` tinyint(1) DEFAULT NULL,
  `documentacion_descirpcion` text,
  `monto_max` decimal(10,2) DEFAULT NULL,
  `monto_min` decimal(10,2) DEFAULT NULL,
  `pdf` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`id_contrato`, `id_unidad_compradora`, `id_procedimiento_contratacion`, `id_unidad_requirente`, `id_administrador`, `id_proveedor_adjudicado`, `id_consolidado`, `id_partida`, `numero_contrato`, `procedimiento_compranet`, `contrato_compranet`, `convenio_interno`, `objeto_contratacion`, `contrato_abierto`, `documentacion_descirpcion`, `monto_max`, `monto_min`, `pdf`) VALUES
(1, 1, 2, 1, 1, 1, NULL, 1, 'AN4567', 'procedimiento prueba', 1234567, 'convenio prueba', 'Mobiliario', 0, 'Digital', '245879.00', '0.00', NULL),
(2, 1, 5, 2, 1, 1, NULL, 1, 'BN5678', 'procedimiento prueba', 1234567, 'convenio prueba', 'Mobiliario', 0, 'Digital', '200768.00', '0.00', NULL),
(3, 3, 4, 3, 1, 1, NULL, 2, 'CN4567', 'procedimiento prueba', 1234567, 'convenio prueba', 'Instalación eléctrica', 1, 'Digital', '100345.00', '20906.79', NULL),
(4, 3, 8, 3, 1, 1, NULL, 2, 'DN5678', 'procedimiento prueba', 1234567, 'convenio prueba', 'Instalación eléctrica', 0, 'Digital', '316789.00', '0.00', NULL),
(5, 3, 2, 1, 1, 1, NULL, 3, 'CS4532', 'procedimiento prueba', 1234567, 'convenio prueba', 'Servicio de Agua', 0, 'Digital', '346890.03', '0.00', NULL),
(6, 3, 6, 1, 1, 1, NULL, 3, 'TRE23', 'procedimiento prueba', 1234567, 'convenio prueba', 'Servicio de Agua', 0, 'Digital', '256890.00', '0.00', NULL),
(7, 4, 1, 7, 1, 1, NULL, 4, '2234', 'LA-000999-E12', 5432, 'sin', 'Compra de medicamentos para la influenza', 0, 'Documentación obtenida de compranet', '1000000.00', '0.00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato_fechas`
--

CREATE TABLE IF NOT EXISTS `contrato_fechas` (
`id_fecha` int(11) NOT NULL,
  `id_contrato` int(11) DEFAULT NULL,
  `notificacion_adjudicada` date DEFAULT NULL,
  `formalizacion_contrato` date DEFAULT NULL,
  `inicio_vigencia` date DEFAULT NULL,
  `fin_vigencia` date DEFAULT NULL,
  `sat` date DEFAULT NULL,
  `imss` date DEFAULT NULL,
  `infonavit` date DEFAULT NULL,
  `garantia_cumplimiento` date DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `suficiencia` date DEFAULT NULL,
  `requisicion_contrato` date DEFAULT NULL,
  `resicion_contrato` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contrato_fechas`
--

INSERT INTO `contrato_fechas` (`id_fecha`, `id_contrato`, `notificacion_adjudicada`, `formalizacion_contrato`, `inicio_vigencia`, `fin_vigencia`, `sat`, `imss`, `infonavit`, `garantia_cumplimiento`, `fecha_entrega`, `suficiencia`, `requisicion_contrato`, `resicion_contrato`) VALUES
(1, 1, '2020-10-16', '2020-10-30', '2020-10-16', '2021-02-16', '2020-09-23', '2020-09-23', '2020-09-23', '2020-10-17', NULL, '2020-10-13', '2020-10-13', NULL),
(2, 2, '2020-10-16', '2020-10-17', '2020-10-16', '2020-12-17', '2020-09-16', '2020-09-16', '2020-09-16', '2020-10-17', NULL, '2020-10-15', '2020-10-15', NULL),
(3, 3, '2020-10-16', '2020-10-17', '2020-10-16', '2021-01-16', '2020-09-16', '2020-09-16', '2020-09-16', '2020-10-17', NULL, '2020-10-15', '2020-10-15', NULL),
(4, 4, '2020-10-16', '2020-10-17', '2020-10-18', '2021-01-22', '2020-10-08', '2020-10-08', '2020-10-08', '2020-10-17', NULL, '2020-10-15', '2020-10-15', NULL),
(5, 5, '2020-10-23', '2020-10-30', '2020-10-24', '2020-11-06', '2020-09-24', '2020-09-24', '2020-10-24', '2020-10-24', NULL, '2020-10-15', '2020-10-15', NULL),
(6, 6, '2020-10-16', '2020-10-17', '2020-10-16', '2021-03-16', '2020-09-18', '2020-09-18', '2020-09-18', '2020-10-17', NULL, '2020-10-13', '2020-10-14', NULL),
(7, 7, '2020-02-14', '2020-02-20', '2020-02-15', '2020-12-31', '2020-02-17', '2020-02-17', '2020-02-17', '2020-02-25', NULL, '2020-01-28', '2020-01-15', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convenios_modificados`
--

CREATE TABLE IF NOT EXISTS `convenios_modificados` (
`id_convenio` int(11) NOT NULL,
  `id_contrato` int(11) DEFAULT NULL,
  `monto_maximo` decimal(10,2) DEFAULT NULL,
  `monto_minimo` decimal(10,2) DEFAULT NULL,
  `inicio_vogencia` date DEFAULT NULL,
  `fin_vigencia` date DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_adicionales`
--

CREATE TABLE IF NOT EXISTS `documentos_adicionales` (
`id_documento_adicional` int(11) NOT NULL,
  `id_contrato` int(11) DEFAULT NULL,
  `fecha_documento` date DEFAULT NULL,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entregables`
--

CREATE TABLE IF NOT EXISTS `entregables` (
`id_entregable` int(11) NOT NULL,
  `id_contrato` int(11) DEFAULT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `nombre_entregable` varchar(26) DEFAULT NULL,
  `fecha_entrega_maxima` date DEFAULT NULL,
  `cantidad_entregable` int(11) DEFAULT NULL,
  `direccion_entregable` text,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE IF NOT EXISTS `facturas` (
`id_factura` int(11) NOT NULL,
  `id_contrato` int(11) DEFAULT NULL,
  `numero_factura` int(11) DEFAULT NULL,
  `monto` decimal(10,2) DEFAULT NULL,
  `fecha_factura` date DEFAULT NULL,
  `fecha_pago` date DEFAULT NULL,
  `descripcio_factura` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fundamento_legal`
--

CREATE TABLE IF NOT EXISTS `fundamento_legal` (
`id_fundamento_legal` int(11) NOT NULL,
  `fundamento` text,
  `fecha` date DEFAULT NULL,
  `descripcion` text
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fundamento_legal`
--

INSERT INTO `fundamento_legal` (`id_fundamento_legal`, `fundamento`, `fecha`, `descripcion`) VALUES
(1, 'Art. 26 de la LAASSP', '2020-09-01', 'Licitaciones Públicas'),
(2, 'Art. 42 de la LAASSP, segundo párrafo', '2020-09-01', 'Autoriza el TUAF'),
(3, 'Art. 42 de la LAASSP, tercer párrafo', '2020-09-01', 'Contar con 3 cotizaciones.'),
(4, 'Art. 42 de la LAASSP', '2020-09-01', 'Invitación a Cuando Menos Tres Personas.'),
(5, 'Art. 41, fracciones I, III, VIII, IX segundo párrafo, X, XIII, XIV, XV, XVI, XVII, XVIII y XIX de la LAASSP', '2020-09-01', 'Dictaminada por el Comité.'),
(6, ' Art. 41, fracciones II, IV, V, VI, VII, IX primer párrafo, XI, XII y XX de la LAASSP. ', '2020-09-01', 'Dictaminada por el Área Requirente.'),
(7, 'Art. 41, fracciones I, III, VIII, IX segundo párrafo, X, XIII, XIV, XV, XVI, XVII, XVIII y XIX de la LAASSP(Comité)', '2020-09-01', 'Dictaminada por el Comité.'),
(8, 'Art. 41, fracciones II, IV, V, VI, VII, IX primer párrafo, XI, XII y XX de la LAASSP(Requirente)', '2020-09-01', 'Dictaminada por el Área Requirente'),
(9, 'Art. 1° de la LAASSP y 4 del RLAASSP', '2020-09-01', 'Contratación al amparo del artículo 1° de la LAASSP. ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inconformidades`
--

CREATE TABLE IF NOT EXISTS `inconformidades` (
`id_inconformidad` int(11) NOT NULL,
  `id_motivo` int(11) DEFAULT NULL,
  `id_contrato` int(11) DEFAULT NULL,
  `nombre_inconforme` varchar(45) DEFAULT NULL,
  `sentido_resolucion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id_login` int(11) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `permiso` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id_login`, `nombre`, `password`, `permiso`) VALUES
(1, 'admin', 'admin', 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivos_inconformidad`
--

CREATE TABLE IF NOT EXISTS `motivos_inconformidad` (
`id_motivo` int(11) NOT NULL,
  `motivo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos_efectuados`
--

CREATE TABLE IF NOT EXISTS `pagos_efectuados` (
`id_pago_efectuado` int(11) NOT NULL,
  `id_contrato` int(11) DEFAULT NULL,
  `monto` decimal(10,2) DEFAULT NULL,
  `fecha_pago` date DEFAULT NULL,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidas_presupuestales`
--

CREATE TABLE IF NOT EXISTS `partidas_presupuestales` (
`id_partida` int(11) NOT NULL,
  `id_unidad` int(11) DEFAULT NULL,
  `id_presupuesto` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `partidas_presupuestales`
--

INSERT INTO `partidas_presupuestales` (`id_partida`, `id_unidad`, `id_presupuesto`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 2),
(4, 3, 3),
(5, 4, 4),
(6, 5, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partida_presupuesto`
--

CREATE TABLE IF NOT EXISTS `partida_presupuesto` (
`id` int(11) NOT NULL,
  `clave` int(6) DEFAULT NULL,
  `nombre` varchar(220) COLLATE utf8_spanish2_ci NOT NULL,
  `presupuesto` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `partida_presupuesto`
--

INSERT INTO `partida_presupuesto` (`id`, `clave`, `nombre`, `presupuesto`) VALUES
(1, 32302, 'Arrendamiento de mobiliario', '8940245.00'),
(2, 31101, 'Servicio de energía eléctrica', '4563217.00'),
(3, 31301, 'Servicio de agua', '3278950.00'),
(4, 2512, 'Compra de Medicamentos', '1000000.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `penalizaciones`
--

CREATE TABLE IF NOT EXISTS `penalizaciones` (
`id_penalizacion` int(11) NOT NULL,
  `id_contrato` int(11) DEFAULT NULL,
  `tipo_pena` char(1) DEFAULT NULL,
  `descripcion_pena` text,
  `monto` decimal(10,2) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procedimientos_contratacion`
--

CREATE TABLE IF NOT EXISTS `procedimientos_contratacion` (
`id_procedimiento_contratacion` int(11) NOT NULL,
  `id_fundamento_legal` int(11) DEFAULT NULL,
  `procedimientos` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `setenta_treinta` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `procedimientos_contratacion`
--

INSERT INTO `procedimientos_contratacion` (`id_procedimiento_contratacion`, `id_fundamento_legal`, `procedimientos`, `setenta_treinta`) VALUES
(1, 1, 'Licitación Pública', 70),
(2, 2, 'Adjudicación Directa por artículo 42 de la LAASSP II', 30),
(3, 3, 'Adjudicación Directa por artículo 42 de la LAASSP III', 30),
(4, 4, 'Adjudicación Directa por artículo 42 de la LAASSP', 30),
(5, 5, 'Adjudicación Directa por artículo 41 de la LAASSP II', 70),
(6, 6, 'Adjudicación Directa por artículo 41 de la LAASSP I', 70),
(7, 7, 'Adjudicación Directa por artículo 41 de la LAASSP II Comité', 70),
(8, 8, 'Adjudicación Directa por artículo 41 de la LAASSP I Requirente', 70),
(9, 9, 'Contratación al amparo del artículo 1° de la LAASSP', 70);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor_adjudicado`
--

CREATE TABLE IF NOT EXISTS `proveedor_adjudicado` (
`id_proveedor` int(11) NOT NULL,
  `nombre` text,
  `rfc` varchar(13) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor_adjudicado`
--

INSERT INTO `proveedor_adjudicado` (`id_proveedor`, `nombre`, `rfc`) VALUES
(1, 'HP S.A de C.V', 'AOLF940214HDF');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recepcion`
--

CREATE TABLE IF NOT EXISTS `recepcion` (
`id_recepcion` int(11) NOT NULL,
  `id_contrato` int(11) DEFAULT NULL,
  `id_requirente` int(11) DEFAULT NULL,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_partida`
--

CREATE TABLE IF NOT EXISTS `sub_partida` (
`id_partida` int(11) NOT NULL,
  `id_contrato` int(11) DEFAULT NULL,
  `numero_sub_partida` int(11) DEFAULT NULL,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terminacion_anticipada`
--

CREATE TABLE IF NOT EXISTS `terminacion_anticipada` (
`id_terminacion` int(11) NOT NULL,
  `id_contrato` int(11) DEFAULT NULL,
  `fecha_terminacion` date DEFAULT NULL,
  `gastos_no_recuperables` decimal(10,2) DEFAULT NULL,
  `monto_finiquito` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_compradora`
--

CREATE TABLE IF NOT EXISTS `unidad_compradora` (
`id_unidad_compradora` int(11) NOT NULL,
  `nombre_unidad_compradora` varchar(150) DEFAULT NULL,
  `numero_unidad` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidad_compradora`
--

INSERT INTO `unidad_compradora` (`id_unidad_compradora`, `nombre_unidad_compradora`, `numero_unidad`) VALUES
(1, 'Dirección General de Bienes Inmuebles y Recursos Materiales', '005000999'),
(2, 'Oficialía Mayor', '006000993'),
(3, 'Dirección de Obras y Mantenimiento', '006000997'),
(4, 'Dirección de Compras de Adquisiciones', '00600993'),
(5, 'Dirección de Compras de Bienes de Inversión', '00600992');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_requirente`
--

CREATE TABLE IF NOT EXISTS `unidad_requirente` (
`id_requirente` int(11) NOT NULL,
  `clave_requirente` varchar(20) DEFAULT NULL,
  `unidad` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidad_requirente`
--

INSERT INTO `unidad_requirente` (`id_requirente`, `clave_requirente`, `unidad`) VALUES
(1, '100', ' Oficina del C. Secretario'),
(2, '110', ' Dirección General de Comunicación Social'),
(3, '111', ' Unidad de Asuntos Jurídicos y Transparencia'),
(4, '00600993', 'Dirección de Compras de Adquisiciones'),
(5, 'UR200', 'IMSS oaxtepec'),
(6, 'UR300', 'IMSS delegación CDMX'),
(7, 'UR201', 'IMSS CDMX ALCADIA COYOACAN'),
(8, 'UR201', 'IMSS ALCADIA COYOACAN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE IF NOT EXISTS `visitas` (
`id_visita` int(11) NOT NULL,
  `id_contrato` int(11) DEFAULT NULL,
  `fecha_visista` date DEFAULT NULL,
  `comentarios` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
 ADD PRIMARY KEY (`id_administrador`);

--
-- Indices de la tabla `agregados`
--
ALTER TABLE `agregados`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_requirente` (`id_requierente`), ADD KEY `id_consolidado` (`id_consolidado`);

--
-- Indices de la tabla `comprobacion`
--
ALTER TABLE `comprobacion`
 ADD PRIMARY KEY (`id_comprobacion`), ADD KEY `comprobacion_contrato_FK` (`id_contrato`);

--
-- Indices de la tabla `consolidado`
--
ALTER TABLE `consolidado`
 ADD PRIMARY KEY (`id_consolidado`), ADD KEY `id_requirente` (`id_requirente`), ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
 ADD PRIMARY KEY (`id_contrato`), ADD KEY `unidad_compradora_FK` (`id_unidad_compradora`), ADD KEY `procedimiento_contratacion_FK` (`id_procedimiento_contratacion`), ADD KEY `unidad_requirente_FK` (`id_unidad_requirente`), ADD KEY `administrador_FK` (`id_administrador`), ADD KEY `proveedor_FK` (`id_proveedor_adjudicado`), ADD KEY `consolidado` (`id_consolidado`), ADD KEY `id_partida` (`id_partida`);

--
-- Indices de la tabla `contrato_fechas`
--
ALTER TABLE `contrato_fechas`
 ADD PRIMARY KEY (`id_fecha`), ADD KEY `PK_fecha_contrato` (`id_contrato`);

--
-- Indices de la tabla `convenios_modificados`
--
ALTER TABLE `convenios_modificados`
 ADD PRIMARY KEY (`id_convenio`), ADD KEY `contrato_FK` (`id_contrato`);

--
-- Indices de la tabla `documentos_adicionales`
--
ALTER TABLE `documentos_adicionales`
 ADD PRIMARY KEY (`id_documento_adicional`), ADD KEY `documento_contrato_FK` (`id_contrato`);

--
-- Indices de la tabla `entregables`
--
ALTER TABLE `entregables`
 ADD PRIMARY KEY (`id_entregable`), ADD KEY `entregable_contrato_FK` (`id_contrato`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
 ADD PRIMARY KEY (`id_factura`), ADD KEY `factura_contrato_FK` (`id_contrato`);

--
-- Indices de la tabla `fundamento_legal`
--
ALTER TABLE `fundamento_legal`
 ADD PRIMARY KEY (`id_fundamento_legal`);

--
-- Indices de la tabla `inconformidades`
--
ALTER TABLE `inconformidades`
 ADD PRIMARY KEY (`id_inconformidad`), ADD KEY `motivos_FK` (`id_motivo`), ADD KEY `inconformidada_contrato_FK` (`id_contrato`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id_login`);

--
-- Indices de la tabla `motivos_inconformidad`
--
ALTER TABLE `motivos_inconformidad`
 ADD PRIMARY KEY (`id_motivo`);

--
-- Indices de la tabla `pagos_efectuados`
--
ALTER TABLE `pagos_efectuados`
 ADD PRIMARY KEY (`id_pago_efectuado`), ADD KEY `pago_contrato_FK` (`id_contrato`);

--
-- Indices de la tabla `partidas_presupuestales`
--
ALTER TABLE `partidas_presupuestales`
 ADD PRIMARY KEY (`id_partida`), ADD KEY `partidas_presupuestos_FK` (`id_presupuesto`), ADD KEY `partida_unidad_FK` (`id_unidad`), ADD KEY `id_partida` (`id_partida`), ADD KEY `id_partida_2` (`id_partida`);

--
-- Indices de la tabla `partida_presupuesto`
--
ALTER TABLE `partida_presupuesto`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `penalizaciones`
--
ALTER TABLE `penalizaciones`
 ADD PRIMARY KEY (`id_penalizacion`), ADD KEY `pena_contrato_FK` (`id_contrato`);

--
-- Indices de la tabla `procedimientos_contratacion`
--
ALTER TABLE `procedimientos_contratacion`
 ADD PRIMARY KEY (`id_procedimiento_contratacion`), ADD KEY `fundamento_FK` (`id_fundamento_legal`);

--
-- Indices de la tabla `proveedor_adjudicado`
--
ALTER TABLE `proveedor_adjudicado`
 ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `recepcion`
--
ALTER TABLE `recepcion`
 ADD PRIMARY KEY (`id_recepcion`), ADD KEY `requirente_FK` (`id_requirente`), ADD KEY `recepcion_contrato_FK` (`id_contrato`);

--
-- Indices de la tabla `sub_partida`
--
ALTER TABLE `sub_partida`
 ADD PRIMARY KEY (`id_partida`), ADD KEY `subpartida_contrato_FK` (`id_contrato`);

--
-- Indices de la tabla `terminacion_anticipada`
--
ALTER TABLE `terminacion_anticipada`
 ADD PRIMARY KEY (`id_terminacion`), ADD KEY `terminacion_contrato_FK` (`id_contrato`);

--
-- Indices de la tabla `unidad_compradora`
--
ALTER TABLE `unidad_compradora`
 ADD PRIMARY KEY (`id_unidad_compradora`);

--
-- Indices de la tabla `unidad_requirente`
--
ALTER TABLE `unidad_requirente`
 ADD PRIMARY KEY (`id_requirente`);

--
-- Indices de la tabla `visitas`
--
ALTER TABLE `visitas`
 ADD PRIMARY KEY (`id_visita`), ADD KEY `visita_contrato_FK` (`id_contrato`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `agregados`
--
ALTER TABLE `agregados`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `comprobacion`
--
ALTER TABLE `comprobacion`
MODIFY `id_comprobacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `consolidado`
--
ALTER TABLE `consolidado`
MODIFY `id_consolidado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `contrato`
--
ALTER TABLE `contrato`
MODIFY `id_contrato` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `contrato_fechas`
--
ALTER TABLE `contrato_fechas`
MODIFY `id_fecha` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `convenios_modificados`
--
ALTER TABLE `convenios_modificados`
MODIFY `id_convenio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `documentos_adicionales`
--
ALTER TABLE `documentos_adicionales`
MODIFY `id_documento_adicional` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `entregables`
--
ALTER TABLE `entregables`
MODIFY `id_entregable` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `fundamento_legal`
--
ALTER TABLE `fundamento_legal`
MODIFY `id_fundamento_legal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `inconformidades`
--
ALTER TABLE `inconformidades`
MODIFY `id_inconformidad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `motivos_inconformidad`
--
ALTER TABLE `motivos_inconformidad`
MODIFY `id_motivo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pagos_efectuados`
--
ALTER TABLE `pagos_efectuados`
MODIFY `id_pago_efectuado` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `partidas_presupuestales`
--
ALTER TABLE `partidas_presupuestales`
MODIFY `id_partida` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `partida_presupuesto`
--
ALTER TABLE `partida_presupuesto`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `penalizaciones`
--
ALTER TABLE `penalizaciones`
MODIFY `id_penalizacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `procedimientos_contratacion`
--
ALTER TABLE `procedimientos_contratacion`
MODIFY `id_procedimiento_contratacion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `proveedor_adjudicado`
--
ALTER TABLE `proveedor_adjudicado`
MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `recepcion`
--
ALTER TABLE `recepcion`
MODIFY `id_recepcion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `sub_partida`
--
ALTER TABLE `sub_partida`
MODIFY `id_partida` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `terminacion_anticipada`
--
ALTER TABLE `terminacion_anticipada`
MODIFY `id_terminacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `unidad_compradora`
--
ALTER TABLE `unidad_compradora`
MODIFY `id_unidad_compradora` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `unidad_requirente`
--
ALTER TABLE `unidad_requirente`
MODIFY `id_requirente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `visitas`
--
ALTER TABLE `visitas`
MODIFY `id_visita` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agregados`
--
ALTER TABLE `agregados`
ADD CONSTRAINT `agregados_ibfk_1` FOREIGN KEY (`id_consolidado`) REFERENCES `consolidado` (`id_consolidado`),
ADD CONSTRAINT `agregados_ibfk_2` FOREIGN KEY (`id_requierente`) REFERENCES `unidad_requirente` (`id_requirente`);

--
-- Filtros para la tabla `comprobacion`
--
ALTER TABLE `comprobacion`
ADD CONSTRAINT `comprobacion_contrato_FK` FOREIGN KEY (`id_contrato`) REFERENCES `contrato` (`id_contrato`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `consolidado`
--
ALTER TABLE `consolidado`
ADD CONSTRAINT `consolidado_ibfk_1` FOREIGN KEY (`id_requirente`) REFERENCES `unidad_requirente` (`id_requirente`),
ADD CONSTRAINT `consolidado_ibfk_2` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor_adjudicado` (`id_proveedor`);

--
-- Filtros para la tabla `contrato`
--
ALTER TABLE `contrato`
ADD CONSTRAINT `administrador_FK` FOREIGN KEY (`id_administrador`) REFERENCES `administrador` (`id_administrador`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `consolidado` FOREIGN KEY (`id_consolidado`) REFERENCES `consolidado` (`id_consolidado`),
ADD CONSTRAINT `contrato_ibfk_1` FOREIGN KEY (`id_partida`) REFERENCES `partida_presupuesto` (`id`),
ADD CONSTRAINT `procedimiento_contratacion_FK` FOREIGN KEY (`id_procedimiento_contratacion`) REFERENCES `procedimientos_contratacion` (`id_procedimiento_contratacion`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `proveedor_FK` FOREIGN KEY (`id_proveedor_adjudicado`) REFERENCES `proveedor_adjudicado` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `unidad_compradora_FK` FOREIGN KEY (`id_unidad_compradora`) REFERENCES `unidad_compradora` (`id_unidad_compradora`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `unidad_requirente_FK` FOREIGN KEY (`id_unidad_requirente`) REFERENCES `unidad_requirente` (`id_requirente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `contrato_fechas`
--
ALTER TABLE `contrato_fechas`
ADD CONSTRAINT `PK_fecha_contrato` FOREIGN KEY (`id_contrato`) REFERENCES `contrato` (`id_contrato`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `convenios_modificados`
--
ALTER TABLE `convenios_modificados`
ADD CONSTRAINT `contrato_FK` FOREIGN KEY (`id_contrato`) REFERENCES `contrato` (`id_contrato`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `documentos_adicionales`
--
ALTER TABLE `documentos_adicionales`
ADD CONSTRAINT `documento_contrato_FK` FOREIGN KEY (`id_contrato`) REFERENCES `contrato` (`id_contrato`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `entregables`
--
ALTER TABLE `entregables`
ADD CONSTRAINT `entregable_contrato_FK` FOREIGN KEY (`id_contrato`) REFERENCES `contrato` (`id_contrato`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
ADD CONSTRAINT `factura_contrato_FK` FOREIGN KEY (`id_contrato`) REFERENCES `contrato` (`id_contrato`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inconformidades`
--
ALTER TABLE `inconformidades`
ADD CONSTRAINT `inconformidada_contrato_FK` FOREIGN KEY (`id_contrato`) REFERENCES `contrato` (`id_contrato`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `motivos_FK` FOREIGN KEY (`id_motivo`) REFERENCES `motivos_inconformidad` (`id_motivo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `pagos_efectuados`
--
ALTER TABLE `pagos_efectuados`
ADD CONSTRAINT `pago_contrato_FK` FOREIGN KEY (`id_contrato`) REFERENCES `contrato` (`id_contrato`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `partidas_presupuestales`
--
ALTER TABLE `partidas_presupuestales`
ADD CONSTRAINT `partida_unidad_FK` FOREIGN KEY (`id_unidad`) REFERENCES `unidad_compradora` (`id_unidad_compradora`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `partidas_presupuestos_FK` FOREIGN KEY (`id_presupuesto`) REFERENCES `partida_presupuesto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `penalizaciones`
--
ALTER TABLE `penalizaciones`
ADD CONSTRAINT `pena_contrato_FK` FOREIGN KEY (`id_contrato`) REFERENCES `contrato` (`id_contrato`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `procedimientos_contratacion`
--
ALTER TABLE `procedimientos_contratacion`
ADD CONSTRAINT `fundamento_FK` FOREIGN KEY (`id_fundamento_legal`) REFERENCES `fundamento_legal` (`id_fundamento_legal`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `recepcion`
--
ALTER TABLE `recepcion`
ADD CONSTRAINT `recepcion_contrato_FK` FOREIGN KEY (`id_contrato`) REFERENCES `contrato` (`id_contrato`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `requirente_FK` FOREIGN KEY (`id_requirente`) REFERENCES `unidad_requirente` (`id_requirente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sub_partida`
--
ALTER TABLE `sub_partida`
ADD CONSTRAINT `subpartida_contrato_FK` FOREIGN KEY (`id_contrato`) REFERENCES `contrato` (`id_contrato`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `terminacion_anticipada`
--
ALTER TABLE `terminacion_anticipada`
ADD CONSTRAINT `terminacion_contrato_FK` FOREIGN KEY (`id_contrato`) REFERENCES `contrato` (`id_contrato`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `visitas`
--
ALTER TABLE `visitas`
ADD CONSTRAINT `visita_contrato_FK` FOREIGN KEY (`id_contrato`) REFERENCES `contrato` (`id_contrato`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
