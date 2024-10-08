<?php
     ini_set('display_errors', 1);
     ini_set('display_startup_errors', 1);
     error_reporting(E_ALL);
    require_once '../includes/manage-staff/add-staff.view.inc.php';
    require_once '../config/constants.config.php';
    require_once '../includes/sessions.config.inc.php';
    require_once '../config/database.config.php';
    require_once '../includes/manage-staff/view-staff.cntr.inc.php';
    require_once '../includes/manage-staff/edit-staff.view.inc.php';
    require_once '../includes/manage-staff/delete-staff.view.inc.php';
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pop-up.css" type="text/css">
    <script src="../js/ui/togglePopUp.js" defer></script>
    <script src="../js/ui/editWindowStaff.js" defer></script>
    <script src="../js/funcs/generateUserName.js" defer></script>
    <script src="../js/ui/confirmDelete.js" defer></script>
    <title>Manage Staff</title>
</head>
<body>
<button class="btn-open-popup" onclick="togglePopup()">
      Add new Staff members
      </button>

      
      <div id="popupOverlay" class="overlay-container ">
        <div class="popup-box">
            <h2 style="color: green;">Add Staff Members </h2>
            <form class="form-container" action="../logic/staff-logic/add-staff.logic.php" method="post">
                <label class="form-label" for="fullname">Full Name:</label>
                <input class="form-input" type="text" placeholder="Enter Your Full Name" id="fullname" name="fullname" required>
                <div class="input-group">
                    <label class="form-label" for="username">Username:</label>
                    <input class="form-input" type="text" placeholder="Enter Your Username" id="username" name="username" required>
                    <button type="button" class="btn-generate" onclick="generateUserName()">Generate</button>
                </div>
                <label class="form-label" for="password">Password:</label>
                <input class="form-input" type="password" placeholder="Enter Your Password" id="password" name="password" required>
                <label class="form-label" for="phone">Phone:</label>
                <input class="form-input" type="tel" placeholder="Enter Your Phone Number" id="phone" name="phone" required>
                <label class="form-label" for="email">Email:</label>
                <input class="form-input" type="email" placeholder="Enter Your Email" id="email" name="email" required>
                <button class="btn-submit" type="submit">Submit</button>
                <button class="btn-close-popup" onclick="togglePopup()">Close</button>
            </form>
        </div>
    </div>
    <?php check_staff_creation_errors() ?>

    <?php $employee_list = request_all_staff_detail($conn);
    ?>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Full Name</th>
            <th>Actions</th>
        </tr>      
        <?php foreach ($employee_list as $employee) { ?>
            <tr>
                <td><?php echo htmlspecialchars($employee['username']); ?></td>
                <td><?php echo htmlspecialchars($employee['email']); ?></td>
                <td><?php echo htmlspecialchars($employee['phone']); ?></td>
                <td><?php echo htmlspecialchars($employee['fullname']); ?></td>
                
                <td>
                    <button class="edit-btn" onclick="openEditStaff('<?php echo htmlspecialchars($employee['username']); ?>', '<?php echo htmlspecialchars($employee['email']); ?>', '<?php echo htmlspecialchars($employee['phone']); ?>', '<?php echo htmlspecialchars($employee['fullname']); ?>')">Edit</button>
                    <form method="POST" action="../logic/staff-logic/delete-staff.logic.php" style="display:inline;" onsubmit="return confirmDelete('<?php echo $employee['username']; ?>');">
                        <input type="hidden" name="username" value="<?php echo htmlspecialchars($employee['username']); ?>">
                        <button type="submit" class="delete-btn">Delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
        
        
    </table>
    <?php?>
    <!-- Pop-up Edit Form (Hidden by default) -->
            <h2>Edit Employee</h2>
            <form id="editForm" method="post" action="../logic/staff-logic/edit-employee.logic.php">
                <input type="hidden" id="edit-username" name="username">
                
                <label for="edit-email">Email:</label>
                <input type="email" id="edit-email" name="email" required>

                <label for="edit-phone">Phone:</label>
                <input type="tel" id="edit-phone" name="phone" required>

                <label for="edit-fullname">Full Name:</label>
                <input type="text" id="edit-fullname" name="fullname" required>

                <button type="submit">Save Changes</button>
            </form>
        <?php edit_staff_creation_errors();show_delete_success() ?>
        

</body>
</html>

