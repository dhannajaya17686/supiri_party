<div class="upcoming-parties-admin-box">
            <div class="action-row">           
                <h3>Upcoming Parties</h3>
                <button class="details-btn" onclick="window.location.href='<?php echo ROOT_URL . "app/parties.php"; ?>'">Add new tasks</button>
            </div>       
            <table class="party-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Party Name</th>
                        <th>Party Type</th>
                        <th>Customer</th>
                        <th>Remaing Time</th>
                        <th>Status</th>
                        <th>Balance</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    $parties = request_get_all_parties($conn);

                    if (!empty($parties)) {
                        $count = 0;
                        foreach ($parties as $index => $party) {
                            if ($count >= 3) {
                                break; // Stop after 3 rows
                            }
                            $status_class = $party['status'] ? 'completed' : 'pending';
                            $status_text = $party['status'] ? 'Completed' : 'Pending';
                            ?>
                            <tr>
                                <td><?php echo $index + 1; ?></td>
                                <td><?php echo $party['party_name']; ?></td>
                                <td><?php echo $party['party_type']; ?></td>
                                <td><img src="../assets/icons/flash-circle.png" alt="Razib Rahman" class="customer-img" /> <?php echo $party['customer_name']; ?></td>
                                <td><?php echo $party['remaining_time']; ?></td>
                                <td><span class="status <?php echo $status_class; ?>"></span> <?php echo $status_text; ?></td>
                                <td><?php echo $party['balance']; ?></td>
                                <td><button class="details-btn">Details</button></td>
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