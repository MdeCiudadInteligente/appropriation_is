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
    t1.birthday as 'Fecha de Nacimiento',
    t1.economic_level as 'Estrato',
    (IFNULL(t3.name,'Persona')) AS 'Rol',
    (CASE t1.genre
        WHEN '1' THEN 'Femenino'
        WHEN '2' THEN 'Masculino'
        WHEN '3' THEN 'Lesbiana'
        WHEN '4' THEN 'Gay'
        WHEN '5' THEN 'Transexual'
        WHEN '6' THEN 'Bisexual'
        WHEN '7' THEN 'Intersexual'
    END) AS Genero,
    tt.name as 'Tipo de Formador',
    pro.name as 'Profesion',
    tf.name as 'Fondo',
    t5.code as 'Formación',
    t5.description as 'Descripción',
    t6.name as 'Tipo de Formación',
    t5.start_date as 'Fecha de inicio (Formacion)',
    t5.end_date as 'Fecha de Terminacion (Formacion)',    
    (CASE t5.current_state WHEN '1' THEN 'En Curso' WHEN '2' THEN 'Finalizada' END) as 'Estado (Formación)'

FROM
    people t1
        LEFT JOIN
    per_people_type t2 ON t1.id_person = t2.person_id
		LEFT JOIN 
    per_types t3 ON t2.per_type_id=t3.id
		LEFT JOIN 
    per_trainers tr ON tr.per_people_type_id=t2.id    
        LEFT JOIN
    per_trainer_types tt ON tr.per_trainer_type_id=tt.id
		LEFT JOIN
    per_professions pro ON tr.per_profession_id=pro.id
		LEFT JOIN
    per_trainer_funds tf ON tr.per_trainer_fund_id=tf.id 
		LEFT JOIN 
	training_per_trainers t4 ON t4.per_trainer_id=tr.id
		LEFT JOIN
    training t5 ON  t4.training_id=t5.id
		LEFT JOIN 
    tra_types t6 ON t5.type_id=t6.id 
    
WHERE t3.id=1    
GROUP BY t1.id_person

    
		
    
        
		
    

