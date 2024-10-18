<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Party Details</title>
    <link rel="stylesheet" href="styles.css"> <!-- Optional CSS file -->
</head>
<body>
    <div class="container">
        <header>
            <h1>Party Details</h1>
        </header>

        <section class="party-info">
            <h2>Party Information</h2>
            <p><strong>Party Name:</strong> <span id="party-name">Birthday Bash</span></p>
            <p><strong>Customer Name:</strong> <span id="customer-name">John Doe</span></p>
            <p><strong>Party Date:</strong> <span id="party-date">2024-09-20</span></p>
            <p><strong>Location:</strong> <span id="party-location">123 Party Lane</span></p>
        </section>

        <section class="payment-history">
            <h2>Payment History</h2>
            <h2>Balance: 43343</h2>
            <table>
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2024-09-01</td>
                        <td>$500</td>
                        <td>Completed</td>
                    </tr>
                    <tr>
                        <td>2024-09-10</td>
                        <td>$200</td>
                        <td>Pending</td>
                    </tr>
                    <tr>
                        <td>2024-09-15</td>
                        <td>$300</td>
                        <td>Completed</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="assign-workers">
            <h2>Assign Workers</h2>
            <form action="../logic/assign-workers.logic.php" method="POST">
                <input type="hidden" name="party_id" value="123"> <!-- Replace with actual party ID -->
                <label for="worker">Select Worker:</label>
                <select name="worker_id" required>
                    <!-- Populate options from the database -->
                    <option value="worker1">Worker 1</option>
                    <option value="worker2">Worker 2</option>
                    <option value="worker3">Worker 3</option>
                    <!-- Add more worker options as needed -->
                </select>

                <button type="submit">Assign Worker</button>
            </form>
        </section>

        <footer>
            <button onclick="window.history.back();">Back</button>
        </footer>
    </div>
</body>
</html>
