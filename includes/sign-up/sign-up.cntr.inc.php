<?php

function is_input_empty($username,$pwd,$email,$phone){
    if(empty($username) || empty($pwd) || empty($email)||empty($phone) ){
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

function is_username_taken(object $conn,$username){
    if(get_username($conn,$username)){
        return true;
    }else{
        return false;
    }
}


function is_email_taken(object $conn,$email){
    if(get_email($conn,$email)){
        return true;
    }else{
        return false;
    }
}

function create_customer_user($conn,$username,$fullname,$password,$phone,$email){
    set_user($conn,$username,$fullname,$password,$phone,$email);
}

?>