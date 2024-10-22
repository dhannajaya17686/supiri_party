<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once '../config/constants.config.php';
    require_once '../includes/sessions.config.inc.php';
    require_once '../config/database.config.php';
    require_once '../includes/manage-customer/add-customer/add-customer.view.inc.php';
    require_once '../includes/manage-customer/view-customer/view-customer.cntr.inc.php';
    require_once '../includes/manage-customer/edit-customer/edit-customer.view.inc.php';
    require_once '../includes/manage-customer/delete-customer/delete-customer.view.inc.php';
    require_once '../components/base.php';
    if ($_SESSION["user_role"] != "admin") {
        header("Location:".ROOT_URL."app/index.php");
        exit();
    }
?>

<head>
    <script src="../js/funcs/generateUserName.js" defer></script>
    <script src="../js/ui/confirmDelete.js" defer></script>
    <script src="../js/funcs/validateCustomerInput.js" defer></script>
    <script src="../js/ui/editWindowStaff.js" defer></script>
    <title>SP | Manage Customer</title>
</head>
<body>
    <div class="main-content">
        <!--The component to add title-->
        <div class="page-common-title-box">
            <h1>Manage Customers<span style="margin-left: 1.5rem;"></span>🧑🏼‍🤝‍🧑🏻</h1>
            <button class="details-btn" onclick="window.location.hash = '#popup1';"><span style="font-weight:800;font-size: 1.7rem;margin-right:2rem">+</span>Add new customers</button>
        </div>
        <!--Component to render all customers -->
        <?php require_once '../components/manage-customers/show-all-customers.php' ?>
        <!--The component which pops to add new customers-->
        <?php require_once '../components/manage-customers/add-new-customers.php' ?>
        <!--The component which pops to edit customers-->
        <?php require_once '../components/manage-customers/edit-customer.php' ?>
        
        <?php check_customer_creation_errors() ?>
        <?php edit_customer_creation_errors();show_customer_delete_success() ?>
    </div>
</body>
</html>

