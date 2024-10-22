<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once '../config/constants.config.php';
    require_once '../includes/sessions.config.inc.php';
    require_once '../config/database.config.php';
    require_once '../components/base.php';
    require_once '../includes/manage-parties/add-party/add-party.cntr.inc.php';
    require_once '../includes/manage-parties/add-party/add-party.view.inc.php';
?>

<head>
    <script src="../js/funcs/generatePartyOptions.js" defer></script>
    <title>SP | Parties</title>
</head>
<body>
    <div class="main-content">
        <div class="page-common-title-box">
            <h1>Manage Parties<span style="margin-left: 1.5rem;"></span>🗳️</h1>
            <?php if ($_SESSION["user_role"] == "admin") { ?>
                <button class="details-btn" onclick="window.location.hash = '#popup1';">
                    <span style="font-weight:800;font-size: 1.7rem;margin-right:2rem">+</span>
                    Assign New Parties
                </button>
            <?php } ?>
        </div>

        <!--The component to add parties -->
        <?php require_once '../components/parties/add-new-parties.php' ?>
        <!--SHow all the details-->
        <?php require_once '../components/parties/get-all-parties.php' ?>
    </div>
    <?php show_party_creation_errors() ?>





