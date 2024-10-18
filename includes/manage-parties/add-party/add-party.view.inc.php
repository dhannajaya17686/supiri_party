<?php

function show_party_creation_errors() {
    if (isset($_SESSION['errors_party_create'])) {
        $errors = $_SESSION["errors_party_create"];
        echo "<script>";
        foreach ($errors as $error) {
            echo 'alert("' . addslashes($error) . '");';
        }
        echo "</script>";
        unset($_SESSION["errors_party_create"]);
    }else if(isset($_GET["party-add"]) && $_GET["party-add"] === "success"){
        echo "<br>";
        echo "<script>alert('Party add success')</script>";
    };
}




?>