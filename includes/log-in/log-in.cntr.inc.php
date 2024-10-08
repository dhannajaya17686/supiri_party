<?php

function is_username_wrong(array|null $result){
    if(!$result) {
        return true;
    }else{
        return false;
    }
}

function is_password_wrong($password,$username,$conn,$role){
    if(!verify_user_password($conn,$username,$password,$role)){
        return true;
    }else{
        return false;
    }
}

function is_input_empty($username,$pwd){
    if(empty($username) || empty($pwd) ){
        return true;
    }else{
        return false;
    }
}

function is_user_authenticated() {
    return isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);
}

?>