SELECT 
    t1.id_person,
    (CASE  t1.document_type
		WHEN '1' THEN 'Cédula de ciudadanía'
        WHEN '2' THEN 'Tarjeta de identidad'
        WHEN '3' THEN 'Cédula de extranjería'
        WHEN '4' THEN 'Pasaporte'
        WHEN '5' THEN 'Registro civil'
        END
    ) as 'Tipo de documento',
    t1.cedula as 'Número de documento',
    t1.name as 'Nombre',
    t1.lastname as 'Apellido',
    t1.charge as 'Cargo',
    t1.email as 'Email',
    t1.phone as 'Telefono',
    t1.cell AS 'Celular',
    t1.entity AS Entidad,
    (IFNULL(t8.name,'Persona')) AS 'Rol',
    (CASE t1.genre
        WHEN '1' THEN 'Femenino'
        WHEN '2' THEN 'Masculino'
        WHEN '3' THEN 'Lesbiana'
        WHEN '4' THEN 'Gay'
        WHEN '5' THEN 'Transexual'
        WHEN '6' THEN 'Bisexual'
        WHEN '7' THEN 'Intersexual'
    END) AS Genero,
    t3.other_population_type as 'Otro tipo de poblacion',
    t4.neighborhood_name as 'Barrio',
    t5.commune_name as 'Comuna',
    t6.name as 'Estado Civil',
    t7.name as 'Escolaridad'
FROM
    people t1
        LEFT JOIN
    per_people_type t2 ON t1.id_person = t2.person_id
        LEFT JOIN
    per_participants t3 ON t2.id = t3.per_people_type_id
		LEFT JOIN  
    neighborhoods t4 ON t3.neighborhood_id=t4.id_neighborhood
		LEFT JOIN 
    communes t5 ON t4.commune_id=t5.id_commune
		LEFT JOIN 
    per_marital_status t6 ON t3.marital_status_id=t6.id
		LEFT JOIN 
    per_school_level t7 ON t3.school_level_id=t7.id
		LEFT JOIN 
    per_types t8 ON t2.per_type_id=t8.id    
    
WHERE t2.per_type_id=2    
        
	
		
    
        
		
    

