CREATE DATABASE `party`;
CREATE TABLE `party`.`admin` (
  `admin_id` INT NOT NULL AUTO_INCREMENT,
  `fullname` VARCHAR(100) NULL DEFAULT NULL, 
  `email` VARCHAR(100) NULL,
  `phone` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,  
  `username` VARCHAR(45) NULL,  
  PRIMARY KEY (`admin_id`)
);

--Adding a default admin user
INSERT INTO `party`.`admin` (fullname, email, phone, password, username)
VALUES ('Default Admin', 'admin@example.com', '1234567890', 'admin123', 'admin');
