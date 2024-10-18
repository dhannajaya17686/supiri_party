<?php

function check_signup_errors(){
    if (isset($_SESSION['errors_signup'])) {
        $errors = $_SESSION["errors_signup"];
        echo '<ul class="main-form-error-list">';
        foreach ($errors as $error) {
            echo '<li>' . $error . '</li>';
        }
        echo '</ul>';
        unset($_SESSION["errors_signup"]);
    } else if (isset($_GET["login"]) && $_GET["login"] === "success") {
        echo '<script>alert("Login Success")</script>';
    }
}



?>