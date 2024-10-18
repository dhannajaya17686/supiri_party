<?php

function request_all_staff_detail($conn){
    require_once 'view-staff.mdl.inc.php';
    return get_all_employees_info($conn);    
}

?>