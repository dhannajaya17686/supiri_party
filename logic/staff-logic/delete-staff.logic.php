<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $username = $_POST["username"];
    try{
        require_once '../../config/database.config.php';
        require_once '../../config/constants.config.php';
        require_once '../../includes/manage-staff/delete-staff.mdl.inc.php';
        require_once '../../includes/sessions.config.inc.php';

        delete_user($conn,$username);
        header("Location: ".ROOT_URL."app/manage-staff.php?staff-delete=success");
        header("Location: ".ROOT_URL."app/manage-staff.php");
        
        die();
        }catch(Exeption $e){
        die("Query Failed: ".$e->getMessage());
    };

}else{
    header("Location: ".ROOT_URL."log-in.php");
    die();
}


?>
