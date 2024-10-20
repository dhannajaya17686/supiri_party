<?php
require_once 'get-all-parties.mdl.inc.php';
function request_get_all_parties(mysqli $conn){
    get_all_parties($conn);
}


?>