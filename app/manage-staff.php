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
    require_once '../components/base.php';
    
?>
<head>
    <script src="../js/ui/togglePopUp.js" defer></script>
    <script src="../js/ui/editWindowStaff.js" defer></script>
    <script src="../js/funcs/generateUserName.js" defer></script>
    <script src="../js/ui/confirmDelete.js" defer></script>
    <script src="../js/funcs/validateStaffInput.js"defer></script>
    <title>SP | Manage Staff</title>
</head>
<body>
    <div class="main-content">
        <!--The component to add the title-->    
        <div class="page-common-title-box">
            <h1>Manage Staff Members<span style="margin-left: 1.5rem;"></span>👨🏻</h1>
            <button class="details-btn" onclick="window.location.hash = '#popup1';"><span style="font-weight:800;font-size: 1.7rem;margin-right:2rem">+</span>Add new tasks</button>
        </div>
        <!--Component to render all employees-->
        <div class="manage-staff-box">
            <table class="party-table">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Full Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    $employee_list = request_all_staff_detail($conn);

                    if (!empty($employee_list)) {
                        $count = 0;
                        foreach ($employee_list as $index => $employee) {
                            ?>
                            <tr>
                                <td><?php echo htmlspecialchars($employee['username']); ?></td>
                                <td><?php echo htmlspecialchars($employee['email']); ?></td>
                                <td><?php echo htmlspecialchars($employee['phone']); ?></td>
                                <td><?php echo htmlspecialchars($employee['fullname']); ?></td>
                                <td>
                                    <button class="details-btn" onclick="openEditStaff('<?php echo htmlspecialchars($employee['username']); ?>', 
                                        '<?php echo htmlspecialchars($employee['email']); ?>', 
                                        '<?php echo htmlspecialchars($employee['phone']); ?>', 
                                        '<?php echo htmlspecialchars($employee['fullname']); ?>');window.location.hash = '#popup2';">
                                    Edit
                                    </button>
                                    <form method="POST" action="../logic/staff-logic/delete-staff.logic.php" style="display:inline;" onsubmit="return confirmDelete('<?php echo $employee['username']; ?>');">
                                        <input type="hidden" name="username" value="<?php echo htmlspecialchars($employee['username']); ?>">
                                        <button type="submit" class="details-btn-delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                            $count++;
                        }
                    } else {
                        echo "<tr><td colspan='8'>No parties found.</td></tr>";
                    }
                ?>
      
                </tbody>    
            </table>
        </div>
        <!--The component which pops to add new staff-->
        <div id="popup1" class="overlay">
            <form class="popup main-form" action="../logic/staff-logic/add-staff.logic.php" method="post" onsubmit="return validateSignUpInput()">
                <a class="close" href="#">&times;</a>
                <div class="main-form-sub-text">Add Staff Members</div>
                
                <div class="main-form-input-group">  
                    <label for="fullname">Full Name:</label>
                    <input type="text" name="fullname" id="fullname" placeholder="Enter your Name" >
                    <span id="fullname_error" class="password-error"></span>
                </div>

                <div class="main-form-input-group">         
                    <label for="username">Username:</label>
                    <div class="main-signup-input-group">
                        <input type="text" name="username" id="username" placeholder="Enter Username">
                        <button type="button" class="btn-generate" onclick="generateUserName()">Generate</butto>
                    </div>
                    <span id="username_error" class="password-error"></span>
                </div>

                <div class="main-form-input-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" placeholder="Enter Password">
                    <span id="password_error" class="password-error"></span>
                </div>
                
    
                <div class="main-form-input-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Enter Email">
                    <span id="email_error" class="password-error"></span>
                </div>

                <div class="main-form-input-group">
                    <label for="phone">Phone Number:</label>
                    <input type="text" name="phone" id="phone" placeholder="Enter Phone Number" >
                    <span id="phone_error" class="password-error"></span>
                </div>

                <button class="btn-submit" type="submit">Submit</button>
            </form>
        </div>
        <!--The component which pops to edit staff-->
        <div id="popup2" class="overlay">
            <form class="popup main-form" action="../logic/staff-logic/edit-employee.logic.php" method="post">
                <a class="close" href="#">&times;</a>
                <div class="main-form-sub-text">Edit Staff Members</div>
                <input type="hidden" id="edit-username" name="username">
                
                <label for="edit-email">Email:</label>
                <input type="email" id="edit-email" name="email" required>

                <label for="edit-phone">Phone:</label>
                <input type="tel" id="edit-phone" name="phone" required>

                <label for="edit-fullname">Full Name:</label>
                <input type="text" id="edit-fullname" name="fullname" required>

                <button type="submit">Save Changes</button>
            </form> 
        </div>
    </div>
    <?php check_staff_creation_errors() ?>
    <?php edit_staff_creation_errors();show_delete_success() ?>
<!--
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
    <?php ?>
        -->
    <!-- Pop-up Edit Form (Hidden by default) -->
     <!--
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
        -->

</body>
</html>

