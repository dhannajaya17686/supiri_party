CREATE TABLE `party`.`parties` (
  `party_id` INT NOT NULL AUTO_INCREMENT,
  `date` DATE NOT NULL,
  `location` VARCHAR(255) NOT NULL,
  `total_cost` DECIMAL(10, 2) NOT NULL,
  `balance` DECIMAL(10, 2) NOT NULL,
  `customer_id` INT NOT NULL,
  `admin_id` INT NOT NULL,
  `party_name` VARCHAR(100) NOT NULL,
  `party_type` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`party_id`),
  FOREIGN KEY (`customer_id`) REFERENCES `users`(`user_id`),
  FOREIGN KEY (`admin_id`) REFERENCES `admin`(`admin_id`)
);
