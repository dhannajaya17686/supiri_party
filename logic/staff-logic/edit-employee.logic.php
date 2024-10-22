<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $username = $_POST["username"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $fullname = $_POST["fullname"];
    try{
        require_once '../../config/database.config.php';
        require_once '../../config/constants.config.php';
        require_once '../../includes/manage-staff/edit-staff.cntr.inc.php';
        require_once '../../includes/manage-staff/view-staff.mdl.inc.php';
        require_once '../../includes/manage-staff/view-staff.view.inc.php';
        $errors = [];
        //ERROR HANDELLERS
        if(is_input_empty($username,$email,$phone,$fullname)){ 
            $errors["empty_input"] = "Fill in all fields!";
        }
        if(is_email_valid($email)){
            $errors["invalid_email"] = "Invalid Email used";
        }

        require_once '../../includes/sessions.config.inc.php';

        if($errors){
            $_SESSION["errors_staff_edit"] = $errors;
            header("Location: ".ROOT_URL."app/manage-staff.php");
            die();
        };
        
        request_edit_staff_memeber($conn,$username,$email,$phone,$fullname);
        header("Location: ".ROOT_URL."app/manage-staff.php?staff-edit=success");
        die();
        }catch(Exeption $e){
        die("Query Failed: ".$e->getMessage());
    };

}else{
    header("Location: ".ROOT_URL."log-in.php");
    die();
}
?>