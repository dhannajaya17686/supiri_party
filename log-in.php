<?php 
    require_once "includes/sessions.config.inc.php";
    require_once "includes/log-in/log-in.view.inc.php";
?>
<!DOCTYPE html>
<html>

<head>
      <title>Supiri Party Login</title>
      <link rel="stylesheet" href="css/log-in.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" />
      
</head>

<body>      
<div class="top-left-box">
      <img class="top-left-box logo" alt="" src="assets/img/cake.svg">
      <div class="top-left-box text">Supiri Party</div>
</div>

<img class="round-middle-image" alt="middle_form_image" src="assets/img/save2.png">

<div class="main-form">
      <div class="main-form-main-text">Welcome back!</div>
      <div class="main-form-sub-text">Lets Get the party started</div>
      <form action="logic/log-in.logic.php"" method="post">

            <label for="first">Username:</label>
            <input type="text" id="first" name="username" placeholder="Enter your Username" required>

            <label for="password"> Password: </label>
            <input type="password" id="password" name="password" placeholder="Enter your Password" required>
            
            <label for="role">Select Role:</label>
            <div class="" style="width:200px;">
                  <select name="role" id="role" class="form-control"  required>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                        <option value="employee">Employee</option>
                  </select>
            </div>
            <div class="wrap">
                  <button type="submit" onclick="">Log In</button>
            </div>
            <p>Not registered?
            <a href="sign-up.php" style="text-decoration: none;"> Create an account</a>
      </p>
      <?php 
            check_login_errors();
      ?>            
      </form>
      
      
</div>

<img class="bottom-left-image" alt="form_bottom_left_image" src="assets/img/save3.png">
<img class="bottom-right-image"alt="form_bottom_right_image"src="assets/img/save1.png">
</body>

</html>
