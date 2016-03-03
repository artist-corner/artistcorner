-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-03-2016 a las 12:06:59
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_artistscorner`
--
CREATE DATABASE IF NOT EXISTS `bd_artistscorner` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `bd_artistscorner`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_arte`
--
-- Creación: 03-03-2016 a las 10:58:51
--

DROP TABLE IF EXISTS `tbl_arte`;
CREATE TABLE IF NOT EXISTS `tbl_arte` (
  `id_Arte` int(11) NOT NULL,
  `nombre_Arte` varchar(30) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELACIONES PARA LA TABLA `tbl_arte`:
--

--
-- Volcado de datos para la tabla `tbl_arte`
--

INSERT INTO `tbl_arte` (`id_Arte`, `nombre_Arte`) VALUES
(1, 'Musica'),
(2, 'Imagen'),
(3, 'Video'),
(4, 'Escritura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comentarioseventos`
--
-- Creación: 03-03-2016 a las 10:58:51
--

DROP TABLE IF EXISTS `tbl_comentarioseventos`;
CREATE TABLE IF NOT EXISTS `tbl_comentarioseventos` (
  `id_Comentarios` int(11) NOT NULL,
  `Comentario` text COLLATE utf8_bin,
  `Usuario` int(11) DEFAULT NULL,
  `id_Evento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELACIONES PARA LA TABLA `tbl_comentarioseventos`:
--   `id_Evento`
--       `tbl_eventos` -> `id_Eventos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cometariosobra`
--
-- Creación: 03-03-2016 a las 10:58:51
--

DROP TABLE IF EXISTS `tbl_cometariosobra`;
CREATE TABLE IF NOT EXISTS `tbl_cometariosobra` (
  `id_comentario` int(11) NOT NULL,
  `comentario` text COLLATE utf8_bin,
  `usuario` int(11) DEFAULT NULL,
  `id_Obra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELACIONES PARA LA TABLA `tbl_cometariosobra`:
--   `id_Obra`
--       `tbl_obra` -> `id_Obra`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estilo`
--
-- Creación: 03-03-2016 a las 10:58:51
--

DROP TABLE IF EXISTS `tbl_estilo`;
CREATE TABLE IF NOT EXISTS `tbl_estilo` (
  `id_Estilo` int(11) NOT NULL,
  `Nombre_Estilo` varchar(40) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELACIONES PARA LA TABLA `tbl_estilo`:
--

--
-- Volcado de datos para la tabla `tbl_estilo`
--

INSERT INTO `tbl_estilo` (`id_Estilo`, `Nombre_Estilo`) VALUES
(33, 'Rock N` Roll'),
(34, 'Pop'),
(35, 'Electrónica'),
(36, 'Rap'),
(37, 'Reggae'),
(38, 'Heavy Metal'),
(39, 'Reggaeton'),
(40, 'Blues'),
(41, 'Alternativo'),
(42, 'Jazz'),
(43, 'Punk'),
(44, 'Grunge'),
(45, 'House'),
(59, 'Pintura'),
(60, 'Dibujo'),
(61, 'Fotografia '),
(62, 'photoshop'),
(68, 'Oda'),
(69, 'Tragedia'),
(70, 'Melodrama'),
(71, 'Tragicomedia'),
(72, 'Farsa'),
(73, 'Ensayo'),
(74, 'Biografia'),
(75, 'Cronica'),
(76, 'Guion'),
(77, 'Fábula'),
(78, 'Poesia'),
(80, 'Novela'),
(81, 'Cortometraje'),
(82, 'Animacion'),
(83, 'Largometraje'),
(84, 'Videoclip'),
(85, 'Danza'),
(86, 'Sketch');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estilo_arte`
--
-- Creación: 03-03-2016 a las 10:58:51
--

DROP TABLE IF EXISTS `tbl_estilo_arte`;
CREATE TABLE IF NOT EXISTS `tbl_estilo_arte` (
  `id_Estilo_Arte` int(11) NOT NULL,
  `id_Arte` int(11) DEFAULT NULL,
  `id_Estilo` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELACIONES PARA LA TABLA `tbl_estilo_arte`:
--   `id_Arte`
--       `tbl_arte` -> `id_Arte`
--   `id_Estilo`
--       `tbl_estilo` -> `id_Estilo`
--

--
-- Volcado de datos para la tabla `tbl_estilo_arte`
--

INSERT INTO `tbl_estilo_arte` (`id_Estilo_Arte`, `id_Arte`, `id_Estilo`) VALUES
(1, 1, 33),
(2, 1, 34),
(3, 1, 35),
(4, 1, 36),
(5, 1, 37),
(6, 1, 38),
(7, 1, 39),
(8, 1, 40),
(9, 1, 41),
(10, 1, 42),
(11, 1, 43),
(12, 1, 44),
(13, 1, 45),
(14, 2, 59),
(15, 2, 60),
(16, 2, 61),
(17, 2, 62),
(18, 3, 68),
(19, 3, 69),
(20, 3, 70),
(21, 3, 71),
(22, 3, 72),
(23, 3, 73),
(24, 3, 74),
(25, 3, 75),
(26, 3, 76),
(27, 3, 77),
(28, 3, 78),
(29, 3, 80),
(30, 4, 81),
(31, 4, 82),
(32, 4, 83),
(33, 4, 84),
(34, 4, 85);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_eventos`
--
-- Creación: 03-03-2016 a las 10:58:51
--

DROP TABLE IF EXISTS `tbl_eventos`;
CREATE TABLE IF NOT EXISTS `tbl_eventos` (
  `id_Eventos` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` text COLLATE utf8_bin,
  `fecha` date DEFAULT NULL,
  `lugar` int(100) DEFAULT NULL,
  `Id_Usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELACIONES PARA LA TABLA `tbl_eventos`:
--   `Id_Usuario`
--       `tbl_usuario` -> `id_Usuario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_likes`
--
-- Creación: 03-03-2016 a las 10:58:51
--

DROP TABLE IF EXISTS `tbl_likes`;
CREATE TABLE IF NOT EXISTS `tbl_likes` (
  `id_like` int(11) NOT NULL,
  `id_Obra` int(11) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELACIONES PARA LA TABLA `tbl_likes`:
--   `id_Obra`
--       `tbl_obra` -> `id_Obra`
--

--
-- Volcado de datos para la tabla `tbl_likes`
--

INSERT INTO `tbl_likes` (`id_like`, `id_Obra`, `usuario`) VALUES
(1, 3, NULL),
(2, 5, NULL),
(3, 3, NULL),
(4, 3, NULL),
(5, 5, NULL),
(6, 3, NULL),
(7, 3, NULL),
(8, 3, NULL),
(9, 4, NULL),
(10, 4, NULL),
(11, 4, NULL),
(12, 4, NULL),
(13, 4, NULL),
(14, 4, NULL),
(15, 3, NULL),
(16, 3, NULL),
(17, 4, NULL),
(18, 3, NULL),
(19, 8, NULL),
(20, 4, NULL),
(21, 5, NULL),
(22, 4, NULL),
(23, 3, NULL),
(24, 3, NULL),
(25, 4, NULL),
(26, 18, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_obra`
--
-- Creación: 03-03-2016 a las 10:58:51
--

DROP TABLE IF EXISTS `tbl_obra`;
CREATE TABLE IF NOT EXISTS `tbl_obra` (
  `id_Obra` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `num_Descargas` int(11) DEFAULT '0',
  `archivo` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` text COLLATE utf8_bin,
  `fecha` date DEFAULT NULL,
  `portada` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `id_Estilo_Arte` int(11) DEFAULT NULL,
  `id_Usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELACIONES PARA LA TABLA `tbl_obra`:
--   `id_Estilo_Arte`
--       `tbl_estilo_arte` -> `id_Estilo_Arte`
--   `id_Usuario`
--       `tbl_usuario` -> `id_Usuario`
--

--
-- Volcado de datos para la tabla `tbl_obra`
--

INSERT INTO `tbl_obra` (`id_Obra`, `titulo`, `num_Descargas`, `archivo`, `descripcion`, `fecha`, `portada`, `id_Estilo_Arte`, `id_Usuario`) VALUES
(3, 'The Bridge', 124, 'imagen1.jpg', 'Personaje del juego World of Warcfarft', '2016-02-03', 'imagen1.jpg', 2, 2),
(4, 'El cencerro', 124, 'imagen2.jpg', 'Con esta escultura he intentado plasmar el maltrato animal en las granjas modernas.', '2016-02-03', 'imagen1.jpg', 2, 6),
(5, 'El cencerro', 124, 'imagen2.jpg', 'Con esta escultura he intentado plasmar el maltrato animal en las granjas modernas.', '2016-02-03', 'imagen1.jpg', 2, 3),
(8, 'algo', 0, '{9E80B24F-DBE8-39CA-9D1E-1BB089B6A728}.png', 'cosas', NULL, 'imagen2.jpg', 2, 3),
(12, 'algo', 0, '{1DF4BC30-2573-4D31-5AE9-A97B91A65B49}.png', 'red con portada', '2016-02-26', 'DEATH_NOTE_L_wallpaper-1-.jpg', 2, NULL),
(18, 'Artu4', 0, '{08F408E8-8A94-7E04-4889-34D7F98824CF}.png', '', '2016-03-02', '{24425295-35B9-3109-87AD-397E6B193DCB}.', 15, 12),
(19, 'dfhdf', 0, '{310190A2-A53A-2491-1F55-FB5F197FEE16}.jpg', 'dfhsdf', '2016-03-02', '', 4, 12),
(20, '123qwe', 0, '{AF8A5B0C-C958-68A0-D8B4-0A58A63F7853}.jpg', 'dfhdsf', '2016-03-02', NULL, 16, 12),
(21, 'fdhsdf', 0, '{2D03F93B-B23C-21E1-E0C9-F3E15FDED0D7}.jpg', 'fdhdfh', '2016-03-02', '{52B38C69-4361-C82E-7EB5-A23E4E98B519}.jpg', 15, 12),
(22, 'sdgsd', 0, '{9D1E4AA9-8818-FC2E-3441-E03D88DC14E9}.jpg', 'dcbgdfzhfgchj', '2016-03-02', 'NULL', 15, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tagnube`
--
-- Creación: 03-03-2016 a las 10:58:51
--

DROP TABLE IF EXISTS `tbl_tagnube`;
CREATE TABLE IF NOT EXISTS `tbl_tagnube` (
  `id_tagnube` int(11) NOT NULL,
  `tag` text COLLATE utf8_bin,
  `id_Obra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELACIONES PARA LA TABLA `tbl_tagnube`:
--   `id_Obra`
--       `tbl_obra` -> `id_Obra`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipousuario`
--
-- Creación: 03-03-2016 a las 10:58:51
--

DROP TABLE IF EXISTS `tbl_tipousuario`;
CREATE TABLE IF NOT EXISTS `tbl_tipousuario` (
  `id_TipoUsuario` int(11) NOT NULL,
  `nombreTipousuario` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` text COLLATE utf8_bin
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELACIONES PARA LA TABLA `tbl_tipousuario`:
--

--
-- Volcado de datos para la tabla `tbl_tipousuario`
--

INSERT INTO `tbl_tipousuario` (`id_TipoUsuario`, `nombreTipousuario`, `descripcion`) VALUES
(1, 'Webmaster', 'Usuario a cargo del mantenimiento y desarrollo del sitio web.'),
(2, 'Artista', 'Usuario básico. Puede subir obras, crear eventos, comentar cualquier página, y reportar obras.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--
-- Creación: 03-03-2016 a las 11:04:21
--

DROP TABLE IF EXISTS `tbl_usuario`;
CREATE TABLE IF NOT EXISTS `tbl_usuario` (
  `id_Usuario` int(11) NOT NULL,
  `usuario` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `nombre` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `apellido` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `mail` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `pass` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `descripcionUser` text COLLATE utf8_bin,
  `imagen` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `id_TipoUsuario` int(11) DEFAULT '2',
  `Estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELACIONES PARA LA TABLA `tbl_usuario`:
--   `id_TipoUsuario`
--       `tbl_tipousuario` -> `id_TipoUsuario`
--

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id_Usuario`, `usuario`, `nombre`, `apellido`, `mail`, `pass`, `descripcionUser`, `imagen`, `id_TipoUsuario`, `Estado`) VALUES
(1, 'Admin', 'Admin', NULL, '8706.joan23@fje.edu', '1234', NULL, NULL, 1, 1),
(2, 'Jose', 'Jose Luis', 'Maseda', '33595.joan23@fje.edu', '1234', 'No se ni como pero hago dibujos de puta madre', 'perfiljose.jpg', 2, 1),
(3, 'Alejan', 'Alejandro', 'Moreno', '96034.joan23@fje.edu', '1234', NULL, 'imagen1.jpg', 2, 1),
(4, 'Ronin', 'Eric', 'Sanchez', 'sanchezChertoEric@gmail.com', '1234', NULL, 'imagen1.jpg', 2, 1),
(6, 'elmanu19', 'manuel', 'perez sanchez', 'manu@gmail.com', '1234', NULL, '', 2, 1),
(8, 'LeandroGado', 'Leandro', 'Gado', 'leandrogado@gmail.com', '1234', 'estoy drogado', 'matthewfit.jpg', 2, 1),
(12, 'mathewfit', 'Mateo', 'Hermosillas', 'mathewfit@gmail.com', '1234', 'fullbody', '', 2, 1),
(14, 'felipecalamar', 'Felipe', 'Calamar', 'felipecalamar@gmail.com', '1234', 'soy un calamar y me llamo Felipe', 'hipster.png', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_arte`
--
ALTER TABLE `tbl_arte`
  ADD PRIMARY KEY (`id_Arte`);

--
-- Indices de la tabla `tbl_comentarioseventos`
--
ALTER TABLE `tbl_comentarioseventos`
  ADD PRIMARY KEY (`id_Comentarios`),
  ADD KEY `id_Comentarios` (`id_Comentarios`),
  ADD KEY `id_Comentarios_2` (`id_Comentarios`);

--
-- Indices de la tabla `tbl_cometariosobra`
--
ALTER TABLE `tbl_cometariosobra`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_comentario` (`id_comentario`),
  ADD KEY `id_comentario_2` (`id_comentario`),
  ADD KEY `id_comentario_3` (`id_comentario`);

--
-- Indices de la tabla `tbl_estilo`
--
ALTER TABLE `tbl_estilo`
  ADD PRIMARY KEY (`id_Estilo`),
  ADD KEY `id_Estilo` (`id_Estilo`),
  ADD KEY `id_Estilo_2` (`id_Estilo`),
  ADD KEY `id_Estilo_3` (`id_Estilo`);

--
-- Indices de la tabla `tbl_estilo_arte`
--
ALTER TABLE `tbl_estilo_arte`
  ADD PRIMARY KEY (`id_Estilo_Arte`);

--
-- Indices de la tabla `tbl_eventos`
--
ALTER TABLE `tbl_eventos`
  ADD PRIMARY KEY (`id_Eventos`),
  ADD KEY `id_Eventos` (`id_Eventos`),
  ADD KEY `id_Eventos_2` (`id_Eventos`);

--
-- Indices de la tabla `tbl_likes`
--
ALTER TABLE `tbl_likes`
  ADD PRIMARY KEY (`id_like`),
  ADD KEY `id_like` (`id_like`),
  ADD KEY `id_like_2` (`id_like`);

--
-- Indices de la tabla `tbl_obra`
--
ALTER TABLE `tbl_obra`
  ADD PRIMARY KEY (`id_Obra`),
  ADD KEY `id_Obra` (`id_Obra`),
  ADD KEY `id_Obra_2` (`id_Obra`);

--
-- Indices de la tabla `tbl_tagnube`
--
ALTER TABLE `tbl_tagnube`
  ADD PRIMARY KEY (`id_tagnube`),
  ADD KEY `id_tagnube` (`id_tagnube`),
  ADD KEY `id_tagnube_2` (`id_tagnube`);

--
-- Indices de la tabla `tbl_tipousuario`
--
ALTER TABLE `tbl_tipousuario`
  ADD PRIMARY KEY (`id_TipoUsuario`),
  ADD KEY `id_TipoUsuario` (`id_TipoUsuario`),
  ADD KEY `id_TipoUsuario_2` (`id_TipoUsuario`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`id_Usuario`),
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `id_Usuario` (`id_Usuario`),
  ADD KEY `id_Usuario_2` (`id_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_arte`
--
ALTER TABLE `tbl_arte`
  MODIFY `id_Arte` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tbl_comentarioseventos`
--
ALTER TABLE `tbl_comentarioseventos`
  MODIFY `id_Comentarios` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_cometariosobra`
--
ALTER TABLE `tbl_cometariosobra`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_estilo`
--
ALTER TABLE `tbl_estilo`
  MODIFY `id_Estilo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT de la tabla `tbl_estilo_arte`
--
ALTER TABLE `tbl_estilo_arte`
  MODIFY `id_Estilo_Arte` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `tbl_eventos`
--
ALTER TABLE `tbl_eventos`
  MODIFY `id_Eventos` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_likes`
--
ALTER TABLE `tbl_likes`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `tbl_obra`
--
ALTER TABLE `tbl_obra`
  MODIFY `id_Obra` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `tbl_tagnube`
--
ALTER TABLE `tbl_tagnube`
  MODIFY `id_tagnube` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_tipousuario`
--
ALTER TABLE `tbl_tipousuario`
  MODIFY `id_TipoUsuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `id_Usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
