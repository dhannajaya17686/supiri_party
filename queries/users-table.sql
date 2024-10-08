ALTER TABLE `party`.`users` 
ADD COLUMN `email` VARCHAR(100) NULL AFTER `username`,
ADD COLUMN `password` VARCHAR(100) NULL AFTER `email`,
ADD COLUMN `phone` VARCHAR(45) NULL AFTER `password`;
