<?php

function edit_customer_creation_errors() {
    if (isset($_SESSION['errors_customer_edit'])) {
        $errors = $_SESSION["errors_customer_edit"];
        echo "<script>";
        foreach ($errors as $error) {
            echo 'alert("' . addslashes($error) . '");';
        }
        echo "</script>";
        unset($_SESSION["errors_customer_edit"]);
    }else if(isset($_GET["customer-edit"]) && $_GET["customer-edit"] === "success"){
        echo "<br>";
        echo "<script>alert('Customer Edit SUccess')</script>";
    }; 
}





?>