SELECT t1.*,CONCAT(t4.name,' ',t4.lastname) as person_name,t2.other_population_type,t6.neighborhood_name,t7.name as marital_status ,t8.name as school_level , t5.username,
	(SELECT GROUP_CONCAT(population_types.name) FROM per_participants_population_types ,population_types WHERE per_participants_population_types.participant_id=t2.id AND per_participants_population_types.population_type_id=population_types.id_population_type ) as population_types
FROM  per_participants_training t1, per_participants t2, per_people_type t3, people t4,users t5 ,neighborhoods t6, per_marital_status t7 , per_school_level t8 
WHERE t1.participant_id=t2.id
AND   t2.neighborhood_id=t6.id_neighborhood
AND   t2.marital_status_id=t7.id
AND   t2.school_level_id=t8.id
AND   t2.per_people_type_id=t3.id
AND   t3.person_id=t4.id_person
AND   t1.user_id=t5.id_user
AND   t1.training_id=1