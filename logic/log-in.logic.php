<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $role = $_POST["role"];
    try{
        require_once '../config/database.config.php';
        require_once '../config/constants.config.php';
        require_once '../includes/log-in/log-in.mdl.inc.php';
        require_once '../includes/log-in/log-in.cntr.inc.php';
        require_once '../includes/log-in/log-in.view.inc.php';
        $errors = [];
        //ERROR HANDELLERS
        if(is_input_empty($username,$password)){ 
            $errors["empty_input"] = "Fill in all fields!";
        }

        $result= get_user($conn,$username,$role);

        if(is_username_wrong($result)){
            $errors["wrong_username"] = "The username is Wrong";
        }
        if(is_password_wrong($password,$username,$conn,$role)){
            $errors["wrong_password"] = "The password you entered was wrong";
        }

        require_once '../includes/sessions.config.inc.php';

        if($errors){
            $_SESSION["errors_login"] = $errors;
            header("Location: ".ROOT_URL."log-in.php");
            die();
        }
        $newSessionId = session_create_id();
        $sessionId = $newSessionId."_".$result["id"];
        session_id($sessionId);        

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_username"] = htmlspecialchars($result["username"]);
        $_SESSION["user_role"] =$result["role"];
        $conn = null; 
        header("Location: ".ROOT_URL."log-in.php?login=success");
        header("Location:".ROOT_URL."app/index.php");
        die();
        }catch(Exeption $e){
        die("Query Failed: ".$e->getMessage());
    };

}else{
    header("Location: ".ROOT_URL."log-in.php");
    die();
}


?>