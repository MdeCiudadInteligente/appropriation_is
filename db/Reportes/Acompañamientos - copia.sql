SELECT 
    t1.accompaniment_date AS Fecha,
    'Acompañamiento' AS 'Tipo de actividad',
    t1.accompaniment_type AS 'Tipo de acompañamiento',
    t1.accompaniment_title AS 'Titulo',
    t1.accompaniment_description AS 'Descripcion',
    t1.participant_number AS 'Numero de Participantes',   
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
    communes t4
WHERE
    t1.site_id = t2.id_site
        AND t2.neighborhood_id = t3.id_neighborhood
        AND t3.commune_id = t4.id_commune
        AND t1.accompaniment_date BETWEEN '2015-04-1' AND '2015-04-30'
ORDER BY 
	t1.accompaniment_date,t1.accompaniment_type		