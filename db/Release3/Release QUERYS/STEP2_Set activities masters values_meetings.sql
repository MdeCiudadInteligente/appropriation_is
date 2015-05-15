INSERT INTO `mee_types` (`name`) VALUES ('Empalme');
INSERT INTO `mee_types` (`name`) VALUES ('Gestión con aliados');
INSERT INTO `mee_types` (`name`) VALUES ('Seguimiento');



UPDATE 
`meetings`
SET meeting_type= 
CASE
WHEN  meeting_type ='Empalme' THEN '2'
WHEN  meeting_type ='Gestión con aliados' THEN '3'
WHEN  meeting_type LIKE '%Seguimiento%' THEN '4'
ELSE  meeting_type='0'
END;

UPDATE 
`meetings`
SET meeting_type_id=meeting_type; 
