SELECT t1.divulgation_date AS Fecha, 
    'Sensibilización' AS 'Tipo de actividad',
    t5.name AS 'Tipo de sensibilización',
    t1.divulgation_name AS 'Titulo',
    t1.divulgation_description AS 'Descripcion',
    t1.participant_number AS 'Numero de participantes',
    t6.name AS 'Tipo de poblacion',
    t2.site_name AS Sitio,
    t3.neighborhood_name AS Barrio,
    t4.commune_name AS Comuna, 
    
    (SELECT GROUP_CONCAT(CONCAT(' ', p.name, ' ', p.lastname, ' '))
	FROM
	divulgations_trainers tPer,
	per_trainers per,
	per_people_type perTy,
	people p
	WHERE
	t1.id_divulgation = tPer.divulgation_id
	AND tPer.trainer_id = per.id
	AND per.per_people_type_id = perTy.id
	AND perTy.person_id = p.id_person) AS Formadores,
    
    (SELECT 
		GROUP_CONCAT(DISTINCT(CONCAT(' ', name, ' ')))
	FROM
		divulgations_thematics dst,
		thematics th
	WHERE
		dst.divulgation_id = t1.id_divulgation
		AND dst.thematic_id= th.id
	) AS Temáticas,
    
    t1.divulgation_adjunct AS 'Adjunto 1',
    t1.divulgation_adjunct1 AS 'Adjunto 2',
    t1.divulgation_adjunct2 AS 'Adjunto 3'
    FROM divulgations t1,
    sites t2,
    neighborhoods t3,
    communes t4,
    divtypes t5,
    population_types t6
    
    WHERE
    t1.site_id = t2.id_site
    AND t2.neighborhood_id = t3.id_neighborhood
    AND t3.commune_id = t4.id_commune
    AND t1.divulgation_type_id=t5.id
    AND t1.population_type_id=t6.id_population_type
    AND t1.divulgation_date BETWEEN '2014-03-1' AND '2015-04-30'
    
    ORDER BY 
	t1.divulgation_date,t5.name
 
    
