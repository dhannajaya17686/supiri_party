<?php
function get_all_customer_info(mysqli $conn) {
    $query = "SELECT user_id,username, email, phone, fullname FROM users";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    $employees = [];
    while ($row = $result->fetch_assoc()) {
        $employees[] = $row;
    }
    
    $stmt->close();
    return $employees;
}
?>