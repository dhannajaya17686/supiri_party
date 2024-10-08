<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require_once '../config/constants.config.php';
    require_once '../includes/sessions.config.inc.php';
    require_once '../config/database.config.php';
    require_once '../includes/manage-parties/add-party/add-party.cntr.inc.php';
    require_once '../includes/manage-parties/add-party/add-party.view.inc.php';
    require_once '../includes/manage-parties/get-parties/get-all-parties.view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/funcs/generatePartyOptions.js" defer></script>
    <title>Parties</title>
</head>
<body>
<h3>Add new Parties </h3>
<form action="../logic/party-logic/add-party-admin.logic.php" method="POST">
    <label for="date">Party Date:</label>
    <input type="date" name="date" required>

    <label for="location">Party Location:</label>
    <input type="text" name="location" required>

    <label for="total_cost">Total Cost (in whole numbers):</label>
    <input type="number" name="total_cost" required>

    <label for="party_name">Party Name</label>
    <input type="text" name="party_name" required>

    <label for="party_type">Select Party Types:</label>
    <select name="party_types" id="party_type" required>
        
    </select>

    <label for="customer">Select Customer:</label>
    <select name="customer_id" required>
        <?php echo request_customer_info($conn) ?>
    </select>

    <button type="submit">Add Party</button>
</form>
<?php show_party_creation_errors() ?>
<h1>Party List </h1>
<?php echo get_all_parties($conn) ?>
</body>
</html>









