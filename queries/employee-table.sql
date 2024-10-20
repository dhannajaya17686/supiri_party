CREATE TABLE `party`.`employee` (
  `emp_id` INT NOT NULL AUTO_INCREMENT,
  `fullname` VARCHAR(100) NULL DEFAULT NULL,
  `phone` VARCHAR(45) NULL,
  `email` VARCHAR(100) NULL,
  `password` VARCHAR(100) NULL,
  `username` VARCHAR(45) NULL,
  PRIMARY KEY (`emp_id`)
);

INSERT INTO `party`.`employee` (`fullname`, `phone`, `email`, `password`, `username`)
VALUES 
  ('John Doe', '123-456-7890', 'johndoe@example.com', 'password123', 'johndoe'),
  ('Jane Smith', '987-654-3210', 'janesmith@example.com', 'password456', 'janesmith'),
  ('Bob Johnson', '555-555-5555', 'bobjohnson@example.com', 'password789', 'bobjohnson');