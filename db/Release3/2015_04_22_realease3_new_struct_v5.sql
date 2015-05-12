﻿SET FOREIGN_KEY_CHECKS=0;
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2015 a las 22:50:33
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `appropriation_isp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accompaniments`
--

CREATE TABLE IF NOT EXISTS `accompaniments` (
  `id_accompaniment` int(11) NOT NULL AUTO_INCREMENT,
  `accompaniment_date` date NOT NULL,
  `accompaniment_type` varchar(50) NOT NULL,
  `accompaniment_title` varchar(50) NOT NULL,
  `accompaniment_description` text NOT NULL,
  `participant_number` int(11) NOT NULL,
  `accompaniment_adjunct` varchar(256) NOT NULL,
  `accompaniment_adjunct1` varchar(256) NOT NULL,
  `accompaniment_adjunct2` varchar(256) NOT NULL,
  `dir` varchar(80) NOT NULL,
  `accompaniment_type_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_accompaniment`),
  KEY `site_id` (`site_id`),
  KEY `user_id` (`user_id`),
  KEY `accompaniment_type_id` (`accompaniment_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=462 ;

--
-- Volcado de datos para la tabla `accompaniments`
--

INSERT INTO `accompaniments` (`id_accompaniment`, `accompaniment_date`, `accompaniment_type`, `accompaniment_title`, `accompaniment_description`, `participant_number`, `accompaniment_adjunct`, `accompaniment_adjunct1`, `accompaniment_adjunct2`, `dir`, `accompaniment_type_id`, `site_id`, `user_id`, `creation_date`, `modification_date`) VALUES
(60, '2014-01-30', 'Intervención sitio', '', 'Visita de seguimiento al Centro de Servicios ', 3, 'CS_Robledo.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 273, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, '2014-02-27', 'practicantes', '', 'Se realizó una intervención en ', 4, '', '', '', '', 0, 439, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, '2014-02-27', 'Intervención sitio', '', 'Toma de sitio registro de un usuario. Se inda', 1, '', '', '', '', 0, 290, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, '2014-02-19', 'Intervención sitio', '', 'Toma al punto de navegación Espacio Público', 3, '', '', '', '', 0, 427, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, '2014-03-19', 'Intervención sitio', '', 'Intervención al punto de navegación Espacio', 2, '', '', '', '', 0, 427, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, '2014-02-20', 'Intervención sitio', '', 'Se realizó una intervención en el sitio en ', 22, '', '', '', '', 0, 335, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, '2014-02-04', 'Otros', '', 'Se pasó al sitio a recoger los registros de ', 3, '', '', '', '', 0, 290, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, '2014-02-04', 'Otros', '', 'Se pasó a recoger los registros de usuario d', 1, '', '', '', '', 0, 349, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, '2014-02-13', 'Intervención sitio', '', 'Se realizo intervención en el sitio, lamenta', 0, '', '', '', '', 0, 334, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, '2014-02-04', 'Otros', '', 'Se pasó al punto de navegación a recoger lo', 0, '', '', '', '', 0, 334, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, '2014-07-16', 'Curso, taller o charla', '', 'Charla sobre Gobierno en Línea para jóvenes', 33, '', '', '', '', 0, 229, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, '2014-02-03', 'Estudiantes de PP, jóvenes por la convivenci', '', 'Reunión con Idaly Úsuga, estudiante benefic', 1, '', '', '', '', 0, 169, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, '2014-06-04', 'Intervención sitio', '', 'Seguimiento y recolección de los indicadores', 1, '', '', '', '', 0, 439, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, '2014-01-28', 'Intervención sitio', '', 'Visita a la Casa de Gobierno San Cristóbal p', 3, 'Casa_Gobierno_San_Cristobal_1.JPG', 'Punto_de_Navegacion_San_Cristobal_1.JPG', 'P1040941.JPG', 'uploads/accompaniment/accompaniment_adjunct', 0, 269, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, '2014-02-13', 'Intervención sitio', '', 'Se realizó una intervención en el punto de ', 3, '', '', '', '', 0, 362, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, '2014-02-06', 'Intervención sitio', '', 'Se realizó una intervención en el punto de ', 0, '', '', '', '', 0, 336, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, '2014-02-11', 'Estudiantes de PP, jóvenes por la convivenci', '', 'Reunión con estudiantes beneficiarios de PP ', 3, '', '', '', '', 0, 169, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, '2014-02-11', 'Otros', '', 'Encuentro con la Mesa Ambiental, la Asociaci', 25, 'Mesa_Ambiental_Asociacion_de_recuperadores_ED', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 272, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, '2014-02-12', 'practicantes', '', 'Se realizó intervención en el punto de nave', 0, '', '', '', '', 0, 333, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, '2014-02-13', 'Intervención sitio', '', 'Se realizó una intervención en el punto de ', 0, '', '', '', '', 0, 332, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, '2014-04-04', 'Otros', '', 'Se pasó a recoger los registros de usuarios.', 1, '', '', '', '', 0, 334, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, '2014-04-04', 'Otros', '', 'Se pasó al sitio a devolver las planillas de', 1, '', '', '', '', 0, 334, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, '2014-04-01', 'Otros', '', 'Recolección de indicadores del sitio, por ot', 5, '', '', '', '', 0, 362, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, '2014-04-01', 'Otros', '', 'Se pasó al punto de navegación a recoger lo', 4, '', '', '', '', 0, 439, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, '2014-04-01', 'Otros', '', 'Recolección de indicadores del punto de nave', 1, '', '', '', '', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, '2014-06-06', 'Grados', '', 'Entrega de constancias pendientes a los parti', 2, '', '', '', '', 0, 335, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, '2014-04-02', 'Estudiantes de PP, jóvenes por la convivenci', '', 'Se realizó seguimiento a la estudiante de pp', 1, '', '', '', '', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, '2014-03-25', 'Otros', '', 'Seguimiento al nuevo sitio Arví. Se han teni', 3, '', '', '', '', 0, 317, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, '2014-06-03', 'Curso, taller o charla', '', 'No se pudo realizar la charla, por limitacion', 1, '', '', '', '', 0, 137, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, '2014-04-03', 'Intervención sitio', '', 'Intervención en sitio en la cual se atendier', 6, '', '', '', '', 0, 335, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, '2014-06-04', 'practicantes', '', 'Se realizó seguimiento y acompañamiento al ', 2, '', '', '', '', 0, 194, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, '2014-04-02', 'Otros', '', 'Recolección de indicadores (faltan registros', 1, '', '', '', '', 0, 332, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, '2014-06-04', 'Otros', '', 'Se realizó seguimiento con la funcionaria pa', 1, '', '', '', '', 0, 349, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, '2014-06-04', 'Otros', '', 'Se realizó visita de seguimiento al funciona', 1, '', '', '', '', 0, 348, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, '2014-04-03', 'Otros', '', 'Se recogieron los indicadores del sitio y se ', 1, '', '', '', '', 0, 336, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, '2014-06-04', 'Otros', '', 'Visita de seguimiento al funcionamiento del p', 2, '', '', '', '', 0, 333, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, '2014-06-10', 'Sensibilización', '', 'Sensibilización kit de inclusión digital a ', 76, '', '', '', '', 0, 360, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, '2014-06-10', 'Otros', '', 'Devolución de los registros de uso de los eq', 1, '', '', '', '', 0, 334, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, '2014-03-28', 'Curso, taller o charla', '', 'Acompañamiento al proyecto de  personas sord', 14, '20140328_143752.jpg', '20140328_143849.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 193, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, '2014-06-05', 'Estudiantes de PP, jóvenes por la convivenci', '', 'Instrucción sobre el apoyo de los procesos d', 5, '', '', '', '', 0, 362, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, '2014-06-11', 'Curso, taller o charla', '', 'Acompañamiento al practicante y estudiante d', 3, '', '', '', '', 0, 290, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, '2014-03-04', 'Intervención sitio', '', 'Recolección del registro de uso. Revisión d', 0, '', '', '', '', 0, 439, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, '2014-03-21', 'practicantes', '', 'Reconocimiento del punto de navegación de la', 2, '', '', '', '', 0, 439, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, '2014-03-12', 'Sensibilización', '', 'Se realizó una sensibilización con los estu', 4, '', '', '', '', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, '2014-03-20', 'Intervención sitio', '', 'Entrega de registro de usos para el punto de ', 1, '', '', '', '', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, '2014-03-26', 'Estudiantes de PP, jóvenes por la convivenci', '', 'Reunión con el líder de servicio para prese', 4, '', '', '', '', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, '2014-03-11', 'Intervención sitio', '', 'Atención a 13 usuarios en el punto de navega', 13, 'Comuna_13_CAV_Belencito_Intervencion_marzo.jp', '20140311_093216.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 335, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, '2014-03-14', 'Intervención sitio', '', 'Atención a 7 usuarios en el punto de navegac', 7, '', '', '', '', 0, 335, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, '2014-03-25', 'Otros', '', 'Recolección de indicadores en el sitio, segu', 3, '', '', '', '', 0, 296, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, '2014-03-06', 'Intervención sitio', '', 'Se llevó a cabo la toma de sitio, en donde s', 14, '', '', '', '', 0, 334, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, '2014-06-04', 'Otros', '', 'Visita de seguimiento y recolección de indic', 1, '', '', '', '', 0, 336, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, '2014-03-12', 'Intervención sitio', '', 'Atención a los usuarios en el punto de naveg', 5, '', '', '', '', 0, 362, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, '2014-03-25', 'Intervención sitio', '', 'Acompañamiento a la casa de gobierno con el ', 2, '', '', '', '', 0, 296, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, '2014-03-25', 'Otros', '', 'Conversación con residentes de Santa Elena s', 4, '', '', '', '', 0, 319, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, '2014-02-12', 'Otros', '', 'Reunión con Consuelo Giraldo y su grupo de j', 5, 'Evolucion_Joven_3.JPG', 'Evolucion_Joven_4.JPG', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 272, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, '2014-03-05', 'Intervención sitio', '', 'Se realizó una intervención en sitio y se r', 10, '', '', '', '', 0, 333, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, '2014-03-20', 'Intervención sitio', '', 'Se realizó una intervención en sitio y se r', 10, '', '', '', '', 0, 333, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, '2014-04-07', 'Otros', '', 'Se trata de ubicar al coordinador y docente e', 0, '', '', '', '', 0, 313, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, '2014-03-05', 'Intervención sitio', '', 'Se realizó una toma de sitio atendiendo a 12', 12, 'Comuna_70_Casa_de_Gobierno_de_Altavista_Inter', '20140305_092115.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 333, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, '2014-03-26', 'practicantes', '', 'Acompañamiento practicante en el sitio', 2, '', '', '', '', 0, 332, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, '2014-01-30', 'Curso, taller o charla', '', 'Charla realizada en el CAV sobre la paginaerfwetferfgdsfgsfgfgsdfgdfgdfg', 25, '2014_02_06_09_04_49.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 298, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, '2014-04-22', 'Aula Abierta', '', 'Acompañamiento en aula abierta acordado con ', 9, 'IMG_20140527_WA0012.jpg', 'IMG_20140527_WA0011.jpg', 'IMG_20140527_WA0010.jpg', 'uploads/accompaniment/accompaniment_adjunct', 0, 293, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, '2014-04-07', 'Curso, taller o charla', '', 'Durante este mes y el mes de marzo se ha real', 15, '2014_03_04_10_06_27.jpg', 'IMG_20140304_WA0005.jpg', 'IMG_20140304_WA0008.jpg', 'uploads/accompaniment/accompaniment_adjunct', 0, 163, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, '2014-06-13', 'Sensibilización', '', 'Se realiza el taller de provocando los sentid', 70, 'IMG_20140613_WA0003.jpg', 'IMG_20140613_WA0000.jpg', 'IMG_20140613_WA0004.jpg', 'uploads/accompaniment/accompaniment_adjunct', 0, 163, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, '2014-05-24', 'Intervención sitio', '', 'Participamos en una Semana Para TIC convocado', 500, '20140524_091315.jpg', '20140524_112455.jpg', '20140524_133526.jpg', 'uploads/accompaniment/accompaniment_adjunct', 0, 163, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, '2014-04-01', 'Otros', '', 'Se pasó al sitio para recoger los indicadore', 1, '', '', '', '', 0, 349, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, '2014-05-07', 'Otros', '', 'Se realizó visita de seguimiento y recolecci', 1, '', '', '', '', 0, 362, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, '2014-05-07', 'Otros', '', 'Se realizó visita de seguimiento al punto de', 1, '', '', '', '', 0, 439, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, '2014-05-07', 'Otros', '', 'Se realizó visita de seguimiento y recolecci', 4, '', '', '', '', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, '2014-05-07', 'practicantes', '', 'Acompañamiento y seguimiento al practicante ', 0, '', '', '', '', 0, 193, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, '2014-05-06', 'practicantes', '', 'Acompañamiento a la practicante Luisa en el ', 0, '', '', '', '', 0, 174, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, '2014-04-01', 'Intervención sitio', '', 'Se realizó una intervención en el punto de ', 3, '', '', '', '', 0, 348, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, '2014-05-05', 'Otros', '', 'Recoger planillas de registro de uso', 1, '', '', '', '', 0, 335, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, '2014-04-03', 'Intervención sitio', '', 'Se realizó intervención en el punto de nave', 8, '', '', '', '', 0, 333, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, '2014-05-07', 'practicantes', '', 'Acompañamiento a Luisa (practicante) curso d', 1, '', '', '', '', 0, 335, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, '2014-04-03', 'Otros', '', 'Se pasó al sitio por los registros de usuari', 1, '', '', '', '', 0, 333, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, '2014-05-07', 'Otros', '', 'Recoger planillas de registro de usos en los ', 1, '', '', '', '', 0, 332, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, '2014-01-22', 'Intervención sitio', '', 'Toma de sitio en las horas de la mañana para', 15, 'Por_mis_derechos.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 321, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, '2014-05-07', 'Otros', '', 'Se tenia programada una charla de NSN para es', 1, '', '', '', '', 0, 338, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, '2014-02-13', 'Intervención sitio', '', 'Toma de sitio de gobierno en el Centro de Ser', 5, '', '', '', '', 0, 273, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, '2014-05-05', 'Otros', '', 'Se recogieron los indicadores del sitio de go', 1, '', '', '', '', 0, 349, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, '2014-05-06', 'Otros', '', 'Se recogieron los indicadores del sitio de go', 1, '', '', '', '', 0, 348, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, '2014-04-09', 'practicantes', '', 'Se realizo un seguimiento a la practicante en', 2, '', '', '', '', 0, 362, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, '2014-04-01', 'Otros', '', 'Se recogen indicadores y no hay ninguno hasta', 0, '', '', '', '', 0, 427, 0, '0000-00-00 00:00:00', '2014-11-27 20:24:00'),
(145, '2014-02-19', 'Otros', '', 'Seguimiento al kit de inclusión digital y pr', 3, '', '', '', '', 0, 268, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, '2014-05-09', 'Sensibilización', '', 'Charla de sensibilización del Kit de inclusi', 6, '', '', '', '', 0, 124, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, '2014-02-27', 'Intervención sitio', '', 'Intervención en el punto de navegación para', 4, '', '', '', '', 0, 269, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, '2014-03-06', 'Intervención sitio', '', 'Seguimiento  al punto de navegación, atenci', 4, 'CS_Robledo1.JPG', 'P1050141.JPG', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 273, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, '2014-04-08', 'Curso, taller o charla', '', 'Acompañamiento al curso de alfabetización p', 2, '', '', '', '', 0, 206, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, '2014-02-19', 'Intervención sitio', '', 'Toma de media jornada en el sitio para acompa', 17, 'IMG_20140129_WA0015.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 427, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, '2014-05-13', 'Otros', '', 'Se recogieron los indicadores del mes de Abri', 1, '', '', '', '', 0, 334, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, '2014-02-20', 'Otros', '', 'Acompañamiento seguimiento de sitio.', 6, 'IMG_0836.JPG', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 427, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, '2014-05-14', 'Curso, taller o charla', '', 'Acompañamiento a Luisa (practicante) curso d', 1, '', '', '', '', 0, 335, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(154, '2014-05-09', 'Otros', '', 'Asistimos a la IE pero no pudimos hablar con ', 1, '', '', '', '', 0, 428, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, '2014-05-13', 'Otros', '', 'Se paso a recoger los indicadores y se reviso', 2, '', '', '', '', 0, 336, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, '2014-02-27', 'Intervención sitio', '', 'Toma de sitio para acompañamiento y sensibil', 32, 'IMG_0841.JPG', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 306, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, '2014-02-27', 'Intervención sitio', '', 'Toma de sitio para acompañamiento y sensibil', 37, 'IMG_0568.JPG', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 307, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, '2014-05-13', 'Curso, taller o charla', '', 'Acompañamiento a la primera sesión de talle', 0, '', '', '', '', 0, 175, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, '2014-05-16', 'practicantes', '', 'Se realizo seguimiento al punto de navegació', 4, '', '', '', '', 0, 333, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, '2014-05-16', 'Otros', '', 'Se paso a invitar a las personas de la biblio', 1, '', '', '', '', 0, 195, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, '2014-05-23', 'Estudiantes de PP, jóvenes por la convivenci', '', 'Se realizó acompañamiento y asesoría en al', 4, '', '', '', '', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(162, '2014-05-21', 'Curso, taller o charla', '', 'Acompañamiento en el cierre del curso avanza', 4, '', '', '', '', 0, 191, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, '2014-04-21', 'Otros', '', 'Entrega del kit de inclusión digital a la pr', 2, '', '', '', '', 0, 360, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, '2014-04-25', 'Intervención sitio', '', 'Se atendió a 2 usuarios y se les brindo ases', 2, '', '', '', '', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(165, '2014-04-25', 'Curso, taller o charla', '', 'Acompañamiento en el inicio del curso de alf', 0, '', '', '', '', 0, 193, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(166, '2014-05-13', 'Curso, taller o charla', '', 'Acompañamiento curso IE Alfonso López con p', 8, '', '', '', '', 0, 290, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, '2014-04-24', 'Curso, taller o charla', '', 'Inicio de curso de alfabetización digital co', 10, '', '', '', '', 0, 176, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, '2014-05-14', 'Grados', '', 'Cierre del curso de Marketing Digital en el C', 17, '', '', '', '', 0, 170, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, '2014-04-23', 'Curso, taller o charla', '', 'acompañamiento en el inicio de los 2 grupos ', 0, '', '', '', '', 0, 191, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, '2014-05-20', 'Intervención sitio', '', 'Se realizo seguimiento al punto de navegació', 2, '', '', '', '', 0, 333, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(171, '2014-05-29', 'Curso, taller o charla', '', 'Acompañamiento a un curso de AD y GL con la ', 1, '', '', '', '', 0, 362, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(172, '2014-05-29', 'Curso, taller o charla', '', 'Acompañamiento a un curso de AD y GL con la ', 0, '', '', '', '', 0, 176, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(173, '2014-04-21', 'Otros', '', 'Se recogen los listados de personas interesad', 1, '', '', '', '', 0, 174, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(175, '2014-04-21', 'Otros', '', 'Entrega del kit de inclusión digital al rect', 1, '', '', '', '', 0, 124, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(176, '2014-05-09', 'Curso, taller o charla', '', 'Con la programación anticipada con las encar', 28, '20140509_094202.jpg', '20140509_094319.jpg', '20140513_145422.jpg', 'uploads/accompaniment/accompaniment_adjunct', 0, 212, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(177, '2014-07-03', 'Estudiantes de PP, jóvenes por la convivenci', '', 'Se desarrolla un espacio de sensibilización ', 1, '', '', '', '', 0, 242, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(178, '2014-07-11', 'Grados', '', 'Se acompaña a al practicante con su grupo de', 8, '', '', '', '', 0, 198, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(179, '2014-04-30', 'Curso, taller o charla', '', 'Acompañamiento en el curso de herramientas w', 0, '', '', '', '', 0, 191, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(180, '2014-06-18', 'Otros', '', 'Se realizo seguimiento al punto de navegació', 2, '', '', '', '', 0, 348, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(181, '2014-05-20', 'Curso, taller o charla', '', 'Los estudiantes han tenido una respuesta posi', 10, '', '', '', '', 0, 290, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(182, '2014-07-15', 'Grados', '', 'Se acompañaron los grados de la primera etap', 30, '', '', '', '', 0, 159, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(183, '2014-06-17', 'Intervención sitio', '', 'Se realizó seguimiento y acompañamiento al ', 5, '', '', '', '', 0, 333, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(184, '2014-06-25', 'Estudiantes de PP, jóvenes por la convivenci', '', 'Reunión con dos estudiantes del fondo epm pa', 2, '', '', '', '', 0, 191, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(185, '2014-06-25', 'Curso, taller o charla', '', 'Seguimiento al curso de alfabetización digit', 1, '', '', '', '', 0, 194, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(186, '2014-06-25', 'Curso, taller o charla', '', 'Acompañamiento en la última sesión y claus', 3, '', '', '', '', 0, 211, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(187, '2014-07-01', 'Curso, taller o charla', '', 'Entrega de constancias de participación en el taller de WEB 2.0. Además, se adjuntó una relación con los nombres de los participantes para ser firmada al momento en que vayan por la constancia', 1, '', '', '', '', 0, 174, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(188, '2014-04-30', 'practicantes', '', 'Reunión con una funcionaria del CAV quien se', 13, '', '', '', '', 0, 335, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(189, '2014-07-15', 'Grados', '', 'Se realizó el cierre del curso Alfabetizaci', 10, '', '', '', '', 0, 165, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(190, '2014-04-30', 'Curso, taller o charla', '', 'Se acompaño al practicante en el inicio de c', 0, '', '', '', '', 0, 178, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(191, '2014-04-30', 'Intervención sitio', '', 'Se realizó una intervención en el punto de ', 5, '', '', '', '', 0, 333, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(192, '2014-04-30', 'Otros', '', 'Se recogieron los indicadores del punto de na', 1, '', '', '', '', 0, 333, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(193, '2014-02-19', 'Otros', '', 'Seguimiento al punto de navegación. Se acomp', 10, '', '', '', '', 0, 302, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(194, '2014-03-18', 'Otros', '', 'Seguimiento al punto de navegación. Se acomp', 9, '', '', '', '', 0, 302, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(195, '2014-04-24', 'Otros', '', 'Seguimiento al punto de navegación. Se acomp', 11, '', '', '', '', 0, 302, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(196, '2014-05-14', 'Otros', '', 'Seguimiento al punto de navegación. Se acomp', 2, '', '', '', '', 0, 302, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(197, '2014-06-11', 'Otros', '', 'Seguimiento al punto de navegación. Se acomp', 3, '', '', '', '', 0, 336, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(198, '2014-06-24', 'Otros', '', 'Se recogen los muebles y equipos para realiza', 2, '', '', '', '', 0, 302, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(199, '2014-07-01', 'Curso, taller o charla', '', 'Firma de constancias de participación en el ', 3, '', '', '', '', 0, 362, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(200, '2014-07-01', 'Otros', '', 'Recolección de indicadores de uso de los equiposAtención a usuarios', 2, '', '', '', '', 0, 439, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(201, '2014-07-01', 'Otros', '', 'Recolección de indicadores de uso de los equipos, queda una carpeta en el punto de navegación y otra en archivo para el alfabetizador.', 4, '', '', '', '', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(202, '2014-02-12', 'Intervención sitio', '', 'Seguimiento e intervención al punto de naveg', 20, 'Salvador_9b.JPG', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 307, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(203, '2014-07-01', 'Estudiantes de PP, jóvenes por la convivenci', '', 'Recolección de indicadores de uso de los equ', 10, '', '', '', '', 0, 335, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(204, '2014-03-20', 'Intervención sitio', '', 'Seguimiento e intervención al punto de naveg', 15, '', '', '', '', 0, 307, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(205, '2014-04-23', 'Intervención sitio', '', 'En este mes se acompaña el punto de navegaci', 18, '', '', '', '', 0, 307, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(206, '2014-05-26', 'Otros', '', 'Seguimiento punto de navegación.Este mes s', 40, 'IMG_20140526_WA0006.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 307, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(207, '2014-07-02', 'Otros', '', 'Recolección de indicadores de uso de los equ', 1, '', '', '', '', 0, 332, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(208, '2014-07-04', 'Otros', '', 'Recolección de indicadores de uso.Reunión', 1, '', '', '', '', 0, 348, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(209, '2014-07-01', 'Estudiantes de PP, jóvenes por la convivenci', '', 'Se realizó una reunión con el estudiante de', 3, '', '', '', '', 0, 333, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(210, '2014-07-02', 'Otros', '', 'Seguimiento y recolección de los indicadores', 1, '', '', '', '', 0, 333, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(211, '2014-07-10', 'Curso, taller o charla', '', 'Acompañamiento al cierre del curso de alfabe', 1, '', '', '', '', 0, 362, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(212, '2014-07-08', 'Otros', '', 'Visita de seguimiento con la funcionaria del sitio.  se pego la información sobre el mantenimiento de los equipos. Quedo pendiente programar charla de dispositivos moviles con la comunidad aleda', 1, '', '', '', '', 0, 439, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(213, '2014-07-08', 'Otros', '', 'Visita de seguimiento con la funcionaria del sitio. se recogieron las planillas del mes de julio y se pego la información sobre el mantenimiento de los equipos. quedo pendiente iniciar inscripciones para cursos de alfabetización digital  en el segundo semestre.  Acompañamiento al cierre del curso de alfabetización digital con personas del club de vida de la Unidad Integral 6 de Belén. quedo pendiente iniciar las inscripciones del taller de herramientas web 2.0 para el segundo semestre', 1, '', '', '', '', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(214, '2014-07-10', 'Curso, taller o charla', '', 'Acompañamiento en el cierre del curso de alfabetización digital con personas del CEDEZO de Belén. se realizó la charla de retroalimentación al proceso que se desarrollo con ellos y quedo pendiente programar un taller de herramientas web 2.0 para el segundo semestre.', 2, '', '', '', '', 0, 176, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(215, '2014-07-08', 'Curso, taller o charla', '', 'Se realizó una 7 sesión de alfabetización ', 3, '', '', '', '', 0, 215, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(216, '2014-07-08', 'Curso, taller o charla', '', 'Se paso a dejar los certificados del CEDEZO G', 1, '', '', '', '', 0, 175, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(217, '2014-07-09', 'Curso, taller o charla', '', 'se realizo una asesoría de gobierno en linea', 1, '', '', '', '', 0, 211, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(218, '2014-07-18', 'Otros', '', 'Se realizó la entrega de muebles en el punto de navegaci', 1, '', '', '', '', 0, 334, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(219, '2014-07-18', 'Otros', '', 'Se entregaron los muebles del punto de navega', 1, '', '', '', '', 0, 362, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(220, '2014-07-18', 'Otros', '', 'Se entregaron los muebles del punto de navega', 1, '', '', '', '', 0, 439, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(221, '2014-07-18', 'Otros', '', 'Se entregaron los muebles del punto de navega', 1, '', '', '', '', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(222, '2014-07-18', 'Otros', '', 'Se entregaron los muebles del punto de navega', 1, '', '', '', '', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(223, '2014-07-18', 'Otros', '', 'Se entregaron los muebles del punto de navega', 1, '', '', '', '', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(224, '2014-05-23', 'Curso, taller o charla', '', 'Acompañamiento curso Narrativas en el Telece', 4, '', '', '', '', 0, 205, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(225, '2014-05-26', 'Intervención sitio', '', 'Motivación a los usuarios y usuarias del pun', 5, '', '', '', '', 0, 427, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(226, '2014-05-27', 'Curso, taller o charla', '', 'Los asistentes manifiestan haber aprendido de', 10, '', '', '', '', 0, 290, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(227, '2014-05-28', 'Aula Abierta', '', 'La docente nos manifiesta el proceso tan posi', 2, '', '', '', '', 0, 430, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(228, '2014-05-28', 'Aula Abierta', '', 'Seguimiento al aula abierta del centro educat', 2, '', '', '', '', 0, 433, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(229, '2014-07-22', 'Otros', '', 'Entrega de equipos en el cav de belencito ', 1, '', '', '', '', 0, 335, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(230, '2014-05-07', 'Intervención sitio', '', 'Seguimiento a la conectividad del parque y co', 3, '', '', '', '', 0, 353, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(231, '2014-05-29', 'Curso, taller o charla', '', 'Acompañamiento a curso con comunidad sobre N', 3, '', '', '', '', 0, 205, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(232, '2014-01-21', 'Otros', '', 'Seguimiento e intervención al punto de naveg', 10, '', '', '', '', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(233, '2014-02-14', 'Otros', '', 'Seguimiento e intervención al punto de naveg', 3, '', '', '', '', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(234, '2014-03-12', 'Otros', '', 'Seguimiento e intervención al punto de naveg', 12, '2014_02_13_12_54_31.jpg', '2014_03_19_10_04_18.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(235, '2014-05-23', 'Otros', '', 'En esta visita se converso con una usuaria so', 3, '20140523_103255.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(236, '2014-05-29', 'Curso, taller o charla', '', 'Se realizó acompañamiento a la última sesi', 0, '', '', '', '', 0, 194, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(237, '2014-05-29', 'practicantes', '', 'Seguimiento practicante y entrega de chaleco ', 2, '', '', '', '', 0, 333, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(238, '2014-07-29', 'Intervención sitio', '', 'Seguimiento de punto de navegación e interve', 16, '', '', '', '', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(239, '2014-06-24', 'Otros', '', 'Se realiza la recolección de los equipos par', 4, '', '', '', '', 0, 314, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(240, '2014-02-27', 'Intervención sitio', '', 'Toma de sitio para acompañamiento y sensibil', 8, '', '', '', '', 0, 306, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(241, '2014-02-27', 'Intervención sitio', '', 'Toma de sitio para acompañamiento y sensibil', 6, '', '', '', '', 0, 294, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(242, '2014-03-05', 'Otros', '', 'Recolección de indicadores y seguimiento de ', 2, '', '', '', '', 0, 291, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(243, '2014-03-05', 'Otros', '', 'Recolección de indicadores y seguimiento de ', 2, '', '', '', '', 0, 292, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(244, '2014-03-05', 'Otros', '', 'Recolección de indicadores y seguimiento de ', 2, '', '', '', '', 0, 294, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(245, '2014-03-05', 'Otros', '', 'Recolección de indicadores y seguimiento de ', 2, '', '', '', '', 0, 300, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(246, '2014-02-05', 'Otros', '', 'Recolección de indicadores y seguimiento de ', 2, '', '', '', '', 0, 306, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(247, '2014-03-05', 'Otros', '', 'Recolección de indicadores y seguimiento de ', 5, '', '', '', '', 0, 307, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(248, '2014-03-05', 'Otros', '', 'Recolección de indicadores y seguimiento de ', 2, '', '', '', '', 0, 321, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(249, '2014-03-05', 'Otros', '', 'Recolección de indicadores y seguimiento de ', 2, '', '', '', '', 0, 437, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(250, '2014-03-05', 'Otros', '', 'Recolección de indicadores y seguimiento de ', 2, '', '', '', '', 0, 436, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(251, '2014-03-06', 'Intervención sitio', '', 'Toma de sitio para acompañamiento y sensibil', 2, '', '', '', '', 0, 321, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(252, '2014-03-10', 'practicantes', '', 'Capacitación y comienzo de horas de Jasmin d', 3, 'IMG219.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 321, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(253, '2014-06-03', 'Curso, taller o charla', '', 'Asesoría en Gel con chicas de 11 que buscan ', 3, '', '', '', '', 0, 449, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(254, '2014-03-13', 'Curso, taller o charla', '', 'Comienzo de curso de alfabetización Digital ', 13, '2014_04_10_15_05_27.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 214, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(255, '2014-06-09', 'Aula Abierta', '', 'Seguimiento al aula abierta, se aprovecha la ', 15, 'IMG_1593.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 313, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(256, '2014-06-10', 'Grados', '', 'Cierre del proceso en compañía de la Psicol', 10, '', '', '', '', 0, 290, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(257, '2014-03-20', 'Curso, taller o charla', '', 'Acompañamiento al curso de alfabetización d', 13, 'IMG_20140313_WA0009.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 290, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(258, '2014-06-24', 'Otros', '', 'Recoleccion de indicadores y seguimiento al p', 1, '', '', '', '', 0, 427, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(259, '2014-04-04', 'Otros', '', 'Recolección de indicadores y seguimiento de ', 2, '', '', '', '', 0, 291, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(260, '2014-04-04', 'Otros', '', 'Recolección de indicadores y seguimiento de ', 2, '', '', '', '', 0, 292, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(261, '2014-04-04', 'Otros', '', 'Recolección de indicadores y seguimiento de ', 2, '', '', '', '', 0, 294, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(262, '2014-04-04', 'Otros', '', 'Recolección de indicadores y seguimiento de ', 2, '', '', '', '', 0, 171, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(263, '2014-04-04', 'Otros', '', 'Recolección de indicadores y seguimiento de ', 2, '', '', '', '', 0, 300, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(264, '2014-03-27', 'Otros', '', 'Seguimiento a la conexión de los equipos y e', 6, '', '', '', '', 0, 318, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(265, '2014-05-16', 'Otros', '', 'Se realiza seguimiento al lugar. No se ha rea', 13, 'IMG_20140526_WA0002.jpg', 'IMG_20140526_WA0001.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 318, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(266, '2014-07-07', 'Otros', '', 'Se realizó reunión de construcción del pro', 16, '', '', '', '', 0, 155, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(267, '2014-05-06', 'Aula Abierta', '', 'En esta reunión se acompaña el Aula Abierta', 9, 'IE_Fe_y_Alegria_Villa_de_la_Candelaria_Alfabe', 'IE_Fe_y_Alegria_Villa_de_la_Candelaria_Alfabe', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 409, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(268, '2014-07-16', 'Intervención sitio', '', 'Se realizó una visita al sitio para ver cóm', 1, '20140717_154659.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 248, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(269, '2014-07-11', 'Grados', '', 'Se realizaron los grados de el curso de Alfabetización digital y Gobierno en línea con el grupo de abuelos y abuelas cuenta cuentos de la biblioteca.', 15, 'Taller_de_AD_con_Abuelos_y_abuelas_cuenta_cue', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 180, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(270, '2014-07-18', 'Otros', '', 'Se realizó entrega de 3 muebles con la image', 2, '', '', '', '', 0, 246, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(271, '2014-07-10', 'Grados', '', 'Se realizó el cierre del curso de Alfabetiza', 7, 'Cierre_Pedro_Luis_Villa_comuna_3.JPG', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 149, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(272, '2014-07-15', 'Grados', '', 'Se realizó el acompañamiento al cierre a lo', 16, 'Cierre_CEDEZO_de_Moravia_comuna_4.JPG', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 166, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(273, '2014-04-01', 'Sensibilización', '', 'Se realizó la presentación del programa a l', 9, '', '', '', '', 0, 409, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(274, '2014-07-02', 'Intervención sitio', '', 'La practicante de la zona realizó un acompa', 7, '', '', '', '', 0, 240, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(275, '2014-01-29', 'Otros', '', 'Se realizó una visita a la Inspección Doce de Octubre con el fin de mirar las condiciones en las que se encuentra el Sitio. Los computadores se encuentran en buen estado, tienen buena conexión a internet. Un funcionario llamado Martín Fernando Velásquez, secretario, manifestó que no se llevan los registros de usuarios porque deben cumplir con muchas responsabilidades y en ocasiones no tienen tiempo.Se le explicó al funcionario la importancia de llevar el registro y se dejó en el Sitio dos planillas para que los usuarios se registren. Se acordó una próxima visita para conversar con la Inspectora Beatriz Elena Gallo López, quien no se encontraba en la oficina. ', 2, '', '', '', '', 0, 277, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(276, '2014-07-03', 'Intervención sitio', '', 'La practicante de la zona, realizó un acompañamiento durante la mañana y parte de la tarde en el punto de navegación de la Casa de la Cultura.', 19, '', '', '', '', 0, 244, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(277, '2014-07-08', 'Intervención sitio', '', 'La practicante realizó acompañamiento en el punto de navegación de la Inspección de Aranjuez', 4, '', '', '', '', 0, 255, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(278, '2014-06-24', 'Intervención sitio', '', 'Acompañamiento en el punto de navegación de la inspección ', 2, '', '', '', '', 0, 255, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(279, '2014-06-26', 'Intervención sitio', '', 'Se realizó un acompañamiento en el Punto de navegación por parte de la practicante de la zona en el Centro Cultural Los Colores', 2, '', '', '', '', 0, 248, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(280, '2014-06-17', 'Intervención sitio', '', 'Se realizó acompañamiento en el punto de navegación de la Inspección de Aranjuez', 2, '', '', '', '', 0, 255, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(281, '2014-02-20', 'Intervención sitio', '', 'Se realizó un acompañamiento en el punto de navegación de la BPP.', 14, '', '', '', '', 0, 240, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(282, '2014-04-04', 'Otros', '', 'Recolección de indicadores y seguimiento de sitio.', 2, '', '', '', '', 0, 306, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(283, '2014-04-08', 'Otros', '', 'Visita técnica en conjunto con el área de Comunicación Pública para la preparación del evento de socialización del kit de inclusión y la difusión del programa en la comunidad educativa con el fin de articular estudiantes beneficiarios de PP a nuestros procesos.', 3, '', '', '', '', 0, 406, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(284, '2014-07-04', 'Grados', '', 'Cierre del proceso y finalizacion del curso, se resuelven algunas inquietudes con los asistentes referentes al tema de blog y redes sociales.', 4, '', '', '', '', 0, 173, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(285, '2014-07-18', 'practicantes', '', 'Acompañamiento a la clausura del taller de narrativas dictado por la practicante Isis Guisao, este se realizó con los jóvenes del programa Jóvenes por la Vida en el Centro Cultural de Moravia.Los jóvenes manifestaron haber adquirido conocimientos técnicos que les permite tomar fotografías de una mejor forma, ser un poco más sensibles a la hora de ver una película o algún contenido audiovisual.Como sugerencia dijeron que les gustaría que el taller fuera más extenso y manifestaron que Isis fue muy clara en sus explicaciones.Esta clausura fue acompañada por la profesional de monitoreo, la comunicadora, el promotor y coordinadora territorial y general del programa, quienes expresaron comentarios positivos del taller en general.Queda pendiente retomar la articulación el próximo semestre.', 25, 'UPJ_Jovenes_por_la_Vida_Clausura_Taller_de_Na', 'UPJ_Jovenes_por_la_Vida_Clausura_Taller_Narra', 'UPJ_Jovenes_por_la_Vida_Clausura_Taller_Narra', 'uploads/accompaniment/accompaniment_adjunct', 0, 288, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(288, '2014-11-18', 'Otros', 'Seguimiento al punto de conexion WIFI', 'Se verificó el estado de la red WIFI del parque, se contacto un joven llamado Sebastian quien se encontraba utilizando la red para ingresar a redes sociales, es residente en Rionegro y se enteró de la red WIFI del parque porque le apareció la red en su dispositivo móvil.', 1, 'Parque_del_Poblado.JPG', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 354, 38, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(289, '2014-11-19', 'Curso, taller o charla', 'Acompañamiento kit de inclusión', 'Se realizó acompañamiento a Vidalia, dinamizadora del Telecentro, en el uso del kit de inclusión con personas en situación de discapacidad, las personas se encontraban muy entusiasmadas con las actividades propuestas. ', 1, 'Telecentro_Zafra_Acompanamiento_Kit_de_inclusion.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 454, 15, '0000-00-00 00:00:00', '2014-11-21 19:24:05'),
(290, '2014-11-26', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Acompañamiento a Gestor TIC', 'se acompañó a Mateo Meneses, estudiante de Pascual Bravo en el inicio del curso de alfabetización digital con adultos mayores del club de vida Alegrías de la comuna 13', 12, 'IMG_1209.JPG', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 206, 38, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(291, '2014-11-25', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Entrega de puesto al gestor TIC ', 'Se asiste con Diego Saldarriaga estudiante de diseño gráfico quién nos acompañará en en el punto de navegación de buenos aires 3 días de la mañana y en La inspección 9b otros 2 días en horario de 12m a 5 pm. Serie le presenta al contacto del sitio para que le firme las horas y para que sepa del acompañamiento. Se le envía correo con la información necesaria y los formatos para llenar en el punto se firma pacto de acompañamiento"', 1, 'IMG_20141125_144356.jpg', 'IMG_20141125_153139.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 314, 16, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(292, '2014-11-26', 'Curso, taller o charla', 'Charla de NSN para adultos', 'Se realiza la charla de manera exitosa con participación de algunos de los asistentes (20 aproximadamente)\r\nSe sugiere realizar mas de estas intervenciones en el CAV. Se toma asistencia con la gestora TIC Isabel del punto de navegación."', 1, 'IMG_20141126_WA0008.jpg', 'IMG_20141126_WA0011.jpg', 'IMG_20141126_WA0000.jpg', 'uploads/accompaniment/accompaniment_adjunct', 0, 298, 16, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(293, '2014-11-27', 'Curso, taller o charla', 'Charla NSN Para Padres', 'Se realiza una charla muy exitosa y la cual deja a la funcionaria muy entusiasmada y sugiere que en el mes de diciembre se hagan mas charlas de estas. Las personas que estaban a la espera de su turno de atención recibieron la información, aproximadamente estuvieron 40 personas el 80% de la charla.\r\nSe reporta al área de conectividad que hay unas fallas en los equipos del punto de navegación.\r\nSe determina que los acompañantes de Jóvenes por la vida esta de lmv por la tarde y los Mj por la mañana\r\nSe deja fotos evidencia de la actividad."', 1, 'IMG_20141127_115026.JPG', 'IMG_20141127_WA0007.jpg', 'IMG_20141127_WA0025.jpg', 'uploads/accompaniment/accompaniment_adjunct', 0, 436, 16, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(295, '2014-11-28', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Entrega de puesto a Gestor Tic', 'Se asiste con el gestor Diego Saldarriaga a la inspección 9b para que conozca a los encargados y mire el espacio en que va a trabajar, se le indica todo respecto a el registro de las planillas y las dinámicas del sitio.\r\nSe reporta las fallas en los equipos al equipo de conectividad y se deja registro fotográfico de la visita.', 1, '', '', '', '', 0, 307, 16, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(296, '2014-11-28', 'Curso, taller o charla', 'Charla NSN Adultos', 'Se asiste para realizar la charla que se había pactodo en el centro de capacitación Maria Auxiliadora con la Hmna Angela, que está arriba del Cav. Asisten 6 adultos muy juiciosos. Se sugiere iniciar un proceso de alfabetización digital con esta población.\r\nContactar el próximo año para reiniciar procesos.', 1, 'IMG_20141128_110525.jpg', 'IMG_20141128_092346.jpg', 'IMG_20141128_092257.jpg', 'uploads/accompaniment/accompaniment_adjunct', 0, 298, 16, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(298, '2014-11-19', 'practicantes', 'Acompañamiento Primera Sesión Gobierno en línea', 'Se acompañó a la estudiante de pp en la primera sesión del taller de gobierno en línea con la comunidad.', 10, 'Parque_Biblioteca_SADEP_Taller_de_GEL_Comunidad_20141119.jpg', 'Parque_Biblioteca_SADEP_Taller_GEL_20141119.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 194, 15, '0000-00-00 00:00:00', '2014-11-28 21:35:07'),
(299, '2014-11-18', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Capacitación Estudiantes de pp', 'Se realizó la capacitación de Gobierno en línea con dos estudiantes de pp que realizaran su labor social en el taller de gobierno en línea que se dictará en el Parque Biblioteca San Antonio de Prado.', 2, 'Telecentro_Pradito_Capacitacion_Estudiantes_de_pp.jpg', 'Telecentro_Pradito_Estudiante_de_pp_20141118.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 211, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(300, '2014-11-21', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Acompañamiento tercera sesión Gobierno en línea', 'Se realizó acompañamiento a los gestores TIC Paula y Juan Pablo en la segunda sesión del taller de GEL para comunidad.', 11, 'Parque_Biblioteca_SADEP_Segunda_sesion_GEL_20141121.jpg', 'Parque_Biblioteca_SADEP_Segunda_sesion_GEL_20141121.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 194, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `accompaniments` (`id_accompaniment`, `accompaniment_date`, `accompaniment_type`, `accompaniment_title`, `accompaniment_description`, `participant_number`, `accompaniment_adjunct`, `accompaniment_adjunct1`, `accompaniment_adjunct2`, `dir`, `accompaniment_type_id`, `site_id`, `user_id`, `creation_date`, `modification_date`) VALUES
(301, '2014-11-28', 'practicantes', 'Acompañamiento última sesión Gobierno en línea', 'Se acompañó a los gestores TIC en la última sesión del taller de gobierno en línea, se hizo la clausura del taller y se programo una sesión de dispositivos móviles.', 13, 'Parque_Biblioteca_SADEP_Ultima_sesion_de_Taller_GEL_20141128.jpg', 'Parque_Biblioteca_SADEP_Certificacion_GEL_20141128.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 194, 15, '0000-00-00 00:00:00', '2014-11-28 21:40:43'),
(302, '2014-11-28', 'Otros', 'Recolección de indicadores', 'Se realizó una visita a la corregiduria para identificar el funcionamiento del punto de navegación, el señor vigilante fue la persona que nos contó como estaba funcionando el sitio, además nos entrego los indicadores de uso.', 1, 'Corregiduria_El_Limonar_Seguimiento_al_sitio_1.jpg', 'Corregiduria_El_Limonar_Seguimiento_al_sitio_2.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 336, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(303, '2014-12-02', 'Intervención sitio', 'Seguimiento al punto de navegación', '\r\nSe verifica el flujo de usuarios al punto el cual es nulo por las limitaciones a la entrada del sitio, se le pregunta a varios funcionarios sobre la afluencia y manifiestan que nadie usa estos PC.\r\nPor medio escrito se le manifiesta a el área de conectividad la problematica y la propuesta de cambiar estos equipos al C AV de caunces y dejar de intervenir este sitio por que se esta perdiendo este servicio. Se intentó contactar con la coordinadora del servicio pero se necesita reservar cita previa.', 0, 'IMG_20141202_100453.jpg', 'IMG_20141202_WA0015.jpeg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 427, 16, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(304, '2014-12-02', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Visita a gestor TIC.', '\r\nReunión con ISabel Florez quién esta muy juiciosa prestando su labor social en el lugar. Se recibe buenas referencias de los gestores por parte del contacto en el sitio y se solicitan las cedulas de los contactos para llenar la base de datos."', 1, 'IMG_20141202_111831.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 314, 16, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(305, '2014-12-02', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Visita a gestor TIC.', '\r\nReunión con Diego Saldarriaga quién no estaba en el lugar por que se fue temprano a almorzar. Se recibe buenas referencias de los gestores por parte del contacto en el sitio y se solicitan las cédulas de los contactos para llenar la base de datos. Se propone realizar charlas de navegar sin naufragar en el sitio por la problematica expresada por los funcionarios."', 1, '', '', '', '', 0, 307, 16, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(306, '2014-12-04', 'Curso, taller o charla', 'Charla NSN', 'Se realiza la charla de NSN programada para este día con una asistencia de 7 personas entre adultos y niños. La realizó el practicante Diego Saldarriaga con mucho éxitoy con mucha participación de las personas sobre todo durante los videos de Grooming y de Amada Todd.\r\nPendiente de la realización de la otra charla el miércoles 10.', 0, 'IMG_20141204_WA0015.jpg', 'IMG_20141204_WA0016.jpg', 'IMG_20141204_WA0020.jpg', 'uploads/accompaniment/accompaniment_adjunct', 0, 307, 16, '2014-12-05 10:28:15', '2014-12-05 15:32:08'),
(307, '2014-12-04', 'Sensibilización', 'Sensibilización Kit de Inclusión', 'Registro audiovisual de una sesión de sensibilización con el kit de inclusión digital orientada a madres de familia con el fin de sistematizar las evidencias del buen uso y apropiación de estas herramientas en el sitio.', 6, 'Buen_Comienzo_La_Huerta_Seguimiento_y_registro_del_KIT_2.jpg', 'Buen_Comienzo_La_Huerta_Seguimiento_y_registro_del_KIT_3.jpg', 'Buen_Comienzo_La_Huerta_Seguimiento_y_registro_del_KIT.jpg', 'uploads/accompaniment/accompaniment_adjunct', 0, 413, 17, '2014-12-05 11:13:02', '0000-00-00 00:00:00'),
(308, '2014-12-01', 'Grados', 'Entrega de Certificados curso Gobierno en Linea', 'Se realizó la entrega de certificados del curso de Gobierno en Linea acompañado por el Gestor TIC Steven Ocampo.', 0, '20141129_113331.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 450, 38, '2014-12-05 11:45:52', '0000-00-00 00:00:00'),
(309, '2014-12-05', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Acompañamiento a gestores TIC', 'Se realizó acompañamiento al curso de alfabetización digital orientado por 2 gestores TIC. en esta sesión se dio una asesoría básica sobre fotografía a los integrantes del grupo.', 2, '2014_12_05_15_40_26.jpg', '2014_12_05_15_46_01.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 362, 14, '2014-12-09 11:28:15', '0000-00-00 00:00:00'),
(311, '2014-12-09', 'Curso, taller o charla', '"Charla de NSN para niños.', 'Se realiza la primera charla programada con niñ@s del parque que asisten al punto de navegación y a los servicios del parque. la charla fue con 16 personas entre ellos adultos acompañantes. Los funcionarios tenían todos los elementos necesarios para realizar la charla que salió muy bien.\r\nSe pide que me envíen la copia de la aistencia. Se deja copias y fotos como evidencia de la actividad"', 0, 'IMG_20141209_151636.jpg', 'IMG_20141209_151655.jpg', 'IMG_20141209_153551.jpg', 'uploads/accompaniment/accompaniment_adjunct', 0, 318, 16, '2014-12-10 12:01:29', '0000-00-00 00:00:00'),
(312, '2014-12-10', 'Curso, taller o charla', 'Charla NSN', 'Se realiza la charla de NSN programada para este día con una asistencia de 10 personas entre adultos y niños. Se desarrolló mucho éxito y con mucha participación de las personas sobre todo durante los vídeos.\r\nSe le informa a la inspectora que se le enviará un mail con fotos adjuntas y que continuamos contando con su colaboración para realizar charlas como estas.Se deja evidencia con fotos de la actividad."', 0, 'IMG_20141210_145159.jpg', 'IMG_20141210_145140.jpg', 'IMG_20141210_145142.jpg', 'uploads/accompaniment/accompaniment_adjunct', 0, 307, 16, '2014-12-11 09:50:13', '0000-00-00 00:00:00'),
(313, '2014-12-11', 'Curso, taller o charla', 'Charla de NSN jóvenes.', 'Se realiza la primera charla programada con jóvenes del parque que asisten al punto de navegación y a los servicios del Inder. La charla fue con 18 personas entre ellos adultos acompañantes. Los funcionarios tenían todos los elementos necesarios para realizar la charla que salió muy bien.\r\nSe pide que me envíen la copia de la asistencia. Se adjunta fotos como evidencia de la actividad.', 0, 'IMG_20141211_155522.jpg', 'IMG_20141211_154158.jpg', 'IMG_20141211_150823.jpg', 'uploads/accompaniment/accompaniment_adjunct', 0, 318, 16, '2014-12-12 09:11:17', '0000-00-00 00:00:00'),
(314, '2014-12-03', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Empalme Gestor Tic', 'Titulo: Visita con Gestor Tic. Participantes: Maria del Socorro. Aspectos generales: Se presentó al gestor Tic que acompañará el Cav, se observaron algunas dinámicas del lugar y se  sugirió realizar una observación intencionada de las necesidades de las personas que frecuentan el lugar para poder pensar en procesos formativos pertinentes. Además de esto se indagó por los servicios que se ofrecen en el lugar resaltando toda la parte de la registraduría, asi pues el Gestor tic quedó con el compromiso de continuar ese diagnóstico además de potenciar el uso de las planillas dado que allí no se llenan.', 1, 'Cav_america_Seguimiento_al_sitio.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 246, 23, '2014-12-16 08:33:21', '0000-00-00 00:00:00'),
(315, '2014-12-10', 'Intervención sitio', 'Gobierno en linea', 'Titulo: Gobierno en línea con Víctimas. Participantes: Victimas comuna 3. Aspectos generales: Se acompañó la jornada con asesorías individuales respecto de las necesidades de información de cada persona. Se dio a conocer el chat del DPS a algunos funcionarios y una de las víctimas se dio cuenta a través de este que había sido beneficiada para vivienda', 30, 'Jose_Antonio_Galan_Intervencion_con_Victimas_1.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 256, 23, '2014-12-16 09:09:10', '0000-00-00 00:00:00'),
(319, '2014-12-05', 'practicantes', 'Sensibilización sitio público.', 'La señal Wi-Fi es débil porque, al parecer, el techo-huerta bloquea la señal. Ya hubo una reunión con el área de Conectividad. En el sitio se motivan más de 70 personas, entre turistas, guías y comunidad a darle un buen uso a la red Wi-Fi, y a apropiarse de plataformas como Mi Medellín. Además, durante las actividades el equipo de comunicaciones publicó en Twitter imágenes que mencionan al @ParqueArvi.', 77, '2014_12_05_11_03_21.jpg', '2014_12_05_11_04_46.jpg', '', 'uploads/accompaniment/accompaniment_adjunct1', 0, 317, 37, '2014-12-16 09:43:30', '2014-12-16 14:45:00'),
(320, '2014-12-12', 'Grados', 'Cierre de curso', 'Titulo: Cierre de curso. Participantes: Grupo A.D cedezo. Aspectos generales: Aunque fue un grupo muy pequeño e limpacto del curso con las persoans fue muy grande. Satisfechos con el proceso, con el Gestor Tic y muy interesados en nuevos procesos para el 2015', 6, 'Cedezo_Manrique_Cierre_de_curso_1.jpg', 'Cedezo_Manrique_Cierre_de_curso_6.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 165, 23, '2014-12-16 09:48:07', '0000-00-00 00:00:00'),
(323, '2014-12-05', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Sensibilización sitio público', 'Aquí hay varias señales Wi-Fi: en el parque, al frente de la iglesia, prima la señal de "MDE Inteligente", aunque parece algo débil. Y al frente de la casa de Gobierno, hay buena señal de "Medellín Digital" (del punto de Navegación). Se motiva a más de 20 personas a darle un buen uso a la red Wi-Fi, y a apropiarse de plataformas como Mi Medellín. ', 22, '', '', '', '', 0, 319, 37, '2014-12-16 09:50:48', '0000-00-00 00:00:00'),
(324, '2014-12-15', 'Grados', 'Cierre de curso', 'Titulo: Cierre de curso. participantes: Grupo A.D y Gobierno en línea-. Aspectos generales: Las personas quedaron muy interesadas en continuar con procesos en el 2015 y agradecieron la labor del gestor Tic.', 22, 'Telecentro_V_S_Cierre_de_curso_A_D_Y_GEL_18.jpg', 'Telecentro_V_S_Cierre_de_curso_A_D_Y_GEL_1.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 198, 23, '2014-12-16 09:52:27', '0000-00-00 00:00:00'),
(325, '2014-12-10', 'Curso, taller o charla', 'Taller de realización Audiovisual con Rara Colecti', 'Dos estudiantes de grado 11 de la intitución educativa asisten a la primera sesión de taller. Queda pendiente la autorización de los padres de una de ellas y convocar a una más, para que sean 3 estudiantes.', 2, '', '', '', '', 0, 326, 37, '2014-12-16 10:00:28', '0000-00-00 00:00:00'),
(326, '2014-12-11', 'Curso, taller o charla', 'Taller de realización Audiovisual con Rara Colecti', 'Dos estudiantes de grado 11 de la intitución educativa asisten a la segunda sesión de taller. Ya se tienen las dos autorizaciones de padres de familia.', 2, '', '', '', '', 0, 326, 37, '2014-12-16 10:01:02', '0000-00-00 00:00:00'),
(327, '2014-12-12', 'Curso, taller o charla', 'Taller de realización Audiovisual con Rara Colecti', 'Dos estudiantes de grado 11 de la intitución educativa asisten a la tercera sesión de taller. ', 2, '', 'IMG_20141212_WA0024.jpg', '', 'uploads/accompaniment/accompaniment_adjunct1', 0, 326, 37, '2014-12-16 10:02:02', '0000-00-00 00:00:00'),
(328, '2014-12-05', 'Intervención sitio', 'Seguimiento al punto de navegación', 'Aquí hay problemas de configuración del internet: cada vez que se reinician los equipos, hay que configurar de nuevo el internet, y esto ha hecho que varios usuarios desistan del servicio. Se genera caso en Aranda con ticket #382276 para el Punto de Navegación.', 1, '', '', '', '', 0, 296, 37, '2014-12-16 10:05:16', '0000-00-00 00:00:00'),
(329, '2014-12-11', 'Intervención sitio', 'Seguimiento al sitio de Gobierno y recolección de ', 'Se conversa con la encargada Gloria del Río, quien solicita más acompañamiento de un practicante o estudiante. Hay que hacer la gestión con PP y el Fondo EPM. Hay varios usuarios interesados en procesos de formación más largos. La encargada pregunta por la clave del Wi-Fi. Pendiente consultar con el área de conectividad y responderle. Retomar contacto después del 18 de enero.', 1, '', '', '', '', 0, 294, 37, '2014-12-16 10:05:52', '0000-00-00 00:00:00'),
(330, '2014-12-11', 'Intervención sitio', 'Seguimiento al sitio de Gobierno y recolección de ', 'Se conversa con los encargados Luz Edilia Ospina y Samir Murillo, quienes solicitan más acompañamiento de un practicante o estudiante, ojalá de población LGTB. Hay que hacer la gestión con PP y el Fondo EPM. También preguntan si hay modo de bloquear ciertos sitios web indeseables (pornográficos) Se identifica la necesidad de formación en internet seguro (hay usuarias con perfiles para el trabajo sexual..) y también en narrativas. Pendiente consultar con el área de conectividad la restricción de sitios web y responderles. No tienen receso de fin de año.', 2, '', '', '', '', 0, 300, 37, '2014-12-16 10:06:33', '0000-00-00 00:00:00'),
(331, '2014-12-11', 'Intervención sitio', 'Seguimiento al sitio de Gobierno e indicadores', 'Se conversa con la encargada Olga Guzmán, el vigilante Carlos Monsalve, y la líder Arnobis Santillana. En este sitio hay buen flujo de usuarios, se identifica la potencialidad de reunir grupos de alfabetización digital y llevarlos a la Escuela del Maestro. Retomar contacto después del 18 de enero. Hay un usuario con alto volumen y no atiende la recomendación de bajarle: se desactivan todos los altavoces como medida provisional. El vigilante pregunta por la clave del Wi-Fi. Pendiente consultar con el área de conectividad y responderle. ', 3, '', '', '', '', 0, 321, 37, '2014-12-16 10:07:22', '0000-00-00 00:00:00'),
(332, '2014-12-16', 'Otros', 'Visita Inauguración Aula Ambiental Sol de Oriente', 'Se realiza una visita de reconocimiento al Aula Ambiental de Sol de Oriente, con el fin de conocer personas, organizaciones y espacios para articular con la dinámica de Apropiaciónd e las TIC en la I.E. Sol de Oriente. Hay pues, nuevos espacios del Aula Ambiental, la Mesa Ambiental de la Comuna 8, y más de 30 Juntas de Acción Comunal para la gestión."', 0, '', '', '', '', 0, 326, 37, '2014-12-17 09:54:53', '0000-00-00 00:00:00'),
(333, '2014-12-18', 'practicantes', 'Acompañamiento taller Eafit_Labs Comunitarios', 'Explorando lo que sería un Laboratorio Comunitario de experimentación hipermedia en Santa Elena, 5 profesionales liderados por Mauricio Vásquez (docente de Eafit), acompañan a un grupo de más de 10 personas en dos talleres: en el primero se emplea el Lego Serious Play, y en el segundo se hace un taller de realización audiovisual. Se defina un laboratorio comunitario como un concepto, más que como un espacio (itinerancia): comprende saberes y personas reunidas por el trabajo colaborativo,. El orden del día es el siguiente: Saludo y recuento; entrega de dispositivo tecnológico: lápiz; Justificación del empleo del lenguaje audiovisual para este acercamiento; Corto de Geroge Meliés; Cada participantee a devolver el amterial en enero. muestra una foto especial y la asocia con una palabra clave y breve historia (ejercicio de memoria); construcción de una línea argumental con las fotos; Refrigerio; Qué es un story board y una scaleta; división por equipos para elaboración de scaleta; entrega de cámara y salida a grabar, esegurándose de hacer edición por cámara (grabar lo que va a quedar en el orden adecuado); Recepciónd e las cámaras. El equipode Eafit se compromete a devolver el material en enero.', 16, '20141218_090357.jpg', '20141218_092808.jpg', '20141218_093132.jpg', 'uploads/accompaniment/accompaniment_adjunct', 0, 319, 37, '2014-12-22 09:27:36', '2014-12-22 14:29:29'),
(334, '2014-12-03', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Acompañamiento y formación a Gestor TIC Comuna 7', 'Se realiza la primera reunión con María Camila Puerta Martinez, gestora TIC para la comuna 7, se firma el acta de compromiso y entregan contenidos del Taller de Herramientas Web 2.0 y Alfabetización Digital para el trabajo a realizar en el CEDEZO La Quintana y el Parque Biblioteca.  ', 1, 'Parque_Biblioteca_La_Quintana_Acompanamiento_Gestores_TIC.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 184, 24, '2014-12-22 11:42:35', '0000-00-00 00:00:00'),
(335, '2014-12-15', 'Sensibilización', 'Sensibilización a funcionarios kit de inclusión', 'Se realiza la sensibilización Sobre el Kit de Inclusión Digital-Tecnología para todos a los funcionarios del Parque Biblioteca Doce de Octubre. Está se realiza en dos grupos, en el primero asisten diez de los funcionarios, en el segundo se completa el cupo con ocho más, está estrategia se realiza con el fin de no cerrar la biblioteca y prestar el servicio de forma cómoda. ', 18, 'Parque_Biblioteca_Doce_de_Octubre_Taller_Funcionarios_Kit_de_Inclusion_Digital_1.jpg', 'Parque_Biblioteca_Doce_de_Octubre_Taller_Funcionarios_Kit_de_Inclusion_Digital_2.jpg', 'Parque_Biblioteca_Doce_de_Octubre_Taller_Funcionarios_Kit_de_Inclusion_Digital_4.jpg', 'uploads/accompaniment/accompaniment_adjunct', 0, 453, 24, '2014-12-22 12:03:05', '0000-00-00 00:00:00'),
(336, '2014-12-19', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Acompañamiento a gestores TIC', 'presentación del programa, del pilar de apropiación y explicación de las funciones de los gestores TIC a estudiantes beneficiarios de Presupuesto Participativo que tienen el compromiso de realizar su labor social con nosotros. Se llega al acuerdo de que se iniciaran actividades lo más pronto posible ya que estos estudiantes deben muchas horas.', 5, 'Mascerca_Poblado_induccion_gestores_TIC_1.JPG', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 349, 15, '2014-12-23 16:04:47', '0000-00-00 00:00:00'),
(337, '2015-02-02', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Seguimiento al punto de navegación', 'Se visita el sitio para recoger indicadores que los tenía el estudiante de presupuesto participativo Andres Felipe, quién manifiesta que seguirá yendo al sitio a pagar horas, se hace revisión del uso de los equipos y se atienden usuarios del punto de navegación.', 1, 'IMG_20150202_144513.jpg', 'IMG_20150202_144508.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 436, 16, '2015-02-03 13:35:17', '0000-00-00 00:00:00'),
(338, '2015-01-09', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Seguimiento al punto de navegación', '"Inducción al gestor TIC Andrés Felipe López para que acompañe el punto de navegación del sitio de gobierno. Se habia programado una reunión con Eliana Zuluaga persona encargada del punto pero no se presentó por que tenía otro compromiso, sin embargo se el reconocimiento de las instalaciones del lugar y explicación de las actividades a realizar en este:\r\n - Velar por el registro de los usuarios\r\n - Invitar a la comunidad que se acerca al sitio a que use el punto\r\n - Realizar asesorías individuales en el punto\r\n - Realizar asesorías sobre dispositivos móviles a los usuarios\r\n - Queda pendiente socializar el banco de actividades\r\n Andrés Felipe estará visitando intercalando el tiempo de acompañamiento entre la taquilla única y tesorería según las dinámicas y demandas de cada sitio"', 1, '', '', '', '', 0, 436, 16, '2015-02-03 13:38:07', '0000-00-00 00:00:00'),
(339, '2015-01-21', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Seguimiento al punto de navegación', '"Visita de seguimiento al sitio de gobierno para observar el acompañamiento que está realizando Andrés López, gestor TIC encargado. \r\n El gestor se observa puntual y responsable, tiene las planillas en orden.\r\n Se aprovecha esta visita para compartir los contenidos digitales del curso de Alfabetización Digital y Gobierno en Línea y explicarle la dinámica de estos ya que lo ideal es iniciar procesos de formación en febrero en los sitios que se tienen ubicados en la comuna 3."', 1, '', '', '', '', 0, 436, 16, '2015-02-03 13:39:05', '0000-00-00 00:00:00'),
(340, '2015-01-09', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Seguimiento al punto de navegación', '"Inducción al gestor TIC Andrés Felipe López para que acompañe el punto de navegación del sitio de gobierno. La persona encargada del punto se encuentra de vacaciones por lo tanto se realizó la presentación e inducción con Isabel Cristina Diez, ella es la encargada de firmar las horas y estar pendiente de los facilitadores que acompañan el punto, se hizo el reconocimiento de las instalaciones del lugar y explicación de las actividades a realizar en este:\r\n - Velar por el registro de los usuarios\r\n - Invitar a la comunidad que se acerca al sitio a que use el punto\r\n - Realizar asesorías individuales en el punto\r\n - Realizar asesorías sobre dispositivos móviles a los usuarios\r\n - Queda pendiente socializar el banco de actividades\r\n Andrés Felipe estará visitando intercalando el tiempo de acompañamiento entre la taquilla única y tesorería según las dinámicas y demandas de cada sitio"', 1, '', '', '', '', 0, 437, 16, '2015-02-03 13:40:35', '0000-00-00 00:00:00'),
(341, '2015-01-21', 'Intervención sitio', 'Seguimiento al punto de navegación', '"Visita de seguimiento al sitio de gobierno para observar el acompañamiento que está realizando Andrés López, gestor TIC encargado. \r\n El gestor se observa puntual y responsable, tiene las planillas en orden, pero se evidencia que el punto no es usado casi por los usuarios, se le sugiere al gestor TIC que motive a las personas que van al sitio de gobierno para que lo usen y que use el tablero adjunto a los equipos para plasmar mensajes que inviten al uso."', 1, '', '', '', '', 0, 437, 16, '2015-02-03 13:41:27', '0000-00-00 00:00:00'),
(342, '2015-02-03', 'Intervención sitio', 'Seguimiento Punto de Navegación ', 'Se realizó seguimiento al punto de navegación en donde se pudo recoger los indicadores del sitio y conocer a la nueva líder de servicio del Mascerca.', 2, 'Mascerca_Poblado_Seguimiento_al_sitio_2015_02_03_1.jpg', 'Mascerca_Poblado_Seguimiento_al_sitio_2015_02_03_2.jpg', 'Mascerca_Poblado_Seguimiento_al_sitio_2015_02_03_3.jpg', 'uploads/accompaniment/accompaniment_adjunct', 0, 349, 15, '2015-02-05 09:02:52', '0000-00-00 00:00:00'),
(343, '2015-02-02', 'Otros', 'Seguimiento al Sitio', 'Se realiza visita al sitio para evidenciar el buen funcionamiento de los equipos y se recogen indicadores.', 1, 'Centro_de_Servicios_estadio_Segumiento_al_sitio.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 249, 23, '2015-02-09 08:46:39', '0000-00-00 00:00:00'),
(344, '2015-02-05', 'Otros', 'Seguimiento al Sitio', 'En el telecentro se realizó empalme de los procesos actuales y se enfatizó en la propuesta de realizar el taller de Narrativas con el grupo de personas que conforman la emisora Radio Comuna 2 liderada por Willmar Osorio. Además del taller, el telecentro hizo la invitación abierta para que el programa participe de la emisora en algunos pregrabados. Se planeó para la próxima semana charla de dispositivos móviles.', 1, 'Telecentro_Villa_del_Socorro_Empalme_y_acuerdos.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 198, 23, '2015-02-09 09:08:41', '0000-00-00 00:00:00'),
(345, '2015-03-04', 'Aula Abierta', 'Acompañamiento Curso Alfabetización Digital', 'Se abrió el primer proceso de formación en Aula abierta, acompañado por MDE en la Institución Educativa San Roberto Belarmino, proceso de alfabetización Digital dictado por el Gestor TIC  Ricardo Alzate', 1, 'aula_abierta.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 356, 38, '2015-03-05 08:54:56', '0000-00-00 00:00:00'),
(346, '2015-02-24', 'Intervención sitio', 'Seguimiento Punto de Navegación ', 'se realizó el empalme con la nueva encargada del sitio, además se realizo seguimiento al punto de navegación y se tomo el registro de usuario.', 1, '', '', '', '', 0, 439, 15, '2015-03-06 14:16:16', '0000-00-00 00:00:00'),
(347, '2015-02-24', 'Intervención sitio', 'Seguimiento Punto de Navegación ', 'Se realizó el seguimiento al WIFI del parque de Belén, se habló con un usuario frecuente del sitio quien nos contó que en semana el internet funciona muy bien pero los fines de semana es lento y no carga algunas páginas.', 1, '', '', '', '', 0, 352, 15, '2015-03-06 14:18:20', '0000-00-00 00:00:00'),
(348, '2015-02-24', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Seguimiento proceso de formación', 'Se realizó el seguimiento al curso de alfabetización digital en el parque Biblioteca, se habló con los gestores TIC encargados y se firmaron los documentos requeridos para la realización de sus horas de labor social.', 2, '', '', '', '', 0, 193, 15, '2015-03-06 14:29:16', '0000-00-00 00:00:00'),
(349, '2015-03-04', 'Aula Abierta', 'Inicio de curso', 'Seguimiento al Aula abierta de la instituciín educativa, donde se está trabajando en alfabetización digital con comunidad orientado por un Gestor TIC', 0, '', '', '', '', 0, 356, 15, '2015-03-06 15:39:20', '0000-00-00 00:00:00'),
(351, '2015-03-04', 'practicantes', 'Seguimiento Punto de Navegación ', 'Se habló con dos usuarios del punto de navegación acerca del funcionamiento de los equipos, estos mencionaron que estaban conformes con el funcionamiento de estos.', 2, 'Casa_de_gobierno_SADEP_Seguimiento_Punto_de_navegacion_20150304_103711.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 333, 15, '2015-03-06 16:14:46', '2015-03-11 16:33:54'),
(352, '2015-03-05', 'practicantes', 'Sensibilización Alfabetización Digital y Mercadeo', 'Se realizó una sensibilización con emprendedores del CEDEZO para realizar las inscripciones al curso de Alfabetización Digital y al taller de Mercadeo digital, se logró establecer la fecha de inicio.', 0, 'CEDEZO_San_Javier_Sensibilizacion_procesos_de_formacion.jpg', 'CEDEZO_San_Javier_Sensibilizacion_cursos.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 174, 15, '2015-03-06 16:22:20', '2015-03-11 15:51:11'),
(354, '2015-03-10', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Acompañamiento proceso de formación', 'Se realizó el acompañamiento al gestor en el curso de alfabetización digital con adultos mayores.', 0, 'Parque_Biblioteca_de_Belen_Acompanamiento_Gestor_TIC_20150310_161317.jpg', 'Parque_Biblioteca_de_Belen_Acompanamiento_Gestor_TIC_2_20150310_172409.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 193, 15, '2015-03-11 11:17:35', '0000-00-00 00:00:00'),
(355, '2015-03-11', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Acompañamiento a gestor TIC Cedezo San Javier', 'Acompañamiento a Gestor TIC en el inicio del curso de alfabetización digital con emprendedores en el CEDEZO de San Javier', 0, 'CEDEZO_SAN_JAVIER.jpg', 'CEDEZO_SAN_JAVIER_2.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 174, 38, '2015-03-12 10:12:39', '0000-00-00 00:00:00'),
(356, '0000-00-00', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Empalme e información', 'Se presenta al gestor que acompañara el proceso y sus labores a los funcionarios', 5, 'Casa_Maren_Empalme.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 465, 10, '2015-03-18 15:25:55', '0000-00-00 00:00:00'),
(357, '2015-03-19', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Primera sesión AD Emprendedores', 'Sensibilización y acompañamiento al gestor TIC en su primera clase de AD en el CEDEZO de Moravia con emprendedores.', 9, 'IMG_20150319_WA0010.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 166, 10, '2015-03-20 08:09:48', '0000-00-00 00:00:00'),
(358, '2015-03-18', 'Intervención sitio', 'Gestión de actividades en el punto de navegación', 'Se realizó una pequeña intervención en el sitio en donde se pudo identificar algunas necesidades que tienen los usuarios del punto de navegación en su mayoría niños y niñas, se intentará agendar una charla de NSN con ellos.', 2, 'Corregiduria_El_Limonar_Intervencion_en_el_sitio.jpg', 'Corregiduria_El_Limonar_Seguimiento_Punto_de_Navegacion.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 336, 15, '2015-03-24 17:53:01', '0000-00-00 00:00:00'),
(359, '2015-03-20', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Entrega de formatos', 'Se realizó una reunión con la Gestora TIC Alejandra para presentar los formatos de procesos de formación con los que iniciara su labor social.', 0, '', '', '', '', 0, 192, 15, '2015-03-25 16:38:19', '0000-00-00 00:00:00'),
(360, '2015-03-24', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Acompañamiento curso', 'Se realizo acompañamiento a los gestores TIC en el curso de Alfabetización Digital.', 0, '', '', '', '', 0, 439, 15, '2015-03-25 16:39:11', '0000-00-00 00:00:00'),
(361, '2015-03-24', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Acompañamiento curso', 'Se realizo acompañamiento a los gestores TIC en el curso de Alfabetización Digital.', 0, '', '', '', '', 0, 439, 15, '2015-03-25 16:39:46', '0000-00-00 00:00:00'),
(362, '2015-03-25', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Sensibilización Alfabetización Digital', 'Se realizó la sensibilización de Alfabetización digital en compañia de la nueva gestora de la comuna 80.', 0, '', '', '', '', 0, 178, 15, '2015-03-25 16:40:41', '0000-00-00 00:00:00'),
(363, '2015-03-25', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Sensibilización Alfabetización Digital', 'Se realizó la sensibilización de Alfabetización digital en compañía de la nueva gestora de la comuna 80.', 0, '', '', '', '', 0, 178, 15, '2015-03-25 16:41:18', '0000-00-00 00:00:00'),
(364, '2015-03-20', 'Intervención sitio', 'Seguimiento al Punto Wifi', 'En el espacio se le contó a varias personas acerca de la red de Medellín Ciudad Inteligente, algunas personas no sabían de la existencia de esta.', 4, 'IMG_6042_2.JPG', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 473, 42, '2015-03-26 08:40:17', '2015-04-20 19:56:34'),
(365, '2015-03-20', 'Intervención sitio', 'Intervención ', 'Se recogieron las planillas del punto de navegación y se observó la afluencia de público en el lugar.', 4, 'IMG_6035_2.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 282, 42, '2015-03-26 08:42:02', '2015-04-20 19:56:34'),
(366, '2015-03-27', 'practicantes', 'Sensibilización de nuevo sitio WIFI', 'Sensibilización en el uso de WIFI libre en el parque, se presenta el servicio a los vecionos del sector', 60, '2015_04_07.jpg', 'Guadalupe.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 510, 10, '2015-03-27 15:56:48', '2015-04-07 14:34:08'),
(367, '2015-03-26', 'Intervención sitio', 'Asesoría usuarios', 'Atención a tres usuarios en el punto de navegación.  Se les pregunta sobre lo que hacen en Intenet: redes sociales, jugar.', 3, 'Inspeccion_9B_El_Salvador_4.JPG', 'Inspeccion_9B_El_Salvador_3.JPG', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 307, 20, '2015-03-30 12:01:16', '0000-00-00 00:00:00'),
(368, '2015-02-24', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Gestora TIC de PP', 'Reunión con la gestora TIC para dinamizar la atención de usuarios en el punto de navegación', 1, 'Mascerca_Buenos_Aires_gestora_TIC_1.jpg', 'Mascerca_Buenos_Aires_gestora_TIC_2.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 314, 20, '2015-03-30 13:54:20', '0000-00-00 00:00:00'),
(369, '2015-02-24', 'Intervención sitio', 'Asesoría usuarios', 'Asesoría a usuario del punto. Se verifica la existencia de los catálogos de trámites, se encuentra completos. No se encuentra la funcionaria encargada del lugar. Recolección de registro de uso', 1, 'Inspeccion_9B_seguimiento_1.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 307, 20, '2015-03-30 15:32:37', '0000-00-00 00:00:00'),
(370, '2015-02-17', 'Curso, taller o charla', 'Charla Gobierno en Línea ', 'charla sobre gobierno en línea con 72 jóvenes del grado once en el aula de informática. ', 72, 'Republica_de_Urugay_Charla_Gobierno_en_Linea_1.jpg', 'Republica_de_Urugay_Charla_Gobierno_en_Linea.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 472, 42, '2015-03-30 16:24:10', '0000-00-00 00:00:00'),
(371, '2015-02-18', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Acompañamiento gestores TIC:', ' Inducción al gestor TIC John Harold Londoño estudiante beneficiario de PP del Pascual Bravo. En la reunión con el se tocaron los siguientes temas:\r\n-El programa MCI, el área de apropiación y su labor como gestor TIC.\r\n-Selección de horarios para acompañamiento: John Harold se compromete a acompañar el curso de alfabetización digital que se lleva a cabo en la IE República de Uruguay los días martes de 6:00 a 8:00 p.m. y el curso de la IE Pedro Claver Aguirre los miércoles de 5:00 a 7:00 p.m. \r\n', 1, 'Comuna_5_IE_Pedro_Claver_Aguirre_Acompanamiento_gestores_TIC.JPG', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 232, 42, '2015-03-30 16:27:58', '0000-00-00 00:00:00'),
(372, '2015-02-18', 'Sensibilización', 'Sensibilización cursos', 'Reunión general sobre la reactivación de la emisora con el grupo de estudiantes seleccionados por los docentes a cargo (Nelcy Tavera y Juan Diego Uribe). Se les hizo una presentación sobre el programa MCI y una presentación para hablar de algunos conceptos claves sobre la metodología de trabajo.\r\nA esta actividad asistieron  los estudiantes seleccionados para participar en el proyecto, cada uno se presentó con su nombre, grado y la expectativa para participar en la emisora, se compartió la programación o cronograma de trabajo que fue aprobada por todos, pero que está sujeta a cambios según la dinámica de trabajo.\r\nLa próxima reunión queda programada para el 12 de marzo de 8:30 a 10:00 a.m. en la biblioteca. El resto de encuentros será semanal en este mismo horario y espacio.\r\n', 23, 'Comuna_7_IE_Mariscal_Robledo_Emisora_1.JPG', 'Comuna_7_IE_Mariscal_Robledo_Emisora_2.JPG', 'Comuna_7_IE_Mariscal_Robledo_Emisora_3.JPG', 'uploads/accompaniment/accompaniment_adjunct', 0, 281, 42, '2015-03-30 16:29:47', '0000-00-00 00:00:00'),
(373, '2015-02-25', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Seguimiento a Gestores TIC', 'Este seguimiento se realizó en conjunto con la persona encargada de coordinar la biblioteca  Diana María Giraldo, la coordinadora le realiza claridades frente al proceso que se iniciará con adultos en este sitio, y las invita a realizar la formación con la mayor seriedad del caso. ', 2, 'Fundacion_Raton_de_Biblioteca_La_Esperanza_Seguimiento_a_Gestores_TIC.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 479, 24, '2015-03-30 19:55:46', '0000-00-00 00:00:00'),
(374, '2015-02-26', 'Curso, taller o charla', 'Seguimiento a Curso de Alfabetización Digital', 'Se realiza un acompañamiento al Gestor TIC Ranue Posso encargado de velar por la formación de empresarios y emprendedores de la comuna 7 adscritos al Cedezo. ', 9, 'Cedezo_La_Quintana_Seguimiento_al_Curso_de_AD_1.jpg', 'Cedezo_La_Quintana_Seguimiento_al_Curso_de_AD_2.jpg', 'Cedezo_La_Quintana_Seguimiento_al_Curso_de_AD_3.jpg', 'uploads/accompaniment/accompaniment_adjunct', 0, 168, 24, '2015-03-30 20:01:57', '0000-00-00 00:00:00'),
(375, '2015-03-05', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Seguimiento a Gestores TIC', 'Reunión con los dos gestores TIC encargados de llevar el taller de herramientas web 2.0 en la Fundación Ratón de Biblioteca, se evalúa su proceso y se apunta a resolver dudas frente a este.', 2, 'Raton_de_Biblioteca_La_Esperanza_Seguimiento_a_Gestores_TIC.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 479, 24, '2015-03-30 20:28:14', '0000-00-00 00:00:00'),
(376, '2015-03-05', 'Curso, taller o charla', 'Seguimiento a Taller de Herramientas web 2.0', 'Se realiza seguimiento al taller de herramientas Web 2.0 dictado por los dos Gestores TIC encargados del sitio. ', 6, 'Raton_de_Biblioteca_La_Esperanza_Seguimiento_Curso_Herramientas_Web_2_3.jpg', 'Raton_de_Biblioteca_La_Esperanza_Seguimiento_Curso_Herramientas_Web_2_2.jpg', 'Raton_de_Biblioteca_La_Esperanza_Seguimiento_Curso_Herramientas_Web_2_1.jpg', 'uploads/accompaniment/accompaniment_adjunct', 0, 479, 24, '2015-03-30 20:35:46', '0000-00-00 00:00:00'),
(377, '2015-03-12', 'Otros', 'Acompañamiento a la Escuela de Líderes', 'En está fecha los participantes presentan una vaga propuesta de los módulos de formación que se tendrán en la escuela de líderes, el profesional de inclusión digital y la gestora de cultura digital escuchan con atención y propones continuar con un taller de ideación, el cual se llevará a cabo en el mes de mayo, se propone seguir trabajando en pro de la invitación a los demás líderes juveniles. ', 5, 'IE_Sor_Juana_Ines_de_la_Cruz_Formacion_Escuela_de_Lideres_Juveniles_1.jpg', 'IE_Sor_Juana_Ines_de_la_Cruz_Formacion_Escuela_de_Lideres_Juveniles.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 226, 24, '2015-03-30 21:09:07', '0000-00-00 00:00:00'),
(378, '2015-03-14', 'Otros', 'Acompañamiento Observatorio Comuna 5', 'En esta oportunidad se trabajó el primer módulo del taller de Planeación de la comunicación, en este se trabajó todo el concepto de la participación y para que nos debemos comunicar. ', 10, 'IE_Pedro_Claver_Formacion_Observatorio_Comuna_5_Taller_Planeacion_de_la_Comunicacion_3.jpg', 'IE_Pedro_Claver_Formacion_Observatorio_Comuna_5_Taller_Planeacion_de_la_Comunicacion_1.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 232, 24, '2015-03-30 21:15:59', '0000-00-00 00:00:00'),
(379, '2015-03-14', 'Sensibilización', 'Sensibilización Curso Alfabetización Digital', 'Inicio del curso Alfabetización Digital y Gobierno en Línea a cargo de los Gestores TIC Gustavo Gonzalez y Sandy Ramos. ', 12, 'IE_Villa_Flora_Seguimiento_Curso_AD_1.jpg', 'IE_Villa_Flora_Seguimiento_Curso_AD_2.jpg', 'IE_Villa_Flora_Seguimiento_Curso_AD_3.jpg', 'uploads/accompaniment/accompaniment_adjunct', 0, 289, 24, '2015-03-30 21:22:02', '0000-00-00 00:00:00'),
(380, '2015-03-19', 'Otros', 'Divulgación y acompañamiento escuela de líderes', 'Está reunión se cita para dar paso a un proceso de divulgación que se viene gestando con todos los líderes de la zona 2 (Comunas 5, 6 y 7) con el fin de anudar esfuerzos en la construcción de la escuela de líderes populares. Los llamados a participar no acogen la convocatoria y por tanto solo se realiza con 3 personas el encuentro.', 3, 'PB_La_Quintana_Reunion_Lideres_Comuna_5.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 184, 24, '2015-03-30 22:35:06', '0000-00-00 00:00:00'),
(381, '2015-03-18', 'Grados', 'Certificación Curso Alfabetización Digital', 'En está fecha se realiza la certificación del Curso dictado por los estudiantes beneficiarios de PP. ', 17, 'IE_Villa_Flora_Certificacion_Curso_AD_1.JPG', 'IE_Villa_Flora_Certificacion_Curso_AD_2.JPG', 'IE_Villa_Flora_Certificacion_Curso_AD_3.JPG', 'uploads/accompaniment/accompaniment_adjunct', 0, 289, 24, '2015-03-30 22:53:10', '0000-00-00 00:00:00'),
(382, '2015-03-24', 'Sensibilización', 'Sensibilización Taller Herramientas web 2.0', 'Sensibilización del Taller Herramientas Web 2.0 en el Telecentro La Carmelita', 7, 'Telecentro_La_Carmelita_Sensibilizacion_Curso_Herramientas_web_2_2.jpg', 'Telecentro_La_Carmelita_Sensibilizacion_Curso_Herramientas_web_2_1.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 483, 24, '2015-03-30 22:54:05', '0000-00-00 00:00:00'),
(383, '2015-03-26', 'Intervención sitio', 'Visita a Zona WIFI', 'Se realiza una conexión por parte de las dos gestoras a la red Wifi y se comenta a las personas de que este sitio ya cuenta con el servicio. ', 4, 'Canchas_El_Progreso_2_Seguimiento_a_sitio_publico.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 485, 24, '2015-03-30 23:02:04', '0000-00-00 00:00:00'),
(384, '2015-03-25', 'Otros', 'Seguimiento al Kit de Inclusión Digital', 'Nos acercamos al aula de sistemas para conocer los adelantos que se tienen en el Parque Biblioteca en la apropiación del Kit de Inclusión Digital, para esto nos encontramos que varias personas en situación de discapacidad vienen trabajando con este recurso acompañados por Norma Ibargüen la encargada del espacio. ', 4, 'PB_La_Quintana_Seguimiento_al_Kit_de_Inclusion_Digital_1.jpg', 'PB_La_Quintana_Seguimiento_al_Kit_de_Inclusion_Digital_2.jpg', 'PB_La_Quintana_Seguimiento_al_Kit_de_Inclusion_Digital_3.jpg', 'uploads/accompaniment/accompaniment_adjunct', 0, 184, 24, '2015-03-30 23:15:10', '0000-00-00 00:00:00'),
(385, '2015-03-30', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Seguimiento y acompañamiento ', 'Se realizó el seguimiento a los gestores TIC en el curso de alfabetización digital, se desarrollo la primera clase de gobierno en línea y se aclararon dudas del correo electrónico.', 0, 'Mascerca_de_Belen_Seguimiento_Gestores_TIC_1.jpg', 'Mascerca_de_Belen_Seguimiento_Gestores_TIC_2.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 438, 15, '2015-03-31 16:47:22', '0000-00-00 00:00:00'),
(386, '2015-03-30', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Seguimiento y acompañamiento ', 'Se realizó el seguimiento a los gestores TIC en el curso de alfabetización digital, se desarrollo la primera clase de gobierno en línea.', 0, 'Unidad_Integral_de_Belen_Seguimiento_gestores_TIC.jpg', 'Unidad_Integral_de_Belen_Seguimiento_gestores_TIC_2.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 362, 15, '2015-03-31 16:49:00', '0000-00-00 00:00:00'),
(387, '2015-03-31', 'practicantes', 'Intervención', 'Se visitó el parque de San Cristóbal y se verificó el buen uso y funcionamiento del internet, además de esto se conversó con algunos usuarios y se informó de los fondos de educación superior.', 2, 'Parque_S_Cristobal_Seguimiento.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 283, 23, '2015-03-31 22:01:41', '2015-04-07 12:57:38'),
(388, '2015-03-31', 'Curso, taller o charla', 'Formación Gestores TIC', 'El día de hoy nos encontramos en el aula de capacitaciones del Parque Biblioteca Tomás Carrasquilla- La Quintana con el fin de formar a Cristian y Jackeline, gestores TIC de la Zona 2 para formarlos en el contenido de Narrativas Digitales. ', 2, 'PB_La_Quintana_Formacion_Gestores_TIC_1.jpg', 'PB_La_Quintana_Formacion_Gestores_TIC_2.jpg', 'PB_La_Quintana_Formacion_Gestores_TIC.jpg', 'uploads/accompaniment/accompaniment_adjunct', 0, 184, 24, '2015-03-31 22:23:42', '0000-00-00 00:00:00'),
(392, '2015-04-01', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Reunión Gestores TIC', 'Reunión con 5 estudiantes beneficiarios de presupuesto participativo para vincularlos en la figura de Gestores TIC y acompañen los procesos de apropiación en el punto de navegación del Mascerca de Buenos Aires y en aulas abiertas que puedan gestionarse en las IE cercanas. ', 5, 'Mascerca_Buenos_Aires_Acompanamiento_Gestores_TIC_1.JPG', 'Mascerca_Buenos_Aires_Acompanamiento_Gestores_TIC_2.JPG', 'Mascerca_Buenos_Aires_Acompanamiento_Gestores_TIC_3.JPG', 'uploads/accompaniment/accompaniment_adjunct', 0, 314, 17, '2015-04-07 11:39:14', '0000-00-00 00:00:00'),
(395, '2015-04-08', 'Otros', 'Seguimiento al sitio', 'Se realizó seguimiento al sitio, se habló con el funcionario encargado de la atención al usuario y con 2 de los usuarios del punto de navegación acerca del funcionamiento del mismo y ellos expresaron que los computadores funcionan bien, además se recogieron los indicadores de gobierno.', 2, 'Mascerca_del_Poblado_Seguimiento_al_sitio_2.jpg', 'Mascerca_del_Poblado_Seguimiento_al_sitio.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 349, 43, '2015-04-09 08:42:25', '0000-00-00 00:00:00'),
(396, '2015-04-08', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Acompañamiento a gestor TIC Cedezo San Javier', 'Acompañamiento al curso de Alfabetización Digital dinamizado por el Gestor TIC Mateo Meneses', 0, 'FullSizeRender_1.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 174, 38, '2015-04-09 09:25:01', '0000-00-00 00:00:00'),
(399, '2015-04-07', 'Estudiantes de PP, jóvenes por la convivencia o al', 'sesión de transferencia de contenidos ', 'Se realizó una jornada de acompañamiento a gestores y gestoras TIC con el fin de  presentarles los contenidos del programa. En la sesión estuvimos conversando sobre la estrategia del Programa respecto a internet seguro, vimos los contenidos del curso de Alfabetización Digital y el taller de Gobierno en Línea. Los chicos y chicas aclararos dudas sobre dichos contenidos y se mostraron entusiasmados por empezar a dictar clases. ', 6, 'tallerchicxsPP.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 440, 21, '2015-04-09 15:57:29', '0000-00-00 00:00:00'),
(400, '2015-04-08', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Acompañamiento curso AD', 'Se realizó la tercera sesión de Alfabetización Digital, pues las estudiantes de pp no pudieron asistir por cuestiones de estudio.', 0, 'CEDEZO_SADEP_Acompanamiento_AD.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 178, 15, '2015-04-09 16:11:29', '0000-00-00 00:00:00'),
(401, '2015-04-09', 'Otros', 'Seguimiento al punto de navegación', 'Seguimiento al punto de navegación del CAV de Caunces. Se encontró que uno de los equipos está dañado y que sólo hay uno en funcionamiento. Se interactuó con dos usuarios que se encontraban en el sitio haciendo uso del internet para conocer sus intereses y actividades realizadas allí.', 2, 'CAV_Caunces_Seguimiento_Punto_de_navegacion_2.JPG', 'CAV_Caunces_Seguimiento_Punto_de_navegacion_2.JPG', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 298, 17, '2015-04-09 16:27:28', '0000-00-00 00:00:00'),
(402, '2015-04-13', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Capacitación Alfabetizadores', 'Capacitación a los alfabetizadores de la institución educativa para el curso de AD ', 5, 'Capacitacion_gestores_Bravo_Marquez.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 159, 10, '2015-04-13 16:50:08', '0000-00-00 00:00:00'),
(403, '2015-04-14', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Capacitación Gestores TIC en Dispositivos moviles', 'Capacitación Gestores TIC en Dispositivos móviles y metodologías de enseñanza con el adulto mayor', 3, 'Capacitacion_gestores_UVA_Moscu.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 442, 10, '2015-04-14 16:13:18', '0000-00-00 00:00:00'),
(404, '2015-04-13', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Acompañamiento curso', 'Se realizó acompañamiento a los Gestores TIC en la octava sesión de Alfabetización digital.', 0, 'Mascerca_Belen_Acompanamiento_Gestores_TIC_1.jpg', 'Mascerca_Belen_Acompanamiento_Gestores_TIC_2.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 438, 15, '2015-04-15 17:40:23', '0000-00-00 00:00:00'),
(405, '2015-04-13', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Acompañamiento curso', 'Se realizó acompañamiento a los Gestores TIC en la octava sesión de Alfabetización digital.', 0, 'Unidad_Integral_6_Belen_Acompanamiento_Gestores_TIC.jpg', 'Unidad_Integral_6_Belen_Acompanamiento_Gestores_TIC_2.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 362, 15, '2015-04-15 17:43:40', '0000-00-00 00:00:00'),
(406, '2015-04-15', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Acompañamiento curso', 'Se realizó un acompañamiento a las Gestoras TIC en la sesión cuarta de AD.', 0, 'CEDEZO_San_Antonio_de_Prado_Curso_AD.jpg', 'CEDEZO_San_Antonio_de_Prado_Acompanamiento_Gestoras_TIC.jpg', 'CEDEZO_San_Antonio_de_Prado_Acompanamiento_Gestoras_TIC_2.jpg', 'uploads/accompaniment/accompaniment_adjunct', 0, 178, 15, '2015-04-15 17:53:33', '0000-00-00 00:00:00'),
(407, '2015-04-15', 'Curso, taller o charla', 'Seguimiento curso AD Y GEL', 'Se dictó la sesión 3 de Herramientas Web 2.0, los alumnos descargaron videos y música de YouTube', 8, 'Telecentro_La_Carmelita_AD_Y_GEL_1.JPG', 'Telecentro_La_Carmelita_AD_Y_GEL.JPG', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 483, 42, '2015-04-20 15:18:09', '0000-00-00 00:00:00'),
(408, '2015-04-17', 'practicantes', 'Capacitación a gestora TIC.', 'Se realizó una reunión con la gestora TIC Alejandra Moreno para planear el inicio del curso de Alfabetización Digital que ella orientará en el Parque Biblioteca Guayabal, además iniciamos la capacitación en los contenidos del curso.', 1, 'Parque_Biblioteca_Guayabal_Acompanamiento_a_gestor_TIC.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 192, 43, '2015-04-20 15:50:07', '2015-04-27 12:38:06'),
(409, '2015-04-01', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Vinculación de gestores TIC', 'Reunión con 5 estudiantes beneficiarios de presupuesto participativo para vincularlos en la figura de Gestores TIC y acompañen los procesos de apropiación en el punto de navegación del Mascerca y en aulas abiertas. ', 5, 'Mascerca_Buenos_Aire_acompanamiento_gestoresTIC.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 314, 20, '2015-04-21 11:20:39', '0000-00-00 00:00:00');
INSERT INTO `accompaniments` (`id_accompaniment`, `accompaniment_date`, `accompaniment_type`, `accompaniment_title`, `accompaniment_description`, `participant_number`, `accompaniment_adjunct`, `accompaniment_adjunct1`, `accompaniment_adjunct2`, `dir`, `accompaniment_type_id`, `site_id`, `user_id`, `creation_date`, `modification_date`) VALUES
(410, '2015-04-16', 'practicantes', 'Vinculación de gestor TIC', 'Reunión con un estudiante de PP para su vinculación como Gestor TIC del programa. Sus labores principales estarán orientadas al diseño de los tutoriales en la plantilla de Power Point, adaptando los contenidos a la imagen del programa. Compromisos: Enviarle las plantillas de PPT y los formatos de tutoriales que debe elaborar; trabajar 8 horas a la semana para terminar estos turoriales.', 1, 'Mascerca_Buenos_Aires_Acompanamiento_Jerson_Rodriguez_1.JPG', 'Mascerca_Buenos_Aires_Acompanamiento_Jerson_Rodriguez_2.JPG', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 314, 20, '2015-04-21 11:31:00', '2015-05-07 17:07:28'),
(411, '2015-04-08', 'Intervención sitio', 'Asesoría usuarios', 'Atención a usuarios en el punto de navegación. Comprobación del buen funcionamiento de los equipos y de la red wifi externa. Recolección de indicadores. ', 5, 'Parque_de_la_vida_empalme_1.jpg', 'Parque_de_la_vida_empalme_2.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 318, 20, '2015-04-21 12:02:13', '0000-00-00 00:00:00'),
(412, '2015-04-13', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Planeación del proceso formativo', 'Encuentro con una estudiante quien realizará sus prácticas universitarias en la biblioteca, para vincularla como Gestora TIC y poder así facilitar diversos procesos de formación. Compromiso: Comenzar los viernes en la tarde un curso con adultos sobre alfabetización, narrativas digitales y lecto-escritura; y los lunes en la tarde un taller de herramientas Web con jóvenes.', 2, 'Biblioteca_Villatina_Reunion_Gestora_TIC_1.JPG', 'Biblioteca_Villatina_Reunion_Gestora_TIC_2.JPG', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 525, 17, '2015-04-22 15:17:15', '0000-00-00 00:00:00'),
(413, '2015-04-14', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Seguimiento y planeación de actividades', 'Visita de seguimiento y acompañamiento al Gestor TIC que está desarrollando las horas en el punto de navegación de la Casa de Gobierno. El sitio es poco frecuentado por la comunidad, pero hay muy buena disposición de los funcionarios para prestar el servicio.', 1, 'Casa_Gobierno_Santa_Elena_Seguimiento_Gestor_TIC_1.jpg', 'Casa_Gobierno_Santa_Elena_Seguimiento_Gestor_TIC_2.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 296, 17, '2015-04-22 16:41:04', '0000-00-00 00:00:00'),
(415, '2015-04-24', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Vinculación de gestora TIC', 'Se realizó una reunión con María Isabel Rúa, estudiante de PP con el fin de realizar su vinculación como gestora TIC del programa, específicamente en el Parque Biblioteca Guayabal para apoyar inicialmente, el curso de Alfabetización Digital y Gobierno en Línea que se dictará los sábados de 9:00 am a 12:00 m. \r\nAdemás se realizó la inducción general sobre el programa, su proceso como gestora TIC y los contenidos del curso de Alfabetización Digital y Gobierno en Línea.', 1, 'Parque_Biblioteca_Guayabal_Acompanamiento_a_gestora_TIC.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 192, 43, '2015-04-27 08:10:24', '0000-00-00 00:00:00'),
(416, '2015-04-25', 'practicantes', 'Vinculación de gestor TIC', 'Se realizó una reunión con Diego Gonzalez Muñoz, estudiante de PP con el fin de realizar su vinculación como gestor TIC del programa, él acompañará el curso de Alfabetización Digital y Gobierno en Línea que se dictará los sábados de 08:00 am a 12:00 m en la Institución Educativa José Acevedo y Gómez. Además se realizó la inducción general sobre el programa, su proceso como gestor TIC y los contenidos del curso de Alfabetización Digital y Gobierno en Línea.\r\nLuego de la reunión, se realizó en compañía de Diego la sensibilización del curso a la comunidad.\r\n', 1, 'Institucion_Educativa_Jose_Acevedo_y_Gomez_Acompanamiento_Gestor_TIC.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 344, 43, '2015-04-27 08:35:41', '2015-04-27 13:40:24'),
(417, '2015-04-24', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Acompañamiento', 'Acompañamiento a gestor tic en el curso Alfabetización Digital', 8, 'Cedezo_Manrique_A_D1_800x600.jpg', 'Cedezo_Manrique_A_D2_800x600.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 165, 10, '2015-04-27 08:58:43', '0000-00-00 00:00:00'),
(418, '2015-04-25', 'Otros', 'Cine para todos', 'Acompañamiento a 7 integrantes de la fundación casa Maren en Cine para Todos, programa de cine de inclusión del ministerio TIC', 8, 'Casa_Maren_Cine_para_todos_600x800.jpg', 'Casa_Maren_Cine_para_todos1_600x800.jpg', 'Casa_Maren_Cine_para_todos2_800x600.jpg', 'uploads/accompaniment/accompaniment_adjunct', 0, 465, 10, '2015-04-27 09:00:56', '0000-00-00 00:00:00'),
(419, '2015-04-22', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Inducción a Gestores Tic', 'Se visitó el centro de Servicios de Lusitania donde se realizó el empalme de las nuevas gestoras Tic en relación a las actividades que generalmente se realizan en los sitios de Gobierno con zonas WIFI- Puntos de Navegación, se dieron tips variados de relación con las personas, formas de acercamiento, diligenciamiento de planillas, tipos de asesorías. Se les contó de qué se trata el programa, se diligenciaron formatos, se indagaron expectativas, intereses, se les entregó a cada una la carpeta con alguana documentación para leer y se firmó el pacto de acompañamiento, entre otras actividades. ', 2, 'IMG_20150422_103051011.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 272, 23, '2015-04-27 16:03:08', '0000-00-00 00:00:00'),
(420, '2015-04-22', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Recorrido con Gestor Tic', 'Se realizó recorrido con Gestor Tic por algunos lugares del Corregimiento de San Cristóbal, entre ellos: Cedezo, Parque y centro de servicios con el propósito de presentarla, conocer los funcionarios y hacer empalme de algunas dinámicas de cada lugar para poder empezar la labor en cada uno de ellos', 1, 'recorrido.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 567, 23, '2015-04-27 16:15:02', '0000-00-00 00:00:00'),
(421, '2015-04-22', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Gestor Tic', 'Se realizó  acompañamiento  a Cristian, Gestor Tic de la comuna 7 que dicta actualmente taller de herramientas web 2.0 en el telecentro la amistad Villa Sofia en la comuna 7. Se observa buena asistencia al taller aunque algunas personas al parecer deberían estar en A.D . Se conversó con la persona encargada del telecentro para ofertar próximamente taller de narrativas digitales con población jóven. Se diligenciaron planillas y datos con el Gestor Tic y se conversó con las personas del curso.', 1, 'telecentro_la_amistad_V_Sofia_Acompanamiento_a_Gestor_Tic.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 203, 23, '2015-04-27 16:22:54', '0000-00-00 00:00:00'),
(429, '2015-04-24', 'Intervención sitio', 'Intervención sitio de gobierno', 'Intervención sitio de gobierno, activación y asesorías individuales', 48, 'C_A_V_la_America_Activacion1.jpg', 'C_A_V_la_America_Activacion2.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 246, 10, '2015-04-28 09:16:30', '0000-00-00 00:00:00'),
(430, '2015-04-24', 'Intervención sitio', 'Intervención sitio de gobierno', 'Intervención sitio de gobierno, activación y asesorías individuales.', 4, 'Aula_Ambiental_la_America_Activacion4.jpg', 'Aula_Ambiental_la_America_Activacion3.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 236, 10, '2015-04-28 10:21:02', '0000-00-00 00:00:00'),
(431, '2015-04-27', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Capacitación AlfabetizadoreS Y GESTORES TIC', 'Se capacita a la gestora Tic y a los alfabetizadores en A.D para curso con comunidad.', 5, 'Casa_lectura_Villa_guadalupe_Gestor1.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 463, 10, '2015-04-28 11:03:40', '0000-00-00 00:00:00'),
(432, '2015-04-27', 'Estudiantes del Pascual Bravo', 'Acompañamiento a Gestor TIC', 'se firmó pacto de acompañamiento y se le entregó al nuevo gestor la información sobre el proceso de formación que va a acompañar en la biblioteca el salado de la comuna 13', 1, 'Acompanamiento_a_gestor_TIC.JPG', 'Acompanamiento_a_Gestor_TIC_2.JPG', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 450, 38, '2015-04-29 09:02:24', '0000-00-00 00:00:00'),
(434, '2015-04-20', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Presentación de nuevos gestores', 'se hizo reunión con el encargado del punto de navegación en el sitio de gobierno Inspección Aranjuez con los gestorres tic que acompañaran y dinamizarán este punto de la ciudad en la comuna 4. Se hace inducción de funciones y actividades con el registro de usuario. ', 3, 'IMG_6706.JPG', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 255, 41, '2015-04-29 14:46:59', '0000-00-00 00:00:00'),
(435, '2015-04-29', 'Intervención sitio', 'Seguimiento a punto de navegación.', 'Se realizó seguimiento al punto de navegación de la casa de gobierno, se conversó con 3 usuarios y con el funcionario encargado, identificando que los computadores están funcionando bien y se realiza buen uso de estos. Además se recogieron los indicadores del mes de Abril.', 3, '', 'Casa_de_Gobierno_Altavista_Seguimiento_al_punto_de_navegacion.jpg', '', 'uploads/accompaniment/accompaniment_adjunct1', 0, 332, 43, '2015-04-29 15:40:42', '0000-00-00 00:00:00'),
(436, '2015-04-14', 'Intervención sitio', 'Atención a usuarios', 'Visita de seguimiento al punto de navegación del centro de servicios de la Alpujarra. Se identificaron tres equipos sin conectividad en el momento. Se interactuó con tres personas que hicieron uso de los computadores durante la visita, confirmando su importancia y funcionalidad para la comunidad.', 3, 'CAM_seguimiento1_2.JPG', 'CAM_seguimiento1_1.JPG', 'CAM_seguimiento1_3.JPG', 'uploads/accompaniment/accompaniment_adjunct', 0, 535, 20, '2015-04-29 17:19:44', '0000-00-00 00:00:00'),
(437, '2015-04-28', 'Intervención sitio', 'Atención a usuarios', 'Se atienden a tres usuarios en el punto de navegación, uno de ellos interesado en la entrega de la ayuda humanitaria. Se verifica el buen funcionamiento de los equipos; pero se encuentra que 5 de ellos sin conexión a internet, se logra habilitar 2; los restantes son reportados a conectividad.', 3, 'CAM_seguimiento1_4.jpg', 'CAM_seguimiento1_5.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 535, 20, '2015-04-29 17:22:17', '0000-00-00 00:00:00'),
(438, '2015-04-27', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Acompañamiento certificación curso', 'Se realizó el cierre de los dos cursos de alfabetización digital que se estaba realizando con la comunidad de la Unidad Integral 6 de Belén y el Mascerca de Belén, las personas quedaron muy contentas con el curso y quieren realizar otros más.', 0, 'Parque_Biblioteca_Belen_Cetificacion_Alfabetizacion_Digital_y_Gobierno_en_Linea.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 193, 15, '2015-04-30 07:54:44', '0000-00-00 00:00:00'),
(439, '2015-04-29', 'Intervención sitio', 'Seguimiento y acompañamiento ', 'Se realizó seguimiento al punto de navegación de la casa de gobierno, se identifico que los equipos están funcionando muy bien.', 4, 'Casa_de_Gobierno_SADEP_Seguimiento_Punto_de_navegacion_29_04_15.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 333, 15, '2015-04-30 08:46:11', '0000-00-00 00:00:00'),
(442, '2015-04-07', 'Laboratorios comunitarios', 'Seguimiento Aulab', 'Acompañamiento semanal al Laboratorio Aulab de la Institución Educativa Aures', 14, 'Institucion_Educativa_Aures_Seguimiento_Gestores_TIC.JPG', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 568, 42, '2015-05-02 19:21:41', '2015-05-06 14:42:21'),
(443, '2015-04-08', 'Laboratorios comunitarios', 'Acompañamiento Laboratorio Comunitario', 'Acompañamiento semanal al laboratorio que está comenzando en la institución con los tres componentes: emisora, video y periódico.', 10, '', 'Institucion_Educativa_Jorge_Robledo_Laboratorio_1.JPG', '', 'uploads/accompaniment/accompaniment_adjunct1', 0, 278, 42, '2015-05-02 19:24:26', '2015-05-06 14:42:11'),
(444, '2015-04-10', 'Curso, taller o charla', 'Acompañamiento Curso ', 'Seguimiento al curso, ver los avances y como van las personas con las gestoras de este lugar', 14, '', '', '', '', 0, 479, 42, '2015-05-02 19:41:51', '0000-00-00 00:00:00'),
(445, '2015-04-14', 'Laboratorios comunitarios', 'Acompañamiento Aulab', 'Acompañamiento semanal al laboratorio, mirar el proceso y preparar los nuevos productos que se harán este año', 12, 'Educativa_Aures_Seguimiento_a_gestores_TIC_2.JPG', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 568, 42, '2015-05-02 20:02:41', '2015-05-06 14:42:00'),
(446, '2015-04-14', 'Curso, taller o charla', 'Acompañamiento Curso Herramientas Web 2.0', 'Se dictó en el curso de Herramientas Web 2.0 el tema de como descargar música y videos de YouTube', 9, 'Telecentro_La_Carmelita_Curso_AD_y_GEL_1.jpg', 'Telecentro_La_Carmelita_Curso_AD_y_GEL.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 483, 42, '2015-05-02 20:06:28', '0000-00-00 00:00:00'),
(447, '2015-04-22', 'Laboratorios comunitarios', 'Acompañamiento Laboratorio Comunitario ', 'Se habló de hacer varios videos que ayuden a impulsar la institución Educativa ', 10, 'I_E_Jorge_Robledo_Laboratorio_Audiovisual.jpg', 'I_E_Jorge_Robledo_Laboratorio_Audiovisual_1.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 278, 42, '2015-05-02 20:38:22', '0000-00-00 00:00:00'),
(448, '2015-04-29', 'Laboratorios comunitarios', 'Acompañamiento Laboratorio Comunitario', 'Los chicos hicieron un taller de Stop motion rápido, no hubo mucha asistencia porque en la institución hay varios profesores en paro', 7, 'Institucion_Educativa_Jorge_Robledo_Laboratorio_Comunitario.jpg', 'Institucion_Educativa_Jorge_Robledo_Laboratorio_Comunitario_2.JPG', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 278, 42, '2015-05-03 08:29:40', '0000-00-00 00:00:00'),
(449, '2015-05-07', 'Curso, taller o charla', 'Acompañamiento Taller Herramientas web 2.0', 'Se realizó un acompañamiento al taller de herramientas web 2.0 en está sesión se repasaron algunas sesiones trabajadas en Alfabetización Digital. ', 12, 'Telecentro_La_Carmelita_Taller_Herramientas_web_2_0.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 483, 24, '2015-05-03 13:28:40', '0000-00-00 00:00:00'),
(450, '2015-04-30', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Inicio Labor social', 'Se realizó una reunión con un voluntario y una estudiante de pp que iniciaran la labor social con el programa, acompañando algunos de los procesos de formación que se iniciaran el belén.', 0, 'Mascerca_Belen_Gestores_TIC.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 438, 15, '2015-05-03 13:34:45', '0000-00-00 00:00:00'),
(451, '2015-04-10', 'Estudiantes del Pascual Bravo', 'Inducción Gestor TIC', 'El encuentro se realiza con Ayen Amaya, estudiante del Pascual el cual manifiesta las ganas de cumplir su labor social en las estrategias que propone el programa, en el proceso de inducción se le muestra cual es nuestro objetivo y las opciones que tiene para cumplir con su labor social.  ', 0, 'Ayen_Fernando_Amaya_Estudiante_Pascual.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 184, 24, '2015-05-03 13:41:21', '0000-00-00 00:00:00'),
(452, '2015-04-10', 'practicantes', 'Inducción Gestor TIC', 'Se realiza un  proceso de inducción a un estudiante del Pascual Bravo interesado en acompañar los procesos de formación con miras a cumplir con su labor social. Él será el encargado los días sábado de acompañar un curso de Alfabetización Digital con funcionarios de secretaría de Desarrollo económico y además con el parque biblioteca Tomás Carrasquilla La Quintana de asesorar a los usuarios en charlas de dispositivos móviles. ', 0, 'Cedezo_La_Quintana_Induccion_Gestor_TIC.jpg', 'Cedezo_La_Quintana_Induccion_Gestor_TIC.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 168, 24, '2015-05-03 13:45:18', '2015-05-03 18:47:43'),
(453, '2015-04-11', 'Curso, taller o charla', 'Acompañamiento Observatorio Comuna 5', 'En está fecha se revisaron los compromisos y plantearon actividades direccionadas a definir el objetivo y población a la cual se comunicará el proyecto. ', 13, 'IE_Pedro_Claver_Aguirre_Observatorio_Comuna_5_2.jpg', 'IE_Pedro_Claver_Aguirre_Observatorio_comuna_5.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 232, 24, '2015-05-03 13:55:43', '0000-00-00 00:00:00'),
(454, '2015-04-25', 'Aula Abierta', 'Seguimiento al curso Alfabetización Digital', 'Hoy se realizó seguimiento al Aula Abierta y se enseñó todo lo concerniente a correo electrónico. ', 9, 'IE_Villa_Flora_Seguimiento_Curso_AD_y_GEL.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 289, 24, '2015-05-03 21:59:17', '0000-00-00 00:00:00'),
(455, '2015-04-25', 'Aula Abierta', 'Acompañamiento Curso Alfabetización Digital', 'En la segunda sesión de alfabetización digital y gobierno en línea con los funcionarios de comodatos, se trabaja todo el tema del teclado y el mouse, se realizan ejercicios en Edukanda, los Gestores TIC Ayen Amaya y Osbaldo Arboleda quedan a cargo del curso. ', 9, 'Cedezo_La_Quintana_Segunda_Sesion_Curso_AD_y_GEL_Funcionarios_3.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 168, 24, '2015-05-03 22:02:14', '0000-00-00 00:00:00'),
(456, '2015-05-14', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Reunión gestor TIC', 'Reunión con estudiante de PP del Pascual interesado en realizar la labor social en el programa. Se le cuenta sobre la estrategia de acompañamiento y se encuentra interesado en la hacerla. \r\nCompromiso: hablar con el edil de la 9 si puede el estudiante hacer su labor social en otra comuna como taquilla única.', 1, 'Inspeccion_9B_Gestor_TIC_PB.jpg', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 307, 20, '2015-05-03 22:57:22', '0000-00-00 00:00:00'),
(457, '2015-04-01', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Transferencia de contenidos a Gestorxs Tic', 'Se realizó una sesión de acompañamiento a los y las gestoras TIC de la comuna 3 y 4 donde se presentaron los contenidos de los talleres y cursos, se aclararon dudas y se realizaron recomendaciones. ', 6, 'Capacitacion_Gestores_TIC_2.JPG', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 440, 21, '2015-05-04 15:18:14', '0000-00-00 00:00:00'),
(458, '2015-05-05', 'practicantes', 'Acompañamiento a Curso', 'Acompañamiento al curso de alfabetización digital y gobierno en Línea con adulto mayor, realizado por el gestor TIC voluntario, Jhon Andrés Mestra en el telecentro Fátima de la comuna 16.', 1, 'Telecentro_Fatima_Acompanamiento_a_gestor_TIC_Jhon_Andres_Mestra_en_curso_de_Alfabetizacion_digital_y_gobierno_en_linea.JPG', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 207, 38, '2015-05-11 14:19:33', '2015-05-11 19:21:39'),
(459, '2015-05-07', 'Estudiantes de PP, jóvenes por la convivencia o al', 'Acompañamiento a Curso', 'Acompañamiento al curso de alfabetización digital y gobierno en Línea con adulto mayor, realizado por la gestora TIC de Pascual Bravo, Carolina Moreno en el telecentro Fátima de la comuna 16.', 1, 'Telecentro_Fatima_Acompanamiento_a_gestora_TIC_Carolina_Moreno_en_curso_de_Alfabetizacion_digital_y_gobierno_en_linea.JPG', '', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 207, 38, '2015-05-11 14:23:23', '0000-00-00 00:00:00'),
(460, '2015-05-09', 'Estudiantes del Pascual Bravo', 'Acompañamiento gestora TIC ', 'Acompañamiento a la gestora TIC del Pascual Bravo en el punto de navegación. El próximo sábado termina su labor social y se le entregará el certificado de terminación de sus horas.', 1, 'Parque_de_la_Vida_Acompanamiento_gestoraPB_Irianda_Osorio_1.jpg', 'Parque_de_la_Vida_seguimiento.jpg', '', 'uploads/accompaniment/accompaniment_adjunct', 0, 318, 20, '2015-05-11 16:45:03', '0000-00-00 00:00:00'),
(461, '2015-05-07', 'Kit de inclusion digital\r\n', 'Seguimiento kit de inclusión digital', 'Seguimiento al kit de inclusión digital y acompañamiento al curso de alfabetización digital para personas en situación de discapacidad. Se señala la necesidad de utilizar algunas herramientas del kit para algunos participantes del curso', 3, 'PB_Leon_de_Greiff_acompanamiento_kit_de_inclusion_5.jpg', 'PB_Leon_de_Greiff_acompanamiento_kit_de_inclusion_4.jpg', 'PB_Leon_de_Greiff_acompanamiento_kit_de_inclusion_3.jpg', 'uploads/accompaniment/accompaniment_adjunct', 0, 188, 20, '2015-05-11 16:51:55', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acc_types`
--

CREATE TABLE IF NOT EXISTS `acc_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `state` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcado de datos para la tabla `acc_types`
--

INSERT INTO `acc_types` (`id`, `name`, `state`, `user_id`, `creation_date`, `modification_date`) VALUES
(0, 'No asignado', 1, 12, '2015-05-12 00:00:00', '2015-05-12 15:14:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agents`
--

CREATE TABLE IF NOT EXISTS `agents` (
  `id_agent` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` bigint(15) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `agent_estado` varchar(45) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_agent`),
  UNIQUE KEY `person_id_2` (`person_id`),
  KEY `zone_id` (`zone_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Volcado de datos para la tabla `agents`
--

INSERT INTO `agents` (`id_agent`, `person_id`, `zone_id`, `agent_estado`, `creation_date`, `modification_date`, `user_id`) VALUES
(5, 526, 1, 'Inactivo', '0000-00-00 00:00:00', '2015-03-04 13:26:12', 0),
(7, 518, 1, '1', '0000-00-00 00:00:00', '2015-03-31 16:36:51', 0),
(8, 530, 4, 'Inactivo', '0000-00-00 00:00:00', '2015-03-04 13:26:32', 0),
(9, 531, 3, 'Activo', '0000-00-00 00:00:00', '2015-03-04 13:26:42', 0),
(10, 516, 2, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(11, 523, 1, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(13, 525, 2, '1', '0000-00-00 00:00:00', '2015-03-31 16:37:14', 0),
(14, 515, 2, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(15, 512, 3, 'Inactivo', '0000-00-00 00:00:00', '2015-03-04 13:26:53', 0),
(16, 527, 3, 'Inactivo', '0000-00-00 00:00:00', '2015-03-04 13:27:04', 0),
(17, 532, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(18, 513, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(20, 520, 1, 'Inactivo', '0000-00-00 00:00:00', '2015-03-04 13:27:13', 0),
(25, 535, 3, 'Inactivo', '0000-00-00 00:00:00', '2015-03-04 13:27:20', 0),
(26, 517, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(27, 537, 5, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(28, 524, 5, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(29, 510, 5, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(30, 536, 5, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(31, 541, 5, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(32, 566, 3, 'Activo', '2015-03-04 08:25:50', '0000-00-00 00:00:00', 13),
(33, 567, 2, 'Activo', '2015-03-04 08:30:22', '0000-00-00 00:00:00', 13),
(34, 568, 1, 'Activo', '2015-03-04 08:36:00', '0000-00-00 00:00:00', 13),
(35, 571, 4, 'Activo', '2015-03-09 08:19:32', '0000-00-00 00:00:00', 12),
(36, 618, 2, '1', '2015-04-06 12:07:34', '0000-00-00 00:00:00', 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `communes`
--

CREATE TABLE IF NOT EXISTS `communes` (
  `id_commune` int(11) NOT NULL AUTO_INCREMENT,
  `commune_name` varchar(60) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_commune`),
  UNIQUE KEY `commune_name` (`commune_name`),
  KEY `zone_id` (`zone_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Volcado de datos para la tabla `communes`
--

INSERT INTO `communes` (`id_commune`, `commune_name`, `zone_id`, `creation_date`, `modification_date`, `user_id`) VALUES
(1, 'Comuna 1 - Popular', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, 'Comuna 2 - Santa Cruz', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, 'Comuna 3 - Manrique', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(4, 'Comuna 4 - Aranjuez', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(5, 'Comuna 5 - Castilla', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(6, 'Comuna 6 - Doce De Octubre', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(7, 'Comuna 7 - Robledo', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(8, 'Comuna 8 - Villa Hermosa', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(9, 'Comuna 9 - Buenos Aires', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(10, 'Comuna 10 - la Candelaria', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(21, 'Comuna 11 - Laureles - Estadio', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(22, 'Comuna 12 - La América', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(23, 'Comuna 13 - San Javier', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(24, 'Comuna 14 - Poblado', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(25, 'Comuna 15 - Guayabal', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(26, 'Comuna 16 - Belén', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(27, 'Comuna 50 - San Sebastián de Palmitas', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(28, 'Comuna 60 - San Cristobal ', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(29, 'Comuna 70 - Altavista ', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(30, 'Comuna 80 - San Antonio de Prado', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(31, 'Comuna 90 - Santa Elena', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `divtypes`
--

CREATE TABLE IF NOT EXISTS `divtypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `state` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `divtypes`
--

INSERT INTO `divtypes` (`id`, `name`, `state`, `user_id`, `creation_date`, `modification_date`) VALUES
(0, 'No asignado', 1, 12, '2015-03-19 09:34:19', '2015-03-19 14:34:26'),
(2, 'Charla', 1, 35, '2015-03-31 11:38:35', '0000-00-00 00:00:00'),
(3, 'Activaciones Pedagógicas ', 1, 35, '2015-03-31 11:38:47', '0000-00-00 00:00:00'),
(4, 'Eventos', 1, 35, '2015-03-31 11:39:39', '0000-00-00 00:00:00'),
(5, 'Activación Zona WiFi', 1, 35, '2015-04-13 13:21:45', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `divulgations`
--

CREATE TABLE IF NOT EXISTS `divulgations` (
  `id_divulgation` int(11) NOT NULL AUTO_INCREMENT,
  `divulgation_date` date NOT NULL,
  `divulgation_name` varchar(50) NOT NULL,
  `divulgation_type` varchar(50) DEFAULT NULL,
  `divulgation_description` text NOT NULL,
  `participant_number` int(11) NOT NULL,
  `activity_place` varchar(80) NOT NULL,
  `divulgation_adjunct` varchar(256) NOT NULL,
  `divulgation_adjunct1` varchar(256) NOT NULL,
  `divulgation_adjunct2` varchar(256) NOT NULL,
  `dir` varchar(80) NOT NULL,
  `divulgation_type_id` int(11) NOT NULL,
  `population_type_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_divulgation`),
  KEY `site_id` (`site_id`),
  KEY `user_id` (`user_id`),
  KEY `divulgations_ibfk_3_idx` (`divulgation_type_id`),
  KEY `divulgations_ibfk_4_idx` (`population_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Volcado de datos para la tabla `divulgations`
--

INSERT INTO `divulgations` (`id_divulgation`, `divulgation_date`, `divulgation_name`, `divulgation_type`, `divulgation_description`, `participant_number`, `activity_place`, `divulgation_adjunct`, `divulgation_adjunct1`, `divulgation_adjunct2`, `dir`, `divulgation_type_id`, `population_type_id`, `site_id`, `user_id`, `creation_date`, `modification_date`) VALUES
(17, '2014-03-25', 'Lanzamiento nuevos sitios conectados', 'Otros', 'Se realizó una invitación para participar en el lanzamiento de los sitios nuevos.Y se tomaron los datos de tres personas como candidatos para hacer parte de un vídeo. ', 3, 'Parque Biblioteca de Belén', '', '', '', '', 0, 0, 352, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, '2014-05-17', 'Activación nuevo punto de conectividad', 'Activaciones pedagógicas', 'Asiste Comunicación Pública, Contenidos y Apropiación a la activación del nuevo punto de conectividad. Consistió en 3 espacios: Mi Medellín, uso libre de internet y trámites y servicios en línea. Los visitantes del mercado Arví se mostraron interesados en conocer el programa MDE Ciudad Inteligente y en consultar la mesa de votación para las elecciones presidenciales. Igualmente se brindó información para algunos turistas de otras regiones del país.', 10, 'Parque Arví', '', '', '', '', 0, 0, 317, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, '2014-06-19', 'Intervención CAV de Belencito', 'Otros', 'Se realizó intervención en el CAV, anuncio a través del micrófono sobre el programa, el uso del punto de navegación, los  trámites y servicios  en línea que se pueden hacer. Atención en el punto de navegación donde se les dio asesoría a las personas que se acercaron interesados en conocer las paginas para buscar empleo, cursos en el SENA y averiguar sobre indemnizaciones y ayudas para las victimas.Cambio de la información de la cartelera.', 56, 'CAV de Belencito ', '2014_06_19_08_44_16.jpg', '2014_06_19_09_59_18.jpg', 'CAV_de_Belencito_Intervencion_2.jpg', 'uploads/divulgation/divulgation_adjunct', 0, 0, 335, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '2014-04-08', 'Video para inauguración 17 sitios con conexi', 'Otros', 'Intervención en el parque de Belén con la filmación del vídeo promocional para la inauguración de los 17 sitios públicos del programa.', 2, 'Parque Belén', '', '', '', '', 0, 0, 352, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '2014-07-13', 'Activación nuevo punto de conectividad', 'Activaciones pedagógicas', 'Stand de Medellín Ciudad Inteligente con uso libre de internet, trámites en línea y bicilicuadora. Se acercan varias personas del corregimiento y de la ciudad a participar de las actividades. También se hace una jornada complementaria repartiendo volantes y afiches por las diferentes veredas.', 149, 'Parque de Santa Elena', '', '', '', '', 0, 0, 319, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, '2014-04-24', 'Inauguración 17 sitios con internet libre', 'Eventos', 'Intervención en el parque de Belén - inauguración de los 17 sitios públicos nuevos de Medellín. alli se contó con la participación de las personas en los stand donde se les brindo información sobre la plataforma MiMedellin e información general del evento. ', 80, 'Parque Belén', '', '', '', '', 0, 0, 193, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '2014-06-20', 'Activación parque del Poblado', 'Activaciones pedagógicas', 'Se realizó entrega de afiches y volantes a las personas que visitan el parque del poblado. se hablo con ellos sobre la conexión libre a la wifi del programa y en muchas ocasiones se les indico la forma correcta de conectarse. ', 100, 'Parque del Poblado ', 'Parque_de_El_Poblado.jpg', 'Parque_del_Poblado_Activacion_1.jpg', '', 'uploads/divulgation/divulgation_adjunct', 0, 0, 354, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, '2014-06-20', 'Previo a la activación ', 'Intervención de sitios de gobierno', 'Entrega de Afiches y volantes en el punto de navegación y sitio de gobierno.  ', 100, 'Casa de Gobierno Altavista', 'Parque_Altavista_antesala_activacion.jpg', '', '', 'uploads/divulgation/divulgation_adjunct', 0, 0, 353, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, '2014-06-22', 'Activación pedagógica en el parque de Altavista', 'Activaciones pedagógicas', 'Asiste Comunicación Pública, Contenidos y Apropiación a la activación del nuevo punto de conectividad. Consistió en 3 espacios: Mi Medellín, uso libre de Internet y trámites y servicios en línea.  participo variada población de altavista.  ', 100, 'Parque de Altavista', 'Parque_Altavista_Activacion_2.jpg', 'prueba1.jpg', 'Parque_de_Altavista_Activacion1.jpg', 'uploads/divulgation/divulgation_adjunct2', 0, 0, 353, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, '2014-07-02', 'Previo a la activación ', 'Activaciones pedagógicas', 'Entrega de afiches y volantes previo a la activación del parque principal de San Antonio de Prado', 100, 'Parque San Antonio de Prado', '', '', '', '', 0, 0, 452, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, '2014-06-18', 'Trámites en línea', 'Intervención de sitios de gobierno', 'Se llevó a cabo la jornada de trámites con víctimas. La atención fue muy exitosa en tanto hubo afluencia de público y las dudas de los asistentes pudieron ser subsanadas a través de los trámites en línea. De los más solicitados fueron el sisbén, página de Sofia Plus, citas por chat, empleo, fosyga.Es necesario que este tipo de jornadas se realicen a lo sumo cada mes ya que las personas que asisten al cav valoran y necesitan todo tipo de ayuda e información', 60, 'Telecentro Palermo', '', '', '', '', 0, 0, 247, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, '2014-06-12', 'Actividad Festival', 'Activaciones pedagógicas', 'En esta actividad se activó el sitio realizando la promoción, entrega de afiches e instalación de publicidad.Esta actividad fue planeada por comunicación pública y participamos acompañándolos en las actividades ya mencionadas y  en el punto de navegación con trámites y correos electrónicos', 100, 'Parque de la vida, plazoleta y alrededores', '', '', '', '', 0, 0, 318, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, '2014-06-20', 'Activación Parque de Aranjuez-Inspección de ', 'Activaciones pedagógicas', 'Se realizó una jornada de información sobre servicios y tramites en línea. Se invitó a la comunidad cercana al parque a que conocieran El Programa Medellín Ciudad Inteligente, y los puntos de navegación en la ciudad, entre ellos el de la Inspección de Aranjuez. ', 52, 'Parque de Aranjuez', '', '', '', '', 0, 0, 255, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, '2014-07-12', 'Festival Viva el Internet Parque de la Floresta', 'Activaciones pedagógicas', 'Se realizó una jornada de información sobre servicios y tramites en línea. Se invitó a la comunidad cercana al parque a que conocieran El Programa Medellín Ciudad Inteligente. Se invitó a la gente a conectarse desde dispositivos móviles a la red de el programa en el Parque de la Floresta. ', 100, 'Parque de la Floresta', 'Festival_viva_el_Internet_Parque_La_Floresta.', '', '', 'uploads/divulgation/divulgation_adjunct', 0, 0, 263, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, '2014-11-20', 'Intervención CAV Belencito', 'Intervención de sitios de gobierno', 'Intervervención con diferentes actividades, asesorías en el punto de navegación en trámites y servicios, asesorías en dispositivos móviles e inscripción de usuarios para procesos de formación en alfabetización digital y herramientas web 2.0', 250, 'CAv Belencito', 'IMG_1156.JPG', 'IMG_1158.JPG', 'IMG_1160.JPG', 'uploads/divulgation/divulgation_adjunct', 0, 0, 335, 38, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, '2014-12-03', 'Días de playa', 'Eventos', '"Sensibilización MiMedellin\r\nEn el evento ""Días de playa"" propuesto por el Teatro Pablo Tobón y  la alcaldía de Medellín. Se busca que los ciudadanos participen de la plataforma de MiMedellin con sus opiniones.\r\nObservación: conexión a internet muy lenta.\r\nAgentes: Clara y Maria Paulina, apoyo estudiante de PP Paula."\r\n', 43, 'Avenida La Playa', 'Escuela_del_maestro_evento_dic3_3.jpg', '', '', 'uploads/divulgation/divulgation_adjunct', 0, 0, 302, 20, '2014-12-17 11:39:17', '0000-00-00 00:00:00'),
(35, '2014-12-05', 'Días de playa', 'Eventos', '"Sensibilización MiMedellin\r\nEn el evento ""Días de playa"" propuesto por el Teatro Pablo Tobón y  la alcaldía de Medellín. Se busca que los ciudadanos participen de la plataforma de MiMedellin con sus opiniones.\r\nObservación: conexión a internet muy lenta.\r\nAgentes: Cristian y Mónica"\r\n', 70, 'Avenida La Playa', 'Escuela_del_maestro_evento_dic5_2.jpg', 'Escuela_del_maestro_evento_dic5_4.jpg', '', 'uploads/divulgation/divulgation_adjunct', 0, 0, 302, 20, '2014-12-17 11:45:25', '0000-00-00 00:00:00'),
(36, '2014-12-09', 'Días de playa', 'Eventos', '"Sensibilización MiMedellin\r\nEn el evento ""Días de playa"" propuesto por el Teatro Pablo Tobón y  la alcaldía de Medellín. Se busca que los ciudadanos participen de la plataforma de MiMedellin con sus opiniones.\r\nObservación: Ese día estuvo muy lluvioso, se atendieron muy pocas personas. Conexión a internet muy lenta.\r\nAgentes: Cindy y Rosa, apoyo estudiante de PP Alejandra"\r\n', 10, 'Avenida La Playa', 'Escuela_del_maestro_evento_dic9.jpg', '', '', 'uploads/divulgation/divulgation_adjunct', 0, 0, 302, 20, '2014-12-17 11:55:18', '0000-00-00 00:00:00'),
(37, '2014-12-11', 'Días de playa', 'Eventos', '"Sensibilización MiMedellin\r\nEn el evento ""Días de playa"" propuesto por el Teatro Pablo Tobón y  la alcaldía de Medellín. Se busca que los ciudadanos participen de la plataforma de MiMedellin con sus opiniones.\r\nObservación: conexión a internet muy lenta.\r\nAgentes: Alejandro y Carolina"\r\n', 16, 'Avenida La Playa', 'Escuela_del_maestro_evento_dic11_1.jpg', 'Escuela_del_maestro_evento_dic11_2.jpg', '', 'uploads/divulgation/divulgation_adjunct', 0, 0, 302, 20, '2014-12-17 11:58:07', '0000-00-00 00:00:00'),
(38, '2014-12-16', 'Días de playa', 'Eventos', '"Sensibilización MiMedellin\r\nEn el evento ""Días de playa"" propuesto por el Teatro Pablo Tobón y  la alcaldía de Medellín. Se busca que los ciudadanos participen de la plataforma de MiMedellin con sus opiniones.\r\nObservación: Conexión a internet muy lenta.\r\nAgentes: Cindy y Rosa"\r\n', 20, 'Avenida La Playa', 'Escuela_del_maestro_evento_dic16_2.jpg', 'Escuela_del_maestro_evento_dic16.jpg', '', 'uploads/divulgation/divulgation_adjunct', 0, 0, 302, 20, '2014-12-17 14:38:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `divulgations_people`
--

CREATE TABLE IF NOT EXISTS `divulgations_people` (
  `divulgation_id` int(11) NOT NULL,
  `person_id` bigint(15) NOT NULL,
  KEY `divulgation_id` (`divulgation_id`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `divulgations_thematics`
--

CREATE TABLE IF NOT EXISTS `divulgations_thematics` (
  `divulgation_id` int(11) NOT NULL,
  `thematic_id` int(11) NOT NULL,
  KEY `divulgations_thematics_ibfk_1_idx` (`divulgation_id`),
  KEY `divulgations_thematics_ibfk_2_idx` (`thematic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `divulgations_trainers`
--

CREATE TABLE IF NOT EXISTS `divulgations_trainers` (
  `divulgation_id` int(11) NOT NULL,
  `trainer_id` int(11) NOT NULL,
  KEY `divulgation_id` (`divulgation_id`),
  KEY `trainer_id` (`trainer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meetings`
--

CREATE TABLE IF NOT EXISTS `meetings` (
  `id_meeting` int(11) NOT NULL AUTO_INCREMENT,
  `meeting_date` date NOT NULL,
  `meeting_type` varchar(50) NOT NULL,
  `meeting_title` varchar(50) NOT NULL,
  `meeting_description` text NOT NULL,
  `meeting_commitments` text NOT NULL,
  `meeting_adjunct` varchar(256) DEFAULT NULL,
  `meeting_adjunct1` varchar(256) DEFAULT NULL,
  `meeting_adjunct2` varchar(256) DEFAULT NULL,
  `dir` varchar(80) NOT NULL,
  `meeting_type_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_meeting`),
  KEY `site_id` (`site_id`),
  KEY `user_id` (`user_id`),
  KEY `meeting_type_id` (`meeting_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=624 ;

--
-- Volcado de datos para la tabla `meetings`
--

INSERT INTO `meetings` (`id_meeting`, `meeting_date`, `meeting_type`, `meeting_title`, `meeting_description`, `meeting_commitments`, `meeting_adjunct`, `meeting_adjunct1`, `meeting_adjunct2`, `dir`, `meeting_type_id`, `site_id`, `user_id`, `creation_date`, `modification_date`) VALUES
(38, '2014-07-08', 'Gestión con aliados', 'Socialización Inclusión MDE a Red de bilbiotéca', 'La reunión es solicitada por Alejandra Ospina [aospina@reddebibliotecas.org.co 3007058192,5116789]La red quiere nuestra asesoría para realizar un proyecto con las bibliotecas dirigido a la población en situación de discapacidad. La idea es aportar contenidos al portal de la red que tengan que ver con el uso del kit y de mas servicios que ofrecen.Se presenta los vídeos promocionales del kit y de conectividad, se socializa sobre el concurso de diseño inclusivo y de los contenidos y accesibilidad que tendrá el metaportal, finalmente, se muestra la presentación del Kit', 'Apoyarlos, si lo solicitan, en el proceso del proyecto que van a desarrollar.Enviar por mail las presentaciones del KIT', NULL, NULL, NULL, '', 0, 163, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, '2014-01-29', 'Seguimiento', 'Seguimiento Kit de inclusión', 'Reunión para hablar acerca del kit de inclusión, hacer gestión del préstamo del aula, conocer las ofertas de procesos de formación para la comunidad que tiene este año la biblioteca.', 'Ninguno', NULL, NULL, NULL, '', 0, 193, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, '2014-02-03', 'Empalme', 'Empalme', 'Se hace contacto de nuevo con Yamileth Gallo encargada de la Sala Mi Barrio. Está interesada en continuar curso de alfabetización digital con la población que acude a la biblioteca, en el grupo de integración a las TIC en situación de discapacidad y en conectar a los niños pequeños con el Kit de Inclusión. Nos cuenta sobre la nueva directora Patricia Giraldo dirección.ladera@bibliotecasmedellin.gov.co. ', 'Agendar próxima reunión', NULL, NULL, NULL, '', 0, 189, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, '2014-01-29', 'Empalme', 'Empalme de procesos', 'Se realizó una reunión con la coordinadora y el gestor para darles a conocer la oferta de parte del programa e identificar algunas necesidades que ellos tenían, lo cual permitiría iniciar procesos de formación con los emprendedores.', 'Ninguno', NULL, NULL, NULL, '', 0, 176, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, '2014-02-03', 'Empalme', 'Empalme', 'Descripción de actividades a realizar este año y presentación del nuevo integrante de la zona.', 'Realizar seguimiento a la convocatoria del Telecentro para desarrollar actividades en estos espacios.', NULL, NULL, NULL, '', 0, 204, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, '2014-02-03', 'Empalme', 'Empalme', 'El Coordinador Nelson Ospina plantea la posibilidad de replantear el curso de Marketing Digital, como lo sugirió el año pasado en la evaluación de los cursos, propone que sean 20% teoría y 80% práctico. Manifiesta que le gustaría que los cursos de alfabetización digital y gobierno en línea sean ofrecidos por el Parque Biblioteca dadas las óptimas condiciones del espacio. Se puede incluir el curso de Web 2.0, cursos cortos de Excel y Power Point, Imagen de tu negocio. Contacto JAL Educación Comuna 8 Oscar Torres 3137388569. Tiene el proyecto de crear mesa de emprendimiento social. Propone iniciar Excel avanzado en Marzo posiblemente. ', 'Ninguno', NULL, NULL, NULL, '', 0, 170, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, '2014-02-04', 'Empalme', 'Empalme', 'Se hace contacto con la Promotora de Lectura Diana Carolina Valencia lectura.santaelena@bibliotecasmedellin.gov.co nos habla sobre las actividades de inclusión utilizando el Kit de manera sistemática los lunes. La directora no se encontraba en el momento de la visita, se indaga sobre la disponibilidad de la sala de Informática para realizar charlas en este espacio. Tel 538 0222 Ext 106. ', 'Ninguno', NULL, NULL, NULL, '', 0, 190, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, '2014-03-11', 'Seguimiento', 'Seguimiento', 'Reunión con Rosa López Directora de la Biblioteca para establecer alianzas de trabajo. Se informa sobre la dinámica de este año, en la que haremos actividades puntuales como charlas o talleres con la comunidad, pero no un proceso de curso completo como se realizó el año pasado. Se planea iniciar con una charla de Gobierno en Línea para los asistentes de la sala de computadores y programar cada 15 días talleres. ', 'Ninguno', NULL, NULL, NULL, '', 0, 190, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, '2014-01-30', 'Seguimiento', 'Seguimiento sala de sistemas', 'Se realizó una reunión con la gestora para verificar el estado de la sala de sistemas, se encontró que la sala continuaba en malas condiciones, por lo que no era posible iniciar procesos de formación con los emprendedores, a menos de que se gestionara en el Parque Biblioteca un espacio para iniciar.', 'Gestionar en el Parque biblioteca de San Antonio de Prado un aula de sistemas para iniciar procesos de formación con los emprendedores.', NULL, NULL, NULL, '', 0, 178, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, '2014-01-30', 'Empalme', 'Empalme de procesos', 'Se realizó una reunión con el gestor para hablar de las posibles ofertas que se manejarían con los emprendedores, por otro lado el gestor nos hace saber que se abrirá un punto de atención en el Poblado el cual será atendido por el.', 'Ninguno', NULL, NULL, NULL, '', 0, 175, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, '2014-01-30', 'Seguimiento', 'Seguimiento Kit de inclusión', 'Se realizó una reunión para hacerle seguimiento al kit de inclusión, la coordinadora nos cuenta que hay un grupo de personas en situación de discapacidad que están asistiendo a clases con ella, en estas clases utilizan el kit de inclusión, también se identifico que el kit esta conectado a un computador en donde las personas que las personas en situación de discapacidad pueden utilizar cuando lo requieran.', 'Ninguno', NULL, NULL, NULL, '', 0, 196, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, '2014-03-12', 'Seguimiento', 'Seguimiento', 'Propuesta de curso de Marketing Digital replanteando la pertinencia de las clases teóricas. Inicio Abril 23 Miércoles, Inicio Curso Marketing Digital. Se quedó en enviar los contenidos del curso. El coordinador solicita tener los contenidos del curso para ser revisados previamente. ', 'Ninguno', NULL, NULL, NULL, '', 0, 170, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, '2014-03-12', 'Seguimiento', 'Seguimiento con Directora', 'Contacto con la Directora de la Biblioteca Patricia Giraldo, nos proporciona sus datos de correo electrónico dirección.ladera@bibliotecasmedellin.gov.co y nos presentamos con ella para futuras actividades que se programen durante el año.', 'NA', NULL, NULL, NULL, '', 0, 189, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(67, '2014-01-28', 'Empalme', 'Reunión de enlace', 'Reunión de enlace con Jana Olaya, gestora del CEDEZO de San Cristóbal. Se trataron los siguientes temas:-Estado técnico de los equipos: Internet intermitente y a un equipo le falta un cargador, razón por la que no se puede usar.-Balance de los cursos y talleres del 2013: Dice que no tuvo mucha acogida pero que aún así fueron exitosos. Se requiere profundizar en temáticas más avanzadas como Power point, Excel, Blogs, entre otros. Es necesario hacer un filtro en el que se separen los grupos de alfabetización digital básica y los de talleres más avanzados.-Vinculación de Estudiantes de PP: Se pretende vincular algunos de los estudiantes más juiciosos y responsables que están interesados en prestar sus horas de labor social. Se propuso contactar a 3 estudiantes.-Intereses de empresarios: Se puntualizó que los grupos de emprendedores necesitan formación en mercadeo digital práctico, redes sociales, creación de blogs, fotografía, etc.-Grupos de empresarios: Se tomaron los datos de 13 grupos de emprendedores que podrían beneficiarse de los procesos de formación en el CEDEZO. -Disponibilidad de la sala: Se establecieron posibles horarios para llevar a cabo las formaciones. Es de carácter urgente confirmar los días y las horas de éstas, pero hasta que no se contacten los grupos y los estudiantes facilitadores, no se puede confirmar nada aún.', 'Llamadas a los emprendedores y a estudiantes beneficiarios de PP para planear actividades.', '.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 169, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(68, '2014-01-31', 'Seguimiento', 'Seguimiento Punto de navegación', 'Se realizó una reunión para identificar las condiciones del punto de navegación, los registros de usuarios, además se entrego el cargador de un equipo se tenía pendiente.', 'Ninguno', NULL, NULL, NULL, '', 0, 335, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(69, '2014-01-31', 'Empalme', 'Empalme de procesos', 'Reunión con Ana Maria para hablar del tema de atención de usuarios en el punto de navegación, ella nos cuenta que en el momento hay unos jóvenes por la convivencia que están realizando esta labor en las tardes, lo que facilita la toma del registro.', 'Se quedo con el compromiso de realizar una capacitación con los jóvenes.', NULL, NULL, NULL, '', 0, 334, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(70, '2014-01-29', 'Seguimiento', ' Seguimiento Punto de navegación', 'Reunión con la señora Ana lucia para verificar el estado del punto de navegación e identificar si estaban tomando el registro de usuarios, allá se pudo gestionar el servicio social de una alfabetizadora.', 'Ninguno', NULL, NULL, NULL, '', 0, 362, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(71, '2014-01-30', 'Seguimiento', 'Seguimiento Punto de navegación', 'Reunión con la secretaria para verificar la toma de registros de usuarios, se recogieron los indicadores.', 'Ninguno', NULL, NULL, NULL, '', 0, 336, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(72, '2014-01-30', 'Seguimiento', 'Seguimiento Punto de navegación', 'Se realizó una reunión para verificar el funcionamiento del punto de navegación y la toma de registro de usuario.', 'Ninguno', NULL, NULL, NULL, '', 0, 348, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(73, '2014-01-30', 'Seguimiento', 'Seguimiento Punto de navegación', 'verificar el funcionamiento del punto de navegación y la toma de registro de usuario, la funcionaria comento que el punto de navegación no contaba con internet.', 'Ninguno', NULL, NULL, NULL, '', 0, 333, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(74, '2014-01-29', 'Seguimiento', 'Seguimiento Punto de navegación ', 'Reunión para identificar las condiciones del punto de navegación y los registros de usuarios. ', 'Ninguno', NULL, NULL, NULL, '', 0, 439, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(75, '2014-01-29', 'Seguimiento', 'Seguimiento Punto de navegación', 'Reunión para identificar las condiciones del punto de navegación y los registros de usuarios.', 'Ninguno', NULL, NULL, NULL, '', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(76, '2014-02-27', 'Gestión con aliados', 'Gestión de estudiantes de pp', 'Se realizó una reunión con el edil de la comuna 16 para buscar el apoyo de estudiantes de pp en los procesos manejados por el programa en dicha comuna.', 'Se programa reunión para el 4 de marzo para la entrega de la base de datos de los estudiantes por PP', NULL, NULL, NULL, '', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(77, '2014-03-11', 'Seguimiento', 'Seguimiento', 'Reunión con la Coordinadora Beatriz y la docente Lillia Torres para establecer la forma de trabajo este año en temas como Inclusión con la Comunidad, Navegar sin Naufragar y trabajo con la Comunidad del Placer. Plantea reactivar el comité interveredal orientado hacia el emprendimiento. Se propone también trabajar el tema de Navegar sin Naufragar con los chicos de Media Luna. ', 'NA', 'photo5.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 432, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(78, '2014-02-04', 'Empalme', 'Empalme', 'Se habla con el encargado de la casa de gobierno, Guillermo Giraldo quien reemplazará temporalmente a Daniel guillermo.giraldo@medellin.gov.co, se observan los equipos nuevos de este espacio, están en excelentes condiciones de conectividad y los usuarios están conociendo de nuevo el servicio que cuenta con 4 computadores.', 'Ninguno', NULL, NULL, NULL, '', 0, 296, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(79, '2014-03-11', 'Empalme', 'Empalme', 'Reunión con Oscar Mauricio y Nicolás Londoño. Nos cuentan sobre el proceso de instalación del WIFI en el parque, dicen que ya instalaron las antenas y switches, pero está pendiente la conexión de Une. Hablamos sobre los medios para hacer difusión del nuevo servicio de conectividad a través de redes sociales, periódicos locales y bases de datos. Se deja pendiente averiguar el apoyo en la comunicación de redes de MDE. Nos invitan a la Mesa de Turismo comunitario que lidera el Parque, con 206 empresas de la zona, el próximo 20 de Marzo a las 9 am. Igualmente asistirá Juan Camilo Parra el 21 de Marzo al Comité de Sostenibilidad para contarle a varios actores de la zona sobre el servicio de WIFI en el Parque Central y en Arví. Se acuerda una reunión pendiente por definir la fecha con la Directora Ejecutiva y con todo el personal de Arví.', 'Ninguno', NULL, NULL, NULL, '', 0, 317, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(80, '2014-03-11', 'Seguimiento', 'Sequimiento', 'Se reconoce el uso del kit de inclusión digital dentro de las actividades de seguimiento. Encontramos un uso adecuado con los niños y niñas del centro desde preescolar. Tienen planeado abrir un espacio en las instalaciones del centro educativo para el uso del segundo kit con la comunidad que así lo ha solicitado. ', 'Ninguno', NULL, NULL, NULL, '', 0, 425, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(81, '2014-03-12', 'Seguimiento', 'Seguimiento', 'Propuesta de curso de Marketing Digital replanteando la pertinencia de las clases teóricas. Inicio Abril 23 Miércoles, Inicio Curso Marketing Digital. Se quedó en enviar los contenidos del curso. El coordinador solicita tener los contenidos del curso para ser revisados previamente. ', 'NA', NULL, NULL, NULL, '', 0, 170, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(82, '2014-02-20', 'Seguimiento', 'Seguimiento', 'Visita de nuevo a Espacio Público para hablar con la funcionaria Líder de Proyecto sobre la metodología de trabajo. A pesar de que habíamos acordado una cita con Isabel Pulgarín Líder, no se encontraba en el momento. Hablamos con su asistente.', 'Ninguno', NULL, NULL, NULL, '', 0, 427, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(83, '2014-03-12', 'Empalme', 'Empalme', 'Contacto con la Directora de la Biblioteca Patricia Giraldo, nos proporciona sus datos de correo electrónico dirección.ladera@bibliotecasmedellin.gov.co y nos presentamos con ella para futuras actividades que se programen durante el año.', 'NA', NULL, NULL, NULL, '', 0, 189, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(84, '2014-03-13', 'Gestión con aliados', 'Gestion con Aliados', 'Mesa de trabajo de La Sierra. Presentación del proyecto Crecer con Dignidad y MDE Inteligente. Planeación de la fiesta del niño en la Comuna 8, MDE propone apoyar la actividad con el tema de Reciclaje Electrónico con la presencia de 2.500 niños y niñas de la Comuna el 25 de Abril a las 9 am.', 'NA', NULL, NULL, NULL, '', 0, 327, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(85, '2014-02-20', 'Gestión con aliados', 'Gestión de alfabetizadores', 'Se realizó una reunión con el funcionario para conversar de la posibilidad de un alfabetización que este en el punto de navegación, pero le enviaron estudiantes de 9° y tuvieron dificultades con los usuarios. ', 'Gestionar el mueble para niños.', NULL, NULL, NULL, '', 0, 335, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(86, '2014-03-19', 'Seguimiento', 'Seguimiento kit de inclusión digital', 'Seguimiento al uso del kit de inclusión digital; registro fotográfico del primer usuario del kit en el Parque Biblioteca de Belén. ', 'Asistencia al laboratorio con personas sordas', '20140313_145404.jpg', '20140313_145527.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 193, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(87, '2014-03-25', 'Gestión con aliados', 'Gestion con aliados', 'Por sugerencia de Arvi, se realiza reunión con la Mesa de Turismo liderada por el Parque. En esta reunión se expone a los comerciantes de la zona el programa MCI y se responden inquietudes relacionadas con la parte técnica y de conectividad. En este espacio se aprovecha para dar a conocer el nuevo punto de conectividad del parque de Santa Elena', 'NA', NULL, NULL, NULL, '', 0, 317, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(88, '2014-02-03', 'Gestión con aliados', 'Gestión Estudiantes PP', 'Reunión con Ruth Estela Ospina, encargada de la JAL de San Cristóbal, para gestionar estudiantes beneficiarios de PP para atender el punto de navegación y los posibles cursos que se abran en los sitios aliados.', 'Enviarme por correo la base d datos de los estudiantes de PP y del Fondo EPM', NULL, NULL, NULL, '', 0, 269, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(89, '2014-06-04', 'Seguimiento', 'Seguimiento y Recolección de Indicadores', 'Se realizó una reunión de seguimiento con Ana María la funcionaria para verificar el estado y funcionamiento de los equipos del punto de navegación y la recolección de las planillas de registro. ', 'Ninguno ', NULL, NULL, NULL, '', 0, 334, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(90, '2014-06-04', 'Gestión con aliados', 'Reunión con el Edil Comuna 16', 'Reunión con el edil de la comuna 16 donde se le contó la función que cumplen los estudiantes de PP en el punto de navegación, Se hizo entrega de 2 chalecos mas y se logro obtener el apoyo de 2 estudiantes de PP para los procesos de formación que se están desarrollando en el Parque Biblioteca de Belén. ', 'Realizar una charla general con todos los estudiantes de PP que están interesados en prestar su servicio social con el programa. la fecha esta pendiente por confirmar.', NULL, NULL, NULL, '', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(91, '2014-02-06', 'Empalme', 'Firmas de documentos y solicitud ', 'Se realizo una reunión con la corregidora para que ella firmara unos  documentos de cartera, en esta reunión la corregidora aprovecho para hacer la solicitud de nuevos equipos para el punto de navegación.', 'Ninguno', NULL, NULL, NULL, '', 0, 336, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(92, '2014-02-06', 'Gestión con aliados', 'Gestión para investigación', 'Reunión con Paula Andrea Zorrilla, coordinadora del programa Amigos y Vecinos de Nuevo occidente, para comenzar la investigación sobre arquetipos en la zona y generar alianzas para los procesos de formación.', 'Ninguno', NULL, NULL, NULL, '', 0, 272, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(93, '2014-02-07', 'Gestión con aliados', 'Entrevista', 'Encuentro y entrevista con José Fernando Correa, gestor administrativo de Nuevo occidente, quien maneja un grupo juvenil y es un líder clave para la investigación sobre “arquetipos”.', 'Ninguno', NULL, NULL, NULL, '', 0, 272, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(94, '2014-02-06', 'Empalme', 'Firma de documentos y solicitud de equipos', 'Se realizó una reunión con la corregidora para firmar unos documentos de cartera, en esta reunión la corregidora aprovecho para hacer la solicitud de nuevos equipos para el punto de navegación.', 'Ninguno', NULL, NULL, NULL, '', 0, 336, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(95, '2014-06-03', 'Seguimiento', 'Acompañamiento Procesos de Formación', 'Se realizó acompañamiento al curso de herramientas web 2.0 que esta siendo orientado por Luisa la practicante del programa, debido a varios inconvenientes presentados con la sala de informática la sesión fue cancelada por la gestora de CEDEZO y no nos informo de dicho cambio. Se logro organizar con ella y el coordinador del CEDEZO  un horario fijo para continuar con las clases ya que la sala la habían formateado y organizado con anterioridad. Se llamo a todos los emprendedores y se confirmo continuar con la clase de manera normal la próxima semana. ', 'Realizar las llamadas a los emprendedores y separar el espacio de capacitación para la comunidad', NULL, NULL, NULL, '', 0, 174, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(96, '2014-02-04', 'Gestión con aliados', 'Gestión de estudiantes de pp', 'Se realizó una reunión con 4 personas de la JAL para vincular a estudiantes de presupuesto participativo en las actividades del área de apropiación.', 'Ninguno', NULL, NULL, NULL, '', 0, 348, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(97, '2014-07-03', 'Seguimiento', 'Acompañamiento', 'Visita de seguimiento y acompañamiento a las actividades que la biblioteca esta desarrollando con la comunidad y mirar estrategias de apropiación que se puedan implementar desde el acompañamiento que el programa le esta realizando al Parque Biblioteca. cuentan con 2 grupos de adultos mayores en procesos de formación en alfabetización digital y a los cuales se les va a dar una charla de gobierno en linea. ', 'Realizar taller de Gobierno en linea con 2 grupos de adultos mayores que se encuentran en formación. ', NULL, NULL, NULL, '', 0, 192, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(98, '2014-02-12', 'Empalme', 'Coordinación de procesos de formación', 'Se realizó una reunión con la fonoaudiologa y coordinadora de la fundación para realizar y revisar las propuestas del curso de alfabetización digital para los padres de los estudiantes.', 'Por parte de las personas de la fundación se quedo con los compromisos: enviar encuestas para identificar los posibles horarios y personas que participarían del curso, realizar capacitación en comunicadores.Por parte del programa: fijar fecha de inicio y realizar agendas para el curso.', NULL, NULL, NULL, '', 0, 215, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(99, '2014-02-20', 'Gestión con aliados', 'Gestión de estudiantes de pp', 'Se realizó una reunión con 12 representantes de cada barrio que conforma el nodo 1 de la comuna 13, en donde se les dio a conocer la estrategia del programa y se les presentó la propuesta de trabajo para los estudiantes por pp, pues la idea era empezar a contar con estos.', 'Ellos quedaron con el compromiso de enviarnos la base de datos de los estudiantes por pp. Desde el programa se quedo con el compromiso de realizar una reunión con el representante de Full producciones para realizar un taller de audiovisuales para un grupo de niños que están capacitando en esta temática.  ', NULL, NULL, NULL, '', 0, 206, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(100, '2014-06-04', 'Seguimiento', 'Acompañamiento', 'Se realizó visita de acompañamiento y firma de constancias por parte de la presidenta del Club de Vida Alegrías. adicional se realizó la recolección de registro de usos del punto de navegación del mes de mayo. ', 'Ninguno', NULL, NULL, NULL, '', 0, 335, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(101, '2014-04-03', 'Empalme', 'Gestión espacio para procesos de formación', 'Reunión con el señor Julian para gestionar espacio de la biblioteca para cursos de alfabetización digital con los emprendedores y taller de gobierno en linea con la comunidad.', 'Ninguno', NULL, NULL, NULL, '', 0, 194, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(102, '2014-04-03', 'Empalme', 'Convocatoria emprendedores para procesos de formac', 'Reunión con la Gestora para organizar un grupo de emprendedores para abrir un curso de alfabetización digital.', 'Enviar correo con los posibles horarios y temas a tratar en el curso.', NULL, NULL, NULL, '', 0, 178, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(103, '2014-06-05', 'Seguimiento', 'Reunión Seguimiento', 'Reunión con la profesora encargada del aula abierta para agendar actividades para el próximo semestre. Se programaron 4 charlas de navegar sin naufragar para estudiantes de  los grados 4° y 5°', 'Quedo pendiente confirmar la fecha y la hora de las charlas con los estudiantes', NULL, NULL, NULL, '', 0, 128, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(104, '2014-04-03', 'Empalme', 'Gestión de alfabetizadores', 'Reunión con el coordinador y un profesor encargado de la labor social de los estudiantes para gestionar dos alfabetizadores para la atención del punto de navegación del CAV de Belencito.', 'Facilitar dos alfabetizadores para atender en el punto de navegación.', NULL, NULL, NULL, '', 0, 355, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(105, '2014-04-02', 'Gestión con aliados', 'Procesos de formación', 'Reunión con el corregidor donde nos contextualizó sobre el corregimiento, se les preguntaron por posibles puntos para ser conectados;  se habló del curso de alfabetización digital para la comunidad aledaña. ', 'Enviar invitación para participar del curso de alfabetización digital.', NULL, NULL, NULL, '', 0, 332, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(106, '2014-04-01', 'Empalme', 'Inicio de procesos con la IE', 'Reunión ante el interés de la psicóloga de la institución de las charlas de Navegar sin naufragar. Se concertaron fechas y grupos para empezar a impactar la institución."', 'Envió de información requerida de la institución educativa; aprobación del cronograma de trabajo por parte del rector de la institución.', NULL, NULL, NULL, '', 0, 338, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(107, '2014-04-01', 'Empalme', 'Convocatoria procesos de formación', 'Reunión para gestionar cursos.', 'Se van a realizar convocatorias para conformar dos grupos.', NULL, NULL, NULL, '', 0, 174, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(108, '2014-03-20', 'Seguimiento', 'Seguimiento kit de inclusión digital', 'Se realizo una reunión corta con la coordinadora para verificar el estado del kit de inclusión', 'Trasladar el kit de inclusión para la sede Carlos Betancur', NULL, NULL, NULL, '', 0, 130, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(109, '2014-03-27', 'Seguimiento', 'Seguimiento kit de inclusión digital', 'Se realizó una reunión para compartir las actas y documentos del traslado del kit de inclusión a la sede Carlos Betancur', 'Hacer efectivo el traslado del kit de inclusión digital', NULL, NULL, NULL, '', 0, 130, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(110, '2014-03-20', 'Seguimiento', 'Seguimiento inclusión', 'Se realizó una reunión con la docente de aula de apoyo para identificar el número de estudiantes en situación de discapacidad que tiene la sede, para trasladar el kit de inclusión.', 'Se quedó con el compromiso acelerar el proceso del traslado del kit de inclusión.', NULL, NULL, NULL, '', 0, 140, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(111, '2014-06-10', 'Seguimiento', 'Reunión Seguimiento procesos de Formación', 'Reunión con la gestora y el coordinador del CEDEZO y el gestor del PIL para solucionar los inconvenientes que se estan presentando con el curso de herramientas web con los emprendedores debido a la mala comunicación y la mala información que se le da a los participantes. debido a esto, se han cancela 2 clases con los emprendedores se logro llegar a un acuerdo se 4 horas la proxima semana y dar cierre al curso con los emprendedores. se contro con el acompañamiento de gabriel profesional de inclusion 2 agentes,  practicante y 2 funcionarios del cedezo', 'Llamar a los participantes del curso ', NULL, NULL, NULL, '', 0, 174, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(112, '2014-03-04', 'Gestión con aliados', 'Estudiantes por PP', 'Reunión en el vicepresidente de la JAL, entrega base de datos de estudiantes por PP. Pone a disposición un espacio para la reunión informativa para los estudiantes. Revisión del punto de navegación', 'Confirmación del día y la hora de la reunión con los estudiantes por PP', NULL, NULL, NULL, '', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(113, '2014-03-11', 'Seguimiento', 'Seguimiento punto de navegación', 'Reunión con el encargado del punto de navegación para analizar la atención en el punto de navegación', 'Se propone la atención de alfabetizadores de la IE Perpetuo Socorro', NULL, NULL, NULL, '', 0, 335, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(114, '2014-03-14', 'Seguimiento', 'Reporte de mal funcionamiento PC', 'Reporte del mal funcionamiento de algunos  equipos al funcionario encargado, además, de notificar la presencia del practicante en el punto de navegación', 'Reporte en Aranda por parte del funcionario', NULL, NULL, NULL, '', 0, 335, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(115, '2014-03-14', 'Gestión con aliados', 'Inscripción curso AD y GEL', 'Reunión en el club de vida para invitar a los interesados en recibir el curso de alfabetización digital y en el taller de trámites en línea.', 'Envío de formato de inscripción a cursos o talleresEntrega de formato de inscripción diligenciado', NULL, NULL, NULL, '', 0, 335, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(116, '2014-03-26', 'Gestión con aliados', 'Inscripción curso AD y GEL', 'Recolección de inscritos para el curso de alfabetización digital y gobierno en línea', 'Entrega de listado de interesados', NULL, NULL, NULL, '', 0, 335, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(117, '2014-03-26', 'Empalme', 'Empalme presentación practicante', 'Presentación de la practicante al funcionario encargado del sitio, explicación de la dinámica del lugar.', 'Ninguno', NULL, NULL, NULL, '', 0, 335, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(118, '2014-03-21', 'Empalme', 'Empalme presentación practicante', 'Presentación de los practicantes en el sitio.', 'Firmar la hora de llegada y de salida del práctica del punto de navegación', NULL, NULL, NULL, '', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(119, '2014-06-05', 'Seguimiento', 'Seguimiento Kit de inclusión', 'Reunión para conocer cómo avanza el trabajo con el laboratorio con personas sordas.  La actividad se programará cada 15 días, para mejorar su periodicidad.', 'Ninguno', NULL, NULL, NULL, '', 0, 193, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(120, '2014-06-16', 'Seguimiento', 'Acompañamiento Procesos de Formación', 'Se realizó reunión de acompañamiento con el dinamizador del telecentro, se hablo sobre el kit de inclusión y experiencias significativas que se ha tenido en el telecentro con personas en situación de discapacidad. Adicional a eso se realizaron unas propuestas de acompañamiento y formación en charlas y talleres para los niños de la comunidad. ', 'Realizar la convocatoria de los niños que van a participar del taller de navegar sin naufragar para el segundo semestre.', NULL, NULL, NULL, '', 0, 206, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(121, '2014-03-27', 'Seguimiento', 'Convocatoria taller GEL', 'Reunión para la convocatoria y concertación de fechas para inicio del taller de gobierno en línea de usuarios del Telecentro', 'El funcionario se compromete a empezar a realizar la convocatoria a la comunidad para el taller de gobierno en línea.', NULL, NULL, NULL, '', 0, 210, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(122, '2014-03-27', 'Seguimiento', 'Convocatoria taller GEL', 'Reunión para la convocatoria y concertación de fechas para inicio del taller de gobierno en línea de usuarios del Telecentro', 'El funcionario se compromete a empezar a realizar la convocatoria a la comunidad para el taller de gobierno en línea.', NULL, NULL, NULL, '', 0, 210, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(123, '2014-06-13', 'Seguimiento', 'Seguimiento Kit de inclusión', 'La Docente Astrid de la Institución Educativa está realizando un proceso de investigación sobre los elementos del kit de inclusión para las personas en situación de discapacidad para la comunidad y como este es útil y pertinente para su Institución. realiza la solicitud de kit de inclusión digital.Se concreta visita de caracterización del kit de inclusión digital para el 2 de julio. Quedo pendiente concretar un taller de Gobierno en linea para los estudiantes de la IE. ', 'Se le propone a la docente concretar para ese mismo día un reunión con la rectora para proponerle el taller de GEL para jóvenes', NULL, NULL, NULL, '', 0, 121, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(124, '2014-03-13', 'Seguimiento', 'Inscripción curso AD y GEL', 'Convocatoria para el proceso de formación en AD y GEL de emprendedores del CEDEZO.', 'Iniciar la convocatoria', NULL, NULL, NULL, '', 0, 176, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(125, '2014-06-12', 'Seguimiento', 'Reunión Seguimiento procesos de Formación', 'Se realizo una reunión con dos funcionarios de la biblioteca, con el objetivo de agendar talleres de gobierno en línea para los grupos de adultos mayores que están en procesos de formación en alfabetización digital, se habló de los contenidos y se formulo la idea de recortar las sesiones debido al tiempo que el programa tiene para finalizar los cursos.', 'Enviar los contenidos de Gobierno en linea a los funcionarios ', NULL, NULL, NULL, '', 0, 192, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(126, '2014-03-25', 'Seguimiento', 'proceso de inscripción', 'Proceso de inscripción al curso de AD y GEL. Solicitud de préstamo del vídeo beam para los procesos de formación en el Parque Biblioteca de Belén ', 'Préstamo del vídeo beam los viernes', NULL, NULL, NULL, '', 0, 176, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(127, '2014-03-14', 'Seguimiento', 'seguimiento aula abierta', 'Se realizó una reunión con el vicerrector de la IE para conversar acerca del tema de aula abierta.', 'Desde el programa Medellín Ciudad Inteligente se quedo con el compromiso de agendar unas charlas de internet seguro y talleres de gobierno en línea para los estudiantes.', NULL, NULL, NULL, '', 0, 343, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(128, '2014-06-17', 'Seguimiento', 'Seguimiento a los procesos de formación', 'Reunión con los funcionarios del CEDEZO donde se trataron temas como los inconvenientes presentados en el curso de herramientas web 2.0 con los emprendedores. fueron 3 sesiones que se cancelaron debido a la mala comunicación con uno de los funcionarios y debido a esto los emprendedores no siguieron participando del taller.   Quedo pendiente programar una reunión para mirar la conveniencia de los cursos para el segundo semestre. (participaron 3 personas)', 'Programar una reunión para el segundo semestre para mirar los procesos de formación.', NULL, NULL, NULL, '', 0, 174, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(129, '2014-03-18', 'Empalme', 'Empalme presentación practicante', 'Presentación del practicante a la líder del sitio', 'firmar llegada y salida del practicante', NULL, NULL, NULL, '', 0, 362, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(130, '2014-03-13', 'Gestión con aliados', 'Atención punto de navegación alfabetizadores', 'Reunión con el personero de la IE Yermo y Parres para gestionar alfabetizadores para el punto de navegación', 'Indagar sobre los interesados en realizar su labor social en el punto de navegación ', NULL, NULL, NULL, '', 0, 362, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(131, '2014-03-25', 'Seguimiento', 'Inscripción curso AD y GEL', 'Recoger listados de interesados en el curso de alfabetización digital de los usuarios del club de vida', 'Programación de fecha y hora de inicio del curso', NULL, NULL, NULL, '', 0, 362, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(132, '2014-03-26', 'Seguimiento', 'Seguimiento', 'Contacto con funcionarias y definición de forma de trabajo. Las funcionarias de este sitio se habían negado a reunirse con nosotros, pero por intermedio de Biviana Arango fue posible hacerlo. Se habla sobre la posibilidad de hacer capacitaciones con el personal del sitio y con algunos usuarios y usuarias. ', 'NA', NULL, NULL, NULL, '', 0, 427, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(133, '2014-03-04', 'Seguimiento', 'Registro de uso pc', 'Recolección de indicadores de registro de uso del punto de navegación', 'Inscripción de personas interesadas en el curso de alfabetización digital ', NULL, NULL, NULL, '', 0, 362, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(134, '2014-03-20', 'Empalme', 'Empalme presentación practicante', 'Presentación de la practicante a la funcionaria del sitio ', 'Firmar fecha y hora de entrada y salida de la practicante', NULL, NULL, NULL, '', 0, 348, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(135, '2014-03-21', 'Empalme', 'Empalme presentación practicante', 'Presentación del practicante a la funcionaria del sitio ', 'Firmar fecha y hora de entrada y salida de la practicante', NULL, NULL, NULL, '', 0, 348, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(136, '2014-03-27', 'Empalme', 'Empalme presentación practicante', 'Presentaciones de los practicantes del programa a la funcionaria del sitio.', 'Firmar fecha y  hora de llegada del practicante', NULL, NULL, NULL, '', 0, 333, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(137, '2014-03-20', 'Seguimiento', 'Seguimiento kit de inclusión digital', 'Seguimiento al uso del kit de inclusión digital. Tienen a disposición de los usuarios algunos dispositivos en la sala de informática; además, tienen actividades programadas semanalmente para personas en situación de discapacidad ', 'Continuar con el acompañamiento', NULL, NULL, NULL, '', 0, 196, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(138, '2014-01-20', 'Empalme', 'Empalme', 'Visita de presentación y empalme con la funcionaria encargada de procesos de formación y educación en por mis derechos, antes conocido como por una vida mas digna', 'Se programa una próxima visita para cuadrar agendas de intervención y procesos de formación y seguimiento del sitio', 'IMG219.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 321, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(139, '2014-03-27', 'Seguimiento', 'Inscripción taller GEL', 'Reunión para iniciar con convocatorias para el taller de gobierno en línea para los usuarios de la biblioteca', 'Invitación para participar en el taller GEL en el telecentro', NULL, NULL, NULL, '', 0, 195, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(140, '2014-06-20', 'Seguimiento', 'Reunión  procesos de Formación', 'Se realizó reunión con el encargado del telecentro donde nos contó sobre los cursos que están desarrollando.  se va a dar inicio con 2 talleres cortos de gobierno en linea con las personas de la comunidad.  esta pendiente la convocatoria desde el telecentro.  Para el segundo semestre iniciar con cursos de herramientas web 2.0 para la comunidad.', 'Convocatoria taller gobierno en linea ', NULL, NULL, NULL, '', 0, 207, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(141, '2014-06-20', 'Seguimiento', 'Reunión  procesos de Formación', 'Se realizó reunión con el encargado del telecentro donde nos contó sobre los cursos que están desarrollando.  Se va a dar inicio con 2 talleres cortos de gobierno en linea con las personas de la comunidad.  esta pendiente la convocatoria desde el telecentro y hablar con el edil de la comuna para invitar a mas personas. ', 'Convocatoria a la comunidad de Belén Rosales ', NULL, NULL, NULL, '', 0, 208, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(142, '2014-03-13', 'Seguimiento', 'seguimiento aula abierta', 'Se realizó una reunión con la docente encargada del aula abierta, para verificar el estado de los equipos y presentarle a los practicantes.', 'Préstamo del aula de informática para capacitaciones de los emprendedores del CEDEZO de Altavista', NULL, NULL, NULL, '', 0, 128, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(143, '2014-03-13', 'Seguimiento', 'Seguimiento kit de inclusión digital', 'Se realizó una reunión con la docente del aula de apoyo para hacer seguimiento del kit de inclusión, verificando el estado del kit y las actividades que se han realizado con el.', 'Continuar con el seguimiento al uso del kit de inclusión digital', 'Seguimient_KIt_de_inclusion_IE.jpg', 'Seguimient_KItdeinclusionIE_jpg.jpg', 'Seguimiento_jpg.jpg', 'uploads/meeting/meeting_adjunct', 0, 126, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(144, '2014-04-07', 'Seguimiento', 'Seguimiento', 'Reunión con practicantes y con el docente Henry López para trabajar en conjunto en la revista digital de la IE que está en proceso de iniciar. El docente manifiesta que tienen el apoyo de otra IE en la comuna 5 (IE Colegio Loyola para la Ciencia y Tecnología), y de una docente universitaria que es voluntaria en el proceso. El docente nos facilita nombres de chicos para participar en el proyecto de investigación con Ruta N.', 'N', NULL, NULL, NULL, '', 0, 326, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(145, '2014-04-08', 'Seguimiento', 'Seguimiento', 'Telecentro Los Mangos. Se habló sobre la posibilidad de capacitar alfabetizadores en gobierno en línea, 4 en la tarde y 4 en la mañana. También se habla sobre la posibilidad de integrarnos a las clases de 5 a 6 pm los jueves, con el tema de Gobierno en Línea. ', 'N', NULL, NULL, NULL, '', 0, 204, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(146, '2014-04-09', 'Seguimiento', 'Seguimiento', '-	Parque Arví. Reunión con la Directora Ejecutiva y personal administrativo de la Corporación para establecer la forma de trabajo y activación del internet en el parque. Se sugiere hacer contactos con Sapienza para el espacio que se tendrá ', 'N', NULL, NULL, NULL, '', 0, 317, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(147, '2014-04-10', 'Seguimiento', 'Seguimiento', 'IE Alfonso López. Se gestionan procesos de aula abierta en la IE con dos cursos, a las 7:30 y a la 1 pm los miércoles. Se trabajará a futuro el grupo de periodismo digital y compra de cámaras. Contacto Cristina Guarín 3147017306 cristinaisabelgs@gmail.com psicóloga.', 'N', NULL, NULL, NULL, '', 0, 290, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(148, '2014-03-21', 'Seguimiento', 'Informativa del kit de inclusión', 'La rectora de la institución se mostró muy deceptiva  y puso a disposición los equipos necesarios para la instalación del kit de inclusión digital. La docente de aula de apoyo con muchos deseos de tener un kit de inclusión para poder trabajar con los estudiantes con capacidades diversas que cuenta la institución.', 'Entrega de la caracterización de la institución para el kit de inclusión digital', NULL, NULL, NULL, '', 0, 346, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(149, '2014-03-04', 'Seguimiento', 'Seguimiento kit de inclusión digital', 'Seguimiento al kit de inclusión digital, verificación de las personas inscritas al curso que se empezará a dictar a partir del 10 de marzo, con 4 grupos de personas con necesidades especiales', 'Acompañamiento alguna de las sesiones', NULL, NULL, NULL, '', 0, 206, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(150, '2014-03-13', 'Empalme', 'Empalme presentación practicante', 'Se realizó una visita de seguimiento al sitio y se presentaron a los practicantes.', 'Firmar fecha y hora de llegada y salida del practicante', NULL, NULL, NULL, '', 0, 332, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(151, '2014-01-28', 'Empalme', 'Empalme', 'Visita de presentación y empalme con la funcionaria encargada, se identifica el sitio se hace una breve caracterización visual del sitio. ', 'Se propone una nueva reunión para hablar sobre el acompañamiento en el sitio y la posibilidad de una persona que acompañe el sitio en la realización de tramites en línea y otros usos.', NULL, NULL, NULL, '', 0, 291, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(152, '2014-03-13', 'Gestión con aliados', 'Apoyo a propuesta', 'Se realizó una reunión con Carlos Bedoya el coordinador de Full Production para identificar la manera de apoyarlos desde los contenidos del programa.', 'Propuesta de una nueva reunión', NULL, NULL, NULL, '', 0, 206, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(153, '2014-01-27', 'Seguimiento', 'Reunión exploratoria de actividades', 'Se realiza primera reunión del año para determinar actividades de seguimiento al punto de navegación y posibles cursos que se realizarán en el Cav.Se sugiere por parte del coordinador acompañar el punto de navegación con unas charlas en la sala de espera del centro en dónde se expongan páginas que el coordinador estará pendiente en recopilar.Se visita el hogar educativo que es dirigido por religiosas (Sor ángela Quintero, 3114411385 / sorangelam@yahoo.com) quienes trabajan con el SENA en cursos de corte y cepillado, belleza en genral, panadería, cocina, gastronimía, peinado infantil, entre otros.En el mes se realizan distintos acompañamientos al punto de navegación.', 'Pendiente nueva reunión con el coordinador del CAV.', NULL, NULL, NULL, '', 0, 298, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(155, '2014-04-08', 'Seguimiento', 'Seguimiento Kit de Inclusión', 'Se verifica la disponibilidad y usabilidad del Kit de inclusion en la IE. Se intenta conseguir un nuevo contacto en la institución que se encargue del uso de estos elementos. Los encargados no dan razón del Kit ni ningún proyecto referido a este.', 'Se compromete el encargado de revisar la ubicación del Kit y de verificar que se proyecto se hará en la IE. Pendiente próxima visita.', '20140312_144331.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 422, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(156, '2014-05-15', 'Seguimiento', 'Seguimiento Kit de Inclusión', 'Se realiza la visita pendiente para hacer seguimiento al KIT. Se recorre las instalaciones de la IE para ubicar el KIT, no se logra ni ubicar los dispositivos ni saber quién es el encargado pues el docente Reinaldo ya no hace parte del equipo encargado de los procesos de informática. El Rector no se hace responsable, el coordinador no tiene ni idea, el profesor encargado de la sala de tecnología tampoco sabe.Se les pide la mayor colaboración para que el proceso sea éxitoso pero no hay mayor receptividad. ', 'Se queda de enviar fotos del KIT cuándo lo ubiquen y realizar un proyecto con las herramientas. Se decide poner a la IE con el KIT en Rojo en el semáforo de uso.', NULL, NULL, NULL, '', 0, 422, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(157, '2014-02-13', 'Seguimiento', 'Contacto inicial para actividades', 'Reunión con el profe Rigo y el Rector Juan Carlos para conversar sobre actividades que se pueden realizar este año en la IE.El proceso que mas interesa es Aula abierta y mantener las buenas relaciones con esta IETambien nos interesa tener alfabetizadores de esta IE para el punto de navegación de Mascerca de BS As. Contacto: Yolanda Ramirez Coordinadora de Alfabetización', 'Pendiente agendar charlas e intervenciones en la IE', NULL, NULL, NULL, '', 0, 293, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(158, '2014-03-26', 'Seguimiento', 'Alumnos en punto de navegación', 'Se visita la IE para informar a los encargados que en el punto de navegación del Mascerca de BS AS  hay estudiantes de la I E que no van a clases o se escapan para estar en los computadores  del punto.', 'Pendientes de informar si los estudiantes siguen yendo en horas escolares al punto', NULL, NULL, NULL, '', 0, 293, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(159, '2014-04-11', 'Seguimiento', 'Fechas de actividades', 'Reunión con el profe Rigo para cuadrar actividades.Él está interesado en que participemos en el aula abierta realizado los martes y miércoles de 6 a 8 pm. Le propongo que podemos tener una sesión de GEL o Asesoría en cámaras o celulares.Él preguntará a los participante en qué están interesados y me propondrá fecha y tema', 'Vía correo enviar fecha y tema para participar en el aula abierta.', NULL, NULL, NULL, '', 0, 293, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(160, '2014-02-13', 'Gestión con aliados', 'Exploración de actividades', 'Exploración de las actividades que podemos realizar en esta biblioteca.El personal de la biblioteca expone los procesos de formación que realizan y vemos como podemos articularnos con ellos, ademas que hacen parte de la fundación EPM quienes nos apoyan.', 'Consultar la posibilidad de trabajar juntos con los lideres correspondientes.', NULL, NULL, NULL, '', 0, 163, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(161, '2014-02-24', 'Gestión con aliados', 'Cronograma de actividades', 'Se programa las charlas de GEL en la biblioteca.Se realiza los contactos pertinentes para trabajar con el proyecto de inclusión que tienen en la biblioteca incluyendo el KIT de inclusión. Se plantea la forma en que vamos a trabajar juntos.Se plantea como será nuestra participación en una semana para TIC.', 'Cumplir con las expectativas y fechas planteadas', NULL, NULL, NULL, '', 0, 163, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `meetings` (`id_meeting`, `meeting_date`, `meeting_type`, `meeting_title`, `meeting_description`, `meeting_commitments`, `meeting_adjunct`, `meeting_adjunct1`, `meeting_adjunct2`, `dir`, `meeting_type_id`, `site_id`, `user_id`, `creation_date`, `modification_date`) VALUES
(162, '2014-04-21', 'Gestión con aliados', 'Reunión Actividades de inclusión', 'Definimos la forma en que nos uniremos a la propuesta de inclusión que tiene la biblioteca. Dahiana y Marcela quienes son empleadas deben realizar un proyecto de inclusión. Hemos decidido que realizaremos una sensibilización a los empleados de la biblioteca y otros de varios proyectos de la fundación EPM.', 'Establecer la metodología de trabajo del taller de sensibilización y establecer la fecha del taller.', NULL, NULL, NULL, '', 0, 163, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(163, '2014-05-09', 'Seguimiento', 'Seguimiento inclusión', 'Programar la sensibilización del kit de inclusión digital para el comité  Rompiendo barreras de  la institución', 'Confirmar la sensibilización para la semana institucional', NULL, NULL, NULL, '', 0, 360, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(164, '2014-05-09', 'Seguimiento', 'Seguimiento punto de navegación', 'Recoger indicadores de registro de uso. Sin embargo, estaban en bodega y la funcionaria no tenia las llaves; solicitan que se llame cuando se vayan a recoger las planillas', 'Llamar para confirmar la recolección de los indicadores de uso de los equipos', NULL, NULL, NULL, '', 0, 334, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(165, '2014-05-06', 'Seguimiento', 'seguimiento aula abierta', 'Se realizó una reunión con la coordinadora y la bibliotecaria para realizar seguimiento de aula abierta y agendar charlas de navegar sin naufragar.', 'Llamar a confirmar las charlas', NULL, NULL, NULL, '', 0, 347, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(166, '2014-04-01', 'Empalme', 'Gestión de procesos de formación', 'Se realizó una reunión con la gestora del CEDEZO y una persona del PIL para gestionar cursos con la comunidad.', 'Se van a realizar convocatorias para conformar dos grupos.', NULL, NULL, NULL, '', 0, 174, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(167, '2014-04-01', 'Gestión con aliados', 'Gestión de espacio para cursos', 'Se realizó una reunión con un funcionario de la biblioteca para gestionar el aula de sistemas y poder iniciar con los procesos de formación.', 'Enviar correo para confirmar espacio.', NULL, NULL, NULL, '', 0, 191, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(168, '2014-04-01', 'Empalme', 'Kit de inclusión', 'Se realizó una reunión para agendar una sensibilización del kit de inclusión.', 'Ninguno', NULL, NULL, NULL, '', 0, 344, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(169, '2014-04-10', 'Seguimiento', 'Seguimiento', 'Se establece contacto con comunicadora catalina.montoya@medellin.gov.co, quien aprueba publicar información en su pantalla principal con una resolución de 1080x1920 Full HD. Tel: 2291304 Ext 282.', 'N', 'IMG_20140129_WA0015.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 427, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(170, '2014-05-06', 'Seguimiento', 'Préstamo de vídeo beam', 'Reunión para gestionar la reserva del vídeo beam, porque lo prestaron para otro evento, sin tener en cuenta el inicio del taller', 'Contar el con vídeo beam para todo el taller', NULL, NULL, NULL, '', 0, 174, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(171, '2014-04-10', 'Seguimiento', 'Seguimiento', 'IE Sol de Oriente. Presentación de estudiantes de la revista digital acompañados del docente y con el apoyo de Rosa de Zona 1. Está enfocado en estudiantes de 11°, parte de la necesidad de comunicación interna de la IE, tiene secciones como deporte, diseño, humor, datos curiosos, democracia. Inició desde Marzo del presente año, busca incentivar la lectura crítica. Rosa sugiere como tareas para la próxima sesión tener un manual de estilo acordado entre todos, definir cada sección a qué corresponde, crear un nombre, justificación, explicar secciones de la revista y encargados, periodicidad. Próxima reunión jueves 8 de mayo a las 3:30 pm.', 'N', 'IMG_20140411_WA0016.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 326, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(172, '2014-04-01', 'Empalme', 'Gestión de procesos de formación para empren', 'Se realizó una reunión con el gestor empresarial del CEDEZO, en donde el gestor realizo una propuesta de intervención para los emprendedores.', 'Ninguno', NULL, NULL, NULL, '', 0, 175, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(173, '2014-04-21', 'Empalme', 'Empalme', 'Se ingresa como sitio nuevo en la base de datos de zona 3. Los encargados son Maryluz López 2924764 telecentrosmlm@gmail.com y Jose Luis Salinas de la JAC. Tel 2923025 y 3105256854 jlsalinas55@gmail.com. Se acuerda iniciar un curso de GEL el 9 de Mayo en el Telecentro.', 'N', NULL, NULL, NULL, '', 0, 205, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(174, '2014-01-20', 'Empalme', 'Empalme', 'Reunión de empalme y presentación de los agentes de la zona con la presentación de la profesional encargada de educación y procesos de formación.', 'se pide un acompañamiento en el sitio para el día 22 de enero en la mañana para la realización de procesos de inscripción al Sena de los usuarios del lugar ', 'photo4_6.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 321, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(175, '2014-04-10', 'Empalme', 'Empalme agente dinamizador', 'Se asistió al sitio para presentar a la agente dinamizadora Carolina a los funcionarios, se hizo reconocimiento de la zona con ella.', 'Ninguno', NULL, NULL, NULL, '', 0, 334, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(176, '2014-04-28', 'Gestión con aliados', 'Gestión', 'Reunión con la docente encargada del proceso, solicita hacer explícito por escrito el acuerdo para trabajar con Medellín Ciudad Inteligente, pero la líder Juana Fuentes manifiesta que estos procesos son acuerdos de voluntades más que compromisos. La docente finalmente acepta la intervención sin requerimientos de documentos.', 'N', NULL, NULL, NULL, '', 0, 447, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(177, '2014-07-10', 'Empalme', 'Programación de talleres', 'Reunión para programar talleres de gobierno en línea con los grados 11.', 'Ninguno', NULL, NULL, NULL, '', 0, 346, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(178, '2014-01-28', 'Empalme', 'Empalme', 'Visita de presentación y empalme con la funcionario encargado, se identifica el sitio se hace una breve caracterización visual del sitio.   ', 'Se propone una nueva reunión para hablar sobre el acompañamiento en el sitio y la posibilidad de una persona que acompañe el sitio en la realización de tramites en línea y otros usos ', NULL, NULL, NULL, '', 0, 306, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(179, '2014-04-28', 'Seguimiento', 'Seguimiento', 'Se habla con el rector para definir el espacio de clase de la IE con un solo grupo, dada la baja asistencia al grupo de la tarde. ', 'N', NULL, NULL, NULL, '', 0, 290, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(180, '2014-01-28', 'Empalme', 'Empalme', 'Visita de empalme y presentación de los dinamizadores con la profesional encargada del sitio luz marina.', 'Se propone una nueva reunión para hablar sobre el acompañamiento en el sitio y la posibilidad de una persona que acompañe el sitio en la realización de tramites en línea y otros usos ', 'photo5_6.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 300, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(181, '2014-05-06', 'Gestión con aliados', 'Préstamo de aula de informática', 'Préstamo de aula para taller de mercadeo digital CEDEZO de Guayabal. Se obtiene una respuesta positiva por parte de la coordinadora y prestan el espacio los mares de 2:00 p.m. a 4:00 p.m.', 'Quedó pendiente el aula que facilitarían para el taller', NULL, NULL, NULL, '', 0, 175, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(182, '2014-04-09', 'Empalme', 'Empalme agente dinamizador', 'Se asistió al sitio para presentar a la agente dinamizadora Carolina a los funcionarios, se hizo reconocimiento de la zona con ella.', 'Ninguno', NULL, NULL, NULL, '', 0, 176, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(183, '2014-01-28', 'Empalme', 'Empalme', 'Reunión de empalme y presentación de los agentes dinamizadores con la inspectora martha.', 'Se propone una nueva reunión para hablar sobre el acompañamiento en el sitio y la posibilidad de una persona que acompañe el sitio en la realización de tramites en línea y otros usos ', 'Salvador_9b.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 307, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(184, '2014-05-06', 'Seguimiento', 'Seguimiento', 'Se habla con el rector de la IE Alfonso López para solucionar el tema de la estabilidad en la sala de MCI, que funciona con el sistema de la nube y en la clase pasada se tuvo inconvenientes para iniciar el sistema. ', 'N', NULL, NULL, NULL, '', 0, 290, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(185, '2014-04-10', 'Seguimiento', 'Verificación estado de los equipos', 'Se realizo una visita para verificar el estado de los equipos. (2 funcionarios)', 'Ninguno', NULL, NULL, NULL, '', 0, 176, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(186, '2014-05-06', 'Seguimiento', 'Programar taller de GEL', 'Se realizó una reunión para agendar talleres de Gobierno en línea con los estudiantes de once grado.', 'La IE quedo con el compromiso de enviar un correo con la confirmación de los talleres.', NULL, NULL, NULL, '', 0, 344, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(187, '2014-04-07', 'Empalme', 'Gestión de procesos de formación', 'Reunión para gestionar espacio e iniciar cursos.', 'Enviar correo de confirmación.', NULL, NULL, NULL, '', 0, 194, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(188, '2014-04-07', 'Empalme', 'Convocatoria emprendedores para procesos de formac', 'Reunión para iniciar convocatoria de cursos de alfabetización digital (1 funcionaria)', 'Ninguno', NULL, NULL, NULL, '', 0, 178, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(189, '2014-01-29', 'Empalme', 'Empalme', 'Visita de reconocimiento empalme y presentación de los agentes dinamizadores con la funcionara encargada del sitio.', 'Se propone una nueva reunión para hablar sobre el acompañamiento en el sitio y la posibilidad de una persona que acompañe el sitio en la realización de tramites en línea y otros usos ', NULL, NULL, NULL, '', 0, 427, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(190, '2014-05-09', 'Seguimiento', 'Seguimiento kit de inclusión digital', 'Se realizo una reunión con dos docentes y el coordinador de la IE, para verificar el estado del Kit de inclusión, las personas encargadas nos cuentan que están esperando la instalación del software por parte de mesa de ayuda.', 'Programación del taller de sensibilización del kit de inclusión digital ', NULL, NULL, NULL, '', 0, 140, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(191, '2014-01-29', 'Empalme', 'Empalme', 'Reunión de empalme y presentación de los agentes dinamizadores con la directora de archivo histórico', 'Se propone una nueva reunión para hablar sobre el acompañamiento en el sitio y la posibilidad de una persona que acompañe el sitio en la realización de tramites en línea y otros usos ', '2009100604481900000224410000081759.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 292, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(192, '2014-04-08', 'Seguimiento', 'Seguimiento kit de inclusión digital', 'Reunión con el dinamizador del Telecentro para dialogar sobre la estrategia que ha venido implementando con las personas con capacidades diversas. Utilización de las herramientas motrices del software del kit, van por niveles de dificultad: la ranita, naves espaciales y rompecabezas. (1 personas)', 'Ninguno', NULL, NULL, NULL, '', 0, 206, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(193, '2014-03-11', 'Gestión con aliados', 'Gestión PP', 'Reunión con Javier Castro, encargado de bienestar institucional, con el fin de gestionar alianzas y obtener información sobre los estudiantes beneficiarios de PP y del Fondo EPM para su articulación con el programa.', 'Envío de la base de datos de los estudiantes para establecer contactos.Gestionar la participación en alguna feria institucional para divulgar el programa y el kit de inclusión digital.', NULL, NULL, NULL, '', 0, 406, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(194, '2014-05-09', 'Seguimiento', 'Seguimiento talleres a la comunidad', 'Se habló con el encargado de la biblioteca para el envío de las evidencias del taller de gobierno en línea que se esta dictando con apoyo del Telecentro.', 'Envío de evidencias', NULL, NULL, NULL, '', 0, 195, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(195, '2014-05-09', 'Seguimiento', 'Seguimiento', 'Se acuerda cita con la docente para separar las fechas de las charlas de internet seguro.', 'N', NULL, NULL, NULL, '', 0, 312, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(196, '2014-04-08', 'Gestión con aliados', 'Gestión para divulgación de procesos', 'Reunión con aliados  para la divulgación de información para personas con capacidades diversas', 'Ninguno', NULL, NULL, NULL, '', 0, 206, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(197, '2014-04-10', 'Empalme', 'Empalme agente dinamizador', 'Se realizo una reunión con el coordinador y la gestora del CEDEZO para presentar a la agente dinamizadora Carolina, además se hablo del tema de las convocatorias para los cursos. (2 funcionarios), se le contó a Carolina los procesos que se tenían en el CEDEZO.', 'Ninguno', NULL, NULL, NULL, '', 0, 174, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(198, '2014-05-09', 'Seguimiento', 'Seguimiento', 'Se acuerda cita con el docente para la siguiente semana, para organizar la forma de trabajo.', 'Ninguno', 'IMG_0645.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 299, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(199, '2014-03-05', 'Gestión con aliados', 'Gestión de procesos', 'Reunión con el director, el técnico en cultura digital  y el encargado de logística para gestionar la articulación de procesos de formación.', 'Participar en la actividad Vos con voz"" para hablar del tema de inclusión digital para personas en situación de discapacidad."', NULL, NULL, NULL, '', 0, 186, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(200, '2014-02-25', 'Seguimiento', 'Reunionol', 'Reunión para buscar alternativas para cuadrar en el sitio un practicante de pp de manera continua.', 'buscar alternativas de manera conjunta para encontrar alguien que acompañe el sitio', 'IMG219-0.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 321, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(201, '2014-05-15', 'Seguimiento', 'Seguimiento talleres a la comunidad', 'Se realizó una reunión corta para hablar acerca de los cursos que se están dictando en el parque biblioteca.', 'Continuar con los procesos de formación ', NULL, NULL, NULL, '', 0, 178, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(202, '2014-05-12', 'Seguimiento', 'Seguimiento', 'Se agendan charlas de Navegar sin Naufragar con estudiantes del grado 8°, la docente manifiesta que hay un manejo inadecuado de las redes sociales en situaciones difíciles a nivel grupal.', 'Ninguno', 'IMG_1321.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 312, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(203, '2014-03-14', 'Seguimiento', 'Seguimiento punto de navegación', 'Reunión de empalme y seguimiento al punto de navegación para reconocer las dinámicas de uso y apropiación de la comunidad y las posibles dificultades en la prestación de servicios.', 'Enviar formatos de registro de usuario.Hacer el reporte a S@mi de un computador que está fallando.', NULL, NULL, NULL, '', 0, 270, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(204, '2014-02-27', 'Empalme', 'Empalme', 'Empalme presentación y reconocimiento del sitio', 'Seguimiento continuo', 'aula_rio.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 236, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(205, '2014-05-23', 'Seguimiento', 'Estudiantes por PP', 'Se realizó reunión con el edil de lsa comuna 16 para conseguir acompañamiento de chicos de PP en los procesos de formación que se estan llevando a cabo en el parque biblioteca de Bélen y unas IE cercanas.', 'Quedó pendiente la confirmación y listado de los chicos que nos van apoyas a mas tardar el martes 27 de mayo', NULL, NULL, NULL, '', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(206, '2014-04-07', 'Gestión con aliados', 'Gestión procesos de formación con personas e', 'Se realizo una reunión con una persona encargada de inclusión social y un líder comunitario, para identificar posibles ofertas de cursos con adultos mayores y personas en situación de discapacidad. ', 'Ninguno', NULL, NULL, NULL, '', 0, 333, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(207, '2014-05-21', 'Seguimiento', 'Seguimiento talleres a la comunidad', 'Reunión de seguimiento a los cursos que se están realizando en el CEDEZO con los emprendedores de la zona. se hablo sobre la mala conexión a internet y se realizó el requerimiento para la revisión de los equipos con la mesa de ayuda. ', 'Adicional se quedo pendiente hacer la convocatoria para el taller de gobierno en linea con la comunidad y la convocatoria para iniciar con un curso de alfabetización digital con emprendedores para el segundo semestre.', NULL, NULL, NULL, '', 0, 174, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(208, '2014-04-09', 'Empalme', 'Gestión de procesos de formación', 'Se realizo una visita a la biblioteca para organizar el taller de gobierno en línea.', 'Iniciar convocatoria por parte de la biblioteca.', NULL, NULL, NULL, '', 0, 195, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(209, '2014-03-14', 'Empalme', 'Empalme Palmitas rural', 'Reunión con la coordinadora rural para comenzar a pensar las actividades y las estrategias de articulación entre el programa y los centros educativos.', 'Gestionar estudiantes beneficiarios de PP con los líderes de la JAL', NULL, NULL, NULL, '', 0, 397, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(210, '2014-05-23', 'Seguimiento', 'Propuesta de charla NSN', 'Reunión con la rectora profe encargada de la institución para presentarle la propuesta de acompañamiento. Charlas de internet seguro para estudiantes de 3° y 4°: Recomiendan hacer contacto con el vicerrector académico del INEM para que autorice dichas charlas', 'Contactar al vicerrector académico para programar las charlas', NULL, NULL, NULL, '', 0, 342, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(211, '2014-04-07', 'Empalme', 'Kit de inclusión', 'Se realizo una reunión con el coordinador de la IE, para verificar el traslado del kit de inclusión.', 'Ninguno', NULL, NULL, NULL, '', 0, 140, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(212, '2014-05-23', 'Seguimiento', 'seguimiento aula abierta', 'Reunión con la profesora enlace para darle a conocer la propuesta de intervención; pero se encontraban en una capacitación, por tanto se concreta una próxima reunión.', 'Se concreta una reunión para la semana siguiente', NULL, NULL, NULL, '', 0, 330, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(213, '2014-04-09', 'Empalme', 'Procesos de formación', 'Se realizo una visita a la biblioteca para organizar el taller de gobierno en línea.', 'Ninguno', NULL, NULL, NULL, '', 0, 210, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(214, '2014-03-14', 'Empalme', 'Empalme Palmitas rural', 'Reunión de empalme y articulación con la escuela para analizar la posibilidad de realizar algún proceso de formación en el sitio.', 'Hacer el reporte a mesa de ayuda de los equipos que están presentando fallas de hardware y de conexión.', NULL, NULL, NULL, '', 0, 398, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(215, '2014-04-23', 'Empalme', 'Labores de los funcionarios con MDE ciudad intelig', 'Se realizó una reunión con 8 funcionarios para identificar las funciones que tienen las diferentes secretarías con respecto a los equipos de MDE Ciudad Inteligente; a esta reunión asistieron los siguientes funcionarios: Melida Barrientos(Servicio a la ciudadanía), Patricia(coordinadora casa de justicia), Ana  (profesional de apoyo coordinación casa de justicia), Diana Mesa, Milena Palacio (encargadas jóvenes por la vida), Sandra Milena Vasquez, Olga (coordinadoras Casas de juasticia), Biviana Arango, Cindy Jaramillo (Mde Ciudad Inteligente).', 'Ninguno', NULL, NULL, NULL, '', 0, 334, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(216, '2014-04-07', 'Empalme', 'Kit de inclusión', 'Se realizó una socialización del seguimiento del uso del kit de inclusión digital 2014.Propuesta de capacitación a 20 funcionarios de la UIA para el 7 de mayo de 2:00 a 6:00 pm.Conformación de un equipo interdisciplinario en las 19 instituciones educativas, tres encuentros uno en mayo, otro en agosto y el último en octubre.', 'Envío del consolidado del seguimiento al kit de inclusión digital.', NULL, NULL, NULL, '', 0, 451, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(217, '2014-03-14', 'Empalme', 'Empalme ', 'Reunión de empalme y articulación con el colegio para analizar la posibilidad de realizar algún proceso de formación en el sitio. Al parecer no hay espacio disponible en la sala de sistemas ya que la institución está sobre ofertada.', 'Encontrar un espacio disponible para convocar a la comunidad.', NULL, NULL, NULL, '', 0, 276, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(218, '2014-04-23', 'Empalme', 'Reunión', 'Se realizó una reunión con el señor Francisco (de la comunidad), pues nos ayudaría con un vídeo que se utilizaría en el lanzamiento de los nuevos sitios.', 'Ninguno', NULL, NULL, NULL, '', 0, 193, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(219, '2014-03-14', 'Gestión con aliados', 'Articulación de procesos', 'Reunión de articulación y empalme con la gestora de servicios. Hay una muy buena recepción y disposición de la biblioteca para trabajar con el programa.  Se definen algunas temáticas específicas como: Gobierno en Línea con su grupo de informática de nivel III, charlas de navegar sin naufragar para niños y taller de narrativas con jóvenes.', 'Elaborar un plan de acción posible de ejecutar en la medida de las posibilidades.', NULL, NULL, NULL, '', 0, 185, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(220, '2014-05-21', 'Seguimiento', 'seguimiento aula abierta', 'Se realizó una reunión con las docentes encargadas del aula abierta, para hacer el seguimiento correspondiente al aula abierta, ellas me contaron que hay un grupo de adultos que están validando el bachillerato y están utilizando la sala de sistemas para la clase de tecnología, se planeo con ellas los posibles cursos que están dispuestas a dar y se agendo una charla de Navegar sin naufragar con los estudiantes de quinto grado para el próximo martes.', 'Charla de NSN', NULL, NULL, NULL, '', 0, 351, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(221, '2014-04-23', 'Empalme', 'Gestión de vídeo beam', 'Reunión para solicitar el préstamo del vídeo beam para los cursos de alfabetización en el Parque Biblioteca; solamente pueden prestarlo el viernes, los otros días tienen otras capacitaciones para los emprendedores.', 'Préstamo del vídeo beam los viernes en la mañana', NULL, NULL, NULL, '', 0, 176, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(222, '2014-05-21', 'Seguimiento', 'Propuesta de charla NSN', 'Se realizó una reunión con la rectora y la coordinadora de la IE, para agendar charlas de Navegar sin Naufragar con los grados sextos y séptimos, ambas se mostraron muy interesadas y dispuestas.', 'Agendar charlas NSN', NULL, NULL, NULL, '', 0, 123, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(223, '2014-02-11', 'Empalme', 'Empalme', 'Visita para empalme, reunión para conocer el patronato, caracterizar de las necesidades de la población que allí se impacta, análisis de la propuesta de intervención ', 'Se planea una próxima reunión, se propone realizar una convocatoria para realizar cursos de alfabetización digital', 'Patronato.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 214, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(224, '2014-04-22', 'Gestión con aliados', 'Gestión de espacio para cursos', 'Reunión con el rector de la IE Cristobal Colon y el docente de informática para solicitar el espacio de aula abierta y poder dar inicio al curso de alfabetización digital con las personas del club de vida del CAV de Belencito. ', 'Quedo pendiente hablar con el docente para mirar la disponibilidad de la sala y poder llamar a confirmar a las personas.', NULL, NULL, NULL, '', 0, 335, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(225, '2014-07-02', 'Seguimiento', 'Manejo de outlook', 'Por solicitud de la funcionaria se llevó a cabo un espacio donde se asesoró sobre el manejo de algunas herramientas que ofrece outlook, en vista de la necesidad que representa para ellos tener un buen manejo de las mismas.', 'Se recuerda el compromiso pactado bajo acta por disponer espacios de capacitación sobre Gobierno en Línea con los funcionarios, dado que la mayoría no conocen el portal de ciudad ni el de Gobierno y por tanto los beneficios que ofrecen.Se habla nuevamente de la necesidad de dinamizar las intervenciones de los chicos y chicas de jóvenes por la vida en los puntos de navegación, a través de algunas herramientas como páginas llamativas para los niños y niñas, con propósitos educativos y de la asesoría en algunos trámites en línea de utilidad para los adultos.', NULL, NULL, NULL, '', 0, 242, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(226, '2014-04-23', 'Empalme', 'Gestión de procesos de formación', 'Reunión con las directora del Club de Vida Alegría para contarle cómo va el proceso de consecución de aula de informática para el curso y el taller para los adultos mayores. Se propone realizar el taller en el Telecentro y hacer contacto con el dinamizador para contar con su colaboración. ', 'Ninguno', NULL, NULL, NULL, '', 0, 335, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(227, '2014-04-24', 'Gestión con aliados', 'Gestión de espacio para cursos', 'Reunión para gestionar préstamo de aula de informática talleres de GL del Club de Vida de la CAV de Belencito. Se recibe una respuesta positiva y la oferta de horarios disponibles.', 'Informar sobre los horarios definitivos.', NULL, NULL, NULL, '', 0, 206, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(228, '2014-05-29', 'Seguimiento', 'Propuesta de charla NSN', 'Se realizó una reunión con la profesora Lyda Morales para evaluar el tema de aula abierta, así mismo se agendo una charla de internet seguro para los grados cuartos con las profesoras.', 'Confirmar charla NSN', 'Reunion_IE_Monsenor.jpg', 'Seguimiento_Aula_abierta.jpg', NULL, 'uploads/meeting/meeting_adjunct1', 0, 132, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(229, '2014-05-15', 'Seguimiento', 'Seguimiento', 'Reunión con la docente para programar charlas de internet seguro con los estudiantes, ya que el año pasado se desarrolló proceso con la comunidad y la docente considera difícil convocar de nuevo a los padres de familia. ', 'N', NULL, NULL, NULL, '', 0, 426, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(230, '2014-02-25', 'Seguimiento', 'Reunión', 'Reunión para presentar la practicante de pp que continuara acompañando el sitio para cumplir con sus horas de servicio socia a la comunidad.', 'Se planea una nueva reunión para hablar de las horas y firmar el convenio', 'photo4_6-0.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 321, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(231, '2014-05-26', 'Seguimiento', 'Reunión exploratoria de actividades', 'Esta reunión muy corta se realizó con el animo de programar actividades en la institución. Por cuestión de las dinámicas institucionales y por cierre de periodo escolar no tuvimos mayor receptividad por parte de los encargados y del psicólogo.', 'Regresar  la institución con propuestas concretas', 'IMG_20140526_WA0004.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 295, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(232, '2014-03-26', 'Seguimiento', 'Reunión exploratoria de actividades', 'Se realiza la reunión para conocer al nuevo personal encargado y las actividades que están realizando.Se propone trabajar charlas especificas con las estudiantes ya que el año pasado la intervención contempló alfabetización digital avanzada y las mismas chicas que están este año ya pasaron por este curso.', 'Regresar con las propuestas concretas de las charlas', NULL, NULL, NULL, '', 0, 212, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(233, '2014-05-23', 'Seguimiento', 'Reunión Ruta de intervención', 'Esta reunión se realizó con el animo de programar las intervenciones que tendrá la practicante que acompañará el punto de navegación. Se deja claro que por cuestiones de contratación este año no podemos tener un acompañamiento constante en el punto como se hizo el año pasado. Es necesario esto por la insistencia del coordinador.El coordinador expone que es ideal que podamos acompañar procesos en la Casa vivero ubicada en Sol de Oriente (nos desplazamos para conocerla) y en Esfuerzos de Paz 1 en dónde realizan procesos de memoria con jóvenes en situación vulnerable.', 'Se programa reunión para conocer proceso en Esfuerzo de Paz #1', '20140523_101651.jpg', '20140523_101655.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 298, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(234, '2014-05-15', 'Seguimiento', 'Seguimiento', 'Reunión con el docente Felipe para realizar intervención con los niños de primaria. El año anterior se realizaron charlas de internet seguro, en esta ocasión se espera trabajar sobre temas de web 2.0. El docente manifiesta que la sala de colegio en la nube ha tenido una conexión muy inestable y con algunas descargas de energía. Se trata de evaluar esta situación con la sede principal y se hace seguimiento telefónico.', 'N', NULL, NULL, NULL, '', 0, 434, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(235, '2014-05-27', 'Gestión con aliados', 'Reunión Líder Juvenil', 'En esta reunión se conoce el proceso cultural y social que ha acompañado el funcionario del CAV y que esta liderando la comunidad para sacar a los jóvenes de situaciones de vulnerabilidad social.Ellos tienen una casa como espacio de encuentro para realizar actividades culturales, reuniones de la JAL, tienen poca intervención del Estado y poseen una alta participación de la comunidad.En esta reunión se plantea intervenir la comunidad joven con un taller de narrativas para apoyar el proceso de memoria que de alguna forma lleva el CAV ', 'Programar los talleres de Narrativas, planearlo para adaptarlo a el objetivo con la comunidad y realizar una caracterización social y técnica del sitio para conectividad.', 'IMG_20140527_WA0000.jpg', 'IMG_20140527_WA0003.jpg', 'IMG_20140527_WA0006.jpg', 'uploads/meeting/meeting_adjunct', 0, 298, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(236, '2014-05-15', 'Seguimiento', 'Seguimiento', 'Reunión con el coordinador del centro educativo para planear charla de internet seguro. El coordinador se ha mostrado resistente a abrir el aula a la comunidad, se trata de hacer reencuadre sobre este asunto.', 'N', NULL, NULL, NULL, '', 0, 431, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(237, '2014-04-22', 'Seguimiento', 'Programación de actividades', 'La reunión se realiza con el animo de programar charlas de NSN con grupos conformados por líderes de los grupos que se detecten tengan problemáticas de usos de las redes sociales.La coordinadora Aliria aprovecha la visita para solicitar intervención en su sede (Escuela)Se programa para mayo 6, 2 charlas en la sede principaly para may 7 y 13, dos charlas en la sede escuela.En total asistieron 69 personas.', 'Regresar en segundo semestre', '20140506_114822.jpg', 'IMG_20140507_WA0019.jpg', 'IMG_20140507_WA0021.jpg', 'uploads/meeting/meeting_adjunct', 0, 424, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(238, '2014-04-30', 'Empalme', 'Procesos de formación', 'Reunión con la gestora del CEDEZO y coordinador del PIL para dar inicio al curso de herramientas web 2.0 con emprendedores del CEDEZO. en total son 18 personas que están terminando el curso de alfabetización digital con el SENA y quieren continuar con segundo nivel. fecha de inicio 6 de mayo. ', 'Definir fecha de inicio del curso ', NULL, NULL, NULL, '', 0, 191, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(239, '2014-04-29', 'Empalme', 'Definición de horarios procesos de formación', 'Definición de horario para el curso de alfabetización digital; la fundación se encarga de hacer la convocatoria. Pendiente curso en Arasaac en tablets para otros padres.', 'Ninguno', NULL, NULL, NULL, '', 0, 215, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(240, '2014-04-23', 'Seguimiento', 'Programación de actividades', 'La reunión se realiza con el animo de programar charlas de NSN y Gobierno en línea para intervenir en la institución.Tambien se indaga sobre la posibilidad de abrir un aula abierta en la IE. El rector manifiesta que es temeroso por que ya se han robado implementos de la sala de computo.Se programa y se envía por correo del rector. GEL con grupos de 8° y 9° NSN Con 5°, 6° y 7°  todas para el 3 de Julio', 'Regresar en segundo semestre.', 'IMG_2057.JPG', 'IMG_2070.JPG', 'IMG_2071.JPG', 'uploads/meeting/meeting_adjunct', 0, 301, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(241, '2014-01-22', 'Seguimiento', 'Planteamiento de actividades', 'Primer acercamiento del año con los funcionarios para proponer intervención.En esta conversación se manifiesta por parte de Carlos Mario que cualquier proceso de formación con docentes debe hacerse en el vivero del Software imposibilitando la intervención con procesos formativos nuestros.La intervención en este sitio se limitará a la activación y seguimiento del punto de navegación.', 'Hacer seguimiento al punto de navegación.', NULL, NULL, NULL, '', 0, 302, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(242, '2014-04-29', 'Seguimiento', 'Exploración de actividades', 'Se realiza  una visita a la IE para programar actividades. La docente por cuestiones de la dinámica institucional y por cierre de mitad de año no podía atendernos libremente. Se le pidió que se comunicara con nosotros, se le dejó la tarjeta, pero nunca se contactó.Se realizaron otras visitas mas y la docente no se encontraba en las instalaciones.', 'Intervenir en el segundo semestre', NULL, NULL, NULL, '', 0, 303, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(243, '2014-07-03', 'Seguimiento', 'Cierre de procesos', 'Se llevó a cabo una reunión con el coordinador del telecentro para evaluar el proceso desarrollado con el curso de Alfabetización digital y Gobierno en línea, además de esto se compartieron todos los contenidos del programa, con el propósito de que él los revisara para generar nuevas propuestas en el siguiente semestre. Willmar se mostró muy interesado en la dotación del kit de inclusión digital y realizó un recuento de las reuniones que se han desarrollado entre el telecentro y tecnoayudas ,también relata la convocatoria hecha de un grupo de personas en situación de discapacidad de la comuna muy interesadas en tener procesos formativos en el telecentro villa del socorro.', 'Mirar la posibilidad de que uno de los kit de inclusión sea para el telecentro.', NULL, NULL, NULL, '', 0, 198, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(244, '2014-04-30', 'Seguimiento', 'Programación de actividades', 'Reunión de programación de actividades y seguimiento al aula abierta que realizan los sábados por medio de monitores estudiantiles.Se propone al Coordinador Álvaro Villa y profe Nancy conformar un grupo de lideres y monitores de 10 y 11° que reproduzcan la información con un taller de NSN .Se programa para el 22 de Mayo', 'Intervenir en segundo semestre', 'IMG_0560.JPG', 'IMG_0682.JPG', 'IMG_0684.JPG', 'uploads/meeting/meeting_adjunct', 0, 304, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(245, '2014-03-20', 'Empalme', 'Empalme y planeación', 'Reunión de empalme y planeación con el equipo gestor sobre las actividades que se llevarán a cabo en la institución por parte del programa. Se planeó un posible curso y se gestionaron alfabetizadores como acompañantes del proceso de formación.', 'Establecer un espacio (día y hora) para el curso.Realizar la inducción a los alfabetizadores.Planear charlas de Navergar sin Naufragar.', NULL, NULL, NULL, '', 0, 417, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(246, '2014-06-05', 'Gestión con aliados', 'Panorama de intervención', 'Se llevó a acabo al reunión con el rector de la I.E Fe y alegría granizal y con las docentes orientadoras de once y de tecnolgía e informática para generar acuerdos de intervención. El aula Abierta no funciona actualmente por ausencia de personas a cargo de los recursos y espacios de la I.E', 'Se pactó realizar intervención con los chicos y chicas del grado once, específicamente la charla de Gobierno en línea para estudiantes y con algunos niños y niñas representantes de grados como seto y octavo la charla de Navegar sin naufragar. Esto se llevará a cabo una vez se retomen procesos en el mes de Agosto.', NULL, NULL, NULL, '', 0, 253, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(247, '2014-06-11', 'Seguimiento', 'Funcionamiento punto de navegación', 'La reunión tuvo como objetivo concretar algunos acuerdos en relación al punto de navegación, al papel de los chicos del programa jóvenes por la vida y en relación a la formación de funcionarios. Los acuerdos pudieron concretarse y se explicitaron algunas dinámicas respecto al funcionamiento del punto de navegación. Se evidenció la necesidad de que los funcionarios conozcan el portal de ciudad y el de gobierno, información que arrojó la encuesta aplicada por MDE ', '- Capacitación en Outlook para Adriana Ruiz y Auxiliar el 02 de Julio- Capacitación en Gobierno en Línea para funcionarios el o3 de Julio 3 p.m- Escaneo de las planillas o registros de uso  en el punto de navegación dado que no pueden volver a', NULL, NULL, NULL, '', 0, 242, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(248, '2014-06-11', 'Seguimiento', 'Identificación de dificultades', 'Se llevó a cabo una reunión con Willmar osorio para identificar las razones por las cuales  han desertado algunas personas del curso de A.D  y conversar a cerca del proceso. Dentro de las razones expuestas se mencionó la situación de violencia de Aranjuez, dado que dos de las participantes iban desde allí y no pudieron volver; otra de las razones es la comunicación que tienen entre las personas del curso con al practicante y las personas que ven el curso con Willmar y las comparaciones en relación a la celeridad de nuestro curso, en comparación el ofrecido por el telecentro.', 'Se generaron compromisos para la continuidad de los procesos.   1. Compartir con willmar la oferta educativa del programa con el propósito de generar propuestas de intervención en el telecentro.                      2. Llevar  al equipo la propuesta de disminuir la celeridad del curso dado que se trata de un nivel básico y hay contenidos que quedan flojos lo que produce inseguridad e inconformidad entre los usuarios. ', NULL, NULL, NULL, '', 0, 198, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(249, '2014-03-31', 'Seguimiento', 'Reunión exploratoria de actividades', 'Reunión de primer contacto para proponer actividades puntuales en la IE. El coordinador se muestra receptivo frente a las charlas propuestas. Dice que es mejor que vayamos al comité académico un lunes para que expongamos la propuesta.También se contactó a la psicóloga Sor para hacer seguimiento de Aula abierta y ver cómo podemos apoyarlos.', 'Confirmar Agenda para asistir al comité', NULL, NULL, NULL, '', 0, 305, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(250, '2014-05-12', 'Seguimiento', 'Reunión con comité', 'Asiste el agente Juan Camilo Parra a esta reunión con 6 Docentes y directivos para realizarle propuesta de intervención y Aula abierta.Los docentes consideran que se debe realizar intervención en la sede escuela Juan Cancio Restrepo es Cl. 45 Nº 31-63 Tel.  2391959 con 4°aSe programa charla de NSN para el 5 de jun 2014', 'Intervenir en Segundo semestre', '20140605_100138.jpg', '20140605_100202.jpg', '20140605_104648.jpg', 'uploads/meeting/meeting_adjunct', 0, 305, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(251, '2014-03-26', 'Gestión con aliados', 'Planeación', 'Reunión de planeación para iniciar el curso de alfabetización digital para la comunidad y las charlas de Navegar sin Naufragar con los grados 6° y 7°.', 'Realizar la convocatoria para la inscripción al curso.', NULL, NULL, NULL, '', 0, 417, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(252, '2014-01-21', 'Seguimiento', 'Seguimiento del punto de información', 'Se realiza primera visita del año para realizarle seguimiento al punto de navegación. La inspectora manifiesta su inconformidad por que el punto no tiene alguien todo el tiempo que lo esté monitoriando, se queja por que los usuarios son en su mayoría niños y no hay quién los controle, manifiesta que no le gusta ese servicio.', 'Compromiso de enviar un practicante tan pronto estén disponibles para este servicio.', NULL, NULL, NULL, '', 0, 307, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(253, '2014-03-18', 'Seguimiento', 'Seguimiento kit de inclusión', 'Primer seguimiento al kit de inclusión digital con el fin de establecer estrategias de divulgación y apropiación en la comunidad educativa y aledaña al sitio. Se planteó retomar el grupo del 2012 para realizar un proceso de formación más avanzado.', 'Convocatoria del grupo para realizar el curso de alfabetización digital y gobierno en línea.  ', NULL, NULL, NULL, '', 0, 410, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(254, '2014-07-01', 'Seguimiento', 'Procesos de formación ', 'Propuesta de charla de internet seguro para los niños usuarios del Telecentro, pendiente fecha y hora. Colaboración para la caracterización de CORAPAS y del Complejo deportivo', 'Pendiente fecha y hora de la charla', NULL, NULL, NULL, '', 0, 206, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(255, '2014-03-18', 'Gestión con aliados', 'Gestión Estudiantes PP', 'Encuentro con dos estudiantes beneficiarias de presupesto participativo que tienen interés en hacer parte del programa como facilitadoras de procesos de formación y acompañantes de punto de navegación de la comuna 6', 'Acta de compromiso con la correspondiente firma de la JAL.', NULL, NULL, NULL, '', 0, 277, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(256, '2014-07-08', 'Empalme', 'Acompañamiento 2014', 'Reunión con el técnico en cultura digital Juan Guillermo Ramírez y el coordinador para mirar el acompañamiento a realizar este año.Queda pendiente apenas reiniciemos actividades, programar una charla de Navegar sin Naufragar con el grupo que asiste a la capacitación sobre internet, una charla sobre Gobierno en Línea con el grupo de alfabetizadores que acompaña la biblioteca y realizar un taller de narrativas con el grupo de generación de contenidos de la biblioteca que es conformado por estudiantes de la Institución Educativa Jesús Rey.', 'Programar las fechas de las actividades pendientes', NULL, NULL, NULL, '', 0, 268, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(257, '2014-07-03', 'Seguimiento', 'Seguimiento y procesos de formación ', 'Reunión de seguimiento y acompañamiento a los procesos que realiza la IE ademas se programo con el con el coordinador  dos charlas de Internet seguro para estudiantes de 4° y 5°. ', 'Quedo pendiente programar la fecha y la hora de dichas charlas para el segundo semestre. ', NULL, NULL, NULL, '', 0, 361, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(258, '2014-07-08', 'Seguimiento', 'Seguimiento kit de inclusión', 'Acompañamiento al grupo Otras formas de leer y escribir con personas en situación de discapacidad en la sala de informática, en esta sesión el grupo estaba trabajando con algunos dispositivos del kit de inclusión.Beatriz Atehortúa es la persona encargada y el técnico en cultura digital Juan Guillermo Ramírez la apoya en el acompañamiento personalizado a los participantes. Beatriz cuenta que el trabajo se viene desarrollando armónicamente y que recientemente han adquirido dos equipos muy buenos, una maquina para imprimir en braille y un escaner que lee textos en voz alta.', 'Ninguno', NULL, NULL, NULL, '', 0, 268, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(259, '2014-07-03', 'Seguimiento', 'Seguimiento Kit de inclusión', 'Caracterización kit de inclusión digital, se hace un recorrido por la las dos sedes para conocer las condiciones de accesibilidad y las características de las aulas de informática.La docente está muy interesada en tener el kit de inclusión digital para continuar desarrollando su investigación sobre los beneficios probables a las herramientas de software y hardware', 'ninguno', NULL, NULL, NULL, '', 0, 359, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(260, '2014-07-04', 'Seguimiento', 'Seguimiento a los procesos de formación', 'Reunión para solicitar el logo de la biblioteca para las constancias de los participantes del taller de gobierno en línea y programar otros talleres mas para el segundo semestre. ', 'ninguno', NULL, NULL, NULL, '', 0, 192, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(261, '2014-05-07', 'Seguimiento', 'Primer contacto con la institución', 'Previamente se había solicitado esta reunión con los coordinadores del tema de discapacidad.Esta institución entra por KIT por la división que tuvieron de las herramientas desde la sede central y corresponde a Zona 3  la sede fraternidad.Esta institución posee un trabajo juicioso y sistemático respecto a el trabajo con la comunidad educativa en situación de discapacidad. El Kit en el momento de la visita estaba instalado en una sala especializada y destinada únicamente para este propósito, ya tenian un protocolo designado para el uso de estos disositivos.Se sugiere realizar una capacitación con los funcionarios para obtener mejor información del software.', 'Pendiente cuadrar agendas con los funcionarios del ITM', 'IMG_20140507_WA0003.jpg', 'IMG_20140507_WA0008.jpg', 'IMG_20140507_WA0000.jpg', 'uploads/meeting/meeting_adjunct', 0, 308, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(262, '2014-07-03', 'Seguimiento', 'Seguimiento a los procesos de formación', 'Reunión para acordar taller de gobierno en línea para jóvenes de la IE en el segundo semestre del año. ', 'programar las fechas y la hora de dichos talleres ', NULL, NULL, NULL, '', 0, 358, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(263, '2014-04-01', 'Seguimiento', 'Reunión exploratoria de actividades', 'Se realiza reunión para concretar actividades.Primero se habla con la rectora quién esta muy ocupada y me pide que me dirija con el coordinador de la jornada que también está muy ocupado. Se realiza una conversación para que entienda el objetivo de la intervención que ademas viene desde el año pasado por Divertic y se desea continuar el proceso.El coordinador anota todo en su computadora y acordamos una fecha máxima para que nos responda con el cronograma de las actividades.Se esperó el plazo acordado y no tuvimos respuesta. Vía telefónica intente  recuperar el proceso pero fue un intento fallido ya que en la IE tenían una emergencia y no podían atenderme', 'Intervenir en segundo semestre, si no muestran mayor interés descartala de las IE', NULL, NULL, NULL, '', 0, 311, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(264, '2014-07-08', 'Empalme', 'Acompañamiento 2014', 'Reunión con la rectora y la coordinadora académica para programar dos charlas sobre Gobierno en Línea con estudiantes de once grado.', 'Ninguno', NULL, NULL, NULL, '', 0, 414, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(265, '2014-04-28', 'Seguimiento', 'Reunión exploratoria de actividades', 'Esta reunión se realizó para programar actividades en al IE y indagar sobre la posibilidad de realizar un aula abierta este año de la misma forma que el año pasado.La coordinadora accede a abrirnos un espacio en su agenda la cuál confirmamos vía correo electrónico y que cancela diciendo que ese día hay des-escolarización. No se puede realizar la intervención en la IEEn cuanto a el aula abierta dice que está interesada pero se debe hacer una convocatoria amplia en la IE y que debemos hacerla nosotros.', 'Intervenir segundo semestre', NULL, NULL, NULL, '', 0, 448, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(266, '2014-07-08', 'Empalme', 'Programación', 'Reunión con la coordinadora para programar dos charlas sobre Navegar sin Naufragar y una charla sobre Gobierno en Línea con estudiantes de once en la biblioteca de la Institución.', 'Realizar procesos de formación sobre alfabetización digital.', NULL, NULL, NULL, '', 0, 226, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `meetings` (`id_meeting`, `meeting_date`, `meeting_type`, `meeting_title`, `meeting_description`, `meeting_commitments`, `meeting_adjunct`, `meeting_adjunct1`, `meeting_adjunct2`, `dir`, `meeting_type_id`, `site_id`, `user_id`, `creation_date`, `modification_date`) VALUES
(267, '2014-07-08', 'Seguimiento', 'Evaluación acompañamiento primer semestre', 'Reunión con la gestora empresarial Diana Londoño para evaluar el acompañamiento realizado durante este primer semestre.La gestora expone que los temas abordados son pertinentes y que los emprendedores han manifestado satisfacción sobre estos, sobre la facilitadora, manifiesta que fue puntual, comprometida y atenta al proceso individual de los participantes ya que constantemente realizaba asesorías personalizadas.Sugiere que los cursos y talleres se realicen dos veces por semana para que terminen más rápido y se puedan realizar varios en el semestre.', 'Realizar preinscripción a las personas interesadas.', NULL, NULL, NULL, '', 0, 167, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(268, '2014-06-17', 'Gestión con aliados', 'Apertura de cursos con Víctimas', ' Debido a  una solicitud del cav se proyectaba intervenir un grupo de victimas con Alfabetización Digital; sin embargo,  de las personas convocadas sólo llegaron 4 por tanto se pensará en este tipo de intervención para el mes de Agosto. Se planeó la jornada de trámites y se expresó la viabilidad del punto de navegación.  ', 'Una vez se reinicien los procesos, el cav se compromete a convocar  personas de la comuna que estén interesadas en desarrollar procesos de Alfabetización digital u otro tipo de propuestas acordes a la oferta del programa.', NULL, NULL, NULL, '', 0, 247, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(269, '2014-07-08', 'Seguimiento', 'Seguimiento', 'Visita de seguimiento con la funcionaria del sitio. se recogieron las planillas del mes de julio y se pego la información sobre el mantenimiento de los equipos. quedo pendiente iniciar inscripciones para cursos de alfabetización digital  en el segundo semestre.  ', 'ninguno', NULL, NULL, NULL, '', 0, 362, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(270, '2014-07-10', 'Seguimiento', 'Seguimiento Kit de inclusión', 'Se realizó visita se seguimiento a las actividades que realiza el parque Biblioteca y el uso que se le esta dando al KIT de inclusión. ademas se hablo sobre los cursos de alfabetización digital que están finalizando con personas de la unidad integral y el préstamo del espacio para el segundo semestre. ', 'ninguno', NULL, NULL, NULL, '', 0, 193, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(271, '2014-07-11', 'Seguimiento', 'Seguimiento a los procesos de formación', 'Reunión con el Rector  se habla de los procesos de formación que está implementando el programa, además sobre kit de inclusión digital ', 'ninguno', NULL, NULL, NULL, '', 0, 340, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(272, '2014-07-11', 'Seguimiento', 'Seguimiento Kit de inclusión', 'Reunión para conversar sobre el uso del kit de inclusión y las actividades que vienen desarrollando con las personas en situación de discapacidad.Se robaron una bola de un mouse del kit de inclusión digital ', 'averiguar si es posible reponer la bola del mouse', NULL, NULL, NULL, '', 0, 196, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(273, '2014-05-20', 'Gestión con aliados', 'Gestion', 'Reunion con Hammer para hacer seguimiento al proceso de aula abierta y a la sala de MD. Manifiesta que tiene dos grupos con los que ha trabajado desde febrero del presente año en temas de Informatica básica y avanzada.', 'N', NULL, NULL, NULL, '', 0, 313, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(274, '2014-07-08', 'Seguimiento', 'Procesos de formación ', 'Reunión con la coordinadora del la IE para conversar acerca de Aula abierta, los procesos de formación que estan dictando desde la IE y los posibles procesos que se realizaran el próximo semestre.', 'ninguno', NULL, NULL, NULL, '', 0, 290, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(275, '2014-05-21', 'Seguimiento', 'Seguimiento', 'Reunion con el docente para hacer seguimiento al programa y para programar actividades con las estudiantes.', 'N', NULL, NULL, NULL, '', 0, 299, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(276, '2014-05-21', 'Seguimiento', 'Seguimiento', 'Reunion de seguimiento del proceso de aula abierta en la IE. Se define la forma de trabajo con los estudiantes.', 'N', NULL, NULL, NULL, '', 0, 310, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(277, '2014-05-29', 'Seguimiento', 'Programar charlas de NSN', 'Se realizo una reunión con la profesora Lyda Morales para evaluar el tema de aula abierta, así mismo se agendo una charla de internet seguro para los grados cuartos con las profesora', 'Confirmación de charlas de NSN', NULL, NULL, NULL, '', 0, 132, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(278, '2014-07-15', 'Seguimiento', 'Seguimiento', 'Entrega de constancias de participación en el taller de Gobierno en Linea. Se reciben los dispositivos del kit de inclusión prestados por el programa (se encuentran en buen estado)', 'Prestarles nuevamente los dispositivos. Envio de fotos de la entrega de constancias', NULL, NULL, NULL, '', 0, 192, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(279, '2014-03-19', 'Seguimiento', 'Seguimiento kit de inclusión', 'Reunión para el seguimiento del uso y apropiación del kit por parte de la comunidad universitaria. Se evidenció que los estudiantes, trabajadores, docentes y personal administrativo tienen conocimiento de la existencia de estos dispositivos ya que se encuentra instalado a la entrada de la biblioteca, aún así, sólo un docente en situación de discapacidad física es el único que lo ha utilizado. ', 'Gestionar estudiantes beneficiarios de PP para dinamizar el uso del kit', '20140319_142117.jpg', '20140319_145936.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 411, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(280, '2014-07-08', 'Seguimiento', 'Seguimiento y capacitación kit de inclusión', 'Sensibilización sobre el kit de inclusión digital a la docente Patricia Zapata, que es la nueva persona encargada de este. Se reconocieron cada uno de los dispositivos, conectándolos y probando cada uno para conocer mejor su funcionamiento.La docente manifestaba a lo largo de la sensibilización que este kit se podría aprovechar mejor con estudiantes de primaria, por lo tanto queda pendiente presentarle esta sugerencia al rector para hacer el traslado a la otra sede.El kit no tenía en su interior el software de Tecnoayudas, solamente se encontraba hablando con July. Por esta razón queda pendiente indagar con la docente anterior sobre su ubicación.La docente manifiesta interés en trabajar y aprovechar el kit de inclusión y luego del traslado se comprometió a solicitar a Mesa de Ayuda la instalación del software en los portátiles disponibles ya que la sala de informática tiene colegio en la nube.', 'Trasladar kit de inclusión a la sede de primaria.Solicitud a Mesa de ayuda de instalación del software de tecnoayudas.', 'Seguimiento_y_capacitacion_kit_de_inclusion_4', 'Seguimiento_y_capacitacion_kit_de_inclusion_7', 'Seguimiento_y_capacitacion_kit_de_inclusion_9', 'uploads/meeting/meeting_adjunct', 0, 281, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(281, '2014-03-19', 'Seguimiento', 'Seguimiento kit de inclusión', 'Seguimiento al uso y apropiación del kit por parte de la comunidad universitaria. Hasta el momento es usado para el servicio de consulta libre para estudiantes con discapacidad. La mayoría de los dispositivos estan en la sede de Boston.', 'Sistematización del uso del kit.Planeación de actividades concretas para personas en situación de discapacidad.', '20140319_155814.jpg', '20140319_160238.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 412, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(282, '2014-07-09', 'Seguimiento', 'Cierre procesos primer semestre', 'Reunión con la coordinadora para exponerle que se pueden continuar procesos a partir de agosto, ella expresa que la comunidad está muy pendiente de poder seguir en estos procesos.', 'Iniciar nuevos talleres con la comunidad', NULL, NULL, NULL, '', 0, 402, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(283, '2014-03-20', 'Seguimiento', 'Seguimiento kit de inclusión', 'Reunión de seguimiento al uso y apropiación del kit de inclusión por parte de la comunidad educativa y aledaña al sitio. Se encontró que en ocasiones usan el software con primaria y sexto para actividades lúdicas en diferentes materias. Solicitan una jornada de capacitación con Tecnoayudas para los docentes. Requieren instalación de software Jaws, Mekanta y Songr, porque son los programas que requieren las personas de Corpani.', 'Ninguna.', NULL, NULL, NULL, '', 0, 275, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(284, '2014-03-20', 'Seguimiento', 'Seguimiento kit de inclusión', 'Reunión de seguimiento al uso y apropiación del kit de inclusión. Esta biblioteca se ha destacado por sus propuestas de inclusión y tiene muy buena experiencia en el manejo del kit, principalmente con el programa otras formas de leer y escribir"", el cual lo enfocan en el manejo de las TIC, en este espacio las personas con discapacidad aprenden a manejar hardware y software a partir de herramientas básicas, informática básica y juegos accesibles. Aún así, los invidentes requieren la instalación del Jaws, porque no se sienten cómodos con el programa del kit."', 'Sistematizar su experiencia con el uso del kit.', NULL, NULL, NULL, '', 0, 268, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(285, '2014-03-20', 'Seguimiento', 'Seguimiento kit de inclusión', 'Reunión con el docente encargado del kit para conocer los usos y apropiación de éste por parte de la comunidad educativa y aledaña. El docente se encuentra elaborando un programa de experiencias integradoras con niños y padres de familia usando algunas programas del software.', 'Una vez lista la propuesta, articular acciones con el programa para llevarla a cabo.', NULL, NULL, NULL, '', 0, 413, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(286, '2014-07-10', 'Seguimiento', 'Seguimiento kit de inclusión', 'Acompañamiento a la clase con la docente del aula de apoyo y un grupo de cinco estudiantes de primaria. La herramienta que más usan del kit es el software, para ello tienen dos portátiles en los que trabajan estudiantes de prescolar, primero y segundo grado, los programas que más usan son los juegos y los cuentos. La única dificultad que han tenido es que los portátiles tienen poco volumen y las estudiantes casi no escuchan, este problema se está solucionando con unos parlantes que los directivos asignaron con este fin.El trabajo con el kit se viene realizando durante una hora, tres días a la semana y las estudiantes que lo usan en su mayoría tienen discapacidades  cognitivas: síndrome down, mutismo selectivo, problemas de lenguaje y TDAH (trastorno por deficit de atención con hiperactividad), discapacidad auditiva (implante coclear).En general se ve un buen uso del kit, las estudiantes se ven apropiadas de los juegos, saben como manejarlos correctamente y se nota que los difrutan la docente hace un buen acompañamiento al guiar la selección de los juegos, resolver dudas, aprovechar los componentes de los juegos y cuentos para preguntarles conceptos y hacer relaciones.', 'Queda pendiente que la docente aproveche más el uso de los dispositivos, sobre todo los teclados y los mouse.', 'seguimiento_kit_1.JPG', 'seguimiento_kit_2.JPG', 'seguimiento_kit_3.JPG', 'uploads/meeting/meeting_adjunct', 0, 225, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(287, '2014-07-10', 'Seguimiento', 'Cierre de procesos primer semestre', 'Reunión con el rector para tener continuidad con los procesos de formación con la comunidad en general y la facilitadora de PP Vanessa Taborda a partir de agosto.', 'Ninguno', NULL, NULL, NULL, '', 0, 225, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(288, '2014-03-21', 'Seguimiento', 'Seguimiento kit de inclusión', 'Reunión con la coordinadora del sitio para conocer el uso del kit por parte de la comunidad educativa. Se evidenció un muy buen manejo y proceso de apropiación de estas herramientas por parte de los docentes y estudiantes, siendo un sitio modelo"" a la hora de utilizarlas. Están en una fase de caracterización de saberes previos de los estudiantes utilizando los implementos del kit. El grupo de la docente del taller de hábitos de trabajo es el que mas uso tiene del kit. Utilizan mucho los pulsadores, el soporte, los mouse trackball, software de imágenes y pictogramas, los programas de NEE,  juegos de aprendizaje y el software de reconocimiento facial."', 'Sistematizar sus experiencias para dar a conocer el uso óptimo del kit a diferentes instituciones.', '20140321_101136.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 444, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(289, '2014-07-10', 'Empalme', 'Actividades de 2014', 'Reunión con el rector y con la bibliotecaria para mirar el acompañamiento a realizar durante el presente año.', 'En la primera parte del semestre se realizaran dos charlas sobre gobierno en línea con estudiantes de once grado y durante el segundo semestre se realizará un taller sobre narrativas con un docente y un grupo de la institución educativa que trabaja sobre temas audiovisuales.', NULL, NULL, NULL, '', 0, 229, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(290, '2014-05-21', 'Seguimiento', 'Seguimiento', 'Reunion para definir algunas actividades con las estudiantes durante el segundo semestre.', 'N', NULL, NULL, NULL, '', 0, 309, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(291, '2014-05-21', 'Seguimiento', 'Seguimiento', 'Seguimiento al aula abierta de la IE, asiste Juan Camilo Perez para hablar con la docente sobre las posibles actividades a realizar en el segundo semestre del año.', 'N', NULL, NULL, NULL, '', 0, 325, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(292, '2014-05-28', 'Seguimiento', 'Seguimiento', 'La sala ha venido presentando varios inconvenientes este año, se hace seguimiento telefónico a través de Sami, dicen que hay una interrupción del servicio por las constantes tormentas de la zona. Se le explica esta version al docente confirmando que lo van a solucionar lo mas rápido posible.', 'N', NULL, NULL, NULL, '', 0, 434, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(293, '2014-03-21', 'Seguimiento', 'Seguimiento kit de inclusión', 'Reunión de seguimiento al kit de inclusión de la biblioteca para conocer su nivel de uso y apropiación por parte de la comunidad. Se evidención que el kit se presta bajo supervisión. Los teclados y mouse son los mas usados. Personas de baja visión utilizan la lupa y el software narrador. A veces utilizan los equipos para entretenimiento y asuntos de trabajo. El teclado multicolor fue utilizado con niños para lecto-escritura. Requieren otra capacitación sobre el software y el trato con las personas en situación de discapacidad con Tecnoayudas. ', 'Gestionar una nueva capacitación con Tecnoayudas.', NULL, NULL, NULL, '', 0, 453, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(294, '2014-07-15', 'Empalme', 'Presentación de la agente dinamizadora y gesti', 'En esta reunión se presenta la agente dinamizadora, se recolectan los datos del nuevo rector que asume el cargo en esta institución educativa, se gestiona el espacio para dictar una charla planeada con la antigua rectora. ', 'Para el segundo semestre se realizarán charlas con los grados décimo y once de la institución educativa. ', 'IE_Luis_Lopez_de_Mesa_Empalme_Comuna_7_Julio.', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 418, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(295, '2014-05-28', 'Seguimiento', 'Seguimiento', 'Reunion con Rosa Lopez para hacer seguimiento al kit de inclusion.', 'N', NULL, NULL, NULL, '', 0, 290, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(296, '2014-03-27', 'Empalme', 'Empalme ', 'Reunión para comenzar a planificar los procesos de articulación entre la institución y el programa, teniendo en cuenta que Nuevo Occidente es un sector para priorizar. Hay buena disposición de trabajo, pero muy pocos espacios disponibles en la sala de sistemas, lo que dificultaría el desarrollo de procesos de formación.', 'Hacer una convocatoria pública para un curso de alfabetización digital.', NULL, NULL, NULL, '', 0, 405, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(297, '2014-05-28', 'Seguimiento', 'Programar charlas de NSN', 'Se visito el centro educativo y se reprogramó la charla de navegar sin naufragar para la semana siguiente.', 'Programar taller de manejo del tablero digital', NULL, NULL, NULL, '', 0, 139, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(298, '2014-06-03', 'Seguimiento', 'Seguimiento', 'Reunión con la docente para acordar taller Conéctate con ellos, la docente se muestra receptiva e informa que en el centro educativo están haciendo aula abierta con el Pascual Bravo los sábados, se analiza la posibilidad de que apoyemos esta actividad durante estos dos meses.', 'Ninguno', NULL, NULL, NULL, '', 0, 432, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(299, '2014-05-27', 'Seguimiento', 'Programar taller de GEL jóvenes', 'Reunión con la rectora y la profe enlace de la institución para presentarle la propuesta de acompañamiento. Se acuerda el taller de gobierno en línea para jóvenes, estudiantes de 10° y 11°', 'Envío de oferta de intervención y propuesta de fechas de los talleres de gobierno en línea para estudiantes', NULL, NULL, NULL, '', 0, 330, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(301, '2014-05-28', 'Seguimiento', 'Seguimiento aula abierta', 'Reunión para presentar la propuesta de acompañamiento por parte del programa. Se ofrece el taller de GL para jóvenes de 10° y 11°. Solicitan una charla de tablero digital y manejo de tablet para docentes; se acuerda que solo para 5 docentes.Continúan con el aula abierta, el viernes 30 de mayo se gradúan 10 padres de familia', 'Se le envían opalinas para la impresión de los certificados.', NULL, NULL, NULL, '', 0, 340, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(302, '2014-05-28', 'Seguimiento', 'Seguimiento kit de inclusión', 'Seguimiento al kit de inclusión digital. Tienen un equipo con los dispotivos conectados, no lo ponen en la aula de informática, por el tipo de población que acude allí (porque son inquietos).Actividad con personas en situación de discapacidad dos veces a la semana miércoles de 10: 00 a 12:00 y jueves de 2:00 a 4:00 pm (alfabetización digital)', 'Continuar con el acompañamiento', NULL, NULL, NULL, '', 0, 196, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(303, '2014-05-27', 'Seguimiento', 'Seguimiento aula abierta', 'Se realizo una reunión con el coordinador para hablar del aula abierta, quien se noto muy interesado en volver a desarrollar aula abierta, sin embargo dice que se debe buscar un estudiante de pp que colabore con este proceso, por otro lado se pretende agendar charlas Navegar sin Naufragar para los grados cuartos y quintos.', 'Se tiene agendada otra reunión para hacer el cronograma de actividades.', NULL, NULL, NULL, '', 0, 357, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(304, '2014-05-22', 'Seguimiento', 'Solución de situación puntual', 'Con el apoyo de la Practicante Lesly pudimos solucionar una problemática con unas chicas que no obedece a los funcionarios del sitio y bebían líquidos sobre los PC, de hecho una de las chicas de la rabia tiró un café que afortunadamente no cayó sobre el PC.La practicante queda con la directriz de realizar un trabajo educativo con la cantidad de niños que asisten insistiendo en la apropiación de la información que apoye a punto y que los niños en dado momento pueden ayudar a otros usuarios.', 'Hacer seguimiento a las chicas del inconveniente', NULL, NULL, NULL, '', 0, 438, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(305, '2014-05-29', 'Seguimiento', 'Seguimiento aula abierta', 'se realizo una reunión con el docente encargado para hablar acerca de aula abierta.', 'Continuar con el acompañamiento', 'Seguimiento.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 134, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(306, '2014-05-29', 'Seguimiento', 'Programar charlas de NSN', 'Reunión para agendar charlas para los niños.', 'Confirmación de fechas', NULL, NULL, NULL, '', 0, 195, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(307, '2014-05-29', 'Seguimiento', 'Seguimiento kit de inclusión', 'Se realizó seguimiento al kit de inclusión.', 'Programar sensibilización kit de inclusión digital', NULL, NULL, NULL, '', 0, 140, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(308, '2014-05-29', 'Empalme', 'Presentación de la agente dinamizadora y gesti', 'El Agente Dinamizador Alejandro Marín presenta a la nueva Agente Mónica Castañeda, se realizan preguntas sobre los procesos de formación que se han llevado a cabo durante el año, ella comenta que el Aula Abierta ha estado suspendida y que no se han realizado más capacitaciones en la sala de Medellín Digital, Socorro Vergara la rectora informa que entregará el cargo puesto que se va a jubilar y deja encargada a la coordinadora de llevar a cabo los procesos.', 'Se planean talleres de gobierno en línea con los grados décimo y once de la institución educativa para el mes de julio.Se recomienda llamar a la coordinadora para concertar los espacios y separar las horas de trabajo puesto que para estas fechas asumirá su cargo el nuevo Rector.', NULL, NULL, NULL, '', 0, 418, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(309, '2014-05-29', 'Seguimiento', 'Programar charlas de NSN', 'Reunión para agendar charlas para los niños.', 'Confirmación de la charla', NULL, NULL, NULL, '', 0, 210, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(310, '2014-06-03', 'Seguimiento', 'Seguimiento Kit', 'Reunión con la docente para acordar charla de internet seguro con los chicos. También se hace seguimiento al kit de inclusión digital. El segundo kit está casi listo y adecuado para la comunidad y será abierto al uso en las mañanas.', 'N', NULL, NULL, NULL, '', 0, 425, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(311, '2014-04-22', 'Seguimiento', 'Reunión exploratoria de actividades', 'Esta IE ha sido muy poco receptiva frente a nuestro trabajo este año se realizará el último esfuerzo para trabajar allí.Se realiza la visita para programar actividades y el coordinador no se ocupa de nosotros la rectora no se encontraba, decidimos buscar a la docente Ángela Londoño quién ha demostrado tener mayor disponibilidad de trabajo. Nos informan que ella ahora trabaja en una de las sedes. Nos dirigimos allí para conversar con ella, está incapacitada, intentamos por mail y celular y nunca fue posible la comunicación con ella.', 'Intervenir en el segundo semestre', NULL, NULL, NULL, '', 0, 315, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(312, '2014-06-03', 'Seguimiento', 'Seguimiento', 'El coordinador informa que la convocatoria para iniciar el curso, aún no es suficiente que se debe extender una semana más. Se realiza la gestión del espacio en la biblioteca. ', 'N', NULL, NULL, NULL, '', 0, 173, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(313, '2014-05-27', 'Seguimiento', 'Reunión exploratoria de actividades', 'En esta reunión se socializa con el profesor recién encargado del proyecto de informática los objetivos que persigue el programa y cómo podemos apoyarlos en la IE.Temas:Aula abierta. El docente está dispuesto a realizar un espacio con los padres de familia de la comunidad educativa, consultando previamente con la rectora quien recalca que el docente debe saber que es a mérito propio y no es remunerable.Programamos una charla con jóvenes lideres y que reproducirán la información en la IE sobre Gobierno en línea para el 9 de Julio de 10.30 a 12 m', 'Concretar el Aula Abierta.', NULL, NULL, NULL, '', 0, 316, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(314, '2014-02-20', 'Empalme', 'Contacto inicial para actividades', 'Este sitio ingresa este año cómo uno de los sitios nuevos conectados en la ciudad. En este parque se instalará punto de navegación con 4 equipos y cómo sitio público en la plazoleta beneficiando a la instituciones cercanas y a la comunidad de esta zona de la ciudad.Se realiza la primera reunión en diciembre del año pasado y se continúa este año para realizar actividades que promuevan y divulguen los beneficios de este servicio que tendrá el parque.Se abordó el tema de realizar un trabajo de promoción previo a la instalación del servicio entre ellos socializar la propuesta con los líderes zonales.', 'Se programa reunión con líderes para el 24 de febrero', 'IMG_201411220_WA0000.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 318, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(315, '2014-02-24', 'Gestión con aliados', 'Reunión con lideres', 'La reunión se realiza con los líderes de la comunidad impactada por el proyecto a quienes se socializa la propuesta del punto de navegación y del wifi libre con que contarán próximamente.Esta reunión es acompañada por Biviana Arango quién de forma detallada les explica a los asistentes el rango de operación técnica del servicio y las ventajas que tienen con esta conexión.Se les comenta las posibles rutas de intervención que podemos tener tales cómo cursos de alfabetización digital, charlas de manejo de celulares entre otros.Se les pide el especial favor del registro de uso de los equipos, de ayudarnos con el cuidado de los equipos y que la comunidad le de el mayor beneficio.', 'Mantenerlos al tanto a través de la comunicadora de la llegada de los equipos. ', NULL, NULL, NULL, '', 0, 318, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(316, '2014-03-21', 'Gestión con aliados', 'Gestion con aliadas', 'Reunión con el comité de sostenibilidad de la cámara de comercio de Arvi con empresarios de santa Elena, para presentar el programa a los comerciantes de la zona.', 'Nueva reunión con los practicantes.', NULL, NULL, NULL, '', 0, 317, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(317, '2014-02-26', 'Seguimiento', 'Informe PC con internet', 'Se informa a los funcionarios y a la comunidad que el servicio de punto de navegación y wifi libre esta habilitado para el disfrute ciudadano.Se hace acompañamiento en la prueba de la velocidad y de la usabilidad técnica de la herramienta.', 'Continuar con las pruebas para verificar que funcione bien', NULL, NULL, NULL, '', 0, 318, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(318, '2014-04-08', 'Empalme', 'Presentación y empalme ', 'Presentación de la nueva agente dinamizadora y empalme de los procesos que se vienen realizando en la institución educativa, se desarrolla la presentación del programa a los asistentes del curso por parte de la agente dinamizadora Rosa Pérez, además de la preinscripción de los asistentes a este. ', 'Acompañar el aula abierta una mes al mes.Enviar la totalidad de los contenidos del curso.Enviar las fotos tomadas ese día.', 'IE_Fe_y_Alegria_Villa_de_la_Candelaria_Alfabe', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 409, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(319, '2014-04-29', 'Seguimiento', 'Reunión de seguimiento y planificación de ac', 'Se visita la sede para verificar el uso de los equipos y verificar un AP que está por fuera de unas láminas y corre el peligro de ser hurtado, se solicita por medio escrito y presencial hacer la gestión para poner el AP encima de las láminas.Por otro lado, este mes se ha acompañado el sitio con la presencia de la practicante Lesly Amparo ayudando a los usuarios con creación de correos electrónicos y trámites en línea.', 'Seguimiento a la gestión de la ubicación del AP', NULL, NULL, NULL, '', 0, 318, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(320, '2014-07-10', 'Seguimiento', 'Planeación Charla GEL en la institución', 'Se programó una charla con los grados 11° sobre Gobierno en Línea, donde se tocarían temas como ofertas de estudio y empleo, páginas de universidades y demás opciones para cuando los y las estudiantes terminen el colegio se orienten de mejor manera.', 'La charla se realizará el lunes 14 de julio a las 7 am.', NULL, NULL, NULL, '', 0, 265, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(321, '2014-07-04', 'Seguimiento', 'Planteamiento de actividades', 'En esta reunión se tocó varios temas:1. Percepción del servicio y comentarios de los usuarios. La funcionaria manifiesta que le han notificado que aveces el servicio deja de funcionar, se le aconseja que identifique las horas y en que equipos se conecta el usuario que no le sirve la señal.2. Palneación de aula abierta. Como tal no tienen lugar para realizarla, se le pide que gestione una en la facultad de medicina o en una entidad aliada para trabajar con la población adulto mayor que atienden.3 identificar unos chicos para darles una charla de NSN.4. Capacitación de los estudiantes de Jóvenes por la vida para que trabajen trámites en línea en el punto.', 'Estar pendientes de esta gestión', NULL, NULL, NULL, '', 0, 318, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(322, '2014-07-11', 'Seguimiento', 'Cierre de procesos primer semestre', 'Reunión con el equipo de coordinación de la Unidad Permanente de Justicia para mirar cuando se podría terminar el taller de herramientas web 2.0 que se estaba realizando, las dos sesiones que faltan se darán en agosto.En esta también se mencionó que los equipos y muebles fueron retirados para ser repotenciados y para actualizar la imagen corporativa del programa.Otro asunto a tratar fue la capacitación a otros funcionarios de la UPJ, se llegó al acuerdo que esta sería apartir del mes de agosto que es cuando reiniciamos procesos.', 'Terminar el taller de herramientas web 2.0 con el equipo de coordinación.Continuar con el acompañamiento al punto de navegación.Realizar procesos de formación en TIC con otros funcionarios de la UPJ.', NULL, NULL, NULL, '', 0, 288, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(323, '2014-01-28', 'Gestión con aliados', 'Reunión de planeación de actividades', 'Se realizó una reunión con la coordinadora de la Casa de la Cultura para mirar de qué manera el programa y la Casa de la Cultura iban a continuar este año. ', 'Quedó la tarea de programar una nueva reunión cuando se sepan las propuestas de formación del programa.', NULL, NULL, NULL, '', 0, 244, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(324, '2014-01-30', 'Seguimiento', 'Seguimiento Kit de Inclusión', 'Se realizó una reunión para planear las actividades que se realizaran en la IE involucrando el Kit de inclusión. Se llegó a la conclusión de que la prioridad es que los docentes se familiaricen con el Kit.', 'Se diseñarán por parte de la Institución unos carteles que contengan información sobre el Kit. Estos carteles serán expuestos para que las personas conozcan del Kit.', NULL, NULL, NULL, '', 0, 160, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(325, '2014-01-23', 'Seguimiento', 'Reunión de planeación de actividades', 'Se realizó una reunión para planear las actividades que se realizarían en conjunto desde la biblioteca y El Programa.', 'Se queda pendiente realizar una convocatoria para realizar un taller de GEL', NULL, NULL, NULL, '', 0, 179, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(326, '2014-01-30', 'Gestión con aliados', 'Gestión con aliados', 'A esta reunión llegaron los tres agentes de la zona con el fin de gestionar la base de datos de los estudiantes de Presupuesto Participativo y Fondo EPM, los cuales harán su labor social en los sitios que acompaña el programa. Se presenta al líder comunitario el programa y los procesos que se vienen gestando en la zona 2', 'El líder comunitario deberá contactar los estudiantes beneficiarios de la base de datos que este tiene y entregar esta información.Deberá enviar al correo electronico los datos de los interesados y las actas de compromiso que estos deben asumir para con los sitios en los que cumplirán la labor social.', NULL, NULL, NULL, '', 0, 279, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(327, '2014-02-03', 'Empalme', 'Presentación del Programa y de los funcionarios', 'Se realizó una reunión de presentación donde se dio a conocer el programa a el inspector y a el secretario de la Inspección.', 'Se quedó con el compromiso de realizar una reunión con todos y todas las funcionarias de la Inspección para que conozcan el programa Medellín Ciudad Inteligente y puedan entenderse de mejor manera con el uso del punto de navegación.', NULL, NULL, NULL, '', 0, 255, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(328, '2014-01-21', 'Seguimiento', 'Reunión de planeación de actividades', 'Se realizó una reunión con la coordinadora de servicios al público, para mirar que actividades podemos realizar en la biblioteca con el Programa.', 'Se decidió realizar una convocatoria para realizar un taller de GEL, apenas estén listos los contenidos del taller.', NULL, NULL, NULL, '', 0, 240, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(329, '2014-07-02', 'Gestión con aliados', 'Gestion', 'Cierre del proceso realizado el presente año en la IE con el rector. Se evalúan logros y dificultades para continuar la intervención en futuros contratos.', 'N', NULL, NULL, NULL, '', 0, 290, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(330, '2014-07-30', 'Seguimiento', 'Planeación', 'El objetivo de la reunión fue el de mirar los objetivos y compromisos desde los dos actores inmersos en el proceso, puesto que desde el Parque Biblioteca se planteó realizar cursos de alfabetización digital, la discusión gira entorno a la participación del programa en los procesos de formación para el sitio. Una de las conclusiones a las que se llega es, el Parque Biblioteca asumirá el proceso de Alfabetización en su parte inicial y el programa dictará el segundo nivel. ', 'Entregar contenidos de los procesos de formación, en especial Alfabetización Digital.Generar los espacios de capacitación a la comunidad. ', NULL, NULL, NULL, '', 0, 183, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(331, '2014-02-27', 'Seguimiento', 'Reunión de planeación de actividades', 'Se realizó una reunión de planeación de actividades en conjunto con la Biblioteca, entre esas actividades está la realización de un taller de Fotografía.', 'Se quedó con el compromiso de pasarle la propuesta de taller a la Biblioteca para de allí decidir cómo realizar la convocatoria.', NULL, NULL, NULL, '', 0, 180, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(332, '2014-02-12', 'Seguimiento', 'Reunión de planeación de actividades', 'Se realizó una reunión de seguimiento del Kit y  con base a la reunión del mes anterior se realizó una actividad de divulgación del Kit dentro de la Institución.', 'Las docentes encargadas del Kit dentro de la IE se comprometen a brindar mayor acompañamiento a los demás docentes que están intentando a el uso del Kit.', NULL, NULL, NULL, '', 0, 160, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(333, '2014-01-30', 'Seguimiento', 'Planeación', 'Planeación de las actividades que se llevaran a cabo durante el año, los participantes de la reunión por parte de la Biblioteca desean realizar talleres de Navegar sin Naufragar para padres de familia y algunos procesos de formación.', 'Entregar por parte del programa los contenidos adaptados del taller navegar sin naufragar para padres en los próximos días. Los funcionarios de la Biblioteca realizarán la convocatoria y ejecutaran el taller con los contenidos entregados por el programa. ', NULL, NULL, NULL, '', 0, 184, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(334, '2014-02-12', 'Empalme', 'Reunión de Empalme', 'Se realizó una reunión de empalme con la agente que acompañará el CEDEZO, también de pretende realizar una convocatoria con los empresarios vinculados al CEDEZO para que asistan a los cursos del Programa.', 'La agente que acompaña el CEDEZO se compromete a enviar los contenidos y las fechas para realizar las convocatorias para los cursos.', NULL, NULL, NULL, '', 0, 166, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(335, '2014-07-02', 'Seguimiento', 'Seguimiento', 'Se acuerda con la docente hacer cierre del proceso con los padres y madres de los niños. ', 'N', NULL, NULL, NULL, '', 0, 447, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(336, '2014-01-31', 'Empalme', 'Empalme', 'Se retoman las actividades y se evalúan las actividades realizadas el año anterior, también se plantean algunas acciones que tendrán lugar en el primer semestre del año, se propone a partir de esto abrir un aula abierta para la comunidad, por esto se inician la programación para esto.', 'Iniciar el proceso de convocatoria para el aula abierta.La docente deberá gestionar el espacio de tiempo y físico para llevar a cabo el proceso de formación. ', NULL, NULL, NULL, '', 0, 409, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(337, '2014-02-05', 'Seguimiento', 'Reunión de planeación de actividades', 'Se realizó una reunión con el docente Libardo Múnera y el Rector John Garavito con el motivo de mirar de que forma se iba a continuar el trabajo este año. El rector presentó una serie de negativas frente al trabajo con el programa. Al finalizar la reunión se quedó con el compromiso de que la IE iba a realizar una búsqueda de un estudiante que acompañara al docente Libardo en los cursos hacia la comunidad.', 'Realizar una búsqueda de un estudiante practicante que acompañe los procesos hacia la comunidad.', NULL, NULL, NULL, '', 0, 256, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(338, '2014-07-11', 'Seguimiento', 'Cierre de procesos primer semestre', 'Reunión con la persona de contacto en la Unidad Municipal de Atención y Reparación a Víctimas, para mirar las sensibilizaciones realizadas mensualmente en los CAV y la preinscripción de las personas interesadas en los procesos de formación e TIC.Alcira comenta que los coordinadores de los CAV han manifestado que estas se han desarrollado con normalidad y éxito y que las personas están pendientes de los cursos y talleres.', 'Realizar una reunión de empalme para comenzar procesos de formación con las personas preinscritas.', NULL, NULL, NULL, '', 0, 288, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(339, '2014-03-28', 'Gestión con aliados', 'Gestión de procesos', 'Reunión para gestionar el espacio de formación para la comunidad en la institución. Se acordó realizar un curso de alfabetización digital enfatizando principalmente en Internet, correo y trámites en línea para adultos mayores. Se tendrá el acompañamiento de algunas estudiantes alfabetizadoras durante el proceso.', 'Realizar la convocatoria a la comunidad.Realizar la capacitación a las estudiantes alfabetizadoras que acompañarán el curso.', NULL, NULL, NULL, '', 0, 410, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(340, '2014-02-04', 'Seguimiento', 'Reunión de planeación de actividades', 'Se realizó una reunión con la docente Marcela Zapata para planear las actividades que se realizarían este año. La docente era quien coordinaba el proceso de Aula Abierta en la IE, pero hace unos meses dejó de hacerlo debido a que adquirió otras responsabilidades y la IE le descargó todas las responsabilidades de  ese proceso en ella, por lo que la docente decidió no continuar con el proceso.', 'Se menciona la posibilidad de que varios egresados de la IE retomen el Aula Abierta, la docente queda con la labor de gestionar las posibilidades.', NULL, NULL, NULL, '', 0, 239, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(341, '2014-07-11', 'Seguimiento', 'Cierre de procesos primer semestre', 'Reunión con Erika Meléndez y otra compañera del programa de responsabilidad social educativa de   la secretaría de gobierno para mirar el acompañamiento realizado en el primer semestre.Algunos de los chicos y chicas del Fondo EPM y PP acompañaron puntos de navegación, se espera que el otro semestre se inicien los procesos de formación ya que esta actividad los motiva mucho más.', 'Retomar contacto con los chicos y chicas del programa para iniciar procesos de formación.', NULL, NULL, NULL, '', 0, 288, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(342, '2014-03-12', 'Seguimiento', 'Reunión de planeación de actividades', 'Se realizó una reunión con la docente Marcela Zapata, la docente solicita apoyo del programa debido a que se está organizando un colectivo de medios en la IE, y ella necesita apoyo para la construcción de la página web de la IE.', 'Se planea realizar una reunión con los estudiantes interesados en el colectivo de medios.', NULL, NULL, NULL, '', 0, 239, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(343, '2014-03-13', 'Seguimiento', 'Aula abierta', 'Se realizó una reunión con al rectora de la IE, para mirar las estrategias que se llevarán en conjunto con el programa, especialmente el tema de Aula Abierta.', 'Se realizará una convocatoria con padres y madres de familia para iniciar el proceso de Aula abierta de este año. ', NULL, NULL, NULL, '', 0, 149, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(344, '2014-03-11', 'Empalme', 'Presentación del programa y planeación', 'Se realizó la presentación del programa y se identificaron posibles alianzas con el Telecentro, inicialmente se pretende realizar un acercamiento con formación hacia las mujeres que hacen parte del Telecentro, sin embargo es necesario mirar los horarios de disponibilidad de estas personas ya que poseen varias ocupaciones. ', 'Se realizará una encuesta diagnostico sobre la cual se pretenden proponer actividades para el Telecentro.', NULL, NULL, NULL, '', 0, 199, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(345, '2014-01-31', 'Empalme', 'Empalme', 'Se evalúan las actividades realizadas el año pasado y plantean los procesos que se gestarán este año. El docente continuará con el Aula Abierta acompañada por el programa, además se plantea generar un espacio con estudiantes con el fin de construir el periódico digital de la institución educativa', 'Realizar la convocatoria y la inscripción de las personas para iniciar el curso.Realizar una nueva reunión para concretar el periódico digital.', NULL, NULL, NULL, '', 0, 410, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(346, '2014-03-06', 'Seguimiento', 'Reunión de planeación de actividades', 'Se realizó una reunión con la persona contacto de la IE Adriana Castrillon con el fin de planear las actividades que se realizaran este año.Se planea seguir realizando actividades periódicas que apoyen el uso del Kit en la IE.', 'Se realizará una charla de Internet Seguro con algunos docentes de la IE y Estudiantes.', NULL, NULL, NULL, '', 0, 157, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(347, '2014-03-21', 'Seguimiento', 'Seguimiento Kit de Inclusión', 'Se realizó visita de seguimiento al Kit de inclusión digital. El Kit es usado por la IE, sin embargo aún algunos docentes y estudiantes no saben de él.', 'Hacer más divulgación del Kit.', NULL, NULL, NULL, '', 0, 160, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(352, '2014-11-18', 'Seguimiento', 'Gestión de procesos de formación', 'Se realizó una reunión con las docentes para programar los procesos de formación para el próximo año.', 'Programar una nueva reunión el próximo año.', 'INEM_Guillermo_Echavarria_Reunion.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 342, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(353, '2014-11-18', 'Seguimiento', 'Gestión Aula Abierta', 'Se realizó una reunión con el coordinador de la IE para identificar la posibilidad de iniciar nuevamente con el aula abierta en la IE, se obtuvo una buena respuesta, la idea es apoyarnos de estudiantes de pp y/o alfabetizadores que dicten los procesos de formación a la comunidad.', 'Agendar reunión próximo año para hacer el cronograma de los procesos de formación.', 'IE_Monsenor_Victor_Wiedemann_Reunion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 132, 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(354, '2014-11-19', 'Seguimiento', 'Planeacion de actividades 2015', 'Se planeó con la coordinación académica de la institución educativa procesos de formación con padres de familia y estudiantes de grados cuarto, quinto, décimo, undécimo.', '26 de febrero: Charla de Navegar sin Naufragar con Padres de familia 6:00 pm\r\n2 de marzo:  Charla de Gobierno en línea con grados 10 y 11 11:00 am\r\n2 de marzo:   Charla de Navegar sin Naufragar  con grados 4 y 5   1:00 pm\r\n', '20141119_094947.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 347, 38, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(355, '2014-11-18', 'Seguimiento', 'Reunión de seguimiento y plantación ', 'Se realizó reunión de seguimiento a las actividades que se planearon con los emprendedores que finalizaron el taller de mercadeo digital', 'entrega y firma de certificados \r\nprogramar taller de pagina web con emprendedores', '2014_11_18_16_27_16.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 176, 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(356, '2014-11-19', 'Seguimiento', 'Reunión de planeación ', 'Reunión de seguimiento con Daniel Rozo Coordinador se trataron temas sobre la reserva y préstamo de la sala. adicional sobre los procesos de formación que realiza el parque biblioteca.', 'Se quedo pendiente la reunión para el próximo lunes 24 de noviembre para mirar las estrategias de acompañamiento del próximo año. ', '2014_11_19_16_18_50.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 193, 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(358, '2014-11-18', 'Seguimiento', 'Seguimiento Punto de navegación', 'Se realizo una corta visita a la casa de gobierno para identificar el estado de los equipos, se encontró que los equipos estaban apagados porque no estaban ingresando a internet, se llamo a la líder de servicio quien es la persona que tiene el ticket, ella quedo de enviarlo para que desde el programa se le haga seguimiento.', 'Hacer seguimiento al arreglo de los equipos.', 'Casa_de_Gobierno_SADEP_Seguimiento_Punto_de_navegacion.jpg', '', '', 'uploads/meeting/meeting_adjunct', 0, 333, 15, '0000-00-00 00:00:00', '2014-11-21 19:25:39'),
(359, '2014-11-21', 'Seguimiento', 'Reunion INDETVO', 'Reunión con el grupo audiovisual de INDETVO para iniciar acompañamiento a procesos audiovisuales duarante el fin de año y 2015 y proramar ruta de trabajo y actividades concretas.', '- Reunion con proyecto audiovisual para Teleantioquia\r\n- Inicio de Taller de Narrativas con actividades específicas para producción de audiovisuales para televisión\r\n- Entrega de Tareas Lunes 24 a los correos de los estudiantes', '20141121_111520.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 346, 38, '0000-00-00 00:00:00', '2014-11-21 19:27:01'),
(360, '2014-11-18', 'Seguimiento', 'Seguimiento al sitio', 'Reunión con el dinamizador del telecentro donde se programo las actividades de formación con el grupo de adultos mayores. se realizara una sesión de dispositivos movil y se dara inicio al taller de gobierno en linea con la comunidad. quedo pendiente programar una reunión con las personas en situación de discapacidad.', 'se realizara una sesión de dispositivos movil y se dara inicio al taller de gobierno en linea con la comunidad. quedo pendiente programar una reunión con las personas en situación de discapacidad.', 'Telecentro_altavista_reunion_de_seguimiento.jpg', 'Telecentro_altavista_reunion_de_seguimiento_2.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 209, 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(361, '2014-11-18', 'Seguimiento', 'Seguimiento al sitio ', 'Se realizó acompañamiento a la conexión del sitio y se hablo con una de las usuarias que frecuentan conectarse al internet del parque de altavista', '.', 'Parque_de_altavista_seguimiento_al_sitio.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 353, 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(362, '2014-11-18', 'Seguimiento', 'Seguimiento al sitio ', 'Acompañamiento al punto de navegación. el servicio estaba suspendido', '.', 'Casa_de_gobierno_altavista_seguimiento_al_punto_de_navegacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 332, 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(364, '2014-11-27', 'Seguimiento', 'Reunion de planeacion de actividades 2015', 'Reunión para programar actividades y procesos de formación en el 2015, en la institución educativa existe aula abierta y se aceptó la posibilidad de iniciar procesos de formación con padres de familia\r\n', '- Reunión en enero para programar inicio de procesos\r\n- Asesoria en dispositivos móviles\r\n- procesos en alfabetización digital', '20141127_103416.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 127, 38, '0000-00-00 00:00:00', '2014-11-27 15:36:00');
INSERT INTO `meetings` (`id_meeting`, `meeting_date`, `meeting_type`, `meeting_title`, `meeting_description`, `meeting_commitments`, `meeting_adjunct`, `meeting_adjunct1`, `meeting_adjunct2`, `dir`, `meeting_type_id`, `site_id`, `user_id`, `creation_date`, `modification_date`) VALUES
(365, '2014-12-02', 'Gestión con aliados', 'Reunión de Planeación 2015', 'Reunión de planificación de Trabajo conjunto con la funcionaria Olga Agudelo para programar actividades conjuntas durante el año 2015 en procesos de formación, sensibilizaciones y estrategias conjuntas.', '- Sensibilización Kit de inclusión digital con funcionarios del vivero\r\n- Taller con docentes de tecnología en Navegar sin Naufragar y entrega de contenidos.\r\n- Charlas de Navegar sin Naufragar con estudiantes de grados 9\r\n- Charlas de Gobierno en Linea con estudiantes de grados 10 y 11 en los dos semestres del año\r\n- Caracterización conjunta de procesos TIC\r\n- Sensibilización con funcionarios de la UAI, docentes de apoyo y psicólogos de instituciones educativas en el tema de inclusión digital', 'IMG_1231.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 451, 38, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(366, '2014-12-03', 'Seguimiento', 'Reunión de seguimiento y plantación ', 'Se realizó una reunión con la presidenta de la JAC y encargada del Telecentro para gestionar procesos de formación con adultos mayores. sobre manejo de dispositivos moviles y narrativas digitales para el proximo año', 'Programar actividades de formación para e próximo año ', 'CAM00028.jpg', 'CAM00030.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 456, 14, '2014-12-03 14:03:38', '2014-12-03 19:34:28'),
(367, '2014-12-02', 'Seguimiento', 'Gestión de procesos de formación', 'Se realizó una reunión con el dinamizador del Telecentro para gestionar procesos de formación con adultos mayores. se quedo con el compromiso de convocarlos para una charla de dispositivos móviles.', 'Realizar convocatoria de adultos mayores para charla de dispositivos móviles.', 'Telecentro_Los_tanques_Gestion_de_procesos_1.jpg', 'Telecentro_Los_tanques_Gestion_de_procesos_2.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 457, 15, '2014-12-03 16:33:44', '0000-00-00 00:00:00'),
(368, '2014-12-03', 'Seguimiento', 'Programación de actividades y informe del punto de', 'Me reuno con Ramón Perea para confirmar el correo de programación de actividades propuesto, él manifiesta que este año no es posible porque no han instalado la infraestrucutra necesaria  en el centro, los públicos a los que atienden ya salen a vacaciones y no planeó las actividades. Durante esta contratación se le realizó incontables llamadas y mail (ver seguidilla de mails) para concretar actividades, nunca devolvía las llamadas o correos, tanto que tuve que buscarlo personalmente. Se le solicita contestar el correo para validar que él recomienda no realizar las actividades este año. Por otra parte se le informó de la visita de conectividad realizada, que ademas no asistió a la cita, y que se debe esperar a que infraestructura les proporcione la conexión a la red eléctrica regulada.\r\n', 'Se le pidió responder el correo de las actividades propuestas.', 'IMG_20141203_144646.jpg', 'IMG_20141203_143936.jpg', 'IMG_20141203_143943.jpg', 'uploads/meeting/meeting_adjunct', 0, 297, 16, '2014-12-03 16:56:00', '0000-00-00 00:00:00'),
(369, '2014-12-03', 'Seguimiento', 'prueba', 'xxx', 'xxx', NULL, NULL, NULL, '', 0, 297, 16, '2014-12-03 17:02:02', '0000-00-00 00:00:00'),
(370, '2014-12-04', 'Seguimiento', 'Gestión de procesos de formación', 'Se realizó una reunión con la dinamizadora del telecentro Erika y su voluntario Cesar para agendar una charla de dispositivos móviles con adultos y adultos mayores, se programo para el próximo viernes 12 de diciembre. la idea es continuar con procesos de formación el próximo año.', 'Se agendo una charla de dispositivos móviles con adultos mayores.', 'Telecentro_Trinidad_Gestion_de_procesos_1.JPG', 'Telecentro_Trinidad_Gestion_de_procesos_2.JPG', NULL, 'uploads/meeting/meeting_adjunct', 0, 459, 15, '2014-12-05 14:08:47', '0000-00-00 00:00:00'),
(373, '2014-12-05', 'Seguimiento', 'Reunión con Dinamizador de Telecentro', 'Reunión con el dinamizador del Telecentro para iniciar procesos de formación y planeaciónn de procesos y actividades conjuntas para el 2015.', 'Charla de Navegar sin Naufragar Jueves 11 de Diciembre de 10:00 a 11:00 am', '20141205_092759-0.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 458, 38, '2014-12-09 09:47:38', '0000-00-00 00:00:00'),
(374, '2014-12-04', 'Seguimiento', 'Seguimiento y planeación taller de sonido ', 'Se realizó seguimiento al sitio y planeación de unos talleres de sonido con personas en situación de discapacidad. este taller estara liderado por el profesional de cultura digital Jorge Ocampo. quedo pendiente programar una reunión finalizando el mes de enero para poner las fechas de inicio de los talleres. ', 'Reunión en enero', '2014_12_04_10_14_35.jpg', '2014_12_04_11_19_32.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 193, 14, '2014-12-09 11:25:53', '0000-00-00 00:00:00'),
(375, '2014-12-09', 'Seguimiento', 'Reprogramación de actividades', 'Se canceló la charla de dispositivos móviles planeada con adultos mayores, por falta de asistencia, se reprogramó quedando pendiente confirmar la nueva fecha. \r\n', 'Quedo pendiente programar un taller con niños sobre las novenas de navidad', 'IMG_1262.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 457, 38, '2014-12-09 16:48:14', '0000-00-00 00:00:00'),
(376, '2014-12-11', 'Seguimiento', 'Convocatoria procesos de formación', 'Se realizó una reunión con el dinamizador del telecentro para gestionar la charla de dispositivos móviles.', 'Se hará una charla de dispositivos móviles el viernes 12 de diciembre.', 'Telecentro_San_Antonio_de_Prado_Gestion_de_procesos.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 210, 15, '2014-12-12 08:26:17', '0000-00-00 00:00:00'),
(377, '2014-12-11', 'Seguimiento', 'Convocatoria procesos de formación', 'Se realizó una reunión con el funcionario del sitio, Adrian, para verificar el estado de la convocatoria para la charla de dispositivos móviles.', 'Charla de dispositivos móviles el 12 de diciembre junto con el telecentro de San Antonio de Prado.', 'Biblioteca_filial_comfenalco_SADEP_Reunion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 195, 15, '2014-12-12 13:37:41', '0000-00-00 00:00:00'),
(378, '2014-12-11', 'Seguimiento', 'Seguimiento Punto de navegación', 'Se realizó una reunión con el funcionario José Jaramillo, para conversar del estado de los equipos, los cuales se encuentran fuera de servicio, ya que no estan ingresando a internet.', 'Se quedó con el compromiso de realizar seguimiento al punto, y tratar de solucionar lo antes posible el tema de la conectividad.', 'Casa_de_gobierno_SADEP_Seguimiento_al_sitio.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 333, 15, '2014-12-12 13:42:02', '0000-00-00 00:00:00'),
(379, '2014-12-10', 'Seguimiento', 'Convocatoria procesos de formación', 'Se realizó una reunión con el dinamizador Diego para agendar procesos de formación, se logró programar para el 17 de diciembre una charla de dispositivos móviles con adultos y adultos mayores.', 'Se realizara una charla de dispositivos móviles el día 17 de diciembre.', 'Telecentro_Rosales_Programacion_de_procesos_1.jpg', 'Telecentro_Rosales_Seguimiento_al_sitio_2.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 208, 15, '2014-12-12 13:47:24', '0000-00-00 00:00:00'),
(380, '2014-12-02', 'Empalme', 'Reunión de empalme y presentación ', 'Se realizó la presentación del programa y de las actividades que realizamos en la Inspección. Se espera que para el próximo año se puedan realizar actividades de divulgación con la comunidad. ', 'Atención de una estudiante de PP al punto de navegación. ', 'Reunion_de_empalme_Inspeccion_de_Aranjuez.JPG', 'Reunion_de_empalme_Inspeccion_de_Aranjuez.JPG', 'Reunion_de_empalme_Inspeccion_de_Aranjuez.JPG', 'uploads/meeting/meeting_adjunct', 0, 255, 21, '2014-12-12 16:26:04', '0000-00-00 00:00:00'),
(381, '2014-12-12', 'Seguimiento', 'Seguimiento Punto de navegación', 'Se realizó seguimiento al punto de navegación, además se recogieron los registro de usuario.', 'Ninguno', 'Mascerca_Poblado_Seguimiento_punto_de_navegacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 349, 15, '2014-12-12 16:59:47', '0000-00-00 00:00:00'),
(382, '2014-12-16', 'Seguimiento', 'Reunión de planeación 2015', 'Se realizó reunión con la voluntarias de la Biblioteca para planeación de actividades en 2015, para iniciar con convocatoria de la comunidad a procesos de formación en alfabetización digital.', '- Convocatoria a comunidad para curso de alfabetización digital\r\n- Gestión con el CE para el espacio de formación\r\n- Narrativas con niños\r\n- Dispositivos Móviles', 'Biblioteca_el_Manzanillo_Reunion_gestion_de_procesos.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 461, 38, '2014-12-16 13:49:43', '0000-00-00 00:00:00'),
(383, '2014-12-15', 'Seguimiento', 'Caracterización', 'Se realizó una reunión con las encargadas del lugar para realizar la caracterización de la terminal.', 'Programar visita técnica y procesos de formación.', 'Centro_Comercial_Terminal_del_sur_caracterizacion_1.jpg', 'Centro_Comercial_Terminal_del_sur_caracterizacion_2.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 460, 15, '2014-12-18 08:36:43', '0000-00-00 00:00:00'),
(384, '2014-12-18', 'Seguimiento', 'Entrega de certificados', 'Se realizó una corta reunión con el gestor del CEDEZO en donde se le entregaron los certificados que se tenian pendiente.', 'Iniciar otros procesos el próximo año.', 'Punto_de_atecnion_CEDEZO_Guayabal_Reunion_y_entrega_de_certificados.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 175, 15, '2014-12-18 14:54:40', '0000-00-00 00:00:00'),
(385, '2014-12-05', 'Seguimiento', 'Reunión planeación ', 'La reunión se lleva a cabo con Juliana Barrios, coordinadora del Parque Biblioteca con el fin de planear la sensibilización a los funcionarios del Kit de inclusión digital, este se planteó para el día lunes 13 de diciembre en dos tandas por la mañana. ', '1. Citar a los funcionarios a la fecha estipulada.\r\n2. Tener a disposición los espacios, videobeam, computador, sonido y la maleta del Kit de Inclusión Digital', 'Parque_Biblioteca_Doce_de_Octubre_Seguimiento_al_sitio.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 453, 24, '2014-12-22 11:51:48', '0000-00-00 00:00:00'),
(386, '2014-12-09', 'Empalme', 'Presentación de la nueva funcionaria a cargo', 'La reunión se lleva a cabo con la nueva funcionaria encargada del sitio Adriana Ruiz, ella será la nueva coordinadora de este espacio, se plantea buscar estrategias con el fin de dar solución a la No recolección de los indicadores del punto de navegación en este espacio, para esto la agente dinamizadora se encargará de llevar el día jueves una tabla con los formatos, y estos se instalarán al lado de los computadores. ', '1. La agente dinamizadora se encargará de llevar el día jueves una tabla con los formatos.\r\n2. Los funcionarios del sitio se encargarán de dinamizar la recolección de los indicadores. ', 'Casa_de_Justicia_Robledo_Empalme_1.jpg', 'Casa_de_Justicia_Robledo_Empalme_2.jpg', 'Casa_de_Justicia_Robledo_Empalme_3.jpg', 'uploads/meeting/meeting_adjunct', 0, 271, 24, '2014-12-22 12:07:40', '0000-00-00 00:00:00'),
(387, '2014-12-09', 'Empalme', 'Reunión nueva dinamizadora de Telecentro', 'Empalme con la nueva dinamizadora del Telecentro, se muestran los contenidos a trabajar durante el otro año, esta persona busca realizar varios cursos y talleres, puesto que considera que no hay casi movimiento en este espacio. ', '1. Entrega de los contenidos por parte de la Agente Dinamizadora.\r\n2. Se entrega además los formatos de inscripción para las personas interesadas en los cursos y talleres. ', 'Telecentro_Picacho_Empalme_1.jpg', 'Telecentro_Picacho_Empalme_2.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 202, 24, '2014-12-22 13:18:28', '0000-00-00 00:00:00'),
(388, '2015-02-02', 'Seguimiento', 'Recolección de indicadores ', 'Recolección de indicadores del punto de navegación, en este día el encuentro se realiza con la coordinadora de la casa de Justicia de Robledo, en la conversación se retoman compromisos planteados anteriormente como los talleres de gobierno en línea para los funcionarios. ', 'Al iniciar el contrato del año 2015 se reanudarán las actividades de formación con los funcionarios y de apropiación por parte de la comunidad del punto de navegación. ', 'Casa_de_Justicia_Robledo_Seguimiento_al_sitio_1.jpg', 'Casa_de_Justicia_Robledo_Seguimiento_al_sitio_2.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 271, 24, '2015-02-04 14:18:49', '0000-00-00 00:00:00'),
(389, '2015-02-02', 'Seguimiento', 'Planeación 2015', 'Revisión de propuestas de cursos para los empresarios beneficiarios del espacio y planeación de agenda para el año 2015. Se abrirá un curso de Alfabetización Digital y Gobierno en Línea el día 17 de febrero de 2:00 p.m. a 4:00 p.m. ', 'La agente dinamizadora: Será la encargada de buscar a los gestores TIC encargados de dictar el curso.\r\nNelsón Ospina, encargado del CEDEZO  realizará la convocatoria de las personas y la búsqueda de los espacios.', 'Cedezo_La_Quintana_Seguimiento_al_sitio_1.jpg', 'Cedezo_La_Quintana_Seguimiento_al_sitio_2.jpg', 'Cedezo_La_Quintana_Seguimiento_al_sitio_3.jpg', 'uploads/meeting/meeting_adjunct', 0, 168, 24, '2015-02-04 14:25:26', '0000-00-00 00:00:00'),
(390, '2015-02-02', 'Gestión con aliados', 'Gestión con aliados', 'La reunión se lleva a cabo con los funcionarios del Parque Biblioteca y el Cedezo, con el fin de generar un curso en el que se vinculen empresarios y comunidad en general, utilizando las instalaciones del Parque Biblioteca, la certificación se realizará entre las tres entidades. ', 'El Parque Biblioteca acomodará los espacios para dictar los cursos y realizar la convocatoria de comunidad en general \r\nEl Cedezo será el encargado de generar la convocatoria de los empresarios ', 'PB_La_Quintana_Cedezo_La_Quintana_Empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 184, 24, '2015-02-04 14:39:23', '0000-00-00 00:00:00'),
(391, '2015-02-03', 'Empalme', 'Empalme con funcionarios', 'Se realizó reunión con el señor Orlando Sánchez, don hernando y dos participantes más; uno en representación de la ACJ y una de la asociación de padres de familia. Se habló de las estrategias y propuestas tanto para la formación de los jóvenes que lideran el aula abierta como de la inscripción, reunión e inicio de las clases con los padres de familia. Se propuso incluir a la corporación sal y luz en al alianza del programa. Respecto a la formación de los chicos es claro que se realizará un taller de narrativas y fotografía con ellos y que se llevará a cabo una nueva reunión para revisar los contenidos que se utilizaran en las clases con los padres. Don hernando reitera la importancia de continuar fortaleciendo el componente de formación con propuestas de MDE inteligente, la ACJ y el colegio. Se hizo especial énfasis en el interés del colegio por visibilizar la experiencia tanto a nivel local con otros colegios que tal vez pudieran pilotearla en sus instalaciones como a nivel externo de la comuna, también se menciona el interés por contar con el apoyo e intercambio de experiencias con la IE Antonio Derka. ', 'Visitar Nuevamente la I.E para llevar a cabo reunión con los jovenes encargados del Aula abierta', 'Samuel_Barrientos_Empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 230, 23, '2015-02-09 08:54:10', '0000-00-00 00:00:00'),
(392, '2015-02-04', 'Empalme', 'Empalme Coordinación ', 'Se conversó con la señora Pilar Marin quien es la Coordinadora académica y se mencionó el interés de la IE por retomar el proceso de aula abierta, de hecho dos de los docentes del área de informática lideran el proceso y ya hicieron un sondeo de padres inscritos. Se aclaró en qué consiste el acompañamiento y apoyo del programa y se programó una nueva reunión con los docentes encargados para definir fechas y propuestas.', 'Agendar nueva reunión con los docentes encargados de reactivar el aula abierta', 'I_E_CristobaL_Colon_Empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 222, 23, '2015-02-09 08:58:06', '0000-00-00 00:00:00'),
(393, '2015-02-05', 'Empalme', 'Emplame nuevo funcionario', 'En la visita se verificó el estado de la conectividad, se recogieron indicadores, tambíen se conversó con un estudiante de la Uniminuto para mirar la posibilidad de tenerlo  como gestor Tic dado que pertenece a presupuesto participativo. Además de esto se realizó empalme con la nueva directora Claudia Castro la cual manifestó su interés por capacitar a los funcionarios en Gobierno en línea; sin embargo no se agendaron fechas aun.', 'agendar nueva reunión para programar capacitación con funcionarios', 'C_J_Villa_del_socorro_Empalme_y_seguimiento_2.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 242, 23, '2015-02-09 09:06:15', '0000-00-00 00:00:00'),
(394, '2015-03-03', 'Seguimiento', 'Reunion INDETVO', 'reunión con el grupo INDETVO para acompañamiento del proceso de producción de programa magazín para Teleanqitoquia, asesoría en estructura y construcción conceptual del piloto.', '- revisar documentos requeridos por Teleantioquia como manual de estilo, y sugerencias hechas por el canal.\r\n- Acompañamiento al proceso de estructuración del programa y producción de contenidos', 'la_independencia.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 346, 38, '2015-03-05 09:07:33', '0000-00-00 00:00:00'),
(395, '2015-02-24', 'Gestión con aliados', 'Gestión estudiantes de pp', 'Se realizó la entrega del sitio de parte de Caolina Agudelo a la nueva encargada Cindy Jaramillo, se realizó una reunión con la JAL para conversar acerca de los nuevos procedimientos que se harán con los chicos de pp.', 'Se estableció como compromiso de parte de la JAL conseguir estudiantes de pp que puedan realizar la labor social con el programa y de parte de MDE Ciudad inteligente se quedo con el compromiso de indicar en cuales IE se necesitan los chicos y en que procesos de formación.', 'Mascerca_de_Belen_Reunion_JAL.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 438, 15, '2015-03-06 12:04:41', '2015-03-30 17:01:22'),
(396, '2015-02-24', 'Empalme', 'Entrega procesos', 'se realizó la entrega del sitio por parte de Carolina Agudelo a la nueva encargada Cindy Jaramillo, se converso de los procesos de formación que se iniciaran en este, para lo cual se debe hablar con la JAL y mirar que chicos se tienen disponibles.', 'Buscar un estudiante de pp que pueda apoyar los cursos que se iniciaran con el CEDEZO.', 'CEDEZO_Belen_Empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 176, 15, '2015-03-06 14:25:55', '2015-03-30 17:03:40'),
(397, '2015-03-03', 'Seguimiento', 'Aula abierta', 'Se realizó una reunión con el coordinador de la jornada de la tarde, en donde se le hizo seguimiento al Aula abierta, además se establecieron las fechas para iniciar charlas de NSN con grados cuartos y quintos.', 'Se realizaran charlas de NSN con cuartos y quintos, además se realizará un seguimiento constante y regulado al aula abierta.', 'IE_San_Roberto_Belarmino_reunion_aula_abierta_20150303_141314.jpg', 'IE_San_Roberto_Belarmino_Acompanamiento_Gestor_TIC.jpg', 'IE_San_Roberto_Belarmino_seguimiento_aula_abierta_20150303_145442.jpg', 'uploads/meeting/meeting_adjunct', 0, 356, 15, '2015-03-06 15:26:04', '2015-03-11 16:03:13'),
(398, '2015-03-04', 'Seguimiento', 'Procesos de formación', 'Se realizó una reunión con la gestora del CEDEZO de SADEP en donde se estipularon algunas fechas para el inicio de cursos con emprendedores, que se harán con una estudiante de pp que ellos mismos contactarón.', 'Se quedo con el compromiso de iniciar un curso de alfabetización digital que será dictado por una estudiante de pp que apoya las labores del CEDEZO, la idea es iniciar la última semana de Marzo.', 'CEDEZO_SADEP_Reunion_procesos_de_formacion_20150304_092522.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 178, 15, '2015-03-06 16:08:17', '2015-03-11 16:32:27'),
(399, '2015-03-04', 'Seguimiento', 'Seguimiento Punto de navegación', 'Se realizó seguimiento al sitio, se habló con el funcionario encaragdo de la atención al usuario, acerca del funcionamiento del punto de navegación, además se recogieron los indicadores de gobierno y el chaleco.', 'Seguir realizando el seguimiento al sitio con más frecuencia, además se quedo de enviar al funcionario el formato de registro de usuario.', 'Casa_de_Gobierno_SADEP_seguimiento_al_sitio.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 333, 15, '2015-03-06 16:18:01', '2015-03-11 16:45:17'),
(400, '2015-03-09', 'Gestión con aliados', 'Reunión Coordinación de procesos 2015', 'Reunión para gestión de procesos con los públicos del parque biblioteca, entrega de contenidos de procesos de formación.', '- revisión por parte del equipo de la biblioteca para su aprobación y revisión de pertinencia\r\n- convocatoria a público joven para procesos de formación en narrativas digitales y web 2.0\r\n- conseguir gestores TIC que acompañen procesos en alfabetización digital los días mrtes y viernes en las horas de la tarde\r\n- programación de capacitación de funcionarios de la biblioteca en gobierno en linea, y gestión con sistema de bibliotecas para multiplicar a todos los funcionarios el proceso.\r\n- enviar formatos de inscripción a cursos y de seguimiento de asistencia', 'PB_San_Javier.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 191, 38, '2015-03-09 16:46:43', '2015-03-09 21:54:43'),
(401, '2015-03-05', 'Seguimiento', 'Gestión de espacios', 'Se realizó una reunión con el gestor del CEDEZO en donde se establecieron los horarios para el curso de alfabetización digital.', 'Inicio de curso el próximo miércoles.', 'CEDEZO_San_Javier_Reunion_para_agendar_espacios.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 174, 15, '2015-03-11 10:57:57', '0000-00-00 00:00:00'),
(402, '0000-00-00', 'Empalme', 'Empalme Nuevo Gestor de Cultura D y TIC con funcio', 'Reunión de Empalme y seguimiento con funcionarios de Casa Maren ,se presenta al nuevo Gestor de cultura digital Juan Camilo y el gestor Tic que acompañara en proceso con personas en situación de discapacidad', 'Acompañamiento 27 Mayo En 2da feria del sitio, y poner fecha para empezar proceso en compañía del gestor Tic', 'Casa_Maren_Empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 465, 10, '2015-03-18 15:11:18', '0000-00-00 00:00:00'),
(403, '0000-00-00', 'Empalme', 'Empalme Nuevo Gestor de Cultura D y TIC con funcio', 'Reunión de empalme con nuevo gestor de cultura digital y gestor tic para comenzar procesos en el sitio', 'Comenzar procesos el sábado y el lunes horarios y fechas por definir', 'Biblioteca_Raizal_Empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 466, 10, '2015-03-18 15:20:23', '0000-00-00 00:00:00'),
(404, '2015-03-18', 'Empalme', 'Reunión con Dinamizadora de Telecentro', 'Reunión con dinamizadora de Telecentro para hacer empalme con la nueva gestora de cultura digital e iniciar procesos de formación en 2015', '- Iniciar convocatoria para iniciar procesos de formación después de Semana santa, con Charla de NSN, mercadeo digital con emprendedores y narrativas digitales con adulto mayor y niños.', 'Telecentro_trinidad.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 459, 38, '2015-03-18 15:24:43', '0000-00-00 00:00:00'),
(405, '2015-03-18', 'Empalme', 'Empalme y planeación de actividades para 2015.', 'Se realizó la presentación del programa y de los gestores de cultura digital que acompañarán el sitio este año, los funcionarios manifestaron interés en vincularse con nosotros para llevar a cabo varios procesos que van acorde con las acciones que ellos realizarán este año; inicialmente manifestaron interés en comenzar con taller de narrativas, charlas de navegar sin naufragar, talleres para emprendedores y charlas de dispositivos móviles, para esto comenzarán haciendo las convocatorias pertinentes.', 'Realizar convocatorias para los talleres para emprendedores, taller de narrativas, charla de navegar sin naufragar y charla de dispositivos móviles.', 'Parque_Biblioteca_Guayabal_Empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 192, 43, '2015-03-19 09:20:49', '0000-00-00 00:00:00'),
(406, '2015-03-18', 'Empalme', 'Empalme ', 'Se realizó la presentación del programa y de los gestores de cultura digital que acompañarán el sitio este año, se identifica que la principal necesidad en este momento es realizar divulgación de la red WIFI y del programa en la comunidad educativa, por lo cual queda como compromiso programar la divulgación e informarle a los directivos de la Institución.', 'Programar divulgación e informarle a la Institución.', 'IES_Pascual_Bravo_Belen_Empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 560, 43, '2015-03-19 14:11:55', '0000-00-00 00:00:00'),
(407, '2015-03-19', 'Empalme', 'Empalme nuevo gestor ', 'Reunión de empalme con el nuevo gestor de cultura digital y los funcionarios del CEDEZO Manrique, presentación  por parte del gestor de los proceso de formación del programa y los distintas alternativas de intervención posibles en el sitio.', 'Darle seguimiento a los cursos y un taller de Excel avanzado para el martes 23 de marzo', 'IMG_20150319_WA0010.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 165, 10, '2015-03-20 08:02:39', '2015-04-06 20:46:27'),
(408, '2015-03-18', 'Gestión con aliados', 'Planeación de actividades', 'Se converso sobre las distintas actividades que se quieren realizar para este año, entre ellas articular la estrategia de Navegar sin Naufragar a las actividades que realiza la psicologa de la IE.', 'Realizar una charla de NSN en la IE con los grados 6. Y articular las agendas con el contenido que ya vienen adelantando en la IE respecto a Bullyng.', 'DSC_0566_1.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 507, 21, '2015-03-20 16:07:41', '0000-00-00 00:00:00'),
(409, '2015-03-19', 'Empalme', 'Empalme y planeación de actividades para 2015.', 'Se realizó la presentación de la nueva gestora de cultura digital que acompañará la Fundación Integrar, que atiende niños diagnosticados con algún trastorno del espectro autista, posteriormente se identificaron las principales necesidades de la Institución, entre ellas capacitar a los padres de familia en dispositivos móviles, para que puedan hacer uso de aplicaciones que fomentan el aprendizaje de sus hijos. ', 'Quedó como compromiso programar la reunión de sensibilización con padres de familia para iniciar el taller de dispositivos móviles orientado a suplir la necesidad específica de la población, la cual consiste en que lo padres aprendan a utilizar aplicación que promueva el aprendizaje de los niños diagnosticados con algún trastorno del espectro autista.', 'Fundacion_Integrar_Empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 215, 43, '2015-03-24 08:50:17', '0000-00-00 00:00:00'),
(410, '2015-03-19', 'Empalme', 'Empalme y planeación de actividades para 2015.', 'Se realizó la presentación de la nueva gestora de cultura digital que acompañará la Institución Educativa, se detectaron las principales necesidades, entre las cuales están, realizar un taller con los estudiantes en situación de discapacidad que usan en Kit de inclusión digital y realizar charlas de gobierno en línea con estudiantes del grado 11°. ', 'Quedó como compromiso programar el taller sobre el Kit de inclusión digital y las charlas de gobierno en línea para estudiantes del grado 11°.', 'IE_Pedro_Octavio_Amado_Empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 126, 43, '2015-03-24 10:40:30', '0000-00-00 00:00:00'),
(411, '2015-03-19', 'Empalme', 'Empalme y planeación de actividades para 2015.', 'Se realizó la presentación de la nueva gestora de cultura digital que acompañará el telecentro, se detectó que la principal necesidad en este momento es realizar un taller de narrativas con personas en situación de discapacidad y una charla de navegar sin naufragar con los niños usuarios del telecentro, se programó la charla para el Miércoles 25 de Marzo. ', 'Quedó como compromiso programas el taller de narrativas. ', 'Telecentro_Altavista_Empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 209, 43, '2015-03-24 11:10:00', '0000-00-00 00:00:00'),
(412, '2015-03-19', 'Empalme', 'Empalme y seguimiento del sitio', 'Se realizó la presentación de la nueva gestora de cultura digital que acompañará la casa de gobierno y se realizó seguimiento al sitio, se habló con el funcionario encargado de la atención al usuario, acerca del funcionamiento del punto de navegación, además se recogieron los indicadores de gobierno y se entregaron las nuevas planillas.', 'Usar las nuevas planillas de registro de usuarios en sitio de gobierno.', 'Casa_de_Gobierno_Altavista_Empalme_2.jpg', 'Casa_de_Gobierno_Altavista_Empalme.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 332, 43, '2015-03-24 11:28:40', '0000-00-00 00:00:00'),
(413, '2015-03-19', 'Empalme', 'Empalme en parque Aranjuez', 'Visita parque Aranjuez, identificación de la conectividad a la red wifi, dinámicas de uso y apropiación del sector y posibles estrategias para dinamizar la apropiación de los usuarios. ', 'Generar  y aplicar estrategias de apropiación del sitio público con conexión wifi. ', 'aprp_aranjuez.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 509, 41, '2015-03-24 14:18:35', '0000-00-00 00:00:00'),
(414, '2015-03-19', 'Empalme', 'Empalme en Inspección Aranjuez', 'Empalme con funcionaria encargada de la Inspección Aranjuez, uso y apropiación del punto de navegación y tipo de acompañamiento para este año. ', 'Próxima visita para posible articulación con grupos de la tercera edad y personas en situación de discapacidad que hacen sus encuentros en la Inspección, para el uso y apropiación del punto de navegación. \r\nAsesoría en dispositivos móviles y trámites en línea para el encargado del punto. ', 'IMG_5842_1.JPG', 'IMG_5844_1.JPG', NULL, 'uploads/meeting/meeting_adjunct', 0, 255, 12, '2015-03-24 14:51:36', '0000-00-00 00:00:00'),
(415, '2015-03-17', 'Empalme', 'Empalme Cedezo Santo Domingo', 'Empalme en el Cedezo con la nueva gestora en cultura digital, compromisos previamente establecidos y plan de formación y acompañamiento para este año. ', 'Próxima visita para definir que tipo de procesos se implementarán este año y la posibilidad de tener un gestor tic que los acompañe. ', 'IMG_5745_1.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 164, 41, '2015-03-24 15:04:45', '0000-00-00 00:00:00'),
(416, '2015-03-17', 'Empalme', 'Empalme con funcionario encargado', 'Presentación de la nueva gestora en cultura digital, compromisos pendientes y descentralización de la biblioteca para realizar actividades. ', 'Reunión para acordar acompañamiento. ', 'IMG_5737_1.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 216, 41, '2015-03-24 15:17:36', '0000-00-00 00:00:00'),
(417, '2015-03-19', 'Gestión con aliados', 'Planeación 2015', 'Reunión para programar procesos de formación con funcionarios, docentes y estudiantes con las instituciones aliadas al Vivero del Software, se programarón sensibilizaciones en el KIt de Inclusión, Charla de gobierno en Linea y de NSN.', '- Taller Vivencial de Sensibilizaión sobre el Kit de Inclusión Digital\r\n- Charlas de NSN con las IE de la Alianza futuro Digital', 'Vivero_del_Software.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 451, 38, '2015-03-25 09:40:15', '0000-00-00 00:00:00'),
(418, '2015-03-17', 'Seguimiento', 'Gestión de Procesos 2015', 'Reunión para gestionar procesos de formación con los grupos cercanos a la biblioteca', '- Convocatoria a a la JAC de la comuna 13 para procesos de formación en alfabetización Digital.', NULL, NULL, NULL, '', 0, 450, 38, '2015-03-25 10:11:23', '0000-00-00 00:00:00'),
(419, '2015-03-17', 'Seguimiento', 'Reunión Edulabs', 'Reunión para Gestionar estudiantes para el proceso de EDULABS', '- Escoger 4 Jóvenes para Laboratorio Edulabs y  solicitar autorizaciones de sus padres para asistir al proceso\r\n- La IE se compromete a entregar refrigerio o almuerzo a los estudiantes participantes', 'El_Limonar.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 131, 38, '2015-03-25 11:27:57', '0000-00-00 00:00:00'),
(420, '2015-03-17', 'Seguimiento', 'Reunión Edulabs', 'Reunión para Gestionar estudiantes para el proceso de EDULABS', '- Seleccionar los estudiantes para participar en el laboratorio\r\n- proporcionar refrigerio o almuerzo durante los días de participación', NULL, NULL, NULL, '', 0, 346, 38, '2015-03-25 11:33:29', '0000-00-00 00:00:00'),
(421, '2015-03-25', 'Seguimiento', 'Procesos de formación', 'Se realizó una reunión con la auxiliar de la biblioteca para iniciar con procesos de formación con las personas de la comunidad.', 'Enviar correo con los temas del taller de narrativas digitales y realizar una segunda reunión para evaluar la pertinencia del taller.', 'Biblioteca_Filial_SADEP_Gestion_de_procesos.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 195, 15, '2015-03-25 16:46:15', '2015-03-31 18:45:23'),
(422, '2015-03-25', 'Seguimiento', 'Procesos de formación', 'Se realizó una reunión con el dinamizador del telecentro para iniciar con procesos de formación con las personas de la comunidad.', 'Enviar correo con los temas del taller de narrativas digitales.', 'Telecentro_SADEP_Reunion_procesos_de_formacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 210, 15, '2015-03-25 16:48:02', '2015-03-31 18:50:09'),
(423, '0000-00-00', 'Gestión con aliados', 'Reunión Palabras y Calles', 'Encuentro con Daniel Gaviria y Lorena Carmona, técnicos en gestión cultural de la Bilioteca Tomás Carrasquilla, La Quintana, con ellos hablamos el tema de una alianza para el proceso de AULAB en Aures, puesto que ambos programas intervenimos de manera parecida el proceso, entonces decidimos converger y dar ayuda mutua en los procesos.', 'Crear un documento en drive para compartir los documentos y contenidos que se les den a los chicos de AULAB', NULL, NULL, NULL, '', 0, 184, 42, '2015-03-26 14:52:26', '0000-00-00 00:00:00'),
(424, '2015-03-26', 'Empalme', 'Empalme nuevo gestor ', 'Empalme y presentación  por parte del gestor de los proceso de formación del programa y los distintas alternativas de intervención posibles en el sitio.', 'Hacer convocatoria para Charlas NSN y Taller de narrativas.', NULL, NULL, NULL, '', 0, 497, 10, '2015-03-27 08:05:30', '2015-04-06 20:44:45'),
(425, '2015-03-26', 'Empalme', 'Empalme nuevo gestor ', 'Empalme y gestión de nuevos procesos', 'Taller de gobierno en línea en 2 semanas', NULL, NULL, NULL, '', 0, 198, 10, '2015-03-27 08:08:34', '0000-00-00 00:00:00'),
(426, '2015-03-26', 'Empalme', 'Empalme nuevo gestor ', 'Reunión de empalme nuevo gestor y gestión para nuevos procesos', 'Taller gobierno en línea en 2 semanas', 'Sitio_de_Gobierno_Villa_del_Socorro.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 242, 10, '2015-03-27 08:11:07', '2015-04-06 21:38:26'),
(428, '2015-03-27', 'Empalme', 'Empalme y gestión', 'Empalme y presentación  por parte del gestor de los proceso de formación del programa y los distintas alternativas de intervención posibles en el sitio.', 'Convocatoria a la comunidad para empezar procesos y la consecución de gestores TIC.', 'Casa_de_la_Lectura_Villa_Guadalupe.jpg', 'Casa_de_la_Lectura_Villa_Guadalupe2.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 463, 10, '2015-03-27 15:58:26', '2015-04-06 21:37:23'),
(429, '2015-03-27', 'Empalme', 'Empalme y gestión', 'Empalme y presentación  por parte del gestor de los proceso de formación del programa y los distintas alternativas de intervención posibles en el sitio.', 'Formación del gestor la próxima semana para articulación y certificación de los proceso del sitio.', 'Telecentro_Santa_Monica.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 468, 10, '2015-03-27 16:03:21', '2015-04-06 21:37:49'),
(430, '0000-00-00', 'Gestión con aliados', 'Reunión con Gloria Vidal', 'Encuentro con Gloria Vidal, líder de la comuna 7 quien nos ayuda en la búsqueda de jóvenes de PP para que cumplan la función de Gestores TIC, en dicho encuentro participaron 4 jóvenes que van a ser gestores en próximos cursos que se dictarán en Villa Flora', 'Gloria se encarga de avisar a los chicos el inicio de curso y de realizar la convocatoria para el mismo.', 'IMG_5815.JPG', 'IMG_5817.JPG', NULL, 'uploads/meeting/meeting_adjunct', 0, 268, 42, '2015-03-30 09:33:01', '0000-00-00 00:00:00'),
(431, '2015-03-25', 'Empalme', 'Empalme con funcionarios', 'Se realizó encuentro con Ricardo Sánchez, dinamizador del telecentro para realizar empalme y pensar en posibilidades de intervención. Se conversó de apoyar los cursos de A.D en el tema de Gobierno en línea.', 'Realizar una nueva visita para evaluar la posibilidad de realizar charlas o un taller de narrativas con alguno de los grupos', 'Telecentro_Altamira_Empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 490, 23, '2015-03-30 09:43:46', '0000-00-00 00:00:00'),
(432, '2015-03-18', 'Empalme', 'Reunión de empalme con Agente Dinamizador', 'Reunión con el dinamizador del telecentro para articular y planear los procesos de formación con la comunidad del sector. El funcionario tiene muy buena disposición de trabajo y se encargará de hace las respectivas convocatorias cuando se programe un curso.', 'Realizar una reunión con el Administrador de CIB y el agente dinamizador para agendar procesos de formación y gestionar apoyo de los estudiantes de PP para los procesos de formación.', 'Los_Mangos_1.jpg', 'Los_Mangos_2.jpg', 'Los_Mangos_3.jpg', 'uploads/meeting/meeting_adjunct', 0, 204, 40, '2015-03-30 09:50:05', '0000-00-00 00:00:00'),
(433, '2015-03-27', 'Empalme', 'Empalme y planeación de actividades para 2015.', 'Se realizó la presentación de la nueva gestora de cultura digital que acompañará la Institución Educativa, se detectaron las principales necesidades, entre las cuales está realizar procesos de formación con la comunidad (padres de familia) y realizar charlas de GEL para jóvenes, se programó charla de Gobierno en Línea con el grado 11° para el miércoles 8 de Abril.', 'Quedó como compromiso realizar la convocatoria a los padres de familia para iniciar proceso de formación con ellos y programar la fecha de inicio.', 'Institucion_Educativa_Benjamin_Herrera_Empalme.jpg', 'Institucion_Educativa_Benjamin_Herrera_Empalme.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 330, 43, '2015-03-30 09:57:58', '0000-00-00 00:00:00'),
(434, '2015-03-27', 'Empalme', 'Empalme y planeación de actividades para 2015.', 'Se realizó la presentación de la nueva gestora de cultura digital que acompañará la Institución Educativa, se detectaron las principales necesidades, entre las cuales está realizar charlas de gobierno en línea dirigida a los jóvenes de los grados 10° y 11°, se programó la charla para el Martes 14 de Abril.', 'Quedó como compromiso gestionar el espacio y los recursos para la charla de GEL.', 'Institucion_Educativa_Jose_Maria_Bernal_Empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 124, 43, '2015-03-30 10:12:34', '0000-00-00 00:00:00'),
(435, '2015-03-17', 'Empalme', 'Empalme del Sitio', 'Reunión de empalme y seguimiento al punto de navegación. El uso es poco frecuente, pero siempre está a disposición de los usuarios. ', 'Buscar enlace con las corporaciones que intervienen en el sitio y gestionar Gestores TIC con estudiantes de PP.', 'Emplame_Centro_Diversidad_Sexual.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 300, 40, '2015-03-30 10:17:06', '0000-00-00 00:00:00'),
(436, '2015-03-17', 'Empalme', 'Seguimiento al Sitio', 'Reunión de empalme y seguimiento al punto de navegación. El uso es poco frecuente, pero siempre está a disposición de los usuarios. ', 'Agendar reunión con el coordinador del sitio para gestionar Gestor TIC', NULL, NULL, NULL, '', 0, 321, 40, '2015-03-30 10:53:15', '0000-00-00 00:00:00'),
(437, '2015-03-18', 'Seguimiento', 'Seguimiento kit de inclusión digital', 'Reunión de seguimiento al kit de inclusión digital, el cual se encuentra instalado en la sala de sistemas y en la oficina de inclusión para el uso de los estudiantes. Algunos alumnos recibirán una capacitación práctica sobre las herramientas para personas invidentes, de baja visión y con limitaciones motrices.', 'Ninguno', 'ITM_fraternidad_kitdeinclusion_2.jpg', 'ITM_fraternidad_kitdeinclusion_1.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 308, 20, '2015-03-30 10:57:38', '0000-00-00 00:00:00'),
(438, '2015-03-17', 'Empalme', 'Reunión de empalme y gestión', 'Reunión con el coordinador académico y el docente de informática para realizar el empalme y planear los procesos de intervención del programa en la institución.', 'Pactar una reunión con los coordinadores de práctica del colegio y el profesional de inclusión de MDE para articular las estudiantes con la estrategia de Gestores TIC.', 'CEFA_6.jpg', 'CEFA_10.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 299, 17, '2015-03-30 11:29:27', '0000-00-00 00:00:00'),
(439, '2015-03-17', 'Empalme', 'Reunión de empalme y gestión', 'Reunión con la dinamizadora cultural de la biblioteca para gestionar procesos de formación con el público infantil y adultos en temas de alfabetización digital, internet seguro, arte y promoción de lecto-escritura. ', 'Programar un próximo encuentro para comenzar a desarrollar un proceso complejo en alfabetización digital, narrativas digitales y escritura creativa.', 'Biblioteca_Villatina_12.jpg', 'Biblioteca_Villatina_4.JPG', NULL, 'uploads/meeting/meeting_adjunct', 0, 525, 17, '2015-03-30 11:36:56', '0000-00-00 00:00:00'),
(440, '2015-03-19', 'Empalme', 'Reunión de empalme y gestión', 'Reunión con la directora del centro educativo para realizar el empalme y programar la actividad de día del niño en la institución. ', 'Queda pendiente enviar el correo oficial con toda la información detallada del evento.', 'CE_El_Placer.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 425, 17, '2015-03-30 11:39:40', '0000-00-00 00:00:00'),
(441, '2015-03-25', 'Empalme', 'Reunión de empalme y gestión', 'Reunión de empalme con el dinamizador del telecentro para continuar los procesos de formación en narrativas digitales y gobierno en línea con jóvenes y adultos de la comunidad.', 'Programar una próxima reunión con el estudiante de PP que podría ser Gestor TIC', 'Telecentro_San_Miguel_La_Mansion.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 205, 17, '2015-03-30 11:46:08', '0000-00-00 00:00:00'),
(442, '0000-00-00', 'Gestión con aliados', 'Reunión con Nelly Gil', 'Encuentro con Nelly Gil de la JAC de Castilla, quien nos ayuda en la comunidad a encontrar jóvenes Gestores TIC para dictar los cursos en la comuna, también se habló de un proyecto para que los jóvenes de la comuna se agrupen y formen una junta de jóvenes líderes en la comuna 5.', 'Los jóvenes quedaron en pensar los puntos en los que se quieren trabajar para la escuela de líderes', NULL, NULL, NULL, '', 0, 232, 42, '2015-03-30 11:49:26', '0000-00-00 00:00:00'),
(443, '2015-03-26', 'Empalme', 'Reunión de empalme', 'Reunión de empalme con la Inspectora de la 9B El Salvador, indagar sobre el funcionamiento de los equipos. Recolección de indicadores.', 'Ninguno', NULL, NULL, NULL, '', 0, 307, 20, '2015-03-30 11:55:09', '0000-00-00 00:00:00'),
(444, '2015-03-17', 'Empalme', 'Empalme del Sitio', 'Reunión con  el rector, la coordinadora y el docente de tecnología de la institución para agendar procesos de formación, gestores TIC Y presentar la propuesta del proyecto Edulabs e invitarlos a hacer parte de él. Se firmó el compromiso con el rector y se dejó las cartas de solicitud de permiso para los padres de familia de los niños seleccionados.', 'Continuar procesos de formación iniciados en el semestre anterior y la Institución se compromete a brindarles alimentación (refrigerio y almuerzo) a los estudiantes como requisito para participar el el proyecto Edulabs. ', 'Empalme_Sol_de_Oriente_1.jpg', 'Empalme_Sol_de_Oriente_2.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 326, 40, '2015-03-30 12:08:49', '0000-00-00 00:00:00'),
(445, '2015-03-19', 'Gestión con aliados', 'Reunión de articulación', 'Reunión con la coordinadora de Crecer con dignidad y el pedagogo de la Fundación Munay (sede Santa Elena), para articular procesos de formación en narrativas digitales y posteriormente en herramientas Web con los niños, niñas y jóvenes que son intervenidos por la fundación.', 'La Fundación queda con la tarea de enviar un correo con el consentimiento del coordinador. El programa MDE queda con el compromiso de gestionar la realización de dos talleres de narrativas digitales.\r\n', 'Fundacion_Munay.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 433, 17, '2015-03-30 13:26:28', '0000-00-00 00:00:00'),
(446, '2015-03-17', 'Empalme', 'Empalme Sitio', 'Reunión de empalme y seguimiento al sitio. Recolección de indicadores y planificación proceso formación', 'programar charla Gobierno en Línea para el Adulto Mayor', 'Emplame_AMAUTTA_2.jpg', 'Empalme_AMAUTTA_4.JPG', 'Empalme_AMAUTTA_3.JPG', 'uploads/meeting/meeting_adjunct', 0, 291, 40, '2015-03-30 13:44:01', '0000-00-00 00:00:00'),
(447, '2015-03-26', 'Gestión con aliados', 'Gestión Estudiantes de PP y Procesos de formación', 'Reunión con el administrador del Centro de Integración Barrial y Dinamizador del Telecentro para gestionar estudiantes de presupuesto participativo y alfabetizadores que apoyen los procesos de formación del programa y agendar actividades con los Microempresarios de la Fundación Golondrinas, presidentes de las organizaciones de la comuna 8 y los integrantes de Asocomunal 8.', 'Iniciar procesos de formación con charla de sensibilización y Gobierno en Línea en la semana del 6 al 10 de abril.', 'Reunion_CIB_Los_Mangos_1.jpg', 'Reunion_CIB_Los_Mangos_2.jpg', 'Reunion_CIB_Los_Mangos_3.jpg', 'uploads/meeting/meeting_adjunct', 0, 204, 40, '2015-03-30 13:55:32', '0000-00-00 00:00:00'),
(448, '2015-02-24', 'Gestión con aliados', 'JAL comuna 9', 'Reunión con el presidente de la JAL comuna 9', 'Contacto Medellín Ciudad Inteligente con estudiantes de PP', NULL, NULL, NULL, '', 0, 314, 20, '2015-03-30 14:02:47', '0000-00-00 00:00:00'),
(449, '2015-03-17', 'Empalme', 'Empalme y compromisos Edulab', 'Reunión de empalme con Coordinadora de la Institución Educativa Antonio Derka para el empalme del proceso anterior y los nuevos procesos de formación, además acordar los compromisos de la institución con el proceso Edulab con Eafit. ', 'Acompañamiento año 2015 con el aula abierta\r\nPosible gestión de estudiantes para cumplir horas de labor social con el programa en los sitios de Santo Domingo \r\nCompromiso acompañamiento Institución con los cuatro jóvenes pertenecientes al proceso con Edulab. ', 'Nuevo_doc_1.pdf', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 237, 41, '2015-03-30 14:07:34', '0000-00-00 00:00:00'),
(450, '2015-03-26', 'Empalme', 'Empalme y programación Procesos de Formación', 'Reunión con el director de la Institución para agendar charla de Gobierno en Línea para los estudiantes de 10° y 11°, programar charla de Navegar sin Naufragar con los estuiantes de 4° y 5°.', 'Iniciar procesos de formación la semana del 6 al 10 de abril.', 'Emplame_La_Milagrosa_1.JPG', 'Emplame_La_Milagrosa_2.JPG', NULL, 'uploads/meeting/meeting_adjunct', 0, 312, 40, '2015-03-30 15:54:53', '0000-00-00 00:00:00'),
(451, '2015-03-24', 'Empalme', 'Empalme Positivos por la Vida', 'Empalme de sitio, compromisos previos del proceso anterior y nuevos procesos de formación. Articulación horarios, nueva agenda y objetivos esperados', 'Terminar Taller de narrativas digitales\r\nSesiones de trabajo semanal martes de 4 a 6pm\r\nPensar en contenido de internet seguro para trabajar con las educadoras de los niños\r\nDar continuidad al acompañamiento', 'acta_empalme_positivos.pdf', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 518, 41, '2015-03-30 16:45:17', '0000-00-00 00:00:00'),
(452, '2015-02-27', 'Gestión con aliados', 'Planeación Escuela de Líderes Juveniles', 'María Nelly Gil, es la presidenta de la Junta Administradora Local, ha propuesto al programa y a líderes de la comuna 5 integrar una escuela de formación direccionada a los más jóvenes de la comuna, para esto acudimos a la Corporación Una Vida Tranquila con el fin de generar algunas alianzas y conocer las ideas y proyecciones de estos jóvenes.', '1. invitar a otros líderes y actores de la comuna o institucionales que quieran hacer parte de este proceso.\r\n2. La líder y los integrantes de la corporación se comprometen a traer una propuesta más estructurada con el fin de dar cumplimiento a un requerimiento desde el programa y es entender el rol que asumiremos al interior de este. ', 'IE_Sor_Juana_Ines_de_la_Cruz_Planeacion_Formacion_Escuela_de_Lideres_Juveniles_2.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 232, 24, '2015-03-30 20:10:52', '0000-00-00 00:00:00');
INSERT INTO `meetings` (`id_meeting`, `meeting_date`, `meeting_type`, `meeting_title`, `meeting_description`, `meeting_commitments`, `meeting_adjunct`, `meeting_adjunct1`, `meeting_adjunct2`, `dir`, `meeting_type_id`, `site_id`, `user_id`, `creation_date`, `modification_date`) VALUES
(453, '2015-02-28', 'Gestión con aliados', 'Reunión líderes Observatorio comuna 5', 'Nos encontramos en la reunión del observatorio de la comuna 5, proyecto dirigido y gestionado por los líderes comunales con miras a generar un proyecto de Open Data comunitario. El programa será el encargado de trabajar toda la parte de formación y desarrollo con ellos del plan de comunicaciones del proyecto. ', '1. Formular y realizar el Taller Planeación de la comunicación.\r\n2. Buscar las estrategías para desarrollar un buen proceso de formación con los líderes. ', 'IE_Pedro_Claver_Formacion_Observatorio_Lideres_Comuna_5_2.jpg', 'IE_Pedro_Claver_Formacion_Observatorio_Lideres_Comuna_5_3.jpg', 'IE_Pedro_Claver_Formacion_Observatorio_Lideres_Comuna_5_4.jpg', 'uploads/meeting/meeting_adjunct', 0, 226, 24, '2015-03-30 20:21:55', '0000-00-00 00:00:00'),
(454, '2015-03-17', 'Empalme', 'Reunión Promotor jóvenes por la vida', 'La reunión tuvo lugar con el promotor encargado de los jóvenes por la vida que se encuentran prestando su labor social en el punto de navegación, puesto que se vienen presentando algunas dificultades en la prestación de este, por la falta de chicos y la renovación de los convenios. Por esto se busca que las chicas que se encuentren en el punto puedan prestar su labor en las mañanas mientras ingresan la totalidad de los otros jóvenes.', '1. Acompañamiento por parte de las jóvenes del punto de navegación.\r\n2. La Gestora de Cultura Digital se compromete a realizar la inducción de los nuevos integrantes del programa que llegaran la segunda semana de abril. ', 'UPJ_Empalme_Promotor_Jovenes_por_la_Vida.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 288, 24, '2015-03-30 21:35:06', '0000-00-00 00:00:00'),
(455, '2015-03-17', 'Empalme', 'Reunión Empalme', 'Se realiza el reconocimiento de las personas que integrarán el proceso y se firma el acta de inicio de la formación que se llevará a cabo en la Universidad de Eafit. ', '1. La coordinadora y el rector se comprometen a cumplir con los compromisos adquiridos y consignados en la carta que se firmó en este encuentro. ', 'IE_Jesus_Amigo_Empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 488, 24, '2015-03-30 21:41:12', '0000-00-00 00:00:00'),
(456, '2015-03-17', 'Seguimiento', 'Seguimiento y planeación ', 'Se realiza un proceso de planeación de todos los cursos y talleres de formación que se llevarán a cabo durante el año. ', '1. Realizar las gestiones pertinentes del caso, para llevar a cabo los procesos de formación en el sitio.', 'Cedezo_La_Quintana_Planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 168, 24, '2015-03-30 21:44:53', '0000-00-00 00:00:00'),
(457, '2015-03-18', 'Empalme', 'Participación en la formación de EAFIT', 'Presentación de la propuesta EDULABS y firma del compromiso por parte del rector, para que cuatro estudiantes puedan participar del proceso de formación dictado por EAFIT. ', '1. El rector y los docentes se comprometen a llevar a cabalidad los compromisos adquiridos a través de la firma de este. ', 'IE_Jorge_Eliecer_Gaitan_Empalme_y_planeacion_1.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 415, 24, '2015-03-30 21:55:09', '0000-00-00 00:00:00'),
(458, '2015-03-26', 'Empalme', 'Planeación 2015', 'En está reunión se retoman los contactos y los compromisos adquiridos desde el año pasado, para esto se planean algunas charlas de Gobierno en línea para los estudiantes de los grados décimo y once. \r\nSe espera realizar otros procesos en el transcurso del año.', 'Realizar las charlas en el mes de abril por parte del programa.', 'IE_El_Triunfo_Santa_Teresa_Planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 481, 24, '2015-03-30 23:04:29', '0000-00-00 00:00:00'),
(459, '2015-03-26', 'Empalme', 'Presentación del programa al nuevo dinamizador', 'Presentación del programa al nuevo dinamizador del Telecentro, se busca además realizar alianzas y procesos de formación para el 2015.', 'Convocar a la Ana Teresa Ocampo, la representante Legal del Telecentro con el fin de generar sinergias y alianzas para este año. ', 'Telecentro_Picacho_Empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 202, 24, '2015-03-30 23:08:41', '0000-00-00 00:00:00'),
(460, '2015-03-31', 'Empalme', 'Empalme y planeación con Director', 'Se realizó reunión con el director del parque biblioteca, además de la gestora de Servicios Marcela Ocampo y la directora de fomento Lectura y escritura Carolina Gallón. En esta reunión se realizaron varias actividades: Recorrido por la biblioteca y empalme de los servicios ofertados a la comunidad, identificación de grupos focales de atención y planeación de propuestas de intervención desde el programa con dichos grupos,además de fijación de fechas para las mismas. ', '15 de Abril: En la mañana se realizará visita al centro integrado de desarrollo en compañía de la biblioteca. En la tarde se desarrollará taller de Accesibilidad con funcionarios de la Biblioteca.\r\n17 Abril : Taller de Accesibilidad con segundo grupo de Funcionarios.\r\n2 de Mayo: Navegar sin Naufragar con los niños del Club de lectura infantil 9 a  11 a.m\r\n\r\n- Enviar el material que se produjo con el centro integrado de desarrollo para que al Biblio lo visibilice\r\n-Enviar correo con propuestas de Formación del programa\r\n- Ir desarrollando las propuestas planeadas de forma paulatina pero con compromiso para cada grupo focal identificado', 'Biblioteca_S_Cristobal_Empalme_y_planeacion_4.jpg', 'Biblioteca_S_Cristobal_Reunioon_de_planeacion_y_empalme_2.jpg', 'Biblioteca_S_Cristobal_Reunioon_de_planeacion_y_empalme_6.jpg', 'uploads/meeting/meeting_adjunct', 0, 186, 23, '2015-03-31 21:53:26', '0000-00-00 00:00:00'),
(461, '2015-04-01', 'Gestión con aliados', 'Reunión con coordinador de la biblioteca', 'Reunión para hablar de lo que se hará con la biblioteca este año, conocer a la nueva persona encargada de acompañar la biblioteca y quedar en una nueva reunión', 'Se hará una nueva reunión el día jueves 9 de abril para organizar todo bien con el coordinador y la gestora de cultura digital.', 'Bilioteca_Tren_de_papel_reunion.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 182, 42, '2015-04-06 07:44:14', '0000-00-00 00:00:00'),
(462, '2015-03-31', 'Seguimiento', 'Seguimiento', 'Seguimiento del sitio, presentación con los funcionarios, revisión de los recursos, socialización con usuarios y recolección de indicadores', 'Seguimiento continuo.', 'Visita_CAV_la_America.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 246, 10, '2015-04-06 15:55:22', '2015-04-06 21:24:46'),
(463, '2015-03-31', 'Seguimiento', 'Seguimiento', 'Seguimiento del sitio de gobierno, su funcionamiento, retroalimentación con el gestor y recolección de indicadores', 'Seguimiento continuo del sitio.', 'Visita_Aula_Ambiental_La_America.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 236, 10, '2015-04-06 16:04:26', '2015-04-06 21:24:22'),
(464, '2015-04-07', 'Empalme', 'Reunión de empalme y gestión', 'Reunión de empalme y gestión de procesos con el rector de la institución. Se acordaron dos cosas principales: Crear un laboratorio audiovisual con estudiantes de 8° y 9° para trabajar continuamente este año; y gestionar el Aula abierta para realizar cursos con la comunidad.', 'Por parte de la IE: Convocar a los estudiantes para conformar el laboratorio audiovisual escolar.\r\nPor parte nuestra: Gestionar la vinculación de estudiantes de PP para la realización de cursos en aula abierta.', 'IE_Alfonso_Lopez_Reunion_empalme.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 290, 17, '2015-04-07 11:29:13', '0000-00-00 00:00:00'),
(465, '2015-04-07', 'Empalme', 'Empalme con funcionarios', 'Se llevó a cabo reunión de empalme con funcionarios de la biblioteca, entre ellos el coordinador, las promotoras de lectura y el encargado de los procesos de formación. Inicialmente se comentó el interés de visibilizar la experiencia de la biblioteca con las personas en situación de discacapcidad, frente a otras entidades como arque biblioteca la Quintana y el colegio mayor. Se indagó por las dinámicas del lugar, población atendida y afluente y se socializaron los procesos de formación que se desarrollan desde el programa. ', 'Agendar una nueva reunión con Beatriz para planear la socialización de la experiencia. También con la nueva persona encargada de al sala de sistemas para agendar curso de Alfabetización digital y Gel con comunidad. Para los funcionarios se piensa desarrollar algo de Web 2.0 según sus necesidades.', 'Bilioteca_Fdo_Gomez_M_Empalme_y_planeacion_1.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 268, 23, '2015-04-07 15:41:50', '0000-00-00 00:00:00'),
(466, '2015-04-07', 'Empalme', 'Empalme con funcionarios', 'Se conversó acerca de lso procesos realizados anteriormente y de los compromisos pactados con la comunidad en relación a nuevos procesos. Iniciará el taller de herramientas web 2.0. Se indaga por los públicos afluentes al telecentro y en vista de que la población jóven no es muy frecuente se propone la convocatoria del taller de narrativas digitales', 'Hacer invitación para todos los procesos, programar dispositivos móviles con Adultos mayores de martes- jueves. \r\nIniciar el taller de herramientas web 2.o y llamar a las personas para recordar.', 'Telecentro_la_amistad_Empalme_y_planeacion_1.jpg', 'Telecentro_la_amistad_Empalme_y_planeacion_3.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 203, 23, '2015-04-07 15:53:36', '0000-00-00 00:00:00'),
(467, '2015-04-07', 'Empalme', 'Empalme con funcionarios', 'Se realizó reunión con el rector de la I.E en donde se habló de los procesos realizados anteriormente y de las propuestas para este año. Se habló de realizar el taller de Gel con la escuela de padres. Hay un interés de la I.E por recuperar los proceosos del aula abierta, por lo tanto tanto la I.E como la gestora de Cultura digital se compriometieron a revisar qué chicos de la Í.E y de pp pueden apoyar la restauración de dicho proceso', 'Visitar la I.E nuevamente para reunirnos con la coordiandora y poner fechas a las propuestas abordadas\r\n- Realizar GEL con estudiantes de once en mayo y una charla mensual de NSN con los grupos de quinto a noveno.', 'I_E_Fe_y_alegria_aures_Empalme_y_planeacion_1.jpg', 'I_E_Fe_y_alegria_aures_Empalme_y_planeacion_2.jpg', 'I_E_Fe_y_alegria_aures_Empalme_y_planeacion_3.jpg', 'uploads/meeting/meeting_adjunct', 0, 407, 23, '2015-04-07 16:17:11', '0000-00-00 00:00:00'),
(468, '2015-04-07', 'Seguimiento', 'Seguimiento al sitio y planeación de actividades.', 'Se realizó una reunión para detectar las principales necesidades del sitio y programar las actividades que se llevaran a cabo este año, inicialmente los funcionaron se comprometieron a realizar las convocatorias respectivas para charlas de NSN y taller de narrativas. ', 'Por parte del Parque Biblioteca quedó como compromiso realizar las convocatorias respectivas para las charlas de NSN y el taller de narrativas. ', 'Parque_Biblioteca_Guayabal_Seguimiento_al_sitio.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 192, 43, '2015-04-09 08:01:35', '0000-00-00 00:00:00'),
(469, '2015-04-08', 'Empalme', 'Empalme y gestión', 'Reunión para empalme de nuevo Gestor de cultura digital y seguimiento del uso del kit para personas en situación de discapacidad, el uso de este es aceptable pero podría mejorar.', 'Se empieza convocatoria para escuela de padres, Aula Abierta, con el plus del kit, se programan 3 charlas de NSN.', 'Olaya_Herrera.jpg', 'Olaya_Herrera1.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 154, 10, '2015-04-09 08:05:21', '0000-00-00 00:00:00'),
(470, '2015-04-08', 'Empalme', 'Empalme y gestión', 'Reunión para presentación del nuevo gestor de cultura digital y seguimiento de los procesos del sitio, se entregan los contenidos para aula abierta de escuela de padres y se programan 2 sesiones de nsn', 'Capacitación a profesores para aula abierta y dos charlas de nsn', 'Fe_y_Alegria_Granizal.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 253, 10, '2015-04-09 08:08:04', '0000-00-00 00:00:00'),
(471, '2015-04-09', 'Seguimiento', 'Reunión de programación de actividades para el año', 'En la reunión se conversó sobre las necesidades de formación que tiene la comunidad aledaña al Telecentro.', 'Se iniciará un taller de herramientas web.20 La idea es empezar el 29 de abril.', 'TelecentroSantaLucia_Reunion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 520, 21, '2015-04-09 11:36:57', '2015-05-03 19:41:23'),
(472, '2015-04-09', 'Seguimiento', 'Seguimiento del sitio y recolección de indicadores', 'Seguimiento del sitio y recolección de indicadores', 'Gel la próxima semana con funcionarios', 'Casa_de_justicia_Villa_del_Socorro.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 242, 10, '2015-04-09 11:55:50', '0000-00-00 00:00:00'),
(473, '2015-04-09', 'Gestión con aliados', 'Gestión', 'Se presentan los contenidos para el seguimiento de dos grupos de AD, GEL y WEB 2.0', 'Seguimiento', 'Telecentro_Villa_del_Socorro.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 198, 10, '2015-04-09 11:58:29', '0000-00-00 00:00:00'),
(474, '2015-04-07', 'Seguimiento', 'Planeación de actividades', 'Se conversó sobre la importancia de realizar procesos que involucren a las personas con discapacidad de la ciudad. Por esa razón estuvimos conversando sobre realizar un taller de narrativas que además tuviera continuidad, por lo que se conversó sobre la idea de construir un laboratorio de medios para la IE.', 'Se realizará un taller de narrativas digitales cuyo fin será la construcción de un laboratorio de medios dentro de la IE.', 'reunionGuillermoVelez.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 157, 21, '2015-04-09 12:13:28', '0000-00-00 00:00:00'),
(475, '2015-04-08', 'Empalme', 'Reunión gestión y planeación', 'Reunión con el comité académico conformado por el rector y los coordinadores de las tres sedes, para gestionar procesos de formación en la instutución, tanto para estudiantes como para la comunidad. ', 'Comenzar las charlas de NSN desde primaria, y gestionar el Aula Abierta con el acompañamiento de estudiantes de PP', 'IE_Gonzalo_Restrepo_Reunion_planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 305, 17, '2015-04-09 16:14:50', '0000-00-00 00:00:00'),
(476, '2015-04-09', 'Empalme', 'Reunión gestión y planeación', 'Reunión con la dinamizadora cultural para programar los procesos de formación en la biblioteca. ', 'Charla de NSN para niños la próxima semana, convocar a adultos para curos de AD, capacitar a la estudiantes de PP como Gestora TIC, y convocar al grupo de víctimas para realizar un proceso de AD y ND bajo la nueva metodología.', 'Biblioteca_Villatina_Reunion_planeacion.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 525, 17, '2015-04-09 16:17:52', '0000-00-00 00:00:00'),
(477, '2015-04-09', 'Gestión con aliados', 'Reunión gestión y planeación', 'Reunión con la coordinadora del centro de capacitación del SENA para programar el proceso de formación en AD y ND según la nueva metodología, con un grupo de víctimas de desplazamiento forzado la comuna 9. ', 'Convocar a las personas para el próximo viernes 24 de abril', 'CAV_Caunces_Reunion_de_planeacion.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 298, 17, '2015-04-09 16:32:56', '0000-00-00 00:00:00'),
(478, '2015-04-08', 'Empalme', 'Empalme en I.E Sección Escuela la Iguaná', 'Reunión de empalme y nuevos procesos 2015.\r\nConocimiento de uso de kit de inclusión digital y posibles escenarios de articulación entre la Institución y el Programa. \r\nPropuestas de contenidos y posibles talleres y cursos: Proyecto de emisora escolar, capacitación para el uso del kit de inclusión digital y charlas de navegar sin naufragar. ', 'Inicio de capacitación docente: miércoles 22 de abril: Uso de Kit de Inclusión Digital y Charla de navegar sin naufragar. Socialización de la propuestas de emisora escolar. \r\nReunión con Coordinadora para revisar cronograma de inicio Emisora Escolar. \r\n\r\nMiércoles 29 de abril: Charla de navegar sin naufragar grados tercero, cuarto y quinto. Grupo A mañana y grupo B tarde. ', 'Reunion_de_Empalme_I_E_Marco_Fidel_Suarez_Seccion_la_Iguana.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 219, 41, '2015-04-09 16:36:18', '0000-00-00 00:00:00'),
(479, '2015-04-08', 'Empalme', 'Empalme y nuevos procesos 2015 Ciro Mendía', 'Empalme del proceso anterior, contextualización del estado y uso anterior del Aula Abierta. Actualmente es un proceso que se encuentra sin ser ofrecido a la comunidad pues según manifiesta el profesor no han tenido acompañamiento a los estudiantes. \r\nReconocimiento de las instalaciones físicas y los recursos audiovisuales con los que cuenta la institución educativa y la iniciativa de los estudiantes y el docente acompañante del proceso. \r\nPropuestas de contenido para acompañamiento 2015: Apertura del aula abierta y proyecto de alfabetización audiovisual para el colegio como estrategia de sostenibilidad de un proceso de narrativas. ', 'Próximo encuentro: Presentar proyecto de alfabetización digital para el rector de la Institución Educativa y propuesta de Cronograma para el acompañamiento. \r\n\r\nVincular a la personera escolar en el proyecto de alfabetización audiovisual para fortalecer los procesos de liderazgo y gobierno escolar al interior de la Institución. ', 'Profe_de_la_I_E_Ciro_Mendia_en_sala_audiovisual_con_sus_estudiantes_Visita_de_empalme.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 250, 41, '2015-04-09 16:48:03', '0000-00-00 00:00:00'),
(480, '2015-04-01', 'Seguimiento', 'Programación de actividades', 'Reunión de planeación de actividades con jóvenes de la corporación. Se solicita el apoyo en la emisrora para que los estudiantes sean los locutores y quienes generen algunos de los contenidos. Este trabajo se realizará con el acompañamiento del profesor Gustavo quien está cargo de la emisora. ', 'Reunión con el profe encargado de la emisora el martes 7 de abril a las 2:00 pm ', 'Corporacion_Hogar_reunionplaneacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 213, 20, '2015-04-09 16:55:24', '2015-04-21 15:55:16'),
(481, '2015-04-08', 'Empalme', 'Empalme y gestión de nuevos procesos 2015', 'En la reunión se retomó el acompañamiento iniciado por la anterior gestora en cultura digital que acompañaba el telecentro, donde se habían tenido unas conversaciones previas para iniciar procesos de MDE Inteligente. \r\n\r\nUna vez conocidos los talleres y cursos que de dictan a la comunidad en el Telecentro se le propone a la coordinadora el acompañamiento en narrativas: fotografía para un grupo con el que previamente se ha trabajado en alfabetización digital y requieren otro tipo de oferta en formación. \r\n', 'Agendado incio de taller de Narrativas digitales: fotografía con grupo de madres cabeza de hogar para el jueves 16 de abri en la mañana. ', 'Usuaria_del_Telecentro_Moscu_en_visita_de_empalme.JPG', 'Usuario_Telecentro_Moscu_en_Visita_de_Empalme.JPG', 'Visita_de_empalme_Telecentro_Moscu.JPG', 'uploads/meeting/meeting_adjunct', 0, 464, 41, '2015-04-09 16:57:45', '0000-00-00 00:00:00'),
(482, '2015-04-09', 'Empalme', 'Empalme y nuevos procesos 2015 ', 'Empalme del proceso anterior con al aula abierta a la comunidad, proceso con padres de familia, resultados y continuación. \r\nPropuesta de acompañamiento: Capacitación docente en alfabetización digital y web 2.0  y charlas de navegar sin naufragar. Aula abierta: Padres de familia. ', 'El coordinador se encargará de proponer las fechas de inicio de la reunión con los docentes. ', 'I_E_Escuela_del_Concejo_Clodomiro_3.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 252, 41, '2015-04-09 17:11:03', '0000-00-00 00:00:00'),
(483, '2015-04-09', 'Empalme', 'Empalme y planeación de actividades para 2015.', 'Se realizó la presentación de la nueva gestora de cultura digital que acompañará la Institución Educativa, se detectaron las principales necesidades de la institución, entre las cuales está acompañar aula abierta, dictar charlas de NSN y realizar un taller de narrativas con algunos de los estudiantes. Se programaron las charlas de NSN.', 'Quedó como compromiso programar el taller de narrativas y concretar otra reunión para apoyar el proceso de aula abierta. ', 'Institucion_Educativa_Jose_Acevedo_y_Gomez_Empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 344, 43, '2015-04-10 09:08:14', '0000-00-00 00:00:00'),
(484, '2015-04-07', 'Seguimiento', 'Seguimiento', 'Reunión de seguimiento y capacitación de los gestores tic del telecentro de santa monica', 'Terminar la capacitación el viernes 10', 'Telecentro_Santa_Monica-0.jpg', 'Cristobal_Colon2.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 468, 10, '2015-04-10 13:59:52', '0000-00-00 00:00:00'),
(485, '2015-04-10', 'Empalme', 'Seguimiento', 'Continuación de la capacitación con los gestores tic del telecentro', 'Enviar las bases de datos para elaborar certificados', 'Telecentro_Santa_Monica2.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 468, 10, '2015-04-10 14:02:03', '0000-00-00 00:00:00'),
(486, '2015-04-07', 'Seguimiento', 'Reunión ', 'Reunión con directivas de la I.E para planear intervención en la institución ', 'Convocatoria con la comunidad y horarios para charlas', 'Cristobal_Colon2.jpg', 'Cristobal_Colon1.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 222, 10, '2015-04-10 14:04:31', '0000-00-00 00:00:00'),
(487, '2015-04-10', 'Seguimiento', 'Reunion para procesos de formación', 'Reunión con directivas para elaborar horarios de charlas NSN para cinco quintos y 3 grupos de escuela de padres en AD', 'Capacitación de los profesores encargados del Aula Abierta y charlas de NSN', 'Telecentro_Santa_Monica2-0.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 222, 10, '2015-04-10 14:07:31', '0000-00-00 00:00:00'),
(488, '2015-04-08', 'Empalme', 'Empalme con funcionarios', 'Se realizó reunión con la docente encargada para agendar acompañamiento 2015 y se programaron 2 charlas de Navegar sin Naufragar en la mañana, además de NSN para padres el día  10 de junio. Se habló de capacitar las dos docentes en Prezzi y/0 socializar herramientas educativas en la web que les permitan elaborar insumos como sopas de letras, crucigramas etc para el trabajo con los niños y niñas. Se programará además la charla de dispositivos móviles. Se verificó la conectividad en las afueras de la I.E.', 'Desarrollar las actividades programadas', 'vereda_la_suiza.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 492, 23, '2015-04-13 08:11:50', '0000-00-00 00:00:00'),
(489, '2015-04-08', 'Empalme', 'Empalme con funcionarios', 'Se llevó a cabo reunión con el rector de la I.E y manifestó el impacto positivo del taller de Narrativas que se realizó con los chicos el año pasado, por lo cual se propuso continuar ese proceso  a manera de laboratorio y que sean los mismos chicos los encargados de liderar el grupo con lso nuevos integrantes e iniciar el proceso formativo con el taller. Se propueso realizar Gel con grupos décimos y once para el segundo semestre y una charla de NSN cada mes para el resto de grupos ', 'Reunión el próximo miércoles 22 con el grupo de chicos y chicas que haran parte del laboratorio.', 'I_E_Hector_Rogelio_Empalme_y_planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 276, 23, '2015-04-13 08:26:48', '0000-00-00 00:00:00'),
(490, '2015-04-08', 'Empalme', 'Empalme con funcionarios', 'Se llevó a cabo reunión con funcionarios de la biblioteca y además de indagar las dinámicas, tipos de población y procesos anteriores se planeó una actividad para cada tipo de público. En julio se planean charlas de dispositivos móviles para  los grupos de A.D de la biblioteca. En septiembre s eplanea NSN con jóvenes', 'Miércoles 6 de mayo: Navegar sin naufragar de 2 a 3 de la tarde con niños.\r\nCésar será encargado de replicar GEL con sus grupos DE A.D y se le deben pasar los contenidos', NULL, NULL, NULL, '', 0, 185, 23, '2015-04-13 08:47:53', '0000-00-00 00:00:00'),
(491, '2015-04-08', 'Seguimiento', 'Seguimiento al Sitio', 'Se visitó la casa de Gobierno, se presentó a La Gestora de Cultura Digital encargada, se revisaron los equipos y se reportaron los dañados. Se recogieron planillas y se pegó el afiche Para cursos', 'No hay ', 'Casa_de_Gobierno_S_S_Palmitas_Seguimiento_al_sitio.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 270, 23, '2015-04-13 09:04:07', '0000-00-00 00:00:00'),
(492, '2015-04-08', 'Empalme', 'Empalme con funcionarios', 'Se llevó a cabo reunión con el rector de la I.E para evaluar la posibilida de reanudar el aula abierta y se convocan 4 estudiantes de la I.E para liderar el proceso y se programa charla de NSN con los otrs grupos', 'Reunión con alfabetizadores a la 9 a.m el jueves 16 de mayo y charla de NSN de 10 a 12 p.m el mismo día', 'I_E_Loma_hermosa_Empalme_y_planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 493, 23, '2015-04-13 14:32:30', '0000-00-00 00:00:00'),
(493, '2015-04-08', 'Empalme', 'Empalme con funcionarios', 'Se realizó reunión de empalme y planeación con funcionario en donde surge la necesidad de apoyar los procesos con el curso de Alfabetización Digital, para lo cual se prevee que el horario serán los sábados de 9 a 11.', '- Llevar a cabo reunión con la comunidad para iniciar curso de A.D el dia jueves 23 de abril a las  2 p.m\r\n- Buscar chico de pp para desarrollar el proceso o un alfabetizador de la I.E La loma.\r\n- Enviar correo electrónico con el resúmen de los procesos formativos con que cuenta el programa para ir agendando paulatinamente según el tipo de población', 'Biblioteca_la_loma_Empalme_y_planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 187, 23, '2015-04-13 14:45:16', '0000-00-00 00:00:00'),
(494, '2015-04-09', 'Empalme', 'Empalme con funcionarios', 'Se llevó a acbo reunión con la señora Ana lópez, Coordinadora académica de la I.E y se inadagó por los procesos anteriores desarrollados por el programa y se concluyó la importancia de volver a convocar a la comunidad para curso de A.D y buscar chico de PP  para desarrollarlo en las noches. Se programaron algunas charlas y se pensará en GEL para estudiantes de once en el segundo semestre.', 'Jueves 7 de mayo: Navegar sin Naufragar de 8 A 12 con dos grupos.\r\nJueves 28 de mayo: Navegar sin Naufragar de 1:20 a 3:15 con dos grupos.\r\nEnviar correo electrónico para recordar fechas', 'I_E_Ciudadela_N_Occidente_Empalme_y_planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 405, 23, '2015-04-13 14:55:34', '0000-00-00 00:00:00'),
(495, '2015-04-09', 'Empalme', 'Emplame', 'Se conversó con la funcionaria y se pensó en asesorías para los funcionarios en Gel', 'Mirar la posibildad de un chico de Pp para acompañar el punto de navegación', 'Centro_de_servicios_N_Occidente_Empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 272, 23, '2015-04-13 15:07:13', '0000-00-00 00:00:00'),
(496, '2015-04-13', 'Seguimiento', 'Reunion de planeacion de actividades 2015', 'Reunión con el Dinamizador del Telecentro para iniciar procesos de formación, ', '-Se iniciará taller de fotografía con la corporación Alma y Vida, de personas en situación de discapacidad, a partir del 21 de abril.\r\n\r\n- Convocatoria de emprendedores para iniciar mercadeo digital.', 'Telecentro_Villa_Laura_Acompanamiento_al_Sitio.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 206, 38, '2015-04-14 08:41:47', '0000-00-00 00:00:00'),
(497, '2015-04-14', 'Gestión con aliados', 'Gestion con aliados', 'Reunión de gestión y seguimiento del proceso de padres de la institución educativa Samuel barrientos', 'Reunión con el rector y los estudiantes de la institución para gestión de procesos y revisión de contenidos', 'Reunion_con_aliados_Samuel_Barrientos.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 230, 10, '2015-04-14 16:23:42', '0000-00-00 00:00:00'),
(498, '2015-04-14', 'Seguimiento', 'Procesos de formación', 'Se realizó una reunión con un nuevo Gestor TIC que apoyará los procesos de formación que se iniciarán con emprendedores del CEDEZO de Belén, Además se aprovecho para presentarlo con la coordinadora del CEDEZO.', 'Inicio de curso de Alfabetización Digital Viernes 24 de Abril.', 'CEDEZO_Belen_Reunion_Procesos_de_Formacion.jpg', 'CEDEZO_Belen_Procesos_de_formacion_y_presentacion_Gestor_TIC.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 176, 15, '2015-04-15 17:48:24', '0000-00-00 00:00:00'),
(499, '2015-04-15', 'Seguimiento', 'Gestión Procesos de Formación', 'Se realizó una reunión con el técnico de cultura digital para conversar acerca de los procesos que se estan llevando en el Parque Biblioteca y mirar la manera como nos podemos articular con ellos.', 'Iniciar convocatorias para procesos de formación.', 'Parque_Biblioteca_SADEP_Gestion_de_procesos_de_formacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 194, 15, '2015-04-15 17:58:52', '0000-00-00 00:00:00'),
(500, '2015-04-15', 'Gestión con aliados', 'Gestión de estudiantes de pp', 'Reunión con la encargada de la parte educativa de la JAL para gestionar estudiantes de presupuesto participativo, además se le comentó el avance que se ha tenido con los que estan realizando la labor social con nosotros.', 'Enviar correo para confirmar estudiantes.', 'Casa_de_Gobierno_SADEP_Reunion_con_la_JAL.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 333, 15, '2015-04-15 18:01:43', '2015-05-07 17:01:36'),
(501, '2015-04-17', 'Empalme', 'Empalme y planeación', 'Empalme y planeación del acompañamiento del programa a la I.E este mes.', 'Charla NSN para 5tos', NULL, NULL, NULL, '', 0, 150, 10, '2015-04-20 08:56:18', '0000-00-00 00:00:00'),
(502, '2015-04-14', 'Seguimiento', 'Seguimiento al KIT de Inclusión digital.', 'Se realizó una reunión con la docente del aula de apoyo para identificar el número de estudiantes en situación de discapacidad que tiene la sede y cuales de estos estudiantes usan el KIT de inclusión digital, ella mencionó que en este momento se está realizando un estudio sobre el tema y que dicho estudio estará listo a finales de Abril, por lo cual la docente solicita que volvamos a finales de Abril o a principios de Mayo para socializarnos los resultados del estudio.', 'Quedó como compromiso por parte de la Institución Educativa informarnos sobre el número de estudiantes que usan el KIT de inclusión digital.\r\nAdemás la Institución se comprometió a agendar una posible fecha para realizar la sensibilización del uso del KIT de inclusión digital con docentes y así fomentar el uso de este. ', 'Institucion_Educativa_Santos_Angeles_Custodios_Seguimiento_KIT_de_Inclusion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 359, 43, '2015-04-20 14:59:00', '0000-00-00 00:00:00'),
(503, '2015-04-17', 'Gestión con aliados', 'Reunión con Rubén Patiño', 'Se planeó la intervención al sitio durante todo el año, se llegó al acuerdo de dar charlas para los jóvenes del grado 11 quienes van a ingresar a la educación superior, también se habló de reforzar el uso del Kit de Inlusión en la institución', 'Charlas de navegar sin naufragar, reforzar el kit de inclusión', 'I_E_Diego_Echavarria_Misas_Reunion_de_Planeacion.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 225, 42, '2015-04-20 15:11:30', '0000-00-00 00:00:00'),
(504, '2015-04-14', 'Seguimiento', 'Planeación de actividades.', 'Se realizó una reunión de planeación de actividades basadas en suplir las necesidades del Parque Biblioteca. Se agendaron los siguientes procesos: curso de Alfabetización Digital y Gobierno en Línea para adultos, charlas de Navegar sin Naufragar para niños y padres de familia, talleres de Narrativas y fotografía para jóvenes. ', 'Por parte del Parque Biblioteca, quedó como compromiso gestionar un grupo para el taller de narrativas, otro para el curso de Alfabetización Digital y Gobierno en Línea y gestionar grupos para charlas de Navegar sin Naufragar.', 'Parque_Biblioteca_Guayabal_Reunion_de_planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 192, 43, '2015-04-20 15:23:00', '2015-04-20 20:23:53'),
(505, '2015-04-16', 'Empalme', 'Empalme y planeación de actividades para 2015.', 'Se realizó reunión con la rectora de la institución para iniciar el proceso de acompañamiento, se detectaron las principales necesidades del centro educativo, entre las cuales está acompañar aula abierta, dictar charlas de Navegar sin Naufragar con niños y con padres de familia y realizar taller de narrativas y fotografía con niños. ', 'Quedó como compromiso por parte de la institución educativa programar fechas para las charlas de Navegar sin Naufragar y el taller de narrativas.\r\nAdemás, la rectora se comprometió a evaluar la posibilidad de abrir el aula abierta a la comunidad e informarnos sobre la decisión.', 'Centro_Educativo_El_Manzanillo_Reunion_empalme_y_planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 127, 43, '2015-04-20 15:39:20', '0000-00-00 00:00:00'),
(506, '2015-04-07', 'Seguimiento', 'Funcionamiento de la emisora', 'Reunión conocimiento y reconocimiento del funcionamiento de la emisora de la Corporación; el docente encargado trabajó en una emisora, esta experiencia ha permitido una mayor apropiación del recurso por parte de los jóvenes de la corporación. Se contó con el acompañamiento de Chsritian (comunicador)', 'Se acuerda realizar los talleres los jueves de 2:00 a 3:30', 'Corporacion_Hogar_reunion_emisora_1.jpg', 'Corporacion_Hogar_reunion_emisora_2.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 213, 20, '2015-04-21 11:11:12', '0000-00-00 00:00:00'),
(507, '2015-04-08', 'Seguimiento', 'Seguimiento punto de navegación', 'Reunión con una de las funcionarias del lugar para conocer el desempeño de los estudiantes de PP en el punto de navegación.', 'Continuar con el acompañamiento del sitio', 'Mascerca_Buenos_Aires_seguimiento.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 314, 20, '2015-04-21 11:27:06', '0000-00-00 00:00:00'),
(508, '2015-04-07', 'Empalme', 'Reunión de empalme', 'Reunión de empalme con enlace, datos de las funcionarias, verificación del funcionamiento de los equipos del punto de navegación. y recolección de indicadores.', 'Continuar con el acompañamiento del punto de navegación', 'Espacio_publico_empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 427, 20, '2015-04-21 11:42:03', '0000-00-00 00:00:00'),
(509, '2015-04-07', 'Empalme', 'Reunión de empalme', 'Reunión de empalme y planeación de actividades\r\nSe concreta GEL para los dos grupos del aula abierta, GEL par estudiantes de 11°y  charlas de NSN para el grado 5°.\r\nEn la institución se continúa con el aula abierta martes y miércoles con dos grupos de padres de familia.', 'El profesor enviará la programación de las actividades', 'IE_Asamblea_Departamental_empalme_planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 293, 20, '2015-04-21 11:50:33', '0000-00-00 00:00:00'),
(510, '2015-04-14', 'Seguimiento', 'Seguimiento kit de inclusión digital', 'Seguimiento al kit de inclusión digital, es utilizado por los técnicos de cultura digital en sus cursos. O cuando un usuario de las salas de informática lo requiere. \r\n', 'Compromiso: agendar una reunión con la coordinadora de los tecnicos de cultura digital para planificar actividades entre MCI y la biblioteca', 'PB_Leon_de_Greiff_kit_inclusion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 189, 20, '2015-04-22 12:00:33', '0000-00-00 00:00:00'),
(511, '2015-04-22', 'Seguimiento', 'Reunión para gestión de Aula Abierta', 'Reunión con el rector para reactivar el aula abierta, se generó el compromiso de gestionar el grupo, que posiblemente sea de la tercera edad de la JAC de la loma de los parras, y asignar el Gestor formador y enviar la información al rector. con la docente de tecnología de primaria se articuló charla de NSN con estudiantes de 4 y 5 grado, queda fecha por definir.', '-  Gestionar Información sobre proceso de aula abierta, público, gestor encargado y demás que el rector necesite\r\n- Coordinar con la docentes de tecnología las charlas de NSN y GEL para las primeras semanas de mayo', 'Acompanamiento_al_Sitio_IE_Santa_Catalina_de_Sena.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 357, 38, '2015-04-22 13:38:57', '0000-00-00 00:00:00'),
(512, '2015-04-10', 'Gestión con aliados', 'Reunión de planeación', 'Reunión con el dinamizador del telecentro para programar el taller de narrativas digitales con adultos. Se estableció el día lunes en la tarde para comodidad de la comunidad.', 'Convocar a la comunidad para los lunes en la tarde. Enviar una breve información del taller para hacer divulgación.', 'Telecentro_La_Mansion_Reunion_de_planeacion_1.JPG', 'Telecentro_La_Mansion_Reunion_de_planeacion_2.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 205, 17, '2015-04-22 16:24:01', '0000-00-00 00:00:00'),
(513, '2015-04-14', 'Empalme', 'Reunión de empalme y gestión', 'Encuentro con la directora del centro educativo para planear los procesos de formación con la comunidad y fortalecer el aula abierta. Nos acompañó además un Gestor TIC que sería el encargado de realizar y asesorar los cursos que comenzarán en la institución.  Se hizo además la entrega del álbum Medellín es un caramelo, como reconocimiento por su labor y disposición de trabajo siempre.', 'Reunirnos en 15 días con líderes comunitarios y funcionarios de entidades aliadas al centro educativo, para programar los horarios de los procesos de formación.', 'CE_El_Plan_Reunion_empalme.jpg', 'CE_El_Plan_Reunion_empalme_1.jpg', 'CE_El_Plan_Entrega_album.jpg', 'uploads/meeting/meeting_adjunct', 0, 426, 17, '2015-04-22 16:35:13', '0000-00-00 00:00:00'),
(514, '2015-04-14', 'Seguimiento', 'Reunión gestión y planeación', 'Reunión con la directora del centro educativo para la planeación de la actividad el día del niño en la institución. Realizamos un recorrido de reconocimiento por el centro educativo para organizar los detalles del evento y saber con qué espacios y recursos contamos. ', 'Enviar un correo con la información y requerimientos específicos para poder poner a disposición a los docentes de la institución para la actividad.', 'CE_El_Placer_Reunion_de_planeacion.jpg', 'CE_El_Placer_Visita_de_planeacion_de_evento_6.jpg', 'CE_El_Placer_Visita_de_planeacion_de_evento_4.jpg', 'uploads/meeting/meeting_adjunct', 0, 425, 17, '2015-04-22 16:38:28', '0000-00-00 00:00:00'),
(515, '2015-04-14', 'Empalme', 'Reunión de empalme y gestión', 'Encuentro con la técnica social y cultural de la biblioteca para realizar el empalme y planear los procesos de formación a la comunidad. Surgen dos propuestas de trabajo orientadas a la población de emprendedores del CEDEZO y para jóvenes del corregimiento. ', 'Gestionar con la dirección del CEDEZO el grupo de personas y luego contactar a los funcionarios de la biblioteca para programar los horarios de capacitación; igualmente, programar un horario para trabajar el taller de narrativas digitales con los jóvenes. Estos procesos serían facilitados por el Gestor TIC del corregimiento.', 'Biblioteca_Santa_Elena_Reunion_de_planeacion_2.JPG', 'Biblioteca_Santa_Elena_Reunion_de_planeacion_3.JPG', 'Biblioteca_Santa_Elena_Reunion_de_planeacion_8.jpg', 'uploads/meeting/meeting_adjunct', 0, 190, 17, '2015-04-22 16:49:12', '0000-00-00 00:00:00'),
(516, '2015-04-22', 'Seguimiento', 'Gestión de Aula Abierta', 'reunión para gestionar la apertura del aula abierta en la institución, el año pasado estuvo activa, pero hay que organizar nuevos procesos y hacer convocatoria', '- Llamar al coordinador para gestionar reunión\r\n- Conseguir gestor y hacer convocatoria', 'Acompanamiento_al_sitio_IE_Republica_de_Venezuela.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 125, 38, '2015-04-23 08:56:40', '0000-00-00 00:00:00'),
(517, '2015-04-22', 'Seguimiento', 'Seguimiento al punto de navegación', 'Seguimiento al punto de navegación del sitio', '- compromiso de fomentar la firma de la planillas de registro de usuario en el punto de navegación por parte de los funcionarios', 'Seguimiento_a_Sitio_Mascerca_Guayabal.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 348, 38, '2015-04-23 10:46:21', '0000-00-00 00:00:00'),
(518, '2015-04-22', 'Seguimiento', 'Gestión de Procesos 2015', 'Gestión de procesos de formación para el año 2015 en alfabetización digital, web.2.0 y mercadeo digital para segundo semestre', '- Hacer convocatoria con adultos mayores para iniciar curso de alfabetización digital en la primera semana de Mayo, gestionar gestor TIC para acompañar el proceso', 'Reunion_de_gestion_de_procesos_Telecentro_Fatima.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 207, 38, '2015-04-23 10:52:42', '0000-00-00 00:00:00'),
(519, '2015-04-13', 'Seguimiento', 'Seguimiento del sitio y planeación de actividades', 'Se realizó reunión con el funcionario encargado de la Bolera Suramericana, se habló del funcionamiento de la red y él nos contó que la red ha funcionado bien y que los usuarios hacen un uso considerable de esta. Se pensó en la posibilidad de hacer una charla de dispositivos móviles, ya que es una necesidad de los usuarios del sitio, puesto que muchos de estos son adultos y quieren aprender a usar sus teléfonos inteligentes. ', 'Programar charla de dispositivos móviles.', 'Bolera_Suramericana_Planeacion_de_actividades.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 563, 43, '2015-04-24 14:44:05', '0000-00-00 00:00:00'),
(520, '2015-04-13', 'Seguimiento', 'Seguimiento del sitio y planeación de actividades', 'Se realizó una reunión con la funcionaria encargada del sitio, la cual manifestó que la red la usan mucho los padres de familia que vienen a acompañar a los niños en los entrenamientos, además manifestó que sería viable programar una visita para conversar con dichos padres y proponerles si quieren participar en alguno de nuestros procesos de formación, mientras sus hijos entrenan, como por ejemplo charla de dispositivos móviles o GEL. Agrega que ella conoce los padres de familia y sabe que estarían muy contentos con la propuesta. ', 'Programar nueva visita para conversar con los padres usuarios de la red WIFI. ', 'Pista_de_bicicross_Planeacion_de_actividades.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 565, 43, '2015-04-24 15:01:58', '0000-00-00 00:00:00'),
(521, '2015-04-15', 'Empalme', 'Empalme  y planeación', 'Se realizó reunión de empalme y planeación con coordinador del Cedezo San Cristóbal en donde se conversó de la necesidad de contar con la red WIFI para dar inicio a los procesos de formación. De este modo según la población  las ofertas posibles son Alfabetización digital, Herramientas web 2.0 y GEL Comunidad; además de charlas de dispositivos móviles que se consideran muy pertinentes para los usuarios del lugar', 'Asesoría de dispositivos móviles con micro empresarios para el 6 de mayo a las 9 de la mañana', 'IMG_20150415_085654769.jpg', 'IMG_20150415_091152102.jpg', 'IMG_20150415_091205467.jpg', 'uploads/meeting/meeting_adjunct', 0, 169, 23, '2015-04-27 08:40:12', '0000-00-00 00:00:00'),
(522, '2015-04-15', 'Empalme', 'Empalme  y planeación', 'Se realizó reunión de Empalme y planeación con Coordinador en donde se identificaron características de la población, además de algunas necesidades, rutinas y dinámicas propias del sitio; los acompañamientos cotidianos y de esta forma fue posible identificar la manera en que el programa se vinculara con una propuesta de formación, en este caso narrativas digitales, en donde se vincule un docente del lugar como líder y aquellos jóvenes que ya tuvieron la formación anterior para continuar el proceso', ' Iniciar el taller de Narrativas digitales el 14 de mayo y confirmar la fecha. Es necesario posteriormente al taller de narrativas realizar el taller de Kit de inclusión con el grupo de formadores ya que tanto el coordinador como varios docentes son nuevos y no lo saben usar, además de esto compartir algunas herramientas web para el trabajo con los chicos y chicas.', 'Centro_integrado_S_C_Empalme_y_Planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 444, 23, '2015-04-27 12:56:57', '0000-00-00 00:00:00'),
(523, '2015-04-22', 'Empalme', 'Empalme y planeación de actividades para 2015.', 'Se realizó reunión con el coordinador del Punto de Atención CEDEZO Altavista, en la cual se detectaron las principales necesidades de los emprendedores del corregimiento, entre ellas está aprender alfabetización digital y mercadeo digital.', 'Por parte del coordinador del CEDEZO, quedó como compromiso llevar la propuesta de formación a los emprendedores y hacer la convocatoria pertinente. ', 'Punto_de_Atencion_CEDEZO_Altavista_Empalme_y_planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 177, 43, '2015-04-27 13:41:11', '0000-00-00 00:00:00'),
(524, '2015-04-15', 'Empalme', 'Empalme', 'Se visitó el centro de servicios para hacer contacto con el funcionario, verificar el estado de los equipos y planear acciones de divulgación del servicio con la comunidad. Se plantea con el funcionario la posibilidad de gestionar chicos de PP para acompañar el centro de servicios en algunos momentos y realizar asesorías con los usuarios, además acompañar el punto.', 'Ninguno', 'Centro_de_Servicios_S_C_Empalme_Funcionario.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 567, 23, '2015-04-27 13:42:34', '0000-00-00 00:00:00'),
(525, '2015-04-22', 'Empalme', 'Empalme y planeación de actividades para 2015.', 'Se realizó una reunión de empalme y planeación con el dinamizador del telecentro, con el fin de detectar las principales necesidades de los usuarios del lugar, el dinamizador expresa que partiendo de las necesidades de la población, sería pertinente realizar una charla de dispositivos móviles con un grupo de adultos mayores, trabajar narrativas y navegar sin naufragar con 2 grupos de niños de una corporación que se llama "Gente de Corazón". ', 'Quedó como compromiso programar las charlas y el taller.', 'Telecentro_Los_Tanques_Empalme_y_planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 457, 43, '2015-04-27 13:49:36', '0000-00-00 00:00:00'),
(526, '2015-04-15', 'Gestión con aliados', 'Gestión JAL', 'Se llevó a cabo reunión con Secretaria de la JAL de San Crsitóbal con el propósito de gestionar la presencia de chicos y chicas de PP para acompañar algunos de los sitios que acompaña el programa en el corregimiento, además de esto se realizó asesoría en el manejo de dispositivo móvil y se conversó la importancia de generar vínculos estratégicos con los jóvenes para este tipo acompañamientos en su territorio.', 'La foto de la reunión se publicará en redes sociales de la JAL para hacer difusión y de este modo captar la atención de aquellos jóvenes que aun faltan por pagar su labor social.', 'IMG_20150415_114250404.jpg', 'IMG_20150415_120407858.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 567, 23, '2015-04-27 13:50:49', '0000-00-00 00:00:00'),
(527, '2015-04-16', 'Seguimiento', 'Visita de Seguimiento', 'Se realizó visita de seguimiento dado que se había convocado reunión con el rector; sin embargo con motivo de una marcha docente se interrumpió dicha reunión; por tanto con la secretaria se acordaron algunos puntos necesarios para un próximo encuentro. El aula de informática esta lista para aperturar el proceso con padres', 'Esperar hasta luego del 22 de Abril que se llevará a cabo el paro Nacional docente para definir acuerdos para convocar reunión con estudiantes alfabetizadores que liderarán el aula abierta. Convocar para dicha reunión al docente de informática. Reagendar la charla de NSN. ', 'IMG_20150416_101512923.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 493, 23, '2015-04-27 14:46:08', '0000-00-00 00:00:00'),
(528, '2015-04-21', 'Gestión con aliados', 'Planeación de procesos', 'Se llevó a cabo reunión con Beatriz Atehortúa. Inicialmente ella comaparte un breve diagnóstico tanto de la población atendida como del recorrido, premios y  demás actividades realizadas en la biblioteca;  para planear un encuentro en donde se socialice la experiencia tan exitosa que ha realizado  en el tema de discapacidad con otras entidades como el Colegio Mayor, el ITM Y algunas I.E . Se plantea dicho encuentro para la tercera semana de mayo. Se plantea un taller práctico de más o menos 3 horas donde se convoquen chicos y chicas con diferentes tipos de discapacidades para que los funcionarios puedan observar de manera práctica los contenidos abordados.', 'Enviar información previa vía correo electrónico con antelación.', 'Biblioteca_Fdo_Gomez_Martinez_Planeacion_Sensibilizacion_Disc.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 268, 23, '2015-04-27 15:19:01', '0000-00-00 00:00:00');
INSERT INTO `meetings` (`id_meeting`, `meeting_date`, `meeting_type`, `meeting_title`, `meeting_description`, `meeting_commitments`, `meeting_adjunct`, `meeting_adjunct1`, `meeting_adjunct2`, `dir`, `meeting_type_id`, `site_id`, `user_id`, `creation_date`, `modification_date`) VALUES
(529, '2015-04-21', 'Gestión con aliados', 'Planeación de procesos', 'Se planearon fechas para las charlas propuestas en la primera reunión y se descartó la posibilidad de reanudar el aula abierta en al I.E . El rector dice ya haber cumplido con esa labor años anteriores y no querer hacerlo de nuevo por que "las condiciones no se prestan" refiriéndose al sistema en la nube. Por tanto se acuerda  12 de mayo: NSN con grado Noveno y 16 de Julio GEL con grado once. Para estas charlas se contará con la presencia del orientador de grupo además del psicólogo en tanto serán los encargados de replicarlas con el resto de los grados.', 'Dictar las charlas asignadas y pasar los contenidos', 'Fe_y_alegria_aures_Planeacion_de_procesos.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 407, 23, '2015-04-27 15:30:13', '0000-00-00 00:00:00'),
(530, '2015-04-22', 'Gestión con aliados', 'Gestión Aliados', 'Se conversó con una de las personas que trabajan en  la ludoteca casa San Martín y realizó un recuento de la población perteneciente al sector, sus características, dinámicas, las actividades frecuentes y cómo se convocan al rededor del lugar. Los programas que funcionan allí y los datos de algunas personas encargadas. Se plantean posibles acompañamientos, se presentan las dos nuevas gestoras Tic que en algunas ocasiones estarán en el lugar y se hace recorrido por el sector', 'Ninguno.', 'Ludoteca_Casa_San_Martin_Empalme_y_conocimiento_S_P.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 494, 23, '2015-04-27 15:43:45', '0000-00-00 00:00:00'),
(531, '2015-04-22', 'Empalme', 'Empalme y caracterización ', 'Se visitó la UPSS Nuevo Occidente. El funcionario sabe de la instalación de la red y de los equipos, se instalarán en total 6. Se observó el lugar y el contexto, se recorrió con dos de las gestoras Tic que lo acompañarán y se estableció contacto con algunas personas del lugar.', 'Ninguno', 'UPSS_Nuevo_Occidente_Empalme_y_recorrido.jpg', NULL, 'IMG_20150422_100603451.jpg', 'uploads/meeting/meeting_adjunct', 0, 496, 23, '2015-04-27 15:49:03', '0000-00-00 00:00:00'),
(532, '2015-04-20', 'Seguimiento', 'Gestión de procesos', 'Se realizó una reunión con el rector de la IE y la docente de informatica encargada del aula abierta para conversar sobre los procesos de formación que se están dando y la posible articulación del programa, indicando cual es la oferta que tenemos para ellos.', 'Realizar una nueva reunión para programar actividades en la Institución.', 'IE_Fe_y_Alegria_El_Limonar_Reunion_Programacion_de_charlas.jpg', 'IE_Fe_y_Alegria_El_Limonar_Seguimiento_Aula_Abierta.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 340, 15, '2015-04-29 08:52:34', '0000-00-00 00:00:00'),
(533, '2015-04-22', 'Seguimiento', 'Gestión de procesos', 'Se realizó una reunión con el coordinador de convivencia de la jornada de la mañana para conversar de los procesos de formación que se iniciaran en la IE.', 'Programar una nueva reunión después de que se defina el paro, para programar otras charlas en la IE.', 'IE_San_Antonio_de_Prado_Programacion_de_charlas.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 130, 15, '2015-04-29 09:05:06', '0000-00-00 00:00:00'),
(534, '2015-04-22', 'Seguimiento', 'Kit de inclusión y Procesos de formación', 'Se realizó una reunión con el coordinador de convivencia para programar actividades en la IE con padres de familia y estudiantes.', 'Se hará una charla de Navegar sin Naufragar con padres de familia.', 'IE_San_Antonio_de_Prado_Sede_Carlos_Betancur_Gestion_de_procesos.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 140, 15, '2015-04-29 10:13:41', '0000-00-00 00:00:00'),
(535, '2015-04-22', 'Seguimiento', 'Gestión de procesos', 'Se realizó una reunión con los dos encargados del telecentro, donde se programó una sesión de fotografía con un grupo de alfabetización digital que ellos tienen, la idea es hacer un piloto para luego realizar un taller completo.', 'Taller corto de Narrativas digitales para el 13 de mayo', 'Telecentro_San_Antonio_de_Prado_Programacion_de_sesion_de_narrativas_digitales.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 210, 15, '2015-04-29 10:40:25', '0000-00-00 00:00:00'),
(536, '2015-04-22', 'Seguimiento', 'Procesos de formación', 'Se realizó una reunión con el coordinador de la Biblioteca para conversar acerca de los procesos de formación que se han dictado en el sitio, además de programar nuevos procesos con ellos.', 'Realizar otra reunión para programar procesos.', 'Biblioteca_Filial_San_Antonio_de_Prado_Gestion_de_procesos.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 195, 15, '2015-04-29 10:50:13', '0000-00-00 00:00:00'),
(537, '2015-04-23', 'Seguimiento', 'Gestión de procesos', 'Reunión con la dinamizadora del telecentro para programar algunas charlas y procesos de formación con la comunidad.', 'Charla dispositivos móviles, agendar nueva reunión para programar otros procesos.', 'Telecentro_Belen_Zafra_Reunion_Gestion_de_procesos.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 454, 15, '2015-04-29 11:01:00', '0000-00-00 00:00:00'),
(538, '2015-04-24', 'Seguimiento', 'Procesos de formación', 'Se realizó una reunión con la secretaría de la Unidad Integral 6 de Belén, con la idea de iniciar convocatoria para procesos de Alfabetización digital.', 'Se iniciara convocatoria para procesos de formación.', 'Unidad_Integral_6_de_Belen_Reunion_Gestion_de_procesos.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 362, 15, '2015-04-29 11:04:57', '0000-00-00 00:00:00'),
(539, '2015-04-15', 'Empalme', 'Reunión de empalme y nuevos procesos 2015 ', 'Se hizo la primera reunión de empalme del proceso anterior con el fin de conocer los compromisos previamente establecidos con la Institución educativa, conocer el contacto enlace y planear los procesos nuevos para el año 2015. \r\nEl año anterior se trabajó en el aula abierta con adultos mayores, para el año lectivo se pretende iniciar el acompañamiento con la comunidad educativa de primaria y secundaria. \r\nPara el segundo semestre: Procesos con bachillerato y acompañamiento y capacitación al personero escolar para dar charlas de Gobierno en línea y navegar sin naufragar para jóvenes. \r\nEl profesor Diego, cuenta con un grupo de jóvenes del grado noveno con quienes viene trabajando en animación 3D y stopmotion que puede ser un referente para iniciar un laboratorio audiovisual en dicho colegio. ', 'Agendar charlas de navegar sin naufragar para los estudiantes de los grados primaria y capacitación a la planta docente. ', NULL, NULL, NULL, '', 0, 251, 41, '2015-04-29 11:07:37', '2015-04-29 16:54:39'),
(540, '2015-04-15', 'Empalme', 'Empalme procesos anteriores y planeación 2015', 'Empalme con dinamizador del telecentro para retomar el proceso anterior y darle seguimiento a los compromisos previamente establecidos con este sitio. Conocimiento y contacto de la nueva gestora en Cultura Digital. ', 'Retomar el taller de narrativas digitales con el grupo de niños con el que actualmente trabaja la dinamizadora. ', 'IMG_6513.JPG', 'IMG_6517.JPG', NULL, 'uploads/meeting/meeting_adjunct', 0, 197, 41, '2015-04-29 12:05:03', '0000-00-00 00:00:00'),
(541, '2015-04-16', 'Empalme', 'Empalme y nuevos procesos 2015 ', 'En esta reunión se presentó la nueva persona de cultura digital que acompañará el proceso y a la par se hizo empalme con la anterior gestora Johana Higuita sobre los procesos anteriores y compromisos pendientes. \r\nSe planearon las actividades para este año y el acompañamiento de un Gestor Tic para los nuevos procesos de web 2.0', 'Inicio de curso de web 2.0 acompañamiento de gestora tic Daniela Puerta para el 5 de mayo en las horas de la tarde. ', 'IMG_6580.JPG', 'IMG_6573.JPG', NULL, 'uploads/meeting/meeting_adjunct', 0, 179, 41, '2015-04-29 14:36:14', '0000-00-00 00:00:00'),
(542, '2015-04-28', 'Seguimiento', 'Planeación de actividades.', 'Se realizó una reunión para programar actividades con personas en situación de discapacidad y con niños en las "vacaciones creativas". Se va a realizar taller de narrativas dirigido a personas en situación de discapacidad y una jornada de creación audiovisual infantil en la semana de vacaciones de mitad de año.', ' Quedó como compromiso construir las actividades para la jornada de creación infantil. ', 'Parque_Biblioteca_Guayabal_Reunion_de_seguimiento_y_planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 192, 43, '2015-04-29 15:28:29', '0000-00-00 00:00:00'),
(543, '2015-04-14', 'Empalme', 'Reunión de empalme', 'Reunión con uno de los funcionarios del CEDEZO, quien informa el cambio de coordinador y la realización de dos cursos de emprendedores en el parque biblioteca. Le parece pertinente planificar procesos de formación con el programa después de mitad de año. \r\n', 'Compromiso. Reunión con el nuevo coordinador para programar actividades.', 'CEDEZO_La_Ladera_empalme_1.jpg', 'CEDEZO_La_Ladera_empalme_2.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 170, 20, '2015-04-29 16:07:48', '0000-00-00 00:00:00'),
(544, '2015-04-14', 'Seguimiento', 'Empalme y planeación', 'Reunión de planeación con la profesora enlace y el coordinador académico para definir la intervención del programa MCI en la institución, se concreta la realización de GEL para todos los estudiantes del grado 11° . Están realizando aula abierta abren su institución para la formación de adultos y con el programa "la U en el barrio" del ITM con la tecnología en administración. \r\n', 'Compromiso: realizar una visita para caracterizar la institución como posible beneficiaria del kit de inclusión digital. Agendar reunión con la presencia de la profesional de la UAI', 'Federico_Ozanam_planificacion_1.jpg', 'Federico_Ozanam_planificacion_3.jpg', 'Federico_Ozanam_planificacion_2.jpg', 'uploads/meeting/meeting_adjunct', 0, 303, 20, '2015-04-29 16:30:54', '0000-00-00 00:00:00'),
(545, '2015-04-14', 'Empalme', 'Reunión de empalme y planeación', 'Reunión de empalme y planificación de actividades con el rector y la coordinadora de la institución. Se acuerda realizar dos talleres de GEL para estudiantes del grado 11° y  charla de NSN para padres de familia.', 'Confirmación de las actividades', 'IE_Villa_Turbay_planificacion_2.jpg', 'IE_Villa_Turbay_planificacion_1.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 327, 20, '2015-04-29 16:53:34', '0000-00-00 00:00:00'),
(546, '2015-04-16', 'Empalme', 'Reunión de empalme y planeación', 'Reunión de empalme y planificación de actividades con el dinamizador del telecentro. Se acuerda realizar taller de GEL para el grupo de avanzada, charla de NSN para adultos. \r\n', 'Compromiso: programar en junio narrativas digitales sonoras para niños. y narrativas digitales fotografía', 'Telecentro_La_Sierra_planificacion_2.jpg', 'Telecentro_La_Sierra_planificacion_1.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 470, 20, '2015-04-29 17:09:10', '0000-00-00 00:00:00'),
(547, '2015-04-15', 'Empalme', 'Reunión de empalme y planeación', 'Reunión de empalme con la funcionaria encargada del CAM. Indagada por la repotencialización del punto de navegación. ', 'La gestora se compromete averiguar sobre este asunto con el área de conectividad, además, de mirar la posibilidad de la presencia de un gestor TIC en el punto de navegación para la atención al público.', 'CAM_empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 535, 20, '2015-04-29 17:16:58', '0000-00-00 00:00:00'),
(548, '2015-04-24', 'Seguimiento', 'Gestión de activación Zona WIFI', 'Se realizó una reunión con el gestor administrativo del desarrollo integral Belén Zafra en donde se pudo programar una activación en el sitio.', 'Activación Zona WIFI el próximo 9 de mayo.', 'Desarrollo_Integral_Beleb_Zafra_Reunion_programacion_de_activacion_WIFI.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 559, 15, '2015-04-30 07:52:00', '0000-00-00 00:00:00'),
(549, '2015-04-29', 'Seguimiento', 'Aula Abierta y procesos de formación', 'Se realizó una reunión con la docente Mary Luz Velez quién lidera los cursos de alfabetización digital con la comunidad en el aula abierta de la IE, se programaron diferentes actividades con los padres de familia y con los estudiantes, además se logro conversar con algunas de las madres que están en los cursos quiénes dicen que se sienten muy contentas en el curso.', 'Se programaron diferentes actividades con los padres de familia y con los estudiantes.', 'IE_Antonio_Ricaurte_Reunion_Aula_abierta.jpg', 'IE_Antonio_Ricaurte_Seguimiento_Aula_Abierta.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 328, 15, '2015-04-30 08:43:38', '0000-00-00 00:00:00'),
(550, '2015-04-16', 'Seguimiento', 'Planeación de activación ', 'Reunión entre la líder de apropiación y el tesorero municipal, este último se encuentra interesado en la activación del punto. Se plantea  la formación de los tres jóvenes por la convivencia y una actividad de activación del punto de navegación. ', 'Formación de jóvenes por la convivencia en el registro al portal de ciudad y algunos trámites en línea. Activación del punto de navegación', 'Tesoria_municipal_planificacion_1.jpg', 'Tesoria_municipal_planificacion_2.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 437, 20, '2015-04-30 10:26:15', '0000-00-00 00:00:00'),
(551, '2015-04-20', 'Empalme', 'Reunión de empalme y planeación', 'Reunión de empalme y planeación de actividades de acompañamiento del programa. Se planifican dos charlas de GEL para estudiantes del grado 11° y 4 charlas de NSN para estudiantes de 8° y 9°. Se plantea la posibilidad de realizar el taller de narrativas digitales con estudiantes del grado 5°.\r\n', 'Compromiso: Enviar el contenido de narrativas digitales  a la profesora', NULL, NULL, NULL, '', 0, 304, 20, '2015-04-30 11:37:28', '0000-00-00 00:00:00'),
(552, '2015-04-23', 'Empalme', 'Empalme y Seguimiento al Kit', 'Se visitó el Jardín Infantil para hacer seguimiento de kit de inclusión digital y se estableció contacto tanto con la coordinadora como con la educadora especial. En este momento el kit no se usa por varias razones. Se detectó algo de desconocimiento de su utilidad, además de esto el personal de este año es nuevo y en la población infantil no hay presencia de discapacidades; sin embargo se realizará un breve diagnóstico con la comunidad para identificar posibles necesidades. Además de esto se generó una alianza con la educadora especial para agendar una capacitación con los gestores de cultura Digital en relación a los tipos de discapacidad, estrategias y demás aspectos relevantes ', ' Regresar para conversar sobre hallazgos del diagnóstico con la comunidad y verificar la pertinencia del kit.\r\nAgendar la capacitación para los gestores de cultura Digital', '2015_04_30.jpg', '2015_04_30_1.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 413, 23, '2015-04-30 11:50:39', '0000-00-00 00:00:00'),
(553, '2015-04-28', 'Empalme', 'Empalme y planeación', 'Reunión entre el director de comunicaciones Concejo de Medellín y uno de los comunidadores del programa para generar estragegias de divulgación de la red wifi libre del recinto del Concejo. \r\nToman nota sobre las estrategias para ser implementadas en el lugar.', 'Implementación de estrategias de divulgación por parte del área de contenidos y comunicación pública del programa', 'Recinto_Concejo_municipal_empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 536, 20, '2015-04-30 12:15:14', '0000-00-00 00:00:00'),
(554, '2015-04-22', 'Seguimiento', 'Asesoría en GEL', 'Formación en GEL a dos jóvenes por la convivencia quienes nos acompñaran como gestoras TIC en el punto de navegación de la tesorería municipal. Quedaron muy motivadas frente a los nuevos trámites que conocieron los cuales les servirán para brindar un mejor servicio a los usurarios. ', 'Atención de usuarios en la intervención al día siguiente', 'Tesoreria_municipal_seguimiento_2.jpg', 'Tesoreria_municipal_seguimiento_1.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 437, 20, '2015-04-30 13:09:41', '0000-00-00 00:00:00'),
(555, '2015-04-01', 'Empalme', 'Empalme y gestión de procesos', 'Reunión de empalme y planeación de procesos de formación con la profesional de servicios de información y un auxiliar de la Biblioteca. Confirmación de los datos de los encargados del sitio.', 'Confirmar las fechas de inicio de proceso de formación para los auxiliares de la Biblioteca, a partir de la primera semana de mes de Mayo.', 'Biblioteca_EPM_Empalme.jpg', 'Biblioteca_EPM_Empalme_2.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 163, 40, '2015-04-30 13:19:35', '0000-00-00 00:00:00'),
(556, '2015-04-08', 'Empalme', 'Empalme y gestión de procesos', 'Reunión de empalme y planeación con la Rectora de la Institución y el Maestro de Informática para iniciar procesos de formación con los estudiantes. ', 'Se iniciará charla de Gobierno en Línea con los alumnos de los grados 10° y 11° el día 20 de abril y se programará charla de Navegar sin Naufragar con los alumnos de los grados 4° y 5°. ', 'I_E_Miraflores_Empalme_2.jpg', 'I_E_Miraflores_Empalme_1.jpg', 'I_E_Miraflores_Empalme_3.jpg', 'uploads/meeting/meeting_adjunct', 0, 316, 40, '2015-04-30 13:37:54', '0000-00-00 00:00:00'),
(557, '2015-04-23', 'Empalme', 'Empalme y planeación con Coordinador', 'Se llevó a cabo reunió con la coordinadora de la I.E. Se retomaron las intervenciones del año pasado con el propósito de analizar la pertinencia de las acciones a proponer para el presente año; por lo tanto se tocó el tema del aula abierta en donde se dejó claro la importancia de buscar un chico de pp para gestionar nuevamente el proceso. De parte de  Colegio analizar la posibilidad de contar con alfabetizadores a modo de generar un proceso más sostenible. Se habló además del proceso con la escuela de padres para generar intervenciones respecto al acompañamiento en temas como el acceso a internet de forma  segura de los chicos y chicas y para esto se brindaron los datos de la persona encargada de este espacio que es la docente Yanet Acevedo.\r\n\r\nPara el mes de Agosto se piensa en realizar GEL con décimos y once.', 'Se propone la creación por parte de la IE DE un comité de navegar sin naufragar liderado por el personero, una persona de apoyo pedagógico y los representantes de cada grupo, desde sexto a noveno de modo que este comité será capacitado en la charla y será encargado de replicarla en todos los grupos además de generar otras acciones que apoyen la promoción del uso seguro y responsable del internet a modo de campaña preventiva. LLamar la segunda semana de mayo para evaluar el estado de la I.E por motivos del Paro Docente.', '1429798782617.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 417, 23, '2015-04-30 14:31:49', '0000-00-00 00:00:00'),
(558, '2015-04-09', 'Empalme', 'Empalme y gestión de procesos', 'Reunión con el profesor Hamer para gestionar procesos de formación y confirmar aula abierta. ', 'Se programa charla de Navegar Sin Naufragar para adultos el día martes 14 de abril a las 7:00 pm hasta las 9:00 pm.', 'I_E_Luis_Carlos_Galan_Sarmiento_Sede_Nino_Jesus_de_Praga_Empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 313, 40, '2015-04-30 16:13:57', '0000-00-00 00:00:00'),
(559, '2015-04-15', 'Empalme', 'Empalme y gestión de procesos', 'Reunión con la Coordinadora Marta Cecilia García para gestionar procesos de formación para los funcionarios y recolección de indicadores del sitio.', 'Queda pendiente consultar las necesidades del los funcionarios en capacitación, para evaluar los procesos para la intervención.', 'Archivo_Historico_de_Medellin_Empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 292, 40, '2015-04-30 16:28:48', '0000-00-00 00:00:00'),
(560, '2015-04-15', 'Empalme', 'Empalme y gestión de procesos', 'Reunión de empalme con la Inspectora Luz Mary Toro y la Contratista de descongestión para gestión de proceso de formación para los funcionarios del sitio. ', 'Queda pendiente confirmar el proceso y la fecha.', 'Inspeccion_10B_Empalme_2.jpg', 'Inspeccion_10B_Empalme.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 306, 40, '2015-04-30 16:47:31', '0000-00-00 00:00:00'),
(561, '2015-04-23', 'Gestión con aliados', 'Gestión con Aliados', 'Se llevó a cabo reunión con la señora Martha Aldana, trabajadora Social del programa Jóvenes por la convivencia con el propósito de gestionar procesos de formación para 60 chicos y chicas pertenecientes al programa. Inicialmente se hizo un recuento del programa, sus particularidades y tiempos. De este encuentro surge como necesidad primaria realizar la charla de GEL en un primer momento con todos y todas. Algunos se trasfieren a zona 4 por pertenecer a belén. Se sugiere adicionar información del ICFES dado  que algunos chicos y chicas no los han presentado y tienen dudas respecto de fechas, formas, páginas, entre otras cosas', 'Se programan dos charlas de GEL estudiantes para jueves 18 de junio y 23 de junio a las 2 p.m cada una.', '1429821430347.jpg', 'IMG_20150423_145736867.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 187, 23, '2015-04-30 21:53:11', '0000-00-00 00:00:00'),
(562, '2015-04-06', 'Seguimiento', 'Reunión con Andrea Sierra', 'Reunión con técnica de Cultura Digital para hablar de los procesos que se llevarán a cabo durante este año.', 'Organizar el cronograma para dictar entre otras cursos de edición de video y stop motion para los asistentes al Parquebiblioteca', 'Parque_Biblioteca_12_de_Octubre_Reunion_de_planeacion.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 453, 42, '2015-05-02 19:05:24', '2015-05-03 00:08:27'),
(563, '2015-04-08', 'Empalme', 'Reunión de empalme con luis Arias', 'Reunión de planeación para lo que se hará en el telecentro este año.', 'Se realizarán cursos de AD y GEL y charlas de NSN para los asistentes al telecentro ', 'Telecentro_Plaza_Colon_Reunion.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 200, 42, '2015-05-02 19:29:45', '0000-00-00 00:00:00'),
(564, '2015-04-13', 'Empalme', 'Reunión con Mario Ceballos', 'Reunión de empalme con el coordinador de la biblioteca para planear que procesos se llevarán a cabo en el año', 'tendremos charlas de Gobierno en Línea y Navegar sin Naufragar, además de apoyar los cursos de Alfabetización Digital', 'Biblioteca_Tren_de_Papel_Reunion_de_Planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 182, 42, '2015-05-02 19:59:58', '0000-00-00 00:00:00'),
(565, '2015-04-16', 'Empalme', 'Reunión con Ibsen Cossio', 'Reunión para planear que se hará este año en la institución', 'se harán charlas de Gobierno en Línea para jóvenes de los grados superiores y de Navegar sin Naufragar para los chicos de primaria', 'Institucion_Educativa_Pedro_Claver_Aguirre_Reunion_de_Planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 232, 42, '2015-05-02 20:10:11', '0000-00-00 00:00:00'),
(566, '2015-04-17', 'Empalme', 'Reunión con Cristian Álvarez', 'Reunión con el coordinador de la institución para planear los procesos del año', 'Hacer charlas de Navegar Sin Naufragar y Gobierno en Línea para Jóvenes', 'I_E_Tricentenario_Reunion_de_Planeacion.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 228, 42, '2015-05-02 20:16:17', '0000-00-00 00:00:00'),
(567, '2015-04-17', 'Empalme', 'Reunión con Rubén Patiño', 'Reunión para hacer planeación de lo que se hará este año en la institución ', 'Haremos charlas y cursos en la institución', 'I_E_Diego_Echavarria_Misas_Reunion_de_Planeacion-0.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 225, 42, '2015-05-02 20:18:27', '0000-00-00 00:00:00'),
(568, '2015-04-17', 'Empalme', 'Reunión con Cielo Vélez', 'Reunión para hacer seguimiento del Kit de inlusión', 'Planear una reunión con gente que les enseñe bien el manejo, para apropiarse de dicho kit y poder manejarlo mejor en la institución', 'Institucion_Educativa_Diego_Echavarria_Misas_Seguimiento_Kit_de_Inclusion.jpg', 'Institucion_Educativa_Diego_Echavarria_Misas_Seguimiento_Kit_de_Inclusion_2.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 225, 42, '2015-05-02 20:22:23', '0000-00-00 00:00:00'),
(569, '2015-04-17', 'Gestión con aliados', 'Reunión con ediles de la comuna 7', 'Nos reunimos para hablar de la estrategia de Gestores TIC ', 'Una próxima reunión para hablar con los demás ediles', 'Institucion_Educativa_Villa_Flora_reunion_con_JAL_7.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 289, 42, '2015-05-02 20:32:57', '0000-00-00 00:00:00'),
(570, '2015-04-22', 'Empalme', 'Reunión con Daniel Gaviria', 'Reunión para hacer el cronograma de Aulab', 'vamos a trabajar en conjunto con las personas de la biblioteca entonces se quedó de dividir los temas para darlos por módulos', 'Parquebiblioteca_La_Quintana_Reunion_de_planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 184, 42, '2015-05-02 20:44:39', '0000-00-00 00:00:00'),
(571, '2015-04-23', 'Empalme', 'Reunión con Luis Lizón', 'Reunión para hablar del proceso del Kit de Inclusión en la institución.', 'Organizar una reunión con personas de varias instituciones para que vayan a ver el proceso que lleva el ITM con su kit.', 'Instituto_Tecnico_Metropolitano_Reunion_Planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 412, 42, '2015-05-03 08:17:06', '0000-00-00 00:00:00'),
(572, '2015-04-23', 'Empalme', 'Reunión con Bienestar', 'Reunión para planear la intervención del programa en las jornadas de bienestar de la institución, apoyando en el tema de Gobierno en Línea', 'El señor Ramón quedó de enviar un correo con las fechas donde podríamos realizar la intervención', 'Instituto_Tecnico_Metropolitano_Reunion_Planeacion_Bienestar.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 412, 42, '2015-05-03 08:21:30', '0000-00-00 00:00:00'),
(573, '2015-04-06', 'Empalme', 'Planeación 2015', 'El encuentro se realiza con Flor Yolanda dinamizadora del Telecento Doce de Octubre, se dialoga frente a los procesos que se han llevado a cabo en el espacio y se acuerda realizar un taller de GEL con la comunidad, con miras a potenciar el uso adecuado de los trámites en los asistentes al espacio. ', 'Iniciar el curso de Gobierno con la comunidad, los funcionarios del telecentro son los encargados de realizar la convocatoria de los participantes. ', 'Telecentro_Doce_de_Octubre_Empalme_y_planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 480, 24, '2015-05-03 12:37:22', '0000-00-00 00:00:00'),
(574, '2015-04-06', 'Empalme', 'Planeación 2015', 'Las dos entidades presentan el panorama de las actividades a realizar durante el año, se propone en este primer semestre trabajar con edición de video, además de dictar conjuntamente un curso de Alfabetización digital a madres comunitarias de los Buen Comienzo de la zona. ', 'El día jueves 9 de abril nos reuniremos con las propuestas que desde cada una de las entidades se tendrán para trabajar con está población. ', 'PB_Doce_de_Octubre_Empalme_y_planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 183, 24, '2015-05-03 12:46:07', '0000-00-00 00:00:00'),
(575, '2015-04-28', 'Gestión con aliados', 'Planeación de actividades', 'Se realizó una reunión con el Coordinador de la IE con el fin de agendar actividades de acuerdo a las necesidades propias de la IE, El coordinador manifestó estar interesado en que se desarrollara dentro de la institución un taller de narrativas con fotografía.  La idea es realizarlo a finales de mayo con población sorda de la IE. El coordinador realizará la gestión de un Modelo de lenguaje para mejorar la comunicación con las personas sordas que asistan a la taller. ', 'Se espera realizar la primera sesión apenas se retomen las clases (en el momento la IE se encuentra en paro de maestros) por esa razón la fecha es tentativa para finales de mayo. ', 'IE_Francisco_Luis_Hernandez_Reunion_planeacion.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 160, 21, '2015-05-03 13:24:52', '0000-00-00 00:00:00'),
(576, '2015-04-30', 'Seguimiento', 'Procesos de formación', 'Se realizó una reunión con los funcionarios de la biblioteca para conversar acerca de los posibles procesos de formación que se pueden dictar con la comunidad.', 'Se quedo con el compromiso de iniciar un taller de narrativas digitales con los jóvenes que asisten los sábados a la biblioteca.', 'Biblioteca_Publica_El_Limonar_Reunion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 196, 15, '2015-05-03 13:28:10', '0000-00-00 00:00:00'),
(577, '2015-04-09', 'Seguimiento', 'Planeación Curso', 'En está ocasión cada uno de los programas plantea las sesiones que deberá llevar el curso de Alfabetización Digital con las madres comunitarias del Buen Comienzo, para esto cada uno de los participantes de la reunión propone ejercicios para llevar a cabo este proceso. ', 'El curso iniciará el día 28 de abril a las 6:00 p.m. en las instalaciones del PB, este se hace responsable de la convocatoria de las personas. ', 'PB_Doce_de_Octubre_Seguimiento_y_planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 183, 24, '2015-05-03 13:33:23', '0000-00-00 00:00:00'),
(578, '2015-04-28', 'Empalme', 'Empalme y planeación', 'Se realizó una reunión con el dinamizador del Telecentro con el fin de mirar las necesidades de la población que se acerca al Telecentro en el barrio Sta Cecilia, el dinamizador trabaja en su mayoría con adultos mayores, por esa razón se contempló la idea de realizar un taller de web 2.0 con estas personas cuando ya hallan avanzado en el curso que ven en la actualidad con el dinamizador. También se hizo evidente realizar un trabajo con los y las  jovenes del Telecentro ya ue son uno de los públicos más alejados de las dinámicas que se realizan en el Telecentro. La idea es buscar una alianza con la IE más cercana para invitar a este público a participar de varias actividades. ', 'Se quiere realizar un taller de Gobierno en línea con funcionarios y funcionarias de los Telecentro de la zona, la idea es realizarlo para finales de mayo. La fecha está por confirmar. ', 'Telecentro_Sta_Cecilia_2_Reunion_de_planeacion.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 519, 21, '2015-05-03 13:38:10', '0000-00-00 00:00:00'),
(579, '2015-04-28', 'Gestión con aliados', 'Reunión de gestión y empalme', 'En la reunión se conversó sobre la necesidad de que en la IE se realicen acompañamientos con los y las jóvenes, ya que son el público que más necesidades presenta dentro de la IE. Así mismo el rector manifestó un intereses en que el acompañamiento del programa esté ligado a reforzar las habilidades de los y las estudiantes de su institución, se mencionó la posibilidad de realizar un preicfes y un preuniversitario para brindar más posibilidad de acceder a la educación superior de estas personas.', 'Se realizará inicialmente un apoyo a la construcción del periódico barrial digital que será construído por los y las estudiantes de 10 y 11 grado de la IE. Se espera comenzar con este proceso el martes 5 de mayo. ', 'IE_Pequena_Maria_Reunion_de_Empalme_y_planeacion.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 264, 21, '2015-05-03 13:59:30', '0000-00-00 00:00:00'),
(580, '2015-03-31', 'Seguimiento', 'Planeación de actividades ', 'Se realizó una reunión con el coordinador del sitio, debido a que la mayor parte de personas que frecuentan la casa de la cultura son adultos y adultas mayores se manifesta la necesidad de realizar un trabajo que involucre a este público. Se decidió continuar con la estrategia implementada el año pasado de narrativas digitales fotografía y trabajar el documental con el fin de constribuir a hacer memoria de barrio. ', 'La fecha de inicio del taller se programó para el 17 de mayo a las 3 pm.', NULL, NULL, NULL, '', 0, 248, 21, '2015-05-03 14:12:33', '0000-00-00 00:00:00'),
(581, '2015-04-21', 'Seguimiento', 'Planeación de actividades', 'Se realizó una reunión con el dinamizador del telecentro para determinar el acompañamiento del Programa en el sitio. El dinamizador manifestó que sería muy enriquecedor para las personas del telecentro recibir formación en web 2.0 ya que son contenidos que generalmente desconocen. La idea es realizar un taller de web 2.0 con las personas que hayan terminado Alfabetización Digital en los cursos del Telecentro.', 'Se espera concretrar la fecha a finales de mayo para iniciar con el taller a principios de junio. ', 'Telecentro_San_Joaquin_Reunion_de_Planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 467, 21, '2015-05-03 14:25:29', '0000-00-00 00:00:00'),
(582, '2015-04-13', 'Seguimiento', 'Planeación Taller sensibilización Kit de inclusión', 'La reunión se llevó a cabo con la técnico de Biblioteca Norma Ibargüen encargada de dinamizar el kit de inclusión digital, la reunión se centró en planear el taller de sensibilización con la comunidad referente al Kit de inclusión digital que se encuentra en el espacio. ', 'La técnico de biblioteca se compromete a realizar la convocatoria de las personas que asistirán a la sensibilización, además de tener a punto la sala de computadores para la actividad.', 'PB_La_Quintana_Planeacion_procesos.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 184, 24, '2015-05-03 14:30:54', '0000-00-00 00:00:00'),
(583, '2015-04-14', 'Empalme', 'Empalme y planeación 2015', 'La coordinadora de la tarde realiza una presentación oficial del coordinador de la Jornada de la mañana, esté se encuentra muy interesado en que las charlas de GEL se dicten a los chicos de los grados décimo y once, además se trabajará con el CLEI con el fin de dar a conocer las ofertas universitarias. ', 'Ninguno', 'IE_Picachito_Empalme_y_planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 420, 24, '2015-05-03 14:55:02', '0000-00-00 00:00:00'),
(584, '2015-04-08', 'Seguimiento', 'Planeación de actividades', 'Se realizó una reunión en la IE sede Marco Fidél Suárez. Se quiere realizar varias charlas de Navegar sin Naufragar en vista de que los niños y niñas de la IE desconocen en buena parte los riegos que pueden ocurrir en Internet. Así mismo se realizará acompañamiento al Kit de inclusión Digital que posee la sede. ', 'Se dictarán varias charlas con los grados 4 y 5. Las charlas están programadas para mediados de mayo. ', 'IE_Pedro_Luis_Villa_Reunion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 149, 21, '2015-05-03 15:08:47', '0000-00-00 00:00:00'),
(585, '2015-04-16', 'Seguimiento', 'Planeación de actividades', 'Se realizó una reunión con la coordinadora del CEDEZO con el fin de mirar cómo será el acompañamiento este año a el sitio. La funcionaria se mostró interesada por la repotenciación del sitio, ya que la sala no cuenta con Internet y ello dificulta que se puedan realizar procesos formativos en el espacio. Se quiere realizar un taller de web 2.0 con las personas del Cedezo. También se conversó sobre las experiencias anteriores con el Programa y se definió que se realizaría una convocatoria entre los tres Cedezos de la zona (Cedezo de Moravia, Manrique y Sto Domingo) para así asegurar que más emprendedores y emprendedoras reciban la formación con el Programa.', 'La funcionaria realizará una reunión zonal con los otros dos Cedezos para mirar los requisitos y convocatoria. ', 'Cedezo_Moravia_Reunion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 166, 21, '2015-05-03 15:18:51', '0000-00-00 00:00:00'),
(586, '2015-04-14', 'Empalme', 'Reunión Planeación con Gestores TIC ', 'La reunión se llevó a cabo con los Gestores TIC que vienen acompañando los procesos en la Biblioteca, se fomentan acuerdos entre los Gestores y la Coordinadora de la Biblioteca. ', 'Iniciar el curso de Narrativas digitales con la comunidad. ', 'Biblioteca_Familia_La_Esperanza_Seguimiento_Gestores_TIC_2.jpg', 'Biblioteca_Familia_La_Esperanza_Seguimiento_Gestores_TIC_1.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 479, 24, '2015-05-03 15:22:51', '0000-00-00 00:00:00'),
(587, '2015-04-15', 'Empalme', 'Planeación 2015', 'Se realiza una reunión donde se plantean las acciones a realizar durante el año. Se espera continuar con el Aula Abierta en un taller de Herramientas Web 2.0 en el primer semestre, con algunos estudiantes se realizará un taller de Narrativas Digitales. ', 'Realizar una reunión con la comunidad para definir los días y horas del taller. Para esto el docente se compromete a realizar la convocatoria. ', 'IE_Gerardo_Valencia_Cano_Empalme_y_planeacion_2.jpg', 'IE_Gerardo_Valencia_Cano_Empalme_y_planeacion_1.jpg', 'IE_Gerardo_Valencia_Cano_Empalme_y_planeacion_3.jpg', 'uploads/meeting/meeting_adjunct', 0, 410, 24, '2015-05-03 15:29:21', '0000-00-00 00:00:00'),
(588, '2015-04-16', 'Empalme', 'Planeación 2015', 'En está reunión se plantean las acciones que se llevarán durante el año, se planea para el primer semestre charlas de GEL y NSN', 'No hay compromisos', 'IE_Camilo_Mora_Carrasquilla_empalme_y_planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 482, 24, '2015-05-03 15:37:45', '0000-00-00 00:00:00'),
(589, '2015-04-20', 'Gestión con aliados', 'Reunión de empalme con aliados', 'La IE Ciudad Don Bosco nos hizo una petición de trabajar con un grupo de chicos desvinculados del conflicto armado, para esto se recurre a una reunión con ellos en la cual se plantea realizar charlas de NSN y GEL para estudiantes para el primer semestre, además de charlas de dispositivos móviles con las personas de servicios generales. ', 'El Gestor trabajará en una propuesta de fechas para presentarla a la IE', 'IE_Aures_Ciudad_Don_Bosco_empalme_y_planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 409, 24, '2015-05-03 16:22:04', '0000-00-00 00:00:00'),
(590, '2015-04-20', 'Empalme', 'Planeación 2015', 'En está reunión se replantea el modelo de Aula Abierta, a partir de esto se busca que los estudiantes que deben alfabetizar sean los encargados de dar los cursos, para esto se es formará y acompañará en el proceso. ', 'El docente elegirá a los estudiantes que participaran en el proceso. ', 'IE_Doce_de_Octubre_empalme_y_planeacion_2.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 274, 24, '2015-05-03 16:28:59', '0000-00-00 00:00:00'),
(591, '2015-04-20', 'Empalme', 'Planeación 2015', 'En está reunión nos sentamos con la docente encargada de dinamizar el Kit de Inclusión digital y con el docente Fran Edilson, realizaremos en el primer semestre Charlas de NSN y GEL, además se realizarán trabajos con la fundación de la cual hace parte la docente Pilar. ', 'Ningún compromiso', 'IE_El_Pedregal_Empalme_y_planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 275, 24, '2015-05-03 16:35:42', '0000-00-00 00:00:00'),
(592, '2015-04-17', 'Empalme', 'Empalme y gestión de procesos', 'Reunión de empalme y planeación de procesos de formación para los estudiantes de la institución con el rector Alfonso Guarín Salazar, se gestiona aula abierta y procesos de formación para la comunidad y estudiantes de alfabetización de la institución como gestores TIC para el aula abierta.', 'Se programa charla Gobierno en Línea con 8 grupos del 11° y charla de Navegar Sin Naufragar para los grupos de 4° y 5° en la Sección de primaria Luis Alfonso Agudelo, con sus respectivas fechas. Queda pendiente programación charla Navegar Sin Naufragar en la Sección de primaria Antonia Santos en los grupos de 4° y 5°. Se gestiona aula abierta para los sábados, queda por confirmar.', 'I_E_Javiera_Londono_Empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 309, 40, '2015-05-03 18:26:19', '0000-00-00 00:00:00'),
(593, '2015-04-28', 'Empalme', 'Reunión de empalme y gestión', 'Reunión de empalme y planeación con la directora del centro educativo para realizar procesos de formación en la institución. ', 'Contactar a la profesora encargada de tecnología para desarrollar talleres de stopmotion con un grupo de niños de grado 5', 'CE_Media_Luna_Reunion_de_empalme_y_planeacion_2.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 432, 17, '2015-05-03 18:36:20', '0000-00-00 00:00:00'),
(594, '2015-04-17', 'Empalme', 'Empalme y gestión de procesos', 'Reunión con la directora del centro para gestionar procesos de formación con el grupo de alfabetizadores que tiene el centro.', 'Queda pendiente dar una fecha para charla de Gobierno en Línea para el grupo de alfabetizadores y hacer convocatoria.', 'Centro_de_Diversidad_Sexual_Empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 300, 40, '2015-05-03 18:37:51', '0000-00-00 00:00:00'),
(595, '2015-04-28', 'Empalme', 'Reunión de empalme y gestión', 'Reunión de empalme y planeación con el coordinador del CEDEZO para realizar procesos de formación con los emprendedores. Se llega a la conclusión de ofrecer un curso de alfabetización digital con adultos que no tienen conocimiento de computadores. ', 'Agendar en conjunto con la biblioteca, un espacio para la capacitación.', 'Cedezo_Santa_Elena_Reunion_de_empalme_y_gestion_1.JPG', 'Cedezo_Santa_Elena_Reunion_de_empalme_y_gestion_2.JPG', NULL, 'uploads/meeting/meeting_adjunct', 0, 173, 17, '2015-05-03 18:49:22', '0000-00-00 00:00:00'),
(596, '2015-04-22', 'Empalme', 'Empalme y gestión de procesos', 'Reunión empalme con el Coordinador Carlos Augusto Carmona para gestionar procesos de formación y asesorías personales para algunos funcionarios del Cedezo. ', 'Queda pendiente hablar con la encargada de la Biblioteca EPM para solicitar préstamo de una sala de sistemas para realizar procesos de formación con la población del Cedezo.', 'CEDEZO_Pasaje_La_Bastilla_Empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 171, 40, '2015-05-03 18:51:09', '0000-00-00 00:00:00'),
(597, '2015-04-28', 'Empalme', 'Reunión de empalme y gestión', 'Reunión de empalme y planeación con las docentes del centro educativo para realizar procesos de formación en la institución. Las docentes manifiestan que la comunidad es muy difícil de convocar y participa muy poco de las dinámicas de la institución, por ello se decide desarrollar talleres de stopmotion con un grupo de niños de grado 5', 'Se concretó comenzar el día martes 11 de mayo en la mañana.', 'CE_El_Cerro_Reunion_de_empalme_y_planeacion_1.JPG', 'CE_El_Cerro_Reunion_de_empalme_y_planeacion_2.JPG', 'CE_El_Cerro_Reunion_de_empalme_y_planeacion_3.JPG', 'uploads/meeting/meeting_adjunct', 0, 423, 17, '2015-05-03 19:04:19', '0000-00-00 00:00:00'),
(598, '2015-04-22', 'Empalme', 'Empalme y gestión de procesos', 'Reunión de empalme con la coordinadora de sitio, para conocer las actividades que realizan y conocer las necesidades de la comunidad que frecuenta el sitio.', 'Planeación de asesorías y procesos de formación para la formación de la comunidad.', 'Centro_de_Informacion_e_Investigacion_Ambiental_Empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 294, 40, '2015-05-03 19:26:51', '0000-00-00 00:00:00'),
(599, '2015-04-27', 'Empalme', 'Empalme y gestión de procesos', 'Reunión con Liboria y Horasio, profesores de Informática de la Institución Educativa Madre Laura para gestionar procesos de formación. ', 'Se programa Charla de Gobierno en Línea para los estudiantes del grado 11 y aula abierta para padres de familia. ', 'I_E_Madre_Laura_Empalme_1.jpg', 'I_E_Madre_Laura_Empalme_2.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 324, 40, '2015-05-03 19:45:41', '0000-00-00 00:00:00'),
(600, '2015-04-28', 'Empalme', 'Empalme y gestión de procesos', 'Reunión de empalme con Juan Díaz Londoño, rector de la institución, para gestionar procesos de formaciín para los estudiantes y para la comunidad en aula abierta.', 'Se programan charlas de GEL para los estudiantes de 11° y charla de NSN para los estudiantes de 4° y 5°. Se plantea proceso de formación para la comunidad en aula abierta.', 'I_E_Arzobispo_Tulio_Botero_Salazar_Empalme.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 422, 40, '2015-05-03 19:55:23', '0000-00-00 00:00:00'),
(601, '2015-04-29', 'Empalme', 'Empalme y gestión de procesos', 'Reunión de empalme para conocer los procesos que tienen en el sitio y seguimiento al uso del punto de navegación.', ' Se plantea la necesidad de que se realice el registro de uso.', 'Escuela_del_Maestro_Empalme_1.jpg', 'Escuela_del_Maestro_Empalme_2.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 302, 40, '2015-05-03 20:05:40', '0000-00-00 00:00:00'),
(602, '2015-04-29', 'Gestión con aliados', 'Reunión Banco de la República de Medellín', 'Reunión de planeación de procesos de formación para los funcionarios del Banco.', 'Agendar charla de Gobierno en Línea.', 'Parque_Berrio_Banco_de_la_Republica_Gestion_con_Aliados.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 538, 40, '2015-05-03 20:27:39', '0000-00-00 00:00:00'),
(603, '2015-04-22', 'Empalme', 'Empalme y planeación 2015', 'Reunión de empalme y planeación, en esta se tratan temas tales como la conexión que se viene ejecutando en el momento en el TAL, puesto que en este espacio habrá punto de navegación y la conexión del parque de Pedregal a Internet wifi, se busca generar estrategias de apropiación y buenas prácticas de conexión a estos. Para esto se proponen charlas de GEL para jóvenes y NSN para todos los públicos. ', 'No hay compromisos', 'TAL_y_Casa_de_Cultura_de_Pedregal_Empalme_y_Planeacion_1.jpg', 'TAL_y_Casa_de_Cultura_de_Pedregal_Empalme_y_Planeacion_3.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 486, 24, '2015-05-03 21:12:34', '0000-00-00 00:00:00'),
(604, '2015-04-22', 'Empalme', 'Empalme y planeación 2015', 'La reunión se centro en la necesidad por parte del programa de conocer las fechas de entrega por parte del municipio a la comunidad, pues a la fecha la casa de la cultura del barrio pedregal no se encuentra abierta al público, la funcionaria espera que está sea entregada a mediados de agosto. ', 'Avisar cuando se entregará el espacio y continuar con el contacto entre las partes.', 'TAL_y_Casa_de_Cultura_de_Pedregal_Empalme_y_Planeacion_2.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 487, 24, '2015-05-03 21:46:19', '0000-00-00 00:00:00'),
(605, '2015-04-23', 'Empalme', 'Empalme y planeación 2015', 'Se le cuenta a la coordinadora la decisión de conectar el espacio bajo el modelo de punto de navegación y se espera que pronto se lleve a cabo este proceso, se realizarán algunas reuniones con los funcionarios de este espacio para contarles las estrategias que se implementarán, cuales serán además las responsabilidades por parte de ellos y del programa. ', 'Consolidar un diagnostico por parte de la entidad de los trámites que más se necesitan en el espacio, además se realizarán charlas de NSN para las comunidades que allí habitan. ', 'Centro_de_Salud_San_Camilo_Planeacion_y_empalme.jpg', 'Centro_de_Salud_San_Camilo_Planeacion_y_empalme_2.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 491, 24, '2015-05-03 21:56:08', '0000-00-00 00:00:00'),
(606, '2015-04-27', 'Empalme', 'Empalme y planeación 2015', 'Se busca retomar la planeación instaurada desde el año pasado, donde se plantearon algunas asesorías grupales para funcionarios en GEL y dispositivos móviles. ', 'Se espera generar por parte de la entidad un diagnostico de las personas que necesitan este apoyo. ', 'Casa_de_Justicia_Robledo_empalme_y_planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 271, 24, '2015-05-03 22:13:54', '0000-00-00 00:00:00'),
(607, '2015-04-27', 'Seguimiento', 'Planeación Taller sensibilización Kit de inclusión', 'En está oportunidad nos sentamos a plantear y revisar las herramientas del kit para el taller con personas en situación de discapacidad cognitiva que tendrá lugar el martes 28 de abril.', 'Llegar temprano al aula donde se realizará el taller para dar inicio a las 9 am', 'PB_La_Quintana_Planeacion_actividad_sensibilizacion_Kit.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 184, 24, '2015-05-03 22:17:02', '0000-00-00 00:00:00'),
(608, '2015-04-28', 'Empalme', 'Empalme y planeación 2015', 'Se busca retomar los procesos del año pasado y llegar a acompañar el Aula Abierta que tiene el Equipo Gestor DIGIKON de la IE, para esto se formarán a los docentes que hacen parte de este equipo gestor en herramientas web 2.0 y a las personas que hacen parte del aula abierta en narrativas digitales. ', 'No hay compromisos', 'IE_Alfredo_Cock_Arango_empalme_y_planeacion_1.jpg', 'IE_Alfredo_Cock_Arango_empalme_y_planeacion_2.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 267, 24, '2015-05-03 22:23:19', '0000-00-00 00:00:00'),
(609, '2015-04-30', 'Gestión con aliados', 'Feria de servicios Zonales', 'Planeación feria de servicios Zona 2: Comunas 5, 6 y 7. Se busca que todas las secretarías presenten sus propuestas de impacto en el territorio en una gran feria zonal que tendrá lugar el día 30 de mayo del presente año en el hall del Parque Biblioteca Doce de Octubre. Para esto el programa será el encargado de llegar con asesoría en trámites en línea, charlas de dispositivos móviles y activación de su punto Wifi. ', 'Asistir a la próxima reunión. ', 'Telecentro_Doce_de_Octubre_Gestion_Con_Aliados_1.jpg', 'Telecentro_Doce_de_Octubre_Gestion_Con_Aliados_2.jpg', 'Telecentro_Doce_de_Octubre_Gestion_Con_Aliados_3.jpg', 'uploads/meeting/meeting_adjunct', 0, 480, 24, '2015-05-03 22:34:07', '0000-00-00 00:00:00');
INSERT INTO `meetings` (`id_meeting`, `meeting_date`, `meeting_type`, `meeting_title`, `meeting_description`, `meeting_commitments`, `meeting_adjunct`, `meeting_adjunct1`, `meeting_adjunct2`, `dir`, `meeting_type_id`, `site_id`, `user_id`, `creation_date`, `modification_date`) VALUES
(610, '2015-04-28', 'Seguimiento', 'Seguimiento al KIT de inclusión y planeación', 'Se realizó una reunión con la profesional de biblioteca para identificar el número de estudiantes en situación de discapacidad que tiene la Institución y cuales de estos estudiantes usan el KIT de inclusión digital, la profesional manifestó que la Institución Universitaria cuenta con 3 estudiantes en situación de discapacidad, los cuales usan el KIT de inclusión digital constantemente. Se pensó en la posibilidad de incluir personas externas, que vivan en el sector y que estén en situación de discapacidad para que aprovechen el recurso. \r\nAdemás se habló con un profesional del área de bienestar institucional, con el cual se pensó en la posibilidad de acompañarlos en las jornadas univiersitarias para hacer sensibilización del KIT de inclusión digital y de todo el tema de Gobierno en Línea con los estudiantes.', 'Programar próxima reunión para planear el acompañamiento en las jornadas universitarias. ', 'Institucion_Universitaria_Pascual_Bravo_Seguimiento_al_KIT_de_inclusion_digital.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 411, 43, '2015-05-04 07:31:30', '0000-00-00 00:00:00'),
(611, '2015-04-17', 'Empalme', 'Empalme y acompañamiento 2015', 'Se visitó el sitio y se contactó el gestor administrativo para presentar el nuevo gestor en cultura digital de Medellin Ciudad Inteligente que acompañará el sitio este año. Así mismo se revisó la conexión wifi sin ningún contratiempo, horarios de visitas de público más frecuentes y conectividad de los usuarios. ', 'Enviar información sobre la actividad de activación de los sitios del Estadio ', 'IMG_6346.JPG', 'IMG_6342.JPG', NULL, 'uploads/meeting/meeting_adjunct', 0, 500, 41, '2015-05-04 11:05:46', '0000-00-00 00:00:00'),
(612, '2015-04-17', 'Empalme', 'Empalme y acompañamiento 2015', 'Se visitó el sitio para contactar al encargado del mismo y presentar al gestor en cultura digital de Medellín Ciudad Inteligente, así mismo como la conectividad de los usuarios en las tribunas. \r\nHace falta visibilizar la red wifi porque no hay ninguna publicidad visual acerca de su existencia y uso libre. Sin embargo, los funcionarios del sitio le informan al público que los visita.  ', 'Enviar información de la actividad de activación de sitios del estadio. ', 'IMG_6331.JPG', 'IMG_6333.JPG', NULL, 'uploads/meeting/meeting_adjunct', 0, 502, 41, '2015-05-04 11:11:26', '0000-00-00 00:00:00'),
(613, '2015-04-17', 'Empalme', 'Empalme y acompañamiento 2015', 'Se visitó el sitio para conocer el administrador encargado y el funcionamiento de la red wifi, así como apropiar a posibles usuarios que se conecten a la red y establecer en conjunto estrategias de apropiación para el público visitante. ', 'Enviar información sobre el evento de activación de sitios del estadio de Medellín Ciudad Inteligente', 'IMG_6334.JPG', 'IMG_6335.JPG', NULL, 'uploads/meeting/meeting_adjunct', 0, 501, 41, '2015-05-04 11:22:28', '0000-00-00 00:00:00'),
(614, '2015-04-30', 'Empalme', 'Empalme y nuevos procesos 2015 ', 'Se visitó el sitio y se hizo empalme de los procesos anteriores y se presentó la nueva gestora en cultura digital que acompañará el año 2015. \r\nUso y apropiación del sitio de gobierno, planeación e ideas en conjunto sobre el tipo de acompañamiento para este año. Así como estrategias para la dinamización dle punto de navegación. \r\nCompromisos y varios. ', 'Acompañamiento para: \r\n1. Jóvenes hacia las narrativas digitales y la apropiación y conexión con los espacios de la casa de la cultura. \r\n2. Adultos mayores alfabetización digital y narrativas. \r\n3. Pensar en un curso de intercambio generacional entre jóvenes y adultos. \r\n4. Apoyo en la cartografía a través de mapas para el grupo de huerteros que acude a la casa de la cultura y tienen la necesidad de conocer y apropiar herramientas de comunicación que les permita visibilizar su trabajo. \r\n', 'empalme_Casa_de_la_Cultura_Los_Alcazares_6.JPG', 'empalme_Casa_de_la_Cultura_Los_Alcazares_3.JPG', 'empalme_Casa_de_la_Cultura_Los_Alcazares_2.JPG', 'uploads/meeting/meeting_adjunct', 0, 243, 41, '2015-05-04 11:56:04', '0000-00-00 00:00:00'),
(615, '2015-04-30', 'Empalme', 'Empalme y planeación 2015', 'Se realiza una revisión de los compromisos que se tienen frente al tema de conectividad en el sitio, se encuentran preocupados porque el espacio se encuentra sin internet hace tiempo y los equipos fueron retirados. Se espera por parte de estos funcionarios que este se haga efectivo en corto tiempo. Se espera realizar charlas de dispositivos móviles y asesorías grupales a los funcionarios en tramites en línea. ', 'No hay compromisos', 'Inspeccion_Doce_de_Octubre_empalme_y_planeacion.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 277, 24, '2015-05-04 12:13:43', '0000-00-00 00:00:00'),
(616, '2015-04-30', 'Empalme', 'Empalme y acompañamiento 2015', 'Se visitó el sitio de gobierno verificando la navegación y el acceso y uso del punto de navegación, se recogieron planillas y se contactó al funcionario para pasarle seguimiento al punto y apropiación de los usuarios del sector que lo visitan, quién además sugiere la importancia de tener un gestor tic que acompañe el punto de navegación. ', 'ninguno. ', 'IMG_7056.JPG', 'IMG_7055.JPG', NULL, 'uploads/meeting/meeting_adjunct', 0, 260, 41, '2015-05-04 13:31:54', '0000-00-00 00:00:00'),
(617, '2015-04-14', 'Gestión con aliados', 'Sensibilización Beneficiarios Fondo EPM', 'Reunión con estudiantes beneficiarios Fondo EPM con el fin de contarles la estrategia de apropiación e invitarlos a cumplir con su labor social en los procesos de ciudad que se tienen con el programa Medellín Ciudad Inteligente. A la actividad llegaron 20 personas. ', 'Llamar a los estudiantes para invitarlos a los cursos y proponerles actividades en campo', 'Gestion_con_Aliados_Estudiantes_Beneficiarios_Fondo_EPM.PDF', 'UPJ_Gestion_con_aliados.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 288, 24, '2015-05-04 16:09:09', '0000-00-00 00:00:00'),
(618, '2015-05-04', 'Empalme', 'Reunión de planeación en la Secretaría de movilida', 'Reunión de empalme con los comunicadores de la Secretaría de Movilidad para llegar a acuerdos de las intervenciones a realizar este año, en especial con respecto al Punto de Navegación', 'Enviar correo con sugerencias para agrandar la oferta de gobierno en línea ', 'Secretaria_de_Movilidad_Reunion_de_planeacion.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 286, 42, '2015-05-06 08:29:58', '0000-00-00 00:00:00'),
(619, '2015-05-04', 'Seguimiento', 'Planeación evento Ruta N.', 'Se realizó una reunión con funcionarios del Parque Biblioteca y Comuna Innova para planear el apoyo por parte del programa en el tema de la apropiación de la plataforma de conectividad urbana. Se planeo una actividad tipo picnic en la cual se hará la apropiación de la plataforma por medio de una charla de dispositivos móviles, con el fin de que los adultos resuelvan las dudas del manejo de sus celulares y a su vez hagan uso de la plataforma. ', 'Quedó como compromiso convocar a los adultos participantes. ', 'Parque_Biblioteca_Guayabal_Reunion_de_planeacion-0.jpg', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 192, 43, '2015-05-08 10:53:10', '0000-00-00 00:00:00'),
(620, '2015-05-06', 'Seguimiento', 'Reunión con Coordinador de la biblioteca', 'Reunión para definir fechas de charlas y cursos', 'Se agendó para el mes de mayo dos charlas, una para el mes de junio y empezar un taller de narrativas en agosto.', 'Biblioteca_Tren_de_Papel_Reunion_de_planeacion.JPG', NULL, NULL, 'uploads/meeting/meeting_adjunct', 0, 182, 42, '2015-05-11 07:54:44', '2015-05-11 13:06:21'),
(621, '2015-05-08', 'Seguimiento', 'Reunion encargados de sitios recolecciòn indicador', 'Reunión de seguimiento de sitio con la encargada y recolección de indicadores', 'Continuar con la capacitación de funcionarios en tramites en línea.', 'Casa_de_Justicia_Villa_del_Socorro_seguimiento_2.jpg', 'Casa_de_Justicia_Villa_del_Socorro_seguimiento.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 242, 10, '2015-05-11 08:48:12', '0000-00-00 00:00:00'),
(622, '2015-05-05', 'Seguimiento', 'Reunión de planeación', 'Reunión para planificar actividades de articulación entre MCI y el PB con personas en situación de discapacidad. Se acuerda participar de la planeación y de la formación de uno de los cursos, porque cuentan con más de 50 inscritos entre cuidadores y personas en situación de discapacidad, se piensa en dividirlo en tres grupos para un mejor acompañamiento. ', 'Participar de la planeación del curso de alfabetización con personas en situación de discapacidad. Utilización de algunos dispositivos del kit de inclusión', 'PB_Leon_de_Greiff_reunion_planeacion_1.jpg', 'PB_Leon_de_Greiff_reunion_planeacion_2.jpg', 'PB_Leon_de_Greiff_reunion_planeacion_3.jpg', 'uploads/meeting/meeting_adjunct', 0, 188, 20, '2015-05-11 17:02:53', '0000-00-00 00:00:00'),
(623, '2015-05-08', 'Empalme', 'Empalme con encargados del sitio', 'Reunión de empalme con encargados del nuevo sitio de navegación y zona wifi', 'Seguimiento continuo para contarle a la comunidad sobre los servicios del sitio.', 'Centro_de_Salud_Vila_del_Socorro_seguimiento_2.jpg', 'Centro_de_Salud_Vila_del_Socorro_seguimiento.jpg', NULL, 'uploads/meeting/meeting_adjunct', 0, 499, 10, '2015-05-12 08:42:57', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `meetings_people`
--

CREATE TABLE IF NOT EXISTS `meetings_people` (
  `meeting_id` int(11) NOT NULL,
  `person_id` bigint(15) NOT NULL,
  KEY `meeting_id` (`meeting_id`,`person_id`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `meetings_people`
--

INSERT INTO `meetings_people` (`meeting_id`, `person_id`) VALUES
(38, 518),
(39, 1),
(45, 100),
(46, 5),
(46, 6),
(47, 101),
(48, 102),
(49, 103),
(57, 103),
(58, 11),
(60, 24),
(64, 102),
(67, 200),
(68, 2),
(69, 3),
(70, 7),
(76, 14),
(77, 108),
(78, 104),
(79, 106),
(80, 107),
(81, 102),
(82, 105),
(83, 109),
(84, 110),
(85, 2),
(86, 1),
(87, 106),
(88, 201),
(89, 3),
(90, 530),
(91, 532),
(92, 202),
(93, 203),
(94, 13),
(94, 513),
(94, 532),
(95, 2),
(95, 11),
(95, 13),
(95, 14),
(95, 105),
(95, 106),
(95, 107),
(95, 108),
(95, 109),
(95, 110),
(95, 200),
(95, 201),
(95, 202),
(95, 203),
(95, 510),
(95, 520),
(95, 530),
(95, 531),
(95, 532),
(96, 15),
(96, 513),
(96, 532),
(97, 530),
(97, 532),
(98, 16),
(99, 513),
(99, 532),
(100, 57),
(100, 513),
(101, 18),
(101, 532),
(102, 11),
(102, 532),
(103, 58),
(103, 513),
(104, 19),
(104, 513),
(105, 20),
(105, 513),
(106, 21),
(106, 22),
(106, 23),
(106, 513),
(107, 54),
(108, 41),
(109, 41),
(109, 42),
(109, 43),
(109, 44),
(109, 45),
(110, 42),
(111, 53),
(111, 54),
(111, 530),
(112, 14),
(113, 2),
(114, 2),
(115, 57),
(116, 57),
(117, 2),
(118, 50),
(119, 1),
(120, 60),
(121, 47),
(122, 47),
(123, 61),
(124, 5),
(125, 55),
(125, 56),
(126, 5),
(127, 46),
(128, 53),
(128, 54),
(130, 48),
(131, 7),
(132, 105),
(133, 7),
(134, 30),
(135, 30),
(137, 24),
(138, 140),
(139, 33),
(140, 62),
(141, 63),
(142, 58),
(143, 35),
(144, 111),
(145, 101),
(146, 112),
(147, 113),
(148, 32),
(148, 37),
(149, 60),
(150, 59),
(151, 130),
(152, 60),
(153, 192),
(155, 161),
(156, 161),
(157, 162),
(158, 162),
(159, 162),
(160, 164),
(161, 164),
(162, 164),
(163, 32),
(163, 37),
(164, 3),
(165, 36),
(165, 37),
(166, 25),
(166, 54),
(167, 531),
(168, 27),
(168, 28),
(169, 105),
(170, 54),
(171, 111),
(172, 29),
(173, 114),
(174, 143),
(175, 3),
(175, 60),
(176, 115),
(177, 61),
(179, 116),
(180, 134),
(181, 27),
(182, 5),
(182, 6),
(184, 116),
(185, 5),
(185, 6),
(187, 18),
(188, 11),
(189, 105),
(190, 42),
(190, 43),
(190, 45),
(191, 131),
(192, 62),
(193, 205),
(194, 33),
(195, 117),
(197, 53),
(197, 54),
(198, 118),
(199, 206),
(200, 143),
(201, 11),
(202, 117),
(203, 206),
(204, 132),
(205, 52),
(206, 63),
(207, 54),
(208, 33),
(209, 207),
(210, 39),
(211, 45),
(212, 80),
(213, 47),
(214, 208),
(216, 65),
(217, 209),
(219, 210),
(221, 5),
(221, 6),
(222, 84),
(222, 85),
(223, 146),
(225, 341),
(226, 57),
(227, 62),
(228, 86),
(228, 87),
(229, 120),
(230, 140),
(231, 166),
(232, 167),
(233, 192),
(234, 121),
(235, 193),
(236, 122),
(237, 194),
(237, 195),
(238, 25),
(238, 54),
(239, 16),
(240, 168),
(241, 170),
(242, 171),
(243, 339),
(244, 172),
(245, 211),
(245, 212),
(246, 334),
(246, 335),
(246, 356),
(247, 341),
(248, 339),
(249, 173),
(250, 173),
(250, 196),
(251, 211),
(251, 212),
(252, 174),
(253, 289),
(254, 62),
(255, 528),
(255, 533),
(256, 245),
(256, 246),
(257, 64),
(258, 245),
(258, 246),
(259, 114),
(260, 55),
(261, 176),
(262, 65),
(263, 178),
(264, 247),
(264, 248),
(265, 180),
(266, 249),
(267, 250),
(268, 348),
(269, 7),
(270, 1),
(271, 66),
(272, 82),
(273, 123),
(274, 27),
(275, 124),
(276, 125),
(277, 86),
(277, 87),
(278, 55),
(279, 213),
(279, 214),
(280, 251),
(281, 215),
(282, 252),
(283, 274),
(284, 245),
(285, 216),
(286, 253),
(287, 254),
(288, 217),
(289, 255),
(289, 256),
(290, 126),
(291, 122),
(292, 121),
(293, 218),
(294, 292),
(295, 103),
(296, 219),
(296, 220),
(297, 88),
(298, 108),
(299, 80),
(299, 89),
(300, 66),
(300, 91),
(301, 66),
(301, 91),
(302, 92),
(303, 93),
(304, 182),
(305, 94),
(306, 33),
(307, 42),
(307, 43),
(308, 291),
(308, 531),
(309, 47),
(310, 107),
(311, 197),
(312, 401),
(313, 198),
(314, 185),
(315, 185),
(316, 106),
(317, 185),
(318, 290),
(319, 185),
(320, 368),
(321, 185),
(322, 244),
(322, 257),
(322, 258),
(322, 259),
(323, 375),
(324, 377),
(325, 381),
(326, 509),
(327, 383),
(328, 386),
(329, 116),
(330, 218),
(330, 313),
(331, 392),
(332, 377),
(333, 297),
(333, 502),
(334, 382),
(335, 115),
(336, 290),
(337, 373),
(338, 242),
(339, 289),
(340, 369),
(341, 243),
(342, 369),
(343, 372),
(344, 376),
(345, 289),
(346, 379),
(347, 378),
(352, 511),
(352, 514),
(353, 519),
(354, 36),
(355, 5),
(356, 1),
(358, 539),
(358, 540),
(359, 542),
(364, 546),
(365, 257),
(366, 552),
(367, 550),
(368, 133),
(369, 133),
(370, 553),
(370, 554),
(373, 555),
(374, 1),
(375, 550),
(376, 47),
(377, 556),
(378, 540),
(379, 557),
(380, 558),
(381, 559),
(382, 560),
(382, 561),
(383, 562),
(383, 563),
(384, 29),
(385, 313),
(386, 341),
(387, 564),
(388, 341),
(389, 102),
(390, 102),
(390, 502),
(391, 524),
(392, 390),
(393, 565),
(394, 542),
(395, 14),
(395, 52),
(396, 5),
(397, 569),
(398, 570),
(399, 540),
(400, 572),
(401, 573),
(402, 400),
(403, 574),
(404, 553),
(404, 554),
(405, 56),
(405, 575),
(406, 576),
(406, 577),
(407, 347),
(408, 578),
(409, 16),
(410, 35),
(411, 580),
(412, 59),
(413, 518),
(414, 558),
(415, 303),
(416, 587),
(417, 257),
(418, 588),
(419, 589),
(420, 32),
(421, 590),
(422, 47),
(423, 591),
(423, 592),
(424, 593),
(425, 339),
(426, 565),
(428, 42),
(429, 595),
(430, 596),
(431, 599),
(432, 101),
(433, 80),
(433, 597),
(434, 594),
(435, 134),
(436, 142),
(437, 176),
(438, 124),
(438, 600),
(439, 601),
(440, 108),
(441, 602),
(442, 603),
(443, 174),
(444, 111),
(444, 604),
(444, 605),
(445, 606),
(445, 607),
(446, 130),
(447, 101),
(447, 598),
(448, 608),
(449, 609),
(450, 610),
(451, 611),
(452, 603),
(453, 603),
(453, 612),
(454, 239),
(455, 613),
(456, 102),
(457, 279),
(458, 277),
(459, 614),
(460, 615),
(461, 616),
(461, 617),
(462, 518),
(463, 271),
(464, 116),
(465, 619),
(466, 620),
(467, 621),
(468, 56),
(468, 575),
(469, 343),
(470, 622),
(471, 624),
(472, 565),
(473, 339),
(474, 379),
(475, 173),
(475, 625),
(476, 601),
(477, 627),
(478, 626),
(479, 628),
(480, 136),
(480, 630),
(481, 629),
(482, 391),
(483, 28),
(483, 632),
(483, 633),
(483, 634),
(483, 635),
(484, 595),
(485, 595),
(486, 389),
(487, 389),
(488, 636),
(489, 637),
(490, 638),
(491, 642),
(492, 639),
(493, 556),
(494, 640),
(495, 641),
(496, 62),
(497, 643),
(498, 5),
(499, 644),
(500, 645),
(501, 646),
(502, 647),
(503, 254),
(504, 56),
(505, 546),
(506, 649),
(507, 182),
(508, 650),
(509, 162),
(510, 109),
(510, 653),
(511, 654),
(512, 602),
(513, 108),
(514, 108),
(515, 655),
(516, 662),
(517, 30),
(518, 663),
(519, 664),
(520, 665),
(521, 656),
(522, 657),
(523, 522),
(524, 658),
(525, 550),
(526, 659),
(527, 639),
(528, 666),
(529, 621),
(530, 660),
(531, 661),
(532, 651),
(532, 652),
(533, 45),
(534, 670),
(535, 47),
(535, 671),
(536, 672),
(537, 538),
(538, 7),
(539, 673),
(540, 674),
(541, 381),
(542, 56),
(543, 675),
(544, 171),
(544, 676),
(545, 677),
(546, 678),
(547, 679),
(548, 680),
(549, 681),
(550, 682),
(551, 172),
(552, 683),
(553, 684),
(554, 686),
(554, 687),
(555, 685),
(556, 183),
(556, 198),
(557, 688),
(558, 123),
(559, 689),
(560, 690),
(561, 668),
(562, 314),
(563, 691),
(564, 616),
(565, 692),
(566, 693),
(567, 254),
(568, 253),
(569, 694),
(569, 695),
(570, 591),
(570, 592),
(571, 175),
(572, 697),
(573, 698),
(574, 314),
(575, 378),
(576, 24),
(576, 92),
(577, 314),
(578, 305),
(579, 699),
(580, 700),
(581, 701),
(582, 302),
(583, 269),
(583, 702),
(584, 704),
(585, 705),
(586, 703),
(587, 289),
(588, 706),
(589, 707),
(590, 709),
(591, 274),
(591, 275),
(592, 126),
(593, 108),
(594, 134),
(595, 401),
(596, 139),
(597, 710),
(598, 132),
(599, 190),
(600, 160),
(601, 170),
(602, 711),
(603, 712),
(604, 712),
(605, 713),
(606, 714),
(607, 302),
(608, 503),
(609, 102),
(609, 715),
(609, 717),
(610, 718),
(610, 719),
(611, 720),
(612, 721),
(613, 722),
(614, 723),
(615, 724),
(616, 725),
(617, 243),
(618, 726),
(618, 727),
(619, 56),
(619, 728),
(620, 616),
(621, 565),
(622, 729),
(622, 730),
(622, 731),
(623, 732);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mee_types`
--

CREATE TABLE IF NOT EXISTS `mee_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `state` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `mee_types`
--

INSERT INTO `mee_types` (`id`, `name`, `state`, `user_id`, `creation_date`, `modification_date`) VALUES
(0, 'No asignado', 1, 12, '2015-05-07 00:00:00', '2015-05-12 15:14:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `neighborhoods`
--

CREATE TABLE IF NOT EXISTS `neighborhoods` (
  `id_neighborhood` int(11) NOT NULL AUTO_INCREMENT,
  `neighborhood_name` varchar(45) NOT NULL,
  `commune_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_neighborhood`),
  UNIQUE KEY `neighborhood_name` (`neighborhood_name`),
  KEY `commune_id` (`commune_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=185 ;

--
-- Volcado de datos para la tabla `neighborhoods`
--

INSERT INTO `neighborhoods` (`id_neighborhood`, `neighborhood_name`, `commune_id`, `creation_date`, `modification_date`, `user_id`) VALUES
(11, 'Santo Domingo', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(12, 'Villa del Socorro', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(13, 'Manrique', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(14, 'Aranjuez', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(15, 'Estadio', 21, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(16, 'Los colores', 21, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(17, 'Suramericana', 21, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(18, 'Castilla', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(19, 'Caribe', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(20, 'Sevilla', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(21, 'Doce de octubre', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(22, 'Robledo', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(23, 'San Sebastián de Palmitas', 27, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(24, 'Nuevo Occidente', 28, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(25, 'San Cristobal', 28, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(26, 'Caunces', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(28, 'El Salvador', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(29, 'La América', 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(30, 'Santa Lucía', 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(31, 'El Chagualo', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(32, 'La Candelaria', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(34, 'Boston', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(35, 'Villanueva', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(36, 'Centro', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(37, 'Santa Elena ', 31, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(38, 'Jesús de Nazareth', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(40, 'Belencito Corazón', 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(41, 'Poblado', 24, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(42, 'Guayabal', 25, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(43, 'Belén San Bernardo', 26, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(44, 'Belén ', 26, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(45, 'Altavista', 29, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(46, 'San Antonio de Prado', 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(47, 'El Limonar', 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(48, 'Palermo', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(49, 'Los Alcázares', 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(50, 'Granizal', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(51, 'La Avanzada', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(52, 'Carpinelo', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(53, 'Popular 1', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(54, 'Santa Cruz ', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(55, 'La Francia ', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(56, 'Moscú #1', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(57, 'Popular #2', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(58, 'Playón', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(59, 'Barrios De Jesús', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(60, 'La Sierra', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(61, 'Caicedo ', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(63, 'Villa Hermosa', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(64, 'La Libertad', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(65, 'La Milagrosa', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(66, 'Los Mangos - Enciso', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(67, 'Buenos Aires', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(68, 'Miraflores', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(69, 'Villatina', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(70, '13 De Noviembre', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(71, 'Villa Turbay\n', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(72, 'Eduardo Santos ', 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(73, 'La Independencia ', 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(74, 'San Javier', 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(76, '20 de Julio', 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(77, 'El Salado ', 23, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(78, 'Los Balsos', 24, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(79, 'Trinidad', 25, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(80, 'Campo Amor ', 25, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(81, 'Santafé ', 25, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(82, 'Belén Rincón ', 26, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(83, 'Belén Las Mercedes', 26, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(84, 'Belén las Playas', 26, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(85, 'Belén Miravalle', 26, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(86, 'Belén Fátima', 26, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(87, 'Belén las Violetas', 26, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(88, 'Belén Buenavista', 26, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(89, 'El Manzanillo ', 29, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(91, 'Pradito', 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(92, 'La Florida', 30, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(93, 'Enciso', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(94, 'Manrique Las Granjas', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(95, 'Manrique San Blaz', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(96, 'Manrique Central', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(97, 'Versalles 2', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(98, 'Manrique Jardín', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(99, 'Manrique Pomar', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(100, 'La Salle', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(101, 'Versalles 1', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(102, 'San Cayetano', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(103, 'Campo Valdés', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(104, 'San Joaquín', 21, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(105, 'Laureles', 21, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(106, 'Moravia ', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(107, 'El Diamante', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(108, 'La Ladera', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(110, 'Floresta', 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(111, 'Florencia', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(112, 'Villa Flora', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(113, 'La Quintana', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(114, 'Santa Cecilia', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(116, 'Toscana', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(117, 'Pedregal', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(118, 'Picacho', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(119, 'Aures', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(120, 'La Mansión', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(121, 'Belén Rosales', 26, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(122, 'Bomboná ', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(123, 'Carlos E Restrepo', 21, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(124, 'Santa Mónica', 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(125, 'Las Brisas ', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(126, 'Girardot', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(127, 'Tricentenario', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(128, 'Ferrini', 22, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(129, 'Bello Horizonte', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(130, 'La Frisola', 27, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(131, 'La Potrera', 27, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(132, 'Urquita', 27, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(133, 'La Aldea', 27, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(134, 'La Suiza', 27, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(135, 'La Volcana', 27, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(136, 'La Sucia', 27, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(137, 'La Esperanza', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(138, 'Travesías (San Cristóbal)', 28, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(139, 'Santander', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(140, 'Santa Margarita', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(141, 'Robledo Aures', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(142, 'Robledo Aures # 2', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(143, 'Pilarica', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(144, 'Luis López De Mesa', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(145, 'Palmitas', 27, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(146, 'Picachito', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(147, 'Barrios De Jesús -Buenos Aires', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(148, 'El Cerro - Vía Pantanillo', 31, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(149, 'El Pinal', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(150, 'El Placer', 31, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(151, 'El Plan', 31, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(152, 'Barro Blanco', 31, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(153, 'Puente Mazo', 31, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(154, 'Niquitao', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(155, 'Piedra Gorda', 31, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(156, 'Caicedo - Buenos Aires', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(157, 'Belén Parque', 26, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(158, 'Robledo Miramar', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(159, 'Robledo La Huerta', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(160, 'Córdoba', 7, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(161, 'Parque Central', 31, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(162, 'Belén Zafra', 26, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(163, 'Blanquizal', 23, '2014-12-05 11:21:16', '0000-00-00 00:00:00', 14),
(164, 'Guadalupe', 3, '2014-12-17 11:29:42', '0000-00-00 00:00:00', 14),
(165, 'Nuevo Horizonte', 1, '2014-12-17 11:32:31', '0000-00-00 00:00:00', 14),
(166, 'Alfonso López', 5, '2015-03-16 13:30:22', '0000-00-00 00:00:00', 35),
(167, 'Francisco Antonio Zea', 5, '2015-03-16 14:43:07', '0000-00-00 00:00:00', 35),
(168, 'El Triunfo', 6, '2015-03-16 14:49:01', '0000-00-00 00:00:00', 35),
(169, 'Robledo Fuente Clara', 7, '2015-03-16 14:51:49', '0000-00-00 00:00:00', 35),
(170, 'El Progreso #2', 6, '2015-03-16 15:38:32', '0000-00-00 00:00:00', 35),
(171, 'Altamira', 7, '2015-03-16 16:20:31', '0000-00-00 00:00:00', 35),
(172, 'Robledo Diamante', 7, '2015-03-16 16:43:25', '0000-00-00 00:00:00', 35),
(173, 'Las Flores', 7, '2015-03-16 16:55:15', '0000-00-00 00:00:00', 35),
(174, 'Las Granjas', 3, '2015-03-17 10:40:17', '0000-00-00 00:00:00', 35),
(175, 'El bosque', 4, '2015-03-17 10:48:26', '0000-00-00 00:00:00', 35),
(176, 'Calasanz', 22, '2015-03-17 11:08:19', '0000-00-00 00:00:00', 35),
(177, 'las Estancias', 8, '2015-03-17 11:23:09', '0000-00-00 00:00:00', 35),
(178, 'Esfuerzos de paz', 8, '2015-03-17 11:26:48', '0000-00-00 00:00:00', 35),
(179, 'Trece de Noviembre', 8, '2015-03-17 11:40:54', '0000-00-00 00:00:00', 35),
(180, 'Industriales', 10, '2015-03-17 13:13:24', '0000-00-00 00:00:00', 35),
(181, 'Villa Laura', 23, '2015-03-17 14:26:57', '0000-00-00 00:00:00', 35),
(182, 'Nuevos Conquistadores', 23, '2015-03-17 14:59:10', '0000-00-00 00:00:00', 35),
(183, 'Antonio Nariño', 23, '2015-03-17 15:02:10', '0000-00-00 00:00:00', 35),
(184, 'Ciudad del Rio', 24, '2015-03-17 15:06:28', '0000-00-00 00:00:00', 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `owners`
--

CREATE TABLE IF NOT EXISTS `owners` (
  `id_owner` int(11) NOT NULL AUTO_INCREMENT,
  `roll` varchar(45) NOT NULL,
  `site_id` int(11) NOT NULL,
  `person_id` bigint(15) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_owner`),
  KEY `site_id` (`site_id`),
  KEY `person_id` (`person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `people`
--

CREATE TABLE IF NOT EXISTS `people` (
  `id_person` bigint(15) NOT NULL AUTO_INCREMENT,
  `cedula` bigint(20) NOT NULL,
  `name` varchar(90) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `charge` varchar(45) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `cell` varchar(45) NOT NULL,
  `entity` varchar(100) DEFAULT NULL,
  `genre` int(11) NOT NULL,
  `economic_level` int(11) NOT NULL,
  `birthday` date DEFAULT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_person`),
  UNIQUE KEY `cedula_UNIQUE` (`cedula`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=733 ;

--
-- Volcado de datos para la tabla `people`
--

INSERT INTO `people` (`id_person`, `cedula`, `name`, `lastname`, `charge`, `email`, `phone`, `cell`, `entity`, `genre`, `economic_level`, `birthday`, `creation_date`, `modification_date`, `user_id`) VALUES
(1, 1, 'Daniel', 'Rozo', 'Gestor de técnologia', 'danielrozo@gmail.com', '3856790', '3005791303', 'Parque Biblioteca de Belén', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, 2, 'Sergio', 'Pinzón', 'Profesional sistemas de información', 'sergio.pinzon@medellin.gov.co', '3856876', '', 'CAV Belencito', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, 3, 'Ana María ', 'Escobar', 'Profesional de apoyo a la coordinación', 'ana.escobar@medellin.gov.co', '385 5266', '', 'Casa de justicia 20 de julio', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(5, 5, 'Diana ', 'Álvarez', 'Coordinadora', 'cedezobelen@gmail.com', '3858025', '', 'CEDEZO Belén', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(6, 6, 'Alejandro', 'N.', 'Gestor empresarial', 'cedezobelen@gmail.com', '3858025', '', 'CEDEZO Belén', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(7, 43025015, 'Ana Lucia ', 'Gallego', 'Secretaria', 'ana.gallego@medellin.gov.co', '3859207', '', 'Unidad Integral de Belén # 6', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-04-29 16:08:01', 0),
(11, 11, 'Marlen ', 'Calderon', 'Gestora empresarial', 'cedezosanantoniodeprado@gmail.com', '385 6828', '', 'CEDEZO San Antonio de Prado', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(13, 13, 'Claudía María', 'García', 'Corregidora', 'claudiam.garcia@medellin.gov.co', '2863712', '3142066642', 'Corregiduría el limonar', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(14, 14, 'Ramiro', 'Ceballos', 'Edil comuna 16', 'ramironcor@yahoo.es', '3414638', '3116148883', 'Mascerca Belén', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(15, 15, 'Ana Ester', 'González Escobar', 'JAL', 'anacomunal2@hotmail.com', '2859750', '3206201064', 'Mascerca Guayabal', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(16, 43753242, 'Zoraida', 'Rueda', 'Coordinadora', 'info@fundacionintegrar.org', '265 75 17', '', 'Fundación Integrar', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-03-25 16:20:06', 0),
(18, 18, 'Julian Dario', 'Ángel', 'Auxiliar', 'j.ah19@hotmail.com', '3852972', '3206487044', 'Parque Biblioteca José Horacio Betancur', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(19, 19, 'Edgar', 'Gutierrez', 'Coordinador', 'ligia.vasquez@medellin.gov.co', '253 9037', '', 'Institución Educativa Perpetuo Socorro', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(20, 20, 'Juan José', 'Urrego', 'Corregidor', 'juan.urrego@medellin.gov.co', '3856595 / 3857428', '3002500212', 'Casa de Gobierno Altavista', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(21, 21, 'Geovany', 'Metaute', 'Rector', 'geovanymetautecorrea6@gmail.com', '2528790', '', 'Institución Educativa El Corazón-bachillera', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(22, 22, 'Flor Alba', 'Robayo', 'Coordinadora', 'robayo-pachon@hotmail.com', '2528790', '3002324076 ', 'Institución Educativa El Corazón-bachillera', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(23, 23, 'Yuliana', 'Areiza', 'Psicologa', 'yuliareiza@gmail.com', '2528790', '3014307517', 'Institución Educativa El Corazón-bachillera', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(24, 43999377, 'Shirley', 'Ortiz Zuluaga', 'Coordinadora', 'limonar@bibliotecasmedellin.gov.co', '286 59 23', '', 'Biblioteca Pública El Limonar', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-05-03 18:31:50', 0),
(25, 25, 'Edwin Alfonso  ', 'León', 'Contratista', 'edwin.leon@medellin.gov.co', '3858568', '3217759357', 'Puntos de Intermediación Laboral (PIL) PB. San Javier', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(26, 26, 'Catalina ', 'Cardenas Florez ', 'Atención al cliente', 'catalina.cardenas@medellin.gov.co', '3857414', '', 'Mascerca Poblado', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(27, 27, 'Patricia Elena', 'Aguirre', 'Coordinadora', 'paguirremunera@gmail.com', '255 2996', '', 'José Acevedo y Gómez', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(28, 1036617616, 'Andres', 'Blandon', 'Docente', 'andresblandon7@gmail.com', '255 2996', '300 4979162', 'José Acevedo y Gómez', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-04-10 12:59:33', 0),
(29, 71330714, 'Hernán Stives', 'Builes Tobón', 'Gestor Empresarial', 'cedezoguayabal@gmail.com', '3834031 - 383 41 30', '3148816373', 'Mascerca Guayabal', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2014-12-18 19:57:37', 0),
(30, 30, 'Piedad ', 'Villada', 'Auxiliar administrativa', 'piedad.villada@medellin.gov.co', '3857413', '', 'Máscerca de Guayabal', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(32, 32, 'Beatriz Eugenia ', 'Rios', 'Rectora', 'beatrizrios5@gmail.com', '4929808 ext 14', '3013773342', 'La Independencia sede bachillerato', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(33, 33, 'Adrián ', 'Prado', 'Auxiliar administrativo', 'coordinacion.bsanantonio@bibliotecapiloto.gov', '3794440', '', 'Filial Biblioteca San Antonio De Prado', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(34, 34, 'Yaneth Cristina ', 'Cano', 'Docente tecnologia', 'ycriscano@gmail.com', '3411386', '', 'Débora Arango', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(35, 35, 'Adriana Patricia ', 'Valencia Zuluaga', 'Docente de aula de apoyo', 'apitavazu23@yahoo.es', '2385168', '', 'Pedro Octavio Amado', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(36, 36, 'Martha Silvia ', 'Díaz Gómez', 'Coordinadora', 'martasilvia.presentacion@gmail.com', '2555481', '', 'La Presentación', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(37, 37, 'Vanessa ', 'González', 'Bibliotecaria', 'vanessa.presentacion@gmail.com', '2555481', '3117246472', 'La Presentación', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(38, 38, 'Josefina ', 'Córdoba', 'Coordinadora', 'iesantoangel@gmail.com', '2853623', '', 'Santo Ángel', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(39, 39, 'Luz Dary ', 'Gomez', 'Docente', 'inemguillermo@une.net.co', '2663603', '', 'INEM Guillermo Echavarria', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(40, 40, 'Luis Alberto', 'Castro', 'Docente tecnologia', 'tecnoprofe@hotmail.com', '3432086', '', 'Institución Educativa José María Bernal', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(41, 41, 'Luz Dary ', 'Ortiz Betancur', 'Coordinadora encargada', 'ldaryortiz@gmail.com', '2864285', '', 'Institución Educativa San Antonio de Prado', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(42, 42, 'Maria Victoria ', 'Correa Maldonado', 'Profesora de aula de apoyo', 'mavicom_06@yahoo.com.mx', '2860139', '', 'San Antonio de Prado sede Carlos Betancur', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(43, 43, 'Maryori Alexandra', 'Hoyos Ramírez', 'Docente tecnologia', 'maryihoyos@gmail.com', '2864285', '', 'San Antonio de Prado', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(44, 44, 'Consuelo ', 'Giraldo Arroyave', 'Rectora', 'ie.sanantoniodeprado@medellin.gov.co', '2864285', '', 'San Antonio de Prado', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(45, 15332067, 'Luis Alberto ', 'Suaza', 'Coordinador', 'sadepconvivenciajt@gmail.com', '2860139', '', 'San Antonio de Prado sede Carlos Betancur', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-04-29 15:00:59', 0),
(46, 46, 'Jaime ', 'Martínez', 'Vicerrector', 'inemacademica@une.net.co', '2663603', '', 'INEM José Félix De Restrepo', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(47, 98624070, 'Carlos Andres ', 'Osorno Gómez', 'Dinamizador', 'telecentroprado@gmail.com', '2866100', '3137316194 ', 'Telecentro San Antonio de Prado', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2014-12-12 13:33:01', 0),
(48, 48, 'Wilmar ', 'Giraldo Bedoya', 'Personero', 'wilmar-gb@hotmail.com', '3433208', '', 'Yermo y Parres', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(49, 49, 'Eunice de los Dolores ', 'Muñoz', 'Secretaria', 'eunice.munoz@medellin.gov.co', '2863712', '', 'Corregiduría El Limonar', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(50, 50, 'Lina Maria ', 'Agudelo', 'Auxiliar de servicio al cliente', 'linam.agudelo@medellin.gov.co', '3857428', '', 'Mascerca de Belén ', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(52, 52, 'Gabriel Jaime', 'Ospina', ' Edil comuna 16', 'ospinar@hotmail.com', '3414638', '3148033749', 'Mascerca de Belén ', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(53, 53, 'Flaminio Adolfo ', 'Villalba', 'Coordinador', 'cedezosanjavier@gmail.com', '3857533', '', 'CEDEZO San Javier', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(54, 54, 'Estella María ', 'Gaviria puerta', 'Gestora', 'cedezosanjavier@gmail.com', '3857533', '', 'CEDEZO San Javier', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(55, 55, 'Luis fernando ', 'Caro', 'Técnico en cultura Digital', 'tecnologia.guayabal@bibliotecasmedellin.gov.c', '3510495', '', 'Parque Biblioteca de Guayabal', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(56, 71363852, 'Daniel ', 'Gómez Gómez', 'Técnico en cultura Digital', 'tecnologia.guayabal@bibliotecasmedellin.gov.c', '3510495', '', 'Parque Biblioteca de Guayabal', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-03-19 14:16:34', 0),
(57, 57, 'Gladys ', 'Ortiz', 'Presidenta Club de vida ', 'mariagladysortiz@une.net.co', '4924550', '3004085916', 'CAV de Belencito', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(58, 58, 'Yaneth Cristina ', 'Cano', 'Docente', 'ycriscano@gmail.com', '341 1386', '3127539699', 'IE Debora Arango', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(59, 59, 'Jhonatan ', 'Vélez Agudelo', 'Auxiliar de servicio al cliente', 'jhonatan.velez@medellin.gov.co', '3857440', '', 'Casa De Gobierno Altavista', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(60, 60, 'Patricia', 'Marín Ortega', 'Coordinadora', 'patricia.marin@medellin.gov.co', '385 5459', '3128636453', 'Casa de justicia 20 de julio', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(61, 61, 'Elkin', 'Varela', 'Coordinador', 'evarela28@gmail.com', '4929808 ext 14 - 4929390', '3013773342', 'La independencia - sede Bachillerato', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(62, 71691275, 'Dario', 'Álvarez', 'Dinamizador', 'tlcntrvillalaura@gmail.com', '4922502-4924248', '3014224086', 'Telecentro Villa Laura', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-04-14 13:44:03', 0),
(63, 63, 'Luz Amparo', 'Castro', 'Inclusión social', 'luz.castro@medellin.gov.co', '3856826', '', 'Casa de Gobierno San Antonio de Prado', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(64, 64, 'Gonzalo ', 'Villa Arboleda', 'Coordinador', 'coortrinidad@gmail.com', '300783 1377', '', 'Benjamín Herrera', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(65, 65, 'Miriam', 'Miranda Restrepo', 'Coordinadora', 'mire2365@yahoo.es', '313 644 5467', '', ' IE Santos Ángeles Custodios', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(67, 67, 'Patricia Elena ', 'Aguirre', 'Coordinadora', 'paguirremunera@gmail.com', '255 2996', '', 'José Acevedo y Gómez', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(80, 43000918, 'Neyla', 'Oquendo', 'Docente tecnologia', 'omneyla@gmail.com', '4480073', '3116498073', 'Benjamín Herrera', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-03-30 14:32:14', 0),
(81, 81, 'Nelsy ', 'Rangel', 'Coordinadora', 'ierv14@yahoo.es', '2388255', '', 'República de Venezuela', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(82, 82, 'Shirley', 'García', 'Docente', 'chirlitagp@hotmail.com', '3435934', '3002872484', 'Octavio Harry', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(83, 83, 'Analbys', 'Espineda', 'Docente de media técnica', 'analbyse.s@gmail.com', '3435934', '', 'Octavio Harry', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(84, 84, 'Margarita', 'Arango', 'Rectora', 'margarita.arango@medellin.gov.co', '2655463', '3007920548', 'Pedro Olarte', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(85, 85, 'Aureliana  ', 'Londoño', 'Coordinadora', 'aurelondo@yahoo.es', '2655463', '3113549003', 'Pedro Olarte', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(86, 86, 'Yenid Astrid ', 'Garcia Otálvaro', 'Docente', 'yenidastrid@gmail.com', '2860010', '3127710859', 'Monseñor Victor Wiedemann', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(87, 87, 'Lyda ', 'Morales Zapata', 'Docente', 'lydamoralesz@gmail.com', '2860010', '3186149946', 'Monseñor Victor Wiedemann', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(88, 88, 'Nohelia ', 'Chalarca', 'Docente', 'maria.chalarca@gmail.com', '3373048', '3113503416', 'Centro Educativo Montañita', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(89, 89, 'María del Rosario ', 'Oquendo', 'Rectora (e)', 'iebhmed@gmail.com', '4480073 ext 15', '', 'Benjamín Herrera', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(90, 90, 'Luis Guillermo ', 'Carmona', 'Rector', 'gcarmona6@une.net.co', '2869498', '3136616820', 'Fe y Alegría El Limonar', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(91, 91, 'Alejandra ', 'Restrepo', 'Docente de informática', 'alejandrasarita@hotmail.com', '2869498', '3136616820', 'Fe y Alegría El Limonar', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(92, 1128414042, 'Cristian Camilo', 'Giraldo', 'Técnico Cultura Digital', 'limonar@bibliotecasmedellin.gov.co', '2865923', '', 'Biblioteca Pública El Limonar', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-05-03 18:33:02', 0),
(93, 93, 'Omar', 'Marín', 'Coordinador', 'marinespinal.7312@hotmail.com', '3541437', '', 'Santa Catalina de Sena', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(94, 94, 'Luis Fernando', 'Caicedo Balvin', 'Docente de informática', 'luisfernandocaicedobalvin@yahoo.es', '3763331', '', 'San José Obrero', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(100, 100, 'Yamileth ', 'Gallo', 'Gestora Mi Barrio', 'maria@hotmail.com', '2160484', '3003414146', 'Parque Biblioteca León de Greiff La Ladera', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(101, 98704979, 'Juan Camilo', 'Velásquez', 'Dinamizador', 'losmangostelecentro@gmail.com', '2911904', '3042499399', 'Telecentro Los Mangos', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-03-30 14:36:27', 0),
(102, 102, 'Nelson', 'Ospina', 'Coordinador', 'cedezolaladera@gmail.com', '3857328', '', 'Cedezo', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(103, 103, 'Rosa Elena', 'López Bedoya', 'Profesional Universitaria', 'santaelena@bibliotecasmedellin.gov.co', 'Tel. 5380222 Ext 103', '', 'Sistema de Bibliotecas Públicas de Medellín', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(104, 104, 'Guillermo ', 'Giraldo', 'Asesor de servicios', 'guillermo.giraldo@medellin.gov.co', '3856984', '', 'Casa de Gobierno Santa Elena', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(105, 105, 'Viviana', 'Londoño Ocampo', 'Secretaria', 'viviana.londono@medellin.gov.co', '2291300 ext 331', '', 'Subsecretaría de Espacio Público', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(106, 106, 'Oscar Mauricio ', 'García Jiménez', 'Coordinador de Calidad y Sistemas', 'mauricio.garcia@parquearvi.org', '444 2979 Ext 108', '', 'Parque Arví', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(107, 107, 'Maria Sadih', 'Mosquera', 'Docente', 'masamoas@hotmail.com', '5380143', '', 'Centro Educativo El Placer', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(108, 108, 'Beatriz Elena', 'Alvarez', 'Directora Centros Educativos', 'centroeducativoelplacer@yahoo.es', '5380143', '3146576470', 'Centro Ed El Placer, El Plan, Media Luna', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(109, 43050954, 'Olga Patricia ', 'Giraldo Mora', 'Directora', 'direccion.ladera@bibliotecasmedellin.gov.co', '2160484', ' 3122651253', 'Parque Biblioteca León de Greiff - La Ladera', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-04-22 16:59:17', 0),
(110, 110, 'Doris Leonor', 'Martínez', 'Líder Social', 'dlmartinez@codesarrollo.org.co', '454 8888 ext 8467 - 8468', '313 637 1546', 'Operador Social Codesarrollo', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(111, 2103, 'Henry', 'López', 'Docente ', 'henrylopez10@hotmail.com', '291 43 89', '3217151459', 'Institución Educativa Sol de Oriente', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-03-30 16:56:44', 0),
(112, 112, 'Beatriz Elena ', 'Araque', 'Directora', 'corporacion@parquearvi.org', '4442979', '', 'Parque Arví', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(113, 113, 'Isabel Cristina', 'Guarín', 'Psicóloga', 'cristinaisabelgs@gmail.com', '3147017306', '', 'IE Alfonso López', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(114, 114, 'Maryluz  ', 'López', 'Dinamizadora', 'telecentrosmlm@gmail.com', '2924764', '', 'Telecentros', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(115, 115, 'Lenyn 			', 'Córdoba', 'Tecnica Cultura Digital', 'ljcpalacios.23@hotmail.es', '3013987211', '', 'Biblioteca La Ladera', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(116, 79516196, 'Juan Carlos ', 'Cortés Acosta', 'Rector', 'juanca.cortes@medellin.gov.co', '3007771131', '3007771131', 'IE Alfonso López', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-04-07 16:30:49', 0),
(117, 117, 'Yesenia 		', 'Acevedo Martinez', 'Docente', 'yeseacevedo@gmail.com', '301 718 5109', '', 'IE La Milagrosa', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(118, 118, 'Fabián Alonso 	', 'Hernández', 'Docente', 'fhernandezgallego@gmail.com', '315 518 7542	', '', 'IE Cefa', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(119, 119, 'Jorge ', 'Cardona', 'Coordinador Sede Darío Londoño', 'j_cardona66@hotmail.com', '2161258', '', 'IE Héctor Abad', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(120, 120, 'Karol Cristina ', 'Quiroz', 'Docente', 'karolcri82@hotmail.com', '5380236', '3017140518', 'CE El Plan', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(121, 121, 'Eugenio Felipe', 'Lozano Furnieles', 'Docente', 'eufelofu@gmail.com', '310 820 5948', '', 'CE Piedras Blancas', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(122, 122, 'Maria Eugenia ', 'González', 'Docente', 'pemazo@gmail.com', '5669390', '', 'Centro Educativo Permanente Mazo', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(123, 71616746, 'Hammer', 'Atehortúa ', 'Docente', 'hatehortua704@gmail.com', '2842912', '3007662472', 'Institución Educativa Luis Carlos Galán Sarmiento, Sede Niño Jesús de Praga ', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-04-30 21:08:33', 0),
(124, 124, 'Fabian', 'Hernandez', 'Docente', 'fhernandezgallego@gmail.com', '2175337', '', 'IE Cefa', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(125, 125, 'GUILLERMO LEON 			', 'YEPES	', 'Rector', 'ie.juandedioscarvaja@medellin.gov.co', '2840880', '', 'IE Juan de Dios Carvajal', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(126, 70086274, 'Alfonso 			', 'Guarín Salazar', 'Rector', 'aguarins@ucn.edu.co', '2393116', '', 'Institución Educativa Javiera Londonño', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-05-03 23:14:42', 0),
(127, 127, 'Maria Eugenia 		', 'Pelaez', 'Docente', 'mepalu25@yahoo.es', '2162939', '', 'IE Santo Tomas de Aquino', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(128, 128, 'Zulay 	 	', 'Arango', 'Docente', 'zulay38@yahoo.com', '312 8877811', '', 'CE Juan Andres Patino ', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(129, 129, 'Monica del Socorro 		', 'Soto', 'Docente', 'moquisoto@hotmail.com', '566 91 86', '311 3327266', 'CE Piedra Gorda', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(130, 2105, 'Martha ', 'Figueroa', 'Lider', 'martha.figeroa@medellin.gov.co', '3856935', '3146273554', 'AMAUTTA - Centro De Atención Al Adulto Mayor', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-03-30 18:20:43', 0),
(131, 131, 'Luz', 'Jaramillo', 'Coordinadora', 'marta.garcia@medellin.gov.co', '5126547 / 2317355', '', 'Archivo Histórico De Medellín', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(132, 21421583, 'Gloria Elsy ', 'del Río Tabares', 'Coordinadora', 'gloriaelsy.rio@medellin.gov.co', '3855070', '312 2827795', 'Centro de Información e Investigación Ambiental-CIIAM', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-05-04 00:16:17', 0),
(133, 133, 'Ramón Emilio ', 'Perea', 'Coordinador', 'ramon.perea@medellin.gov.co', '310 3946025', '', 'Casa De Integración Afrocolombiana ', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(134, 32556005, 'Luz Marina ', 'Toro', 'Directora', 'luzm.toro@medellin.gov.co', '5124019', '3016393469', 'Centro De La Diversidad Sexual', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-03-30 15:08:19', 0),
(135, 135, 'Andrea ', 'Londoño', 'Coordinadora', 'empleadasdelhogar.colombia@gmail.com', '5133100', '', 'Escuela Nacional Sindical', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(136, 43510317, 'Mercedes Lucía', 'Pereira Yepes', 'Directora', 'isabel.pulgarin@medellin.gov.co', '2181827', '3155897679', 'Corporación Hogar', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-04-09 21:48:36', 0),
(137, 137, 'Isabel ', 'Pulgari', 'Li', 'isabel.pulgarin@medellin.gov.co', '2291300 / 2291304 Ext 202', '', 'Espacio Publico', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(139, 139, 'Carlos Augusto ', 'Carmona', 'Coordinador', 'carlos.carmona@medellin.gov.co', '3858054', '', 'Pasaje La Bastilla', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(140, 140, 'Olga Lucía', ' Escobar', 'Coordinadora', 'Antioquiafundacionpatronato@patronato.org', '5116875  5113298 ', '', 'Patronato Maria Auxiliadora', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(141, 141, 'Juan Camilo ', 'Castaño', 'Director', 'direducultura@museodeantioquia.org.co', '2513636 Ext 188', '', 'Plazoleta Botero', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(142, 2101, 'Edgar ', 'Espinal', 'Coordinador', 'edgar.espinal@medellin.gov.co', '2541552 - 385 80 50', '315 538 38 37', 'Por Mis Derechos, Equidad E Inclusión', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-03-30 15:49:53', 0),
(143, 143, 'Olga Stella ', 'Guzman', 'Educación', 'olga.arbelaez@medellin.gov.co', '3858050', '3122328394', 'Por Mis Derechos, Equidad E Inclusión', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(144, 144, 'Isabel Cristina ', 'Diez', 'Coordinadora', 'isabel.diez@medellin.gov.co', '3855136', '', 'Tesorería Municipal', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(145, 145, 'Nélida María ', 'Barrientos Flórez', 'Lider de Servicio', 'nelida.barrientos@medellin.gov.co', '3857162- 3857414 - 3857161', '', 'Taquilla Única - Centro De Atención', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(146, 146, 'Paula', 'Ruiz', 'lider', 'liderareasocial@fundacionpatronato.org', '5112230', '', 'Fundacion Patronato Maria Auxiliadora', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(160, 70100668, 'Juan Díaz ', 'Londoño', 'Rector', 'juand244@hotmail.com', '221 2693', '', 'Institución Educativa Arzobispo Tulio Botero Salazar', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-05-04 00:48:58', 0),
(161, 161, 'Reinaldo ', 'Galea', 'Docente', 'rega42@gmail.com', '221 2693', '', 'Arzobispo Tulio Botero Salazar', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(162, 71681396, 'Rigoberto ', 'Monsalve', 'Docente', 'proferigo@gmail.com', '321 640 4712', '321 640 4712', 'Asamblea Departamental', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-04-21 16:44:22', 0),
(163, 163, 'Ana María', 'Montoya Velásquez ', 'Subdirectora', 'amontoya@fundacionepm.org.co', '3807529', '', 'Biblioteca EPM', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(164, 164, 'Mauricio ', 'Alzate Carmona', 'Profesional Adultos', 'eduard.alzate@fundacionepm.org.co', '3007808312', '3007808312', 'Biblioteca EPM', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(165, 165, 'Yuri', 'Colorado', 'Secretaria', 'seCarreraecaicedo@fundacionlasgolondrinas.org', '2260014', '', 'Camino de Paz', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(166, 166, 'Cielo  ', 'Rendón', 'Coordinadora', 'academico@fundacionlasgolondrinas.org', '3136146696', '3136146696', 'Camino de Paz', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(167, 167, 'Isabel ', 'Espinosa', 'Encargada', 'mariaisa127@hotmail.com', '3217120366', '3217120366', 'Casa Hogar Santa Laura', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(168, 168, 'Gil Alberto ', 'Giraldo Jiménez', 'Rector', 'gil.giraldo@medellin.gov.co', '300 732 3603', '300 732 3603', 'I. E El Salvador', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(169, 169, 'Ofelia ', 'Medina Medina', 'Coordinadora', 'ofemed@hotmail.com', '310 840 6679', '310 840 6679', 'IE El Salvador', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(170, 170, 'Carlos Mario ', 'García', 'Coordinador Área de Sistemas', 'carlosm.garcia@medellin.gov.co', '3857140', '', 'Escuela Del Maestro', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(171, 43743196, 'Claudia ', 'Raquejo Álvarez', 'Docente', 'clamara2008@gmail.com', '2699679', '3154685202', 'IE Federico Ozanam', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-04-29 21:25:29', 0),
(172, 37513745, 'Nancy ', 'Camacho', 'Docente', 'inge.nancy@gmail.com', '2260583', '3166953817', 'IE Gabriel Garcia Márquez', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-04-30 16:32:20', 0),
(173, 173, 'Bayron', 'Pineda', 'Coordinador', 'bayroncoordinador07@gmail.com', '3147547147', '3147547147', 'I.E Gonzalo Restrepo', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(174, 174, 'Martha ', 'Agudelo Sosa', 'Inspectora', 'martha.agudelo@medellin.gov.co', '2161812', '', 'Inspección 9b Salvador', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(175, 175, 'Luis Alberto ', 'Lizon', 'Coordinador inclusión', 'luis.lizon@itm.edu.co', '4405352', '', 'ITM - Sede Fraternidad', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(176, 176, 'Tania ', 'Montes', 'Docente', 'taniamontes353@gmail.com', '3105055342', '3105055342', 'ITM - Sede Fraternidad', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(177, 177, 'Sandra ', 'Arango', 'Rectora', 'libertad.ie@gmail.com', '3005722630', '3005722630', 'La Libertad', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(178, 178, 'Luis Alfonso ', 'Díaz', 'Coordinador', 'licinfymav@gmail.com', '311 410 5967', '311 410 5967', 'IE La Libertad', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(179, 179, 'Dora Luz ', 'Gómez Betancur', 'Rectora', 'dolugobe@hotmail.com', '2217929', '', 'IE Manuel Jose Caicedo', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(180, 180, 'Rubiela ', 'Montoya', 'Coordinadora', 'rubielamontoya@yahoo.com', '2217929', '', 'IE Manuel Jose Caicedo', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(181, 181, 'Fanny ', 'Arias', 'Lider', 'fanny.arias@medellin.gov.co', '3857405/01', '', 'Mascerca Buenos Aires', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(182, 42755942, 'Doralba ', 'Callejas', 'Asesora', 'doralba.callejas@medellin.gov.co', '3857401', '3857401', 'Mascerca Buenos Aires', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-04-21 16:25:26', 0),
(183, 43008695, 'María Isabel ', 'Villa Álzate', 'Rectora', 'mivillalzate@gmail.com', '269 7583 Ext 13', '', 'Institución Educativa Miraflores', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-04-30 18:28:32', 0),
(184, 184, 'Greta ', 'Romero Deluque', 'Coordinadora', 'coordinacion@parquedelavida.co', '2634476', '', 'Parque de la Vida', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(185, 185, 'Jackeline ', 'Rúa Arboleda', 'Comunicadora', 'comunicaciones@parquedelavida.co', '2634476', '', 'Parque de la Vida', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(187, 187, 'Juan Camilo ', 'Castaño', 'Comunicador', 'juan.castano@museodeantioquia.co', '2513636 Ext 188', '', 'Plazoleta Botero', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(188, 188, 'Carolina ', 'Calle Jaramillo', 'Gestora', 'cedezobuenosaires@gmail.com', '385 2944', '', 'Punto De Atención Cedezo Buenos Aires', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(189, 189, 'Alba Yaneth ', 'Giraldo', 'Docente', 'alyagi7@hotmail.com', '2690520', '', 'IE San Francisco De Asis', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(190, 43061072, 'Liboria ', 'Renteria Urrutia ', 'Docente', 'liramaru2000@gmail.com', '2690627', '313 744 4272', 'Institución Educativa Madre Laura', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-05-04 00:38:26', 0),
(191, 191, 'Cesar/Emilsen', 'García', 'Coordinador', 'cesargarcia25@hotmail.com', '3007752024/3148898677', '3007752024/3148898677', 'IE Villa Turbay', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(192, 192, 'Camilo', 'Gallo', 'Coordinador', 'c.a.v.caunces@gmail.com', '3006734199', '3006734199', 'Cav Caunces - Centro De Atención A Victimas', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(193, 193, 'John ', 'Restrepo', 'Líder Juvenil', 'jhon.restrepo1@gmail.com', '3007538199', '3007538199', 'Esfuerzos de Paz', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(194, 194, 'Darwin', 'Fernández', 'Coordinador', 'darwinpinal@iepinal.edu.co', '222 3647', '', 'IE El Pinal', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(195, 195, 'Aliria', 'Henao', 'Coordinadora', 'aliriahenao@gmail.com', '2210099', '', 'IE El Pinal', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(196, 196, 'Sor María ', 'Rojo Ríos', 'Psicóloga', 'rojoriossor@hotmail.com', '2697940 ext 11 y 12', '', 'IE Gonzálo Restrepo', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(197, 197, 'Ángela', 'Londoño', 'Docente', 'angelalondoove@yahoo.es', '3148723015', '', 'IE Merceditas Gómez Martínez', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(198, 91002917, 'Javier', 'Mosquera', 'Docente', 'javiersabana@hotmail.com', '2214634', '3138492441', 'Institución Educativa Miraflores', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-04-30 18:30:25', 0),
(200, 200, 'Jana ', 'Olaya', 'Gestora', '', ' 427 0148', '', 'CEDEZO San Cristóbal', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(201, 201, 'Ruth Estela', 'Ospina', 'Edil ', '', '4279567', '3113452724', 'JAL San Cristóbal', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(202, 202, 'Paula Andrea', 'Zorrilla', 'Coordinadora Vecinos y Amigos', '', '4204193', '3003463711', 'Vecinos y Amigos', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(203, 203, 'José Fernando', 'Correa', 'Gestor Administrativo', '', '3662304', '3017823782', 'Programa Vecinos y Amigos', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(205, 205, 'Javier Alberto', 'Castro', 'Bienestar institucional', 'socio.economico@colmayor.edu.co', '4445611', '3216216564', 'Colegio Mayor de Antioquia', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(206, 206, 'Luis Alberto', 'Monsalve', 'Secretario corregiduría', 'luis.monsalve@medellin.gov.co', '3856832', '', 'Casa Gobierno Palmitas', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(207, 207, 'Gilma', 'Ayala', 'Coordinadora centros educativos', 'gilmayala@hotmail.com', '4461379', '3012178773', 'Centros educativos Palmitas', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(208, 208, 'Diana Victoria', 'Montoya', 'Docente', 'devilladiana@hotmail.com', '3870129 ', '3154778703', 'C.E. La Aldea', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(209, 209, 'Diana Carolina', 'Rivera', 'Coordinadora ', 'ie.hrmpalmitas@gmail.co', '387 0058', '3117319380', 'IE Héctor Rogelio Montoya', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(210, 210, 'Mery Luz', 'Cardona', 'Promotora de lectura', 'palmitas@bibliotecasmedellin.gov.co', '3870612', '', 'Biblioteca Pública Palmitas', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(211, 211, 'Francisco Javier ', 'Jiménez', 'Rector', 'javierjgiraldo@hotmail.com', '4379554', '312 860 9002', 'IE La Huerta', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(212, 212, 'Leidis ', 'Soto', 'Docente', 'leidissoto@gmail.com', '4379554', '312 685 24 67', 'IE La Huerta', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(213, 213, 'Lucía Teresa ', 'Arismendy', 'Profesional Gestión de biblioteca', 'cdeinfo@pascualbravo.edu.co', '4480520 ext 1017', '3206173661', 'Institución Universitaria Pascual Bravo', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(214, 214, 'MarthaLigia ', 'García', 'Asistente Gestión biblioteca', 'cdeinfo@pascualbravo.edu.co', '4480520 ext 1017', '3127497737', 'Institución Universitaria Pascual Bravo', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(215, 215, 'Luis Alberto ', 'Lizón ', 'Líder de inclusión', 'luislizon@itm.edu.co', '4405352', '3137281426 ', 'Instituto tecnológico Metropolitano', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(216, 216, 'Victor Gabriel ', 'Puerta', 'Educador especial', 'victorpuerta@gmail.com', '4379646', '3006561049', 'Buen Comienzo La Huerta', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(217, 217, 'Carolina', 'Vélez López', 'Coordinadora ', 'carovlopez@gmail.com', '4294920', '3122487971', 'Centro Integrado San Cristóbal', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(218, 218, 'Juan Carlos', 'Rodríguez', 'Gestor de servicios bibliotecarios', 'gestor.docedeoctubre@bibliotecasmedellin.gov.', '4776519', '', 'Parque Biblioteca Doce de Octubre', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(219, 219, 'Yovanny', 'Tapasco', 'Rector', 'ie.flores@yahoo.es', '4278910 - 4277760', '', 'IE Ciudadela Nuevo Occidente', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(220, 220, 'Ana María', 'López', 'Coordinadora ', 'ie.flores@yahoo.es', '4278910 - 4277760', '3003535066', 'IE Ciudadela Nuevo Occidente', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(235, 235, 'Nancy', 'Cano', 'Líder de Centro de Servicios', 'nancy.canoz@medellin.gov.co', '3857161 ', '3017423978', 'Secretaría de Calidad y Servicio a la Ciudadanía - Mascerca Castilla', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(236, 236, 'Diana', 'Mesa', 'Profesional de monitoreo y evaluación', 'dianamesa22@hotmail.es', '4939813', '3218301336', 'Secretaría de Gobierno y DDHH - Programa Jóvenes por la vida', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(237, 237, 'Rocío', 'Naar', 'Coordinadora Territorial', 'rocionaar@gmail.com', '4939813', '3003009348', 'Secretaría de Gobierno y DDHH - Programa Jóvenes por la vida', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(238, 238, 'John Jairo', 'Bedoya', 'Vicepresidente', 'johnbedoya60@gmail.com', '5809025', '3016475807', 'Mesa de Discapacidad Comuna 5 - JAC Castilla', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(239, 239, 'Juan Manuel', 'Bedoya Ramírez', 'Promotor de Acompañamiento', 'jmbedoya1209@hotmail.com', '4939795', '3206234180', 'Secretaría de Gobierno y DDHH - Programa Jóvenes por la vida', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(240, 240, 'Deiby', 'Castañeda', 'Coordinador', 'ciccabe@gmail.com', '4780169', '3014040398', 'Centro de Integración Comunitario Comuna 5 y 6', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(241, 241, 'Diana', 'Gutierrez', 'Coordinadora Fundación Ratón de Biblioteca ', 'coordinacion.laesperanza@ratondebiblioteca.or', '3666910', '3007870689', 'Centro de Integración Comunitario Comuna 5 y 6', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(242, 242, 'Alcira', 'Gómez Ferreira', 'Profesional Empleabilidad – Autonomía Econ', 'alcira.gomez@medellin.gov.co', '3203420782', '', 'Secretaría de Gobierno y DDHH - Unidad Municipal de Atención y Reparación a Víctimas', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(243, 243, 'Erika', 'Meléndez Becerra', 'Promotora de Acompañamiento', 'erika.melendez@medellin.gov.co', '4939864', '3003902601', 'Secretaría de Gobierno y DDHH', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(244, 244, 'Arcesio', 'Gómez', 'Auxiliar Administrativo', 'arcesio.gomez@medellin.gov.co', '4939844', '3137801797', 'Secretaria de Gobierno y DDHH', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(245, 245, 'Juan Guillermo', 'Ramírez', 'Técnico en Cultura Digital', 'biblioteca.fernandog@medellin.co', '4216595', '', 'Biblioteca Fernando Gómez Martínez', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(246, 246, 'Beatriz ', 'Atehortúa', 'Auxiliar Administrativa', 'biblioteca.fernandog@medellin.co', '4227115', '', 'Biblioteca Fernando Gómez Martínez', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(247, 247, 'Lucelly', 'Giraldo', 'Rectora', 'lucellygj@gmail.com', '4218309', '3007865346', 'Institución Educativa Jesús Rey', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(248, 248, 'Gloria', 'Chica', 'Coordinadora Académica', 'iejesusrey2011@gmail.com', '4218309', '', 'Institución Educativa Jesús Rey', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(249, 249, 'Valentina ', 'Mena Orejuela', 'Coordinadora', 'tinamenaorejuela@gmail.com', '3113550726', '', 'Institución Educativa Sor Juana Inés de la Cruz', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(250, 250, 'Diana', 'Londoño', 'Coordinadora', 'cedezocastilla@gmail.com', '3857161 ', '', 'CEDEZO La Tinaja', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(251, 251, 'Patricia', 'Zapata', 'Docente', 'do.p.aza@hotmail.com', '3112929810', '', 'Institución Educativa Mariscal Robledo', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(252, 252, 'Alejandra', 'Tabera Casas', 'Coordinadora Fundación Ratón de Biblioteca ', 'coordinacion.laesperanza@ratondebiblioteca.or', '3666910', '', 'Centro de Integración Comunitario Comuna 5 y 6 - Fundación Ratón de Biblioteca La Esperanza', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(253, 253, 'Cielo Cristina', 'Vélez', 'Docente de apoyo', 'cicrivel@hotmail.com', '273 2700', '3103970391', 'Institución Educativa Diego Echavarría Misas', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(254, 8308276, 'Rubén Darío', 'Patiño Garcia', 'Rector', 'pagaruda@une.net.co', '2732700', '3104321239', 'Institución Educativa Diego Echavarría Misas', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-04-20 20:14:41', 0),
(255, 255, 'Gabriel', 'Guzmán', 'Rector', 'gaguzboom@yahoo.es', '461 2395', '3003901366', 'Institución Educativa Julio César García', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(256, 256, 'Luz Janneth', 'Saldarriaga Castañeda', 'Bibliotecaria', 'luzsalda22@hotmail.com', '2730139', '3005376960', 'Institución Educativa Julio César García', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(257, 257, 'Olga Lucía', 'Agudelo Casanova', 'Líder de Proyecto - Coordinación SMJCC-UPJ', 'olga.agudelo@medellin.gov.co', '4939793', '', 'Secretaría de Gobierno y Derechos Humanos', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(258, 258, 'Sandra Milena', 'Vásquez Bolívar', 'Profesional Universitaria – Socióloga/ Coo', 'sandra.vasquez@medellin.gov.co', '493 9741', '', 'Subsecretaria de Gobierno Local y Convivencia - Secretaría de Gobierno y DDHH', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(259, 259, 'Rosa', 'Isaza Sánchez', 'Secretaría de Gobierno y DH - Coordinación', 'rosa.isaza@medellin.gov.co', '493 9736', '', 'Secretaría de Gobierno y DDHH', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(267, 267, 'Margarita María ', 'Vasco', 'Docente', 'margaritavascos@gmail.com', '273 0061', '317 378 1192', 'Ciudadela de las Americas', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(268, 268, 'Carlos ', 'Vidal Tabón', 'Rector', 'rectoria.ie@gmail.com', '237 1235', '311 754 20 27', 'Maestro Fernando Botero', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(269, 269, 'Maria Beatriz ', 'Quintero Cardona', 'Coordinadora', 'mabeqica@hotmail.com', '476 1277', '312 752 7140', 'Picachito', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(270, 270, 'Ángela María ', 'Chavera Sierra', 'Rectora', 'angela.chaverra@medellin.gov.co', '477 7998/267 6900', '312 851 1169', 'Doce de Octubre', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(271, 271, 'Gabriel', 'Clavijo', 'Docente', 'goclavijog@hotmail.com', '477 7998/267 6900', '3128817442', 'Doce de Octubre', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(272, 272, 'Beatriz Cecilia ', 'Cortés ', 'Rectora', 'cortesgonzalez.beatrizcecilia@gmail.com', '471 1144', '311 764 2005', 'Santa Juana del Lestonnac', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(273, 273, 'Conny ', 'Barth ', 'Rectora', 'conny.barth@medellin.gov.co', '237 4710', '300 243 1245', 'El Pedregal', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(274, 274, 'Fran Edilson ', 'Ramirez', 'Docente', 'framirex@gmail.com', '267 3941', '3104951105', 'El Pedregal', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(275, 275, 'Pilar ', 'Olascoaga', 'Docente', 'corpani777@gmail.com', '237 4710', '3105289344', 'El Pedregal', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(276, 276, 'Blanca', 'Yarza', 'Docente', 'blancayarza_6@hotmail.com', '4777154', '3127268124', 'Juvenil Nuevo Futuro', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(277, 277, 'Wilson ', 'Gallego', 'Coordinador', 'wgallego.1960@gmail.com', '267 3506', '3103853883', 'Juvenil Nuevo Futuro', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(278, 278, 'Jairo Hernan ', 'Ortiz', 'Rector', 'jairo.ortiz@medellin.gov.co', '2578292', '3005504497', 'Jorge Eliécer Gaitán ', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(279, 279, 'Lina Marcela ', 'Vallejos Grisales', 'psicoorientadora', 'elaieney@yahoo.es', '2578292', '3005393476', 'Jorge Eliécer Gaitán ', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(280, 280, 'Jackeline ', 'Agudelo Suarez', 'funcionaria Escuelas Saludables', 'jakeline.agudelo@medellin.gov.co', '5148216', '', 'Secretaria de Educación Escuelas Saludables', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(281, 281, 'Diana María ', 'Henao', 'Dinamizadora Telecentro', 'yayita1813@hotmail.com', '4777116', '3104575250', 'Telecentro Pedregal', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(282, 282, 'Mario', 'Arboleda', 'Vicepresidente Concejo Comunal', 'mhao714@gmail.com', '4777116', '3147969383', 'Concejo Comunal Pedregal', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(283, 283, 'Alejandra', 'Villa', 'Dinamizadora Telecentro', 'telecentropicacho@gmail.com', '4764178', '3104424383', 'Telecentro Picacho', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(284, 284, 'Juan Carlos ', 'Tabares', 'Representante Legal', 'telecentropicacho@gmail.com', '4777116', '3014087045', 'Telecentro Picacho', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(285, 285, 'Beatriz Elena', 'Gallo', 'Inspectora', 'beatriz.gallo@medellin.gov.co', '4776011', '', 'Inspección Doce de Octubre', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(286, 286, 'Fanny', 'Arias', 'Líder de Centro de Servicios', 'fanny.arias@medellin.gov.co', '3857405', '3013883762', 'Secretaría de Calidad y Servicio a la Ciudad', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(287, 287, 'Nelson ', 'González', 'Rector', 'negamaya1213@yahoo.es', '257 5489', '311 632 6824', 'Fe y Alegría Aures', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(288, 288, 'Ana Delia ', 'Cardenas Guarín', 'Rectora', 'anadeliacardenas.semi@gmail.com', '441 4908', '312 296 1997', 'Fe y Alegría San José', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(289, 289, 'Juan Fernando ', 'Quiceno Arías', 'Docente', 'juanfer8933@gmail.com', '2300313', '3108429633', 'Gerardo Valencia Cano', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(290, 290, 'Claudia ', 'López', 'Docente', 'claudialopez51@yahoo.com', '2642310', '3136183160', 'Fe y Alegría Villa de la Candelaria', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(291, 291, 'Socorro ', 'Vergara', 'Rectora', 'ie.luislopezdemesa@medellin.gov.co', '441 7456', '316 655 8593', 'Luis López de Mesa', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(292, 292, 'Sonia', 'Hernandez Taborda ', 'Coordinadora', 'soniamariaht@gmail.com', '2570925', '3127229097', 'Luis López de Mesa', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(293, 293, 'Yeison ', 'Paniagua', 'Coordinador ', 'yeison.paniagua@medellin.gov.co', '4373590', '3004381240', 'Casa de la Justicia de Robledo', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(294, 294, 'Andrés ', 'Bernal ', 'Coordinador', 'cedezolaquintana@gmail.com', '3857341', '3006656900', 'CEDEZO La Quintana', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(295, 295, 'Flavio ', 'Peréz', 'Gestor Empresarial', 'cedezolaquintana@gmail.com', '3857341', '3148816373', 'CEDEZO La Quintana', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(296, 296, 'Edisón Ferney ', 'Giraldo', 'Técnico Biblioteca', 'ferneyedison@hotmail.com', '385 73 42', '', 'Parque Biblioteca Tomás Carrasquilla La Quintana', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(297, 297, 'María Juliana', 'Yepes', 'Cultura Digital', 'mariajulianayb@gmail.com', '385 73 42', '', 'Parque Biblioteca Tomás Carrasquilla La Quintana', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(298, 298, 'Luz Mariza ', 'Velasquez', 'Gestores Servicios', 'gestor.quintana@bibliotecasmedellin.gov.co', '385 73 42', '', 'Parque Biblioteca Tomás Carrasquilla La Quintana', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(299, 299, 'Yina Sirley ', 'García Tobón ', 'Técnica Biblioteca', 'yina.828@hotmail.com', '385 73 42', '', 'Parque Biblioteca Tomás Carrasquilla La Quintana', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(300, 300, 'Yuliana ', 'Tabares', 'Auxiliar Administrativa', 'jayui824@hotmail.com', '385 73 42', '', 'Parque Biblioteca Tomás Carrasquilla La Quintana', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(301, 301, 'Sandra Milena', 'Valencia Mira', 'Técnico Biblioteca', 'milemi09@hotmail.com', '385 73 42', '', 'Parque Biblioteca Tomás Carrasquilla La Quintana', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(302, 302, 'Norma', 'Ibargüen ', 'Técnico Biblioteca', 'clavellinoazul@gmail.com', '385 73 42', '', 'Parque Biblioteca Tomás Carrasquilla La Quintana', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(303, 303, 'Guillermo ', 'Cossio González ', 'Coordinador ', 'cedezosantodomingo@gmail.com', '5280559', '3104555776', 'CEDEZO Santo Domingo Savio ', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);
INSERT INTO `people` (`id_person`, `cedula`, `name`, `lastname`, `charge`, `email`, `phone`, `cell`, `entity`, `genre`, `economic_level`, `birthday`, `creation_date`, `modification_date`, `user_id`) VALUES
(304, 304, 'Mario ', 'Álvarez Chavarriaga ', 'Líder de Servicio ', 'telecentrosantacecilia1@gmail.com', '5291142', '5291142', 'Telecentro Santa Cecilia 1', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(305, 305, 'Carlos', 'Quiroz Castro', 'Dinamizador ', 'telecentrostacecilia2jac@gmail.com', '5728133', '3015434117', 'Telecentro Santa Cecilia 2 ', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(307, 307, 'Cristina ', 'Álvarez ', 'Coordinadora ', 'santodomingo@bibliotecasmedellin.gov.co', '3857598', '3008775133', 'Parque Biblioteca España ', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(308, 308, ' Carlos Alberto ', 'López', 'Coordinador Tarde', 'caalloba@hotmail.com', '267 7552', '', 'Alfredo Cock Arango', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(309, 309, 'Jhon ', 'Preciado', 'Coordinador Mañana', 'jjpreciado@gmail.com', '267 7552', '', 'Alfredo Cock Arango', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(310, 310, 'Angela ', 'Mena   ', 'Docente', 'menaarango.angelanelly@gmail.com', '267 7552', '', 'Alfredo Cock Arango', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(311, 311, 'Luis Carlos ', 'Grajales  ', 'Docente', 'luigigrajales717@hotmail.com', '267 7552', '', 'Alfredo Cock Arango', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(312, 312, 'Yenys Paola ', 'Manjarres', 'Docente', 'yenissierra@yahoo.es', '267 7552', '', 'Alfredo Cock Arango', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(313, 313, 'Juliana ', 'Barrios', 'Directora', 'direccion.docedeoctubre@bibliotecasmedellin.g', '477 62 84', '3004944638', 'Parque Biblioteca Doce de Octubre', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(314, 314, 'Andrea ', 'Osorio Sierra', 'Técnico Cultura Digital', 'andrea.osoriosierra@gmail.com', '477 62 84', '3008813945', 'Parque Biblioteca Doce de Octubre', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(334, 334, 'Bernardo Antonio', 'Morales', 'Retor I.E', 'sujeymejia@gmail.com', '529 3562 -529 3562', '3164651328', 'I.E Fe y Alegría Granizal', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(335, 335, 'Dolly Sujey', 'Mejíaa Quintero', 'Docente', 'sujeymejia@gmail.com', '529 3562 -529 3562', '314 7911167', 'I.E Fe y Alegría Granizal', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(336, 336, 'Luz María ', 'Ramírez', 'Rectora', 'vialuz117@gmail.com', '521 3099', '301 661 7646', 'I.E San Pablo', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(337, 337, 'Evelio', 'Ospina Grisales', 'Rector', 'evospina@gmail.com', '461 0517', '3136566391', 'I.E Asia Ignaciana', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(338, 338, 'Abelardo ', 'Zuluaga', 'Bibliotecario I.E Asia Ignaciana', 'canzu65@gmail.com', '461 0517', '3166855034', 'I.E Asia Ignaciana', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(339, 339, 'Willmar', 'Osorio', 'Coordinador', 'willmar.osorio@hotmail.com', '366 3210', '3104948132', 'Telecentro Villa del Socorro', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(340, 340, 'Elver ', 'Arias', 'Rector', 'feyalegria@une.net.co', '461 1223/464 4146/ 4627507', '300 645 8417', 'I.E José María Velaz', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(341, 341, 'Adriana ', 'Ruiz', 'Directora', 'adriana.ruizm@medellin.gov.co', '522 03 03', '3015138570', 'Casa de justicia Villa del Socorro', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(342, 342, 'Maria Catalina', 'Botero', 'Docente', 'ktabote@hotmail.com', '2849094', '314 7948004', 'I.E Rodrigo Lara Bonilla', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(343, 343, 'Osías ', 'Velásquez', 'Rector', 'gacerovo@hotmail.com', '291 1707', '291 1707', 'I.E Enrique Olaya Herrera', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(344, 344, 'Katerine', 'Blandón', 'Docente', 'kablaar1@gmail.com', '291 1707', '301 573 3757', 'I.E Enrique Olaya Herrera', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(345, 345, 'Alvaro ', 'Londoño Ocampo', 'Coordinador Académico', 'alvaro1628@gmail.com', '2635951 - 2114410 -2331575- 2125486', '300 889 1815', 'I.E José María Bravo Márquez', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(346, 346, 'Blanca Dora', 'Galeano Upegui', 'Rectora', 'rectora.bm@gmail.com', '2635951 - 2114410 -2331575- 2125486', '321 648 2089', 'I.E José María Bravo Márquez', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(347, 347, 'Sandra Milena', 'Botero', 'Coordinadora', 'cedezomanrique@gmail.com', '2136050- 3858062- 3014683996', '', 'Cedezo Manrique', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(348, 348, 'Brenda', 'Tellez ', 'Tamayo', 'ortellez@yahoo.es', '3834192', '3007853902', 'Cav Palermo', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(349, 349, 'Gloria Patricia ', 'Gaviria', 'Coordinadora ', 'gloriagaviriav@gmail.com', '2584057', '3136993088', 'Telecentro Palermo', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(350, 350, 'Juan Carlos', 'Rodriguez', 'Rector', 'juan.rodriguez@medellin.gov.co', '412 3351 - 412 2939', '310 554 5923', 'I.E Lucrecio Jaramillo Vélez', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(351, 351, 'Luis Guillermo ', 'Sierra', 'Docente', 'lsierra20@hotmail.com', '412 3351 - 412 2939', '310 554 5923', 'I.E Lucrecio Jaramillo Vélez', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(352, 352, 'Maria del Socorro', 'Ocampo', 'Asistente Administrativa', 'maria.ocampom@medellin.gov.co', '3857255', '3128378190', 'Cav América', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(353, 353, 'Luisa Fernanda', 'Ruiz', 'Docente', 'luisamella22@gmail.com', '2849094', '3006150442', 'I.E Rodrigo Lara Bonilla', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(354, 354, 'Jhon Jairo', 'Uribe', 'Docente', 'jhon.uribe@hotmail.com', '2635951 - 2114410 -2331575- 2125486', '3017030778', 'I.E José María Bravo Márquez', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(355, 355, 'Alexandra', 'Jaramillo', 'Estudiante', 'alesa.jaramillo@gmail.com', '3117725735', '3117725735', 'I.E Jose María Bravo Márquez', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(356, 356, 'Natalia Andrea', 'Arredondo', 'Docente', 'ingnataliaedu@gmail.com', '3137841691', '3137841691', 'I.E Fe y Alegría Granizal', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(366, 366, 'Ángel Giovanni ', 'Pardo', 'Rector ', 'angel.pardo@medellin.gov.co', '301 734 99 66', '', 'IE Nuevo Horizonte', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(367, 367, 'Arleison', 'Arcos Rivas', 'Rector ', 'federicocarrasquilla@gmail.com', '2580194', '', 'IE Federico Carrasquilla', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(368, 368, 'Luis ', 'Cardales', 'Docente', 'luchocardales@gmail.com', '3014168163', '', 'IE Santa Teresa', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(369, 369, 'Marcela', 'Zapata', 'Docente', 'marce.zapatag@gmail.com', '3113681764', '', 'Santa Teresa', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(370, 370, 'Hugo León ', 'Gutiérrez', 'Rector', 'iebscruz1@hotmail.com', '311 360 8668', '', 'Barrio Santa Cruz', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(371, 371, 'Jorge ', 'Rentería', 'Docente', 'jrente1614@gmail.com', '233 1414', '300654506', 'Roberto Vásquez ', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(372, 372, 'Flor Azalia ', 'Villa Atehortua', 'Rectora', 'ie.pedroluisvilla@medellin.gov.co', '233 2748 - 211 6350', '3004668840', 'Pedro Luis Villa', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(373, 373, 'Libardo', 'Munera', 'Docente', 'lmunerag@gmail.com', '2363000', '311 756 3280', 'José Antonio Galán', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(374, 374, 'Libia', 'Pabón', 'Rectora', 'institucionhta@yahoo.com', ' 2136830', '', 'Hernán Toro Agudelo', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(375, 375, 'Ana', 'Cardenas', 'Coordinadora', 'cdcmanrique@gmail.com', '211 73 73', '3004922749', 'Casa de la Cultura de Manrique', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(376, 376, 'Luz Margot', 'Patiño', 'Coordinadora', 'telecentromanrique@gmail.com', '5273736', '3148243812', 'Telecentro de Manrique', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(377, 377, 'Luisa Fernanda', 'Mosquera', 'Docente', 'multigrado12@gmail.com', '3012020267', '', 'Francisco Luis Hernández ', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(378, 378, 'Walter', 'Vélez', 'Coordinador', 'wvelez@iefranciscoluis.edu.co', '2368970', '', 'Francisco Luis Hernández ', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(379, 379, 'Adriana ', 'Castrillon', 'Docente', 'nanacasba@hotmail.com', '2632687', '3116230798', 'Guillermo Vélez Vélez', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(380, 380, 'Juan Guillermo ', 'Pino', 'Docente', 'juanguillermopino@yahoo.com', '311 3365402', '', 'Guillermo Vélez Vélez', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(381, 381, 'Nicolás ', 'Ríos', 'Coordinador', 'coordinacion.bjzuletaferrer@bibliotecapiloto.', '2118232', '3012748754', 'BPP sede Campo Valdés', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(382, 382, 'Hanna', 'Jaramillo', 'Coordinadora', 'cedezomoravia@gmail.com', '3857330 ', '311 7852025', 'CEDEZO Moravia ', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(383, 383, 'Alvaro ', 'Ossa', 'Secretario', 'alvaro.ossa@medellin.gov.co', '2581873', '', 'Inspección Aranjuez', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(384, 384, 'Ana ', 'Restrepo', 'Coordinadora', 'arestrepo86@gmail.com', '2132809', '', 'Centro de Desarrollo Cultural de Moravia', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(385, 385, 'Carlos', 'Ossa', 'Coordinador', 'centroloscolores@gmail.com', '4216611', '310 8148354', 'Centro Cultural Los Colores', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(386, 386, 'Alba', 'Pérez', 'Coordinadora del servicio al público', 'servicios@bibliotecapiloto.gov.co', '4600590 ext 227-214', '3113849764', 'Biblioteca Pública Piloto', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(387, 387, 'Viviana ', 'Gómez', 'Referencista', 'nana987@gmail.com', '4600590', '', 'Biblioteca Pública Piloto', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(388, 388, 'Huberto', 'Giraldo', 'Rector', 'hubertogiraldo@gmail.com', '252 0097', '3007817745', 'Lola González ', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(389, 389, 'Juan de Dios', 'Arango', 'Rector', 'arangomedrano@gmail.com', '252 0535', '310 5043810', 'Cristóbal Colón', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(390, 390, 'Diego', 'Bastidas', 'Docente', 'diego0530@hotmail.es', '252 0535', '311 6405196', 'Cristóbal Colón', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(391, 391, 'David', 'Ramirez', 'Coordinador', 'ramirezdavidh@gmail.com', '4211148', '312 2964303', 'Colegio el Concejo -Escuela Maestro Clodomiro', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(392, 392, 'Vanessa', 'De los Ríos', 'Coordinadora sala de sistemas', 'vane1204@gmail.com', '4119154', '', 'Biblioteca La Floresta', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(400, 400, 'Diana 		', 'Pérez', 'Docente', 'diama90@hotmail.com', '310 378 3302', '', 'Escuela Santa Elena', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(401, 401, 'JUAN ESTEBAN 	', 'FRANCO', 'Coordinador', 'cedezosantaelena@gmail.com', '3857503 - 3002998222	', '', 'Cedezo Santa Elena', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(402, 402, 'Alba Lucía 		', 'Sierra Hernandez', 'Docente', 'als821@gmail.com', '300 6173679', '', 'IE Santa Elena', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(500, 500, 'Sandra Milena ', 'Valencia Mira', 'Técnico Biblioteca', 'milemi09@hotmail.com', '385 73 42', '', 'Parque Biblioteca Tomás Carrasquilla La Quintana', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(501, 501, 'Norma', 'Ibargüen', 'Técnico Biblioteca', 'clavellinoazul@gmail.com', '385 73 42', '', 'Parque Biblioteca Tomás Carrasquilla La Quintana', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(502, 502, 'Erika', 'Monsalve Ochoa', 'Técnica Sala Mi Barrio', 'erika.monsalve@gmail.com', '502', '', 'Parque Biblioteca Tomás Carrasquilla La Quintana', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(503, 503, 'Hildebrando ', 'Giraldo', 'Docente', 'hildegiraldo@yahoo.es', '267 7552', '300 735 8572', 'Alfredo Cock Arango', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(504, 504, 'Margarita María ', 'Jaramillo Guzmán', 'Rectora', 'margari66@hotmail.com', '267 7552', '300 614 6618', 'Alfredo Cock Arango', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(505, 505, 'Leticia ', 'Ocampo', 'Maestra de Apoyo', 'niapia@msn.com', '267 7552', '', 'Alfredo Cock Arango', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(506, 506, 'Xiomara ', 'Salgado', 'Analista Biblioteca', 'analistabiblioteca@colmayor.edu.co', '4 44 56 11', '', 'Colegio Mayor de Antioquia', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(508, 508, 'Pablo ', 'Ochoa', 'Líder Mesa de Discapacidad', 'p8a2@hotmail.com', '4778433', '3108791977', 'Mesa de Discapacidad Comuna 6', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(509, 509, 'Carlos ', 'Penagos', 'Líder Comunitario ', 'ramsescarlos@yahoo.es', '4775884', '3007483054', 'Edil Junta Administradora Local Comuna 6', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(510, 15444241, 'Jorge', 'Ocampo Rendón', 'Profesional de Cultura Digital', 'jorge.ocampo@mdeinteligente.co', '5168529', '3005766422', 'Medellín Ciudad Inteligente', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(511, 21619812, 'Nohemy', 'Quiroz ', 'Docente', 'nohemyq@hotmail.com', '3112578', '3193201938', 'Institución Educativa INEM Guillermo Echavarria ', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(512, 43265452, 'Catalina ', 'Durango Ramírez', 'Agente Dinamizador', '', '4444963', '3163957411', 'Medellín Ciudad Inteligente', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(513, 43459681, 'Clara Eugenia ', 'Arias', 'Agente Dinamizador', 'clara.arias@mdeinteligente.co', '4444963', '3113792019', 'Medellín Ciudad Inteligente', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(514, 43514379, 'Luz ', 'Vélez Arroyave', 'Docente', 'lucyvelezarro@yahoo.com', '3112578', '3007872205', 'Institución Educativa INEM Guillermo Echavarria ', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(515, 43987292, 'Mónica Alejandra  ', 'Castañeda', 'Agente Dinamizador', 'monica.castaneda@mdeinteligente.co', '4444963', '3142258090', 'Medellín Ciudad Inteligente', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(516, 44006770, 'Amelia ', 'Caro Martínez', 'Agente Dinamizador ', 'amelia.caro@mdeinteligente.co', '4444963', '3113074174', 'Medellín Ciudad Inteligente', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(517, 71279301, 'Christian', 'Vásquez Manrique', 'Agente dinamizador', 'christian.vasquez@mdeinteligente.co', '4444963', '3205882785', 'Medellín Ciudad Inteligente', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(518, 71778131, 'Juan Camilo ', 'Parra ', 'Agente Dinamizador', 'juan.parra@mdeinteligente.co', '4444963', '3012089064', 'Medellín Ciudad Inteligente', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(519, 98525547, 'Luis Carlos ', 'Betancur', 'Coordinador', 'luiskbcoordinador@yahoo.com', '2860010', '3007134532', 'Institución Educativa Monseñor Victor Wiedemann', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(520, 43279335, 'Biviana ', 'Arango Muñoz', 'Lider de Conectividad', 'biviana.arango@mdeinteligente.co', '4444963', '313998727', 'Medellín Ciudad Inteligente', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(521, 804829142, 'Jhon Mario', 'Garavito', 'Rector', 'jgaravito@josegalan.edu.co', '2 36 3000', '', 'José Antonio Galán', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(522, 70562476, 'Pedro', 'Moreno', 'Coordinador Cedezo', 'cedezoaltavista@gmail.com', '3146779327', '', 'Cedezo altavista', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2015-04-27 18:36:15', 0),
(523, 1017130879, 'Johana ', 'Higuita Castro ', 'Agente Dinamizador', 'johana.higuita@mdeinteligente.co', '4444963', '3014252794', 'Medellín Ciudad Inteligente', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(524, 1018343559, 'Gabriel', 'Atehortúa Meneses', 'Profesional de Inclusión Digital', 'gabriel.atehortua@mdeinteligente.co', '5168504', '3159266792', 'Medellín Ciudad Inteligente', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(525, 1035417264, 'María Paulina ', 'Díaz Arango', 'Agente Dinamizador', 'maria.diaz@mdeinteligente.co', '4444963', '3113531746', 'Medellín Ciudad Inteligente', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(526, 1036603091, 'Rosa María ', 'Pérez', 'Agente Dinamizador', 'rosa.perez@mdeinteligente.co', '4444963', '3046413327', 'Medellín Ciudad Inteligente', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(527, 1037575195, 'Juan Camilo ', 'Pérez', 'Agente Dinamizador', 'juan.perez@mdeinteligente.co', '4444963', '3014127144', 'Medellín Ciudad Inteligente', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(528, 1037613575, 'Mónica María', 'Mazo Flórez', 'Estudiante ', 'gemelis15@hotmail.com', '3202223780', '3202223780', 'Presupuesto participativo', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(529, 1037619606, 'Xiomara', 'Cuervo', 'Estudiante ', 'm-a-myxiomy@hotmail.com', '4912366', '3016724631', 'Presupuesto participativo', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(530, 1045048060, 'Carolina ', 'Agudelo Herrera', 'Agente Dinamizador', 'carolina.agudelo@mdeinteligente.co', '4444963', '3002355721', 'Medellín Ciudad Inteligente', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(531, 1128425147, 'Alejandro ', 'Marín Valencia', 'Agente Dinamizador', 'alejandro.marin@mdeinteligente.co', '4444963', '3146746251', 'Medellín Ciudad Inteligente', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(532, 1128450488, 'Cindy', 'Jaramillo', 'Agente Dinamizador', 'cindy.jaramillo@mdeinteligente.co', '4444963', '3015594118', 'Medellín Ciudad Inteligente', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(533, 1152693036, 'María Alejandra', 'Botero', 'Estudiante ', 'maleja1331@gmail.com', '5817654', '3165805714', 'Presupuesto participativo', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(534, 9876543219, 'Maria', 'Gomez', 'Practicante', 'maria@mariagomez', '4444963', '', 'Medellín Ciudad Inteligente', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(535, 1037616975, 'Agustin ', 'Patiño Orozco', 'Agente Dinamizador', 'agustin.patino@mdeinteligente.co', '4444963', '3002736932', 'Medellín Ciudad Inteligente', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(536, 1017189745, 'Johana', 'Jaramillo', 'Asistente de Soporte', 'johana.jaramillo@mdeinteligente.co', '4444963', '3113777726', 'Medellín Ciudad Inteligente', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(537, 37861737, 'Juana', ' Fuentes Gamboa', 'Lider de apropiación', 'juana.fuentes@mdeinteligente.co', '4444963', '3006279774', 'Medellín Ciudad Inteligente', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(538, 43508833, 'Vidalia María ', 'Cuesta', 'Dinamizadora Telecentro', 'vimacui@gmail.com', '3543668', '3127978445', 'Telecentro Belén Zafra', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2014-11-21 19:55:23', 0),
(539, 43545223, 'Beatriz ', 'Jordan', 'Secretaria', 'beatriz.jordan@medellin.gov.co', '3856823', '', 'Casa de Gobierno San Antonio de Prado', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2014-11-21 19:57:29', 0),
(540, 3539819, 'José Ignacio ', 'Jaramillo', 'Polivalente', 'josei.jaramillo@medellin.gov.co', '3856827', '', 'Casa de Gobierno San Antonio de Prado', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2014-11-21 19:58:06', 0),
(541, 98772814, 'Juan Diego', 'Urrea Upegui', 'Líder de Comunicación Pública', 'juan.urrea@mdeinteligente.co', '4444963', '', 'Medellín Ciudad Inteligente', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2014-11-21 19:52:47', 0),
(542, 548760860, 'Fredy', 'Tabarez', 'Docente', 'johnfres77@gmail.com', '2529549', '3207452441', 'IE La Independencia Sede Bachillerato', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2014-11-21 19:58:45', 0),
(545, 1094892116, 'Nicolas', 'Tobon ', 'Desarrollador', 'nicolas.tobon@mdeinteligente.co', '3168786134', '316789461', 'MDE', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(546, 22058183, 'Martha Lucía', 'Arango Palacio', 'Directora de CE Altavista', 'marthaluarpa@gmail.com', '3410940', '3117380372', 'CE El Manzanillo', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(547, 1128460576, 'Paula Andrea', 'Ramirez Quintero', 'Estudiante de PP Comuna 80', 'paulita.arq@gmail.com', '3004342814', '3004342814', 'Comuna 80', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2014-11-28 21:11:10', 0),
(548, 97011311184, 'Juan Pablo', 'Velasquez Gómez', 'Estudiante de PP Comuna 80', 'pampa-0113@hotmail.com', '3012560956', '3012560956', 'Comuna 80', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(550, 7725981, 'Jhon Jairo ', 'Perdomo ', 'Dinamizador Telecentro', 'jaiper11@hotmail.com', '4924295', '3166828688', 'Telecentro Los Tanques', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '2014-12-02 22:01:23', 0),
(552, 43520390, 'Alba Nelly ', 'Alvarez', 'Presidente JAC ', 'nelly_0523@hotmail.com', '4964946', '3103825020', 'Telecentro Monteverde', 0, 0, '0000-00-00', '2014-12-03 14:02:20', '0000-00-00 00:00:00', 14),
(553, 43832182, 'Erika María', 'Pérez', 'Dinamizadora Telecentro', 'ericapebe@gmail.com', '2355850', '3014818230', 'Telecentro Trinidad', 0, 0, '0000-00-00', '2014-12-05 13:40:05', '0000-00-00 00:00:00', 15),
(554, 71271589, 'Cesar Augusto', 'Bedoya', 'Voluntario', 'caba198120@gmail.com', '2355850', '', 'Telecentro Trinidad', 0, 0, '0000-00-00', '2014-12-05 13:41:34', '0000-00-00 00:00:00', 15),
(555, 1001385949, 'Daniel Alberto', 'David', 'Dinamizador Telecentro Blanquizal', 'daniel3david@gmail.com', '4260502', '3137487120', 'Telecentro Blanquizal', 0, 0, '0000-00-00', '2014-12-09 09:23:15', '0000-00-00 00:00:00', 38),
(556, 94505073, 'Adrian ', 'Prado Pereañez', 'Auxiliar administrativo', 'coordinacion.bsanantonio@biblioteca.gov.co', '3794440', '', 'Filial Biblioteca San Antonio De Prado', 0, 0, '0000-00-00', '2014-12-12 13:34:34', '0000-00-00 00:00:00', 15),
(557, 70080198, 'Diego ', 'Salazar Peláez ', 'Dinamizador Telecentro', 'telecentro.rosales@gmail.com', '2352978', '3004725554', 'Telecentro Rosales', 0, 0, '0000-00-00', '2014-12-12 13:45:19', '0000-00-00 00:00:00', 15),
(558, 22052017, 'Luz Mary', 'Sánchez', 'Inspectora', 'luzm.sanchez@medellin.gov.co', '2857561-2581873', '3127303865', 'Inspección de Aranjuez', 0, 0, '0000-00-00', '2014-12-12 16:16:25', '0000-00-00 00:00:00', 21),
(559, 1037598317, 'Nataly ', 'Blandon', 'Auxiliar', 'nataly.blandon@medellin.gov.co', '3857414', '', 'Mascerca Poblado', 0, 0, '0000-00-00', '2014-12-12 16:59:34', '2014-12-18 15:52:08', 15),
(560, 43277208, 'Isabel Cristina', 'Loaiza', 'Voluntaria Biblioteca el Manzanillo', 'loaizaa921@hotmail.com', '3176241586', '', 'Biblioteca Comunitaria El Manzanillo', 0, 0, '0000-00-00', '2014-12-16 13:45:39', '0000-00-00 00:00:00', 38),
(561, 43996132, 'Claudia', 'Loaiza', 'Voluntaria Biblioteca el Manzanillo', 'loaizares@hotmail.com', '3410860', '', 'Biblioteca Comunitaria El Manzanillo', 0, 0, '0000-00-00', '2014-12-16 13:46:54', '0000-00-00 00:00:00', 38),
(562, 43873301, 'Luisa Fernanda', 'Gaviria Villada', 'Directora comercial', 'direccioncomercial@terminaldelsur.com', '3611588', '3105044720', 'Centro Comercial Terminal del sur ', 0, 0, '0000-00-00', '2014-12-18 08:29:41', '0000-00-00 00:00:00', 15),
(563, 43158461, 'Andrea', 'Lazaro', 'Comunicadora', 'comunicaciones@terminaldelsur.com', '3611588', '', 'Centro Comercial Terminal del sur ', 0, 0, '0000-00-00', '2014-12-18 08:31:45', '0000-00-00 00:00:00', 15),
(564, 1036599251, 'Yulieth Natalia ', 'Zapata Serna', 'Dinamizadora Telecentro', 'lara-jith@hotmail.com', '4764178', '3107427777', 'Telecentro Picacho', 0, 0, '0000-00-00', '2014-12-22 13:16:16', '0000-00-00 00:00:00', 24),
(565, 22705001, 'Claudia', 'Castro', 'Directora', 'claudia.castro@medellin.gov.co', '5220303', '3013850313', 'Casa de justicia Villa del Socorro', 0, 0, '0000-00-00', '2015-02-09 09:02:54', '2015-05-11 13:38:24', 23),
(566, 1152437504, 'Leidy Juliana', 'Mazo Osorio', 'Gestora de Cultura Digital', 'juliana.mazo@mdeinteligente.co', '4444 963', '3126838925', 'Medellín Ciudad Inteligente', 0, 0, '0000-00-00', '2015-03-04 08:25:34', '0000-00-00 00:00:00', 13),
(567, 1128279043, 'María del Carmen', 'Mesa Estrada', 'Gestora de Cultura Digital', 'maria.mesa@mdeinteligente.co', '4444 963', '3007455873', 'Medellín Ciudad Inteligente', 0, 0, '0000-00-00', '2015-03-04 08:29:03', '0000-00-00 00:00:00', 13),
(568, 1036395604, 'Liseth Alejandra', 'Henao García', 'Gestora de Cultura Digital', 'liseth.henao@mdeinteligente.co', '4444 963', '3137798154', 'Medellín Ciudad Inteligente', 0, 0, '0000-00-00', '2015-03-04 08:35:47', '0000-00-00 00:00:00', 13),
(569, 70047982, 'Jorge Osiel ', 'Zapata Orozco', 'Coordinador', 'jozapatao1@gmail.com', '2562097', '3014071346', 'Institución Educativa San Roberto Belarmino', 0, 0, '0000-00-00', '2015-03-06 14:37:12', '0000-00-00 00:00:00', 15),
(570, 43019679, 'Claudia', 'Bohorquez Vergara', 'Gestora empresarial', 'cedezosanantoniodeprado@gmail.com', '385 6828', '3137597162', 'CEDEZO San Antonio de Prado', 0, 0, '0000-00-00', '2015-03-06 15:52:37', '0000-00-00 00:00:00', 15),
(571, 1037616222, 'Maria Laura', 'Yepes Escobar', 'Gestora Cultura Digital', 'maria.yepes@mdeinteligente.co', '4444963 Ext 537', '', 'MDEInteligente', 0, 0, '0000-00-00', '2015-03-09 08:18:55', '0000-00-00 00:00:00', 12),
(572, 1128440960, 'Cristian', 'Hernandez', 'Técnico en Cultura Digital', 'alexhja@hotmail.com', '3857312', '3216229236', 'Sistema de Bibliotecas Públicas de Medellín', 0, 0, '0000-00-00', '2015-03-09 16:38:15', '0000-00-00 00:00:00', 38),
(573, 71677165, 'Sebastian ', 'Velasquez Velez', 'Gestor Empresarial', 'cedezosanjavier@gmail.com', '3857533', '', 'CEDEZO San Javier', 0, 0, '0000-00-00', '2015-03-11 10:55:58', '0000-00-00 00:00:00', 15),
(574, 32143828, 'Nilda Rocío', 'Jordan', 'Coordinador', 'biblioteca.elraizal@ratondebiblioteca.org', '3105948970', '', 'Biblioteca El Raizal', 0, 0, '0000-00-00', '2015-03-18 15:20:02', '0000-00-00 00:00:00', 10),
(575, 32256628, 'Natalia', 'Espejo', 'Directora', 'direccion.guayabal@bibliotecasmedellin.gov.co', '3510495', '3146791461', 'Parque Biblioteca Manuel Mejía Vallejo - Guayabal', 0, 0, '0000-00-00', '2015-03-19 09:13:07', '0000-00-00 00:00:00', 43),
(576, 42764328, 'Gloria Amanda', 'Sánchez', 'Administradora ', 'asanchez@pascualbravo.edu.co', '3204660', '3173712224', 'Institución Universitaria Pascual Bravo', 0, 0, '0000-00-00', '2015-03-19 14:04:54', '0000-00-00 00:00:00', 43),
(577, 43598920, 'Gloria Patricia ', 'Duque Giraldo', 'Soporte Técnico ', 'g.duque@pascualbravo.edu.co', '3002078409', '', 'Institución Universitaria Pascual Bravo', 0, 0, '0000-00-00', '2015-03-19 14:11:00', '0000-00-00 00:00:00', 43),
(578, 0, 'Hermana Fanny', 'Casanova', 'Coordinadora', 'iedu.laasuncion@gmail.com', '521 74 66   ', '', 'IE La Asunción', 0, 0, '0000-00-00', '2015-03-20 14:37:20', '0000-00-00 00:00:00', 21),
(579, 43251307, 'Adriana Patricia ', 'Valencia Zuluaga', 'Docente de aula de apoyo', 'apitavazu23@yahoo.es', '2385168', '3162661871', 'Pedro Octavio Amado', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(580, 1152453177, 'Brian ', 'Angel Florez', 'Dinamizador', 'tc.comunaaltavista@gmail.com', '3046689049', '', 'Telecentro Altavista', 0, 0, '0000-00-00', '2015-03-24 11:07:43', '0000-00-00 00:00:00', 43),
(582, 1036626002, 'Jhonatan ', 'Vélez Agudelo', 'Auxiliar de servicio al cliente', 'jhonatan.velez@medellin.gov.co', '3857440', '', 'Casa De Gobierno Altavista', 0, 0, '0000-00-00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(587, 15515987, 'Marcial ', 'Aguirre', 'Encargado De Fomento A La Lectura', 'lectura.santodomingo@bibiliotecasmedellin.gov', '3857598', '3003597426', 'Biblioteca España', 0, 0, '0000-00-00', '2015-03-24 15:14:42', '0000-00-00 00:00:00', 41),
(588, 1037638401, 'Estiven', 'Ocampo Bedoya', 'Dinamizador Biblioteca', 'stevenocampodeboya@gmail.com', '4928888', '3117796417', 'Comfenalco', 0, 0, '0000-00-00', '2015-03-25 10:09:29', '0000-00-00 00:00:00', 38),
(589, 1242532, 'Jaime', 'Sanchez', 'Rector', 'rectorialimonar@gmail.com', '2862293', '3137750533', 'IE El Limonar', 0, 0, '0000-00-00', '2015-03-25 11:25:13', '0000-00-00 00:00:00', 38),
(590, 39355750, 'Marleny', 'Gonzalez', 'Auxiliar Administrativo', 'bsanantonio@bibliotecapiloto.gov.co', '379 44 40', '', 'Filial Biblioteca San Antonio De Prado', 0, 0, '0000-00-00', '2015-03-25 16:45:06', '0000-00-00 00:00:00', 15),
(591, 1020423999, 'Daniel', 'Gaviria Vélez', 'Técnico Social Y Cultural', 'danielgaviria17@gmail.com', '3857342', '3217807214', 'Parque Biblioteca La Quintana', 0, 0, '0000-00-00', '2015-03-26 14:44:33', '0000-00-00 00:00:00', 42),
(592, 104004369, 'Astrid Lorena', 'Carmona Suarez ', 'Técnica En Cultura Digital', 'astridcarmona20@gmail.com', '3857342', '3103901804', 'Parque Biblioteca La Quintana', 0, 0, '0000-00-00', '2015-03-26 14:50:48', '0000-00-00 00:00:00', 42),
(593, 1234567, 'Diana Marcela ', 'Ramirez', 'Gestora De Servicios Bibliotecarios', 'direccion.popular2@bibliotecasmedellin.gov.co', '312 8433234', '', 'Biblioteca Popular 2', 0, 0, '0000-00-00', '2015-03-27 08:02:22', '0000-00-00 00:00:00', 10),
(594, 88144665, 'Josue ', 'Machuca', 'Docente De Tecnología', 'josuemachuca@hotmail.com', '3454793', '3006174705', 'Institución Educativa Jose María Bernal ', 0, 0, '0000-00-00', '2015-03-27 15:22:49', '0000-00-00 00:00:00', 43),
(595, 1234568, 'Juan Felipe', 'Villegas', 'Gestor', 'telecentros@gmail.co', '3006254823', '', 'Telecentro Santa Monica', 0, 0, '0000-00-00', '2015-03-27 16:02:13', '0000-00-00 00:00:00', 10),
(596, 22229901, 'Gloria ', 'Vidal', 'Líder Comunitaria', 'gloriavial22@gmail.com', '3122176489 ', '', 'JAC Villa Flora', 0, 0, '0000-00-00', '2015-03-30 09:30:10', '0000-00-00 00:00:00', 42),
(597, 15363192, 'Carlos Arturo ', 'Vengoechea', 'Rector', 'iebhmed@gmail.com', '4480073', '3108958841', 'Institución Educativa Benjamín Herrera', 0, 0, '0000-00-00', '2015-03-30 09:30:51', '0000-00-00 00:00:00', 43),
(598, 71734607, 'Raúl Esteban ', 'Giraldo Zapata', 'Administrador Del Centro De Integración Barri', 'barriolosmangos@gmail.com', '2916235', '3002210981', 'Centro De Integración Barrial', 0, 0, '0000-00-00', '2015-03-30 09:32:58', '0000-00-00 00:00:00', 40),
(599, 98761312, 'Ricardo', 'Sánchez', 'Dinamizador', 'telecentro.altamira2013@gmail.com', '4226847', '3008987052', 'Telecentro Altamira', 0, 0, '0000-00-00', '2015-03-30 09:37:56', '0000-00-00 00:00:00', 23),
(600, 2000, 'Humberto ', 'Pérez', 'Coordinador Académico', 'academicocefa@hotmail.es', '2175337', '3103834668', 'CEFA', 0, 0, '0000-00-00', '2015-03-30 09:48:43', '0000-00-00 00:00:00', 17),
(601, 43815800, 'Rosa', 'Cuadrado', 'Dinamizadora Cultural', 'edithcuadrado@gmail.com', '2691021', '3004513600', 'Biblioteca Villatina', 0, 0, '0000-00-00', '2015-03-30 11:35:16', '2015-04-09 21:29:04', 17),
(602, 2002, 'Dostin Andrés', 'Cano', 'Dinamizador', 'telecentrosmlm@gmail.com', '292 47 64', '3015878217', 'Telecentro San Miguel La Mansión', 0, 0, '0000-00-00', '2015-03-30 11:45:11', '0000-00-00 00:00:00', 17),
(603, 21999790, 'Maria Nelly', 'Gil López', 'Presidenta JAL Castilla ', 'marianellygil63@hotmail.com', '3003915826', '', 'JAL Castilla', 0, 0, '0000-00-00', '2015-03-30 11:45:12', '0000-00-00 00:00:00', 42),
(604, 2102, 'Juan Diego', 'Restrepo', 'Rector', 'juand.restrepo@medellin.gov.co', '291 43 89 Ext.104/107', '311 336 78 36', 'Institución Educativa Sol De Oriente', 0, 0, '0000-00-00', '2015-03-30 11:53:00', '0000-00-00 00:00:00', 40),
(605, 2104, 'Paula ', 'Martínez Caro', 'Coordinadora', 'laprofepau@gmail.com', '291 43 89', '3116219442', 'Institución Educativa Sol De Oriente', 0, 0, '0000-00-00', '2015-03-30 11:59:11', '0000-00-00 00:00:00', 40),
(606, 76332828, 'Fabián ', 'Pabón', 'Pedagogo', 'fundacionmunay@gmail.com', '3664567', '3013087806', 'Fundación Munay', 0, 0, '0000-00-00', '2015-03-30 13:21:06', '0000-00-00 00:00:00', 17),
(607, 2003, 'Yamile ', 'Ospina', 'Psicopedagoga', 'ciudaddcontodo@gmail.com', '3122394220', '', 'Crecer Con Dignidad', 0, 0, '0000-00-00', '2015-03-30 13:24:41', '0000-00-00 00:00:00', 17),
(608, 2301, 'Bernardo ', 'López', 'Edil Comuna 9', 'jblopez97@yahoo.com.co', '2280620', '3104504501', 'JAL Comuna 9', 0, 0, '0000-00-00', '2015-03-30 14:02:26', '0000-00-00 00:00:00', 20),
(609, 43840771, 'Niyereth', 'Vásquez', 'Coordinadora I.E Antonio Derka', 'niyerethvasquez2@gmail.com', '3052497790', '3052497790', 'Institución Educatica Antonio Derka', 0, 0, '0000-00-00', '2015-03-30 14:04:08', '0000-00-00 00:00:00', 41),
(610, 11431541, 'Néstor René ', 'Otálora Garzón', 'Rector', 'santotomas18@gmail.com', '2215773', '', 'Institución Educativa La Milagrosa', 0, 0, '0000-00-00', '2015-03-30 15:51:54', '0000-00-00 00:00:00', 40),
(611, 42800178, 'Maria Alejandra', 'Castaño Giraldo', 'Sicóloga', 'funpositivospsicosocial@gmail.com', '4223534', '3013044990', 'Fundación Positivos Por La Vida', 0, 0, '0000-00-00', '2015-03-30 16:42:51', '0000-00-00 00:00:00', 41),
(612, 43585091, 'Eliana Maria ', 'Rodriguez Echavarría', 'Líder Comunitario ', 'elianabis4@yahoo.es', '3157767523', '', 'Observatorio Comuna 5', 0, 0, '0000-00-00', '2015-03-30 20:16:55', '0000-00-00 00:00:00', 24),
(613, 525, 'Herika ', 'Román', 'Coordinadora', 'eriyuro@yahoo.com', '4776196', '3113566701', 'Institución Educativa Jesús Amigo', 0, 0, '0000-00-00', '2015-03-30 21:38:10', '0000-00-00 00:00:00', 24),
(614, 1038414387, 'Mateo ', 'Franco Ortiz', 'Dinamizador Telecentro', 'mateo11love@hotmail.com', '3107393726', '', 'Telecentro Picacho', 0, 0, '0000-00-00', '2015-03-30 23:06:42', '0000-00-00 00:00:00', 24),
(615, 98465732, 'Gabriel ', 'Londoño', 'Director', 'direccion.sancristobal@bibliotecasmedellin.go', '4204351 - 4204367', '', 'Parque Biblioteca Fernando Botero', 0, 0, '0000-00-00', '2015-03-31 21:41:48', '0000-00-00 00:00:00', 23),
(616, 94409731, 'Mario Andrés', 'Ceballos', 'Coordinador Bilioteca Tren De Papel', 'btrendepapel@bibliotecapiloto.gpv.co', '4624548', '3166206348', 'Bilioteca Tren De Papel', 0, 0, '0000-00-00', '2015-04-06 07:39:27', '0000-00-00 00:00:00', 42),
(617, 43270301, 'Paola Andrea', 'Sepúlveda', 'Auxiliar Administrativo', 'andreasq23@gmail.com', '4320301', '3127137611', 'Bilioteca Tren De Papel', 0, 0, '0000-00-00', '2015-04-06 07:41:02', '0000-00-00 00:00:00', 42),
(618, 1128415583, 'Isis Cristina', 'Guisao Henao', 'Gestora Cultura Digital', 'cristina.guisao@mdeinteligente.co', '4444963', '3128552939', 'MDE Inteligente', 0, 0, '0000-00-00', '2015-04-06 12:07:05', '0000-00-00 00:00:00', 35),
(619, 70115374, 'Alonso ', 'Arias', 'Coordinador', 'biblioteca.fernandog@medellin.co', '421 65 95', '', 'Biblioteca Fernando Gómez Martínez', 0, 0, '0000-00-00', '2015-04-07 15:32:50', '0000-00-00 00:00:00', 23),
(620, 39359508, 'Luguethys ', 'Bernal', 'Dinamizador', 'teleamistad@gmail.com', '4421935', '3113949289', 'Telecentro La Amistad', 0, 0, '0000-00-00', '2015-04-07 15:45:10', '0000-00-00 00:00:00', 23),
(621, 15506165, 'Nelson ', 'González', 'Rector', 'negamaya1213@yahoo.es', '257 5489', '311 632 6824', 'Fe Y Alegria Aures', 0, 0, '0000-00-00', '2015-04-07 16:00:54', '0000-00-00 00:00:00', 23),
(622, 3113850985, 'Carlos Alberto ', 'Giraldo Alzate', 'Rector', 'caliche1964@hotmail.com', '3113850985', '', 'Fe Y Alegria Granizal', 0, 0, '0000-00-00', '2015-04-09 07:58:59', '0000-00-00 00:00:00', 10),
(623, 2911707, 'Osías ', 'Velásquez', 'Rector', 'gacerovo@hotmail.com', '291 1707', '', 'Enrique Olaya Herrera', 0, 0, '0000-00-00', '2015-04-09 08:11:01', '0000-00-00 00:00:00', 10),
(624, 1128266773, 'Daniel ', 'Benitez', 'Dinamizador', 'debz1986@msn.com', '4221607', '3148635835', 'Telecentro Santa Lucía', 0, 0, '0000-00-00', '2015-04-09 11:04:37', '0000-00-00 00:00:00', 21),
(625, 2004, 'Álvaro ', 'Cuervo Montoya', 'Rector', 'a.cuervos63@hotmail.com', '2697940 Ext 11 y 12', '', 'IE Gonzalo Restrepo', 0, 0, '0000-00-00', '2015-04-09 16:11:48', '0000-00-00 00:00:00', 17),
(626, 43435322, 'Mónica ', 'Franco', 'Coordinadora ', 'iguana.escuela@gmail.com', '2606802', '3146029200', 'Institución Educativa Sección Escuela La Iguaná', 0, 0, '0000-00-00', '2015-04-09 16:30:49', '0000-00-00 00:00:00', 41),
(627, 43083390, 'Hna. Ángela Lucía', 'Quintero', 'Coordinadora', 'mazzarello31@yahoo.com', '2937836', '', 'Centro De Capacitación SENA - Mazzarello', 0, 0, '0000-00-00', '2015-04-09 16:32:02', '0000-00-00 00:00:00', 17),
(628, 71174045, 'Jhon Fredy', 'Bustamante', 'Profesor Ciencias Sociales', 'jhonfredy77@une.net.co', '2364909', '3128659998', 'Institución Educativa Ciro Mendía', 0, 0, '0000-00-00', '2015-04-09 16:43:03', '0000-00-00 00:00:00', 41),
(629, 43524172, 'Adriana María', 'Mazo', 'Coordinadora ', 'telecentromoscu1@gmail.com', '2592467', '3207427988', 'Telecentro Moscú', 0, 0, '0000-00-00', '2015-04-09 16:52:04', '0000-00-00 00:00:00', 41),
(630, 43686922, 'Isabel Cristina', 'Ospina', 'Comunicadora', 'direccion@corporacionhogar.org.co', '2181827', '', 'Corporación Hogar', 0, 0, '0000-00-00', '2015-04-09 16:53:37', '0000-00-00 00:00:00', 20),
(631, 98565042, 'David', 'Ramirez Carmona', 'Coordinador', 'ramirezdavidh@gmail.com', '4211148', '3122964303', 'Escuela Del Concejo Clodomiro', 0, 0, '0000-00-00', '2015-04-09 17:05:16', '0000-00-00 00:00:00', 41),
(632, 78114102, 'Antonio ', 'Rodríguez', 'Docente De Tecnología', 'antrovi@hotmail.com', '3113577758', '', 'Institución Educativa José Acevedo Y Gómez', 0, 0, '0000-00-00', '2015-04-10 08:14:24', '0000-00-00 00:00:00', 43),
(633, 80028088, 'Fabian', 'Diaz', 'Docente', 'fabiand80@hotmail.com', '3184749508', '', 'Institución Educativa José Acevedo Y Gómez', 0, 0, '0000-00-00', '2015-04-10 08:41:04', '0000-00-00 00:00:00', 43),
(634, 71660237, 'Jaime', 'Sierra', 'Rector', 'jsierrat@eafit.edu.co', '255 2996', '', 'Institución Educativa José Acevedo Y Gómez', 0, 0, '0000-00-00', '2015-04-10 08:43:42', '0000-00-00 00:00:00', 43),
(635, 43517580, 'Yudi Stella', 'Cardona Galeano', 'Coordinadora', 'yudiescar@yahoo.es', '255 2996', '', 'Institución Educativa José Acevedo Y Gómez', 0, 0, '0000-00-00', '2015-04-10 08:48:46', '0000-00-00 00:00:00', 43),
(636, 325632362, 'Kelin ', 'Munera', 'Docente', 'kmunera@hotmail.com', '4463712', '3156342362', 'I.E Vereda Al Suiza Centralidad', 0, 0, '0000-00-00', '2015-04-10 15:29:36', '0000-00-00 00:00:00', 23),
(637, 70122855, 'Arjiro ', 'Calderón Zapata', 'Rector', 'ie.hrmpalmitas@gmail.co', '3870058', '', 'I.E Hector Rogelio Montoya', 0, 0, '0000-00-00', '2015-04-10 15:33:18', '0000-00-00 00:00:00', 23),
(638, 1128480866, 'César', 'Pérez', 'Técnico En Cultura Digital', 'cesar.perez92@hotmail.com', '3870612', ' 3127866274 ', 'Biblioteca Publico Corregimental San Sebastían De Palmitas', 0, 0, '0000-00-00', '2015-04-10 15:39:40', '0000-00-00 00:00:00', 23),
(639, 71661819, 'Carlos Mario ', 'Giraldo', 'Rector', 'mariogiraldo211@gmail.com', '4271116', '3216124376', 'I.E Loma Hermosa', 0, 0, '0000-00-00', '2015-04-10 15:49:34', '0000-00-00 00:00:00', 23),
(640, 21667657, 'Ana María', 'López', 'Coordinaora Académica', 'iecoordinacionciudadela2012@gmail.com', '4278910 - 4277760', '3003535066', 'I.e Ciudadela Nuevo Occidente', 0, 0, '0000-00-00', '2015-04-10 16:15:49', '0000-00-00 00:00:00', 23),
(641, 22024900, 'Adriana', 'Castrillón Suárez', 'Auxiliar Administrativo', 'adriana.castrillon@medellin.gov.co', '3858449', '3206910484', 'Centro De Servicios Lusitania', 0, 0, '0000-00-00', '2015-04-10 16:18:35', '0000-00-00 00:00:00', 23),
(642, 3521328, 'Luis Alberto', 'Monsalve', 'Secretario', 'luis.monsalve@medellin.gov.co', '3856834', '3002426821', 'Casa De Gobierno San Sebastian De Palmitas', 0, 0, '0000-00-00', '2015-04-13 08:54:31', '0000-00-00 00:00:00', 23),
(643, 71719698, 'Hernando', 'Montoya', 'ACJ', 'escuelapadressbr@gmail.com', '3128245719', '', 'Samuel Barrientos', 0, 0, '0000-00-00', '2015-04-14 16:18:21', '0000-00-00 00:00:00', 10),
(644, 71314322, 'Juan David', 'Monsalve', 'Técnico Cultura Digital', 'juandavid@gmail.com', '3852972', '3005293365', 'Parque Biblioteca José Horacio Betancur', 0, 0, '0000-00-00', '2015-04-15 17:57:59', '0000-00-00 00:00:00', 15),
(645, 22057340, 'Maria Eugenia ', 'Toro Lopera', 'JAL ', 'maeugeniatorojal80@hotmail.com', '3206198679', '3206198679', 'JAL Comuna 80', 0, 0, '0000-00-00', '2015-04-15 18:01:08', '0000-00-00 00:00:00', 15),
(646, 71679772, 'James Eduardo ', 'Ocampo Monsalve', 'Director', 'james.ocampo@medellin.gov.co', '300 656 7487', '', 'Institucion Educativa Rodrigo Lara Bonilla', 2, 1, NULL, '2015-04-20 08:39:46', '0000-00-00 00:00:00', 10),
(647, 43601880, 'Astrid Elena ', 'Betancur', 'Docente', 'aebb2011@hotmail.com', '3185224162', '', 'Institución Educativa Santos Ángeles Custodios', 1, 3, NULL, '2015-04-20 14:38:51', '0000-00-00 00:00:00', 43),
(649, 8464350, 'Gustavo Adolfo', 'Villada Zapata', 'Profesor', 'docentegus@gmail.com', '2181827', '3206965250', 'Corporación Hogar', 2, 3, NULL, '2015-04-21 11:07:47', '0000-00-00 00:00:00', 20),
(650, 43874058, 'Alejandra', 'Posada', 'Secretaria', 'alejandra.posada@medellin.gov.co', '2291304', '', 'Espacio Público', 1, 4, NULL, '2015-04-21 11:39:38', '0000-00-00 00:00:00', 20),
(651, 15375988, 'Luis Guillermo', 'Carmona Baena', 'Rector', 'gcarmona6@une.net.co', '2869498', '3136616820', 'Institución Educativa Fé Y Alegría El Limonar', 2, 2, NULL, '2015-04-21 22:11:12', '0000-00-00 00:00:00', 15),
(652, 43606568, 'María Alejandra', 'Restrepo Muñoz', 'Docente Informatica', 'alejandrasarita@hotmail.com', '2869498', '3164958710', 'Institución Educativa Fé Y Alegría El Limonar', 1, 2, NULL, '2015-04-21 22:17:02', '0000-00-00 00:00:00', 15),
(653, 1152193255, 'Sebastián', 'Ramírez Vásquez', 'Técnico En Cultura Digital', 'tecnologia.ladera@bibliotecasmedellin.gov.co', '2160484', '3146254304', 'Biblioteca León De Greiff - La Ladera', 2, 3, NULL, '2015-04-22 11:55:36', '0000-00-00 00:00:00', 20),
(654, 71951012, 'German Enrique', 'Alvarez', 'Rector', 'german.alvarez@medellin.gov.co', '3541437', '', 'IE Santa Catalina De Sena', 2, 4, NULL, '2015-04-22 13:30:04', '0000-00-00 00:00:00', 38),
(655, 1128419825, 'Laura', 'Mendoza', 'Técnica Gestión Social Y Cultural', 'santaelena@bibliotecasmedellin.gov.co', '5380222', '3206083203', 'Biblioteca Santa Elena', 1, 3, NULL, '2015-04-22 16:47:51', '0000-00-00 00:00:00', 17),
(656, 3497256, 'Luis Hernando ', 'Giraldo', 'Coordinador', 'cedezodesancristobal@gmail.com', '4277366', '3116302844', 'Cedezo San Cristobal ', 2, 2, NULL, '2015-04-22 17:13:36', '0000-00-00 00:00:00', 23),
(657, 71786297, 'Juan Felipe ', 'Amézquita', 'Coordinador', 'integrado@losalamos.org.co', ' 4204920 - 4270542', '3113797029', 'Centro Integrado San Cristóbal', 2, 2, NULL, '2015-04-22 17:36:11', '0000-00-00 00:00:00', 23),
(658, 70127349, 'Jhon Jaime ', 'Moreno Arenas', 'Coordinador', 'john.moreno@medellin.gov.co', '3856840', '3116930632', 'Centro De Servicios San Cristóbal', 2, 2, NULL, '2015-04-22 18:41:45', '0000-00-00 00:00:00', 23),
(659, 4387068, 'Ruth Stella', 'Ospina', 'Secretaria JAL', 'estelaos14@yahoo.es', '3113952724', '3113952724', 'JAL San Cristóbal', 1, 2, NULL, '2015-04-22 18:44:10', '0000-00-00 00:00:00', 23),
(660, 21527321, 'Yuliana Mora ', 'Hoyos', 'Ludotekaria', 'casasanmartin.ludoka@gmail.com', '  3856570', '3174240476', 'Ludoteka Casa San Martin', 2, 2, NULL, '2015-04-22 18:52:17', '0000-00-00 00:00:00', 23),
(661, 70118938, 'Rubiel', 'Durango', 'Administrativo', 'admonsancristobal@metrosalud.gov.co', '3002097231', '3002097231', 'UPSS Nuevo Occidente', 2, 1, NULL, '2015-04-22 18:57:49', '0000-00-00 00:00:00', 23),
(662, 49551328, 'Liris', 'Ogia', 'Docente Tecnología Media Técnica', 'liris.ogia@gmail.com', '2388255', '', 'IE República De Venezuela', 1, 3, NULL, '2015-04-23 08:49:13', '0000-00-00 00:00:00', 38),
(663, 98427312, 'Astrid', 'Duque', 'Dinamizadora Telecentro', 'telecentrofatima@gmail.com', '3514953', '3137096568', 'Telecentro Fátima', 1, 4, NULL, '2015-04-23 10:50:14', '0000-00-00 00:00:00', 38),
(664, 1128267345, 'Mario David ', 'Calle Salazar', 'Gestor Administrativo De Escenario', 'mario.calle25@hotmail.com', '3161639', '', 'Bolera Suramericana', 2, 3, NULL, '2015-04-24 14:35:06', '0000-00-00 00:00:00', 43),
(665, 42784116, 'Claudia ', 'Tobón Osorio', 'Gestora Administrativa', 'pista.bmx@inder.gov.co', '3113701975', '', 'Pista De Bicicross Antonio Roldán Betancur', 1, 3, NULL, '2015-04-24 14:50:46', '0000-00-00 00:00:00', 43),
(666, 21785084, 'Beatriz', 'Atehortúa ', 'Promotora De Lectura', 'luzbeatrizatehortuagrisales@gmail.com', '4227115', '', 'Bilioteca Fernando Gómez Martínez', 1, 2, NULL, '2015-04-27 14:58:14', '0000-00-00 00:00:00', 23),
(667, 43632237, 'Andrea ', 'Quintero', 'Educadora Especial', 'andreaq246@hotmail.com', '3218962407', '3218962407', 'J.I Buen Comienzo La Huerta', 1, 2, NULL, '2015-04-27 16:31:38', '0000-00-00 00:00:00', 23),
(668, 43054393, 'Martha Cecilia', 'Aldana', 'Trabajadora Social', 'marthaaldana8@gmail.com', '3215014752', '3215014752', 'Jovenes Por La Vida La Loma', 1, 2, NULL, '2015-04-27 16:34:16', '0000-00-00 00:00:00', 23),
(670, 70519151, 'Carlos ', 'Almírola', 'Coordinador', 'almirola2@hotmail.com', '2860139', '3127116986 ', 'IE San Antonio De Prado Sede Carlos Betancur', 2, 3, NULL, '2015-04-29 10:11:06', '0000-00-00 00:00:00', 15),
(671, 1026142587, 'Diana Marcela', 'Montoya', 'Dinamizadora', 'telecentroprado@gmail.com', '2866100', '', 'Telecentro San Antonio De Prado', 1, 3, NULL, '2015-04-29 10:39:46', '0000-00-00 00:00:00', 15),
(672, 8462456, 'Walter ', 'Echeverry', 'Coordinador Biblioteca', 'coordinacion.bsanantonio@bibliotecapiloto.gov', '3794440', '', 'Filial Biblioteca San Antonio De Prado', 2, 3, NULL, '2015-04-29 10:45:43', '0000-00-00 00:00:00', 15),
(673, 8430432, 'Diego Mauricio ', 'Tamayo Cifuentes', 'Profesor De Primaria: Mesa De Tecnología', 'migue20025@gmail.com', '5225686', '3146126108', 'Institución Educativa Maria Cano/CREM Granizal', 2, 3, NULL, '2015-04-29 10:59:48', '0000-00-00 00:00:00', 41),
(674, 43027151, 'Gloria Ofelia', 'Rúa', 'Dinamizadora Del Telecentro', 'telecentrosantacecilia1@gmail.com', '3498035', '3146339611', 'Telecentro Santa Cecilia', 1, 2, NULL, '2015-04-29 12:02:41', '0000-00-00 00:00:00', 41),
(675, 71610260, 'Hernán', 'Gómez', 'Gestor Empresariao', 'asesorservicioscedezolaladera@gmail.com', '3857329', '', 'CEDEZO La Ladera', 2, 4, NULL, '2015-04-29 16:02:48', '0000-00-00 00:00:00', 20),
(676, 71339597, 'Gerzon Yair ', 'Calle Álvarez', 'Coordinador Académico', 'iefedericoozanam@gmail.com', '2390358', '3017437326', 'IE Federico Ozanam', 2, 4, NULL, '2015-04-29 16:28:36', '0000-00-00 00:00:00', 20),
(677, 71587037, 'Luis Fernando', 'León Hernández', 'Rector', 'tito1028@hotmail.com', '2698211', '3136909515', 'IE Villa Turbay', 2, 4, NULL, '2015-04-29 16:49:01', '0000-00-00 00:00:00', 20),
(678, 1017184574, 'Deivi Johan', 'Ocampo López', 'Dinamizador', 'telecentro.lasierra@gmail.com', '2260635', '3128389642', 'Telecentro La Sierra', 2, 2, NULL, '2015-04-29 17:06:41', '0000-00-00 00:00:00', 20),
(679, 2300, 'Eliana ', 'Zuluaga', 'Líder De Servicio', 'eliana.zuluaga@medellin.gov.co', '3857162', '', 'Centro De Servicio Al Ciudadano (CAM)', 1, 4, NULL, '2015-04-29 17:15:09', '0000-00-00 00:00:00', 20),
(680, 71655117, 'Jairo Alberto', 'Arenas Berrio', 'Gestor Administrativo INDER', 'jairoalbertoa@yahoo.es', '3117741807', '3117741807', 'INDER', 2, 2, NULL, '2015-04-30 07:51:19', '0000-00-00 00:00:00', 15),
(681, 42781695, 'Mary Luz ', 'Veléz Cossio', 'Docente', 'maryluveco@gmail.com', '238 4910', '3207256023', 'IE Antonio Ricaurte', 1, 3, NULL, '2015-04-30 08:43:13', '0000-00-00 00:00:00', 15),
(682, 71669098, 'Sergio ', 'Aristizábal Arbeláez', 'Tesorero', 'sergio.aristizabal@medellin.gov.co', '3856561', '', 'Tesorería Municipal', 2, 5, NULL, '2015-04-30 10:00:12', '0000-00-00 00:00:00', 20);
INSERT INTO `people` (`id_person`, `cedula`, `name`, `lastname`, `charge`, `email`, `phone`, `cell`, `entity`, `genre`, `economic_level`, `birthday`, `creation_date`, `modification_date`, `user_id`) VALUES
(683, 43255663, 'Catalina', 'Mejia', 'Coordinadora', 'jardinlahuerta@fan.org.co', '4379646', '3007124723', 'J. INFANTIL Buen Comienzo La Huerta', 1, 2, NULL, '2015-04-30 10:24:59', '0000-00-00 00:00:00', 23),
(684, 2302, 'Gabriel ', 'Arango Echeverri', 'Director De Comunicaciones', 'garango@concejomedellin.gov', '3846857', '3148219085', 'Tesorería Municipal', 2, 5, NULL, '2015-04-30 12:13:25', '0000-00-00 00:00:00', 20),
(685, 43165485, 'Lina Marcela', 'Velásquez Patignoc', 'Profesional De Servicios De Información', 'lina.velasquez@fundacion.epm.org.co', '3807519', '3192785705', 'Biblioteca EPM', 1, 4, NULL, '2015-04-30 13:02:18', '2015-04-30 18:08:10', 40),
(686, 1037637385, 'María Alejandra', 'Aristizábal', 'Jóvenes Por La Vida', 'alejandraaristizabal28@hotmail.com', '2636934', '3124765853', 'Tesorería Municipal', 1, 2, NULL, '2015-04-30 13:05:49', '0000-00-00 00:00:00', 20),
(687, 10171710016, 'Eliana ', 'Londoño', 'Jóvenes Por La Vida', 'emlg-1989@hotmail.com', '2136213', '3205984371', 'Tesorería Municipal', 1, 2, NULL, '2015-04-30 13:07:55', '2015-04-30 18:09:09', 20),
(688, 32542967, 'Maria Eugenia', 'González', 'Coordinadora', 'javierjgiraldo@hotmail.com', '3113212814', '3113212814', 'I.E La Huerta', 1, 1, NULL, '2015-04-30 13:08:18', '0000-00-00 00:00:00', 23),
(689, 1040030533, 'Marta Cecilia', 'García', 'Coordinadora', 'marta.garcia@medellin.gov.co', '5126547', '3122929932', 'Archivo Histórico De Medellín', 1, 4, NULL, '2015-04-30 16:23:35', '0000-00-00 00:00:00', 40),
(690, 42797724, 'Luz Mary', 'Toro Montes', 'Inspectora', 'luz.toro@medellin.gov.co', '2911378', '3014647857', 'Inspección 10B', 1, 4, NULL, '2015-04-30 16:37:05', '0000-00-00 00:00:00', 40),
(691, 1152695128, 'Luis Gabriel', 'Arias Vergara', 'Dinamizador', 'telecentroplc@gmail.com', '4617200', '31053793313', 'Telecentro Plaza Colón', 2, 3, NULL, '2015-05-02 19:28:03', '0000-00-00 00:00:00', 42),
(692, 82360306, 'Ibsen Antonio', 'Cossio Perea', 'Coordinador', 'ibsenantoniocossioperea@gmail.com', '3136841632', '', 'I.E Pedro Claver', 2, 3, NULL, '2015-05-02 20:08:12', '0000-00-00 00:00:00', 42),
(693, 75085446, 'Cristian Alberto', 'Álvarez', 'Coordinador', 'cristian2410@gmail.com', '4713883', '3117875328', 'Institución Educativa Tricentenario', 2, 3, NULL, '2015-05-02 20:13:37', '0000-00-00 00:00:00', 42),
(694, 71710041, 'Jorge', 'Atehortúa', 'Presidente', 'presidenciajal7@gmail.com', '3003917300', '', 'JAL Comuna 7', 2, 3, NULL, '2015-05-02 20:29:04', '0000-00-00 00:00:00', 42),
(695, 71793430, 'Andrés Felipe', 'Restrepo', 'Edil', 'andresedil@gmail.com', '3217257388', '', 'JAL Comuna 7', 2, 3, NULL, '2015-05-02 20:30:29', '0000-00-00 00:00:00', 42),
(696, 70415430, 'Luis Alberto', 'Lizón Restrepo', 'Coordinador Programa De Inclusión', 'luislizon@itm.edu.co', '4405352', '3137281426', 'Instituto Tecnológico Metropolitano', 2, 3, '2015-05-04', '2015-05-03 08:12:05', '0000-00-00 00:00:00', 42),
(697, 98637377, 'Ramón José', 'Ledesma Soto', 'Psicólogo Desarrollo Humano', 'ramonledesma@itm.edu.co', '4405352', '3004101929', 'Instituto Tecnológico Metropolitano', 2, 3, '2015-09-19', '2015-05-03 08:19:43', '0000-00-00 00:00:00', 42),
(698, 43623959, 'Flor Yolanda ', 'Londoño Pérez', 'Dinamizadora Telecentro', 'telecentrodoce@gmail.com', '4723636-4744198', '', 'Telecentro Doce De Octubre', 1, 2, NULL, '2015-05-03 12:33:54', '0000-00-00 00:00:00', 24),
(699, 2370, 'Hector ', 'Soto', 'Rector', 'hectorsoto25@yahoo.es', '572 2332', '', 'Pequeña María ', 2, 4, NULL, '2015-05-03 13:52:47', '0000-00-00 00:00:00', 21),
(700, 2371, 'Juan Camilo', 'Muñoz', 'Coordinador Casa De La Cultura', 'cdcloscolores@gmail.com', '2641969-4216611', '3003454425', 'Casa De La Cultura De Los Colores', 2, 4, NULL, '2015-05-03 14:07:23', '0000-00-00 00:00:00', 21),
(701, 1035858302, 'Juan Pablo', 'Ríos', 'Dinamizador Del Telecentro', 'telecentro.sanjuaquin@gmail.com', '4112044', '3017373450', 'Telecentro San Joaquin Bolivariana ', 2, 4, NULL, '2015-05-03 14:20:27', '0000-00-00 00:00:00', 21),
(702, 71726723, 'Miguel Ernesto', 'Benavides', 'Coordinador Mañana', 'cordina.picase@gmail.com', '476 1277 ', '3012676002', 'Institución Educativa Picachito', 2, 2, NULL, '2015-05-03 14:50:59', '0000-00-00 00:00:00', 24),
(703, 43725919, 'Diana María  ', 'Giraldo Jiménez', 'Coordinadora Biblioteca', 'laesperanza@ratondebiblioteca.org', '366 69 10', '', 'Fundación Ratón De Biblioteca La Esperanza', 1, 2, NULL, '2015-05-03 15:04:22', '0000-00-00 00:00:00', 24),
(704, 2372, 'Rubén ', 'Velásquez ', 'Coordinador Sede Marco Fidél Suárez', 'cordiruben@hotmail.com', ' 211 6350', '3006473368', 'IE Pedro Luis Villa ', 2, 3, NULL, '2015-05-03 15:05:47', '0000-00-00 00:00:00', 21),
(705, 2374, 'Juliana ', 'Posada', 'Coordinadora CEDEZO', 'cedezomoravia@gmail.com', '3857330 - 3858026', '3007834039', 'CEDEZO Moravia', 1, 4, NULL, '2015-05-03 15:12:05', '0000-00-00 00:00:00', 21),
(706, 539, 'Edgar De Jesús ', 'Román Valencia', 'Rector', 'edgar.roman@medellin.gov.co', '4384765', '3046171615', 'Institución Educativa Camilo Mora Carrasquilla', 2, 3, NULL, '2015-05-03 15:34:54', '0000-00-00 00:00:00', 24),
(707, 15384116, 'Andrés ', 'Carmona', 'Coordinador', 'salesiano.andres@gmail.com', ' 315-6619357', '', 'Institución Educativa Ciudad Don Bosco', 2, 3, NULL, '2015-05-03 16:17:03', '0000-00-00 00:00:00', 24),
(708, 1152695502, 'Jaqueline ', 'Muñoz Higuita', 'Gestor TIC', 'jaque211@hotmail.com', '4742786', '', 'Pascual Bravo', 1, 3, '2007-05-16', '2015-05-03 16:21:29', '2015-05-03 21:25:19', 44),
(709, 71729852, 'Jonh Freddy ', 'Henao Arias', 'Docente ', 'trabajosmath@gmail.com', '477 7998/267 6900', '3002672619', 'Institución Educativa Doce De Octubre', 2, 3, NULL, '2015-05-03 16:26:06', '0000-00-00 00:00:00', 24),
(710, 2005, 'Consuelo', 'Arias Hoyos', 'Docente', 'consueloa76@gmail.com', '311 700 61 38', '311 700 61 38', 'CE El Cerro', 1, 2, NULL, '2015-05-03 18:56:56', '0000-00-00 00:00:00', 17),
(711, 15343922, 'Jairo Hernan', 'Henao', 'Analista', 'jhenaogi@banrep.gov.co', '576 74 11', '', 'Banco De La República', 2, 5, NULL, '2015-05-03 20:19:53', '0000-00-00 00:00:00', 40),
(712, 39175756, 'Ana María', ' Arias Quintero ', 'Coordinadora', 'ana.arias@medellin.gov.co', '4764379', '3006484551', 'Teatro Al Aire Libre Y Parque El Pedregal', 1, 2, NULL, '2015-05-03 21:07:06', '0000-00-00 00:00:00', 24),
(713, 30400162, 'Alejandra Lorena', 'Restrepo Betancurt', 'Coordinadora Centro De Salud', 'coordinacionsancamilo@metrosalud.gov.co', '4415164', '3148904956', 'Centro De Salud San Camilo', 1, 3, NULL, '2015-05-03 21:51:37', '0000-00-00 00:00:00', 24),
(714, 43168781, 'Claudia Marcela ', 'Echeverri Vargas ', 'Apoyo Logístico Coordinación ', 'claudia.echeverri@medellin.gov.co', '4373590', '', 'Casa De La Justicia De Robledo', 1, 2, NULL, '2015-05-03 22:11:31', '0000-00-00 00:00:00', 24),
(715, 1037679981, 'Edwin León', 'Vasquez ', 'Funcionario Cedezo', 'cedezo.alcaldiamedellin@gmail.com', '3857341', '', 'Secretaría De Desarrollo Económico', 2, 3, NULL, '2015-05-03 22:27:22', '0000-00-00 00:00:00', 24),
(716, 71754540, 'Omar', 'Tobón', 'Funcionario Alcaldía', 'omar.tobon@medellin.gov.co', '3007857065', '', 'Vice Gerencia Transporte Zona 2', 2, 3, NULL, '2015-05-03 22:29:22', '0000-00-00 00:00:00', 24),
(717, 1128440798, 'Milena', 'Echeverry Campuzano', 'Gestora Territorial ', 'milena.secremujeres@gmail.com', '3127676225', '', 'Secretaría De Las Mujeres', 1, 2, NULL, '2015-05-03 22:30:56', '0000-00-00 00:00:00', 24),
(718, 22068523, 'Lucia Teresa', 'Arismendi Arismendi', 'Profesional Especializada Gestión Biblioteca', 'cdeinfo@pascualbravo.edu.co', '4480520', '', 'Institución Universitaria Pascual Bravo', 1, 3, NULL, '2015-05-04 07:15:00', '0000-00-00 00:00:00', 43),
(719, 98620882, 'Juan Fernando ', 'Castrillon', 'Coordinador Escenarios Deportivos - Bienestar', 'juanfrd_145@hotmail.com', '4480520', '', 'Institución Universitaria Pascual Bravo', 2, 3, NULL, '2015-05-04 07:17:43', '0000-00-00 00:00:00', 43),
(720, 1128276230, 'Harold', 'Pulgarín', 'Gestor Administrativo', 'combate.udag@inder.gov.co', '2306216', '3003610167', 'Coliseo De Combate', 2, 4, NULL, '2015-05-04 11:01:27', '0000-00-00 00:00:00', 41),
(721, 1128470974, 'Deisy', 'Gómez', 'Gestora Administrativa', 'baloncesto.udag@inder.gov.co', '3005570041', '', 'Coliseo Ivan De Bedout', 1, 4, NULL, '2015-05-04 11:08:02', '0000-00-00 00:00:00', 41),
(722, 7175992567, 'Wilson', 'Ortiz', 'Gestor Administrativo', 'gimnasia.udag@inder.gov.co', '2608062', '3002206435', 'Coliseo De Gimnasia', 2, 4, NULL, '2015-05-04 11:19:43', '0000-00-00 00:00:00', 41),
(723, 74370892, 'Javier', 'Burgos', 'Coordinador', 'javier.burgos@medellin.gov.co', '2346889', '3117616062', 'Casa De La CUltura Los Alcázares', 2, 4, NULL, '2015-05-04 11:31:01', '0000-00-00 00:00:00', 41),
(724, 645, 'John Jairo ', 'Pérez Macias', 'Secretario', 'jhon.perez@medellin.gov.co', '3859432', '', 'Inspección Doce De Octubre', 2, 2, NULL, '2015-05-04 12:04:54', '0000-00-00 00:00:00', 24),
(725, 32525456, 'Fani Rocío', 'Arias Botero', 'Contacto Enlace', 'fanni.arias@medellin.gov.co', '3857405', '3017423978', 'Mas Cerca Floresta', 1, 4, NULL, '2015-05-04 13:28:02', '0000-00-00 00:00:00', 41),
(726, 15373893, 'Juan Felipe', 'Giraldo Correa', 'Webmaster', 'juan.giraldo@simm.com.co', '3013973087', '', 'Secretaría De Movilidad', 2, 3, NULL, '2015-05-06 08:22:55', '0000-00-00 00:00:00', 42),
(727, 1128276817, 'Laura ', 'Vargas Rodriguez', 'Comunicadora SIMM', 'lauravargas88@gmail.com', '3201000', '', 'Secretaría De Movilidad', 1, 3, NULL, '2015-05-06 08:26:58', '0000-00-00 00:00:00', 42),
(728, 1120279584, 'Aura', 'Camacho Villegas ', 'Practicante', 'aura.camacho@ciclo.co', '3014867221', '', 'Ruta N', 1, 4, NULL, '2015-05-08 10:45:33', '0000-00-00 00:00:00', 43),
(729, 1035852880, 'Sirley Natalia', 'Trespalacios Jiménez', 'Técnica De Biblioteca', 'trespalacios18@gmail.com', '3857333', '3146434095', 'Biblioteca La Ladera', 1, 3, NULL, '2015-05-11 16:56:38', '0000-00-00 00:00:00', 20),
(730, 1128270206, 'Luisa Fernanda', 'Rodríguez López', 'Técnica De Biblioteca', 'luisafer1987@gmail.com', '3857538', '3107112583', 'Biblioteca La Ladera', 1, 3, NULL, '2015-05-11 16:58:22', '0000-00-00 00:00:00', 20),
(731, 1017160045, 'Lenyn Johana ', 'Córdoba Palacios', 'Técnica En Cultura Digital', 'lenyn.cordobaf@gmail.com', '3857538', '3013987211', 'Biblioteca La Ladera', 1, 3, NULL, '2015-05-11 17:00:21', '0000-00-00 00:00:00', 20),
(732, 71362981, 'Jose Manuel ', 'Gomez', 'Coordinador', 'coordinacionvillasocorro@metrosalud.gov.co', '25828302', '', 'Centro Salud Villa Del Socorro', 2, 2, NULL, '2015-05-12 08:37:57', '0000-00-00 00:00:00', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `per_marital_status`
--

CREATE TABLE IF NOT EXISTS `per_marital_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `per_participants`
--

CREATE TABLE IF NOT EXISTS `per_participants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `neighborhood_id` int(11) NOT NULL,
  `other_population_type` varchar(80) DEFAULT NULL,
  `per_people_type_id` int(11) NOT NULL,
  `marital_status_id` int(11) NOT NULL,
  `school_level_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `neighborhood_id` (`neighborhood_id`),
  KEY `per_people_type_id` (`per_people_type_id`),
  KEY `user_id` (`user_id`),
  KEY `marital_status_id` (`marital_status_id`),
  KEY `school_level_id` (`school_level_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `per_participants_population_types`
--

CREATE TABLE IF NOT EXISTS `per_participants_population_types` (
  `participant_id` int(11) NOT NULL,
  `population_type_id` int(11) NOT NULL,
  KEY `participant_id` (`participant_id`),
  KEY `popultation_type_id` (`population_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `per_participants_training`
--

CREATE TABLE IF NOT EXISTS `per_participants_training` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `training_id` int(11) NOT NULL,
  `participant_id` int(11) NOT NULL,
  `certification_status` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `training_id_2` (`training_id`,`participant_id`),
  KEY `training_id` (`training_id`),
  KEY `user_id` (`user_id`),
  KEY `participant_id` (`participant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `per_participants_training_session`
--

CREATE TABLE IF NOT EXISTS `per_participants_training_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `participants_training_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `participants_training_id` (`participants_training_id`,`session_id`),
  KEY `per_participants_training_id` (`participants_training_id`),
  KEY `session_id` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `per_people_type`
--

CREATE TABLE IF NOT EXISTS `per_people_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` bigint(15) NOT NULL,
  `per_type_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `person_id_2` (`person_id`,`per_type_id`),
  KEY `person_id` (`person_id`),
  KEY `per_type_id` (`per_type_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `per_professions`
--

CREATE TABLE IF NOT EXISTS `per_professions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `state` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `per_school_level`
--

CREATE TABLE IF NOT EXISTS `per_school_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `creation_date` datetime DEFAULT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `per_trainers`
--

CREATE TABLE IF NOT EXISTS `per_trainers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `per_trainer_type_id` int(11) NOT NULL,
  `per_profession_id` int(11) NOT NULL,
  `per_people_type_id` int(11) NOT NULL,
  `per_trainer_fund_id` int(11) NOT NULL,
  `observations` text NOT NULL,
  `state` int(11) DEFAULT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `star_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `per_profession_id` (`per_profession_id`),
  KEY `per_trainer_type_id` (`per_trainer_type_id`),
  KEY `per_trainer_fund_id` (`per_trainer_fund_id`),
  KEY `per_people_type_id` (`per_people_type_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `per_trainer_funds`
--

CREATE TABLE IF NOT EXISTS `per_trainer_funds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` datetime DEFAULT NULL,
  `modification_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `per_trainer_schedules`
--

CREATE TABLE IF NOT EXISTS `per_trainer_schedules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(90) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `per_trainer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `validation_schedule` (`day`,`start_time`,`per_trainer_id`),
  KEY `user_id` (`user_id`),
  KEY `per_trainer_id` (`per_trainer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `per_trainer_types`
--

CREATE TABLE IF NOT EXISTS `per_trainer_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `state` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `per_types`
--

CREATE TABLE IF NOT EXISTS `per_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  `modification_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `per_types`
--

INSERT INTO `per_types` (`id`, `name`, `user_id`, `creation_date`, `modification_date`) VALUES
(1, 'Formador', 12, '2015-04-16 15:26:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `population_types`
--

CREATE TABLE IF NOT EXISTS `population_types` (
  `id_population_type` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_population_type`),
  UNIQUE KEY `name` (`name`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `population_types`
--

INSERT INTO `population_types` (`id_population_type`, `name`, `creation_date`, `modification_date`, `user_id`) VALUES
(0, 'No asignado', '2015-03-19 09:32:13', '2015-03-19 14:32:22', 12),
(1, 'Niños', '2015-03-31 11:45:12', '0000-00-00 00:00:00', 35),
(2, 'Adultos', '2015-03-31 11:45:23', '0000-00-00 00:00:00', 35),
(3, 'Adultos Mayores De 50 Años', '2015-03-31 11:45:32', '0000-00-00 00:00:00', 35),
(4, 'Jóvenes (14- 28 Años)', '2015-03-31 11:45:43', '0000-00-00 00:00:00', 35),
(5, 'Emprendedores', '2015-03-31 11:45:53', '0000-00-00 00:00:00', 35),
(6, 'Docentes', '2015-03-31 11:46:14', '0000-00-00 00:00:00', 35),
(7, 'Personas En Situación De Discapacidad', '2015-03-31 11:46:28', '0000-00-00 00:00:00', 35),
(8, 'Mujeres', '2015-03-31 11:46:36', '0000-00-00 00:00:00', 35),
(9, 'Víctimas Del Conflicto', '2015-03-31 11:46:45', '0000-00-00 00:00:00', 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `population_types_training`
--

CREATE TABLE IF NOT EXISTS `population_types_training` (
  `population_type_id` int(11) NOT NULL,
  `training_id` int(11) NOT NULL,
  KEY `population_type_id` (`population_type_id`),
  KEY `training_id` (`training_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
  `id_site` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` varchar(45) CHARACTER SET latin1 NOT NULL,
  `site_phone` varchar(45) CHARACTER SET latin1 NOT NULL,
  `site_address` varchar(45) CHARACTER SET latin1 NOT NULL,
  `site_mail` varchar(45) CHARACTER SET latin1 NOT NULL,
  `neighborhood_id` int(11) NOT NULL,
  `site_type_id` int(11) NOT NULL,
  `syte_estado` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_site`),
  KEY `neighborhood_id` (`neighborhood_id`,`site_type_id`),
  KEY `site_type_id` (`site_type_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=569 ;

--
-- Volcado de datos para la tabla `sites`
--

INSERT INTO `sites` (`id_site`, `site_name`, `site_phone`, `site_address`, `site_mail`, `neighborhood_id`, `site_type_id`, `syte_estado`, `creation_date`, `modification_date`, `user_id`) VALUES
(121, 'Juan María Céspedes', '238 6703', 'Calle 17 N° 73 - 37 ', '', 85, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(122, 'Rosaléa Suárez -Sección Primaria', '238 7380', 'Calle 32B N° 76A- 48 ', '', 44, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(123, 'Pedro Olarte - Sección Primaria', '2655463', 'Carrera 77 N° 30A-53 ', '', 11, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(124, 'Jose Maria Bernal', '3432086 - 3454793', 'Carrera 65A N° 32B-120 ', '', 84, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(125, 'República De Venezuela', '238 8255', 'Carrera 76 N°18A- 19', '', 87, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(126, 'Pedro Octavio Amado', '238 5168', 'Calle 31C N° 89C-62', '', 88, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(127, 'Centro Educativo El Manzanillo', '3410940', 'Carrera 77 N° 30A-53 ', '', 89, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(128, 'Débora Arango', '341 1386', 'Vereda el Manzanillo', '', 45, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(130, 'San Antonio De Prado', '286 4285', 'Calle 4A ESTE 155 ', '', 46, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(131, 'El Limonar', '2862293', 'Calle 3 N° 2A Este 11', '', 46, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(132, 'Monseñor Victor Wiedemann', '286 0010', 'Calle 10C N° 6B ESTE 32', '', 91, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(133, 'Centro Educativo Potrerito', '2863725', 'Vereda Potrerito ', '', 46, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(134, 'San José Obrero', '3763331-286 5858', 'Carrera 14A N° 5 - 99 ', '', 92, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(135, 'Centro Educativo Quebrada Larga', '302 8518', 'Vereda Yarumalito', '', 46, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(136, 'Centro Educativo Yarumalito', '3373048', 'Vereda Yarumalito', '', 46, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(137, 'Centro Educativo El Salado', '337 3048', 'Vereda El Salado', '', 46, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(138, 'Centro Educativo El Astillero', '337 3048 ', 'Vereda El Astillero', '', 46, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(139, 'Centro Educativo Montañita', '286 0168', 'Vereda Montañita', '', 46, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(140, 'Sede Carlos Betancur', '2860139', 'Carrera 77 N° 41 sur -02', '', 46, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(141, 'Ángela Restrepo Moreno', '3740170', 'Carrera 12 N° ESTE 5A- 34 ', '', 46, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(142, 'Gustavo Rodas', '2862342', 'Calle 5D N° 122 - el Vergel', '', 46, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(143, 'Manuel J Betancur no esta', '2861722', 'Carrera 11 N° 840', '', 46, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(144, 'Sección Escuela Niño Jesus De Praga', '2842912', 'Calle 59 N° 36-30', '', 93, 4, '1', '0000-00-00 00:00:00', '2015-04-22 22:00:45', 0),
(145, 'Sección Escuela La Asunción', '5217466', 'Calle 97A N° 50AA -50', '', 54, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(146, 'Gabriel Restrepo Moreno', '263 1645', 'Carrera 43  N° 66E - 41', '', 94, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(147, 'Fe Y Alegría La Cima', '263 1727', 'Carrera 39A N°85-59', '', 95, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(148, 'San Pablo', '521 3099', 'Carrera 36C N° 86BB-15', '', 13, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(149, 'Pedro Luis Villa', '211 6350', 'Calle 98B N° 38-37', '', 96, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(150, 'Rodrigo Lara Bonilla', '000', 'Carrera 43 N° 66C - 40', '', 97, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(151, 'República De Barbados', '263 9104', 'Carrera 25 N° 69D- 35', '', 98, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(152, 'José Roberto Vásquez', '233 1414', 'Carrera 36 N° 85B-140', '', 99, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(153, 'San Juan Bautista De La Salle', '236 5964 -522 5237', 'Calle 76 N° 39 - 160', '', 100, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(154, 'Enrique Olaya Herrera', '291 1707', 'Calle 93 N°40-42', '', 101, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(155, 'Hernán Toro Agudelo', '2136830', 'Calle 71A #32 -18', '', 13, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(156, 'Monseñor  Francisco Cristóbal Toro', '236 5286 - 524 0239', 'Carrera 50D N° 90-49', '', 102, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(157, 'Guillermo Vélez Vélez', '263 6068 -2632687', 'Calle 90 N° 51B-25', '', 102, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(158, 'Alfonso Mora Naranjo', '2118237-2110412', 'Carrera 48A N° 77-68', '', 14, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(159, 'José María Bravo Márquez', '233 2167 - 263 5951', 'Calle 70 N° 47A-4', '', 103, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(160, 'Francisco Luis Hernández', '2368970 -4448971', 'Calle 87 N° 50AA - 21', '', 14, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(161, 'Mater Dei', '436 1257', 'Carrera 68 N°42-71', '', 104, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(162, 'Lucrecio Jaramillo Vélez', '412 3351 - 412 2939', 'Carrera 68 N°42-71', '', 105, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(163, 'Biblioteca EPM', '380 7529', 'Carrera 54 N° 44-48', '', 36, 10, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(164, 'CEDEZO Santo Domingo', '5280559', 'Calle 106 N°32-33', '', 11, 8, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(165, 'CEDEZO Manrique', '2136050', 'Calle 122 N° 51B-30', '', 13, 8, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(166, 'CEDEZO Moravia', '3857330 - 3858026', 'Calle 90 N° 51B-25', '', 106, 8, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(167, 'CEDEZO La Tinaja', '4778685 - 4778138', 'Carrera 64C N° 72 - 58', '', 18, 8, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(168, 'CEDEZO La Quintana', '3857341', 'Carrera 92 N° 80C -71', '', 11, 8, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(169, 'CEDEZO San Cristóbal', '4277366', 'Carrera 131 N° 62 -15', '', 25, 8, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(170, 'CEDEZO La Ladera', '385 7316 - 385 7329', 'Calle 65AA N° 36-39', '', 108, 8, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(171, 'CEDEZO Pasaje La Bastilla', '2935304', 'Parque la Bastilla', '', 36, 8, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(172, 'Punto De Atención CEDEZO Buenos Aires', '385 2944', 'Calle 57 N° 45-129', '', 67, 8, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(173, 'CEDEZO Santa Elena', '3857503', 'Carrera 45 N° 61-62', '', 37, 8, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(174, 'CEDEZO San Javier', '3857533', 'Carrera 92 N°34D- 93', '', 74, 8, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(175, 'Punto De Atención CEDEZO Guayabal', '3834031', 'Carrera 12 con la 65', '', 42, 8, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(176, 'CEDEZO Belén', '3858024', 'Carrera 76 N° 18A -19 ', '', 43, 8, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(177, 'Punto De Atención CEDEZO Altavista', '3856731', 'Calle 18 N° 105-69 ', '', 45, 8, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(178, 'CEDEZO San Antonio De Prado', '385 7540- 385 9400', 'Calle 50E Sur N° 75A -20', '', 46, 8, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(179, 'BPP - Sede Campo Valdés', '2118232', 'Carrera 55 N°94 - 97', '', 103, 10, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(180, 'Biblioteca la Floresta', '3857592', 'Carrera 45 N° 79 a - 100', '', 110, 10, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(181, 'Biblioteca Comfenalco Castilla', '267 6061', 'Carrera 63C #110 - 09', '', 18, 10, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(182, 'Biblioteca Tren De Papel', '4644422', 'Carrera 65 N° 95 - 57', '', 111, 10, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(183, 'Biblioteca Doce De Octubre', '477 62 84', 'Calle 104C N°80-03', '', 21, 10, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(184, 'Biblioteca Tomás Carrasquilla - La Quintana', '385 73 42', 'Carrera 71A N° 79-01', '', 113, 10, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(185, 'Biblioteca Pública San Sebastián De Palmita', '3870612', 'San Sebastián De Palmitas', '', 23, 10, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(186, 'Parque Biblioteca Fernando Botero', '4204351 - 4204367', 'Carrera 131 N° 60 – 59 ', '', 25, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(187, 'BPP -Sede San Javier La Loma', '4385761', 'Calle 62 N°129-9', '', 25, 10, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(188, 'Biblioteca La Ladera ', '3857331', 'Carrera 54 N° 44-48', '', 108, 10, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(189, 'Biblioteca León De Greiff - La Ladera', '385 73 31', 'Calle 59 N° 36-30', '', 108, 10, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(190, 'Biblioteca Santa Elena', '5380222', 'Calle 59A N° 36-3', '', 37, 10, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(191, 'Parque Biblioteca San Javier', '385 73 12', 'Calle 44 # 95-53', '', 74, 10, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(192, 'Parque Biblioteca Guayabal', '3510495-3512966', 'Carrera 52 N° 9S - 42', '', 42, 10, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(193, 'Parque Biblioteca Belén', '3856790 ', 'Carrera 76 N° 32 -74 ', '', 43, 10, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(194, 'Parque Biblioteca José Horacio Betancur', '2862977-2865424', 'Carrera 4C N° 6 - 206', '', 46, 10, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(195, 'Filial Biblioteca San Antonio De Prado', '379 44 40', 'Callee 9 N° 11-16', '', 46, 10, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(196, 'Biblioteca Pública  El Limonar', '286 59 23', 'Calle 57 sur N° 61-02', '', 47, 10, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(197, 'Telecentro Santa Cecilia 1', '5291142', 'Calle 101A N° 42B-25', '', 114, 5, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(198, 'Telecentro Villa Del Socorro', '366 3210', 'Carrera 49A N° 107-65', '', 12, 5, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(199, 'Telecentro Manrique', '2136050', 'Calle 104B N°48 - 60', '', 13, 5, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(200, 'Telecentro Plaza Colón', '461 72 00', 'Calle 118 N° 70-42', '', 116, 5, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(201, 'Telecentro Pedregal', '4777116', 'Calle 92 # 83-41', '', 117, 5, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(202, 'Telecentro Picacho', '4764178', 'Calle 102B N° 74A- 00', '', 118, 5, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(203, 'Telecentro La Amistad Villa Sofía', '4421935', 'Diagonal 85 N° 79- 173', '', 119, 5, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(204, 'Telecentro Los Mangos', '2911904', 'Calle 43 N° 120C- 78', '', 66, 5, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(205, 'Telecentro San Miguel La Mansión', '292 4764', 'Calle 56 N° 16-18', '', 120, 5, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(206, 'Telecentro Villa Laura', '4929502', 'Calle 42C N° 95-50', '', 40, 5, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(207, 'Telecentro Fátima', '3514953', 'Carrera 70A N° 13A-19', '', 86, 5, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(208, 'Telecentro Rosales', '2658678 - 3859403', 'Carrera 66B N° 32-28', '', 121, 5, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(209, 'Telecentro Altavista', '2562227', 'Calle 16 N° 99 - 117', '', 45, 5, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(210, 'Telecentro San Antonio De Prado', '2866100', 'Carrera 79 N°40 sur 44', '', 46, 5, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(211, 'Telecentro Pradito', '2864073', 'Calle 8 Este N° 10C-25', '', 91, 5, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(212, 'Casa Hogar Santa Laura', '313 651 50 21', 'Carrera 50D N° 62 – 95', '', 67, 7, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(213, 'Corporación Hogar', '2181827', 'Carrera 48 N° 57-21', '', 122, 7, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(214, 'Patronato Maria Auxiliadora', '2313636', 'Carrera 48 N° 49-14', '', 36, 7, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(215, 'Fundación Integrar', '2657517', 'Carrera 65A N° 32D-10', '', 86, 7, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(216, 'Parque Biblioteca España', '3857598', 'Carrera 33B # 107A-100', '', 11, 10, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(218, 'Marco Fidel Suarez', '2301435', 'Carrera 70 N° 49 - 70', '', 15, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(219, 'Sección Escuela La Iguana', '2606802', 'Carrera 70 N°. 53 - 02', '', 123, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(220, 'Lola González', '252 0097', 'Calle 47F N° 94 - 63', '', 110, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(221, 'Rafael Uribe Uribe', '250 8252/ 250 8253', 'Carrera 82 N° .42C 58', '', 29, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(222, 'Cristobal Colón', '252 0535 /253 6272', 'Calle 38 N°.92-93', '', 124, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(223, 'Francisco Antonio Zea', '4122361', 'Carrera 82 N°. 35-41', '', 124, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(224, 'Jose Asuncion Silva', '2739576', 'Calle 118 N° 64CC - 68', '', 125, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(225, 'Diego Echavarria Misas', '273 2700 - 452 1634', 'Calle 111 N°. 70 - 68', '', 111, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(226, 'Sor Juana Ines De La Cruz', '267 8688', 'Carrera 67 N° .103EE- 1', '', 126, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(227, 'Jesús María El Rosal', '3207380', 'Carrera 72 N°. 95-20', '', 18, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(228, 'Tricentenario', '471 3883', 'Carrera 63A N° .94A-630', '', 127, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(229, 'Julio César García', '2730139', 'Calle 111A N° .65-26', '', 125, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(230, 'Samuel Barrientos', '234 7999', 'Calle 44 N°. 94-119', '', 124, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(231, 'La Piedad', '2347999', 'Carrera 81 N°.54-71', '', 128, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(232, 'Pedro Claver Aguirre', '2372482', 'Carrera 67  N° .95 - 118', '', 18, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(236, 'Aula Ambiental Plaza América', '411 69 44-250 72 70', 'Carrera 45 Nró. 79 a - 100', '', 29, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(237, 'Antonio Derka - Santo Domingo', '529 5218 - 528 0021', 'Carrera 28 N° 107 - 473', '', 11, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(238, 'Asia Ignaciana', '461 0517', 'Calle 122N°51B-30', '', 58, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(239, 'Barrio Santa Cruz', '529 4058', 'Calle 103 N° 43A - 123', '', 56, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(240, 'Bpp (Biblioteca Pública Piloto)', '4600590 ext 227-214', 'Carrera 64N°5032', '', 17, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(241, 'Buen Comienzo San Blaz', '', '', '', 13, 9, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(242, 'Casa De Justicia Villa Del Socorro', '522 0303', 'Calle 104C N° 48 51', '', 12, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(243, 'Casa De La Cultura Los Alcázares', '264 23 36', 'Calle 48B N° 88-62', '', 49, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(244, 'Casa De La Cultura Manrique', '211 73 73', 'Carrera 45 N° 72-62', '', 13, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(245, 'Casa De La Justicia Santo Domingo', '3859434', 'Carrera 32 N°101 - 283', '', 11, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(246, 'CAV América Unidad De Desplazamiento Forzado', '3856893', 'Calle 44a 75-104', '', 29, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(247, 'CAV Palermo Centro De Ayudas A Victimas', '3834192', 'Carrera 55 # 95-97', '', 115, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(248, 'Centro Cultural Los Colores', '2641969-4216611', 'Carreraa 77b N°53-26', '', 16, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(249, 'Centro De Servicios Del Estadio', '3857161', 'Calle 48 N° 73-10', '', 15, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(250, 'Ciro Mendía', '236 4909', 'Calle 99 N° 48 - 55', '', 54, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(251, 'CREM Granizal', '528 7740', 'Calle 103 N° 33D - 75', '', 50, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(252, 'Escuela Del Concejo Clodomiro', '', '', '', 110, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(253, 'Fe Y Alegria Granizal', '529 3562 -529 3562', 'Carrera  39A N°104-23', '', 50, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(254, 'Federico Carrasquilla', '5217789 - 2580194 - 2581227', 'Carrera 45 N° 108 - 110', '', 53, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(255, 'Inspección Aranjuez', '2857561', 'Callee 92 50 53', '', 14, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(256, 'José Antonio Galán', '236 3000 /214 3010', 'Carrera 44 N°94-119', '', 100, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(257, 'José María Velaz', '461 1223/464 4146', 'Calle 121 N°.48-67', '', 57, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(258, 'La Avanzada', '572 2332', 'Calle 94 N°24C-39', '', 51, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(259, 'Manuel Uribe Angel', '2581854', 'Carrera 49A N° 107-65', '', 54, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(260, 'Mascerca Floresta', '3857409', 'Carrera 89B N°48 A 27', '', 30, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(261, 'Nuevo Horizonte', '5284546 - 5284658-5722929-5285638', 'Carrera 37 N° 109 - 24', '', 53, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(262, 'Pablo Neruda', '236 7211/214 2284', 'Calle 97A 50AA 50', '', 55, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(263, 'Parque Principal La Floresta', 'Sin datos', 'Calle 46 coN° Carrera 87', '', 110, 9, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(264, 'Pequeña María (Cobertura)', '529 0103', 'Calle 97A N°24F 66', '', 52, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(265, 'Santa Teresa', '258 4245', 'Carrera 52 N° 109A - 18', '', 55, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(266, 'Alfonso Upegui Orozco', '426 0345', 'Calle 64B N°117-167', '', 25, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(267, 'Alfredo Cock Arango', '267 7552', 'Carrera 72 N° 99-56', '', 18, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(268, 'Biblioteca Fernando Gómez Martínez', '421 65 95', 'Carreraa 88 C N° 76DD-20', '', 112, 10, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(269, 'Casa De Gobierno San Cristobal', '3857171- 3856840', 'Carrera 131 N° 60 - 59 Parque principal', '', 25, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(270, 'Casa De Gobierno San Sebastián De Palmitas', '3856832', 'Calle 20 N° 35 - 114 Parque principal', '', 23, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(271, 'Casa De La Justicia De Robledo', '4373587', 'Diagonal 85 N° 79- 173', '', 22, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(272, 'Centro De Servicios Lusitania', '3858449', 'Calle 63N° 108 BB-06', '', 24, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(273, 'Centro De Servicios Robledo', '385 74 53', 'Calle 64 A N° 85 - 19', '', 22, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(274, 'Doce De Octubre', '477 7998/267 6900', 'CarreraA 77B N°.103-05', '', 21, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(275, 'El Pedregal', '237 4710/267 3941', 'Calle 102 N°74A-47', '', 117, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(276, 'Hector Rogelio Montoya', '387 0058', 'San Sebastián De Palmitas', '', 23, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(277, 'Inspección Doce De Octubre', '4776011', 'Calle 103 N° 77 B- 56', '', 21, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(278, 'Jorge Robledo', '234 5223', 'Calle 65 N° 87-74', '', 22, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(279, 'Maestro Fernando Botero', '237 1235', 'Calle 104 N°72A-80', '', 117, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(280, 'Maestro Pedro Nel Gómez', '2730323', 'Calle 118 N° 70-42', '', 111, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(281, 'Mariscal Robledo', '234 0009/ 234 0501', 'Calle 65 N° 84 87', '', 22, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(282, 'Mascerca Castilla', '3857429', 'Carrera 65 N° 100 -109', '', 18, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(283, 'Parque Principal De San Cristóbal', 'Sin datos', 'Sin datos', '', 25, 9, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(284, 'Santa Juana Del Lestonnac', '471 1144', 'CarreraA 76A N° 103C-43', '', 117, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(285, 'Santa Margarita', '427 1046', 'Calle 63D N° 108 BB 160', '', 25, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(286, 'Secretaría De Movilidad', '445 78 74', 'Carrera 64 C N° 72 - 58', '', 19, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(287, 'Unidad Deportiva Jose Rene Higuita', '4718479', 'Carrera 69 N°.101-25', '', 18, 9, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(288, 'UPJ (Unidad Permanente De Justicia)', '493 98 44', 'Carrera 52 N°71-84', '', 20, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(289, 'Villa Flora', '234 8424', 'Calle 76 AE N° . 83C - 46', '', 112, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(290, 'Alfonso López Pumarejo', '3200510 /105', 'Calle 58 N° 36 B 40', '', 34, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(291, 'AMAUTA - Centro De Atención Al Adulto Mayor', '3856935', 'Carrera 45 N°54-55', '', 32, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(292, 'Archivo Histórico De Medellín', '5126547 / 2317355', 'Calle 50 N° 43- 64', '', 32, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(293, 'Asamblea Departamental', '221 8962 /269 7703', 'Carrera 27 N° 47-46', '', 67, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(294, 'Centro de información e Investigación Ambient', '2639675', 'Carrera 62 N°65 - 01', '', 31, 13, '1', '0000-00-00 00:00:00', '2015-04-22 22:03:26', 0),
(295, 'Camino De Paz', '2260014', 'Carrera 8 A N° 56-69', '', 60, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(296, 'Casa De Gobierno Santa Elena', '3856984 - 5380109', 'Parque Principal', '', 37, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(297, 'Casa De Integración Afrocolombiana', 'N/A', 'Carrera 50 D N° 62 - 95', '', 36, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(298, 'Cav Caunces - Centro De Atención A Victimas', '2698028-2693532- 2698052', 'Kilómetro 1 Via Santa Elena', '', 26, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(299, 'CEFA', '2175337 / 2395403', 'Calle 50 N° 41-55', '', 36, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(300, 'Centro De La Diversidad Sexual', '5124019', 'Carrera 48 N° 57-21', '', 36, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(301, 'El Salvador', '218 0993', 'Carrera 38A N°34 208', '', 28, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(302, 'Escuela Del Maestro', '3857140', 'Calle 51 N°. 40 - 155 Avenida Playa', '', 34, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(303, 'Federico Ozanam', '2397252', 'Calle 47 N° 35 - 19', '', 67, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(304, 'Gabriel Garcia Márquez', '2260583', 'Carrera 8A N° 57A-94', '', 61, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(305, 'Gonzalo Restrepo', '2697940 ext 11 y 12', 'Carrera 26 N° 49- 70', '', 62, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(306, 'Inspección 10 B', '2911378 - 2544350', 'Calle 56 N°41-06', '', 34, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(307, 'Inspección 9b Salvador', '2161812', 'Carreraa 36 a N°39-26', '', 28, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(308, 'ITM - Sede Fraternidad', '4600727 Ext 5522', 'Calle 54A N° 1 - 30', '', 34, 6, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(309, 'Javiera Londoño', '2393116', 'Calle 53 40-60', '', 32, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(310, 'Juan De Dios Carvajal', '2840808', 'Calle 65AA N° 36-39', '', 63, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(311, 'La Libertad', '221 5615', 'DG 17DD N°56B-49', '', 64, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(312, 'La Milagrosa', '221 5773', 'Cra 29 N° 41-14', '', 65, 4, '1', '0000-00-00 00:00:00', '2015-03-30 20:47:22', 0),
(313, 'Luis Carlos Galán Sarmiento - Sede Escuela N', '2842912', 'Calle 57 C N° 23-200', '', 66, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(314, 'Mascerca Buenos Aires', '3857401  3017424054', 'Calle 49 N° 31-12', '', 67, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(315, 'Merceditas Gómez Martínez', '269 2880', 'Calle 45 N°.18-03', '', 67, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(316, 'Miraflores', '269 7583', 'Calle 48 N° 97-05', '', 62, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(317, 'Parque Arví', '4442979', 'Detrás de la IE Santa Elena', '', 37, 9, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(318, 'Parque De La Vida', '2634476', 'Carrera 51d 62-42', '', 38, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(319, 'Parque De Santa Elena', '3856984 - 5380109', 'Parque De Santa Elena', '', 37, 9, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(320, 'Plazoleta Botero', '2313636 ex 189', 'Bolivar', '', 36, 9, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(321, 'Por Mis Derechos, Equidad E Inclusión', '2541552 - 2545470 - 3855527', 'Calle 57 N°45-129', '', 35, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(322, 'Punto De Navegación Centros Comerciales (La ', '2935304', 'Carrera 48 N° 49-14.', '', 32, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(323, 'San Francisco De Asis', '2690520', 'Calle 56 N° 16-18', '', 69, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(324, 'Santa Laura', '269 0627 /269 1918', 'Calle 45 N° 22A 82', '', 65, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(325, 'Santo Tomas De Aquino', '2163229', 'Carrera 33 N° 36A-28', '', 65, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(326, 'Sol De Oriente', '2914389/ 104 -107', 'Carrera 23 N° 56EH - 201', '', 70, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(327, 'Villa Turbay', '269 8211', 'Carrera 2 N°55F - 17', '', 71, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(328, 'Antonio Ricaurte', '238 4910', 'Calle 2 N° 80-29 Belén Rincón', '', 82, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(329, 'Benedikta Zur Neiden', '253 0077', 'Carrera 95 N° 42C - 02 San Javier', '', 74, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(330, 'Benjamin Herrera', '4480073', 'Calle 25 N°52-140 Trinidad', '', 79, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(331, 'Carlos Vieco', '2523038\n2532504', 'Calle 40 N° 105 - 36 San Javier', '', 74, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(332, 'Casa De Gobierno Altavista', '3856595 / 3857428', 'Calle 18 N° 105-69 ', '', 45, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(333, 'Casa De Gobierno San Antonio De Prado', '3856823', 'Carrera 9 N° 10 - 36 San Antonio de Prado', '', 46, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(334, 'Casa De Justicia 20 De Julio', '385 5459', 'Calle 39D N° 106-179', '', 76, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(335, 'Cav belencito. Centro De Ayudas A Víctimas', '4912828 / 3856876', 'Carrera 92 N°34 D 93 40', '', 40, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(336, 'Corregiduría El Limonar', '2863712', 'Calle 3 N°2C este 14 El Limonar', '', 47, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(337, 'Eduardo Santos', '4920920 ext 17', 'Calle 43 N° 120C 77 Eduardo Santos', '', 72, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(338, 'El Corazón Sede Bachillerato', '2528790', 'Calle 116 F N°34AA-131', '', 40, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(339, 'El Corazón Sede Primaria', '2535611', 'Calle 34B N° 116D -25', '', 40, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(340, 'Fé Y Alegría El Limonar', '2869498', 'Calle 4 A ESTE 155 - El Limonar', '', 46, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(342, 'INEM Guillermo Echavarria', '2663603', 'Carrera 43B # 9 - 61', '', 41, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(343, 'INEM José Félix De Restrepo', '2663603', 'Carrera 48 N° 1 125 Avenida Las Vegas', '', 41, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(344, 'José Acevedo Y Gómez', '255 2996', 'Calle 8SUR N° 52B - 72 San Rafael-Guayabal', '', 42, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(345, 'José Acevedo Y Gómez. Sede República De Co', '2852538', 'Carrera 52 N° 7S-23', '', 42, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(346, 'La Independencia Sede Bachillerato', '4929808 ext 14 - 4929390', 'Calle 39 D N° 112-81 interior 105', '', 77, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(347, 'La Presentación', '255 5481', 'Calle 7 N° 56-9 Campo Amor', '', 80, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(348, 'Mascerca Guayabal', '3857413', 'Carrera 52 N° 9S - 42', '', 42, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(349, 'Mascerca Poblado', '3857414', 'Carrera 43 D N° 11 - 02 Manila', '', 41, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(350, 'Octavio Calderón Mejía', '255 4257', 'Carrera 58 N° 7 - 157 Campo Amor', '', 79, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(351, 'Octavio Harry', '343 5934', 'Calle 17 N° 73 - 37 Belén Las Playas', '', 84, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(352, 'Parque Belén', 'N/A', 'Carrera 77 N° 30A-53 Parque de Belén', '', 44, 14, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(353, 'Parque Principal de Altavista', 'N/A', 'Calle 16 N° 99 - 117 Altavista', '', 45, 14, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(354, 'Parque El Poblado', 'N/A', 'Carrera43 A N° 10-01', '', 41, 9, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(355, 'Perpetuo Socorro', '253 9037', 'Carrera 92 N° 34 D-54 40', '', 40, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(356, 'San Roberto Belarmino', '2562097', 'Calle 32B N°83-39 BeléN° Las Mercedes', '', 83, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(357, 'Santa Catalina de Sena', '3541437', 'Calle 1 SUR N° 29-300 Los Balsos 1', '', 41, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(358, 'Santo ángel', '2853623', 'Calle 2 Sur N° 53-140. Guayabal', '', 42, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(359, 'Sección Juan Pablo Ii - Ie Santos ángeles C', '235 7397', 'Carrera 65 G N°. 16 A - 12 Santa Fé', '', 81, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(360, 'Sección Primaria La Independencia', '4929808', 'ppal Calle 39D N° 112-81 La Independencia', '', 73, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(361, 'Sección Santísima Trinidad - IE Benjamín H', '235 5236', 'Calle 26 N° 65C - 100 Trinidad', '', 79, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(362, 'Unidad Integral 6', '3859207', 'Carrera 77 N°25-01 Belén San Bernardo', '', 43, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(394, 'Bello Horizonte', '234 6584', 'Carrera 86 77B 53', '', 129, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(395, 'Cent Educ Anexo La Frisola', '4463248', 'Vda la Frisola', '', 130, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(396, 'Cent Educ Anexo La Potrera', '3871105', 'Vda La Potrera', '', 131, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(397, 'Cent Educ Anexo Luis Mesa Villa', '4461379', 'Vda Urquita', '', 132, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(398, 'Cent Educ La Aldea', '387 0129', 'Vda La Aldea', '', 133, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(399, 'Cent Educ La Suiza', '446 3712', 'Vda la Suiza', '', 134, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(400, 'Cent Educ La Volcana', '446 3286', 'Vda la Volcana', '', 135, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(401, 'Cent Educ León Arango Paucar', '387 0825', 'Vda la Sucia', '', 136, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(402, 'Centro De Integración Comunitario Comunas 5 ', '4780169', 'Carrera 73 N° 96 - 105', '', 137, 15, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(403, 'Centro Educativo Travesias El Morro', '427 3766', 'Carrera 143 N° 68-20- INTERIOR 120', '', 138, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(404, 'Ciudadela De Las Américas', '273 0061', 'Calle 111 N° 79 - 77', '', 139, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(405, 'Ciudadela Nuevo Occidente (Las Flores)', '4278910 - 4277760', 'Barrio las Flores', '', 140, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(406, 'Colegio Mayor De Antioquia', '4 44 56 11', 'Carrera 78 N° 65 - 46', '', 143, 6, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(407, 'Fe y Alegría Aures', '257 5489', 'Carrera 95 89-73', '', 141, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(408, 'Fe y Alegría San Jose', '441 4908', 'Calle 86 N° 92-61', '', 142, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(409, 'Fe y Alegría Villa De La Candelaria', '2642310', 'Calle 77A N° 90D - 35', '', 141, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(410, 'Gerardo Valencia Cano', '2300313', 'Calle 65 N° 74B-273', '', 143, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(411, 'Institucion Universitaria Pascual Bravo', '448 0520', 'Calle 73 N° 73A 226', '', 143, 6, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(412, 'Instituto Tecnologico Metropolitano', '440 51 00', 'Calle 73 N° 76A - 354', '', 143, 6, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(413, 'Jardin Infantil Buen Comienzo La Huerta', '4379646', 'Carrera 47 N° 69C - 50', '', 159, 9, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(414, 'Jesus Rey', '421 8309/421 9748', 'CarreraA 88 N° 77A-11', '', 141, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(415, 'Jorge Eliécer Gaitán', '2578292', 'Calle 92 # 83-41', '', 158, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(416, 'Juvenil Nuevo Futuro', '267 3506', 'Calle 104C N°80-03', '', 139, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(417, 'La Huerta', '437 9554', 'CarreraA 97 N° 69C - 71', '', 159, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(418, 'Luis López De Mesa', '257 0925/441 7456', 'Calle 84 N° 74-60', '', 144, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(419, 'Parque San Sebastián De Palmitas', 'Sin datos', 'Sin datos', '', 145, 9, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(420, 'Picachito', '476 1277', 'Carrera 85 A N° 98B 17', '', 146, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(421, 'San Vicente De Paúl', '257 62 43 - 284 02 65', 'Carrera 71 A N° 79-01', '', 160, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(422, 'Arzobispo Tulio Botero Salazar', '221 2693/226 7300', 'Calle 49A N° 03A-006', '', 147, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(423, 'El Cerro', '538 1830', 'Santa Elena', '', 148, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(424, 'El Pinal', '222 3647', 'Calle 56 N° 25 A 40', '', 149, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(425, 'El Placer', '5380143', 'Santa Elena', '', 150, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(426, 'El Plan', '538 0236', 'Correg. Santa Elena', '', 37, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(427, 'Espacio Público', '2291300 / 2291304 Ext 202', 'Carrera 42 N° 47-15', '', 122, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(428, 'Hector Abad Gómez - Sede Darío Londoño', '216 1258/216 3805', 'CarreraA 44 N° 43-96', '', 154, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(429, 'Inem Tulio Ospina', '512 3594/ 512 1428', 'Calle 60 N° 51 48', '', 38, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(430, 'Juan Andres Patiño', '566 9138', 'Santa Elena', '', 152, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(431, 'Mazo', '5669390', 'Santa Elena', '', 153, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(432, 'Media Luna', '269 5500', 'Santa Elena', '', 37, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(433, 'Piedra Gorda', '5669186', 'Santa Elena', '', 155, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(434, 'Piedras Blancas', '551 3286', 'Santa Elena', '', 153, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(435, 'Santa Elena -Sede Escuela', '538 00 27', 'Santa Elena', '', 161, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(436, 'Taquilla única - Centro De Atención A La Ci', '3857162- 3857414 - 3857161', 'Calle 44 N° 52-165', '', 154, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(437, 'Tesorería Municipal', '3856561', 'Carrera 44 N° 52-165', '', 154, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(438, 'Mascerca Belén', '3856595 Andres / 3857428 lina', 'Carrera 76 N° 32 -74 Belén Parque', '', 157, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(439, 'Permanencia 3', '2385515 / 2389217', 'Calle 31 N° 75-22 Belén Parque', '', 157, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(440, 'Centro De Desarrollo Cultural De Moravia', '', '', '', 106, 16, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(441, 'Enzona Comunicaciones', '', '', '', 13, 16, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(442, 'UVA De Moscú- Popular', '', '', '', 56, 16, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(443, 'UVA De Versalles- Manrique', '', '', '', 101, 16, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(444, 'Centro Integrado San Cristobal', '4270542 - 4270023', 'Carreraa 128 N° 63-45, Km 7 vía al mar', '', 25, 15, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(445, 'Junta De Acción Comunal Castilla', '4548264', 'Carrera 64 AA N° 113 A 04', '', 18, 15, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(446, 'Escuela Nacional Sindical', '5133100', 'CALLE 51 # 55-78 Boyaca con Tenerife', '', 36, 16, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(447, 'Ludoteca La Ladera', '3857331', 'Calle 59 N°  36-30', '', 108, 16, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(448, 'Manuel Jose Caicedo', '2217929', 'Calle 50 N°  29 - 82', '', 156, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(449, 'Santa Elena', '538 1304', 'Santa Elena', '', 37, 4, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(450, 'Biblioteca Comfenalco El Salado', '4928888', 'Calle 39D N° 112-81 IN°t 101', '', 77, 16, 'Activo', '0000-00-00 00:00:00', '2014-12-05 16:36:38', 0),
(451, 'Vivero De Software, Alianza Futuro Digital', '2666339', 'Calle 7 N°  48-111 Av Las Vegas entre INEM y', '', 41, 15, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(452, 'Parque San Antonio de Prado ', '0000000', 'Calle 45 con Carrera 49', '', 46, 14, 'Activo', '0000-00-00 00:00:00', '2015-03-17 18:28:22', 0),
(453, 'Parque Biblioteca Doce de Octubre', '477 62 84', 'Carrera 80 N°104  - 10', '', 21, 10, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(454, 'Telecentro Zafra', '3543668', 'calle 21 # 84B -02', 'tel.mizafra2012@gmail.com', 162, 5, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(456, 'Telecentro Monteverde', '4964946', 'Calle 34A N°116-170', '', 45, 5, 'Activo', '2014-12-03 13:59:18', '0000-00-00 00:00:00', 14),
(457, 'Telecentro los Tanques', '4924295', 'Calle 34B N°130-148', 'telecentrolostanques@gmail.com', 45, 5, 'Activo', '2014-12-03 14:28:45', '0000-00-00 00:00:00', 12),
(458, 'Telecentro Blanquizal', '4260502', 'Carrera 93A N° 58-19', '', 163, 5, 'Activo', '2014-12-05 11:23:29', '0000-00-00 00:00:00', 14),
(459, 'Telecentro Trinidad', '2355850', 'Carrera. 65D N° 24-14 int. 101', '', 79, 5, 'Activo', '2014-12-05 11:26:03', '0000-00-00 00:00:00', 14),
(460, 'Centro Comercial Terminal del Sur ', '3611588', 'Carrera 65 #8B-91', 'direccioncomercial@terminaldelsur.com', 79, 16, 'Activo', '2014-12-15 11:34:57', '0000-00-00 00:00:00', 14),
(461, 'Biblioteca Comunitaria el Manzanillo', '2388988', 'Vereda el Manzanillo', '', 45, 10, 'Activo', '2014-12-16 13:36:33', '0000-00-00 00:00:00', 14),
(462, 'Telecentro Nuevo Horizonte', '5720297', 'Carrera 37 N° 108A -13', '', 165, 5, 'Activo', '2014-12-17 11:38:47', '0000-00-00 00:00:00', 14),
(463, 'Centro de Lectura Villa Guadalupe', '2140044- 5217000', 'Calle 95 N° 43A- 03', '', 164, 10, 'Activo', '2014-12-17 11:39:48', '0000-00-00 00:00:00', 14),
(464, 'Telecentro Moscú', '259 2467', 'Carrera 49 N° 99- 10', '', 56, 5, 'Activo', '2014-12-17 11:44:07', '0000-00-00 00:00:00', 14),
(465, 'Fundación Casa Maren', '4191273', 'Calle 82 N° 31B-  08', '', 13, 7, 'Activo', '2014-12-17 11:45:22', '0000-00-00 00:00:00', 14),
(466, 'Biblioteca El Raizal', '5732057', 'Calle 77 N° 31 - 40', '', 13, 10, 'Activo', '2014-12-17 11:46:16', '0000-00-00 00:00:00', 14),
(467, 'Telecentro San Joaquin Bolivariana', '4112044', 'Calle 42 N° 71-37', '', 104, 5, 'Activo', '2014-12-17 11:48:30', '0000-00-00 00:00:00', 14),
(468, 'Telecentro Santa Mónica', '2523247', 'Calle 38 N° 92 -55', '', 124, 5, 'Activo', '2014-12-17 11:49:32', '0000-00-00 00:00:00', 14),
(469, 'Telecentro La soledad', '2341876', 'Calle 53A N° 81B - 57', '', 29, 5, 'Activo', '2014-12-17 11:50:36', '0000-00-00 00:00:00', 14),
(470, 'Telecentro La Sierra', '2260635', 'Calle 54B  N° 5 Este -44', '', 60, 5, 'Activo', '2014-12-17 11:56:30', '0000-00-00 00:00:00', 14),
(471, 'Biblioteca Popular Mario Gaviria Suarez ', '2675051 - ext 16', 'Carrera 64 N° 96A-10 ', '', 127, 10, 'Activo', '2014-12-17 12:01:35', '0000-00-00 00:00:00', 14),
(472, 'República de Uruguay  ', '2574945', 'Calle 91 A # 70 A - 193', '', 166, 4, 'Activo', '2015-03-16 13:32:32', '0000-00-00 00:00:00', 35),
(473, 'Parque Juanes de la Paz', '4717518', 'Carrera 65 # 97-00', '', 18, 14, 'Activo', '2015-03-16 13:35:08', '0000-00-00 00:00:00', 35),
(474, 'Centro de Salud Alfonso López', '2573800 – 4416189', 'Carrera 70 #90-13', '', 166, 13, 'Activo', '2015-03-16 13:36:30', '0000-00-00 00:00:00', 35),
(475, 'UPSS CASTILLA “Jaime Tobon Arbelaez”', '4256440 y 4256441-42-43-44-45-46-47-48', 'Carrera 65 #98-115', '', 18, 13, 'Activo', '2015-03-16 13:38:18', '0000-00-00 00:00:00', 35),
(476, 'Terminal del Norte', '444 80 20 ext 116', 'Carrera 64C #78-580', '', 19, 14, 'Activo', '2015-03-16 14:21:36', '0000-00-00 00:00:00', 35),
(477, 'Parque de Florencia', '0', 'Calle 113 con Carrera 70', '', 111, 14, 'Activo', '2015-03-16 14:35:46', '0000-00-00 00:00:00', 35),
(478, 'Pista de Patinaje Francisco Antonio Zea', '0', 'Calle 91A con Carrera 67', '', 167, 14, 'Activo', '2015-03-16 14:44:13', '0000-00-00 00:00:00', 35),
(479, 'Fundación Ratón de Biblioteca La Esperanza', '366 69 10', 'Carrera 73 N°96 - 105', '', 137, 10, 'Activo', '2015-03-16 14:45:09', '0000-00-00 00:00:00', 35),
(480, 'Telecentro Doce de Octubre', '4723636-4744198', 'Cra 80 103A-240', '', 21, 5, 'Activo', '2015-03-16 14:46:16', '0000-00-00 00:00:00', 35),
(481, 'El Triunfo Santa Teresa', '4715017', 'Calle 104 D # 82 GG 20', '', 168, 4, 'Activo', '2015-03-16 14:50:02', '0000-00-00 00:00:00', 35),
(482, 'Camilo Mora Carrasquilla', '4384765', 'Calle 62 D N° 94B-74', '', 169, 4, 'Activo', '2015-03-16 14:52:45', '0000-00-00 00:00:00', 35),
(483, 'La Carmelita', '4381947', 'Carrera 84 E # 97-82', '', 118, 5, 'Activo', '2015-03-16 14:54:26', '0000-00-00 00:00:00', 35),
(484, 'Unidad Deportiva 12 de Octubre', '4744375', 'Calle 104b # 78b - 21', '', 21, 14, 'Activo', '2015-03-16 15:36:54', '0000-00-00 00:00:00', 35),
(485, 'Centralidad deportiva el Progreso #2', '0', 'Calle 106C con Carrera 82A', '', 170, 14, 'Activo', '2015-03-16 15:42:48', '0000-00-00 00:00:00', 35),
(486, 'Teatro al aire libre y parque el Pedregal', '4764379', 'Calle 105 #72A-25', '', 117, 14, 'Activo', '2015-03-16 15:43:55', '0000-00-00 00:00:00', 35),
(487, 'Casa de la Cultura Pedregal', '3855369', 'Calle 102B con Carrera 72', '', 117, 16, 'Activo', '2015-03-16 15:46:10', '0000-00-00 00:00:00', 35),
(488, 'Jesús Amigo', '2673204/4776196', 'calle 99D 82-07', '', 21, 4, 'Activo', '2015-03-16 15:54:26', '0000-00-00 00:00:00', 35),
(489, 'UPSS Doce de Octubre  “Luis Carlos Galán Sarm', '0', 'Calle 101BB #78-10', '', 21, 13, 'Activo', '2015-03-16 16:15:19', '0000-00-00 00:00:00', 35),
(490, 'Telecentro Altamira', '4226847', 'Diagonal 80 N°78B 240 Bl 77', '', 171, 5, 'Activo', '2015-03-16 16:27:21', '0000-00-00 00:00:00', 35),
(491, 'Centro de Salud San Camilo', '2341587 – 2340070 -4219358-4225273', 'Carrera 88 #80-150', '', 172, 13, 'Activo', '2015-03-16 16:44:35', '0000-00-00 00:00:00', 35),
(492, 'Vereda Centralidad La Suiza', '0', 'Vereda La Suiza', '', 134, 14, 'Activo', '2015-03-16 16:49:15', '0000-00-00 00:00:00', 35),
(493, 'Loma Hermosa', '4271116', 'CRA 123B N° 53B - 05', '', 25, 4, 'Activo', '2015-03-16 16:50:55', '0000-00-00 00:00:00', 35),
(494, 'Ludoteca Casa San Martín', '3856570', 'Calle 64B #106-60', '', 173, 13, 'Activo', '2015-03-16 16:56:15', '0000-00-00 00:00:00', 35),
(495, 'UPSS San Cristóbal "Leonardo Betancur', '0', 'Calle 63 #130-44', '', 25, 13, 'Activo', '2015-03-16 16:57:31', '0000-00-00 00:00:00', 35),
(496, 'UPSS Nuevo Occidente', '0', 'Calle 63 No 108', '', 24, 13, 'Activo', '2015-03-16 16:58:38', '0000-00-00 00:00:00', 35),
(497, 'Biblioteca pública escolar popular # 2', '522-00-38', 'Carrera 43 # 118-26', '', 57, 10, 'Activo', '2015-03-17 10:22:08', '0000-00-00 00:00:00', 35),
(498, 'Centro de salud Santo Domingo Savio', '5292833 - 5293164 - 5290952', 'Carrera 33 # 107B –15', '', 11, 13, 'Activo', '2015-03-17 10:28:57', '0000-00-00 00:00:00', 35),
(499, 'Centro de Salud Villa del Socorro', '5226267', 'Clle 105 # 48-73', '', 12, 13, 'Activo', '2015-03-17 10:30:27', '0000-00-00 00:00:00', 35),
(500, 'Coliseo de Combate', '369 90 00', 'carrera 70 con calle 50', '', 15, 14, 'Activo', '2015-03-17 10:33:19', '0000-00-00 00:00:00', 35),
(501, 'Coliseo de Gimnasia', '369 90 00', 'carrera 70 con calle 50', '', 15, 14, 'Activo', '2015-03-17 10:34:21', '0000-00-00 00:00:00', 35),
(502, 'Coliseo Ivan de Bedout', '369 90 00', 'carrera 70 con calle 50', '', 15, 14, 'Activo', '2015-03-17 10:35:12', '0000-00-00 00:00:00', 35),
(503, 'Coliseo de Voleibol Yesid Santos', '369 90 00', 'carrera 70 con calle 50', '', 15, 14, 'Activo', '2015-03-17 10:36:00', '0000-00-00 00:00:00', 35),
(504, 'Complejo Acuatico', '369 90 00', 'carrera 70 con calle 50', '', 15, 14, 'Activo', '2015-03-17 10:37:37', '0000-00-00 00:00:00', 35),
(505, 'Diamante de Beísbol', '369 90 00', 'carrera 70 con calle 50', '', 15, 14, 'Activo', '2015-03-17 10:38:12', '0000-00-00 00:00:00', 35),
(506, 'Fe y Alegria Luis Amigo', '263 48 12', 'Carrera 58 # 84 - 40 ', '', 106, 4, 'Activo', '2015-03-17 10:44:59', '0000-00-00 00:00:00', 35);
INSERT INTO `sites` (`id_site`, `site_name`, `site_phone`, `site_address`, `site_mail`, `neighborhood_id`, `site_type_id`, `syte_estado`, `creation_date`, `modification_date`, `user_id`) VALUES
(507, 'La Asunción', '521 74 66   ', 'Carrera 47 N99 - 77', '', 54, 4, 'Activo', '2015-03-17 10:47:13', '0000-00-00 00:00:00', 35),
(508, 'Jardín Botánico – Orquideorama', '4445500', 'Carrera 53 # 52', '', 175, 14, 'Activo', '2015-03-17 10:50:42', '0000-00-00 00:00:00', 35),
(509, 'Parque Aranjuez', '0000000', 'calle 93  carrera 49a', '', 14, 14, 'Activo', '2015-03-17 10:51:46', '0000-00-00 00:00:00', 35),
(510, 'Parque Guadalupe', '0000000', 'Calle 96 carrera 40', '', 164, 14, 'Activo', '2015-03-17 10:57:10', '0000-00-00 00:00:00', 35),
(511, 'Parque de los Deseos', '448 6960', 'Calle 71 # 52-30', '', 175, 14, 'Activo', '2015-03-17 10:59:04', '0000-00-00 00:00:00', 35),
(512, 'Parque del Ajedrez ', '0000000', 'Carrera 93 calle 35', '', 124, 14, 'Activo', '2015-03-17 11:00:08', '0000-00-00 00:00:00', 35),
(513, 'Parque Explora', '5168300', 'Carrera 53 # 52', '', 175, 14, 'Activo', '2015-03-17 11:01:55', '0000-00-00 00:00:00', 35),
(514, 'Parque Norte', '210 03 00', 'carrera 52 calle 77', '', 175, 14, 'Activo', '2015-03-17 11:03:20', '0000-00-00 00:00:00', 35),
(515, 'Pista de Atletismo Alfonso Galvis', '369 90 00', 'carrera 70 con calle 50', '', 15, 14, 'Activo', '2015-03-17 11:04:32', '0000-00-00 00:00:00', 35),
(516, 'Plazoleta de Banderas', '369 90 00', 'carrera 70 con calle 50', '', 15, 14, 'Activo', '2015-03-17 11:05:17', '0000-00-00 00:00:00', 35),
(517, 'Plazoleta entre Antonio Derka y la I.E Santo ', '0000000', 'Carrera 28 #107-205', '', 11, 14, 'Activo', '2015-03-17 11:06:14', '0000-00-00 00:00:00', 35),
(518, 'Positivos por la vida', '4223534', 'Carrera 81b # 49 - 88', '', 176, 16, 'Activo', '2015-03-17 11:09:48', '0000-00-00 00:00:00', 35),
(519, 'Telecentro Santa Cecilia 2', '5728133', 'Carrera 46 # 98-28', '', 114, 5, 'Activo', '2015-03-17 11:11:00', '0000-00-00 00:00:00', 35),
(520, 'Telecentro Santa Lucia', '4221607', 'Calle 47 B # 90 A 36', '', 30, 5, 'Activo', '2015-03-17 11:12:36', '0000-00-00 00:00:00', 35),
(521, 'Unidad deportiva granizal', '0000000', 'Calle 102 # 33d', '', 50, 14, 'Activo', '2015-03-17 11:14:47', '0000-00-00 00:00:00', 35),
(522, 'UPSS Manrique Hermenegildo de Fex', ' 5167260', 'CALLE 66 E # 42-51', '', 13, 13, 'Activo', '2015-03-17 11:16:13', '0000-00-00 00:00:00', 35),
(523, 'UPSS Santa Cruz Víctor Cárdenas Jaramillo', '5221109-514', 'Cra 51A # 100-80', '', 54, 13, 'Activo', '2015-03-17 11:16:57', '0000-00-00 00:00:00', 35),
(524, 'Velódromo Martín Cochise Rodriguez', '369 90 00', 'carrera 70 con calle 50', '', 15, 14, 'Activo', '2015-03-17 11:17:56', '0000-00-00 00:00:00', 35),
(525, 'Biblioteca Villatina', '2691021', 'Carrera 16 No. 56 – 44', '', 69, 10, 'Activo', '2015-03-17 11:20:43', '0000-00-00 00:00:00', 35),
(526, 'Centro de Salud Villatina', '2691461', 'Carrera 54 #17A-09', '', 69, 13, 'Activo', '2015-03-17 11:21:39', '0000-00-00 00:00:00', 35),
(527, 'Desarrollo Integral Las Estancias', '576 74 11', 'Calle 52A #10A-120', '', 177, 14, 'Activo', '2015-03-17 11:24:12', '0000-00-00 00:00:00', 35),
(528, 'Eco parque Esfuerzos de Paz - Las Tinajas', '000000', 'Cll 52A # 33', '', 178, 14, 'Activo', '2015-03-17 11:28:02', '0000-00-00 00:00:00', 35),
(529, 'Parque Recreativo la Ladera', '0000000', 'Carrera 36 #59A-80', '', 108, 14, 'Activo', '2015-03-17 11:35:04', '0000-00-00 00:00:00', 35),
(530, 'Parque Santo', '0000000', 'Calle 15A con Carrera 56D', '', 69, 14, 'Activo', '2015-03-17 11:36:09', '0000-00-00 00:00:00', 35),
(531, 'Telecentro Trece de Noviembre', '2915287', 'Cll 56HG 17A-112 Sede Comunal', '', 179, 5, 'Activo', '2015-03-17 11:42:13', '0000-00-00 00:00:00', 35),
(532, 'Parque la Milagrosa', '0000000', 'Carrera 29 con calle 41', '', 65, 14, '1', '2015-03-17 11:44:01', '2015-03-30 20:48:21', 35),
(533, 'Unidad deportiva Miraflores', '0000000', 'Calle 51 con Carrera 26', '', 68, 14, 'Activo', '2015-03-17 11:46:01', '0000-00-00 00:00:00', 35),
(534, 'Museo Casa de la Memoria', '3834001', 'Calle 51 #36-66', '', 34, 14, 'Activo', '2015-03-17 11:47:14', '0000-00-00 00:00:00', 35),
(535, 'Centro de servicios al Ciudadano-CAM', '3857162- 3857414 - 3857161', 'Calle 44 N°. 52-165', '', 32, 13, 'Activo', '2015-03-17 11:48:51', '0000-00-00 00:00:00', 35),
(536, 'Concejo de Medellin /recinto)', '3846839', 'Carrera 53A # 42-2 a 42-100', '', 32, 14, 'Activo', '2015-03-17 13:10:44', '0000-00-00 00:00:00', 35),
(537, 'Hospital General', '384 7300', 'Carrera 48 #32-102', '', 180, 13, 'Activo', '2015-03-17 13:16:31', '0000-00-00 00:00:00', 35),
(538, 'Parque Berrio', '0000000', 'Calle 50 #51-65', '', 32, 14, 'Activo', '2015-03-17 13:17:36', '0000-00-00 00:00:00', 35),
(539, 'Parque Bicentenario', '0000000', 'Calle 51 con Carrera 38', '', 34, 14, 'Activo', '2015-03-17 13:18:28', '0000-00-00 00:00:00', 35),
(540, 'Parque Bolivar', '0000000', 'Carrera 49 con Calle 54', '', 32, 14, 'Activo', '2015-03-17 13:21:19', '0000-00-00 00:00:00', 35),
(541, 'Parquede Boston', '0000000', 'Carrera 39 con CAlle 55', '', 34, 14, 'Activo', '2015-03-17 13:22:02', '0000-00-00 00:00:00', 35),
(542, 'Parquede losPies Descalzos', '3800804', 'Carrera 58 con calle 42', '', 32, 14, 'Activo', '2015-03-17 13:23:46', '0000-00-00 00:00:00', 35),
(543, 'Parquede San Antonio', '231 27 11', 'Calle 45 con Carrera 49', '', 32, 14, 'Activo', '2015-03-17 13:26:55', '0000-00-00 00:00:00', 35),
(544, 'Parque del Periodista', '0000000', 'Carrera 43 con Calle 53', '', 32, 14, 'Activo', '2015-03-17 13:29:57', '0000-00-00 00:00:00', 35),
(545, 'Plazoleta de Cisneros', '3807502', 'Calle 45 con Carrera 53', '', 32, 14, 'Activo', '2015-03-17 13:30:58', '0000-00-00 00:00:00', 35),
(546, 'Plazoletala Alpujarra', '0000000', 'Calle 44 #52-165', '', 32, 14, 'Activo', '2015-03-17 13:31:52', '0000-00-00 00:00:00', 35),
(547, 'Plazuela San Ignacio', '0000000', 'Carrera 44 con Calle 49', '', 32, 14, 'Activo', '2015-03-17 13:33:29', '0000-00-00 00:00:00', 35),
(548, 'Unidad deportiva Fraternidad (ITM)', '0000000', 'Calle 50A #30-01', '', 34, 14, 'Activo', '2015-03-17 13:39:59', '0000-00-00 00:00:00', 35),
(549, 'Parque Arví- Parqueadero Grajales', '444 29 79', 'Sante Elena ', '', 37, 14, 'Activo', '2015-03-17 13:52:52', '0000-00-00 00:00:00', 35),
(550, 'Centro de Salud Villa Laura', '4920838', 'Carrera 105B #34BB-80', '', 181, 13, 'Activo', '2015-03-17 14:30:30', '0000-00-00 00:00:00', 35),
(551, 'UPSS SAN JAVIER “Jesús Pelaez', '511 75 05', 'Calle 40 #105-103', '', 74, 13, 'Activo', '2015-03-17 14:34:00', '0000-00-00 00:00:00', 35),
(552, 'Centro de Salud LA ESPERANZA', '0', 'Carrera 118 #39A-13', '', 74, 13, 'Activo', '2015-03-17 14:46:30', '0000-00-00 00:00:00', 35),
(553, 'Unidad Deportiva Antonio Nariño', '0000000', 'Carrera 108 #42-94', '', 183, 14, 'Activo', '2015-03-17 15:04:14', '0000-00-00 00:00:00', 35),
(554, 'Plazoleta y parque Cultural del MAMM', '444 2622', 'Carrera 44 entre Calles 18 y 20', '', 184, 14, 'Activo', '2015-03-17 15:07:35', '0000-00-00 00:00:00', 35),
(555, 'Coliseo Carlos Mauro Hoyos', '0000000', 'Carrera 68B con Calle 26B', '', 44, 14, 'Activo', '2015-03-17 15:09:00', '0000-00-00 00:00:00', 35),
(556, 'Parque de Cristo Rey', '0000000', 'Carrera 53 con Calle 2Sur', '', 42, 14, 'Activo', '2015-03-17 15:10:24', '0000-00-00 00:00:00', 35),
(557, 'Unidad Deportiva Maria Luisa Calle', '3410430', 'Carrera 70 # 1-180', '', 44, 14, 'Activo', '2015-03-17 15:11:38', '0000-00-00 00:00:00', 35),
(558, 'Aeroparque Juan Pablo Segundo', '3401210', 'Cra 70 # 16-04', '', 44, 14, 'Activo', '2015-03-17 15:12:21', '0000-00-00 00:00:00', 35),
(559, 'Desarrollo integral Belén Zafra', '3699000', 'Carrera 83B con Calle 21', '', 162, 14, 'Activo', '2015-03-17 15:13:07', '0000-00-00 00:00:00', 35),
(560, 'Institución Universitaria Pascual Bravo Belen', '4461360', 'calle 10 #72 - 62', '', 44, 14, 'Activo', '2015-03-17 15:13:53', '0000-00-00 00:00:00', 35),
(561, 'UPSS BELÉN “Héctor Abad Gómez”', '343 45 95', 'Calle 28 #77-124', '', 44, 13, 'Activo', '2015-03-17 15:15:31', '0000-00-00 00:00:00', 35),
(562, 'Cerro Nutibara (Pueblito Paisa)', '3858017', 'calle 30 A # 55-64', '', 86, 14, 'Activo', '2015-03-17 15:16:58', '0000-00-00 00:00:00', 35),
(563, 'Bolera Unidad Deportiva Andres Escobar', '3611639', 'carrera 66B # 30 A 49', '', 44, 14, 'Activo', '2015-03-17 15:17:54', '0000-00-00 00:00:00', 35),
(564, 'Tiro Con Arco', '3611639', 'Carrera 66b con calle 30a', '', 44, 14, 'Activo', '2015-03-17 15:18:45', '0000-00-00 00:00:00', 35),
(565, 'Pista De Bicicross Antonio Roldán Betancur', '2658027', 'Cra 66 B con calle 30 A', '', 44, 14, 'Activo', '2015-03-17 15:19:53', '0000-00-00 00:00:00', 35),
(566, 'UPSS SAN A. DE PRADO Diego Echavarria Misas', '2860055', 'Carrera 79 #40Sur-45', '', 46, 13, 'Activo', '2015-03-17 15:21:03', '0000-00-00 00:00:00', 35),
(567, 'Centro De Servicios San Cristóbal', '3856840', 'Carrera 131 60-59', '', 25, 13, '1', '2015-04-27 13:25:54', '0000-00-00 00:00:00', 35),
(568, 'Aures', '264 0826', 'Carrera 96 A N° 77 E 15', '', 141, 4, '1', '2015-05-04 11:52:54', '0000-00-00 00:00:00', 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sites_per_trainers`
--

CREATE TABLE IF NOT EXISTS `sites_per_trainers` (
  `site_id` int(11) NOT NULL,
  `per_trainer_id` int(11) NOT NULL,
  KEY `site_id_idx` (`site_id`),
  KEY `Relacion_PK_2_idx` (`per_trainer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sites_sessions`
--

CREATE TABLE IF NOT EXISTS `sites_sessions` (
  `site_id` int(11) NOT NULL,
  `tra_session_id` int(11) NOT NULL,
  KEY `site_id` (`site_id`),
  KEY `tra_session_id` (`tra_session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `site_types`
--

CREATE TABLE IF NOT EXISTS `site_types` (
  `id_site_type` int(11) NOT NULL AUTO_INCREMENT,
  `site_type` varchar(45) NOT NULL,
  `site_estado` int(11) NOT NULL DEFAULT '1',
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_site_type`),
  UNIQUE KEY `site_type` (`site_type`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `site_types`
--

INSERT INTO `site_types` (`id_site_type`, `site_type`, `site_estado`, `creation_date`, `modification_date`, `user_id`) VALUES
(4, 'Institución Educativa', 1, '0000-00-00 00:00:00', '2015-03-19 14:38:25', 0),
(5, 'Telecentro', 1, '0000-00-00 00:00:00', '2015-03-19 14:38:25', 0),
(6, 'Institución Educación Superior', 1, '0000-00-00 00:00:00', '2015-03-19 14:38:25', 0),
(7, 'Fundación', 1, '0000-00-00 00:00:00', '2015-03-19 14:38:25', 0),
(8, 'Cedezo', 1, '0000-00-00 00:00:00', '2015-03-19 14:38:25', 0),
(9, 'Jardín Infantil', 1, '0000-00-00 00:00:00', '2015-03-19 14:38:25', 0),
(10, 'Biblioteca', 1, '0000-00-00 00:00:00', '2015-03-19 14:38:25', 0),
(13, 'Sitio de gobierno', 1, '0000-00-00 00:00:00', '2015-03-19 14:38:25', 0),
(14, 'Sitios Públicos', 1, '0000-00-00 00:00:00', '2015-03-19 14:38:25', 0),
(15, 'Aliado', 1, '0000-00-00 00:00:00', '2015-03-19 14:38:25', 0),
(16, 'Otro', 1, '0000-00-00 00:00:00', '2015-03-19 14:38:25', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `thematics`
--

CREATE TABLE IF NOT EXISTS `thematics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `state` int(11) NOT NULL,
  `prefix` varchar(45) NOT NULL,
  `description` text,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `prefix` (`prefix`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `thematics`
--

INSERT INTO `thematics` (`id`, `name`, `state`, `prefix`, `description`, `creation_date`, `modification_date`, `user_id`) VALUES
(1, 'Alfabetización Digital', 1, 'AD', 'Uso básico del computador', '2015-03-31 09:54:05', '0000-00-00 00:00:00', 35),
(2, 'Gobierno En Línea', 1, 'GEL', 'Espacio formativo para conocer las trámites estatales que se pueden consultar o realizar a través de Internet', '2015-03-31 09:57:11', '0000-00-00 00:00:00', 35),
(3, 'Narrativas Digitales', 1, 'ND', 'Acercamiento a los lenguajes audiovisuales.', '2015-03-31 11:11:27', '0000-00-00 00:00:00', 35),
(4, 'Herramientas Web 2.0', 1, 'HW2.0', 'Taller orienta a trabajar algunas herramientas de la Web 2.0 ', '2015-03-31 11:25:31', '0000-00-00 00:00:00', 35),
(5, 'Herramientas Para El Mercadeo Digital', 1, 'HMD', 'En este taller se trabajan herramientas básicas que son útiles a los emprendedores para promocionar sus productos en Internet ', '2015-03-31 11:30:00', '0000-00-00 00:00:00', 35),
(6, 'Dispositivos Móviles ', 1, 'DM', 'Charla y espacio de asesoría orientadas a fomentar el uso de dispositivos móviles ', '2015-03-31 11:32:30', '0000-00-00 00:00:00', 35),
(7, 'Navegar Sin Naufragar', 1, 'NSN', 'Espacio para el fomento y la reflexión sobre el uso responsable de Internet', '2015-03-31 11:34:05', '0000-00-00 00:00:00', 35),
(8, 'Activación Zona Wifi', 1, 'ZW', 'Activaciones en Zonas Wifi y Puntos de Navegación que inviten a los Ciudadanos que habitan o transitan el espacio cercano a utilizar el Internet dispuesto en este lugar', '2015-04-06 22:49:40', '2015-04-07 04:08:37', 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `training`
--

CREATE TABLE IF NOT EXISTS `training` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `activity_place` varchar(80) NOT NULL,
  `description` text NOT NULL,
  `type_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `current_state` int(11) NOT NULL COMMENT '1--> En curso  2--> Finalizada',
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `training_per_trainers`
--

CREATE TABLE IF NOT EXISTS `training_per_trainers` (
  `per_trainer_id` int(11) NOT NULL,
  `training_id` int(11) NOT NULL,
  KEY `per_trainer_id` (`per_trainer_id`),
  KEY `training_id` (`training_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tra_allies`
--

CREATE TABLE IF NOT EXISTS `tra_allies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `state` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tra_allies_training`
--

CREATE TABLE IF NOT EXISTS `tra_allies_training` (
  `tra_ally_id` int(11) NOT NULL,
  `training_id` int(11) NOT NULL,
  KEY `tra_ally_id` (`tra_ally_id`),
  KEY `training_id` (`training_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tra_proccesses_training`
--

CREATE TABLE IF NOT EXISTS `tra_proccesses_training` (
  `training_id` int(11) NOT NULL,
  `process_id` int(11) NOT NULL,
  KEY `training_id` (`training_id`,`process_id`),
  KEY `process_id` (`process_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tra_processes`
--

CREATE TABLE IF NOT EXISTS `tra_processes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `prefix` varchar(45) NOT NULL,
  `state` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `prefix` (`prefix`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tra_session`
--

CREATE TABLE IF NOT EXISTS `tra_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `training_id` int(11) NOT NULL,
  `observation` text,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `training_id` (`training_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tra_sessions_thematics`
--

CREATE TABLE IF NOT EXISTS `tra_sessions_thematics` (
  `session_id` int(11) NOT NULL,
  `thematic_id` int(11) NOT NULL,
  KEY `session_id` (`session_id`),
  KEY `thematic_id` (`thematic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tra_types`
--

CREATE TABLE IF NOT EXISTS `tra_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `state` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `user_id` (`user_id`)
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
  `agent_id` int(11) NOT NULL,
  `user_estado` varchar(45) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `agent_id_UNIQUE` (`agent_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `permission_level`, `agent_id`, `user_estado`, `creation_date`, `modification_date`, `user_id`) VALUES
(0, 'No Asignado', '5f1fd5e8cd67a034fcd575b28fcbfa8409a92503', 1, 0, 'Activo', '2015-04-06 12:08:34', '2015-04-16 14:36:03', 12),
(10, 'camilo.parra', '21f7446d2fb591912baf762122d3b3b830443f46', 2, 7, 'Inactivo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(12, 'johana', '5f1fd5e8cd67a034fcd575b28fcbfa8409a92503', 1, 30, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(13, 'juana.fuentes', 'a5be7ab2389a80eb9e1d9714b85a13fd05902f50', 1, 27, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(14, 'carolina.agudelo', '22e624cca4ff11276683acac64efaf628571d4e9', 1, 8, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(15, 'cindy.jaramillo', 'e224021c99cad97bec771308e1c6e9e652207ae0', 2, 17, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(16, 'juan.perez', 'c46131bb37a9b6279605929cca4c083a63c177ff', 2, 16, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(17, 'alejandro.marin ', '3f93720fea243e2f6a51c2a461083e13871fe0ba', 2, 9, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(18, 'amelia.caro', 'e9bf401f2843e4e806ff8d92d0fabf6892382a0d', 2, 10, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(19, 'catalina.durango', '4ea5b8acaae27b889bd8656a984eadef67c5f7a1', 2, 15, 'Inactivo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(20, 'clara.arias', 'f99c44f212261eed523e8c8b8362fbbd78b392d4', 2, 18, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(21, 'johana.higuita', '1a03fac7c8a79add13577b728ddf596a67a4e0e9', 2, 11, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(22, 'rosa.perez', 'ed791b9bffcda930da33b93baebca2913f580186', 2, 5, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(23, 'maria.diaz', '28914257c0fce7019b555c21e69c9009d443a6b1', 2, 13, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(24, 'monica.castaneda', '81538eb39372e3b2efd481bba73c05796b310b64', 2, 14, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(26, 'bibiana', '6303a1e436d3eb7336a6afad4bf481d3ccd977d1', 3, 20, 'Inactivo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(35, 'gabriel.atehortua', '956ab4c2e49bdb275278c54ac5eeb8e6c30dbe0f', 1, 28, 'Activo', '0000-00-00 00:00:00', '2015-03-16 15:08:08', 0),
(36, 'jorge.ocampo', '57a258348bb3eb069e6d65ecfa309d9791eee103', 3, 29, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(37, 'agustin.patino', '6abd8104c4d9c0d969c66f66abff1a1dda9f4b41', 2, 25, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(38, 'christian.vasquez', '5f1fd5e8cd67a034fcd575b28fcbfa8409a92503', 2, 26, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(39, 'juan.urrea', 'e0213acd10381a11172b2c0308538f5045a0b2f3', 2, 31, 'Activo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(40, 'juliana.mazo', '05f32785c301b96114df80ca4f88794db08dc79c', 2, 32, 'Activo', '2015-03-04 16:13:23', '0000-00-00 00:00:00', 13),
(41, 'liseth.henao', '684f0e7eafe80e8bffc9eca5c6c15585093b992a', 2, 34, 'Activo', '2015-03-04 16:14:04', '0000-00-00 00:00:00', 13),
(42, 'maria.mesa', 'cfbbab34389583a26153bd7e6665360bcedf695e', 2, 33, 'Activo', '2015-03-04 16:15:22', '0000-00-00 00:00:00', 13),
(43, 'maria.yepes', '99cd402473a56f08f44d20ca979fadfd0e9ccebf', 2, 35, 'Activo', '2015-03-09 08:20:14', '0000-00-00 00:00:00', 12),
(44, 'cristina.guisao', 'b73ae5dc11cd73812e4e52db4ebae5e6152c8977', 2, 36, 'Activo', '2015-04-06 12:08:34', '0000-00-00 00:00:00', 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zones`
--

CREATE TABLE IF NOT EXISTS `zones` (
  `id_zone` int(11) NOT NULL AUTO_INCREMENT,
  `zone_name` varchar(45) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_zone`),
  UNIQUE KEY `zone_name_UNIQUE` (`zone_name`),
  UNIQUE KEY `zone_name` (`zone_name`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `zones`
--

INSERT INTO `zones` (`id_zone`, `zone_name`, `creation_date`, `modification_date`, `user_id`) VALUES
(1, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(2, '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, '3', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(4, '4', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(5, 'Todas', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `accompaniments`
--
ALTER TABLE `accompaniments`
  ADD CONSTRAINT `accompaniments_ibfk_6` FOREIGN KEY (`accompaniment_type_id`) REFERENCES `acc_types` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `accompaniments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `accompaniments_ibfk_4` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id_site`) ON UPDATE CASCADE,
  ADD CONSTRAINT `accompaniments_ibfk_5` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `acc_types`
--
ALTER TABLE `acc_types`
  ADD CONSTRAINT `acc_types_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `agents`
--
ALTER TABLE `agents`
  ADD CONSTRAINT `agents_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `agents_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `people` (`id_person`) ON UPDATE CASCADE,
  ADD CONSTRAINT `agents_ibfk_3` FOREIGN KEY (`zone_id`) REFERENCES `zones` (`id_zone`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `communes`
--
ALTER TABLE `communes`
  ADD CONSTRAINT `communes_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `communes_ibfk_1` FOREIGN KEY (`zone_id`) REFERENCES `zones` (`id_zone`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `divtypes`
--
ALTER TABLE `divtypes`
  ADD CONSTRAINT `divtypes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `divulgations`
--
ALTER TABLE `divulgations`
  ADD CONSTRAINT `divulgations_ibfk_8` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `divulgations_ibfk_5` FOREIGN KEY (`divulgation_type_id`) REFERENCES `divtypes` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `divulgations_ibfk_6` FOREIGN KEY (`population_type_id`) REFERENCES `population_types` (`id_population_type`) ON UPDATE CASCADE,
  ADD CONSTRAINT `divulgations_ibfk_7` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id_site`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `divulgations_people`
--
ALTER TABLE `divulgations_people`
  ADD CONSTRAINT `divulgations_people_ibfk_4` FOREIGN KEY (`person_id`) REFERENCES `people` (`id_person`) ON UPDATE CASCADE,
  ADD CONSTRAINT `divulgations_people_ibfk_3` FOREIGN KEY (`divulgation_id`) REFERENCES `divulgations` (`id_divulgation`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `divulgations_thematics`
--
ALTER TABLE `divulgations_thematics`
  ADD CONSTRAINT `divulgations_thematics_ibfk_4` FOREIGN KEY (`thematic_id`) REFERENCES `thematics` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `divulgations_thematics_ibfk_3` FOREIGN KEY (`divulgation_id`) REFERENCES `divulgations` (`id_divulgation`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `divulgations_trainers`
--
ALTER TABLE `divulgations_trainers`
  ADD CONSTRAINT `divulgations_trainers_ibfk_1` FOREIGN KEY (`divulgation_id`) REFERENCES `divulgations` (`id_divulgation`) ON UPDATE CASCADE,
  ADD CONSTRAINT `divulgations_trainers_ibfk_2` FOREIGN KEY (`trainer_id`) REFERENCES `per_trainers` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `meetings`
--
ALTER TABLE `meetings`
  ADD CONSTRAINT `meetings_ibfk_3` FOREIGN KEY (`meeting_type_id`) REFERENCES `mee_types` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `meetings_ibfk_1` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id_site`) ON UPDATE CASCADE,
  ADD CONSTRAINT `meetings_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `meetings_people`
--
ALTER TABLE `meetings_people`
  ADD CONSTRAINT `meetings_people_ibfk_1` FOREIGN KEY (`meeting_id`) REFERENCES `meetings` (`id_meeting`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `meetings_people_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `people` (`id_person`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `mee_types`
--
ALTER TABLE `mee_types`
  ADD CONSTRAINT `mee_types_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `agents` (`user_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `neighborhoods`
--
ALTER TABLE `neighborhoods`
  ADD CONSTRAINT `neighborhoods_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `neighborhoods_ibfk_3` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`id_commune`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `owners`
--
ALTER TABLE `owners`
  ADD CONSTRAINT `owners_ibfk_5` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id_site`) ON UPDATE CASCADE,
  ADD CONSTRAINT `owners_ibfk_4` FOREIGN KEY (`person_id`) REFERENCES `people` (`id_person`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `people`
--
ALTER TABLE `people`
  ADD CONSTRAINT `people_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `per_marital_status`
--
ALTER TABLE `per_marital_status`
  ADD CONSTRAINT `per_marital_status_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `per_participants`
--
ALTER TABLE `per_participants`
  ADD CONSTRAINT `per_participants_ibfk_5` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `per_participants_ibfk_1` FOREIGN KEY (`neighborhood_id`) REFERENCES `neighborhoods` (`id_neighborhood`) ON UPDATE CASCADE,
  ADD CONSTRAINT `per_participants_ibfk_2` FOREIGN KEY (`per_people_type_id`) REFERENCES `population_types` (`id_population_type`) ON UPDATE CASCADE,
  ADD CONSTRAINT `per_participants_ibfk_3` FOREIGN KEY (`marital_status_id`) REFERENCES `per_marital_status` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `per_participants_ibfk_4` FOREIGN KEY (`school_level_id`) REFERENCES `per_school_level` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `per_participants_population_types`
--
ALTER TABLE `per_participants_population_types`
  ADD CONSTRAINT `per_participants_population_types_ibfk_2` FOREIGN KEY (`population_type_id`) REFERENCES `population_types` (`id_population_type`) ON UPDATE CASCADE,
  ADD CONSTRAINT `per_participants_population_types_ibfk_1` FOREIGN KEY (`participant_id`) REFERENCES `per_participants` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `per_participants_training`
--
ALTER TABLE `per_participants_training`
  ADD CONSTRAINT `per_participants_training_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `per_participants_training_ibfk_1` FOREIGN KEY (`training_id`) REFERENCES `training` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `per_participants_training_ibfk_2` FOREIGN KEY (`participant_id`) REFERENCES `per_participants` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `per_participants_training_session`
--
ALTER TABLE `per_participants_training_session`
  ADD CONSTRAINT `per_participants_training_session_ibfk_2` FOREIGN KEY (`session_id`) REFERENCES `tra_session` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `per_participants_training_session_ibfk_1` FOREIGN KEY (`participants_training_id`) REFERENCES `per_participants_training` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `per_people_type`
--
ALTER TABLE `per_people_type`
  ADD CONSTRAINT `per_people_type_ibfk_3` FOREIGN KEY (`person_id`) REFERENCES `people` (`id_person`) ON UPDATE CASCADE,
  ADD CONSTRAINT `per_people_type_ibfk_4` FOREIGN KEY (`per_type_id`) REFERENCES `per_types` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `per_professions`
--
ALTER TABLE `per_professions`
  ADD CONSTRAINT `per_professions_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `per_school_level`
--
ALTER TABLE `per_school_level`
  ADD CONSTRAINT `per_school_level_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `per_trainers`
--
ALTER TABLE `per_trainers`
  ADD CONSTRAINT `per_trainers_ibfk_12` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `per_trainers_ibfk_10` FOREIGN KEY (`per_trainer_fund_id`) REFERENCES `per_trainer_funds` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `per_trainers_ibfk_7` FOREIGN KEY (`per_trainer_type_id`) REFERENCES `per_trainer_types` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `per_trainers_ibfk_8` FOREIGN KEY (`per_profession_id`) REFERENCES `per_professions` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `per_trainers_ibfk_9` FOREIGN KEY (`per_people_type_id`) REFERENCES `per_people_type` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `per_trainer_funds`
--
ALTER TABLE `per_trainer_funds`
  ADD CONSTRAINT `per_trainer_funds_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `per_trainer_schedules`
--
ALTER TABLE `per_trainer_schedules`
  ADD CONSTRAINT `per_trainer_schedules_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `per_trainer_schedules_ibfk_1` FOREIGN KEY (`per_trainer_id`) REFERENCES `per_trainers` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `per_trainer_types`
--
ALTER TABLE `per_trainer_types`
  ADD CONSTRAINT `per_trainer_types_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `per_types`
--
ALTER TABLE `per_types`
  ADD CONSTRAINT `per_types_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `population_types`
--
ALTER TABLE `population_types`
  ADD CONSTRAINT `population_types_ibfk_8` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `population_types_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `population_types_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `population_types_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `population_types_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `population_types_ibfk_5` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `population_types_ibfk_6` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `population_types_training`
--
ALTER TABLE `population_types_training`
  ADD CONSTRAINT `population_types_training_ibfk_1` FOREIGN KEY (`population_type_id`) REFERENCES `population_types` (`id_population_type`) ON UPDATE CASCADE,
  ADD CONSTRAINT `population_types_training_ibfk_2` FOREIGN KEY (`training_id`) REFERENCES `training` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `sites`
--
ALTER TABLE `sites`
  ADD CONSTRAINT `sites_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `sites_ibfk_1` FOREIGN KEY (`neighborhood_id`) REFERENCES `neighborhoods` (`id_neighborhood`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `sites_ibfk_3` FOREIGN KEY (`site_type_id`) REFERENCES `site_types` (`id_site_type`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `sites_per_trainers`
--
ALTER TABLE `sites_per_trainers`
  ADD CONSTRAINT `sites_per_trainers_ibfk_1` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id_site`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sites_per_trainers_ibfk_2` FOREIGN KEY (`per_trainer_id`) REFERENCES `per_trainers` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `site_types`
--
ALTER TABLE `site_types`
  ADD CONSTRAINT `site_types_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `thematics`
--
ALTER TABLE `thematics`
  ADD CONSTRAINT `thematics_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `training`
--
ALTER TABLE `training`
  ADD CONSTRAINT `training_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `tra_types` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `training_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `training_per_trainers`
--
ALTER TABLE `training_per_trainers`
  ADD CONSTRAINT `training_per_trainers_ibfk_1` FOREIGN KEY (`per_trainer_id`) REFERENCES `per_trainers` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `training_per_trainers_ibfk_2` FOREIGN KEY (`training_id`) REFERENCES `training` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tra_allies`
--
ALTER TABLE `tra_allies`
  ADD CONSTRAINT `tra_allies_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tra_allies_training`
--
ALTER TABLE `tra_allies_training`
  ADD CONSTRAINT `tra_allies_training_ibfk_1` FOREIGN KEY (`tra_ally_id`) REFERENCES `tra_allies` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tra_allies_training_ibfk_2` FOREIGN KEY (`training_id`) REFERENCES `training` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tra_proccesses_training`
--
ALTER TABLE `tra_proccesses_training`
  ADD CONSTRAINT `tra_proccesses_training_ibfk_1` FOREIGN KEY (`training_id`) REFERENCES `training` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tra_proccesses_training_ibfk_2` FOREIGN KEY (`process_id`) REFERENCES `tra_processes` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tra_processes`
--
ALTER TABLE `tra_processes`
  ADD CONSTRAINT `tra_processes_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tra_session`
--
ALTER TABLE `tra_session`
  ADD CONSTRAINT `tra_session_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tra_session_ibfk_1` FOREIGN KEY (`training_id`) REFERENCES `training` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tra_sessions_thematics`
--
ALTER TABLE `tra_sessions_thematics`
  ADD CONSTRAINT `tra_sessions_thematics_ibfk_2` FOREIGN KEY (`thematic_id`) REFERENCES `thematics` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tra_sessions_thematics_ibfk_1` FOREIGN KEY (`session_id`) REFERENCES `tra_session` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tra_types`
--
ALTER TABLE `tra_types`
  ADD CONSTRAINT `tra_types_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id_agent`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `zones`
--
ALTER TABLE `zones`
  ADD CONSTRAINT `zones_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_user`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
