<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER["REQUEST_METHOD"]==="POST"){
    require_once '../../includes/sessions.config.inc.php';
    $date = $_POST['date'];
    $location = $_POST['location'];
    $total_cost = $_POST['total_cost'];
    $balance = $_POST['total_cost'];
    $customer_id = $_POST['customer_id'];
    $admin_id = $_SESSION["user_username"];
    $party_name = $_POST["party_name"];
    $party_type = $_POST["party_types"];
    try{
        require_once '../../config/database.config.php';
        require_once '../../config/constants.config.php';
        require_once '../../includes/manage-parties/add-party/add-party.mdl.inc.php';
        require_once '../../includes/manage-parties/add-party/add-party.cntr.inc.php';
        require_once '../../includes/manage-parties/add-party/add-party.view.inc.php';

        $errors = [];
        //ERROR HANDELLERS
        if(is_input_empty_globl($date,$location,$total_cost,$balance,$customer_id,$_SESSION["user_username"])){ 
            $errors["empty_input"] = "Fill in all fields! ".$_SESSION["user_username"];
        }

        if($errors){
            $_SESSION["errors_party_create"] = $errors;
            header("Location: ".ROOT_URL."app/parties.php");
            die();
        };
        
        request_add_party($conn,$date,$location,$total_cost,$balance,$customer_id,$admin_id,$party_name,$party_type);
        header("Location: ".ROOT_URL."app/parties.php?party-add=success");
     
        die();
        }catch(Exeption $e){
        die("Query Failed: ".$e->getMessage());
    };

}else{
    header("Location: ".ROOT_URL."log-in.php");
    die();
}


?>
