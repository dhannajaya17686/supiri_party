CREATE TABLE `party`.`employee` (
  `emp_id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NULL,
  `phone` VARCHAR(45) NULL,
  `email` VARCHAR(100) NULL,
  PRIMARY KEY (`emp_id`));

ALTER TABLE `party`.`employee` 
ADD COLUMN `username` VARCHAR(45) NULL AFTER `password`,
CHANGE COLUMN `name` `fullname` VARCHAR(100) NULL DEFAULT NULL ;
