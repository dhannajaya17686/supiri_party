<nav>
    <div class="top-left-box">
      <img class="top-left-box logo" alt="" src="../assets/img/cake.svg">
      <div class="top-left-box text">Supiri Party</div>
    </div>
    <div class="link-box">    
        <!--ADMIN RENDERING-->                           
        <?php if ($_SESSION["user_role"] == "admin") { ?>
          <ul>                     
            <li onclick="window.location.href='<?php echo ROOT_URL."app/index.php"; ?>'">
              <img src="../assets/icons/flash-circle.png" />
              <p>Dashboard</p>
            </li>
            <li  onclick="window.location.href='<?php echo ROOT_URL."app/tasks.php"; ?>'">
              <img src="../assets/icons/task-square.png" />
              <p>Tasks</p>
            </li>
            <hr/>
            <li onclick="window.location.href='<?php echo ROOT_URL."app/parties.php"; ?>'">
              <img src="../assets/icons/strongbox.png" />
              <p>Parties</p>
            </li>
            <hr/>
            <li onclick="window.location.href='<?php echo ROOT_URL."app/manage-staff.php";?>'">
              <img src="../assets/icons/building-4.png" />
              <p>Manage Staff</p>
            </li>
            <li onclick="window.location.href='<?php echo ROOT_URL."app/customers.php";?>'">
              <img src="../assets/icons/people.png" />
              <p>Manage Customers</p>
            </li>
          </ul>
        <?php } ?>
        <!--USER RENDERING-->
        <?php if ($_SESSION["user_role"] == "user") { ?>
          <ul>                     
            <li>
              <img src="../assets/icons/flash-circle.png" />
              <p>Dashboard</p>
            </li>
            <li>
              <img src="../assets/icons/dollar-square.png" />
              <p>Payments</p>
            </li>
            <hr/>
            <li>
              <img src="../assets/icons/strongbox.png" />
              <p>Parties</p>
            </li>
          </ul>
        <?php } ?>
        <!--EMPLOYEE RENDERING-->
        <?php if ($_SESSION["user_role"] == "employee") { ?>
          <ul>                     
            <li onclick="window.location.href='<?php echo ROOT_URL . "app/index.php"; ?>'">
              <img src="../assets/icons/flash-circle.png" />
              <p>Dashboard</p>
            </li>
            <li onclick="window.location.href='<?php echo ROOT_URL . "app/tasks.php"; ?>'">
              <img src="../assets/icons/task-square.png" />
              <p>Tasks</p>
            </li>
            <hr/>
          </ul>
        <?php } ?>
    </div>
    <div class="profile-box">
      <div class="profile-circle">
        <p><?php echo substr($_SESSION["user_fullname"], 0, 1); ?></p>
      </div>
      <div class="profile-details">
        <p class="name"><?php echo $_SESSION["user_fullname"]?></p>
        <p class="role"><?php echo $_SESSION["user_role"] ?></p>
      </div>
    </div>

    <form action="../logic/log-out.logic.php" method="post" class="log-out-box">
        <button type="submit" id="log-in-form-submit">Log Out</button>
    </form>
</nav>
