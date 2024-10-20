<div class="upcoming-parties-admin-box">
            <div class="action-row">           
                <h3>Upcoming Parties</h3>
                <button class="details-btn">Show more</button>
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
                    <tr>
                        <td>01</td>
                        <td>Sudage Party</td>
                        <th>Birthday</th>
                        <td><img src="../assets/icons/flash-circle.png" alt="Alex Noman" class="customer-img" />Alex Noman</td>
                        <td>1 days </td>
                        <td><span class="status completed"></span> Completed</td>
                        <td>$ 35.44</td>
                        <td><button class="details-btn">Details</button></td>
                    </tr>
                    <?php
        // Assuming $conn is your database connection
        $parties = get_all_parties($conn); // Fetch parties from the function
        
        if (!empty($parties)) {
            foreach ($parties as $index => $party) {
                // Calculate the status class
                $status_class = $party['status'] ? 'completed' : 'pending';
                // Set the status text
                $status_text = $party['status'] ? 'Completed' : 'Pending';
                
                // Using heredoc syntax for cleaner HTML output
                $row = <<<HTML
                <tr>
                    <td>{sprintf('%02d', $index + 1)}</td>
                    <td>{$party['party_name']}</td>
                    <th>{$party['party_type']}</th>
                    <td><img src="../assets/icons/flash-circle.png" alt="Razib Rahman" class="customer-img" />{$party['customer_name']}</td>
                    <td>{$party['remaining_time']}</td>
                    <td><span class='status {$status_class}'></span> {$status_text}</td>
                    <td>{$party['balance']}</td>
                    <td><button class='details-btn'>Details</button></td>
                </tr>
HTML;
                echo $row; // Output the row
            }
        } else {
            echo "<tr><td colspan='8'>No parties found.</td></tr>";
        }
        ?>          
                </tbody>    
            </table>

        </div>