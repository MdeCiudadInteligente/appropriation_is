SELECT 
					t1.code AS Código,
                    (SELECT 
						zone_name
						FROM
						sites_trainings ta,
						neighborhoods n,
						communes c,
						sites a,
                        zones z                        
						WHERE
						t1.id = ta.training_id
						AND ta.site_id = a.id_site
						AND a.neighborhood_id = n.id_neighborhood 
						AND n.commune_id= c.id_commune 
                        AND c.zone_id= z.id_zone limit 1) AS Zonas,
                        
                        (SELECT 
						commune_name
						FROM
						sites_trainings ta,
						neighborhoods n,
						communes c,
						sites a
						WHERE
						t1.id = ta.training_id
						AND ta.site_id = a.id_site
						AND a.neighborhood_id = n.id_neighborhood 
						AND n.commune_id= c.id_commune limit 1) AS Comunas ,
                        
                         (SELECT 
						neighborhood_name
						FROM
						sites_trainings ta,
						neighborhoods n,
						sites a
						WHERE
						t1.id = ta.training_id
						AND ta.site_id = a.id_site
						AND a.neighborhood_id = n.id_neighborhood limit 1) AS Barrios , 
                        
                         (SELECT 
				            GROUP_CONCAT(CONCAT(' ', site_name, ' '))
				        FROM
				            sites_trainings ta,
				            sites a
				        WHERE
				            t1.id = ta.training_id
				                AND ta.site_id = a.id_site) AS Sitios,
                                
						(SELECT 
							GROUP_CONCAT(CONCAT(' ', site_type, ' '))
						FROM
							site_types st,
							sites_trainings ta,
							sites a
						WHERE
							t1.id = ta.training_id
								AND ta.site_id = a.id_site
								AND a.site_type_id = st.id_site_type
						) AS Tipo_Sitio,
                        
                        (SELECT 
							GROUP_CONCAT(CONCAT(' ', activity_place, ' '))
						FROM
							tra_session ts
						WHERE
							ts.training_id = t1.id) AS Lugar_Formación,
							
                    t2.name AS Tipo_Formación, 
                    
                    (SELECT 
						GROUP_CONCAT(DISTINCT(CONCAT(' ', name, ' ')))
					FROM
						tra_session ts,
						tra_sessions_thematics tst,
						thematics th
					WHERE
						ts.training_id = t1.id
						AND tst.session_id= ts.id
						AND tst.thematic_id= th.id
					) AS Temáticas,
                    
                     (SELECT 
				            GROUP_CONCAT(CONCAT(' ', name, ' '))
				        FROM
				            population_types_training ta,
				            population_types a
				        WHERE
				            t1.id = ta.training_id
				                AND ta.population_type_id = a.id_population_type) AS Tipo_Población,
                                
                    t1.start_date AS Fecha_Inicio,
                    t1.end_date AS Fecha_Final,
					CASE t1.current_state
                    WHEN t1.current_state='1' THEN 'En curso'
                    ELSE 'Finalizado' 
                    END AS Estado_Actual,
				   
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
				                AND perTy.person_id = p.id_person) AS Formadores,				   
				    (SELECT 
				            GROUP_CONCAT(CONCAT(' ', name, ' '))
				        FROM
				            tra_allies_training ta,
				            tra_allies a
				        WHERE
				            t1.id = ta.training_id
				                AND ta.tra_ally_id = a.id) AS Aliados,
				    (SELECT 
				            GROUP_CONCAT(CONCAT(' ', name, ' '))
				        FROM
				            tra_proccesses_training ta,
				            tra_processes a
				        WHERE
				            t1.id = ta.training_id
				                AND ta.process_id = a.id) AS Procesos,
				    t3.username AS Usuario
				FROM
				    training t1,
				    tra_types t2,
				    users t3
				WHERE
				    t1.type_id = t2.id
				        AND t3.id_user = t1.user_id
                ORDER BY 
				t1.code,t1.start_date      