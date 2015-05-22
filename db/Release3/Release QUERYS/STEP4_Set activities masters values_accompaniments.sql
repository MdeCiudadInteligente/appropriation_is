INSERT INTO `acc_types` (`name`) VALUES ('Aula Abierta');
INSERT INTO `acc_types` (`name`) VALUES ('Curso, taller o charla');
INSERT INTO `acc_types` (`name`) VALUES ('Estudiantes de PP, jóvenes por la convivencia');
INSERT INTO `acc_types` (`name`) VALUES ('Estudiantes del Pascual Bravo');
INSERT INTO `acc_types` (`name`) VALUES ('Grados');
INSERT INTO `acc_types` (`name`) VALUES ('Intervención sitio');
INSERT INTO `acc_types` (`name`) VALUES ('Kit de inclusion digital');
INSERT INTO `acc_types` (`name`) VALUES ('Laboratorios comunitarios');
INSERT INTO `acc_types` (`name`) VALUES ('Otros');
INSERT INTO `acc_types` (`name`) VALUES ('practicantes');
INSERT INTO `acc_types` (`name`) VALUES ('Sensibilización');



UPDATE 
`accompaniments`
SET accompaniment_type= 
CASE
WHEN  accompaniment_type ='Aula Abierta' THEN '2'
WHEN  accompaniment_type ='Curso, taller o charla' THEN '3'
WHEN  accompaniment_type LIKE '%Estudiantes de PP, jóvenes por la%' THEN '4'
WHEN  accompaniment_type ='Estudiantes del Pascual Bravo' THEN '5'
WHEN  accompaniment_type ='Grados' THEN '6'
WHEN  accompaniment_type ='Intervención sitio' THEN '7'
WHEN  accompaniment_type LIKE '%Kit de inclusion%' THEN '8'
WHEN  accompaniment_type ='Laboratorios comunitarios' THEN '9'
WHEN  accompaniment_type ='Otros' THEN '10'
WHEN  accompaniment_type ='practicantes' THEN '11'
WHEN  accompaniment_type ='Sensibilización' THEN '12'
ELSE  accompaniment_type='0'
END;

UPDATE 
`accompaniments`
SET accompaniment_type_id=accompaniment_type; 


ALTER TABLE `accompaniments` 
DROP COLUMN `accompaniment_type`;






