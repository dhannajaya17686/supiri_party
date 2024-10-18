<?php

function check_customer_creation_errors() {
    if (isset($_SESSION['errors_customer_create'])) {
        $errors = $_SESSION["errors_customer_create"];
        echo "<script>";
        foreach ($errors as $error) {
            echo 'alert("' . addslashes($error) . '");';
        }
        echo "</script>";
        unset($_SESSION["errors_customer_create"]);
    }else if(isset($_GET["customer-add"]) && $_GET["customer-add"] === "success"){
        echo "<br>";
        echo "<script>alert('Customer add success')</script>";
    };
}


?>