


ALTER TABLE `appropriation_isp`.`thematics` 
ADD COLUMN `prefix` VARCHAR(45) NULL AFTER `name`;

ALTER TABLE `appropriation_isp`.`divulgations` 
ADD COLUMN `code` VARCHAR(45) NULL AFTER `id_divulgation`;

ALTER TABLE `appropriation_isp`.`thematics` 
ADD COLUMN `state` INT(11) NULL AFTER `name`;
