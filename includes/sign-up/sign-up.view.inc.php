<?php

function signup_inputs(){ 
    echo '<label for="fullname">Full Name:</label>
    <input type="text" name="fullname" id="fullname" placeholder="Enter your Full Name" required>';
    if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])) {
        echo '<label for="username">Username:</label>';
        echo '<div class="input-group">';
        echo '<input type="text" name="username" id="username" placeholder="Enter Your Username" value="'.$_SESSION["signup_data"]["username"].'" required>';
        echo '<button type="button" class="btn-generate" onclick="generateUserName()">Generate</button>';
        echo '</div>';
    } else {
        echo '<label for="username">Username:</label>';
        echo '<div class="input-group">';
        echo '<input type="text" name="username" id="username" placeholder="Enter Your Username" required>';
        echo '<button type="button" class="btn-generate" onclick="generateUserName()">Generate</button>';
        echo '</div>';
    };
    
    echo '<label for="password">Password:</label>
          <input type="password" name="password" id="password" placeholder="Enter your Password" required>';
    
  
    
    echo '<label for="email">Email:</label>
          <input type="email" name="email" id="email" placeholder="Enter your Email" required>';
    
    echo '<label for="phone">Phone Number:</label>
          <input type="text" name="phone" id="phone" placeholder="Enter your Phone Number" required>';
};

function check_signup_errors(){
    if (isset($_SESSION['errors_signup'])) {
        $errors = $_SESSION["errors_signup"];
        echo '<ul class="error-list">';
        foreach ($errors as $error) {
            echo '<li>' . $error . '</li>';
        }
        echo '</ul>';
        unset($_SESSION["errors_signup"]);
    } else if (isset($_GET["login"]) && $_GET["login"] === "success") {
        echo '<script>alert("Login Success")</script>';
    }
}



?>