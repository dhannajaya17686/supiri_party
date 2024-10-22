<?php

function check_staff_creation_errors() {
    if (isset($_SESSION['errors_staff_create'])) {
        $errors = $_SESSION["errors_staff_create"];
        echo "<script>";
        foreach ($errors as $error) {
            echo 'alert("' . addslashes($error) . '");';
        }
        echo "</script>";
        unset($_SESSION["errors_staff_create"]);
    }else if(isset($_GET["staff-add"]) && $_GET["staff-add"] === "success"){
        echo "<br>";
        echo "<script>alert('Staff add success')</script>";
    };
}


