-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-03-2014 a las 16:50:34
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `appropriation_is`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accompaniments`
--

CREATE TABLE IF NOT EXISTS `accompaniments` (
  `id_accompaniment` int(11) NOT NULL AUTO_INCREMENT,
  `accompaniment_type` varchar(45) NOT NULL,
  `accompaniment_description` varchar(45) NOT NULL,
  `participant_number` int(11) NOT NULL,
  `adjunct` varchar(45) NOT NULL,
  `site_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id_accompaniment`),
  KEY `site_id` (`site_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agents`
--

CREATE TABLE IF NOT EXISTS `agents` (
  `id_agent` varchar(45) NOT NULL,
  `person_id` varchar(45) NOT NULL,
  `zone_id` int(11) NOT NULL,
  PRIMARY KEY (`id_agent`),
  KEY `person_id` (`person_id`),
  KEY `zone_id` (`zone_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `agents`
--

INSERT INTO `agents` (`id_agent`, `person_id`, `zone_id`) VALUES
('1', '70030', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `communes`
--

CREATE TABLE IF NOT EXISTS `communes` (
  `id_commune` int(11) NOT NULL,
  `commune_name` varchar(45) NOT NULL,
  `zone_id` int(11) NOT NULL,
  PRIMARY KEY (`id_commune`),
  KEY `zone_id` (`zone_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meetings`
--

CREATE TABLE IF NOT EXISTS `meetings` (
  `id_meeting` int(11) NOT NULL AUTO_INCREMENT,
  `meeting_type` varchar(45) NOT NULL,
  `adjunct` varchar(45) NOT NULL,
  `site_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id_meeting`),
  KEY `site_id` (`site_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meeting_people`
--

CREATE TABLE IF NOT EXISTS `meeting_people` (
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
  KEY `commune_id` (`commune_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
('70030', 'wegtwegweg', 'wegwegweg', 'wegwegw', '4444963', '23523523', 'ewtewt');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `permission_level` int(11) NOT NULL,
  `agent_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `id_agent` (`agent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `permission_level`, `agent_id`) VALUES
(1, 'johana', '5f1fd5e8cd67a034fcd575b28fcbfa8409a92503', 1, '1'),
(2, 'yodi', '8515a9643960bf400f7c2870f344252e7e7230a4', 1, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zones`
--

CREATE TABLE IF NOT EXISTS `zones` (
  `id_zone` int(11) NOT NULL AUTO_INCREMENT,
  `zone_name` varchar(45) NOT NULL,
  PRIMARY KEY (`id_zone`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `zones`
--

INSERT INTO `zones` (`id_zone`, `zone_name`) VALUES
(1, '1');

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
  ADD CONSTRAINT `agents_ibfk_2` FOREIGN KEY (`zone_id`) REFERENCES `zones` (`id_zone`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `agents_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `people` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `meetings`
--
ALTER TABLE `meetings`
  ADD CONSTRAINT `meetings_ibfk_1` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id_site`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `meeting_people`
--
ALTER TABLE `meeting_people`
  ADD CONSTRAINT `meeting_people_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `people` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `meeting_people_ibfk_1` FOREIGN KEY (`meeting_id`) REFERENCES `meetings` (`id_meeting`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `neighborhoods`
--
ALTER TABLE `neighborhoods`
  ADD CONSTRAINT `neighborhoods_ibfk_1` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`id_commune`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `owners`
--
ALTER TABLE `owners`
  ADD CONSTRAINT `owners_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `people` (`id_person`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `owners_ibfk_1` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id_site`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sites`
--
ALTER TABLE `sites`
  ADD CONSTRAINT `sites_ibfk_2` FOREIGN KEY (`neighborhood_id`) REFERENCES `neighborhoods` (`id_neighborhood`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sites_ibfk_1` FOREIGN KEY (`site_type_id`) REFERENCES `site_types` (`id_site_type`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id_agent`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
