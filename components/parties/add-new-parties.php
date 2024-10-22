<div id="popup1" class="overlay">
    <form class="popup main-form" action="../logic/party-logic/add-party-admin.logic.php" method="POST">
        <a class="close" href="#">&times;</a>
        <div class="main-form-sub-text">Add Party</div>
        
        <div class="main-form-input-group">  
            <label for="date">Party Date:</label>
            <input type="date" name="date" id="date" required>
            <span id="date_error" class="password-error"></span>
        </div>

        <div class="main-form-input-group">  
            <label for="location">Party Location:</label>
            <input type="text" name="location" id="location" placeholder="Enter Party Location" required>
            <span id="location_error" class="password-error"></span>
        </div>

        <div class="main-form-input-group">  
            <label for="total_cost">Total Cost (in whole numbers):</label>
            <input type="number" name="total_cost" id="total_cost" placeholder="Enter Total Cost" required>
            <span id="cost_error" class="password-error"></span>
        </div>

        <div class="main-form-input-group">  
            <label for="party_name">Party Name:</label>
            <input type="text" name="party_name" id="party_name" placeholder="Enter Party Name" required>
            <span id="party_name_error" class="password-error"></span>
        </div>

        <div class="main-form-input-group">  
            <label for="party_type">Select Party Types:</label>
            <select name="party_types" id="party_type" required>
                <!-- Options will be populated here -->
            </select>
            <span id="party_type_error" class="password-error"></span>
        </div>

        <div class="main-form-input-group">  
            <label for="customer">Select Customer:</label>
            <select name="customer_id" id="customer" required>
                <?php echo request_customer_info($conn); ?>
            </select>
            <span id="customer_error" class="password-error"></span>
        </div>

        <button class="btn-submit" type="submit">Add Party</button>
    </form>
</div>
