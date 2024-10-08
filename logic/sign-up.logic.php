<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if($_SERVER["REQUEST_METHOD"]==="POST"){
    $username = $_POST["username"];
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    try{

        require_once '../config/database.config.php';
        require_once '../includes/sign-up/sign-up.mdl.inc.php';
        require_once '../includes/sign-up/sign-up.cntr.inc.php';
        require_once '../includes/sign-up/sign-up.view.inc.php';
        $errors = [];
        //ERROR HANDELLERS
        if(is_input_empty($username,$password,$email,$phone)){ 
            $errors["empty_input"] = "Fill in all fields!";
        }
        if(is_email_valid($email)){
            $errors["invalid_email"] = "Invalid Email used";
        }
        if(is_username_taken($conn,$username)){            
            $errors["username_taken"] = "Username already taken";
        }
        if(is_email_taken($conn,$email)){            
            $errors["email_taken"] = "Email already taken";
        }

        require_once '../includes/sessions.config.inc.php';

        if($errors){
            $_SESSION["errors_signup"] = $errors;
            header("Location: http://localhost/party/sign-up.php");
            $signup_data= [
                "username"=>$username,
                "email"=>$email,
                "fullname"=>$fullname,
                "phone"=>$phone,
                "password"=>$password,
            ];
            $_SESSION["signup_data"] = $signup_data;
            die();
        }
        header("Location: http://localhost/party/sign-up.php?signup=success");
        create_customer_user($conn,$username,$fullname,$password,$phone,$email);
        header("Location: ".ROOT_URL."log-in.php");
        die();
    }catch(Exeption $e){
        die("Query Failed: ".$e->getMessage());
    };

}  else{
    header("Location: http://localhost/party/sign-up.php");
    die();
};

?>