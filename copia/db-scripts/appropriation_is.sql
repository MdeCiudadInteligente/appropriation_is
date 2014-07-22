-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2014 a las 00:53:59
-- Versión del servidor: 5.5.32
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `appropriation_is`
--
CREATE DATABASE IF NOT EXISTS `appropriation_is` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `appropriation_is`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accompaniments`
--

CREATE TABLE IF NOT EXISTS `accompaniments` (
  `id_accompaniment` int(11) NOT NULL AUTO_INCREMENT,
  `accompaniment_date` varchar(45) NOT NULL,
  `accompaniment_type` varchar(45) NOT NULL,
  `accompaniment_description` varchar(45) NOT NULL,
  `participant_number` int(11) NOT NULL,
  `accompaniment_adjunct` varchar(45) NOT NULL,
  `accompaniment_adjunct1` varchar(45) NOT NULL,
  `accompaniment_adjunct2` varchar(45) NOT NULL,
  `dir` varchar(45) NOT NULL,
  `site_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id_accompaniment`),
  KEY `site_id` (`site_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agents`
--

CREATE TABLE IF NOT EXISTS `agents` (
  `id_agent` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` varchar(45) NOT NULL,
  `zone_id` int(11) NOT NULL,
  PRIMARY KEY (`id_agent`),
  UNIQUE KEY `person_id_2` (`person_id`),
  UNIQUE KEY `id_agent_2` (`id_agent`),
  KEY `person_id` (`person_id`),
  KEY `zone_id` (`zone_id`),
  KEY `id_agent` (`id_agent`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `agents`
--

INSERT INTO `agents` (`id_agent`, `person_id`, `zone_id`) VALUES
(8, '1017189745', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `communes`
--

CREATE TABLE IF NOT EXISTS `communes` (
  `id_commune` int(11) NOT NULL AUTO_INCREMENT,
  `commune_name` varchar(45) NOT NULL,
  `zone_id` int(11) NOT NULL,
  PRIMARY KEY (`id_commune`),
  KEY `zone_id` (`zone_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `communes`
--

INSERT INTO `communes` (`id_commune`, `commune_name`, `zone_id`) VALUES
(1, 'Comuna 1 - Popular', 1),
(2, 'Comuna 2 - Santa Cruz', 2),
(3, 'Comuna 3 - Manrique', 3),
(4, 'Comuna 4 - Aranjuez', 4),
(5, 'Comuna 5 - Castilla', 1),
(6, 'Comuna 6 - Doce De Octubre', 2),
(7, 'Comuna 7 - Robledo', 3),
(8, 'Comuna 8 - Villa Hermosa', 4),
(9, 'Comuna 9 - Buenos Aires', 1),
(10, 'Comuna 10 - la Candelaria', 2),
(11, 'Comuna 11 - Laureles - Estadio', 3),
(12, 'Comuna 12 - La América', 4),
(13, 'Comuna 13 - San Javier', 1),
(14, 'Comuna 14 - El Poblado', 2),
(15, 'Comuna 15 - Guayabal', 3),
(16, 'Comuna 16 - Belén', 4),
(50, 'Comuna 50 - Palmitas', 1),
(60, 'Comuna 60 - San Cristóbal', 2),
(70, 'Comuna 70 - Altavista', 3),
(80, 'Comuna 80 - San Antonio de Prado', 4),
(90, 'Comuna 90 - Santa Elena', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `divulgations`
--

CREATE TABLE IF NOT EXISTS `divulgations` (
  `id_divulgation` int(11) NOT NULL AUTO_INCREMENT,
  `divulgation_date` varchar(45) NOT NULL,
  `divulgation_name` varchar(45) NOT NULL,
  `divulgation_type` varchar(45) NOT NULL,
  `divulgation_description` text NOT NULL,
  `participant_number` int(11) NOT NULL,
  `activity_place` varchar(45) NOT NULL,
  `divulgation_adjunct` varchar(45) NOT NULL,
  `divulgation_adjunct1` varchar(45) NOT NULL,
  `divulgation_adjunct2` varchar(45) NOT NULL,
  `dir` varchar(45) NOT NULL,
  `site_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id_divulgation`),
  KEY `site_id` (`site_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meetings`
--

CREATE TABLE IF NOT EXISTS `meetings` (
  `id_meeting` int(11) NOT NULL AUTO_INCREMENT,
  `meeting_date` varchar(45) NOT NULL,
  `meeting_type` varchar(45) NOT NULL,
  `meeting_title` varchar(30) NOT NULL,
  `meeting_description` text NOT NULL,
  `meeting_commitments` text NOT NULL,
  `meeting_adjunct` varchar(45) DEFAULT NULL,
  `meeting_adjunct1` varchar(45) DEFAULT NULL,
  `meeting_adjunct2` varchar(45) DEFAULT NULL,
  `dir` varchar(45) NOT NULL,
  `site_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id_meeting`),
  KEY `site_id` (`site_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meetings_people`
--

CREATE TABLE IF NOT EXISTS `meetings_people` (
  `id_meeting_people` int(11) NOT NULL AUTO_INCREMENT,
  `meeting_id` int(11) NOT NULL,
  `person_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id_meeting_people`),
  KEY `meeting_id` (`meeting_id`,`person_id`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `neighborhoods`
--

CREATE TABLE IF NOT EXISTS `neighborhoods` (
  `id_neighborhood` int(11) NOT NULL AUTO_INCREMENT,
  `neighborhood_name` varchar(45) NOT NULL,
  `commune_id` int(11) NOT NULL,
  PRIMARY KEY (`id_neighborhood`),
  KEY `commune_id` (`commune_id`),
  KEY `commune_id_2` (`commune_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Volcado de datos para la tabla `neighborhoods`
--

INSERT INTO `neighborhoods` (`id_neighborhood`, `neighborhood_name`, `commune_id`) VALUES
(11, 'Santo Domingo', 1),
(12, 'Villa del socorro', 2),
(13, 'Manrique', 3),
(14, 'Palermo', 4),
(15, 'Aranjuez', 4),
(16, 'Sevilla', 4),
(17, 'Moravia', 4),
(18, 'El Bosque', 4),
(19, 'Castilla', 5),
(20, 'Caribe', 5),
(21, 'Robledo', 7),
(22, 'El Diamante', 7),
(23, 'La Ladera', 8),
(24, 'Caunces', 9),
(25, 'Buenos Aires', 9),
(26, 'El Salvador', 9),
(27, 'Alpujarra', 10),
(28, 'La Candelaria', 10),
(29, 'El Chagualo', 10),
(30, 'La Bomboná 1', 10),
(31, 'Boston', 10),
(32, 'Villa Nueva', 10),
(33, 'Alpujarra', 10),
(34, 'Centro', 10),
(35, 'Jesús de Nazareth', 10),
(36, 'Estadio', 11),
(37, 'Los colores', 11),
(38, 'Suramericana', 11),
(39, 'La América', 12),
(40, 'Santa Lucía', 12),
(41, 'Los Alcázares', 12),
(42, '20 de Julio', 13),
(43, 'Belencito Corazón', 13),
(44, 'San Javier', 13),
(45, 'Poblado', 14),
(46, 'Guayabal', 15),
(47, 'Belén San Bernardo', 16),
(48, 'Belén Parque', 16),
(49, 'Nutibara', 16),
(50, 'Belén', 16),
(51, 'Palmitas', 50),
(52, 'San Cristóbal', 60),
(53, 'Nuevo Occidente', 60),
(54, 'San Cristóbal', 60),
(55, 'Altavista', 70),
(56, 'San Antonio de Prado', 80),
(57, 'El Limonar', 80),
(58, 'Santa Elena Sector central', 90);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `owners`
--

CREATE TABLE IF NOT EXISTS `owners` (
  `id_owner` varchar(45) NOT NULL,
  `roll` varchar(45) NOT NULL,
  `site_id` varchar(45) NOT NULL,
  `person_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id_owner`),
  KEY `site_id` (`site_id`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `id_person` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `charge` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `cell` varchar(45) NOT NULL,
  `entity` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_person`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `people`
--

INSERT INTO `people` (`id_person`, `name`, `lastname`, `charge`, `phone`, `cell`, `entity`) VALUES
('1017189745', 'Johana', 'Jaramillo', 'Asistente de Soporte', '4444963', '', 'MDE Ciudad Inteligente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
  `id_site` varchar(45) NOT NULL,
  `site_name` varchar(45) NOT NULL,
  `site_phone` varchar(45) NOT NULL,
  `site_address` varchar(45) NOT NULL,
  `site_mail` varchar(45) NOT NULL,
  `neighborhood_id` int(11) NOT NULL,
  `site_type_id` int(11) NOT NULL,
  PRIMARY KEY (`id_site`),
  KEY `neighborhood_id` (`neighborhood_id`,`site_type_id`),
  KEY `site_type_id` (`site_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `site_types`
--

CREATE TABLE IF NOT EXISTS `site_types` (
  `id_site_type` int(11) NOT NULL AUTO_INCREMENT,
  `site_type` varchar(45) NOT NULL,
  `site_estado` varchar(45) NOT NULL,
  PRIMARY KEY (`id_site_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `site_types`
--

INSERT INTO `site_types` (`id_site_type`, `site_type`, `site_estado`) VALUES
(1, 'Biblioteca', 'Activo'),
(2, 'Institución Educativa', 'Activo'),
(3, 'Cedezos', 'Activo'),
(4, 'Sitios de Gobierno', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `permission_level` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_agent` (`agent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `permission_level`, `agent_id`) VALUES
(10, 'administrador', 'administrador', 1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zones`
--

CREATE TABLE IF NOT EXISTS `zones` (
  `id_zone` int(11) NOT NULL AUTO_INCREMENT,
  `zone_name` varchar(45) NOT NULL,
  PRIMARY KEY (`id_zone`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `zones`
--

INSERT INTO `zones` (`id_zone`, `zone_name`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accompaniments`
--
ALTER TABLE `accompaniments`
  ADD CONSTRAINT `accompaniments_ibfk_1` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id_site`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `agents`
--
ALTER TABLE `agents`
  ADD CONSTRAINT `agents_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `people` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `agents_ibfk_2` FOREIGN KEY (`zone_id`) REFERENCES `zones` (`id_zone`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `communes`
--
ALTER TABLE `communes`
  ADD CONSTRAINT `communes_ibfk_1` FOREIGN KEY (`zone_id`) REFERENCES `zones` (`id_zone`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `divulgations`
--
ALTER TABLE `divulgations`
  ADD CONSTRAINT `divulgations_ibfk_1` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id_site`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `meetings`
--
ALTER TABLE `meetings`
  ADD CONSTRAINT `meetings_ibfk_1` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id_site`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `meetings_people`
--
ALTER TABLE `meetings_people`
  ADD CONSTRAINT `meetings_people_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `people` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `meetings_people_ibfk_3` FOREIGN KEY (`meeting_id`) REFERENCES `meetings` (`id_meeting`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `neighborhoods`
--
ALTER TABLE `neighborhoods`
  ADD CONSTRAINT `neighborhoods_ibfk_1` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`id_commune`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `owners`
--
ALTER TABLE `owners`
  ADD CONSTRAINT `owners_ibfk_1` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id_site`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `owners_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `people` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sites`
--
ALTER TABLE `sites`
  ADD CONSTRAINT `sites_ibfk_3` FOREIGN KEY (`site_type_id`) REFERENCES `site_types` (`id_site_type`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sites_ibfk_2` FOREIGN KEY (`neighborhood_id`) REFERENCES `neighborhoods` (`id_neighborhood`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id_agent`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
