SELECT 
				    t1.*,
				    t2.name AS training_type,
				    (SELECT GROUP_CONCAT(CONCAT(' ', p.name, ' ', p.lastname, ' '))
				        FROM
				            training_per_trainers tPer,
				            per_trainers per,
				            per_people_type perTy,
				            people p
				        WHERE
				            t1.id = tPer.training_id
				                AND tPer.per_trainer_id = per.id
				                AND per.per_people_type_id = perTy.id
				                AND perTy.person_id = p.id_person) AS formadores,				   
				    (SELECT 
				            GROUP_CONCAT(CONCAT(' ', name, ' '))
				        FROM
				            tra_allies_training ta,
				            tra_allies a
				        WHERE
				            t1.id = ta.training_id
				                AND ta.tra_ally_id = a.id) AS aliados,
				    (SELECT 
				            GROUP_CONCAT(CONCAT(' ', name, ' '))
				        FROM
				            tra_proccesses_training ta,
				            tra_processes a
				        WHERE
				            t1.id = ta.training_id
				                AND ta.process_id = a.id) AS procesos,
				    (SELECT 
				            GROUP_CONCAT(CONCAT(' ', site_name, ' '))
				        FROM
				            sites_trainings ta,
				            sites a
				        WHERE
				            t1.id = ta.training_id
				                AND ta.site_id = a.id_site) AS sites,
                                
				    (SELECT 
				            GROUP_CONCAT(CONCAT(' ', name, ' '))
				        FROM
				            population_types_training ta,
				            population_types a
				        WHERE
				            t1.id = ta.training_id
				                AND ta.population_type_id = a.id_population_type) AS poblacion,
				    t3.username
				FROM
				    training t1,
				    tra_types t2,
				    users t3
				WHERE
				    t1.type_id = t2.id
				        AND t3.id_user = t1.user_id