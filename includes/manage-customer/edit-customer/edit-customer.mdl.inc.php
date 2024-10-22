<?php
function edit_customer_memeber(mysqli $conn,string $username,string $email,string $phone,string $fullname){
    $query = "UPDATE users SET email = ?, phone = ?, fullname = ? WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssss", $email, $phone, $fullname, $username);
    $stmt->execute();
    $stmt->close();
    return true;
}



?>