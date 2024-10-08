CREATE TABLE `party`.`admin` (
  `admin_id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NULL,
  `email` VARCHAR(100) NULL,
  `phone` VARCHAR(45) NULL,
  PRIMARY KEY (`admin_id`));

ALTER TABLE `party`.`admin` 
ADD COLUMN `username` VARCHAR(45) NULL AFTER `password`,
CHANGE COLUMN `name` `fullname` VARCHAR(100) NULL DEFAULT NULL ;
