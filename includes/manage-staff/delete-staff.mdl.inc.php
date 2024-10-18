<?php

function delete_user($conn,$username){
    $query = "DELETE FROM employee WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->close();
}
?>