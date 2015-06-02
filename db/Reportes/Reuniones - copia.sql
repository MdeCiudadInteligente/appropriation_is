SELECT 
    t1.meeting_date AS Fecha,
    'Reunion' AS 'Tipo de actividad',
    t1.meeting_type AS 'Tipo de acompañamiento',
    t1.meeting_title AS 'Titulo',
    t1.meeting_description AS 'Descripcion',
    (SELECT COUNT(t20.meeting_id) FROM meetings_people t20 WHERE t20.meeting_id=t1.id_meeting ) AS 'Numero de Participantes',
    t1.meeting_commitments as 'Compromisos',
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
    communes t4
WHERE
    t1.site_id = t2.id_site
        AND t2.neighborhood_id = t3.id_neighborhood
        AND t3.commune_id = t4.id_commune
        AND t1.meeting_date BETWEEN '2015-04-1' AND '2015-04-30'
ORDER BY 
	t1.meeting_date,t1.meeting_type		