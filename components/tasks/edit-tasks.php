<div id="popup2" class="overlay">
    <form class="popup main-form" action="../logic/task-logic/edit-task.logic.php" method="post">
        <a class="close" href="#">&times;</a>
        <div class="main-form-sub-text">Edit Task</div>

        <!-- Task Name -->
        <div class="main-form-input-group">  
            <label for="edit-taskname">Task Name:</label>
            <input type="text" name="task_name" id="edit-taskname" placeholder="Enter task Name" required >
            <span id="name_error" class="password-error"></span>
        </div>

        <div class="main-form-input-group">
            <label for="edit-party_id">Party</label>
            <div class="" style="width:200px;">
                <select name="party_id" id="edit-party_id" class="form-control">
                <?php
                    $parties = request_get_all_parties($conn);
                        foreach ($parties as $party) {
                                echo "<option value=\"" . $party['party_id'] . "\"required>" . $party['party_name'] . "</option>";
                        }
                    ?>
                </select>
            </div>
            <span id="party_error" class="password-error"></span>
        </div>
        <!-- Employee ID -->
        <div class="main-form-input-group">
            <label for="edit-emp_id">Assigned To:</label>
            <div class="" style="width:200px;">
                <select name="emp_id" id="edit-emp_id" class="form-control">
                <?php
                    $customers = request_all_staff_detail($conn);
                    foreach ($customers as $customer) {
                        echo "<option value=\"" . $customer['emp_id'] . "\"required>" . $customer['fullname'] . "</option>";
                    }
                ?>
                    
                </select>
            </div>
            <span id="employee_error" class="password-error"></span>
        </div>

        <!-- Date -->
        <div class="main-form-input-group">         
                    <label for="edit-date">Due Date:</label>
                    <div class="main-signup-input-group">
                        <input type="date" name="date" id="edit-date" required>
                    </div>
                    <span id="date_error" class="password-error"></span>
        </div>

        <button class="btn-submit" ="submit">Save Changes</button>
    </form>
</div>
