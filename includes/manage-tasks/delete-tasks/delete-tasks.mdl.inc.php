<?php

function delete_task(mysqli $conn,$task_id) {
    $query = "DELETE FROM tasks WHERE task_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $task_id);
    $stmt->execute();
    $stmt->close();
}
