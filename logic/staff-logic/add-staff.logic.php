<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $fullname = $_POST["fullname"];
    try{
        require_once '../../config/database.config.php';
        require_once '../../config/constants.config.php';
        require_once '../../includes/manage-staff/add-staff.mdl.inc.php';
        require_once '../../includes/manage-staff/add-staff.cntr.inc.php';
        require_once '../../includes/manage-staff/add-staff.view.inc.php';
        $errors = [];
        //ERROR HANDELLERS
        if(is_input_empty($username,$password,$email,$phone,$fullname)){ 
            $errors["empty_input"] = "Fill in all fields!";
        }
        if(is_email_valid($email)){
            $errors["invalid_email"] = "Invalid Email used";
        }
        if(is_staffname_taken($conn,$username)){            
            $errors["username_taken"] = "Username already taken";
        }
        if(is_email_taken($conn,$email)){            
            $errors["email_taken"] = "Email already taken";
        }


        require_once '../../includes/sessions.config.inc.php';

        if($errors){
            $_SESSION["errors_staff_create"] = $errors;
            header("Location: ".ROOT_URL."app/manage-staff.php");
            die();
        };
        header("Location: ".ROOT_URL."app/manage-staff.php?staff-add=success");
        create_user($conn,$username,$fullname,$password,$phone,$email);
        $conn = null; 
        die();
        }catch(Exeption $e){
        die("Query Failed: ".$e->getMessage());
    };

}else{
    header("Location: ".ROOT_URL."log-in.php");
    die();
}


?>
