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
    <link rel="icon" type="image/x-icon" href="assets/img/cake.svg">
    <script src="js/funcs/generateUserName.js"></script>
    <script src="js/funcs/validateSignUpInput.js"></script>
    <title>SP | SignUp</title>
</head>

<body>
    
<div class="sign-up-main-container">

    <div class="sign-up-main-container-left-side">
        <img src="assets/img/sign-up-image.jpg" alt="Sign up Hero Image" />
        <div class="sign-up-container-left-side-header">
            <h1>Sign Up</h1>
            <h1>with us To make</h1>
            <h1>your party Memorable</h1>
        </div>
    </div>
    <div class="sign-up-main-container-right-side">
        <div class="main-signup-form">
            <form action="logic/sign-up.logic.php" method="post" onsubmit="return validateSignUpInput()">
                <div class="main-form-sub-text">Let's create an account!</div>
                
                <div class="main-form-input-group">  
                    <label for="fullname">Full Name:</label>
                    <input type="text" name="fullname" id="fullname" placeholder="Enter your Full Name" >
                    <span id="fullname_error" class="password-error"></span>
                </div>

                <div class="main-form-input-group">         
                    <label for="username">Username:</label>
                    <div class="main-signup-input-group">
                        <input type="text" name="username" id="username" placeholder="Enter Your Username">
                        <button type="button" class="btn-generate" onclick="generateUserName()">Generate</butto>
                    </div>
                    <span id="username_error" class="password-error"></span>
                </div>

                <div class="main-form-input-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Enter your Password">
                    <span id="password_error" class="password-error"></span>
                </div>
                
    
                <div class="main-form-input-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Enter your Email">
                    <span id="email_error" class="password-error"></span>
                </div>

                <div class="main-form-input-group">
                    <label for="phone">Phone Number:</label>
                    <input type="text" name="phone" id="phone" placeholder="Enter your Phone Number" >
                    <span id="phone_error" class="password-error"></span>
                </div>

                <button>Sign Up</button>
                
                <?php check_signup_errors(); ?>
            
            </form>
        </div>
    </div>


</div>



    

</body>
</html>