<?php

function create_task(mysqli $conn, $task_name, $party_id, $emp_id, $date){
    set_task($conn, $task_name, $party_id, $emp_id, $date);
}

