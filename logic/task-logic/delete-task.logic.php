<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $task_id = $_POST["task_id"];
    try{
        require_once '../../config/database.config.php';
        require_once '../../config/constants.config.php';
        require_once '../../includes/manage-tasks/delete-tasks/delete-tasks.mdl.inc.php';
        require_once '../../includes/sessions.config.inc.php';

        delete_task($conn,$task_id);
        header("Location: ".ROOT_URL."app/tasks.php?staff-delete=success");
        
        die();
        }catch(Exeption $e){
        die("Query Failed: ".$e->getMessage());
    };

}else{
    header("Location: ".ROOT_URL."log-in.php");
    die();
}


?>
