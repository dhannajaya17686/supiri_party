<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $task_name = $_POST["task_name"];
    $party_id = $_POST["party_id"]; 
    $emp_id = $_POST["emp_id"];
    $date = $_POST["date"];
    try{
        require_once '../../config/database.config.php';
        require_once '../../config/constants.config.php';
        require_once '../../includes/manage-tasks/add-tasks/add-tasks.cntr.inc.php';
        require_once '../../includes/manage-tasks/add-tasks/add-tasks.view.inc.php';
        require_once '../../includes/manage-tasks/add-tasks/add-tasks.mdl.inc.php';
        $errors = [];
        require_once '../../includes/sessions.config.inc.php';

        if($errors){
            $_SESSION["errors_task_create"] = $errors;
            header("Location: ".ROOT_URL."app/tasks.php");
            die();
        };
        create_task($conn, $task_name,  $party_id, $emp_id, $date);
        header("Location: ".ROOT_URL."app/tasks.php?task-add=success");

        die();
        }catch(Exeption $e){
        die("Query Failed: ".$e->getMessage());
    };

}else{
    header("Location: ".ROOT_URL."log-in.php");
    die();
}



