<?php

function get_total_customers(object $conn):int{
    $query = "SELECT COUNT(*) AS user_count FROM `party`.`users`;";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();
    return $row['user_count']; 
}
function get_total_parties(object $conn,string $role,string $userId=null):int{
    if ($role === 'admin') {
        $query = "SELECT COUNT(*) AS total_parties FROM `party`.`parties`";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        return $row['total_parties'];
    } elseif ($role === 'user' && $userId !== null) {
        $query = "SELECT COUNT(*) AS total_parties FROM `party`.`parties` WHERE `customer_id` = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        return $row['total_parties'];
    } else {
        return 0;
    }
}

function get_total_revenue(mysqli $conn):int{
    $query="SELECT SUM(total_cost) AS total_revenue FROM `party`.`parties`";
    if ($stmt = $conn->prepare($query)) {
        // Execute the statement
        $stmt->execute();
        $result = $stmt->get_result();  
        $row = $result->fetch_assoc();
        if ($row!=null) {
            // Return the total revenue
            return (int) ($row["total_revenue"]??0);
        } else {
            // In case of no result
            return 0; // or null, depending on your preference
        }
    } else {
        // Handle error in preparing the statement
        return 0; // or throw an exception
    }
}

?>