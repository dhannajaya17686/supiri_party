<?php


function is_input_empty($username,$pwd,$email,$phone,$fullname){
    if(empty($username) || empty($pwd) || empty($email)||empty($phone)||empty($fullname) ){
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

function is_staffname_taken(object $conn,$username){
    if(get_staffname($conn,$username)){
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

function create_user($conn,$username,$fullname,$password,$phone,$email){
    set_user($conn,$username,$fullname,$password,$phone,$email);
}



?>