SELECT 
    t1.accompaniment_date AS Fecha,
    'Acompañamiento' AS 'Tipo de actividad',
    t5.name AS 'Tipo',
    t1.accompaniment_title AS 'Titulo',
    t1.accompaniment_description AS 'Descripcion',
    t1.participant_number AS 'Numero de Participantes',
    'Finalizado' AS 'Estado Actual',
    t2.site_name AS Sitio,
    t3.neighborhood_name AS Barrio,
    t4.commune_name AS Comuna,
    t1.accompaniment_adjunct AS 'Adjunto 1',
    t1.accompaniment_adjunct1 AS 'Adjunto 2',
    t1.accompaniment_adjunct2 AS 'Adjunto 3'
    FROM
    accompaniments t1,
    sites t2,
    neighborhoods t3,
    communes t4,
    acc_types t5
    
    WHERE
    t1.site_id = t2.id_site
	AND t2.neighborhood_id = t3.id_neighborhood
	AND t3.commune_id = t4.id_commune
    AND t1.accompaniment_type_id = t5.id
    AND t1.accompaniment_date BETWEEN '2015-04-1' AND '2015-04-30'
    
    UNION ALL 

SELECT 
     t1.meeting_date AS Fecha,
    'Reunion' AS 'Tipo de actividad',
    t5.name AS 'Tipo',
    t1.meeting_title AS 'Titulo',
    t1.meeting_description AS 'Descripcion',
    (SELECT COUNT(t20.meeting_id) FROM meetings_people t20 WHERE t20.meeting_id=t1.id_meeting ) AS 'Numero de Participantes',
    'Finalizado' AS 'Estado Actual',
    t2.site_name AS Sitio,
    t3.neighborhood_name AS Barrio,
    t4.commune_name AS Comuna,
    t1.meeting_adjunct AS 'Adjunto 1',
    t1.meeting_adjunct1 AS 'Adjunto 2',
    t1.meeting_adjunct2 AS 'Adjunto 3'
    FROM
	meetings t1,
    sites t2,
    neighborhoods t3,
    communes t4,
    mee_types t5
    
    WHERE
    t1.site_id = t2.id_site
	AND t2.neighborhood_id = t3.id_neighborhood
	AND t3.commune_id = t4.id_commune
    AND t1.meeting_type_id=t5.id
    AND t1.meeting_date BETWEEN '2015-04-1' AND '2015-04-30'
    
	UNION ALL 
    
    SELECT t1.divulgation_date AS Fecha, 
    'Sensibilización' AS 'Tipo de actividad',
    t5.name AS 'Tipo',
    t1.divulgation_name AS 'Titulo',
    t1.divulgation_description AS 'Descripcion',
    t1.participant_number AS 'Numero de participantes',
    'Finalizado' AS 'Estado Actual',
    t2.site_name AS Sitio,
    t3.neighborhood_name AS Barrio,
    t4.commune_name AS Comuna, 
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
    
    UNION ALL
    
    SELECT 
	t1.start_date AS Fecha,
	'Formación' AS 'Tipo de actividad',
	t2.name AS Tipo_Formación,
	t1.code AS Código,
	t1.description AS Descripción,
	(SELECT COUNT(t20.training_id) FROM per_participants_training t20 WHERE t20.training_id=t1.id ) AS 'Numero de Participantes',
	CASE t1.current_state
	WHEN t1.current_state='1' THEN 'En curso'
	ELSE 'Finalizado' 
	END AS Estado_Actual,
	(SELECT 
		GROUP_CONCAT(CONCAT(' ', site_name, ' '))
		FROM
		sites_trainings ta,
        sites a
		WHERE
		t1.id = ta.training_id
		AND ta.site_id = a.id_site) AS Sitios,
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
		'' AS 'Adjunto 1', 
		'' AS 'Adjunto 2', 
		'' AS 'Adjunto 3' 
		FROM
		training t1,
		tra_types t2
		WHERE
		t1.type_id = t2.id


    

    
    
    