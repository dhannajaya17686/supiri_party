<?php



function get_all_tasks($conn){
    require_once 'get-all-tasks.mdl.inc.php';
    return request_all_tasks($conn);
}

function get_all_tasks_date_specific(mysqli $conn){
    require_once 'get-all-tasks.mdl.inc.php';
    return request_all_tasks_date_specific($conn);
}