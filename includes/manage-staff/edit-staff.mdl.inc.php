<?php

function edit_staff_memeber(mysqli $conn,string $username,string $email,string $phone,string $fullname){
    $query = "UPDATE employee SET email = ?, phone = ?, fullname = ? WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $email, $phone, $fullname, $username);
    $stmt->execute();
    $stmt->close();
    return true;
}







?>