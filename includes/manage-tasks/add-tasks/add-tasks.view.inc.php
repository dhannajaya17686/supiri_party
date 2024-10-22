<?php
function check_task_creation_errors() {
    if (isset($_SESSION['errors_task_create'])) {
        $errors = $_SESSION["errors_task_create"];
        echo "<script>";
        foreach ($errors as $error) {
            echo 'alert("' . addslashes($error) . '");';
        }
        echo "</script>";
        unset($_SESSION["errors_task_create"]);
    }else if(isset($_GET["task-add"]) && $_GET["task-add"] === "success"){
        echo "<br>";
        echo "<script>alert('Task add success')</script>";
    };
}