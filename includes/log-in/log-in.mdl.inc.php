<?php

/*function get_user(object $conn,string $username){
    $query = "SELECT * FROM users WHERE username = ?";    
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s",$username);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close(); 
    return $row; 
}
*/

function get_user(object $conn, string $username, string $role) {
    // Initialize query and parameters based on the role
    switch ($role) {
        case 'admin':
            $query = "SELECT admin_id AS id, username, 'admin' AS role FROM admin WHERE username = ?";
            break;
        case 'employee':
            $query = "SELECT emp_id AS id, username, 'employee' AS role FROM employee WHERE username = ?";
            break;
        case 'user':
            $query = "SELECT user_id AS id, username, 'user' AS role FROM users WHERE username = ?";
            break;
        default:
            return null; // Invalid role
    }
    
    // Prepare and execute the query
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $stmt->close();

    // Return row with id, username, and role
    return $row ? $row : null;
}

/*function verify_user_password(object $conn, string $username, string $password): bool {
    // Prepare and execute the query to get the user's password
    $query = "SELECT password FROM users WHERE username = ?";    
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $row = $result->fetch_assoc();
    $stmt->close();
    
    if ($row) {
        $stored_password = $row['password'];

        return $password === $stored_password;
    }
    
    
    return false;
}
*/

function verify_user_password(mysqli $conn, string $username, string $password, string $role): bool {
    // Define the table name based on the role
    $table = '';
    
    switch ($role) {
        case 'user':
            $table = 'users';
            break;
        case 'admin':
            $table = 'admin';
            break;
        case 'employee':
            $table = 'employee';
            break;
        default:
            // Invalid role
            return false;
    }

    // Prepare and execute the query to get the user's password
    $query = "SELECT password FROM $table WHERE username = ?";
    $stmt = $conn->prepare($query);
    
    if (!$stmt) {
        // Error preparing statement
        return false;
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $row = $result->fetch_assoc();
    $stmt->close();
    
    if ($row) {
        $stored_password = $row['password'];

        return $password === $stored_password;
    }
    
    return false;
}


?>