-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2014 a las 20:35:09
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `accompaniments`
--

INSERT INTO `accompaniments` (`id_accompaniment`, `accompaniment_type`, `accompaniment_description`, `participant_number`, `adjunct`, `site_id`) VALUES
(1, 'Aula Abierta', 'qweqweqweweweqwe', 3, 'asdasdsdasd', '456'),
(3, 'Curso, taller o charla', 'adfwerwerrewer', 5, 'sdfsdfdfsdf', '456'),
(4, 'Grados', 'adfwerwerrewersfdfsdfds', 52, 'sdfsdfdfsdf', '789');

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
('1', '1022096458', 1),
('3', '1111', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `communes`
--

INSERT INTO `communes` (`id_commune`, `commune_name`, `zone_id`) VALUES
(1, 'Comuna 1 - Popular', 1),
(2, 'Comuna 2 - Santa Cruz', 1),
(3, 'Comuna 3 - Manrique', 1),
(4, 'Comuna 4 - Aranjuez', 2),
(5, 'Comuna 5 - Castilla', 2),
(6, 'Comuna 6 - Doce De Octubre', 2),
(7, 'Comuna 7 - Robledo', 2),
(8, 'Comuna 8 - VIlla Hermosa', 3),
(9, 'Comuna 9 - Buenos Aires', 3),
(10, 'Comuna 10 - la Candelaria', 4),
(21, 'Comuna 11 - Laureles - Estadio', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `divulgations`
--

CREATE TABLE IF NOT EXISTS `divulgations` (
  `id_divulgation` int(11) NOT NULL AUTO_INCREMENT,
  `divulgation_name` varchar(45) NOT NULL,
  `divulgation_type` varchar(45) NOT NULL,
  `divulgation_description` text NOT NULL,
  `participant_number` int(11) NOT NULL,
  `activity_place` varchar(45) NOT NULL,
  `adjunct` varchar(45) NOT NULL,
  `site_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id_divulgation`),
  KEY `site_id` (`site_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `divulgations`
--

INSERT INTO `divulgations` (`id_divulgation`, `divulgation_name`, `divulgation_type`, `divulgation_description`, `participant_number`, `activity_place`, `adjunct`, `site_id`) VALUES
(1, 'dasdasda', 'Toma de sitios de gobierno', 'adasdasdasd', 3, 'asdsdad', 'adsdasd', '456'),
(2, 'asdsadsada', 'Eventos', 'sdasdasdasd', 6, 'getetr', 'etrertrt', '123'),
(3, 'xczzxczczxc', 'Eventos', 'zxczxczxc', 6, 'zxczxczc', 'zxczxcx', '456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meetings`
--

CREATE TABLE IF NOT EXISTS `meetings` (
  `id_meeting` int(11) NOT NULL AUTO_INCREMENT,
  `meeting_type` varchar(45) NOT NULL,
  `meeting_title` varchar(30) NOT NULL,
  `meeting_description` text NOT NULL,
  `meeting_commitments` text NOT NULL,
  `adjunct` varchar(45) NOT NULL,
  `dir` varchar(45) NOT NULL,
  `site_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id_meeting`),
  KEY `site_id` (`site_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `meetings`
--

INSERT INTO `meetings` (`id_meeting`, `meeting_type`, `meeting_title`, `meeting_description`, `meeting_commitments`, `adjunct`, `dir`, `site_id`) VALUES
(14, 'eqweqwe', 'qweqweq', 'weqweqwe', 'qweqwe', 'qweqwe', '', '456'),
(15, 'Gesti?n con aliados', 'asassas', 'asasasa', 'asasas', 'asasas', '', '789'),
(16, 'Empalme', 'zxcxczxczxcz', 'czasdsdasd', 'asdasdasdasd', 'zxcxczxczxcadsdasd', '', '456'),
(21, 'Seguimiento', 'johana', 'johana', 'johana', '1_LegalmenteRubia_OK.jpg', 'uploads\\meeting\\adjunct', '123'),
(22, 'Seguimiento', 'pino', 'pino', 'pino', '3_LaMujerMaravilla_OK.jpg', 'uploads\\meeting\\adjunct', '123');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `neighborhoods`
--

INSERT INTO `neighborhoods` (`id_neighborhood`, `neighborhood_name`, `commune_id`) VALUES
(7, 'La Torre', 1),
(8, 'Las Campanas', 1),
(9, 'La Isla', 2),
(10, 'El Playón de los  Comuneros', 2);

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
('1022096458', 'yodi', 'pino', 'asistente', '4444963', '3136742206', 'MDEInteligente'),
('1111', 'mmmmm', 'mmmm', 'mmmm', '444', '444', 'rtrr'),
('123456', 'Mariana', 'Arenas', 'BEBE', '8383', '8383437850', '4141414');

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

--
-- Volcado de datos para la tabla `sites`
--

INSERT INTO `sites` (`id_site`, `site_name`, `site_phone`, `site_address`, `site_mail`, `neighborhood_id`, `site_type_id`) VALUES
('123', 'PCJIC', '4441414', 'cra 68 #87-90', 'poli@hotmail.com', 7, 1),
('456', 'ITM', '1258565', 'cra 70 #87-90', 'itm@gmail.com', 9, 2),
('789', 'asdasdas', '4234234', 'dddd', 'sdfsdassfd@gmail.com', 10, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `site_types`
--

CREATE TABLE IF NOT EXISTS `site_types` (
  `id_site_type` int(11) NOT NULL AUTO_INCREMENT,
  `site_type` varchar(45) NOT NULL,
  `site_estado` varchar(45) NOT NULL,
  PRIMARY KEY (`id_site_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `site_types`
--

INSERT INTO `site_types` (`id_site_type`, `site_type`, `site_estado`) VALUES
(1, 'Biblioteca', 'Bueno'),
(2, 'Institución Educativa', 'Malo'),
(3, 'eeeeee', 'rrrrrrr');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `permission_level`, `agent_id`) VALUES
(1, 'johana', '5f1fd5e8cd67a034fcd575b28fcbfa8409a92503', 1, '1'),
(2, 'yodi', '8515a9643960bf400f7c2870f344252e7e7230a4', 1, '1'),
(3, 'rrr', '0f887deeadb125352683ba018ac7458fcbb0d7aa', 1, '1');

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
  ADD CONSTRAINT `sites_ibfk_1` FOREIGN KEY (`site_type_id`) REFERENCES `site_types` (`id_site_type`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sites_ibfk_2` FOREIGN KEY (`neighborhood_id`) REFERENCES `neighborhoods` (`id_neighborhood`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id_agent`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `zones`
--
ALTER TABLE `zones`
  ADD CONSTRAINT `zones_ibfk_1` FOREIGN KEY (`id_zone`) REFERENCES `communes` (`zone_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
