CREATE TABLE `party`.`users` (
  `username` VARCHAR(45) NOT NULL,
  `fullname` VARCHAR(100) NULL,
  `email` VARCHAR(100) NULL,
  `password` VARCHAR(100) NULL,
  `phone` VARCHAR(45) NULL,
  PRIMARY KEY (`username`)
);
