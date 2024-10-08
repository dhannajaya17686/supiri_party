<?php
function edit_staff_creation_errors() {
    if (isset($_SESSION['errors_staff_edit'])) {
        $errors = $_SESSION["errors_staff_edit"];
        echo "<script>";
        foreach ($errors as $error) {
            echo 'alert("' . addslashes($error) . '");';
        }
        echo "</script>";
        unset($_SESSION["errors_staff_edit"]);
    }else if(isset($_GET["staff-edit"]) && $_GET["staff-edit"] === "success"){
        echo "<br>";
        echo "<script>alert('Staff Edit SUccess')</script>";
    }; 
}

?>