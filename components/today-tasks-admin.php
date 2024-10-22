<div class="assigned-tasks-admin-box">
            <div class="action-row">           
                <h3>Sunday 23 May</h3>
                <?php if ($_SESSION["user_role"] == "admin") { ?>
                    <button class="details-btn" onclick="window.location.href='<?php echo ROOT_URL . "app/tasks.php"; ?>'">Add new tasks</button>  
                </button>
                <?php } ?>
                
            </div>
            <div class="task-list">            
                <?php
                    $tasks = get_all_tasks_date_specific($conn);
                    if (!empty($tasks)) {
                        $count = 0;
                        foreach ($tasks as $index => $task) {
                            if ($count >= 4) {
                                break; // Stop after 4 rows
                            }
                            ?>
                            <div class="task-box">
                                <p class="title"><?php echo $task["task_name"]?></p>
                                <div class="detail-row">
                                    <p class="status"><?php echo $task["task_status"]?></p>
                                    <p class="assigned-to">Assigned to: <?php echo $task["employee_name"]?></p>
                                </div>
                            </div>
                            <?php
                            $count++;
                        }
                    } else {
                        echo "<tr><td colspan='8'>No parties found.</td></tr>";
                    }
                ?>
            </div>
        </div>