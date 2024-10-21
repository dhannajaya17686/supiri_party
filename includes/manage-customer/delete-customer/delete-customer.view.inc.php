<?php

function show_customer_delete_success() {
    if(isset($_GET["customer-delete"]) && $_GET["customer-delete"] === "success"){
        echo "<script>alert('Customer delete success')</script>";
}};



?>