<?php
function edit_task(mysqli $conn, string $task_name, string $emp_id, string $party_id, string $date) {
    $query = "UPDATE tasks SET emp_id = ?, party_id = ?, date = ? WHERE task_name = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("iiss", $emp_id, $party_id, $date, $task_name);
    $stmt->execute();
    $stmt->close();
    return true;
}
