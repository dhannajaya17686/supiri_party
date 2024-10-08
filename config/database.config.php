<?php
require 'db_constants.config.php';

//makes a new connection object in order to be used to query data of server
$conn = new mysqli(DATABASE_HOST,DATABSE_USER,DATABASE_PASSWD,DATABASE_NAME);
if (mysqli_errno($conn)){
    echo mysqli_error($conn);
    die(mysqli_error($conn));
}
?>