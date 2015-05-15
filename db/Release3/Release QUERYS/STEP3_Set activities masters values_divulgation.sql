INSERT INTO `divtypes` (`name`) VALUES ('Intervención de sitios de gobierno');
INSERT INTO `divtypes` (`name`) VALUES ('Otros');



UPDATE 
`divulgations`
SET divulgation_type= 
CASE
WHEN  divulgation_type  ='Charla' THEN '2'
WHEN  divulgation_type  ='Activaciones Pedagógicas' THEN '3'
WHEN  divulgation_type  LIKE '%Eventos%' THEN '4'
WHEN  divulgation_type  LIKE '%Activación Zona WiFi%' THEN '5'
WHEN  divulgation_type  LIKE '%Intervención de sitios de gobierno%' THEN '6'
WHEN  divulgation_type  LIKE '%Otros%' THEN '7'
ELSE  divulgation_type  ='0'
END;

UPDATE 
`divulgations`
SET divulgation_type_id=divulgation_type; 