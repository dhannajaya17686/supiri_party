CREATE TABLE `party`.`users` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `fullname` VARCHAR(100) NULL,
  `email` VARCHAR(100) NULL,
  `password` VARCHAR(100) NULL,
  `phone` VARCHAR(45) NULL,
  PRIMARY KEY (`user_id`)
);
INSERT INTO `party`.`users` (`username`, `fullname`, `email`, `password`, `phone`) VALUES
('john_doe', 'John Doe', 'john.doe@example.com', 'password123', '123-456-7890'),
('jane_smith', 'Jane Smith', 'jane.smith@example.com', 'password456', '234-567-8901'),
('mike_johnson', 'Mike Johnson', 'mike.johnson@example.com', 'password789', '345-678-9012'),
('emily_davis', 'Emily Davis', 'emily.davis@example.com', 'password321', '456-789-0123'),
('sara_connor', 'Sara Connor', 'sara.connor@example.com', 'password654', '567-890-1234');
