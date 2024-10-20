CREATE TABLE `party`.`tasks` (
    `task_id` INT NOT NULL AUTO_INCREMENT, 
    `task_name` VARCHAR(100) NOT NULL,
    `task_status` ENUM('pending', 'in-progress', 'completed') DEFAULT 'pending', 
    `party_id` INT,             
    `emp_id` INT,               
    PRIMARY KEY (`task_id`),
    FOREIGN KEY (`party_id`) REFERENCES `party`.`parties`(`party_id`) ON DELETE SET NULL, 
    FOREIGN KEY (`emp_id`) REFERENCES `party`.`employee`(`emp_id`) ON DELETE SET NULL   
);
INSERT INTO `party`.`tasks` (`task_name`, `task_status`, `party_id`, `emp_id`) VALUES
('Plan decorations', 'pending', 1, 1),
('Send invitations', 'in-progress', 1, 1),
('Arrange catering', 'completed', 1, 1),
('Set up sound system', 'pending', 1, 1),
('Finalize guest list', 'in-progress', 1, 1);
