set foreign_key_checks = 0;

ALTER TABLE  `meetings_people` DROP FOREIGN KEY  `meetings_people_ibfk_1` ,
ADD FOREIGN KEY (  `meeting_id` ) REFERENCES  `appropriation_isp`.`meetings` (

`id_meeting`
) ON DELETE RESTRICT ON UPDATE CASCADE ;



ALTER TABLE  `meetings_people` DROP FOREIGN KEY  `meetings_people_ibfk_2` ,
ADD FOREIGN KEY (  `person_id` ) REFERENCES  `appropriation_isp`.`people` (

`id_person`
) ON DELETE RESTRICT ON UPDATE CASCADE ;




ALTER TABLE  `neighborhoods` DROP FOREIGN KEY  `neighborhoods_ibfk_1` ,
ADD FOREIGN KEY (  `commune_id` ) REFERENCES  `appropriation_isp`.`communes` (
`id_commune`
) ON DELETE RESTRICT ON UPDATE CASCADE ;


ALTER TABLE  `owners` DROP FOREIGN KEY  `owners_ibfk_3` ,
ADD FOREIGN KEY (  `site_id` ) REFERENCES  `appropriation_isp`.`sites` (
`id_site`
) ON DELETE RESTRICT ON UPDATE CASCADE ;


ALTER TABLE  `per_trainer_schedules` DROP FOREIGN KEY  `per_trainer_schedules_ibfk_1` ,
ADD FOREIGN KEY (  `per_trainer_id` ) REFERENCES  `appropriation_isp`.`per_trainers` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;


ALTER TABLE  `per_trainers_training` ADD FOREIGN KEY (  `per_trainer_id` ) REFERENCES  `appropriation_isp`.`per_trainers` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `per_trainers_training` ADD FOREIGN KEY (  `training_id` ) REFERENCES  `appropriation_isp`.`training` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;


ALTER TABLE  `population_types_training` ADD FOREIGN KEY (  `population_type_id` ) REFERENCES  `appropriation_isp`.`population_types` (
`id_population_type`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `population_types_training` ADD FOREIGN KEY (  `training_id` ) REFERENCES  `appropriation_isp`.`training` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;


set foreign_key_checks = 0;

ALTER TABLE  `sites` DROP FOREIGN KEY  `sites_ibfk_1` ,
ADD FOREIGN KEY (  `neighborhood_id` ) REFERENCES  `appropriation_isp`.`neighborhoods` (

`id_neighborhood`
) ON DELETE RESTRICT ON UPDATE CASCADE ;



ALTER TABLE  `sites_per_trainers` DROP FOREIGN KEY  `Relacion_PK_1` ,
ADD FOREIGN KEY (  `site_id` ) REFERENCES  `appropriation_isp`.`sites` (
`id_site`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `sites_per_trainers` DROP FOREIGN KEY  `Relacion_PK_2` ,
ADD FOREIGN KEY (  `per_trainer_id` ) REFERENCES  `appropriation_isp`.`per_trainers` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `sites_training` ADD FOREIGN KEY (  `site_id` ) REFERENCES  `appropriation_isp`.`sites` (
`id_site`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `sites_training` ADD FOREIGN KEY (  `training_id` ) REFERENCES  `appropriation_isp`.`training` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;


ALTER TABLE  `tra_allies_training` ADD FOREIGN KEY (  `tra_ally_id` ) REFERENCES  `appropriation_isp`.`tra_allies` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;

ALTER TABLE  `tra_allies_training` ADD FOREIGN KEY (  `training_id` ) REFERENCES  `appropriation_isp`.`training` (
`id`
) ON DELETE RESTRICT ON UPDATE CASCADE ;


ALTER TABLE  `users` DROP FOREIGN KEY  `users_ibfk_2` ,
ADD FOREIGN KEY (  `agent_id` ) REFERENCES  `appropriation_isp`.`agents` (
`id_agent`
) ON DELETE RESTRICT ON UPDATE CASCADE ;