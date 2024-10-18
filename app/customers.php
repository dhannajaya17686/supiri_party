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
    <title>Manage Customer</title>
</head>
<body>
<button class="btn-open-popup" onclick="toggleCusPopup()">
      Add new Customers
      </button>

      
      <div id="popupCusOverlay" class="overlay-container ">
        <div class="popup-box">
            <h2 style="color: green;">Add  Customers </h2>
            <form class="form-container" id="cus-id" action="../logic/customer-logic/add-customer.logic.php" method="post">
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
                <button class="btn-close-popup" onclick="toggleCusPopup()">Close</button>
            </form>
        </div>
    </div>
    <?php check_customer_creation_errors() ?>

    <?php $customer_list = request_all_customer_detail($conn);
    ?>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Full Name</th>
            <th>Actions</th>
        </tr>      
        <?php foreach ($customer_list as $customer) { ?>
            <tr>
                <td><?php echo htmlspecialchars($customer['username']); ?></td>
                <td><?php echo htmlspecialchars($customer['email']); ?></td>
                <td><?php echo htmlspecialchars($customer['phone']); ?></td>
                <td><?php echo htmlspecialchars($customer['fullname']); ?></td>
                
                <td>
                    <button class="edit-btn" onclick="openEditCustomer('<?php echo htmlspecialchars($customer['username']); ?>', '<?php echo htmlspecialchars($customer['email']); ?>', '<?php echo htmlspecialchars($customer['phone']); ?>', '<?php echo htmlspecialchars($customer['fullname']); ?>')">Edit</button>
                    <form method="POST" action="../logic/customer-logic/delete-customer.logic.php" style="display:inline;" onsubmit="return confirmDelete('<?php echo $customer['username']; ?>');">
                        <input type="hidden" name="username" value="<?php echo htmlspecialchars($customer['username']); ?>">
                        <button type="submit" class="delete-btn">Delete</button>
                    </form>
                </td>
            </tr>
        <?php } ?>
        
        
    </table>
    <?php?>

    <!-- Pop-up Edit Form (Hidden by default) -->
    <h2>Edit Customer</h2>
            <form id="editFormcustomer" method="post" action="../logic/customer-logic/edit-customer.logic.php">
                <input type="hidden" id="edit-username" name="username">
                
                <label for="edit-email">Email:</label>
                <input type="email" id="edit-email" name="email" required>

                <label for="edit-phone">Phone:</label>
                <input type="tel" id="edit-phone" name="phone" required>

                <label for="edit-fullname">Full Name:</label>
                <input type="text" id="edit-fullname" name="fullname" required>

                <button type="submit">Save Changes</button>
            </form>
        <?php edit_customer_creation_errors();show_customer_delete_success() ?>

</body>
</html>

