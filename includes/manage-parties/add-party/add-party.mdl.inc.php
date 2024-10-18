<?php

function get_customer_info(mysqli $conn){
    $query = "SELECT username,fullname FROM users";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    $options = "";
    while ($row = $result->fetch_assoc()) {
        $name = $row['fullname'];
        $username = htmlspecialchars($row['username'], ENT_QUOTES); // Escape to prevent XSS
        $options .= "<option value=\"$username\">$name</option>";
    }
    
    $stmt->close();
    return $options;
}

function create_new_party(mysqli $conn, $date, $location, $total_cost, $balance, $customer_id, $admin_id,$party_name,$party_type){
    $query = "INSERT INTO parties (date, location, total_cost, balance, customer_id, admin_id,party_name,party_type) 
              VALUES (?, ?, ?, ?, ?, ?, ? , ? )";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ssiissss", $date, $location, $total_cost, $balance, $customer_id, $admin_id,$party_name,$party_type);
    if ($stmt->execute()) {
        echo "Party added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}


?>