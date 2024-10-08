<?php

function delete_customer($conn,$username){
    $query = "DELETE FROM users WHERE username = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->close();
}
?>


?>