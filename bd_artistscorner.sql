-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2016 a las 01:34:22
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
-- Estructura de tabla para la tabla `tbl_comentarioseventos`
--
-- Creación: 24-02-2016 a las 16:59:25
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
-- Creación: 24-02-2016 a las 16:59:46
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
-- Creación: 24-02-2016 a las 16:59:54
--

DROP TABLE IF EXISTS `tbl_estilo`;
CREATE TABLE IF NOT EXISTS `tbl_estilo` (
  `id_Estilo` int(11) NOT NULL,
  `Nombre_Arte` enum('Arquitectura','Danza','Escultura','Música','Teatro','Pintura','Literatura','Cine o Cinematografía') COLLATE utf8_bin DEFAULT NULL,
  `Nombre_Genero` enum('ArtDecó','Barroco','Expresionismo','Futurismo','Gótico','Historicista','Modernismo','MovimientoModerno','Neoclasismo','Neogótico','Postmodernismo','Renacimiento','Rococó','Romántico','Ballet','Capoeira','HipHop','Salsa','Swing','Folclórica','Salón','Deportiva','Mambo','Funky','Estatua','Relieves','Busto','Torso','Criselefantina','Arquitectónica','Cinética','Rock N` Roll','Pop','Electrónica','Rap','Reggae','Heavy Metal','Reggaeton','Blues','Alternativo','Jazz','Punk','Grunge','House','Comedia','Musical','Pantomima','Performance','Improvisación','Sombras','TiteresMarionetas','Politico','Infantil','Cuentacuentos','Experimental','abstracto','Cubismo','Dadaísmo','Expresionismo','Hiperrealista','Impresionista','Realismo','Romanticismo','Prerrafaelismo','Oda','Tragedia','Melodrama','Tragicomedia','Farsa','Ensayo','Biografia','Cronica','Epistola','Fábula','Poema','Tratado','Novela','Drama','Acción','Aventura','Terror','CienciaFicción','Suspense','Fantasía','Histórico') COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELACIONES PARA LA TABLA `tbl_estilo`:
--

--
-- Volcado de datos para la tabla `tbl_estilo`
--

INSERT INTO `tbl_estilo` (`id_Estilo`, `Nombre_Arte`, `Nombre_Genero`) VALUES
(1, 'Arquitectura', 'ArtDecó'),
(2, 'Arquitectura', 'Barroco'),
(3, 'Arquitectura', 'Expresionismo'),
(4, 'Arquitectura', 'Futurismo'),
(5, 'Arquitectura', 'Gótico'),
(6, 'Arquitectura', 'Historicista'),
(7, 'Arquitectura', 'Historicista'),
(8, 'Arquitectura', 'Modernismo'),
(9, 'Arquitectura', 'MovimientoModerno'),
(10, 'Arquitectura', 'Neoclasismo'),
(11, 'Arquitectura', 'Neogótico'),
(12, 'Arquitectura', 'Postmodernismo'),
(13, 'Arquitectura', 'Renacimiento'),
(14, 'Arquitectura', 'Rococó'),
(15, 'Arquitectura', 'Romántico'),
(16, 'Danza', 'Ballet'),
(17, 'Danza', 'Capoeira'),
(18, 'Danza', 'HipHop'),
(19, 'Danza', 'Salsa'),
(20, 'Danza', 'Swing'),
(21, 'Danza', 'Folclórica'),
(22, 'Danza', 'Salón'),
(23, 'Danza', 'Deportiva'),
(24, 'Danza', 'Mambo'),
(25, 'Danza', 'Funky'),
(26, 'Escultura', 'Estatua'),
(27, 'Escultura', 'Relieves'),
(28, 'Escultura', 'Busto'),
(29, 'Escultura', 'Torso'),
(30, 'Escultura', 'Criselefantina'),
(31, 'Escultura', 'Arquitectónica'),
(32, 'Arquitectura', 'Cinética'),
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
(46, 'Teatro', 'Comedia'),
(47, 'Teatro', 'Musical'),
(48, 'Teatro', 'Pantomima'),
(49, 'Teatro', 'Pantomima'),
(50, 'Teatro', 'Performance'),
(51, 'Teatro', 'Improvisación'),
(52, 'Teatro', 'Sombras'),
(53, 'Teatro', 'Sombras'),
(54, 'Teatro', 'TiteresMarionetas'),
(55, 'Teatro', 'Politico'),
(56, 'Teatro', 'Infantil'),
(57, 'Teatro', 'Cuentacuentos'),
(58, 'Teatro', 'Experimental'),
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
(82, 'Cine o Cinematografía', 'Comedia'),
(83, 'Cine o Cinematografía', 'Acción'),
(84, 'Cine o Cinematografía', 'Aventura'),
(85, 'Cine o Cinematografía', 'Terror'),
(86, 'Cine o Cinematografía', 'CienciaFicción'),
(87, 'Cine o Cinematografía', 'Suspense'),
(88, 'Cine o Cinematografía', 'Fantasía'),
(89, 'Cine o Cinematografía', 'Histórico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estilo_obra`
--
-- Creación: 24-02-2016 a las 17:00:09
--

DROP TABLE IF EXISTS `tbl_estilo_obra`;
CREATE TABLE IF NOT EXISTS `tbl_estilo_obra` (
  `id_Estilo_Obra` int(11) NOT NULL,
  `id_Obra` int(11) DEFAULT NULL,
  `id_Estilo` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELACIONES PARA LA TABLA `tbl_estilo_obra`:
--   `id_Estilo`
--       `tbl_estilo` -> `id_Estilo`
--   `id_Obra`
--       `tbl_obra` -> `id_Obra`
--

--
-- Volcado de datos para la tabla `tbl_estilo_obra`
--

INSERT INTO `tbl_estilo_obra` (`id_Estilo_Obra`, `id_Obra`, `id_Estilo`) VALUES
(2, 2, 1),
(3, 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_eventos`
--
-- Creación: 24-02-2016 a las 17:00:17
--

DROP TABLE IF EXISTS `tbl_eventos`;
CREATE TABLE IF NOT EXISTS `tbl_eventos` (
  `id_Eventos` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `Id_Usuario` int(11) DEFAULT NULL,
  `descripcion` text COLLATE utf8_bin,
  `fecha` date DEFAULT NULL,
  `lugar` int(100) DEFAULT NULL
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
-- Creación: 24-02-2016 a las 17:00:25
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
-- Creación: 24-02-2016 a las 22:37:33
--

DROP TABLE IF EXISTS `tbl_obra`;
CREATE TABLE IF NOT EXISTS `tbl_obra` (
  `id_Obra` int(11) NOT NULL,
  `titulo` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `num_Descargas` int(11) DEFAULT NULL,
  `archivo` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` text COLLATE utf8_bin,
  `id_Usuario` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `portada` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `likes` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELACIONES PARA LA TABLA `tbl_obra`:
--   `id_Usuario`
--       `tbl_usuario` -> `id_Usuario`
--

--
-- Volcado de datos para la tabla `tbl_obra`
--

INSERT INTO `tbl_obra` (`id_Obra`, `titulo`, `num_Descargas`, `archivo`, `descripcion`, `id_Usuario`, `fecha`, `portada`, `likes`) VALUES
(3, 'The Bridge', 124, 'cancion1.mp3', 'Canción "the Bridge" ', 2, '2016-02-03', 'imagen2.jpg', 150),
(4, 'El cencerro', 124, 'imagen2.jpg', 'Con esta escultura he intentado plasmar el maltrato animal en las granjas modernas.', 2, '2016-02-03', 'imagen2.jpg', 140);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tagnube`
--
-- Creación: 24-02-2016 a las 17:00:40
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
-- Creación: 24-02-2016 a las 17:00:47
--

DROP TABLE IF EXISTS `tbl_tipousuario`;
CREATE TABLE IF NOT EXISTS `tbl_tipousuario` (
  `id_TipoUsuario` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `descripcion` text COLLATE utf8_bin
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELACIONES PARA LA TABLA `tbl_tipousuario`:
--

--
-- Volcado de datos para la tabla `tbl_tipousuario`
--

INSERT INTO `tbl_tipousuario` (`id_TipoUsuario`, `nombre`, `descripcion`) VALUES
(1, 'Webmaster', 'Usuario a cargo del mantenimiento y desarrollo del sitio web.'),
(2, 'Artista', 'Usuario básico. Puede subir obras, crear eventos, comentar cualquier página, y reportar obras.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--
-- Creación: 24-02-2016 a las 22:32:03
--

DROP TABLE IF EXISTS `tbl_usuario`;
CREATE TABLE IF NOT EXISTS `tbl_usuario` (
  `id_Usuario` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `apellido` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `mail` varchar(40) COLLATE utf8_bin DEFAULT NULL,
  `pass` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `descripcionUser` text COLLATE utf8_bin,
  `imagen` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `id_TipoUsuario` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- RELACIONES PARA LA TABLA `tbl_usuario`:
--   `id_TipoUsuario`
--       `tbl_tipousuario` -> `id_TipoUsuario`
--

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id_Usuario`, `nombre`, `apellido`, `mail`, `pass`, `descripcionUser`, `imagen`, `id_TipoUsuario`) VALUES
(1, 'Admin', NULL, '8706.joan23@fje.edu', '1234', 'Usuario webmaster', NULL, 1),
(2, 'Jose Luis', 'Maseda', '33595.joan23@fje.edu', '1234', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In elit augue, pellentesque et dapibus at, tempus euismod justo. Donec eget enim volutpat, rhoncus dui at, condimentum dui. Aenean viverra tortor eget lacinia congue. Pellentesque vestibulum, tellus vitae commodo aliquet, dolor nisi maximus diam, eu sodales eros lectus ac massa. Aliquam iaculis rutrum euismod. Mauris metus quam, ullamcorper ac consectetur id, sagittis vitae ligula. Aliquam sem ex, pharetra vitae sagittis nec, vestibulum sollicitudin magna. Morbi et pretium nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac euismod velit. Mauris venenatis mattis aliquam. Donec cursus interdum felis, sed imperdiet tellus.', 'imagen1.jpg', 2),
(3, 'Alejandro', 'Moreno', '96034.joan23@fje.edu', '1234', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In elit augue, pellentesque et dapibus at, tempus euismod justo. Donec eget enim volutpat, rhoncus dui at, condimentum dui. Aenean viverra tortor eget lacinia congue. Pellentesque vestibulum, tellus vitae commodo aliquet, dolor nisi maximus diam, eu sodales eros lectus ac massa. Aliquam iaculis rutrum euismod. Mauris metus quam, ullamcorper ac consectetur id, sagittis vitae ligula. Aliquam sem ex, pharetra vitae sagittis nec, vestibulum sollicitudin magna. Morbi et pretium nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac euismod velit. Mauris venenatis mattis aliquam. Donec cursus interdum felis, sed imperdiet tellus.', 'imagen1.jpg', 2),
(4, 'Eric', 'Sanchez', 'sanchezChertoEric@gmail.com', '1234', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In elit augue, pellentesque et dapibus at, tempus euismod justo. Donec eget enim volutpat, rhoncus dui at, condimentum dui. Aenean viverra tortor eget lacinia congue. Pellentesque vestibulum, tellus vitae commodo aliquet, dolor nisi maximus diam, eu sodales eros lectus ac massa. Aliquam iaculis rutrum euismod. Mauris metus quam, ullamcorper ac consectetur id, sagittis vitae ligula. Aliquam sem ex, pharetra vitae sagittis nec, vestibulum sollicitudin magna. Morbi et pretium nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ac euismod velit. Mauris venenatis mattis aliquam. Donec cursus interdum felis, sed imperdiet tellus.', 'imagen1.jpg', 2);

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
  ADD KEY `id_Estilo_2` (`id_Estilo`);

--
-- Indices de la tabla `tbl_estilo_obra`
--
ALTER TABLE `tbl_estilo_obra`
  ADD PRIMARY KEY (`id_Estilo_Obra`),
  ADD KEY `id_Estilo_Obra` (`id_Estilo_Obra`),
  ADD KEY `id_Estilo_Obra_2` (`id_Estilo_Obra`);

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
  MODIFY `id_Estilo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT de la tabla `tbl_estilo_obra`
--
ALTER TABLE `tbl_estilo_obra`
  MODIFY `id_Estilo_Obra` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
  MODIFY `id_Obra` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
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
  MODIFY `id_Usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;