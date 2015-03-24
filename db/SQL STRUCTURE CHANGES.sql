


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

CREATE TABLE IF NOT EXISTS `forallies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) DEFAULT NULL,
  `state` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  `modification_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `forallies`
--

INSERT INTO `forallies` (`id`, `name`, `state`, `user_id`, `creation_date`, `modification_date`) VALUES
(2, 'pruebillllalala', 1, 12, '2015-03-18 00:00:00', '2015-03-18 05:00:00'),
(3, 'Pruebillllalalaluuu', 1, 12, '2015-03-18 17:25:23', '2015-03-18 05:00:00'),
(4, 'Prueeeeeebaaaaababab', 0, 12, '2015-03-18 20:28:28', NULL),
(5, 'Prub', 1, 12, '2015-03-18 20:41:06', NULL);


CREATE TABLE IF NOT EXISTS `fortypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  `modification_date` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE `per_types` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `user_id` INT NOT NULL,
  `creation_date` DATETIME NOT NULL,
  `modification_date` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id`));


CREATE TABLE `per_professions` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(90) NOT NULL,
  `state` INT NOT NULL,
  `user_id` INT NOT NULL,
  `creation_date` DATETIME NOT NULL,
  `modification_date` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id`));


CREATE TABLE `per_trainer_schedules` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(90) NOT NULL,
  `state` INT NOT NULL,
  `per_trainer_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  `creation_date` DATETIME NOT NULL,
  `modification_date` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `per_trainer_types` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `state` INT NOT NULL,
  `user_id` INT NOT NULL,
  `creation_date` DATETIME NOT NULL,
  `modification_date` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `per_trainer_funds`
(
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `user_id` INT NOT NULL,
 
 `creation_date` DATETIME NULL,
  `modification_date` TIMESTAMP NULL,
  PRIMARY KEY (`id`),
  
  UNIQUE INDEX `id_UNIQUE` (`id` ASC));

CREATE TABLE `per_trainers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `per_trainer_type_id` INT NOT NULL,
  `per_profession_id` INT NOT NULL,
  `per_people_type_id` INT NOT NULL,
  `per_trainer_fund_id` INT NOTNULL,
  `site_id` INT NOT NULL,
  `observations` TEXT NOT NULL,
  `state` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC));

CREATE TABLE `appropriation_isp`.`per_types` 
(
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `user_id` INT NOT NULL,
 
 `creation_date` DATETIME NULL,
  `modification_date` TIMESTAMP NULL,
  PRIMARY KEY (`id`),
 
 UNIQUE INDEX `id_UNIQUE` (`id` ASC));

CREATE TABLE IF NOT EXISTS `per_people_type` (
  `id` int(11) NOT NULL,
  `person_id` bigint(15) NOT NULL,
  `per_type_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
3013152711