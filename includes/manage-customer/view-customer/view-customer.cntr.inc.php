<?php
function request_all_customer_detail($conn){
    require_once 'view-customer.mdl.inc.php';
    return get_all_customer_info($conn);    
}
?>