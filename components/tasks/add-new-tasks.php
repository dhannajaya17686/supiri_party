<div id="popup1" class="overlay">
            <form class="popup main-form" action="../logic/task-logic/add-task.logic.php" method="post" onsubmit="return validateTaskInput()">
                <a class="close" href="#">&times;</a>
                <div class="main-form-sub-text">Add A Task</div>
                
                <div class="main-form-input-group">  
                    <label for="task_name">Task Name:</label>
                    <input type="text" name="task_name" id="fullname" placeholder="Enter task Name" >
                    <span id="name_error" class="password-error"></span>
                </div>

                <div class="main-form-input-group">
                    <label for="party_id">Party</label>
                    <div class="" style="width:200px;">
                        <select name="party_id" id="party" class="form-control">
                        <?php
                            $parties = request_get_all_parties($conn);
                            foreach ($parties as $party) {
                                echo "<option value=\"" . $party['party_id'] . "\">" . $party['party_name'] . "</option>";
                            }
                        ?>
                        </select>
                    </div>
                    <span id="party_error" class="password-error"></span>
                </div>

                <div class="main-form-input-group">
                    <label for="employee">Employee</label>
                    <div class="emp_id" style="width:200px;">
                        <select name="emp_id" id="employee" class="form-control">
                        <?php
                            $customers = request_all_staff_detail($conn);
                            foreach ($customers as $customer) {
                                echo "<option value=\"" . $customer['emp_id'] . "\">" . $customer['fullname'] . "</option>";
                            }
                        ?>
                        </select>
                    </div>
                    <span id="employee_error" class="password-error"></span>
                </div>
                
                <div class="main-form-input-group">         
                    <label for="date">Due Date:</label>
                    <div class="main-signup-input-group">
                        <input type="date" name="date" id="party_date">
                    </div>
                    <span id="date_error" class="password-error"></span>
                </div>


                <button class="btn-submit" type="submit">Assign Task</button>
            </form>
        </div>