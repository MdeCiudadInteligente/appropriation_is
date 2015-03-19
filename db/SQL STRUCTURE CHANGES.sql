


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

CREATE TABLE IF NOT EXISTS `per_type_tic_managers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  `profession` varchar(45) NOT NULL,
  `age` int(11) NOT NULL,
  `genre` varchar(45) NOT NULL,
  `workplace` varchar(45) NOT NULL,
  `fund_type` varchar(45) NOT NULL,
  `adjunct` varchar(256) NOT NULL,
  `adjunct1` varchar(256) NOT NULL,
  `adjunct2` varchar(256) NOT NULL,
  `adjunct3` varchar(256) NOT NULL,
  `dir` varchar(80) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `schedule` varchar(45) NOT NULL,
  `observations` text NOT NULL,
  `type_person_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `type_person_id` (`type_person_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

