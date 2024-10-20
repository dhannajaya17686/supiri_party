<?php


function get_all_parties(mysqli $conn): array {
    // Join 'parties' with 'users' to get customer name and fetch necessary columns
    $query = "
        SELECT p.*, u.username AS customer_name 
        FROM parties p 
        JOIN users u ON p.customer_id = u.user_id";

    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    $parties = [];

    if ($result) {
        while ($row = $result->fetch_assoc()) {
            // Calculate remaining days/time
            $party_date = new DateTime($row['date']);
            $current_date = new DateTime();
            $interval = $current_date->diff($party_date);

            if ($interval->invert == 1) {
                $row['remaining_time'] = 'Past Event'; // If event is in the past
            } else {
                $row['remaining_time'] = $interval->days . ' days'; // If event is upcoming
            }

            // Get the status
            $row['status_text'] = $row['status'] ? 'Completed' : 'Pending';

            // Add the modified row with customer name and remaining time to the result array
            $parties[] = $row;
        }
    }

    return $parties; // Return the array of parties with additional data
}



?>