-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 26-01-2021 a las 18:37:14
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sisco`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`%` PROCEDURE `fecha_presupuesto` (`A` DATE, `B` VARCHAR(45), `C` DECIMAL(10,2))  BEGIN

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

CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `apellido_paterno` varchar(15) DEFAULT NULL,
  `apellido_materno` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `nombre`, `apellido_paterno`, `apellido_materno`, `email`) VALUES
(1, 'Gustavo', 'Aguirre', 'Lopez', 'ing.fabio.a@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprobacion`
--

CREATE TABLE `comprobacion` (
  `id_comprobacion` int(11) NOT NULL,
  `id_contrato` int(11) DEFAULT NULL,
  `fecha_documento` date DEFAULT NULL,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consolidado`
--

CREATE TABLE `consolidado` (
  `id_consolidado` int(11) NOT NULL,
  `id_requirente` int(11) NOT NULL,
  `licitacion` varchar(50) NOT NULL,
  `monto_total` decimal(10,0) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE `contrato` (
  `id_contrato` int(11) NOT NULL,
  `id_unidad_compradora` int(11) DEFAULT NULL,
  `id_procedimiento_contratacion` int(11) DEFAULT NULL,
  `id_fundamento_legal` int(11) NOT NULL,
  `id_unidad_requirente` int(11) DEFAULT NULL,
  `id_administrador` int(11) DEFAULT NULL,
  `id_proveedor_adjudicado` int(11) DEFAULT NULL,
  `id_partida` int(11) NOT NULL,
  `id_consolidado` int(11) DEFAULT NULL,
  `numero_contrato` varchar(30) DEFAULT NULL,
  `procedimiento_compranet` varchar(26) DEFAULT NULL,
  `contrato_compranet` int(11) DEFAULT NULL,
  `convenio_interno` varchar(30) NOT NULL,
  `objeto_contratacion` text,
  `contrato_abierto` tinyint(1) DEFAULT NULL,
  `documentacion_descirpcion` text,
  `monto_max` decimal(10,2) DEFAULT NULL,
  `monto_min` decimal(10,2) DEFAULT NULL,
  `pdf` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`id_contrato`, `id_unidad_compradora`, `id_procedimiento_contratacion`, `id_fundamento_legal`, `id_unidad_requirente`, `id_administrador`, `id_proveedor_adjudicado`, `id_partida`, `id_consolidado`, `numero_contrato`, `procedimiento_compranet`, `contrato_compranet`, `convenio_interno`, `objeto_contratacion`, `contrato_abierto`, `documentacion_descirpcion`, `monto_max`, `monto_min`, `pdf`) VALUES
(4, 4, 1, 11, 4, 1, 5, 5, NULL, 'AN4567', 'LA-000999-E12', 1234567, 'sin convenio', 'Compra de muebles', 0, 'Documentación obtenida de compranet', '350000.00', '0.00', 'uploads/contratos/carta de aceptación ejemplo.pdf'),
(5, 4, 2, 12, 4, 1, 6, 6, NULL, 'BN5678', 'LA-000999-E14', 1234567, 'sin convenio', 'Arrendamiento de terreno para uso de eventos', 0, 'Documentación obtenida de compranet', '200768.00', '0.00', 'uploads/EVALUACION_TERCER'),
(6, 5, 2, 15, 5, 1, 7, 7, NULL, 'SEP011DGRMSDGAAI0022020', 'LA-000999-E0001', 4564121, 'sin convenio', 'Fumigación', 0, 'Servicio de fumigación a nivel central', '12593000.00', '0.00', 'uploads/Etapas_equipo2.pd'),
(7, 5, 3, 14, 6, 1, 7, 7, NULL, 'SEP011DGRMSDGAAIII22020', 'LA-000999-E12', 9854321, 'sin convenio', 'Servicio de fumigación', 0, 'Documentación obtenida de compranet', '4789234.00', '0.00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato_fechas`
--

CREATE TABLE `contrato_fechas` (
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
  `suficiencia` date DEFAULT NULL,
  `requisicion_contrato` date DEFAULT NULL,
  `resicion_contrato` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contrato_fechas`
--

INSERT INTO `contrato_fechas` (`id_fecha`, `id_contrato`, `notificacion_adjudicada`, `formalizacion_contrato`, `inicio_vigencia`, `fin_vigencia`, `sat`, `imss`, `infonavit`, `garantia_cumplimiento`, `suficiencia`, `requisicion_contrato`, `resicion_contrato`) VALUES
(4, 4, '2020-12-22', '2020-12-25', '2020-12-25', '2021-02-24', '2020-11-25', '2020-11-25', '2020-11-25', '2020-12-24', '2020-12-21', '2020-12-21', NULL),
(5, 5, '2020-12-22', '2020-12-24', '2020-12-22', '2021-06-22', '2020-11-24', '2020-11-24', '2020-11-24', '2020-12-24', '2020-12-21', '2020-12-21', NULL),
(6, 6, '2019-12-24', '2020-01-06', '2020-01-01', '2020-12-31', '2019-12-31', '2020-01-04', '2020-01-04', '2020-01-16', '2019-11-11', '2019-11-11', NULL),
(7, 7, '2021-01-25', '2021-02-05', '2021-02-05', '2021-12-31', '2021-01-05', '2021-01-05', '2021-01-05', '2021-02-14', '2021-01-22', '2021-01-22', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convenios_modificados`
--

CREATE TABLE `convenios_modificados` (
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

CREATE TABLE `documentos_adicionales` (
  `id_documento_adicional` int(11) NOT NULL,
  `id_contrato` int(11) DEFAULT NULL,
  `fecha_documento` date DEFAULT NULL,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entregables`
--

CREATE TABLE `entregables` (
  `id_entregable` int(11) NOT NULL,
  `id_contrato` int(11) DEFAULT NULL,
  `id_intrega_m` int(11) NOT NULL,
  `fecha_entrega` date DEFAULT NULL,
  `nombre_entregable` varchar(26) DEFAULT NULL,
  `cantidad_entregable` int(11) DEFAULT NULL,
  `direccion_entregable` text,
  `precio_unitario` decimal(10,2) NOT NULL,
  `porcentaje` decimal(10,2) NOT NULL,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `entregables`
--

INSERT INTO `entregables` (`id_entregable`, `id_contrato`, `id_intrega_m`, `fecha_entrega`, `nombre_entregable`, `cantidad_entregable`, `direccion_entregable`, `precio_unitario`, `porcentaje`, `descripcion`) VALUES
(13, 6, 13, '2020-02-26', 'servicio fumigación febrer', 1, 'Avenida universidad #567 función pública', '1049416.66', '0.02', 'Servicio de fumigación mensual'),
(14, 6, 14, '2020-04-01', 'servicio fumigación febrer', 1, 'Avenida universidad #567 función pública', '1049416.66', '0.02', 'Servicio de fumigación mensual');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entregas_m`
--

CREATE TABLE `entregas_m` (
  `id_entrega` int(11) NOT NULL,
  `id_contrato` int(11) NOT NULL,
  `fecha_maxima` date NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `entregas_m`
--

INSERT INTO `entregas_m` (`id_entrega`, `id_contrato`, `fecha_maxima`, `cantidad`) VALUES
(7, 4, '2021-02-23', 10),
(8, 5, '2021-06-21', 6),
(10, 7, '2021-12-31', 1),
(13, 6, '2020-02-29', 1),
(14, 6, '2020-03-31', 1),
(15, 6, '2020-04-30', 1),
(16, 6, '2020-05-31', 1),
(17, 6, '2020-06-30', 1),
(18, 6, '2020-07-31', 1),
(19, 6, '2020-08-31', 1),
(20, 6, '2020-09-30', 1),
(21, 6, '2020-10-31', 1),
(22, 6, '2020-11-30', 1),
(23, 6, '2020-12-31', 1),
(24, 7, '2021-02-05', 1),
(25, 7, '2021-03-05', 1),
(26, 7, '2021-04-05', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
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

CREATE TABLE `fundamento_legal` (
  `id_fundamento_legal` int(11) NOT NULL,
  `id_procedimientos_contratacion` int(11) DEFAULT NULL,
  `Articulo` text,
  `setenta_treinta` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `fundamento_legal`
--

INSERT INTO `fundamento_legal` (`id_fundamento_legal`, `id_procedimientos_contratacion`, `Articulo`, `setenta_treinta`) VALUES
(11, 1, 'Art. 26 de la LAASSP', 70),
(12, 2, 'Art. 42 de la LAASSP, segundo párrafo, autoriza el TUAF', 30),
(13, 2, 'Art. 42 de la LAASSP, tercer párrafo, contar con 3 cotizaciones', 30),
(14, 3, 'Art. 42 de la LAASSP', 30),
(15, 2, 'Dictaminada por el Comité, Art. 41, fracciones I, III, VIII, IX segundo\r\npárrafo, X, XIII, XIV, XV, XVI, XVII, XVIII y XIX de la LAASSP', 70),
(16, 2, 'Dictaminada por el Área Requirente, Art. 41, fracciones II, IV, V, VI, VII,\r\nIX primer párrafo, XI, XII y XX de la LAASSP.\r\n', 70),
(17, 3, 'Dictaminada por el Comité, Art. 41, fracciones I, III, VIII, IX segundo\r\npárrafo, X, XIII, XIV, XV, XVI, XVII, XVIII y XIX de la LAASSP.', 70),
(18, 3, 'Dictaminada por el Área Requirente, Art. 41, fracciones II, IV, V, VI, VII,\r\nIX primer párrafo, XI, XII y XX de la LAASSP.\r\n', 70),
(19, 4, 'Art. 1° de la LAASSP y 4 del RLAASSP', 70);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inconformidades`
--

CREATE TABLE `inconformidades` (
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

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `permiso` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id_login`, `nombre`, `password`, `permiso`) VALUES
(1, 'admin', 'admin', 'administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivos_inconformidad`
--

CREATE TABLE `motivos_inconformidad` (
  `id_motivo` int(11) NOT NULL,
  `motivo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos_efectuados`
--

CREATE TABLE `pagos_efectuados` (
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

CREATE TABLE `partidas_presupuestales` (
  `id_partida` int(11) NOT NULL,
  `id_unidad` int(11) DEFAULT NULL,
  `id_presupuesto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `partidas_presupuestales`
--

INSERT INTO `partidas_presupuestales` (`id_partida`, `id_unidad`, `id_presupuesto`) VALUES
(10, 4, 5),
(11, 4, 6),
(12, 5, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partida_presupuesto`
--

CREATE TABLE `partida_presupuesto` (
  `id` int(11) NOT NULL,
  `clave` int(6) DEFAULT NULL,
  `nombre` varchar(220) COLLATE utf8_spanish2_ci NOT NULL,
  `presupuesto` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `partida_presupuesto`
--

INSERT INTO `partida_presupuesto` (`id`, `clave`, `nombre`, `presupuesto`) VALUES
(5, 51101, 'Mobiliario', '4563217.00'),
(6, 32101, 'Arrendamiento de terrenos', '2456780.00'),
(7, 35901, 'Servicios de jardinería y fumigación', '18000000.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `penalizaciones`
--

CREATE TABLE `penalizaciones` (
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

CREATE TABLE `procedimientos_contratacion` (
  `id_procedimiento_contratacion` int(11) NOT NULL,
  `procedimientos` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `procedimientos_contratacion`
--

INSERT INTO `procedimientos_contratacion` (`id_procedimiento_contratacion`, `procedimientos`) VALUES
(1, 'Licitación Pública'),
(2, 'Adjudicación Directa'),
(3, 'Invitación a Cuando Menos Tres Personas'),
(4, 'Contratación al amparo del artículo 1°');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor_adjudicado`
--

CREATE TABLE `proveedor_adjudicado` (
  `id_proveedor` int(11) NOT NULL,
  `nombre` text,
  `rfc` varchar(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor_adjudicado`
--

INSERT INTO `proveedor_adjudicado` (`id_proveedor`, `nombre`, `rfc`) VALUES
(5, 'Muebles S.A de C.V', 'MULF940214HDF'),
(6, 'Arrendadora S.A de CV', 'ARLF940214HDF'),
(7, 'fumiga S.A de C.V.', 'FULF940214HDF');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recepcion`
--

CREATE TABLE `recepcion` (
  `id_recepcion` int(11) NOT NULL,
  `id_entregable` int(11) DEFAULT NULL,
  `url_constancia` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `recepcion`
--

INSERT INTO `recepcion` (`id_recepcion`, `id_entregable`, `url_constancia`) VALUES
(10, 13, 'uploads/recepcion/Sistemas Operativos para Dispositivos Móviles.pdf'),
(11, 14, 'uploads/recepcion/IMG_20201203_0001.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_partida`
--

CREATE TABLE `sub_partida` (
  `id_partida` int(11) NOT NULL,
  `id_contrato` int(11) DEFAULT NULL,
  `numero_sub_partida` int(11) DEFAULT NULL,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terminacion_anticipada`
--

CREATE TABLE `terminacion_anticipada` (
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

CREATE TABLE `unidad_compradora` (
  `id_unidad_compradora` int(11) NOT NULL,
  `nombre_unidad_compradora` varchar(150) DEFAULT NULL,
  `numero_unidad` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidad_compradora`
--

INSERT INTO `unidad_compradora` (`id_unidad_compradora`, `nombre_unidad_compradora`, `numero_unidad`) VALUES
(4, 'Dirección General de Bienes Inmuebles y Recursos Materiales', '005000999'),
(5, 'Dirección de Obras y Mantenimiento', '006000997');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad_requirente`
--

CREATE TABLE `unidad_requirente` (
  `id_requirente` int(11) NOT NULL,
  `clave_requirente` varchar(20) DEFAULT NULL,
  `unidad` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `unidad_requirente`
--

INSERT INTO `unidad_requirente` (`id_requirente`, `clave_requirente`, `unidad`) VALUES
(4, '100', 'Oficina del C. Secretario'),
(5, '110', 'Dirección General de Comunicación Social'),
(6, '111', 'Unidad de Asuntos Jurídicos y Transparencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitas`
--

CREATE TABLE `visitas` (
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
-- Indices de la tabla `comprobacion`
--
ALTER TABLE `comprobacion`
  ADD PRIMARY KEY (`id_comprobacion`),
  ADD KEY `comprobacion_contrato_FK` (`id_contrato`);

--
-- Indices de la tabla `consolidado`
--
ALTER TABLE `consolidado`
  ADD PRIMARY KEY (`id_consolidado`),
  ADD KEY `id_requirente` (`id_requirente`);

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`id_contrato`),
  ADD KEY `unidad_compradora_FK` (`id_unidad_compradora`),
  ADD KEY `procedimiento_contratacion_FK` (`id_procedimiento_contratacion`),
  ADD KEY `unidad_requirente_FK` (`id_unidad_requirente`),
  ADD KEY `administrador_FK` (`id_administrador`),
  ADD KEY `proveedor_FK` (`id_proveedor_adjudicado`),
  ADD KEY `id_partida` (`id_partida`),
  ADD KEY `consolidado` (`id_consolidado`),
  ADD KEY `id_fundamento_legal` (`id_fundamento_legal`);

--
-- Indices de la tabla `contrato_fechas`
--
ALTER TABLE `contrato_fechas`
  ADD PRIMARY KEY (`id_fecha`),
  ADD KEY `PK_fecha_contrato` (`id_contrato`);

--
-- Indices de la tabla `convenios_modificados`
--
ALTER TABLE `convenios_modificados`
  ADD PRIMARY KEY (`id_convenio`),
  ADD KEY `contrato_FK` (`id_contrato`);

--
-- Indices de la tabla `documentos_adicionales`
--
ALTER TABLE `documentos_adicionales`
  ADD PRIMARY KEY (`id_documento_adicional`),
  ADD KEY `documento_contrato_FK` (`id_contrato`);

--
-- Indices de la tabla `entregables`
--
ALTER TABLE `entregables`
  ADD PRIMARY KEY (`id_entregable`),
  ADD KEY `entregable_contrato_FK` (`id_contrato`) USING BTREE,
  ADD KEY `id_entrega_m_FK` (`id_intrega_m`);

--
-- Indices de la tabla `entregas_m`
--
ALTER TABLE `entregas_m`
  ADD PRIMARY KEY (`id_entrega`),
  ADD KEY `contrato_FK` (`id_contrato`) USING BTREE COMMENT 'contrato';

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id_factura`),
  ADD KEY `factura_contrato_FK` (`id_contrato`);

--
-- Indices de la tabla `fundamento_legal`
--
ALTER TABLE `fundamento_legal`
  ADD PRIMARY KEY (`id_fundamento_legal`),
  ADD KEY `id_procedimientos_contratacion` (`id_procedimientos_contratacion`);

--
-- Indices de la tabla `inconformidades`
--
ALTER TABLE `inconformidades`
  ADD PRIMARY KEY (`id_inconformidad`),
  ADD KEY `motivos_FK` (`id_motivo`),
  ADD KEY `inconformidada_contrato_FK` (`id_contrato`);

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
  ADD PRIMARY KEY (`id_pago_efectuado`),
  ADD KEY `pago_contrato_FK` (`id_contrato`);

--
-- Indices de la tabla `partidas_presupuestales`
--
ALTER TABLE `partidas_presupuestales`
  ADD PRIMARY KEY (`id_partida`),
  ADD KEY `partidas_presupuestos_FK` (`id_presupuesto`),
  ADD KEY `partida_unidad_FK` (`id_unidad`),
  ADD KEY `id_partida` (`id_partida`),
  ADD KEY `id_partida_2` (`id_partida`);

--
-- Indices de la tabla `partida_presupuesto`
--
ALTER TABLE `partida_presupuesto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `penalizaciones`
--
ALTER TABLE `penalizaciones`
  ADD PRIMARY KEY (`id_penalizacion`),
  ADD KEY `pena_contrato_FK` (`id_contrato`);

--
-- Indices de la tabla `procedimientos_contratacion`
--
ALTER TABLE `procedimientos_contratacion`
  ADD PRIMARY KEY (`id_procedimiento_contratacion`);

--
-- Indices de la tabla `proveedor_adjudicado`
--
ALTER TABLE `proveedor_adjudicado`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `recepcion`
--
ALTER TABLE `recepcion`
  ADD PRIMARY KEY (`id_recepcion`),
  ADD KEY `id_entregable` (`id_entregable`);

--
-- Indices de la tabla `sub_partida`
--
ALTER TABLE `sub_partida`
  ADD PRIMARY KEY (`id_partida`),
  ADD KEY `subpartida_contrato_FK` (`id_contrato`);

--
-- Indices de la tabla `terminacion_anticipada`
--
ALTER TABLE `terminacion_anticipada`
  ADD PRIMARY KEY (`id_terminacion`),
  ADD KEY `terminacion_contrato_FK` (`id_contrato`);

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
  ADD PRIMARY KEY (`id_visita`),
  ADD KEY `visita_contrato_FK` (`id_contrato`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `comprobacion`
--
ALTER TABLE `comprobacion`
  MODIFY `id_comprobacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `consolidado`
--
ALTER TABLE `consolidado`
  MODIFY `id_consolidado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contrato`
--
ALTER TABLE `contrato`
  MODIFY `id_contrato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `contrato_fechas`
--
ALTER TABLE `contrato_fechas`
  MODIFY `id_fecha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id_entregable` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `entregas_m`
--
ALTER TABLE `entregas_m`
  MODIFY `id_entrega` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `fundamento_legal`
--
ALTER TABLE `fundamento_legal`
  MODIFY `id_fundamento_legal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `inconformidades`
--
ALTER TABLE `inconformidades`
  MODIFY `id_inconformidad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id_partida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `partida_presupuesto`
--
ALTER TABLE `partida_presupuesto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `penalizaciones`
--
ALTER TABLE `penalizaciones`
  MODIFY `id_penalizacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `procedimientos_contratacion`
--
ALTER TABLE `procedimientos_contratacion`
  MODIFY `id_procedimiento_contratacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `proveedor_adjudicado`
--
ALTER TABLE `proveedor_adjudicado`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `recepcion`
--
ALTER TABLE `recepcion`
  MODIFY `id_recepcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id_unidad_compradora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `unidad_requirente`
--
ALTER TABLE `unidad_requirente`
  MODIFY `id_requirente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `visitas`
--
ALTER TABLE `visitas`
  MODIFY `id_visita` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comprobacion`
--
ALTER TABLE `comprobacion`
  ADD CONSTRAINT `comprobacion_contrato_FK` FOREIGN KEY (`id_contrato`) REFERENCES `contrato` (`id_contrato`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `consolidado`
--
ALTER TABLE `consolidado`
  ADD CONSTRAINT `consolidado_ibfk_1` FOREIGN KEY (`id_requirente`) REFERENCES `unidad_requirente` (`id_requirente`);

--
-- Filtros para la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `administrador_FK` FOREIGN KEY (`id_administrador`) REFERENCES `administrador` (`id_administrador`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `consolidado` FOREIGN KEY (`id_consolidado`) REFERENCES `consolidado` (`id_consolidado`),
  ADD CONSTRAINT `contrato_ibfk_1` FOREIGN KEY (`id_partida`) REFERENCES `partida_presupuesto` (`id`),
  ADD CONSTRAINT `id_fundamento_legal` FOREIGN KEY (`id_fundamento_legal`) REFERENCES `fundamento_legal` (`id_fundamento_legal`) ON DELETE CASCADE ON UPDATE CASCADE,
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
  ADD CONSTRAINT `id_entrega_m_FK` FOREIGN KEY (`id_intrega_m`) REFERENCES `entregas_m` (`id_entrega`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `entregas_m`
--
ALTER TABLE `entregas_m`
  ADD CONSTRAINT `contratos_FK` FOREIGN KEY (`id_contrato`) REFERENCES `contrato` (`id_contrato`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `factura_contrato_FK` FOREIGN KEY (`id_contrato`) REFERENCES `contrato` (`id_contrato`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `fundamento_legal`
--
ALTER TABLE `fundamento_legal`
  ADD CONSTRAINT `id_procedimientos_contratacion` FOREIGN KEY (`id_procedimientos_contratacion`) REFERENCES `procedimientos_contratacion` (`id_procedimiento_contratacion`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Filtros para la tabla `recepcion`
--
ALTER TABLE `recepcion`
  ADD CONSTRAINT `id_entregable` FOREIGN KEY (`id_entregable`) REFERENCES `entregables` (`id_entregable`) ON DELETE CASCADE ON UPDATE CASCADE;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
