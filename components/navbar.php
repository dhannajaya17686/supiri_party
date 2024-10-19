<nav>
    <div class="top-left-box">
      <img class="top-left-box logo" alt="" src="../assets/img/cake.svg">
      <div class="top-left-box text">Supiri Party</div>
    </div>
    <div class="link-box">                               
        <ul>
            <li>
              <img src="../assets/icons/flash-circle.png" />
              <p>Dashboard</p>
            </li>
            <li>
              <img src="../assets/icons/dollar-square.png" />
              <p>Revenue</p>
            </li>
            <li>
              <img src="../assets/icons/calendar.png" />
              <p>Calendar</p>
            </li>
            <li>
              <img src="../assets/icons/task-square.png" />
              <p>Tasks</p>
            </li>
            <li>
              <img src="../assets/icons/task-square.png" />
              <p>Tasks</p>
            </li>
            <hr/>
            <li>
              <img src="../assets/icons/strongbox.png" />
              <p>Parrties</p>
            </li>
            <hr/>
            <li>
              <img src="../assets/icons/building-4.png" />
              <p>Manage Staff</p>
            </li>
            <li>
              <img src="../assets/icons/people.png" />
              <p>Manage Customers</p>
            </li>
          </ul>
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
        <button type="submit" id="log-in-form-submit"">Log Out</button>
    </form>
</nav>
