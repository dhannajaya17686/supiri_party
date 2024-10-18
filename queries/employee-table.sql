CREATE TABLE `party`.`employee` (
  `emp_id` INT NOT NULL AUTO_INCREMENT,
  `fullname` VARCHAR(100) NULL DEFAULT NULL,
  `phone` VARCHAR(45) NULL,
  `email` VARCHAR(100) NULL,
  `password` VARCHAR(100) NULL,
  `username` VARCHAR(45) NULL,
  PRIMARY KEY (`emp_id`)
);
username` VARCHAR(45) NULL AFTER `password`,
CHANGE COLUMN `name` `fullname` VARCHAR(100) NULL DEFAULT NULL ;
