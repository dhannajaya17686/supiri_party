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
    
    if ($_SESSION["user_role"] != "admin") {
        header("Location:".ROOT_URL."app/index.php");
        exit();
    }
?>
<head>
    <script src="../js/funcs/generateUserName.js" defer></script>
    <script src="../js/ui/confirmDelete.js" defer></script>
    <script src="../js/funcs/validateStaffInput.js"defer></script>
    <script src="../js/ui/editWindowStaff.js"defer></script>
    <title>SP | Manage Staff</title>
</head>
<body>
    <div class="main-content">
        <!--The component to add the title-->    
        <div class="page-common-title-box">
            <h1>Manage Staff Members<span style="margin-left: 1.5rem;"></span>👨🏻</h1>
            <button class="details-btn" onclick="window.location.hash = '#popup1';"><span style="font-weight:800;font-size: 1.7rem;margin-right:2rem">+</span>Add new staff</button>
        </div>
        <!--Component to render all employees-->
        <?php require_once '../components/manage-staff/show-all-staff.php' ?>
        <!--The component which pops to add new staff-->
        <?php require_once '../components/manage-staff/add-new-staff.php' ?>
        <!--The component which pops to edit staff-->
        <?php require_once '../components/manage-staff/edit-staff.php' ?>
    </div>
    <?php check_staff_creation_errors() ?>
    <?php edit_staff_creation_errors();show_delete_success() ?>


</body>
</html>

