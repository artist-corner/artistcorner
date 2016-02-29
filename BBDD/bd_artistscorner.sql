-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-02-2016 a las 11:58:43
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
-- Creación: 29-02-2016 a las 10:16:21
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
-- Creación: 29-02-2016 a las 10:10:09
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
-- Creación: 29-02-2016 a las 10:10:09
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
-- Creación: 29-02-2016 a las 10:18:16
--

DROP TABLE IF EXISTS `tbl_estilo`;
CREATE TABLE IF NOT EXISTS `tbl_estilo` (
  `id_Estilo` int(11) NOT NULL,
  `Nombre_Genero` varchar(40) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELACIONES PARA LA TABLA `tbl_estilo`:
--

--
-- Volcado de datos para la tabla `tbl_estilo`
--

INSERT INTO `tbl_estilo` (`id_Estilo`, `Nombre_Genero`) VALUES
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
-- Creación: 29-02-2016 a las 10:13:19
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
-- Creación: 29-02-2016 a las 10:31:48
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
-- Creación: 29-02-2016 a las 10:10:09
--

DROP TABLE IF EXISTS `tbl_likes`;
CREATE TABLE IF NOT EXISTS `tbl_likes` (
  `id_like` int(11) NOT NULL,
  `id_Obra` int(11) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELACIONES PARA LA TABLA `tbl_likes`:
--   `id_Obra`
--       `tbl_obra` -> `id_Obra`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_obra`
--
-- Creación: 29-02-2016 a las 10:31:16
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
  `likes` int(11) DEFAULT '0',
  `id_Estilo_Arte` int(11) DEFAULT NULL,
  `id_Usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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

INSERT INTO `tbl_obra` (`id_Obra`, `titulo`, `num_Descargas`, `archivo`, `descripcion`, `fecha`, `portada`, `likes`, `id_Estilo_Arte`, `id_Usuario`) VALUES
(3, 'The Bridge', 124, 'cancion1.mp3', 'Canción "the Bridge" ', '2016-02-03', 'imagen1.jpg', 150, NULL, 2),
(4, 'El cencerro', 124, 'imagen2.jpg', 'Con esta escultura he intentado plasmar el maltrato animal en las granjas modernas.', '2016-02-03', '', 140, NULL, 2),
(5, 'El cencerro', 124, 'imagen2.jpg', 'Con esta escultura he intentado plasmar el maltrato animal en las granjas modernas.', '2016-02-03', 'imagen1.jpg', 140, NULL, 2),
(8, 'algo', 0, '{9E80B24F-DBE8-39CA-9D1E-1BB089B6A728}.png', 'cosas', NULL, NULL, 0, NULL, NULL),
(12, 'algo', 0, '{1DF4BC30-2573-4D31-5AE9-A97B91A65B49}.png', 'red con portada', '2016-02-26', 'DEATH_NOTE_L_wallpaper-1-.jpg', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tagnube`
--
-- Creación: 29-02-2016 a las 10:10:09
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
-- Creación: 29-02-2016 a las 10:10:09
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
-- Creación: 29-02-2016 a las 10:10:09
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
  `id_TipoUsuario` int(11) DEFAULT '2'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELACIONES PARA LA TABLA `tbl_usuario`:
--   `id_TipoUsuario`
--       `tbl_tipousuario` -> `id_TipoUsuario`
--

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id_Usuario`, `usuario`, `nombre`, `apellido`, `mail`, `pass`, `descripcionUser`, `imagen`, `id_TipoUsuario`) VALUES
(1, 'Admin', 'Admin', NULL, '8706.joan23@fje.edu', '1234', NULL, NULL, 1),
(2, 'Jose', 'Jose Luis', 'Maseda', '33595.joan23@fje.edu', '1234', NULL, 'imagen1.jpg', 2),
(3, 'Alejan', 'Alejandro', 'Moreno', '96034.joan23@fje.edu', '1234', NULL, 'imagen1.jpg', 2),
(4, 'Ronin', 'Eric', 'Sanchez', 'sanchezChertoEric@gmail.com', '1234', NULL, 'imagen1.jpg', 2),
(6, 'elmanu19', 'manuel', 'perez sanchez', 'manu@gmail.com', '1234', NULL, '', 2);

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
  MODIFY `id_Estilo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=90;
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
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_obra`
--
ALTER TABLE `tbl_obra`
  MODIFY `id_Obra` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
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
  MODIFY `id_Usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;