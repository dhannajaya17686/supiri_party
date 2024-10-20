CREATE TABLE `party`.`tasks` (
    `task_id` INT NOT NULL AUTO_INCREMENT, 
    `task_name` VARCHAR(100) NOT NULL,
    `task_status` ENUM('pending', 'in-progress', 'completed') DEFAULT 'pending', 
    `party_id` INT,
    `date` DATE,            
    `emp_id` INT,               
    PRIMARY KEY (`task_id`),
    FOREIGN KEY (`party_id`) REFERENCES `party`.`parties`(`party_id`) ON DELETE SET NULL, 
    FOREIGN KEY (`emp_id`) REFERENCES `party`.`employee`(`emp_id`) ON DELETE SET NULL   
);
INSERT INTO `party`.`tasks` (`task_name`, `task_status`, `party_id`, `emp_id`, `date`) VALUES
('Plan decorations', 'pending', 1, 1, CURDATE()),
('Send invitations', 'in-progress', 1, 1, CURDATE()),
('Arrange catering', 'completed', 1, 1, CURDATE()),
('Set up sound system', 'pending', 1, 1, CURDATE()),
('Finalize guest list', 'in-progress', 1, 1, CURDATE());
