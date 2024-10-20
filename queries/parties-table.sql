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
  `status` BOOLEAN NOT NULL DEFAULT 0,
  PRIMARY KEY (`party_id`),
  FOREIGN KEY (`customer_id`) REFERENCES `users`(`user_id`),
  FOREIGN KEY (`admin_id`) REFERENCES `admin`(`admin_id`)
);
INSERT INTO `party`.`parties` (`date`, `location`, `total_cost`, `balance`, `customer_id`, `admin_id`, `party_name`, `party_type`, `status`)
VALUES
('2024-10-25', 'City Hall', 5000.00, 1000.00, 5, 1, 'Birthday Party', 'Private Event', 1),
('2024-11-05', 'Beach Resort', 15000.00, 2500.00, 5, 1, 'Wedding Reception', 'Wedding', 0),
('2024-12-15', 'Convention Center', 30000.00, 5000.00, 5, 1, 'Corporate Event', 'Business Conference', 1),
('2024-10-30', 'Park Pavilion', 8000.00, 1500.00, 5, 1, 'Family Reunion', 'Private Event', 0);
