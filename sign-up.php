<?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once "includes/sessions.config.inc.php";
    require_once "includes/sign-up/sign-up.view.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" />
    <link rel="stylesheet" href="css/log-in.css">
    <script src="js/funcs/generateUserName.js"></script>
    <title>Create Account</title>
</head>
<body>
    <div class="party-header">
    <img class="cake-icon" alt="" src="assets/img/cake.svg">
    <div class="supiri-party">
        <span class="upiri-party">SUPIRI PARTY</span>
    </div>
    <img class="image-1" alt="" src="assets/img/save2.png">
    <div class="main">
    <form action="logic/sign-up.logic.php" method="post">
    <div class="sub-text">Let's Create An Account!</div>
        <?php signup_inputs() ?>
        <button>Signup </button>
        <?php
        check_signup_errors();
        ?>
    </form>
    </div>
    
          <img class="bottom-image" alt="Description" src="assets/img/save3.png">

</body>
</html>