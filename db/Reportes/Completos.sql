SELECT 
    t1.accompaniment_date AS Fecha,
    'Acompañamiento' AS 'Tipo de actividad',
    t1.accompaniment_type AS 'Tipo de acompañamiento',
    t1.accompaniment_title AS 'Titulo',
    t1.accompaniment_description AS 'Descripcion',
    t1.participant_number AS 'Numero de Participantes',
    t2.site_name AS Sitio,
    t3.neighborhood_name AS Barrio,
    t4.commune_name AS Comuna
FROM
    accompaniments t1,
    sites t2,
    neighborhoods t3,
    communes t4
WHERE
    t1.site_id = t2.id_site
        AND t2.neighborhood_id = t3.id_neighborhood
        AND t3.commune_id = t4.id_commune
        AND t1.accompaniment_date BETWEEN '2015-02-16' AND '2015-03-30'
    
UNION ALL   

SELECT 
    t1.meeting_date AS Fecha,
    'Reunion' AS 'Tipo de actividad',
    t1.meeting_type AS 'Tipo de acompañamiento',
    t1.meeting_title AS 'Titulo',
    t1.meeting_description AS 'Descripcion',
    (SELECT COUNT(t20.meeting_id) FROM meetings_people t20 WHERE t20.meeting_id=t1.id_meeting ) AS 'Numero de Participantes',
    t2.site_name AS Sitio,
    t3.neighborhood_name AS Barrio,
    t4.commune_name AS Comuna
FROM
    meetings t1,
    sites t2,
    neighborhoods t3,
    communes t4
WHERE
    t1.site_id = t2.id_site
        AND t2.neighborhood_id = t3.id_neighborhood
        AND t3.commune_id = t4.id_commune
        AND t1.meeting_date BETWEEN '2015-02-16' AND '2015-03-30'
    
UNION ALL

SELECT 
    t1.divulgation_date AS Fecha,
    'Sensibilización' AS 'Tipo de actividad',
    t1.divulgation_type AS 'Tipo de acompañamiento',
    t1.divulgation_name AS 'Titulo',
    t1.divulgation_description AS 'Descripcion',
    t1.participant_number AS 'Numero de Participantes',
    t2.site_name AS Sitio,
    t3.neighborhood_name AS Barrio,
    t4.commune_name AS Comuna
FROM
    divulgations t1,
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
        AND t1.divulgation_date BETWEEN '2015-02-16' AND '2015-03-30'
ORDER BY 
	Fecha		    