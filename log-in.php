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
      <link rel="stylesheet" href="css/custom-login-select.css">
      <script src="js/funcs/ui/customSelectLogic.js"></script>
</head>

<body<div class="party-header">
    <img class="cake-icon" alt="" src="assets/img/cake.svg">
    <div class="supiri-party">
        <span class="upiri-party">SUPIRI PARTY</span>
    </div>
</div>

    <img class="image-1" alt="" src="assets/img/save2.png">
      <div class="main">
            <div class="main-text">Create an account!</div>
            <div class="sub-text">Lets Get the party started</div>
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
                        <button type="submit"
                                onclick="">
                              Submit
                        </button>
                  </div>
            </form>
            <?php 
                  check_login_errors();
            ?>
            <p>Not registered?
                  <a href="sign-up.php"
                     style="text-decoration: none;">
                        Create an account
                  </a>
            </p>
      </div>
      <img class="bottom-image" alt="Description" src="assets/img/save3.png">
</body>

</html>
