<?php

function request_edit_task(mysqli $conn, string $task_name, string $emp_id, string $party_id, string $date) {
    require_once 'edit-tasks.mdl.inc.php';
    edit_task($conn, $task_name, $emp_id, $party_id, $date);
}
