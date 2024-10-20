<?php

require_once ('stat-req.mdl.inc.php');
function request_total_customers(object $conn){
    return get_total_customers($conn);
}
function request_total_parties(object $conn,string $role,string $usr_id){
    return get_total_parties($conn,$role, $usr_id);
}
function request_total_revenue(object $conn){
    return get_total_revenue($conn);
}
function request_total_balance(object $conn){}

?>