<?php

function get_staffname(object $conn ,string $username){
    $query = "SELECT username FROM employee WHERE username = ?";    
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s",$username);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close(); 
    return $row;
}

function get_email(object $conn ,string $email){
    $query = "SELECT username FROM employee WHERE email = ?";    
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close(); 
    return $row;
}

function set_user(object $conn,$username,$fullname,$password,$phone,$email){
    $query = "INSERT  INTO employee(username,email,phone,password,fullname) VALUES (?,?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssss", $username, $email, $phone, $password, $fullname);
    $stmt->execute();
    $stmt->close(); 
}

?>