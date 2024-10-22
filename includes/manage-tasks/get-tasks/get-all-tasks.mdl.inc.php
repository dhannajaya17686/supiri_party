<?php

function request_all_tasks(mysqli $conn){
    $query = "SELECT 
    t.task_name,
    t.task_id,
    t.date,
    t.task_status,
    e.fullname AS employee_name,
    e.emp_id,
    p.party_id,
    p.party_name,
    CASE 
        WHEN t.task_status = 1 THEN 'Completed'
        WHEN t.task_status = 2 THEN 'Pending'
        ELSE 'Not Completed'
    END AS status_string
FROM tasks t
JOIN employee e ON t.emp_id = e.emp_id
JOIN parties p ON t.party_id = p.party_id;
";


    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    $tasks = [];

    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $task_date = new DateTime($row['date']);
            $current_date = new DateTime();
            $interval = $current_date->diff($task_date);

            if ($interval->invert == 1) {
                $row['remaining_time'] = 'Past Event'; // If event is in the past
            } else {
                $row['remaining_time'] = $interval->days . ' days'; // If event is upcoming
            }

            $tasks[] = $row;
        }
    }

    return $tasks; 
}

function request_all_tasks_date_specific(mysqli $conn){
    $current_date = date('Y-m-d');
    $query = "SELECT 
    t.task_name,
    t.task_status,
    e.fullname AS employee_name,
    p.party_name,
    CASE 
        WHEN t.task_status = 1 THEN 'Completed'
        WHEN t.task_status = 2 THEN 'Pending'
        ELSE 'Not Completed'
    END AS status_string
FROM tasks t
JOIN employee e ON t.emp_id = e.emp_id
JOIN parties p ON t.party_id = p.party_id
WHERE DATE(t.date) = ?;
";


    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $current_date);
    $stmt->execute();
    $result = $stmt->get_result();
    $tasks = [];

    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $tasks[] = $row;
        }
    }

    return $tasks; 
}