


ALTER TABLE `thematics` 
ADD COLUMN `prefix` VARCHAR(45) NULL AFTER `name`;

ALTER TABLE `divulgations` 
ADD COLUMN `code` VARCHAR(45) NULL AFTER `id_divulgation`;

CREATE TABLE `divulgations_thematics` (
  `divulgation_id` INT NOT NULL,
  `thematic_id` INT NOT NULL,
  INDEX `divulgations_thematics_ibfk_1_idx` (`divulgation_id` ASC),
  INDEX `divulgations_thematics_ibfk_2_idx` (`thematic_id` ASC),
  CONSTRAINT `divulgations_thematics_ibfk_1`
    FOREIGN KEY (`divulgation_id`)
    REFERENCES `appropriation_test`.`divulgations` (`id_divulgation`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `divulgations_thematics_ibfk_2`
    FOREIGN KEY (`thematic_id`)
    REFERENCES `appropriation_test`.`thematics` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


ALTER TABLE `thematics` 
DROP COLUMN `number`;

ALTER TABLE `thematics` 
ADD COLUMN `state` INT(11) NULL AFTER `name`;

ALTER TABLE `appropriation_isp`.`divulgations` 
DROP COLUMN `thematic_id`;



CREATE TABLE IF NOT EXISTS `fortypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  `modification_date` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;




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
  KEY `per_type_id` (`per_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `per_people_type`
--
ALTER TABLE `per_people_type`
  ADD CONSTRAINT `per_people_type_ibfk_1` FOREIGN KEY (`person_id`) REFERENCES `people` (`id_person`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `per_people_type_ibfk_2` FOREIGN KEY (`per_type_id`) REFERENCES `per_types` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;


CREATE TABLE IF NOT EXISTS `per_professions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `state` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `per_trainers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `per_trainer_type_id` int(11) NOT NULL,
  `per_profession_id` int(11) NOT NULL,
  `per_people_type_id` int(11) NOT NULL,
  `per_trainer_fund_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `observations` text NOT NULL,
  `state` int(11) DEFAULT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `per_profession_id` (`per_profession_id`),
  KEY `per_trainer_type_id` (`per_trainer_type_id`),
  KEY `per_trainer_fund_id` (`per_trainer_fund_id`),
  KEY `site_id` (`site_id`),
  KEY `per_people_type_id` (`per_people_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `per_trainers`
--
ALTER TABLE `per_trainers`
  ADD CONSTRAINT `per_trainers_ibfk_3` FOREIGN KEY (`per_people_type_id`) REFERENCES `per_people_type` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `per_trainers_ibfk_4` FOREIGN KEY (`per_trainer_fund_id`) REFERENCES `per_trainer_funds` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `per_trainers_ibfk_5` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id_site`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `per_trainers_ibfk_6` FOREIGN KEY (`per_profession_id`) REFERENCES `per_professions` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;


CREATE TABLE IF NOT EXISTS `per_trainer_funds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` datetime DEFAULT NULL,
  `modification_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `per_trainer_schedules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `state` int(11) NOT NULL,
  `per_trainer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `per_trainer_id` (`per_trainer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `per_trainer_schedules`
--
ALTER TABLE `per_trainer_schedules`
  ADD CONSTRAINT `per_trainer_schedules_ibfk_1` FOREIGN KEY (`per_trainer_id`) REFERENCES `per_trainers` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;



CREATE TABLE IF NOT EXISTS `per_trainer_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `state` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;




CREATE TABLE IF NOT EXISTS `per_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  `modification_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

//Creaci�n de la tabla sites_per_trainers esta se encargar� de relacionar sites y per_trainers.

CREATE TABLE `sites_per_trainers` (
  `site_id` INT NOT NULL,
  `per_trainer_id` INT NOT NULL);
ALTER TABLE `sites_per_trainers` 
ADD INDEX `site_id_idx` (`site_id` ASC);
ALTER TABLE `sites_per_trainers` 
ADD CONSTRAINT `Relacion_PK_1`
  FOREIGN KEY (`site_id`)
  REFERENCES `sites` (`id_site`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
ALTER TABLE `sites_per_trainers` 
ADD INDEX `Relacion_PK_2_idx` (`per_trainer_id` ASC);
ALTER TABLE `sites_per_trainers` 
ADD CONSTRAINT `Relacion_PK_2`
  FOREIGN KEY (`per_trainer_id`)
  REFERENCES `per_trainers` (`id`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;
ALTER TABLE `per_trainers` 
ADD COLUMN `star_date` DATE NOT NULL AFTER `user_id`,
ADD COLUMN `end_date` DATE NOT NULL AFTER `star_date`;

//Creaci�n de las tablas intermedias.

CREATE TABLE `per_trainers_training` (
  `per_trainer_id` INT NOT NULL,
  `training_id` INT NOT NULL);
CREATE TABLE `sites_training` (
  `sites_id` INT NOT NULL,
  `training_id` INT NOT NULL);
CREATE TABLE `tra_allies_training` (
  `tra_allies_id` INT NOT NULL,
  `training_id` INT NOT NULL);
CREATE TABLE `population_types_training` (
  `population_types_id` INT NOT NULL,
  `training_id` INT NOT NULL);

CREATE TABLE IF NOT EXISTS `training` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `activity_place` varchar(80) NOT NULL,
  `description` text NOT NULL,
  `participant_number` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `process_id` int(11) NOT NULL,
  `alliance_id` int(11) NOT NULL,
  `population_type_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `type_id` (`type_id`),
  KEY `site_id` (`site_id`),
  KEY `process_id` (`process_id`),
  KEY `alliance_id` (`alliance_id`),
  KEY `population_type_id` (`population_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `sites_training` (
  `site_id` int(11) NOT NULL,
  `training_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `tra_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `state` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `tra_processes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `state` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `training` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `activity_place` varchar(80) NOT NULL,
  `description` text NOT NULL,
  `participant_number` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `process_id` int(11) NOT NULL,
  `alliance_id` int(11) NOT NULL,
  `population_type_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`),
  KEY `site_id` (`site_id`),
  KEY `process_id` (`process_id`),
  KEY `alliance_id` (`alliance_id`),
  KEY `population_type_id` (`population_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `training`
  ADD CONSTRAINT `training_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `tra_types` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `training_ibfk_2` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id_site`) ON UPDATE CASCADE,
  ADD CONSTRAINT `training_ibfk_3` FOREIGN KEY (`alliance_id`) REFERENCES `tra_allies` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `training_ibfk_4` FOREIGN KEY (`population_type_id`) REFERENCES `population_types` (`id_population_type`) ON UPDATE CASCADE,
  ADD CONSTRAINT `training_ibfk_5` FOREIGN KEY (`process_id`) REFERENCES `tra_processes` (`id`) ON UPDATE CASCADE;