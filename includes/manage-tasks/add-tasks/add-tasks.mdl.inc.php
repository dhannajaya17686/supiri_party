<?php
function set_task(mysqli $conn, $task_name, $party_id, $emp_id, $date) {
    $query = "INSERT INTO tasks (task_name, party_id, emp_id, date) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("siis", $task_name, $party_id, $emp_id, $date);
    $stmt->execute();
    $stmt->close(); 
}
