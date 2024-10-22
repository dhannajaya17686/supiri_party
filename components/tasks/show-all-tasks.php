<?php
// Assuming this is inside your component file

// Check the user role
if ($_SESSION["user_role"] == "admin") {
    // Admin view
    ?>
    <div class="manage-staff-box">
        <table class="party-table">
            <thead>
                <tr>
                    <th>Task Name</th>
                    <th>Due date</th>
                    <th>Remaining Dates</th>
                    <th>Party</th>
                    <th>Employee</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $task_list = get_all_tasks($conn); // Get all tasks for admin

                if (!empty($task_list)) {
                    foreach ($task_list as $task) {
                        $status_class = $task['task_status'] ? 'completed' : 'pending'; // Assuming status is boolean
                        ?>
                        <tr>
                            <td><?php echo htmlspecialchars($task['task_name']); ?></td>
                            <td><?php echo htmlspecialchars($task['date']); ?></td>
                            <td><?php echo htmlspecialchars($task['remaining_time']); ?></td>
                            <td><?php echo htmlspecialchars($task['party_name']); ?></td>
                            <td><?php echo htmlspecialchars($task['employee_name']); ?></td>
                            <td><span class="status <?php echo $status_class; ?>"></span><?php echo htmlspecialchars($task['task_status']); ?></td>
                            <td>
                                <button class="details-btn" onclick="openEditTask('<?php echo htmlspecialchars($task['task_name']); ?>', 
                                    '<?php echo htmlspecialchars($task['emp_id']); ?>', 
                                    '<?php echo htmlspecialchars($task['party_id']); ?>',
                                    '<?php echo htmlspecialchars($task['date']); ?>');window.location.hash = '#popup2';">
                                Edit
                                </button>
                                <form method="POST" style="display:inline;" action="../logic/task-logic/delete-task.logic.php" onsubmit="return confirmDelete('task','<?php echo $task['task_name']; ?>');">
                                    <input type="hidden" name="task_id" value="<?php echo htmlspecialchars($task['task_id']); ?>">
                                    <button type="submit" class="details-btn-delete">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='7'>No tasks found.</td></tr>"; // Adjusted colspan to match the number of columns
                }
            ?>
            </tbody>    
        </table>
    </div>
    <?php
} elseif ($_SESSION["user_role"] == "employee") {
    // Employee view
    ?>
    <div class="manage-staff-box">
        <form method="POST" action="../logic/task-logic/mark-tasks-done.logic.php"> 
            <table class="party-table">
                <thead>
                    <tr>
                        <th>Select</th> 
                        <th>Task Name</th>
                        <th>Due date</th>
                        <th>Remaining Dates</th>
                        <th>Party</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $task_list = get_empoloyee_specific_tasks($conn, $_SESSION["user_id"]); // Fixed function name typo

                    if (!empty($task_list)) {
                        foreach ($task_list as $task) {
                            $status_class = ($task['task_status'] == 3)? 'completed' : 'pending';
                            ?>
                            <tr>
                                <td><input type="checkbox" name="task_ids[]" value="<?php echo htmlspecialchars($task['task_id']); ?>" <?php echo ($task['task_status'] == 3) ? 'disabled' : ''; ?>></td>
                                <td><?php echo htmlspecialchars($task['task_name']); ?></td>
                                <td><?php echo htmlspecialchars($task['date']); ?></td>
                                <td><?php echo htmlspecialchars($task['remaining_time']); ?></td>
                                <td><?php echo htmlspecialchars($task['party_name']); ?></td>
                                <td><span class="status <?php echo $status_class; ?>"></span><?php echo htmlspecialchars($task['task_status']); ?></td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "<tr><td colspan='6'>No tasks found.</td></tr>"; 
                    }
                ?>
                </tbody>    
            </table>
            <button type="submit" class="btn-submit">Mark as Done</button>
        </form>
    </div>
    <?php
} else {
    echo "<div class='error'>Unauthorized access.</div>";
}
?>
