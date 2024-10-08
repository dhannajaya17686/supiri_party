<?php

function is_input_empty($username,$email,$phone,$fullname){
    if(empty($username)|| empty($email)||empty($phone)||empty($fullname) ){
        return true;
    }else{
        return false;
    }
}

function is_email_valid($email){
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;
    }else{
        return false;
    }
}

function request_edit_staff_memeber(mysqli $conn,string $username,string $email,string $phone,string $fullname){
    edit_staff_memeber($conn, $username, $email, $phone, $fullname);
}




?>