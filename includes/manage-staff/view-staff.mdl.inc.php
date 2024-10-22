<?php

function get_all_employees_info(mysqli $conn) {
    $query = "SELECT emp_id,username, email, phone, fullname FROM employee";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    $employees = [];
    while ($row = $result->fetch_assoc()) {
        $employees[] = $row;
    }
    
    $stmt->close();
    return $employees;
}



?>