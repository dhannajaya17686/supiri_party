<div class="manage-staff-box">
    <table class="party-table">
        <thead>
            <tr>
                <th>Party Name</th>
                <th>Party Date</th>
                <th>Location</th>
                <th>Total Cost</th>
                <th>Balance</th>
                <th>Customer</th>
                <th>Status</th>
                <!--<th>Actions</th>-->
            </tr>
        </thead>
        <tbody>
        <?php
            $party_list = get_all_parties($conn); // Assuming get_all_parties function fetches all the party details

            if (!empty($party_list)) {
                foreach ($party_list as $party) {
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($party['party_name']); ?></td>
                        <td><?php echo htmlspecialchars($party['date']); ?></td>
                        <td><?php echo htmlspecialchars($party['location']); ?></td>
                        <td><?php echo htmlspecialchars($party['total_cost']); ?></td>
                        <td><?php echo htmlspecialchars($party['balance']); ?></td>
                        <td><?php echo htmlspecialchars($party['customer_name']); ?></td>
                        <td><?php echo htmlspecialchars($party['status_text']); ?></td>
                        <!--<td>
                            <button class="details-btn" onclick="openEditParty('<?php echo htmlspecialchars($party['party_id']); ?>', 
                                '<?php echo htmlspecialchars($party['party_name']); ?>', 
                                '<?php echo htmlspecialchars($party['date']); ?>', 
                                '<?php echo htmlspecialchars($party['location']); ?>', 
                                '<?php echo htmlspecialchars($party['total_cost']); ?>', 
                                '<?php echo htmlspecialchars($party['balance']); ?>');window.location.hash = '#popup2';">
                            Edit
                            </button>
                            <form method="POST" action="../logic/party-logic/delete-party.logic.php" style="display:inline;" onsubmit="return confirmDelete('party', '<?php echo $party['party_name']; ?>');">
                                <input type="hidden" name="party_id" value="<?php echo htmlspecialchars($party['party_id']); ?>">
                                <button type="submit" class="details-btn-delete">Delete</button>
                            </form>-->
                        </td>
                    </tr>
                    <?php
                }
            } else {
                echo "<tr><td colspan='8'>No parties found.</td></tr>";
            }
        ?>
        </tbody>
    </table>
</div>
