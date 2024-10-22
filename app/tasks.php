<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once '../components/base.php';
    require_once '../includes/manage-staff/view-staff.cntr.inc.php';
    require_once '../includes/manage-tasks/get-tasks/get-all-tasks.cntr.inc.php';
    require_once '../includes/manage-tasks/edit-tasks/edit-tasks.cntr.inc.php';
    require_once '../includes/manage-tasks/edit-tasks/edit-tasks.view.inc.php';
?>

<head>
    <script src="../js/funcs/validateTaskInput.js"></script>
    <script src="../js/funcs/validateEditTaskInput.js"></script>
    <script src="../js/ui/confirmDelete.js"></script>
    <script src="../js/funcs/editWindowTask.js"></script>
    <title>SP | Tasks</title>
</head>

<body>
    <div class="main-content">
        <div class="page-common-title-box">
            <h1>Manage Tasks<span style="margin-left: 1.5rem;"></span>🗳️</h1>
            <button class="details-btn" onclick="window.location.hash = '#popup1';"><span style="font-weight:800;font-size: 1.7rem;margin-right:2rem">+</span>Assign New Tasks</button>
        </div>
        <!--Component to add new tasks-->
        <?php require_once '../components/tasks/add-new-tasks.php' ?>
        <!--Compomemnt to view all tasks-->
        <?php require_once '../components/tasks/show-all-tasks.php' ?>
        <!--Component to edit tasks -->
        <?php require_once '../components/tasks/edit-tasks.php' ?>
        <?php edit_task_editing_errors()  ?>
    </div>
</body>