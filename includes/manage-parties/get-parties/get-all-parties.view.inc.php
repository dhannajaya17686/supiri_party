<?php

function get_all_parties(mysqli $conn){
    $query = "SELECT * FROM parties"; // Adjust columns as needed
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    $parties = '';
    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $party_name = $row['party_name'];
            $parties .= "<li>$party_name <a href='".ROOT_URL."app/party_details.php?id=$id'>See More</a></li>";
        }
    } else {
        $parties = "<li>Error retrieving parties.</li>";
    }

    return $parties;
}


?>