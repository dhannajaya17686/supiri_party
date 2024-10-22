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
                    
                    $task_list = get_all_tasks($conn);

                    if (!empty($task_list)) {
                        $count = 0;
                        foreach ($task_list as $index => $task) {
                            $status_class = $party['status'] ? 'completed' : 'pending';
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
                                    <form method="POST" style="display:inline;" action="../logic/task-logic/delete-task.logic.php" style="display:inline;" onsubmit="return confirmDelete('task','<?php echo $task['task_name']; ?>');">
                                        <input type="hidden" name="task_id" value="<?php echo htmlspecialchars($task['task_id']); ?>">
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