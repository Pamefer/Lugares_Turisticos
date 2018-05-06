-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-02-2015 a las 03:31:11
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `lugaresturisticos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE IF NOT EXISTS `actividades` (
`codActividad` int(11) NOT NULL,
  `nombreActividad` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`codActividad`, `nombreActividad`) VALUES
(1, 'Surf'),
(2, 'Caminata'),
(3, 'Descensos'),
(4, 'Exploración');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
`codCiudad` int(11) NOT NULL,
  `nombreCiudad` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `altura` varchar(20) NOT NULL,
  `clima` varchar(150) NOT NULL,
  `temperatura` varchar(10) NOT NULL,
  `superficie` varchar(10) NOT NULL,
  `codRp` int(11) NOT NULL,
  `lema` varchar(45) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`codCiudad`, `nombreCiudad`, `altura`, `clima`, `temperatura`, `superficie`, `codRp`, `lema`) VALUES
(1, 'Guayaquil', '4 msnm', 'Cálido', '26ºC', '344,5 km²', 21, 'La perla del pacífico'),
(2, 'Quito', '2.810 m.s.n.m', 'Frío-Cálido', '13ºC', '324 km²', 17, 'Luz de América'),
(3, 'Cuenca', '2.500 m.s.n.m.', 'Temperatura promedio de 14 grados centígrados. Invierno: Octubre-Mayo y Verano: Junio-Septiembre', '14ºC', '67,71 km²', 9, 'Atenas del Ecuador'),
(4, 'Ambato', '', '', '', '', 18, 'Cuna de los tres Juanes'),
(5, 'Ibarra', '', '', '', '', 15, 'Ciudad Blanca a la que siempre se vuelve'),
(6, 'Otavalo', '', '', '', '', 15, ''),
(7, 'Riobamba', '', '', '', '', 13, 'Sultana de los Andes'),
(8, 'Guaranda', '', '', '', '', 10, 'La ciudad de las siete colinas'),
(9, 'Latacunga', '', '', '', '', 14, ''),
(10, 'Loja', '', '', '', '', 16, 'Cuna de artistas'),
(11, 'Vilcabamba', '', '', '', '', 16, 'Valle de la longevidad'),
(12, 'Baños', '1.820 m.s.n.m.', 'Templado', '12-22ºC', '1064.6 Km2', 18, 'La ciudad del volcán'),
(13, 'Mindo', '', '', '', '', 17, ''),
(14, 'Santo Domingo de los Colorados', '', '', '', '', 25, ''),
(15, 'Esmeraldas', '', '', '', '', 20, 'La ciudad verde'),
(16, 'Atacames', '', '', '', '', 20, ''),
(17, 'Montañita', '5 m.s.n.m', 'Seco', '28ºC', '1400 m', 24, 'La Capital del Surf del Ecuador.'),
(18, 'Manta', '', '', '', '', 23, ''),
(19, 'Bahía de Caráquez', '', '', '', '', 23, ''),
(20, 'Salinas', '', '', '', '', 24, ''),
(21, 'Portoviejo', '', '', '', '', 23, 'Portoviejo se levanta'),
(22, 'Machala', '', '', '', '', 19, 'Capital Bananera del Mundo'),
(23, 'Quevedo', '', '', '', '', 22, ''),
(24, 'Zaruma', '', '', '', '', 19, ''),
(25, 'Tena', '518 m.s.n.m', 'Cálido-Húmedo', '25ºC', '261,8 km²', 6, 'Capital kayaking del Ecuador'),
(26, 'Puyo', '924 msnm', 'Es una zona climática lluviosa tropical', '18° - 33° ', '87,67 km²', 8, ''),
(27, 'Nueva Loja', '', '', '', '', 26, 'Lago Agrío'),
(28, 'Zamora', '', '', '', '', 27, 'Tierra de aves y cascadas'),
(29, 'Isla Santa Cruz ', '', '', '', '', 28, ''),
(30, 'Isla San Cristóbal', '0 - 750 m.s.n.m', 'Cálido', '', '558 km²', 28, '"Capital del paraíso"'),
(31, 'Azogues', '2518m.s.nm', 'Frío', '15ºC', '613.2 Km2', 11, 'La obrera del sur'),
(32, 'San Juan Bosco', '', '', '', '', 5, ''),
(33, 'General Leonidas Plaza', '1100 m.s.n.m', 'Subtropical Húmedo', '21ºC', '', 5, ''),
(34, 'Babahoyo', '8 msnm', 'Cálido-lluvioso', '26ºC', '174,6 km²', 22, 'Ciudad pujante y trabajadora'),
(35, 'Isla Isabela', '0 - 1.707 m.s.n.m.', 'Predomina el piso subtropical con climas secos y muy seco', '18 - 22', '4.588 km²', 28, '"Un paraje de lo diverso"');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
`codComentario` int(11) NOT NULL,
  `descripcion` varchar(60) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `codUsuario` int(11) NOT NULL,
  `codLugar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`codComentario`, `descripcion`, `codUsuario`, `codLugar`) VALUES
(1, 'qqqqqqqq', 4, 1),
(2, 'Chevere', 4, 7),
(3, 'Que bacÃ¡n', 4, 11),
(4, 'Bonito', 7, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
`codFoto` int(11) NOT NULL,
  `foto` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `codUsuario` int(11) NOT NULL,
  `codLugar` int(11) NOT NULL,
  `codAdmin` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`codFoto`, `foto`, `codUsuario`, `codLugar`, `codAdmin`) VALUES
(1, 'images/imgbase/monta.jpg', 1, 1, 1),
(3, 'images/imgbase/centroh.jpg', 2, 7, 1),
(4, 'images/imgbase/cueva.jpg', 1, 10, 1),
(5, 'images/imgbase/inga.jpg', 4, 8, 1),
(6, 'images/imgbase/pailon.jpg', 3, 2, 1),
(7, 'images/imgbase/cascadaR.jpg', 1, 9, 1),
(8, 'images/imgbase/cerrob.jpg', 3, 11, 1),
(9, 'images/imgbase/casao.jpg', 3, 12, 1),
(10, 'images/imgbase/reserh.jpg', 2, 13, 1),
(12, 'images/usuarios/mami.jpg', 4, 7, 0),
(13, 'images/usuarios/1234516_168307843361050_1547280930_n.jpg', 4, 11, 0),
(20, 'images/usuarios/Lighthouse.jpg', 4, 2, 0),
(25, 'images/imgbase/descarga.jpg', 5, 15, 1),
(26, 'images/imgbase/cajas.jpg', 5, 16, 1),
(28, 'images/imgbase/volcan.jpg', 5, 17, 1),
(29, 'images/imgbase/humed.jpg', 5, 18, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

CREATE TABLE IF NOT EXISTS `habitaciones` (
`codHabitacion` int(11) NOT NULL,
  `tipoHabitacion` varchar(15) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `habitaciones`
--

INSERT INTO `habitaciones` (`codHabitacion`, `tipoHabitacion`) VALUES
(1, 'simple'),
(2, 'doble'),
(3, 'suite');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoteles`
--

CREATE TABLE IF NOT EXISTS `hoteles` (
`codHotel` int(11) NOT NULL,
  `nombreHotel` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `calificacion` int(11) NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `codCiudad` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `hoteles`
--

INSERT INTO `hoteles` (`codHotel`, `nombreHotel`, `direccion`, `calificacion`, `telefono`, `codCiudad`) VALUES
(1, 'Hotel Akròs', 'Av. 6 de diciembre N34-120 y Checoslovaquia', 4, '', 2),
(2, 'Filatelia Apart Hotel', '9 de Octubre entre Patria y 18 de Septiembre', 3, '', 2),
(3, 'Hotel Oro Verde', 'Av. Ordoñez Lazo S/N', 5, '', 3),
(4, 'Hotel El príncipe', 'Calle Juan Jaramillo 7-82 y Luis Cordero', 4, '222222', 3),
(5, 'Hotel Ambato ', 'Guayaquil 0108 y Rocafuerte ', 4, '', 4),
(6, 'Hotel Casino Emperador', 'Cevallos y Lalama (esq.)', 4, '', 4),
(7, 'Hotel Sangay ', 'Plaza Ayora 100', 4, '', 12),
(8, 'Hotel Casa Blanca', 'Maldonado y Oriente', 3, '', 12),
(9, 'Hotel Madre Tierra', 'km 32 vía a Vilcabamba', 4, '', 11),
(10, 'Hotel Izhcayluma', '2 Km. al sur de Vilcabamb', 4, '', 11),
(11, 'Hotel Riobamba Inn', 'Carabobo 2320 y Primera Constituyente', 3, '', 7),
(12, 'Grand Hotel Santo Domingo', 'Calle Río Toachi y Galápagos', 3, '', 14),
(13, 'Hotel Ajavi', '', 4, '', 5),
(14, 'Hotel Rosim', 'Calle Quito 16-49 y Padre Salcedo', 3, '', 9),
(15, 'Hotel Continental', 'Chile y 10 de Agosto (esquina)', 5, '', 1),
(16, 'Hotel Howard Johnson', 'Av. Juan Tanca Marengo y Abel Romero Castillo', 4, '', 1),
(17, 'Hotel Oro Verde', 'Malecón y Calle 23', 5, '', 18),
(18, 'Hotel Mar Azul', 'Calle 22 y Flavio Reyes', 4, '', 18),
(19, 'Hotel Casino Calypsso', 'Malecón junto a la Capitanía del Puerto', 4, '', 20),
(20, 'Hotel Sun Beach', '', 3, '', 20),
(21, 'Hotel La Piedra', 'Av. Circunvalación Virgiolio Ratti N802', 4, '', 19),
(22, 'Casa Grande Boutique Hote', 'Calle Virgilio Ratti 606', 4, '', 19),
(23, 'Hotel Cielo Azul', '', 3, '', 16),
(24, 'Hotel Posada Real', '4 de Enero y 27 de Febrero ', 3, '', 26),
(25, 'Hotel Turingia', 'Ceslao Marín 294 y Fco. de Orellana', 3, '', 26),
(26, 'Marcelos', 'Bernrdo', 1, '2560346', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoteleshabitaciones`
--

CREATE TABLE IF NOT EXISTS `hoteleshabitaciones` (
  `codHotel` int(11) NOT NULL,
  `codHabitacion` int(11) NOT NULL,
  `tarifa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `hoteleshabitaciones`
--

INSERT INTO `hoteleshabitaciones` (`codHotel`, `codHabitacion`, `tarifa`) VALUES
(1, 1, 210),
(1, 2, 210),
(1, 3, 230),
(2, 1, 40),
(2, 2, 48),
(2, 3, 65),
(3, 1, 90),
(3, 2, 110),
(3, 3, 130),
(4, 1, 30),
(4, 2, 43),
(4, 3, 54),
(5, 1, 58),
(5, 2, 73),
(5, 3, 123),
(6, 1, 65),
(6, 2, 85),
(6, 3, 135),
(7, 1, 60),
(7, 2, 80),
(7, 3, 95),
(8, 1, 30),
(8, 2, 45),
(8, 3, 55),
(9, 1, 39),
(9, 2, 55),
(9, 3, 72),
(10, 1, 18),
(10, 2, 28),
(10, 3, 39),
(11, 1, 16),
(11, 2, 27),
(11, 3, 38),
(12, 1, 48),
(12, 2, 62),
(12, 3, 77),
(13, 1, 57),
(13, 2, 83),
(13, 3, 98),
(14, 1, 25),
(14, 2, 40),
(14, 3, 50),
(15, 1, 90),
(15, 2, 120),
(15, 3, 140),
(16, 1, 100),
(16, 2, 110),
(16, 3, 140),
(17, 1, 140),
(17, 2, 150),
(17, 3, 190),
(18, 1, 60),
(18, 2, 75),
(18, 3, 90),
(19, 1, 55),
(19, 2, 60),
(19, 3, 80),
(20, 1, 24),
(20, 2, 36),
(20, 3, 45),
(21, 1, 44),
(21, 2, 59),
(21, 3, 65),
(22, 1, 87),
(22, 2, 87),
(22, 3, 98),
(23, 1, 59),
(23, 2, 95),
(23, 3, 112),
(24, 1, 25),
(24, 2, 50),
(24, 3, 75),
(25, 1, 25),
(25, 2, 40),
(25, 3, 50),
(26, 2, 70);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hotelesservicios`
--

CREATE TABLE IF NOT EXISTS `hotelesservicios` (
  `codHotel` int(11) NOT NULL,
  `codServicios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `hotelesservicios`
--

INSERT INTO `hotelesservicios` (`codHotel`, `codServicios`) VALUES
(5, 3),
(5, 4),
(5, 6),
(5, 8),
(6, 3),
(6, 6),
(6, 4),
(6, 8),
(7, 3),
(7, 4),
(7, 6),
(7, 8),
(8, 3),
(8, 4),
(8, 6),
(8, 8),
(9, 3),
(9, 4),
(9, 6),
(9, 8),
(11, 3),
(11, 4),
(11, 6),
(11, 8),
(12, 3),
(12, 4),
(12, 6),
(12, 8),
(13, 3),
(13, 4),
(13, 6),
(13, 8),
(14, 3),
(14, 4),
(14, 6),
(14, 8),
(15, 3),
(15, 4),
(15, 6),
(15, 8),
(16, 3),
(16, 4),
(16, 6),
(16, 8),
(17, 3),
(17, 4),
(17, 6),
(17, 8),
(18, 3),
(18, 4),
(19, 3),
(19, 4),
(19, 6),
(19, 8),
(20, 3),
(20, 4),
(20, 6),
(20, 8),
(21, 3),
(21, 4),
(21, 6),
(21, 8),
(22, 3),
(22, 4),
(22, 6),
(22, 8),
(23, 3),
(23, 4),
(23, 6),
(23, 8),
(24, 3),
(24, 4),
(24, 6),
(24, 8),
(25, 3),
(25, 4),
(25, 4),
(25, 6),
(25, 8),
(4, 1),
(4, 2),
(4, 3),
(2, 4),
(2, 8),
(2, 9),
(26, 4),
(26, 7),
(1, 3),
(1, 4),
(1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugaractividad`
--

CREATE TABLE IF NOT EXISTS `lugaractividad` (
  `codlugar` int(11) NOT NULL,
  `codactividad` int(11) NOT NULL,
  `descripcionLa` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lugaractividad`
--

INSERT INTO `lugaractividad` (`codlugar`, `codactividad`, `descripcionLa`) VALUES
(1, 1, 'Montañita es considerada como capital del Surf del Ecuador, desde aprendices a experimentados tablistas, todos concuerdan en que Montañita y sus playas aledañas tienen sus buenas olas y condiciones propicias para la práctica del surf.'),
(2, 2, 'Para conocer el Pailón del Diablo en la parroquia Río Verde, se recorre un camino sinuoso y húmedo, rodeado por el verdor de la flora nativa'),
(7, 2, 'Caminatas para observar la estructura arquitectónica e histórica del lugar'),
(8, 2, 'Al caminar entre los corredores, flanqueados por gruesas paredes de piedra almohadilla, se distinguen los cuartos que sirvieron como dormitorios y grandes salones del Inca, muchos de los cuales, fueron restaurados.'),
(9, 3, 'Se puede hacer descensos en boyas desde la cascada hasta el puente del río, tomando un refrescante baño, si llevas alimentos puedes disfrutar de ellos a orillas del río si deseas puedes tomar una siesta sobre una roca o caminar en silencio disfrutando del sonido de la naturaleza en este impresionante sitio tomando fotografías de mariposas y paisaje.'),
(10, 4, 'El corredor al que desemboca las tres entradas se prolonga unos 12 metros al sur este y luego curva hacia el oeste formando un ángulo pronunciado de 20 metros. Esta galería es estrecha y baja que permite la entrada únicamente de una persona debiendo esta de caminar en cuclillas.'),
(1, 2, 'Caminata por la playa y el lugar que cuenta con rústicas cabañas'),
(11, 2, 'El Bosque Protector Cerro Blanco cuenta con cuatro rutas hacia los senderos con una variada vegetación.'),
(12, 2, ''),
(13, 2, 'Caminata hacia la cascada "Hola Vida", Conozca la cascada escondida, Visita al shamán, Observación de cerámica Kichwa, Degustación de jugo de caña (trapiche Marujita), Visita al Mirador del río Pastaza, Paseo en canoa a motor por el río Pastaza.'),
(15, 1, 'Surf en sus bellas playas'),
(17, 4, 'Puedes explorar todo el volcán y encontrarte con lugares maravillosos'),
(18, 2, 'Se puede visitar los Humedales y el Muro de lágrimas caminando. La poca circulación en la isla asegura un día tranquilo y apacible.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugartipo`
--

CREATE TABLE IF NOT EXISTS `lugartipo` (
  `codLugar` int(11) NOT NULL,
  `codTipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lugartipo`
--

INSERT INTO `lugartipo` (`codLugar`, `codTipo`) VALUES
(1, 3),
(2, 4),
(7, 6),
(8, 5),
(9, 4),
(10, 7),
(11, 8),
(12, 9),
(13, 10),
(15, 3),
(16, 10),
(17, 12),
(18, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugartrans`
--

CREATE TABLE IF NOT EXISTS `lugartrans` (
  `codLugar` int(11) NOT NULL,
  `codTrans` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `lugartrans`
--

INSERT INTO `lugartrans` (`codLugar`, `codTrans`, `descripcion`) VALUES
(1, 1, 'Sin datos.'),
(1, 2, 'No existe en el cantón, el aeropuerto mas cercano en la ciudad de Salinas.'),
(2, 1, 'Acceso: Se la puede ver de la carretera Baños-Puyo o por un sendero muy bien señalizado hasta llegar a la cascada. Tiempo: 30min hasta llegar a la cascada.'),
(2, 2, 'Sin datos'),
(7, 5, 'Tanto del sur como del norte para llegar al Centro Histórico se lo puede hacer por medio del Trolebús'),
(7, 2, 'Aeropuerto: Internacional Tababela'),
(8, 1, 'Sin datos'),
(8, 2, 'Sin datos'),
(9, 1, 'Viaje de una hora y media en bus aproximadamente desde el Chaco'),
(9, 2, 'Sin datos'),
(10, 1, 'Para llegar a la cueva se puede tomar la coop. Quito-Lago Agrio'),
(10, 2, 'Sin datos'),
(11, 1, 'Transportes Ecuador, Flota Imbabura, Baños, Esmeraldas y Panamericana, que tienen rutas diarias'),
(11, 2, 'Aeropuerto: José Joaquín de Olmedo.'),
(12, 1, 'Transportes Ecuador, Saracay, Esmeraldas, que tienen rutas diarias.'),
(12, 2, 'Sin datos'),
(13, 1, 'Trans. San Francisco, Centinela del Oriente, Baños, Amazonas, Flota Pelileo, Sangay.'),
(13, 2, 'Aeropuerto: Militar "Río Amazonas", parroquia Shell.'),
(16, 6, 'Vía marítimo'),
(15, 6, 'Vía marítimo'),
(18, 6, 'Puerto Villamil'),
(18, 2, 'Sin datos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugarturistico`
--

CREATE TABLE IF NOT EXISTS `lugarturistico` (
`codLugar` int(11) NOT NULL,
  `nombreLugar` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `latitud` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `longitud` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `codCiudad` int(11) NOT NULL,
  `formaLlegar` varchar(600) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(2000) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `lugarturistico`
--

INSERT INTO `lugarturistico` (`codLugar`, `nombreLugar`, `latitud`, `longitud`, `codCiudad`, `formaLlegar`, `descripcion`) VALUES
(1, 'Playas Montañita', '-1.83333', '-80.75', 17, 'La playa de Montañita se ubica a tres horas de Guayaquil, a 60 Km. de la ciudad de Santa Elena. ', 'Es Montañita realmente un balneario cosmopolita, pues durante todo el año existe gran afluencia de turistas provenientes de todas partes del mundo, que llegan atraídos por toda la gama de posibilidades de diversión y deportes que brinda esta localidad\r\nEs un sitio obligado de visita para la gente joven, que acuden atraídos por sus campeonatos internacionales de Surf. Es un lugar tranquilo para el descanso y el relax junto al Santuario de Olón o el refugio entre los caseríos de los pescadores frente al mar.\r\n\r\nLa diversión nocturna esta asegurada con música estilo bohemia propia de la zona, con gran cantidad de actividades recreativas organizadas, como concursos de baile y de belleza. \r\n\r\nEsta playa es amplia y el fuerte oleaje es favorable para las prácticas y competencias de surfing. Las construcciones que le rodean son de tipo moderno, combinadas con materiales de la zona (madera y cade).'),
(2, 'Pailon del Diablo', '-1.401829', '-78.300049', 12, 'Se encuentra a 18 km. desde Baños. En este lugar el río Verde forma una impresionante cascada dentro de las rocas.', 'Para los turistas tanto nacionales como extranjeros esta es la cascada más impresionante de la región, para visitarla solamente se necesita viajar por la carretera Baños – Puyo hasta el rotulo de presentación de la cascada. El agua de la cascada es transparente y en el Pailón propiamente dicho el agua se torna de una coloración turquesa. La temperatura del agua es de aproximadamente unos 23º C.\r\nPara observarla mas de cerca debe descender por un sendero que se encuentra perfectamente señalizado, que a través de orquídeas, hortensias y vegetación semi-selvática, que llega hasta un puente colgante y luego se encontrará en el filo mismo de la cascada.\r\n\r\nEn el borde de la cascada existe un mirador, desde donde la vista se pierde en la cubierta vegetal compuesta y bien representada en tres estratos: herbáceo, arbustivo y arbóreo. La cascada desciende a lo largo de una formación rocosa natural, la misma que es capaz de envolver en una densa nube de gotitas producto de la humedad.\r\nUbicación\r\nSe encuentra a 18 km. desde Baños. En este lugar el río Verde forma una impresionante cascada dentro de las rocas.\r\n\r\nAltura de la Cascada\r\nEl Pailón del Diablo es considerado como uno de los saltos más grandes del Ecuador tiene aproximadamente 80 metros de altura.\r\n\r\nClima\r\nLa temperatura del agua de esta cascada es de 23º C. pero en su entorno la temperatura oscila entre los 10º y los 28º C.'),
(7, 'Centro Historico de Quito', '-1.758695', '-78.756018', 2, '', 'El Centro Histórico, declarado Patrimonio Cultural de la Humanidad en 1978. Iglesias coloniales, calles angostas, plazas, piletas y varios rincones consagrados a la tradición de una ciudad mestiza se ofrecen a cada paso.'),
(8, 'Ruinas de Ingapirca', '-2.540802', '-78.875233', 31, 'Se encuentra localizado en la estribación occidental del cerro Cubilán, a medio kilómetro del centro parroquial de Ingapirca. ', 'Ingapirca fue un importante centro religioso, político, científico, militar y administrativo para los cañaris e incas. En la actualidad es el monumento arqueológico pre-hispánico más trascendental del Ecuador. Apostado en los andes australes, despliega majestuosos e invalorables restos culturales, que en el valle del Cañar son el testimonio de la presencia de sociedades andinas trascendentales, como fue la cañari y luego la inca.\r\nLos elementos que conforman el complejo, están: El Castillo o Templo del sol, Pilaloma, la Condamine y la Vaguada, el Ingachungana, la Cara del Inca, la tortuga, el Intihuayco, Escalinata del barranco y el Museo de sitio.\r\n\r\nEstos componentes del Complejo Arqueológico se destacan por las inigualables características de su cantería, la singularidad de su diseño y la arquitectura de su edificio principal, un torreón elíptico (Castillo).\r\n\r\nAl caminar dentro del complejo se descubre cómo unos pequeños muros de piedra, labrados en el mismo sitio, forman cuadrados, , rectángulos y óvalos y al mirar con detenimiento, se distinguen figuras de animales esculpidas en relieve. \r\n\r\nSon fáciles de identificar una serie de acueductos, los cuales servían para conducir el agua, tanto de entrada como salida, en los baños. \r\n'),
(9, 'Cascada Río Malo', '-0.340278', '-77.808889', 25, 'La Cascada de río Malo se encuentra a 1 hora y 30 minutos desde el Chaco, en el Río Malo.', 'A orillas del río Malo puede disfrutar de una vegetación primaria de los bosques, algunos acantilados rocosos, ver el agua blanca del río, algunas rocas de varios colores, mariposas que posan en lagunas ramas y la más impresionante caída de agua de un color tan blanco que irradia, paz y tranquilidad. Se encuentra a 1 hora y 30 minutos de viaje desde el Chaco, en el Río Malopureza. \r\nSe puede hacer descensos en boyas desde la cascada hasta el puente del río, tomando un refrescante baño, se puede tomar una siesta sobre una roca o caminar en silencio disfrutando del sonido de la naturaleza en este impresionante sitio tomando fotografías de mariposas y paisaje.\r\nMientras recorre el sendero hasta el sitio mismo de la cascada se puede apreciar la gran variedad de mariposas, aves, el gallito de la peña que es un ave de color rojo con negro con un copete muy llamativo. '),
(10, 'Cueva de los Tayos', '-1.933333', '-77.792778', 33, 'Esta cueva se encuentra ubicada en la provincia de Morona Santiago en el cantón San Juan Bosco. En las faldas septentrionales de la cordillera del Cóndor al margen derecho del río Huangus, Guangos o Coangos según cartas topográficas o también denominado Huankuk por lo indígenas que habitan en los alrededores.', 'La cueva es una formación geológica cual data sus inicios hace aprox. 200 millones de años. Las formaciones de piedra cuales por sus capas que recuerdan a terrazas contienen ángulos rectos y acabados con formas simétricas y perfectamente pulidas lo que a simple ojo da la impresión que fuese hecho por el hombre.\r\nLa formación de la cueva es por gran parte causado por el agua y posiblemente por petróleo el que se encuentra igualmente en la cueva. En la Cueva de los Tayos hay impresionantes formaciones de estalactitas, estalagmitas y estalagnatos los que sostienen la antigüedad de esta cueva.\r\n\r\nLa Cueva de los Tayos se llama así por ser el hábitat de unas aves nocturnas llamadas “tayos”. Es la segunda cueva más grande del mundo.'),
(11, 'Bosque Cerro Blanco', '-2.184294 ', '-80.015584', 1, 'Km.16 de la vía a la costa ', 'El Bosque Protector “Cerro Blanco” comprende una de las pocas reservas de bosque que quedan en el mundo, cuenta con un sistema de senderos naturales y un centro de visitantes, con estacionamiento de vehículos, área de picnic y camping: adecuado con mesas de madera, sillas, parrillas y baterías sanitarias, anfiteatro con capacidad para 200 personas, plaza informativa, paneles interpretativos de mamíferos, ruleta de aves, antiguos hornos de cal, callejón de niños, el bar Papagayo Verde.\r\nSe inició la conservación del área desde Abril de 1989 y 2.000 hectáreas fueron declaradas como Bosque Protector. En Julio de 1994 se amplió el Bosque Protector con 1.500 hectáreas adicionales.'),
(12, 'La casa de Olmedo', '-1.822946', '-79.558084', 34, 'Se asienta en la hacienda La Virginia, ubicada en el margen derecho del río Babahoyo, frente a la ciudad del mismo nombre.', 'La casa de Olmedo es uno de los atractivos más importantes de nuestro cantón, ya que aquí se firmo el tratado de la Virginia entre las fuerzas Nacionalistas y el General Juan José Flores. El Instituto Nacional de Patrimonio Cultural en ejercicio de las atribuciones que se le confiere la Ley de\r\nPatrimonio Cultural, declaró a la Hacienda La Virginia y la Casa de Olmedo, porque en ella José Joaquín de Olmedo pasaba largas temporadas bien perteneciendo al Patrimonio Cultural del Estado, a cargo de la Casa de la Cultura de la provincia de Los Ríos.\r\nPara comprender mejor de lo que significa la Casa de Olmedo “Un Patrimonio Histórico y Artístico es el conjunto de tres elementos naturales o culturales, materiales o inmateriales, heredados del pasado o creados en el presente, en dónde un determinado grupo de individuos reconoce sus señas de identidad.'),
(13, 'Bosque Tropical Fundación “Hola Vida', '-1.577419', ' -77.979872', 26, 'A 28 Km de la ciudad de Puyo, en el Km 16 de la vía Macas.', 'A 28 Km de la ciudad de Puyo, en el Km 16 de la vía Macas.\r\nEste atractivo cuenta con todas las características para ser considerado un "Complejo Turístico", ya que se puede observar, admirar y disfrutar de la selva, el río y la cascada.\r\n\r\nEl recorrido inicia a partir de las 5 cabañas de hospedaje las mismas que están construidas con materiales propios de la zona, y se encuentran perfectamente acondicionadas a las necesidades de los turistas que visitan "Hola Vida".'),
(15, 'Playa Cerro Brujo', '-0.837803', ' -89.412426', 30, 'Desde el puerto Baquerizo Moreno de dos formas, acuÃ¡tico y terrestre.', 'Es un cono de toba erosionado y que en varias partes estÃ¡ compuesto de lava tipo A - A. Se forma por lava de poca viscosidad que contiene poco gas y se rompe mientras se solidifica y es empujada por lava que aÃºn sigue fluyendo desde atrÃ¡s.\r\nCerro brujo es una hermosa playa de coral blanco, playa donde se puede nadar y observar pÃ¡jaros y lobos marinos, ademÃ¡s se puede practicar buceo de superficie. Ubicado en la costa norte de la isla San CristÃ³bal. \r\n\r\nEn los alrededores de la playa se puede observar aves marinas como piqueros de patas azules, piqueros de nazca, garzas, fragatas y aves costeras.'),
(16, 'Parque Nacional Cajas', '-2.845942', '-79.154864', 3, 'Cooperativa Occidental se lo toma en el Terminal Sur o Sector El Arenal. Teléfono: 07 2 856 691. Además puede tomar un Taxi y transporte turístico.', 'El nombre de Cajas es tomado por la forma de las montaÃ±as del sector dentro de las cuales se encuentran los lagos y lagunas.\r\n\r\nUna cama verde envuelve los parajes que dan vida a este parque. Es el lugar adecuado para el contacto con la naturaleza, la diversión, educación ambiental, turismo e investigación. Al caminar entre sus lagunas se admiran curiquingues, gaviotas andinas y otras aves del páramo.\r\n\r\nEn el Parque existen 235 lagunas bien definidas, entre las más importantes están Lagartococha, Osohuaycu, Mamamag Taitachungo, Quinoascocha, La Toreadora, Sunincocha, Cascarillas, Ventanas y Tinguishcocha.\r\n\r\nLos ríos Tomebamba, Mazín, Yanuncay y Miguir nacen en el Cajas y abastecen de agua potable a la ciudad de Cuenca; a su vez son los principales aportadores del Complejo Hidroeléctrico Paute.\r\n'),
(17, 'Volcán Sierra Negra', '-0.83Â°', ' -91.17Â°', 35, 'El volcán Sierra Negra se encuentra situado a 22 kilómetros de Puerto Villamil, la capital de Isabela, la mayor isla del archipiélago.', 'El volcán Sierra Negra es el más grande y uno de los más activos de las Islas. Su flanco septentrional usualmente está cubierto de nubes y neblina, lo que permite el crecimiento de la vegetación. Esta área es el sitio de dos de los asentamientos humanos más antiguos en Galápagos, Puerto Villamil, en la costa, y Santo Tomás, localizado a 20 kilómetros tierra adentro en las partes altas.\r\nEste volcán además presenta una de las calderas más grandes del mundo. Una vez que llegues hasta el filo del cráter del volcán, podrás descender a pie hasta las fumarolas ubicadas al fondo de la caldera de Sierra Negra.'),
(18, 'Los Humedales', '-0.961233', '-91.034775', 35, 'Los humedales del sur de la isla Isabela se encuentran dentro del cantón del mismo nombre.', 'Los humedales es una red de senderos, adyacentes a Puerto Villamil. Existen nueve senderos que comprenden los siguientes sitios: Muro de las Lágrimas, el Cerro Orchilla, el Estero, la Poza Escondida, Poza Redonda, Túnel del Estero, Playa del Amor, Mirador de los Tunos y Pozas Verdes, la Playita y el Cementerio.\r\nLos Humedales costeros son manglares y lagunas de aguas salobres formadas por filtraciones de agua marina y afluentes subterráneos de agua dulce que llegan desde las partes altas de la isla. Además son un área de alimentación importante para el pingüino de Galápagos y uno de los principales sitios de anidación de la tortuga verde.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mediostransporte`
--

CREATE TABLE IF NOT EXISTS `mediostransporte` (
`codTrans` int(11) NOT NULL,
  `transporte` varchar(200) NOT NULL,
  `codPadreTrans` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mediostransporte`
--

INSERT INTO `mediostransporte` (`codTrans`, `transporte`, `codPadreTrans`) VALUES
(1, 'Terrestre', 0),
(2, 'Aéreo', 0),
(5, 'Trolebus', 1),
(6, 'Maritimo', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regionprovincia`
--

CREATE TABLE IF NOT EXISTS `regionprovincia` (
`codRp` int(11) NOT NULL,
  `nombreRp` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `codPadreRp` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `regionprovincia`
--

INSERT INTO `regionprovincia` (`codRp`, `nombreRp`, `codPadreRp`) VALUES
(1, 'Costa', 0),
(2, 'Sierra', 0),
(3, 'Oriente', 0),
(4, 'Galapagos', 0),
(5, 'Morona Santiago', 3),
(6, 'Napo', 3),
(7, 'Orellana', 3),
(8, 'Pastaza', 3),
(9, 'Azuay', 2),
(10, 'Bolivar', 2),
(11, 'Cañar', 2),
(12, 'Carchi', 2),
(13, 'Chimborazo', 2),
(14, 'Cotopaxi', 2),
(15, 'Imbabura', 2),
(16, 'Loja', 2),
(17, 'Pichincha', 2),
(18, 'Tungurahua', 2),
(19, 'El Oro', 1),
(20, 'Esmeraldas', 1),
(21, 'Guayas', 1),
(22, 'Los Ríos', 1),
(23, 'Manabí', 1),
(24, 'Santa Elena', 1),
(25, 'Santo Domingo de los Tsáchilas', 1),
(26, 'Sucumbíos', 3),
(27, 'Zamora Chinchipe', 3),
(28, 'Galápagos', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurantes`
--

CREATE TABLE IF NOT EXISTS `restaurantes` (
`codRestaurante` int(11) NOT NULL,
  `nombreRestau` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `codCiudad` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `restaurantes`
--

INSERT INTO `restaurantes` (`codRestaurante`, `nombreRestau`, `direccion`, `codCiudad`) VALUES
(1, 'Pims Panecillo', 'Calle Melchor Aymerich, El Panecillo1', 2),
(2, 'Sweet & Coffee', 'Av. Francisco de Orellana # S/N intersección ', 1),
(3, 'Hola ola Cafe1', 'Calle 10 de Agosto y Calle primera A ', 17),
(4, 'La parrilla del ñato', 'Víctor Emilio Estrada 1219 y Laureles', 1),
(5, 'Raymipampa', 'Benigno Malo 8-59 ', 3),
(6, 'Roka Sushi Bar', 'Av. Bolívar, entre Quito y Guayaquil.', 4),
(7, 'El Horno', 'Rocafuerte 6-38 y Flores ', 5),
(8, 'Quino Restaurant', 'ROCA 740 Y GARCIA MORENO', 6),
(9, 'Lentejitas el Sabor', 'ROCAFUERTE 27-78 Y VENEZUELA', 7),
(10, 'Chugchucaras Rosita', 'Av. Eloy Alfaro 31-156', 9),
(11, 'Parriladas el Fogón', 'Av. 8 de Diciembre y J. J. Flores ', 10),
(12, 'El Quetzal', '9 de Octubre', 13),
(13, 'El Chonerito', 'Calle Cabaplan, 2 cuadras antes de la playa', 15),
(14, 'Rincón Marino', 'Malecón de la playa', 16),
(15, 'La esquina de Ales', 'Calle 105 y Avenida 109', 18),
(16, 'Restaurante Mar y Tierra', 'Av. Malecón 399 y calle 37', 20),
(17, 'Mimosa Grill', 'América y Tennis Club', 21),
(18, 'Chesco Pizzeria', 'Pichincha y Ayacucho', 22),
(19, '200 millas', 'Honorato Marquez', 24),
(20, 'Los Troncos', 'Gabriel Espinoza y Eloy Alfaro', 25),
(21, 'Mar, Tierra y Sabor', 'Francisco de Orellana y Amazonas', 26),
(22, 'Charlotte', 'Plaza del Mercado, 1 ', 28),
(23, 'Restaurante Hernán', 'Av. Baltra, junto al redondel la iguana ', 30),
(24, 'Marcelos', 'ColÃ³n', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurantetipoc`
--

CREATE TABLE IF NOT EXISTS `restaurantetipoc` (
  `codRestaurante` int(11) NOT NULL,
  `codTipoComida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `restaurantetipoc`
--

INSERT INTO `restaurantetipoc` (`codRestaurante`, `codTipoComida`) VALUES
(2, 7),
(2, 8),
(4, 5),
(5, 3),
(6, 9),
(7, 10),
(8, 3),
(9, 3),
(10, 3),
(11, 5),
(12, 8),
(13, 11),
(14, 11),
(15, 5),
(16, 11),
(17, 5),
(18, 10),
(19, 11),
(20, 5),
(21, 11),
(22, 8),
(23, 3),
(3, 8),
(24, 10),
(1, 5),
(1, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rp`
--

CREATE TABLE IF NOT EXISTS `rp` (
  `codRp` char(3) COLLATE utf8_spanish_ci NOT NULL,
  `nombreRp` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `codPadreRp` char(3) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rp`
--

INSERT INTO `rp` (`codRp`, `nombreRp`, `codPadreRp`) VALUES
('1', 'Costa', NULL),
('10', 'Napo', '3'),
('11', 'Orellana', '3'),
('12', 'Pastaza', '3'),
('13', 'Azuay', '2'),
('14', 'Bolívar', '2'),
('15', 'Cañar', '2'),
('16', 'Carchi', '2'),
('17', 'Chimborazo', '2'),
('18', 'Cotopaxi', '2'),
('19', 'Imbabura', '2'),
('2', 'Sierra', NULL),
('20', 'Loja', '2'),
('21', 'Pichincha', '2'),
('22', 'Tungurahua', '2'),
('23', 'Los Rios', '1'),
('24', 'Manabí', '1'),
('25', 'Santo Domingo de los Tsachilas', '2'),
('3', 'Oriente', NULL),
('4', 'Galápagos', NULL),
('5', 'Guayas', '1'),
('6', 'El Oro', '1'),
('7', 'Esmeraldas', '1'),
('8', 'Santa Elena', '1'),
('9', 'Morona Santiago', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
`codServicios` int(11) NOT NULL,
  `servicios` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`codServicios`, `servicios`) VALUES
(1, 'piscina'),
(2, 'sauna'),
(3, 'gimnasio'),
(4, 'wifi'),
(5, 'turco'),
(6, 'lavandería'),
(7, 'tv cable'),
(8, 'restaurante'),
(9, 'cafeteria'),
(10, 'bar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoatractivo`
--

CREATE TABLE IF NOT EXISTS `tipoatractivo` (
`codTipo` int(11) NOT NULL,
  `nombreTl` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `codPadreTl` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipoatractivo`
--

INSERT INTO `tipoatractivo` (`codTipo`, `nombreTl`, `codPadreTl`) VALUES
(1, 'Naturaleza', 0),
(2, 'Cultura e Historia', 0),
(3, 'Playas', 0),
(4, 'Cascada', 1),
(5, 'Ruinas', 1),
(6, 'Centro Histórico', 2),
(7, 'Cueva', 1),
(8, 'Bosque Protector', 1),
(9, 'Casa Patrimonial', 2),
(10, 'Reserva Ecológica', 1),
(11, 'Isla', 1),
(12, 'Volcán', 1),
(13, 'Sendero', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocomida`
--

CREATE TABLE IF NOT EXISTS `tipocomida` (
`codTipoComida` int(11) NOT NULL,
  `nombreComida` varchar(25) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipocomida`
--

INSERT INTO `tipocomida` (`codTipoComida`, `nombreComida`) VALUES
(1, 'mexicana'),
(2, 'gourmet'),
(3, 'típica'),
(4, 'picante'),
(5, 'carne'),
(6, 'pastas'),
(7, 'dulces'),
(8, 'cafes'),
(9, 'china'),
(10, 'pizzas'),
(11, 'mariscos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`codUsuario` int(11) NOT NULL,
  `nombreUser` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `contrasenia` varchar(25) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `passadmin` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codUsuario`, `nombreUser`, `contrasenia`, `correo`, `passadmin`) VALUES
(1, 'Luis Mena', 'lumena', 'lumena@hotmail.com', ''),
(2, 'Mario Rios', 'marios1999', 'maro99@hotmail.com', ''),
(3, 'Cristina Gutierrez', '12345678', 'crgutierrez@utpl.edu.ec', ''),
(4, 'Pamela', '1234', 'pame@gmail.com', ''),
(5, 'Junior', '', 'junito@gmail.com', '1234ab'),
(6, 'Lady', 'lady', 'lady1994@utpl.edu.ec', ''),
(7, 'fabiola', 'fabi', 'fabi@gmail.com', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
 ADD PRIMARY KEY (`codActividad`);

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
 ADD PRIMARY KEY (`codCiudad`), ADD UNIQUE KEY `codCiudad` (`codCiudad`), ADD KEY `codRp` (`codRp`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
 ADD PRIMARY KEY (`codComentario`), ADD KEY `codUsuario` (`codUsuario`), ADD KEY `codLugar` (`codLugar`);

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
 ADD PRIMARY KEY (`codFoto`), ADD KEY `codUsuario` (`codUsuario`), ADD KEY `codLugar` (`codLugar`);

--
-- Indices de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
 ADD PRIMARY KEY (`codHabitacion`);

--
-- Indices de la tabla `hoteles`
--
ALTER TABLE `hoteles`
 ADD PRIMARY KEY (`codHotel`), ADD KEY `codCiudad` (`codCiudad`);

--
-- Indices de la tabla `hoteleshabitaciones`
--
ALTER TABLE `hoteleshabitaciones`
 ADD KEY `codHotel` (`codHotel`), ADD KEY `codHabitacion` (`codHabitacion`);

--
-- Indices de la tabla `hotelesservicios`
--
ALTER TABLE `hotelesservicios`
 ADD KEY `codHotel` (`codHotel`), ADD KEY `codServicios` (`codServicios`);

--
-- Indices de la tabla `lugaractividad`
--
ALTER TABLE `lugaractividad`
 ADD KEY `codlugar` (`codlugar`), ADD KEY `codactividad` (`codactividad`);

--
-- Indices de la tabla `lugartipo`
--
ALTER TABLE `lugartipo`
 ADD KEY `codLugar` (`codLugar`), ADD KEY `codTipo` (`codTipo`);

--
-- Indices de la tabla `lugartrans`
--
ALTER TABLE `lugartrans`
 ADD KEY `codLugar` (`codLugar`), ADD KEY `codTrans` (`codTrans`);

--
-- Indices de la tabla `lugarturistico`
--
ALTER TABLE `lugarturistico`
 ADD PRIMARY KEY (`codLugar`), ADD KEY `codCiudad` (`codCiudad`);

--
-- Indices de la tabla `mediostransporte`
--
ALTER TABLE `mediostransporte`
 ADD PRIMARY KEY (`codTrans`);

--
-- Indices de la tabla `regionprovincia`
--
ALTER TABLE `regionprovincia`
 ADD PRIMARY KEY (`codRp`);

--
-- Indices de la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
 ADD PRIMARY KEY (`codRestaurante`), ADD KEY `codCiudad` (`codCiudad`);

--
-- Indices de la tabla `restaurantetipoc`
--
ALTER TABLE `restaurantetipoc`
 ADD KEY `codRestaurante` (`codRestaurante`), ADD KEY `codTipoComida` (`codTipoComida`);

--
-- Indices de la tabla `rp`
--
ALTER TABLE `rp`
 ADD PRIMARY KEY (`codRp`), ADD KEY `codPadreRp` (`codPadreRp`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
 ADD PRIMARY KEY (`codServicios`);

--
-- Indices de la tabla `tipoatractivo`
--
ALTER TABLE `tipoatractivo`
 ADD PRIMARY KEY (`codTipo`);

--
-- Indices de la tabla `tipocomida`
--
ALTER TABLE `tipocomida`
 ADD PRIMARY KEY (`codTipoComida`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`codUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
MODIFY `codActividad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
MODIFY `codCiudad` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
MODIFY `codComentario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
MODIFY `codFoto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
MODIFY `codHabitacion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `hoteles`
--
ALTER TABLE `hoteles`
MODIFY `codHotel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `lugarturistico`
--
ALTER TABLE `lugarturistico`
MODIFY `codLugar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `mediostransporte`
--
ALTER TABLE `mediostransporte`
MODIFY `codTrans` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `regionprovincia`
--
ALTER TABLE `regionprovincia`
MODIFY `codRp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
MODIFY `codRestaurante` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
MODIFY `codServicios` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tipoatractivo`
--
ALTER TABLE `tipoatractivo`
MODIFY `codTipo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `tipocomida`
--
ALTER TABLE `tipocomida`
MODIFY `codTipoComida` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
MODIFY `codUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
ADD CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`codRp`) REFERENCES `regionprovincia` (`codRp`);

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`codUsuario`) REFERENCES `usuario` (`codUsuario`),
ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`codLugar`) REFERENCES `lugarturistico` (`codLugar`);

--
-- Filtros para la tabla `fotos`
--
ALTER TABLE `fotos`
ADD CONSTRAINT `fotos_ibfk_1` FOREIGN KEY (`codUsuario`) REFERENCES `usuario` (`codUsuario`),
ADD CONSTRAINT `fotos_ibfk_2` FOREIGN KEY (`codLugar`) REFERENCES `lugarturistico` (`codLugar`);

--
-- Filtros para la tabla `hoteles`
--
ALTER TABLE `hoteles`
ADD CONSTRAINT `hoteles_ibfk_1` FOREIGN KEY (`codCiudad`) REFERENCES `ciudad` (`codCiudad`);

--
-- Filtros para la tabla `hoteleshabitaciones`
--
ALTER TABLE `hoteleshabitaciones`
ADD CONSTRAINT `hoteleshabitaciones_ibfk_1` FOREIGN KEY (`codHotel`) REFERENCES `hoteles` (`codHotel`),
ADD CONSTRAINT `hoteleshabitaciones_ibfk_2` FOREIGN KEY (`codHabitacion`) REFERENCES `habitaciones` (`codHabitacion`);

--
-- Filtros para la tabla `hotelesservicios`
--
ALTER TABLE `hotelesservicios`
ADD CONSTRAINT `hotelesservicios_ibfk_1` FOREIGN KEY (`codHotel`) REFERENCES `hoteles` (`codHotel`),
ADD CONSTRAINT `hotelesservicios_ibfk_2` FOREIGN KEY (`codServicios`) REFERENCES `servicios` (`codServicios`);

--
-- Filtros para la tabla `lugaractividad`
--
ALTER TABLE `lugaractividad`
ADD CONSTRAINT `lugaractividad_ibfk_1` FOREIGN KEY (`codlugar`) REFERENCES `lugarturistico` (`codLugar`),
ADD CONSTRAINT `lugaractividad_ibfk_2` FOREIGN KEY (`codactividad`) REFERENCES `actividades` (`codActividad`);

--
-- Filtros para la tabla `lugartipo`
--
ALTER TABLE `lugartipo`
ADD CONSTRAINT `lugartipo_ibfk_1` FOREIGN KEY (`codLugar`) REFERENCES `lugarturistico` (`codLugar`),
ADD CONSTRAINT `lugartipo_ibfk_2` FOREIGN KEY (`codTipo`) REFERENCES `tipoatractivo` (`codTipo`);

--
-- Filtros para la tabla `lugartrans`
--
ALTER TABLE `lugartrans`
ADD CONSTRAINT `lugartrans_ibfk_1` FOREIGN KEY (`codLugar`) REFERENCES `lugarturistico` (`codLugar`),
ADD CONSTRAINT `lugartrans_ibfk_2` FOREIGN KEY (`codLugar`) REFERENCES `lugarturistico` (`codLugar`),
ADD CONSTRAINT `lugartrans_ibfk_3` FOREIGN KEY (`codTrans`) REFERENCES `mediostransporte` (`codTrans`);

--
-- Filtros para la tabla `lugarturistico`
--
ALTER TABLE `lugarturistico`
ADD CONSTRAINT `lugarturistico_ibfk_1` FOREIGN KEY (`codCiudad`) REFERENCES `ciudad` (`codCiudad`);

--
-- Filtros para la tabla `restaurantes`
--
ALTER TABLE `restaurantes`
ADD CONSTRAINT `restaurantes_ibfk_1` FOREIGN KEY (`codCiudad`) REFERENCES `ciudad` (`codCiudad`);

--
-- Filtros para la tabla `restaurantetipoc`
--
ALTER TABLE `restaurantetipoc`
ADD CONSTRAINT `restaurantetipoc_ibfk_1` FOREIGN KEY (`codRestaurante`) REFERENCES `restaurantes` (`codRestaurante`),
ADD CONSTRAINT `restaurantetipoc_ibfk_2` FOREIGN KEY (`codTipoComida`) REFERENCES `tipocomida` (`codTipoComida`);

--
-- Filtros para la tabla `rp`
--
ALTER TABLE `rp`
ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`codPadreRp`) REFERENCES `rp` (`codRp`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
