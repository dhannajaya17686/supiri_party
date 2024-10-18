<?php

function request_customer_info(mysqli $conn){
    require_once 'add-party.mdl.inc.php';
    return get_customer_info($conn);
}

function request_add_party(mysqli $conn, $date, $location, $total_cost, $balance, $customer_id, $admin_id,$party_name,$party_type){
    create_new_party($conn,$date,$location,$total_cost,$balance,$customer_id,$admin_id,$party_name,$party_type);
} 

function is_input_empty_globl(...$inputs) {
    foreach ($inputs as $input) {
        if (empty($input)) {
            return true; 
        }
    }
    return false;
}

?>