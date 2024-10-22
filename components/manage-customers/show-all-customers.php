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
                    
                    $customer_list = request_all_customer_detail($conn);

                    if (!empty($customer_list)) {
                        $count = 0;
                        foreach ($customer_list as $index => $customer) {
                            ?>
                            <tr>
                                <td><?php echo htmlspecialchars($customer['username']); ?></td>
                                <td><?php echo htmlspecialchars($customer['email']); ?></td>
                                <td><?php echo htmlspecialchars($customer['phone']); ?></td>
                                <td><?php echo htmlspecialchars($customer['fullname']); ?></td>
                                <td>
                                    <button class="details-btn" onclick="openEditCustomer('<?php echo htmlspecialchars($customer['username']); ?>', 
                                        '<?php echo htmlspecialchars($customer['email']); ?>', 
                                        '<?php echo htmlspecialchars($customer['phone']); ?>', 
                                        '<?php echo htmlspecialchars($customer['fullname']); ?>');window.location.hash = '#popup2';">
                                    Edit
                                    </button>
                                    <form method="POST" style="display:inline;" action="../logic/customer-logic/delete-customer.logic.php" style="display:inline;" onsubmit="return confirmDelete('customer','<?php echo $customer['username']; ?>');">
                                        <input type="hidden" name="username" value="<?php echo htmlspecialchars($customer['username']); ?>">
                                        <button type="submit" class="details-btn-delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                            $count++;
                        }
                    } else {
                        echo "<tr><td colspan='8'>No customrs found.</td></tr>";
                    }
                ?>
      
                </tbody>    
            </table>
        </div>