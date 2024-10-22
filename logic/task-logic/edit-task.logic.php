<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $task_name = $_POST["task_name"];
    $emp_id = $_POST["emp_id"];
    $party_id = $_POST["party_id"];
    $date = $_POST["date"];

    try {
        require_once '../../config/database.config.php';
        require_once '../../config/constants.config.php';
        require_once '../../includes/manage-tasks/edit-tasks/edit-tasks.cntr.inc.php';
        $errors = [];
        require_once '../../includes/sessions.config.inc.php';
        
        // Call the function to edit the task
        request_edit_task($conn, $task_name, $emp_id, $party_id, $date);

        header("Location: " . ROOT_URL . "app/tasks.php?task-edit=success");
        header("Location: " . ROOT_URL . "app/tasks.php");
        die();
    } catch (Exception $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header("Location: " . ROOT_URL . "log-in.php");
    die();
}
?>
