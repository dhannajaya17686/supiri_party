<?php

function check_login_errors(){
    if (isset($_SESSION['main-form-errors_login'])) {
        $errors = $_SESSION["errors_login"];
        echo '<ul class="error-list" style="">';
        foreach ($errors as $error) {
            echo '<li>' . $error . '</li>';
        }
        echo '</ul>';
        unset($_SESSION["errors_login"]);
    } else if (isset($_GET["login"]) && $_GET["login"] === "success") {
        echo '<p class="success-message">Login Success</p>';
    }
    
}



?>