<?php

function show_customer_delete_success() {
    if(isset($_GET["staff-delete"]) && $_GET["staff-delete"] === "success"){
        echo "<script>alert('Staff delete success')</script>";
}};



?>