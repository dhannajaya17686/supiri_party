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