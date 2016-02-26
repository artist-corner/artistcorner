-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2016 a las 12:58:41
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estructura de tabla para la tabla `tbl_comentarioseventos`
--

CREATE TABLE IF NOT EXISTS `tbl_comentarioseventos` (
  `id_Comentarios` int(11) NOT NULL,
  `Comentario` text COLLATE utf8_bin,
  `Usuario` int(11) DEFAULT NULL,
  `id_Evento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cometariosobra`
--

CREATE TABLE IF NOT EXISTS `tbl_cometariosobra` (
  `id_comentario` int(11) NOT NULL,
  `comentario` text COLLATE utf8_bin,
  `usuario` int(11) DEFAULT NULL,
  `id_Obra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estilo`
--

CREATE TABLE IF NOT EXISTS `tbl_estilo` (
  `id_Estilo` int(11) NOT NULL,
  `Nombre_Arte` enum('Música','Pintura','Literatura','Audiovisuales') COLLATE utf8_bin DEFAULT NULL,
  `Nombre_Genero` enum('ArtDecó','Barroco','Expresionismo','Futurismo','Gótico','Historicista','Modernismo','MovimientoModerno','Neoclasismo','Neogótico','Postmodernismo','Renacimiento','Rococó','Romántico','Ballet','Capoeira','HipHop','Salsa','Swing','Folclórica','Salón','Deportiva','Mambo','Funky','Estatua','Relieves','Busto','Torso','Criselefantina','Arquitectónica','Cinética','Rock N` Roll','Pop','Electrónica','Rap','Reggae','Heavy Metal','Reggaeton','Blues','Alternativo','Jazz','Punk','Grunge','House','Comedia','Musical','Pantomima','Performance','Improvisación','Sombras','TiteresMarionetas','Politico','Infantil','Cuentacuentos','Experimental','abstracto','Cubismo','Dadaísmo','Expresionismo','Hiperrealista','Impresionista','Realismo','Romanticismo','Prerrafaelismo','Oda','Tragedia','Melodrama','Tragicomedia','Farsa','Ensayo','Biografia','Cronica','Epistola','Fábula','Poema','Tratado','Novela','Drama','Acción','Aventura','Terror','CienciaFicción','Suspense','Fantasía','Histórico') COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_estilo`
--

INSERT INTO `tbl_estilo` (`id_Estilo`, `Nombre_Arte`, `Nombre_Genero`) VALUES
(33, 'Música', 'Rock N` Roll'),
(34, 'Música', 'Pop'),
(35, 'Música', 'Electrónica'),
(36, 'Música', 'Rap'),
(37, 'Música', 'Reggae'),
(38, 'Música', 'Heavy Metal'),
(39, 'Música', 'Reggaeton'),
(40, 'Música', 'Blues'),
(41, 'Música', 'Alternativo'),
(42, 'Música', 'Jazz'),
(43, 'Música', 'Punk'),
(44, 'Música', 'Grunge'),
(45, 'Música', 'House'),
(59, 'Pintura', 'abstracto'),
(60, 'Pintura', 'Cubismo'),
(61, 'Pintura', 'Dadaísmo'),
(62, 'Pintura', 'Expresionismo'),
(63, 'Pintura', 'Hiperrealista'),
(64, 'Pintura', 'Impresionista'),
(65, 'Pintura', 'Realismo'),
(66, 'Pintura', 'Romanticismo'),
(67, 'Pintura', 'Prerrafaelismo'),
(68, 'Literatura', 'Oda'),
(69, 'Literatura', 'Tragedia'),
(70, 'Literatura', 'Melodrama'),
(71, 'Literatura', 'Tragicomedia'),
(72, 'Literatura', 'Farsa'),
(73, 'Literatura', 'Ensayo'),
(74, 'Literatura', 'Biografia'),
(75, 'Literatura', 'Cronica'),
(76, 'Literatura', 'Epistola'),
(77, 'Literatura', 'Fábula'),
(78, 'Literatura', 'Poema'),
(79, 'Literatura', 'Tratado'),
(80, 'Literatura', 'Novela'),
(81, 'Literatura', 'Drama'),
(82, 'Audiovisuales', 'Comedia'),
(83, 'Audiovisuales', 'Acción'),
(84, 'Audiovisuales', 'Aventura'),
(85, 'Audiovisuales', 'Terror'),
(86, 'Audiovisuales', 'CienciaFicción'),
(87, 'Audiovisuales', 'Suspense'),
(88, 'Audiovisuales', 'Fantasía'),
(89, 'Audiovisuales', 'Histórico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estilo_obra`
--

CREATE TABLE IF NOT EXISTS `tbl_estilo_obra` (
  `id_Estilo_Obra` int(11) NOT NULL,
  `id_Obra` int(11) DEFAULT NULL,
  `id_Estilo` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_estilo_obra`
--

INSERT INTO `tbl_estilo_obra` (`id_Estilo_Obra`, `id_Obra`, `id_Estilo`) VALUES
(2, 3, 2),
(3, 4, 2),
(9, 3, 4),
(10, 3, NULL),
(11, 4, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_eventos`
--

CREATE TABLE IF NOT EXISTS `tbl_eventos` (
  `id_Eventos` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `Id_Usuario` int(11) DEFAULT NULL,
  `descripcion` text COLLATE utf8_bin,
  `fecha` date DEFAULT NULL,
  `lugar` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_likes`
--

CREATE TABLE IF NOT EXISTS `tbl_likes` (
  `id_like` int(11) NOT NULL,
  `id_Obra` int(11) DEFAULT NULL,
  `usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_obra`
--

CREATE TABLE IF NOT EXISTS `tbl_obra` (
  `id_Obra` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Arte` enum('Musica','Pintura','Literatura','Audiovisuales') COLLATE utf8_bin DEFAULT NULL,
  `num_Descargas` int(11) DEFAULT '0',
  `archivo` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` text COLLATE utf8_bin,
  `id_Usuario` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `portada` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `likes` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_obra`
--

INSERT INTO `tbl_obra` (`id_Obra`, `titulo`, `Arte`, `num_Descargas`, `archivo`, `descripcion`, `id_Usuario`, `fecha`, `portada`, `likes`) VALUES
(3, 'The Bridge', 'Musica', 124, 'cancion1.mp3', 'Canción "the Bridge" ', 2, '2016-02-03', 'imagen1.jpg', 150),
(4, 'El cencerro', 'Pintura', 124, 'imagen2.jpg', 'Con esta escultura he intentado plasmar el maltrato animal en las granjas modernas.', 2, '2016-02-03', '', 140),
(5, 'El cencerro', 'Pintura', 124, 'imagen2.jpg', 'Con esta escultura he intentado plasmar el maltrato animal en las granjas modernas.', 2, '2016-02-03', 'imagen1.jpg', 140),
(8, 'algo', NULL, 0, '{9E80B24F-DBE8-39CA-9D1E-1BB089B6A728}.png', 'cosas', NULL, NULL, NULL, 0),
(12, 'algo', NULL, 0, '{1DF4BC30-2573-4D31-5AE9-A97B91A65B49}.png', 'red con portada', NULL, '2016-02-26', 'DEATH_NOTE_L_wallpaper-1-.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tagnube`
--

CREATE TABLE IF NOT EXISTS `tbl_tagnube` (
  `id_tagnube` int(11) NOT NULL,
  `tag` text COLLATE utf8_bin,
  `id_Obra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipousuario`
--

CREATE TABLE IF NOT EXISTS `tbl_tipousuario` (
  `id_TipoUsuario` int(11) NOT NULL,
  `nombreTipousuario` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` text COLLATE utf8_bin
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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

CREATE TABLE IF NOT EXISTS `tbl_usuario` (
  `id_Usuario` int(11) NOT NULL,
  `usuario` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `nombre` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `apellido` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `mail` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `pass` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `descripcionUser` text COLLATE utf8_bin,
  `imagen` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `id_TipoUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id_Usuario`, `usuario`, `nombre`, `apellido`, `mail`, `pass`, `descripcionUser`, `imagen`, `id_TipoUsuario`) VALUES
(1, 'Admin', 'Admin', NULL, '8706.joan23@fje.edu', '1234', 'Usuario webmaster', NULL, 1),
(2, 'Jose', 'Jose Luis', 'Maseda', '33595.joan23@fje.edu', '1234', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In elit augue, pellentesque et dapibus at, tempus euismod justo. Donec eget enim volutpat, rhoncus dui at, condimentum dui. Aenean viverra tortor eget lacinia congue. Pellentesque vestibulum, tellus vitae commodo aliquet, dolor nisi maximus diam, eu sodales eros lectus ac massa. Aliquam iaculis rutrum euismod. Mauris metus quam, ullamcorper ac consectetur id, sagittis vitae ligula. Aliquam sem ex, pharetra vitae sagittis nec, vestibulum sollicitudin magna. Morbi et pretium nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac euismod velit. Mauris venenatis mattis aliquam. Donec cursus interdum felis, sed imperdiet tellus.', 'imagen1.jpg', 2),
(3, 'Alejan', 'Alejandro', 'Moreno', '96034.joan23@fje.edu', '1234', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In elit augue, pellentesque et dapibus at, tempus euismod justo. Donec eget enim volutpat, rhoncus dui at, condimentum dui. Aenean viverra tortor eget lacinia congue. Pellentesque vestibulum, tellus vitae commodo aliquet, dolor nisi maximus diam, eu sodales eros lectus ac massa. Aliquam iaculis rutrum euismod. Mauris metus quam, ullamcorper ac consectetur id, sagittis vitae ligula. Aliquam sem ex, pharetra vitae sagittis nec, vestibulum sollicitudin magna. Morbi et pretium nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac euismod velit. Mauris venenatis mattis aliquam. Donec cursus interdum felis, sed imperdiet tellus.', 'imagen1.jpg', 2),
(4, 'Ronin', 'Eric', 'Sanchez', 'sanchezChertoEric@gmail.com', '1234', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In elit augue, pellentesque et dapibus at, tempus euismod justo. Donec eget enim volutpat, rhoncus dui at, condimentum dui. Aenean viverra tortor eget lacinia congue. Pellentesque vestibulum, tellus vitae commodo aliquet, dolor nisi maximus diam, eu sodales eros lectus ac massa. Aliquam iaculis rutrum euismod. Mauris metus quam, ullamcorper ac consectetur id, sagittis vitae ligula. Aliquam sem ex, pharetra vitae sagittis nec, vestibulum sollicitudin magna. Morbi et pretium nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac euismod velit. Mauris venenatis mattis aliquam. Donec cursus interdum felis, sed imperdiet tellus.', 'imagen1.jpg', 2);

--
-- Índices para tablas volcadas
--

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
-- Indices de la tabla `tbl_estilo_obra`
--
ALTER TABLE `tbl_estilo_obra`
  ADD PRIMARY KEY (`id_Estilo_Obra`),
  ADD KEY `id_Estilo_Obra` (`id_Estilo_Obra`),
  ADD KEY `id_Estilo_Obra_2` (`id_Estilo_Obra`),
  ADD KEY `id_Estilo_Obra_3` (`id_Estilo_Obra`);

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
-- AUTO_INCREMENT de la tabla `tbl_estilo_obra`
--
ALTER TABLE `tbl_estilo_obra`
  MODIFY `id_Estilo_Obra` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
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
  MODIFY `id_Usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
