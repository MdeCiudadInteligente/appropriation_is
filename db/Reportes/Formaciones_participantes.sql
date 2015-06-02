SELECT t9.code AS Código,
(SELECT 
GROUP_CONCAT(CONCAT(' ', site_name, ' '))
FROM
sites_trainings ta,
sites a
WHERE
t9.id = ta.training_id
AND ta.site_id = a.id_site) AS Sitios,
(SELECT 
GROUP_CONCAT(CONCAT(' ', site_type, ' '))
FROM
site_types st,
sites_trainings ta,
sites a
WHERE
t9.id = ta.training_id
AND ta.site_id = a.id_site
AND a.site_type_id = st.id_site_type
) AS Tipo_Sitio,
(SELECT 
GROUP_CONCAT(CONCAT(' ', activity_place, ' '))
FROM
tra_session ts
WHERE
ts.training_id = t9.id) AS Lugar_Formación,
t10.name AS Tipo_Formacion,
(SELECT  GROUP_CONCAT(DISTINCT(CONCAT(' ', name, ' ')))
FROM
tra_session ts,
tra_sessions_thematics tst,
thematics th

WHERE
ts.training_id = t9.id
AND tst.session_id= ts.id
AND tst.thematic_id= th.id
) AS Temáticas,

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

(SELECT GROUP_CONCAT(population_types.name)
FROM 
per_participants_population_types ,population_types 
WHERE per_participants_population_types.participant_id=t2.id AND 
per_participants_population_types.population_type_id=population_types.id_population_type ) as Tipo_Población,
t2.other_population_type AS Otro_Tipo_Población,

(SELECT 
GROUP_CONCAT(CONCAT(' ', name, ' '))
FROM
tra_allies_training ta,
tra_allies a
WHERE
t1.id = ta.training_id
AND ta.tra_ally_id = a.id) AS Aliados,


CONCAT(t4.name,' ',t4.lastname) as Nombre_Persona, cedula AS Cédula, t4.birthday AS Fecha_Nacimiento,
(SELECT TIMESTAMPDIFF(YEAR, t4.birthday, CURDATE())) AS Edad,

t4.genre AS Género, t11.commune_name AS Comuna, t6.neighborhood_name AS Barrio, t4.economic_level AS Nivel_Económico, t4.email AS Correo, t4.phone AS Teléfono, t4.cell AS Celular, t4.entity AS Entidad,
t4.charge AS Cargo,t7.name as Estado_Civil ,t8.name as Nivel_Escolar,t9.start_date AS Fecha_Inicio,t9.end_date AS Fecha_Final,
(SELECT COUNT(t20.training_id) FROM per_participants_training t20 WHERE t20.training_id=t1.id ) AS 'Numero de Participantes'  
 
FROM  people t4,per_participants_training t1, per_participants t2, per_people_type t3, users t5 ,neighborhoods t6, per_marital_status t7 , per_school_level t8, training t9, tra_types t10, communes t11
 
WHERE t1.participant_id=t2.id
AND   t2.neighborhood_id=t6.id_neighborhood
AND   t2.marital_status_id=t7.id
AND   t2.school_level_id=t8.id
AND   t2.per_people_type_id=t3.id
AND   t3.person_id=t4.id_person
AND   t1.user_id=t5.id_user
AND   t1.training_id=t9.id
AND   t9.type_id=t10.id
AND   t6.commune_id=t11.id_commune

ORDER BY 

t9.code        