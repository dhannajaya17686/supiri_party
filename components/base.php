<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once '../includes/sessions.config.inc.php';
    require_once '../config/constants.config.php';
    require_once '../includes/log-in/log-in.cntr.inc.php';
    if(!is_user_authenticated()){
        header('Location: '.ROOT_URL.'log-in.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../assets/img/cake.svg">
    <link rel="stylesheet" href="../css/app/globals.css" />
    <link rel="stylesheet" href="../css/app/navbar.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" />
    <title>SP | Dashboard</title>
</head>
<body>
    <?php require_once("navbar.php"); ?>
</body>









