<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["task_ids"])) {
        $task_ids = $_POST["task_ids"];

        try {
            require_once '../../config/database.config.php';
            require_once '../../config/constants.config.php';
            require_once '../../includes/manage-tasks/edit-tasks/edit-tasks.cntr.inc.php';
            require_once '../../includes/sessions.config.inc.php';

            foreach ($task_ids as $task_id) {
                request_mark_task($conn, $task_id);
            }

            header("Location: ".ROOT_URL."app/tasks.php?mark=success");
            die();
        } catch (Exception $e) {
            die("Query Failed: " . $e->getMessage());
        }
    } else {
        header("Location: ".ROOT_URL."app/tasks.php?mark=none"); 
        die();
    }
} else {
    header("Location: " . ROOT_URL . "log-in.php");
    die();
}



?>
