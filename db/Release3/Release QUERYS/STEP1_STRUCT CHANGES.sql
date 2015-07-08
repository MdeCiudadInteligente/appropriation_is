ALTER TABLE  `accompaniments` ADD  `accompaniment_type_id` INT NOT NULL AFTER  `dir`;

ALTER TABLE  `accompaniments` ADD INDEX (  `accompaniment_type_id` ) ;


CREATE TABLE IF NOT EXISTS `acc_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `state` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE  `acc_types` ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `acc_types` ADD UNIQUE ( `name` );

INSERT INTO `acc_types` (`id`, `name`, `state`, `user_id`, `creation_date`, `modification_date`) VALUES
(0, 'No asignado', 1, 12, '2015-05-07 00:00:00', '2015-05-07 15:06:52');


UPDATE  `acc_types` SET  `id` =  '0' WHERE  `acc_types`.`id` =1;

ALTER TABLE  `accompaniments` ADD FOREIGN KEY (  `accompaniment_type_id` ) REFERENCES  `acc_types` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `agents` DROP FOREIGN KEY  `zone_id` ,
ADD FOREIGN KEY (  `zone_id` ) REFERENCES  `zones` (
`id_zone`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `agents` DROP FOREIGN KEY  `agents_ibfk_2` ,
ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `divulgations` DROP FOREIGN KEY  `divulgations_ibfk_3` ,
ADD FOREIGN KEY (  `divulgation_type_id` ) REFERENCES  `divtypes` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `divulgations` DROP FOREIGN KEY  `divulgations_ibfk_4` ,
ADD FOREIGN KEY (  `population_type_id` ) REFERENCES  `population_types` (
`id_population_type`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `divulgations` DROP FOREIGN KEY  `divulgations_ibfk_1` ,
ADD FOREIGN KEY (  `site_id` ) REFERENCES  `sites` (
`id_site`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `divulgations` DROP FOREIGN KEY  `divulgations_ibfk_2` ,
ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;


ALTER TABLE  `divulgations_people` DROP FOREIGN KEY  `divulgations_people_ibfk_1` ,
ADD FOREIGN KEY (  `divulgation_id` ) REFERENCES  `divulgations` (
`id_divulgation`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `divulgations_people` DROP FOREIGN KEY  `divulgations_people_ibfk_2` ,
ADD FOREIGN KEY (  `person_id` ) REFERENCES  `people` (
`id_person`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `divulgations_thematics` DROP FOREIGN KEY  `divulgations_thematics_ibfk_1` ,
ADD FOREIGN KEY (  `divulgation_id` ) REFERENCES  `divulgations` (
`id_divulgation`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `divulgations_thematics` DROP FOREIGN KEY  `divulgations_thematics_ibfk_2` ,
ADD FOREIGN KEY (  `thematic_id` ) REFERENCES  `thematics` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

CREATE TABLE IF NOT EXISTS `mee_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(90) NOT NULL,
  `state` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


INSERT INTO `mee_types` (`id`, `name`, `state`, `user_id`, `creation_date`, `modification_date`) VALUES
(0, 'No asignado', 1, 12, '2015-05-07 00:00:00', '2015-05-07 15:10:41');

ALTER TABLE  `mee_types` ADD FOREIGN KEY (  `user_id` ) REFERENCES  `agents` (
`user_id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

UPDATE  `mee_types` SET  `id` =  '0' WHERE  `mee_types`.`id` =1;

ALTER TABLE  `meetings` ADD  `meeting_type_id` INT NOT NULL AFTER  `dir`;

ALTER TABLE  `meetings` ADD INDEX (  `meeting_type_id` ) ;

ALTER TABLE  `meetings` ADD FOREIGN KEY (  `meeting_type_id` ) REFERENCES  `mee_types` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;


ALTER TABLE  `neighborhoods` DROP FOREIGN KEY  `neighborhoods_ibfk_1` ,
ADD FOREIGN KEY (  `commune_id` ) REFERENCES  `communes` (
`id_commune`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `neighborhoods` DROP FOREIGN KEY  `neighborhoods_ibfk_2` ,
ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;


ALTER TABLE  `owners` DROP FOREIGN KEY  `owners_ibfk_3` ,
ADD FOREIGN KEY (  `site_id` ) REFERENCES  `sites` (
`id_site`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `people` DROP FOREIGN KEY  `people_ibfk_1` ,
ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `per_professions` DROP FOREIGN KEY  `per_professions_ibfk_1` ,
ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

CREATE TABLE IF NOT EXISTS `per_school_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `creation_date` datetime DEFAULT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


ALTER TABLE  `per_school_level` ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `per_trainers` DROP FOREIGN KEY  `per_trainers_ibfk_11` ,
ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `per_trainer_funds` DROP FOREIGN KEY  `per_trainer_funds_ibfk_1` ,
ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `per_trainer_schedules` DROP FOREIGN KEY  `per_trainer_schedules_ibfk_3` ,
ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

DROP TABLE per_trainer_schedules;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE  `per_trainer_schedules` ADD FOREIGN KEY (  `per_trainer_id` ) REFERENCES  `per_trainers` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `per_trainer_schedules` ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;


ALTER TABLE  `per_trainer_types` ADD INDEX (  `user_id` ) ;

ALTER TABLE  `per_trainer_types` ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `per_types` DROP FOREIGN KEY  `per_types_ibfk_1` ,
ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `population_types` DROP FOREIGN KEY  `population_types_ibfk_7` ,
ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `sites` ADD INDEX (  `user_id` ) ;

ALTER TABLE  `sites` ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE NO ACTION ON UPDATE CASCADE ;

CREATE TABLE IF NOT EXISTS `sites_sessions` (
  `site_id` int(11) NOT NULL,
  `tra_session_id` int(11) NOT NULL,
  KEY `site_id` (`site_id`),
  KEY `training_id` (`tra_session_id`),
  KEY `tra_session_id` (`tra_session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE sites_sessions DROP INDEX training_id;

ALTER TABLE  `site_types` DROP FOREIGN KEY  `site_types_ibfk_1` ,
ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

DROP TABLE sites_training;

ALTER TABLE  `thematics` DROP FOREIGN KEY  `thematics_ibfk_1` ,
ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;


ALTER TABLE  `training` DROP FOREIGN KEY  `training_ibfk_2` ,
ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `tra_allies` DROP FOREIGN KEY  `tra_allies_ibfk_1` ,
ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `tra_processes` DROP FOREIGN KEY  `tra_processes_ibfk_1` ,
ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE  `tra_session` ADD FOREIGN KEY (  `training_id` ) REFERENCES  `training` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `tra_session` ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;


CREATE TABLE IF NOT EXISTS `tra_sessions_thematics` (
  `session_id` int(11) NOT NULL,
  `thematic_id` int(11) NOT NULL,
  KEY `session_id` (`session_id`),
  KEY `thematic_id` (`thematic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE  `tra_sessions_thematics` ADD FOREIGN KEY (  `session_id` ) REFERENCES  `tra_session` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `tra_sessions_thematics` ADD FOREIGN KEY (  `thematic_id` ) REFERENCES  `thematics` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `tra_types` DROP FOREIGN KEY  `tra_types_ibfk_1` ,
ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;


ALTER TABLE  `users` ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `zones` DROP FOREIGN KEY  `zones_ibfk_1` ,
ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;


ALTER TABLE `population_types` 
DROP FOREIGN KEY `population_types_ibfk_6`,
DROP FOREIGN KEY `population_types_ibfk_5`,
DROP FOREIGN KEY `population_types_ibfk_4`,
DROP FOREIGN KEY `population_types_ibfk_3`,
DROP FOREIGN KEY `population_types_ibfk_2`,
DROP FOREIGN KEY `population_types_ibfk_8`;

ALTER TABLE `users` 
DROP FOREIGN KEY `users_ibfk_3`;

CREATE TABLE IF NOT EXISTS `per_marital_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modification_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


ALTER TABLE  `per_marital_status` ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE  `per_participants` ADD FOREIGN KEY (  `neighborhood_id` ) REFERENCES  `neighborhoods` (
`id_neighborhood`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `per_participants` ADD FOREIGN KEY (  `per_people_type_id` ) REFERENCES  `population_types` (
`id_population_type`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `per_participants` ADD FOREIGN KEY (  `marital_status_id` ) REFERENCES  `per_marital_status` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `per_participants` ADD FOREIGN KEY (  `school_level_id` ) REFERENCES  `per_school_level` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `per_participants` ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE  `per_participants_training` ADD FOREIGN KEY (  `training_id` ) REFERENCES  `training` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;


CREATE TABLE IF NOT EXISTS `per_participants_training_session` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `participants_training_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `participants_training_id` (`participants_training_id`,`session_id`),
  KEY `per_participants_training_id` (`participants_training_id`),
  KEY `session_id` (`session_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



ALTER TABLE  `per_participants_training_session` ADD FOREIGN KEY (  `session_id` ) REFERENCES  `tra_session` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE `people` CHANGE `email` `email` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

ALTER TABLE  `training` ADD  `state` INT NOT NULL AFTER  `user_id`;

ALTER TABLE agents DROP INDEX person_id;

ALTER TABLE agents DROP INDEX id_agent_UNIQUE;

ALTER TABLE divulgations DROP INDEX user_id_2;

ALTER TABLE  `training` CHANGE  `state`  `current_state` INT( 11 ) NOT NULL COMMENT  '1--> En curso  2--> Finalizada';

ALTER TABLE  `training` ADD  `start_date` DATE NOT NULL AFTER  `type_id` ,
ADD  `end_date` DATE NULL AFTER  `start_date`;

ALTER TABLE  `sites_sessions` ADD FOREIGN KEY (  `site_id` ) REFERENCES  `sites` (
`id_site`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `sites_sessions` ADD FOREIGN KEY (  `tra_session_id` ) REFERENCES  `tra_session` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

INSERT INTO  `per_types` (
`id` ,
`name` ,
`user_id` ,
`creation_date` ,
`modification_date`
)
VALUES (
'2',  'Participante',  '12',  '2015-05-13 00:00:00', 
CURRENT_TIMESTAMP
);

ALTER TABLE  `meetings_people` DROP INDEX  `meeting_id` ,
ADD INDEX  `meeting_id` (  `meeting_id` );

ALTER TABLE  `mee_types` ADD UNIQUE ( `name`);

ALTER TABLE  `owners` DROP INDEX  `person_id` ,
ADD UNIQUE  `person_id` (  `person_id` );


ALTER TABLE  `per_marital_status` ADD UNIQUE ( `name`);

ALTER TABLE  `per_school_level` ADD UNIQUE ( `name`);

ALTER TABLE per_trainers DROP INDEX id_UNIQUE;

ALTER TABLE per_trainer_funds DROP INDEX id_UNIQUE;


CREATE TABLE IF NOT EXISTS `tra_sessions_per_trainers` (
  `trainer_id` int(11) DEFAULT NULL,
  `session_id` int(11) DEFAULT NULL,
  KEY `trainer_id` (`trainer_id`),
  KEY `session_id` (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `tra_sessions_per_trainers`
  ADD CONSTRAINT `tra_sessions_per_trainers_ibfk_2` FOREIGN KEY (`session_id`) REFERENCES `tra_session` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tra_sessions_per_trainers_ibfk_1` FOREIGN KEY (`trainer_id`) REFERENCES `per_trainers` (`id`) ON UPDATE CASCADE;

ALTER TABLE per_types DROP INDEX id_UNIQUE; 
 

ALTER TABLE  `mee_types` DROP FOREIGN KEY  `mee_types_ibfk_1` ,
ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `accompaniments` DROP FOREIGN KEY  `accompaniments_ibfk_2` ,
ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `divtypes` DROP FOREIGN KEY  `divtypes_ibfk_1` ,
ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;


ALTER TABLE  `per_participants` DROP FOREIGN KEY  `per_participants_ibfk_2` ,
ADD FOREIGN KEY (  `per_people_type_id` ) REFERENCES  `per_people_type` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `population_types` ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;


ALTER TABLE  `per_people_type` ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;


ALTER TABLE  `tra_proccesses_training` DROP INDEX  `training_id` ,
ADD INDEX  `training_id` (  `training_id` );

CREATE TABLE IF NOT EXISTS `per_participants_population_types` (
  `participant_id` int(11) NOT NULL,
  `population_type_id` int(11) NOT NULL,
  KEY `participant_id` (`participant_id`),
  KEY `popultation_type_id` (`population_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE  `per_participants_population_types` ADD FOREIGN KEY (  `participant_id` ) REFERENCES  `per_participants` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `per_participants_population_types` ADD FOREIGN KEY (  `population_type_id` ) REFERENCES  `population_types` (
`id_population_type`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `per_participants_training_session` ADD FOREIGN KEY (  `participants_training_id` ) REFERENCES  `per_participants_training` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;




ALTER TABLE  `accompaniments` DROP FOREIGN KEY  `accompaniments_ibfk_1` ,
ADD FOREIGN KEY (  `site_id` ) REFERENCES  `sites` (
`id_site`
) ON DELETE RESTRICT ON UPDATE CASCADE ;


ALTER TABLE  `communes` DROP FOREIGN KEY  `communes_ibfk_2` ,
ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;


ALTER TABLE  `per_participants_training` ADD FOREIGN KEY (  `participant_id` ) REFERENCES  `per_participants` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `per_participants_training` ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `sites` DROP FOREIGN KEY  `sites_ibfk_2` ,
ADD FOREIGN KEY (  `site_type_id` ) REFERENCES  `site_types` (
`id_site_type`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `sites` DROP FOREIGN KEY  `sites_ibfk_3` ,
ADD FOREIGN KEY (  `user_id` ) REFERENCES  `users` (
`id_user`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE users DROP INDEX id_agent;

ALTER TABLE zones DROP INDEX zone_name;

ALTER TABLE users DROP INDEX user_id;

ALTER TABLE `per_trainers` 
DROP FOREIGN KEY `per_trainers_ibfk_10`;
ALTER TABLE `per_trainers` 
CHANGE COLUMN `per_trainer_fund_id` `per_trainer_fund_id` INT(11) NULL ;
ALTER TABLE `per_trainers` 
ADD CONSTRAINT `per_trainers_ibfk_10`
  FOREIGN KEY (`per_trainer_fund_id`)
  REFERENCES `per_trainer_funds` (`id`)
  ON UPDATE CASCADE;
  
ALTER TABLE `communes` CHANGE `commune_name` `commune_name` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

ALTER TABLE `divulgations` CHANGE `divulgation_name` `divulgation_name` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

ALTER TABLE `divulgations` CHANGE `activity_place` `activity_place` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

ALTER TABLE `divulgations` CHANGE `dir` `dir` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

ALTER TABLE `meetings` CHANGE `meeting_title` `meeting_title` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

ALTER TABLE `neighborhoods` CHANGE `neighborhood_name` `neighborhood_name` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

ALTER TABLE `people` CHANGE `name` `name` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL, CHANGE `lastname` `lastname` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL, CHANGE `charge` `charge` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL, CHANGE `entity` `entity` VARCHAR(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;

ALTER TABLE `per_trainer_funds` CHANGE `name` `name` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

ALTER TABLE `sites` CHANGE `site_name` `site_name` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL, CHANGE `site_address` `site_address` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

ALTER TABLE `thematics` CHANGE `name` `name` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

ALTER TABLE `training` CHANGE `activity_place` `activity_place` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

ALTER TABLE `tra_allies` CHANGE `name` `name` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;

ALTER TABLE `tra_processes` CHANGE `name` `name` VARCHAR(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL;


DROP TABLE `sites_sessions`;

CREATE TABLE IF NOT EXISTS `sites_trainings` (
  `site_id` int(11) NOT NULL,
  `training_id` int(11) NOT NULL,
  KEY `site_id` (`site_id`),
  KEY `training_id` (`training_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `sites_trainings`
  ADD CONSTRAINT `sites_trainings_ibfk_2` FOREIGN KEY (`training_id`) REFERENCES `training` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sites_trainings_ibfk_1` FOREIGN KEY (`site_id`) REFERENCES `sites` (`id_site`) ON UPDATE CASCADE;

ALTER TABLE `tra_session` ADD `activity_place` VARCHAR(200) NOT NULL AFTER `end_time`;
ALTER TABLE `training` DROP `activity_place`;


ALTER TABLE `people` 
CHANGE COLUMN `email` `email` VARCHAR(200) NULL ;


ALTER TABLE `people` ADD `document_type` INT NOT NULL AFTER `id_person`;
UPDATE people SET document_type='1' WHERE 1=1;